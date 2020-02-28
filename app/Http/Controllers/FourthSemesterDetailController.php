<?php

namespace App\Http\Controllers;

use App\Fields\FourthSemesterDetailFields;
use App\Fields\FourthSemesterResultStatusDetailFields;
use App\FourthSemesterDetail;
use App\FourthSemesterResultStatusDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FourthSemesterDetailController extends Controller
{
    public function post(Request $request)
    {
        $params = $request->all();

        $cell_status = Arr::get($params, FourthSemesterDetailFields::CELL_STATUS);

        $cell_date_explode = explode('/',Arr::get($params,FourthSemesterDetailFields::CELL_DATE));
        if(count($cell_date_explode) == 3)
            $cell_date = Carbon::createFromDate($cell_date_explode[2],$cell_date_explode[1],$cell_date_explode[0])->format('Y-m-d');
        else
            $cell_date = Arr::get($params, FourthSemesterDetailFields::CELL_DATE);

        $pwwb_status = Arr::get($params, FourthSemesterDetailFields::PWWB_STATUS);

        $pwwb_date_explode = explode('/',Arr::get($params,FourthSemesterDetailFields::PWWB_DATE));
        if(count($pwwb_date_explode) == 3)
            $pwwb_date = Carbon::createFromDate($pwwb_date_explode[2],$pwwb_date_explode[1],$pwwb_date_explode[0])->format('Y-m-d');
        else
            $pwwb_date = Arr::get($params, FourthSemesterDetailFields::PWWB_DATE);

        $diary_pwwb = Arr::get($params, FourthSemesterDetailFields::DIARY_PWWB);
        $amount_claim_due = Arr::get($params, FourthSemesterDetailFields::AMOUNT_CLAIM_DUE);
        $amount_received = Arr::get($params, FourthSemesterDetailFields::AMOUNT_RECEIVED);

        $exam_status = Arr::get($params, FourthSemesterDetailFields::EXAM_STATUS);

        $claim_date_explode = explode('/',Arr::get($params,FourthSemesterDetailFields::CLAIM_DATE));
        if(count($claim_date_explode) == 3)
            $claim_date = Carbon::createFromDate($claim_date_explode[2],$claim_date_explode[1],$claim_date_explode[0])->format('Y-m-d');
        else
            $claim_date = Arr::get($params, FourthSemesterDetailFields::CLAIM_DATE);

        $claim_status = Arr::get($params, FourthSemesterDetailFields::CLAIM_STATUS);
        $roll_no = Arr::get($params, FourthSemesterDetailFields::ROLL_NO);

        $exam_date_explode = explode('/',Arr::get($params,FourthSemesterDetailFields::EXAM_DATE));
        if(count($exam_date_explode) == 3)
            $exam_date = Carbon::createFromDate($exam_date_explode[2],$exam_date_explode[1],$exam_date_explode[0])->format('Y-m-d');
        else
            $exam_date = Arr::get($params, FourthSemesterDetailFields::EXAM_DATE);

        $amount = Arr::get($params, FourthSemesterDetailFields::AMOUNT);

        //Result Status Details
        $result = Arr::get($params,FourthSemesterResultStatusDetailFields::RESULT);
        $fail = Arr::get($params,FourthSemesterResultStatusDetailFields::FAIL);
        $next_appearance = Arr::get($params,FourthSemesterResultStatusDetailFields::NEXT_APPEARANCE);
        $next_appearance_date = Arr::get($params,FourthSemesterResultStatusDetailFields::NEXT_APPEARANCE_DATE);
        $last_chance_date = Arr::get($params,FourthSemesterResultStatusDetailFields::LAST_CHANCE_DATE);
        $passing_date = Arr::get($params,FourthSemesterResultStatusDetailFields::PASSING_DATE);

        $index_id = Arr::get($params, 'index_id');
        if(!$index_id) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }

        $fourthSemesterDetail = FourthSemesterDetail::where(FourthSemesterDetailFields::INDEX_TABLE_ID,$index_id)->first();
        if(!$fourthSemesterDetail){
            $fourthSemesterDetail = new FourthSemesterDetail();
        }

        $fourthSemesterDetail->index_table_id = $index_id;
        $fourthSemesterDetail->cell_status = $cell_status;
        $fourthSemesterDetail->cell_date = $cell_date;
        $fourthSemesterDetail->pwwb_status = $pwwb_status;
        $fourthSemesterDetail->pwwb_date = $pwwb_date;
        $fourthSemesterDetail->diary_pwwb = $diary_pwwb;
        $fourthSemesterDetail->amount_claim_due = $amount_claim_due;
        $fourthSemesterDetail->exam_status = $exam_status;
        $fourthSemesterDetail->amount_received = $amount_received;
        $fourthSemesterDetail->roll_no = $roll_no;
        $fourthSemesterDetail->claim_date = $claim_date;
        $fourthSemesterDetail->claim_status = $claim_status;
        $fourthSemesterDetail->exam_date = $exam_date;
        $fourthSemesterDetail->amount = $amount;
        $fourthSemesterDetail->save();


        if (!$index_id) {
            for ($i = 0; $i < count($result); $i++) {
                $fourthSemesterResultStatusDetail = new FourthSemesterResultStatusDetail();
                $this->fillFourthSemesterResultStatusDetailData($i, $fourthSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
            }
        } else {
            $j = 0;
            foreach (FourthSemesterResultStatusDetail::where('index_table_id', $index_id)->get() as $fourthSemesterResultStatusDetail) {
                $fourthSemesterResultStatusDetailSingle = FourthSemesterResultStatusDetail::find($fourthSemesterResultStatusDetail->id);
                $this->fillFourthSemesterResultStatusDetailData($j, $fourthSemesterResultStatusDetailSingle, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                $j++;
            }
            if ($j < count($result)) {
                for ($k = $j; $k < count($result); $k++) {
                    $fourthSemesterResultStatusDetail = new FourthSemesterResultStatusDetail();
                    $this->fillFourthSemesterResultStatusDetailData($k, $fourthSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                }
            }
        }

        return response()->json([
            'message' => 'Saved Successfully',
        ], 200);
    }

    private function fillFourthSemesterResultStatusDetailData($index,$fourthSemesterResultStatusDetailObject,$index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date){
        $fourthSemesterResultStatusDetailObject->index_table_id = $index_id;
        $fourthSemesterResultStatusDetailObject->result = isset($result[$index]) ? $result[$index] : null;
        $fourthSemesterResultStatusDetailObject->fail = isset($fail[$index]) ? $fail[$index] : null;
        $fourthSemesterResultStatusDetailObject->next_appearance = isset($next_appearance[$index]) ? $next_appearance[$index] : null;
        $NextAppearance = null;
        if(isset($next_appearance_date[$index])){
            $NextAppearanceExplode = explode('/',$next_appearance_date[$index]);
            if(count($NextAppearanceExplode) == 3)
                $NextAppearance = Carbon::createFromDate($NextAppearanceExplode[2],$NextAppearanceExplode[1],$NextAppearanceExplode[0])->format('Y-m-d');
            else
                $NextAppearance = $next_appearance_date[$index];
        }
        $fourthSemesterResultStatusDetailObject->next_appearance_date = $NextAppearance;

        $LastChance = null;
        if(isset($last_chance_date[$index])){
            $LastChanceExplode = explode('/',$last_chance_date[$index]);
            if(count($LastChanceExplode) == 3)
                $LastChance = Carbon::createFromDate($LastChanceExplode[2],$LastChanceExplode[1],$LastChanceExplode[0])->format('Y-m-d');
            else
                $LastChance = $last_chance_date[$index];
        }
        $fourthSemesterResultStatusDetailObject->last_chance_date = $LastChance;

        $Passing = null;
        if(isset($passing_date[$index])){
            $PassingExplode = explode('/',$passing_date[$index]);
            if(count($PassingExplode) == 3)
                $Passing = Carbon::createFromDate($PassingExplode[2],$PassingExplode[1],$PassingExplode[0])->format('Y-m-d');
            else
                $Passing = $passing_date[$index];
        }
        $fourthSemesterResultStatusDetailObject->passing_date = $Passing;
        $fourthSemesterResultStatusDetailObject->save();
    }

    public function deleteFourthSemesterResultStatusDetail(Request $request){
        $params = $request->all();
        $id = Arr::get($params,FourthSemesterResultStatusDetailFields::ID);
        $indexId = Arr::get($params,'index_id');
        $object = FourthSemesterResultStatusDetail::where('id',$id)->where('index_table_id',$indexId);
        if($object->first()){
            $object->delete();
        }
        return response()->json([
            'message' => 'deleted'
        ],200);
    }
}
