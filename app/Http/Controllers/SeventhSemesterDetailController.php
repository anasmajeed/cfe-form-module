<?php

namespace App\Http\Controllers;

use App\Fields\SeventhSemesterDetailFields;
use App\Fields\SeventhSemesterResultStatusDetailFields;
use App\SeventhSemesterDetail;
use App\SeventhSemesterResultStatusDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SeventhSemesterDetailController extends Controller
{
    public function post(Request $request)
    {
        $params = $request->all();

        $cell_status = Arr::get($params, SeventhSemesterDetailFields::CELL_STATUS);

        $cell_date_explode = explode('/',Arr::get($params,SeventhSemesterDetailFields::CELL_DATE));
        if(count($cell_date_explode) == 3)
            $cell_date = Carbon::createFromDate($cell_date_explode[2],$cell_date_explode[1],$cell_date_explode[0])->format('Y-m-d');
        else
            $cell_date = Arr::get($params, SeventhSemesterDetailFields::CELL_DATE);
        $pwwb_status = Arr::get($params, SeventhSemesterDetailFields::PWWB_STATUS);

        $pwwb_date_explode = explode('/',Arr::get($params,SeventhSemesterDetailFields::PWWB_DATE));
        if(count($pwwb_date_explode) == 3)
            $pwwb_date = Carbon::createFromDate($pwwb_date_explode[2],$pwwb_date_explode[1],$pwwb_date_explode[0])->format('Y-m-d');
        else
            $pwwb_date = Arr::get($params, SeventhSemesterDetailFields::PWWB_DATE);

        $diary_pwwb = Arr::get($params, SeventhSemesterDetailFields::DIARY_PWWB);
        $amount_claim_due = Arr::get($params, SeventhSemesterDetailFields::AMOUNT_CLAIM_DUE);
        $amount_received = Arr::get($params, SeventhSemesterDetailFields::AMOUNT_RECEIVED);
        $exam_status = Arr::get($params, SeventhSemesterDetailFields::EXAM_STATUS);

        $claim_date_explode = explode('/',Arr::get($params,SeventhSemesterDetailFields::CLAIM_DATE));
        if(count($claim_date_explode) == 3)
            $claim_date = Carbon::createFromDate($claim_date_explode[2],$claim_date_explode[1],$claim_date_explode[0])->format('Y-m-d');
        else
            $claim_date = Arr::get($params, SeventhSemesterDetailFields::CLAIM_DATE);
        $claim_status = Arr::get($params, SeventhSemesterDetailFields::CLAIM_STATUS);
        $roll_no = Arr::get($params, SeventhSemesterDetailFields::ROLL_NO);

        $exam_date_explode = explode('/',Arr::get($params,SeventhSemesterDetailFields::EXAM_DATE));
        if(count($exam_date_explode) == 3)
            $exam_date = Carbon::createFromDate($exam_date_explode[2],$exam_date_explode[1],$exam_date_explode[0])->format('Y-m-d');
        else
            $exam_date = Arr::get($params, SeventhSemesterDetailFields::EXAM_DATE);
        $amount = Arr::get($params, SeventhSemesterDetailFields::AMOUNT);

        //Result Status Details
        $result = Arr::get($params,SeventhSemesterResultStatusDetailFields::RESULT);
        $fail = Arr::get($params,SeventhSemesterResultStatusDetailFields::FAIL);
        $next_appearance = Arr::get($params,SeventhSemesterResultStatusDetailFields::NEXT_APPEARANCE);
        
        $next_appearance_date_explode = explode('/',Arr::get($params,SeventhSemesterResultStatusDetailFields::NEXT_APPEARANCE_DATE));
        if(count($next_appearance_date_explode) == 3)
            $next_appearance_date = Carbon::createFromDate($next_appearance_date_explode[2],$next_appearance_date_explode[1],$next_appearance_date_explode[0])->format('Y-m-d');
        else
            $next_appearance_date = Arr::get($params,SeventhSemesterResultStatusDetailFields::NEXT_APPEARANCE_DATE);

        $last_chance_date_explode = explode('/',Arr::get($params,SeventhSemesterResultStatusDetailFields::LAST_CHANCE_DATE));
        if(count($last_chance_date_explode) == 3)
            $last_chance_date = Carbon::createFromDate($last_chance_date_explode[2],$last_chance_date_explode[1],$last_chance_date_explode[0])->format('Y-m-d');
        else
            $last_chance_date = Arr::get($params,SeventhSemesterResultStatusDetailFields::LAST_CHANCE_DATE);

        $passing_date_explode = explode('/',Arr::get($params,SeventhSemesterResultStatusDetailFields::PASSING_DATE));
        if(count($passing_date_explode) == 3)
            $passing_date = Carbon::createFromDate($passing_date_explode[2],$passing_date_explode[1],$passing_date_explode[0])->format('Y-m-d');
        else
            $passing_date = Arr::get($params,SeventhSemesterResultStatusDetailFields::PASSING_DATE);

        $index_id = Arr::get($params, 'index_id');
        if(!$index_id) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }

        $seventhSemesterDetail = SeventhSemesterDetail::where(SeventhSemesterDetailFields::INDEX_TABLE_ID,$index_id)->first();
        if(!$seventhSemesterDetail){
            $seventhSemesterDetail = new SeventhSemesterDetail();
        }

        $seventhSemesterDetail->index_table_id = $index_id;
        $seventhSemesterDetail->cell_status = $cell_status;
        $seventhSemesterDetail->cell_date = $cell_date;
        $seventhSemesterDetail->pwwb_status = $pwwb_status;
        $seventhSemesterDetail->pwwb_date = $pwwb_date;
        $seventhSemesterDetail->diary_pwwb = $diary_pwwb;
        $seventhSemesterDetail->amount_claim_due = $amount_claim_due;
        $seventhSemesterDetail->exam_status = $exam_status;
        $seventhSemesterDetail->amount_received = $amount_received;
        $seventhSemesterDetail->roll_no = $roll_no;
        $seventhSemesterDetail->claim_date = $claim_date;
        $seventhSemesterDetail->claim_status = $claim_status;
        $seventhSemesterDetail->exam_date = $exam_date;
        $seventhSemesterDetail->amount = $amount;
        $seventhSemesterDetail->save();


        if (!$index_id) {
            for ($i = 0; $i < count($result); $i++) {
                $seventhSemesterResultStatusDetail = new SeventhSemesterResultStatusDetail();
                $this->fillSeventhSemesterResultStatusDetailData($i, $seventhSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
            }
        } else {
            $j = 0;
            foreach (SeventhSemesterResultStatusDetail::where('index_table_id', $index_id)->get() as $seventhSemesterResultStatusDetail) {
                $seventhSemesterResultStatusDetailSingle = SeventhSemesterResultStatusDetail::find($seventhSemesterResultStatusDetail->id);
                $this->fillSeventhSemesterResultStatusDetailData($j, $seventhSemesterResultStatusDetailSingle, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                $j++;
            }
            if ($j < count($result)) {
                for ($k = $j; $k < count($result); $k++) {
                    $seventhSemesterResultStatusDetail = new SeventhSemesterResultStatusDetail();
                    $this->fillSeventhSemesterResultStatusDetailData($k, $seventhSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                }
            }
        }

        return response()->json([
            'message' => 'Saved Successfully',
        ], 200);
    }

    private function fillSeventhSemesterResultStatusDetailData($index,$seventhSemesterResultStatusDetailObject,$index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date){
        $seventhSemesterResultStatusDetailObject->index_table_id = $index_id;
        $seventhSemesterResultStatusDetailObject->result = isset($result[$index]) ? $result[$index] : null;
        $seventhSemesterResultStatusDetailObject->fail = isset($fail[$index]) ? $fail[$index] : null;
        $seventhSemesterResultStatusDetailObject->next_appearance = isset($next_appearance[$index]) ? $next_appearance[$index] : null;
        $NextAppearance = null;
        if(isset($next_appearance_date[$index])){
            $NextAppearanceExplode = explode('/',$next_appearance_date[$index]);
            if(count($NextAppearanceExplode) == 3)
                $NextAppearance = Carbon::createFromDate($NextAppearanceExplode[2],$NextAppearanceExplode[1],$NextAppearanceExplode[0])->format('Y-m-d');
            else
                $NextAppearance = $next_appearance_date[$index];
        }
        $seventhSemesterResultStatusDetailObject->next_appearance_date = $NextAppearance;

        $LastChance = null;
        if(isset($last_chance_date[$index])){
            $LastChanceExplode = explode('/',$last_chance_date[$index]);
            if(count($LastChanceExplode) == 3)
                $LastChance = Carbon::createFromDate($LastChanceExplode[2],$LastChanceExplode[1],$LastChanceExplode[0])->format('Y-m-d');
            else
                $LastChance = $last_chance_date[$index];
        }
        $seventhSemesterResultStatusDetailObject->last_chance_date = $LastChance;

        $Passing = null;
        if(isset($passing_date[$index])){
            $PassingExplode = explode('/',$passing_date[$index]);
            if(count($PassingExplode) == 3)
                $Passing = Carbon::createFromDate($PassingExplode[2],$PassingExplode[1],$PassingExplode[0])->format('Y-m-d');
            else
                $Passing = $passing_date[$index];
        }
        $seventhSemesterResultStatusDetailObject->passing_date = $Passing;
        $seventhSemesterResultStatusDetailObject->save();
    }

    public function deleteSeventhSemesterResultStatusDetail(Request $request){
        $params = $request->all();
        $id = Arr::get($params,SeventhSemesterResultStatusDetailFields::ID);
        $indexId = Arr::get($params,'index_id');
        $object = SeventhSemesterResultStatusDetail::where('id',$id)->where('index_table_id',$indexId);
        if($object->first()){
            $object->delete();
        }
        return response()->json([
            'message' => 'deleted'
        ],200);
    }
}
