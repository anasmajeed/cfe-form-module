<?php

namespace App\Http\Controllers;

use App\Fields\FifthSemesterDetailFields;
use App\Fields\FifthSemesterResultStatusDetailFields;
use App\FifthSemesterDetail;
use App\FifthSemesterResultStatusDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FifthSemesterDetailController extends Controller
{
    public function post(Request $request)
    {
        $params = $request->all();

        $cell_status = Arr::get($params, FifthSemesterDetailFields::CELL_STATUS);

        $cell_date_explode = explode('/',Arr::get($params,FifthSemesterDetailFields::CELL_DATE));
        if(count($cell_date_explode) == 3)
            $cell_date = Carbon::createFromDate($cell_date_explode[2],$cell_date_explode[1],$cell_date_explode[0])->format('Y-m-d');
        else
            $cell_date = Arr::get($params, FifthSemesterDetailFields::CELL_DATE);

        $pwwb_status = Arr::get($params, FifthSemesterDetailFields::PWWB_STATUS);

        $pwwb_date_explode = explode('/',Arr::get($params,FifthSemesterDetailFields::PWWB_DATE));
        if(count($pwwb_date_explode) == 3)
            $pwwb_date = Carbon::createFromDate($pwwb_date_explode[2],$pwwb_date_explode[1],$pwwb_date_explode[0])->format('Y-m-d');
        else
            $pwwb_date = Arr::get($params, FifthSemesterDetailFields::PWWB_DATE);


        $diary_pwwb = Arr::get($params, FifthSemesterDetailFields::DIARY_PWWB);
        $amount_claim_due = Arr::get($params, FifthSemesterDetailFields::AMOUNT_CLAIM_DUE);
        $amount_received = Arr::get($params, FifthSemesterDetailFields::AMOUNT_RECEIVED);
        $exam_status = Arr::get($params, FifthSemesterDetailFields::EXAM_STATUS);

        $claim_date_explode = explode('/',Arr::get($params,FifthSemesterDetailFields::CLAIM_DATE));
        if(count($claim_date_explode) == 3)
            $claim_date = Carbon::createFromDate($claim_date_explode[2],$claim_date_explode[1],$claim_date_explode[0])->format('Y-m-d');
        else
            $claim_date = Arr::get($params, FifthSemesterDetailFields::CLAIM_DATE);

        $claim_status = Arr::get($params, FifthSemesterDetailFields::CLAIM_STATUS);
        $roll_no = Arr::get($params, FifthSemesterDetailFields::ROLL_NO);

        $exam_date_explode = explode('/',Arr::get($params,FifthSemesterDetailFields::EXAM_DATE));
        if(count($exam_date_explode) == 3)
            $exam_date = Carbon::createFromDate($exam_date_explode[2],$exam_date_explode[1],$exam_date_explode[0])->format('Y-m-d');
        else
            $exam_date = Arr::get($params, FifthSemesterDetailFields::EXAM_DATE);

        $amount = Arr::get($params, FifthSemesterDetailFields::AMOUNT);

        //Result Status Details
        $result = Arr::get($params,FifthSemesterResultStatusDetailFields::RESULT);
        $fail = Arr::get($params,FifthSemesterResultStatusDetailFields::FAIL);
        $next_appearance = Arr::get($params,FifthSemesterResultStatusDetailFields::NEXT_APPEARANCE);
        $next_appearance_date = Arr::get($params,FifthSemesterResultStatusDetailFields::NEXT_APPEARANCE_DATE);
        $last_chance_date = Arr::get($params,FifthSemesterResultStatusDetailFields::LAST_CHANCE_DATE);
        $passing_date = Arr::get($params,FifthSemesterResultStatusDetailFields::PASSING_DATE);


        $index_id = Arr::get($params, 'index_id');
        if(!$index_id) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }

        $fifthSemesterDetail = FifthSemesterDetail::where(FifthSemesterDetailFields::INDEX_TABLE_ID,$index_id)->first();
        if(!$fifthSemesterDetail){
            $fifthSemesterDetail = new FifthSemesterDetail();
        }

        $fifthSemesterDetail->index_table_id = $index_id;
        $fifthSemesterDetail->cell_status = $cell_status;
        $fifthSemesterDetail->cell_date = $cell_date;
        $fifthSemesterDetail->pwwb_status = $pwwb_status;
        $fifthSemesterDetail->pwwb_date = $pwwb_date;
        $fifthSemesterDetail->diary_pwwb = $diary_pwwb;
        $fifthSemesterDetail->amount_claim_due = $amount_claim_due;
        $fifthSemesterDetail->exam_status = $exam_status;
        $fifthSemesterDetail->amount_received = $amount_received;
        $fifthSemesterDetail->roll_no = $roll_no;
        $fifthSemesterDetail->claim_date = $claim_date;
        $fifthSemesterDetail->claim_status = $claim_status;
        $fifthSemesterDetail->exam_date = $exam_date;
        $fifthSemesterDetail->amount = $amount;
        $fifthSemesterDetail->save();


        if (!$index_id) {
            for ($i = 0; $i < count($result); $i++) {
                $fifthSemesterResultStatusDetail = new FifthSemesterResultStatusDetail();
                $this->fillFifthSemesterResultStatusDetailData($i, $fifthSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
            }
        } else {
            $j = 0;
            foreach (FifthSemesterResultStatusDetail::where('index_table_id', $index_id)->get() as $fifthSemesterResultStatusDetail) {
                $fifthSemesterResultStatusDetailSingle = FifthSemesterResultStatusDetail::find($fifthSemesterResultStatusDetail->id);
                $this->fillFifthSemesterResultStatusDetailData($j, $fifthSemesterResultStatusDetailSingle, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                $j++;
            }
            if ($j < count($result)) {
                for ($k = $j; $k < count($result); $k++) {
                    $fifthSemesterResultStatusDetail = new FifthSemesterResultStatusDetail();
                    $this->fillFifthSemesterResultStatusDetailData($k, $fifthSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                }
            }
        }

        return response()->json([
            'message' => 'Saved Successfully',
        ], 200);
    }

    private function fillFifthSemesterResultStatusDetailData($index,$fifthSemesterResultStatusDetailObject,$index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date){
        $fifthSemesterResultStatusDetailObject->index_table_id = $index_id;
        $fifthSemesterResultStatusDetailObject->result = isset($result[$index]) ? $result[$index] : null;
        $fifthSemesterResultStatusDetailObject->fail = isset($fail[$index]) ? $fail[$index] : null;
        $fifthSemesterResultStatusDetailObject->next_appearance = isset($next_appearance[$index]) ? $next_appearance[$index] : null;

        $NextAppearance = null;
        if(isset($next_appearance_date[$index])){
            $NextAppearanceExplode = explode('/',$next_appearance_date[$index]);
            if(count($NextAppearanceExplode) == 3)
                $NextAppearance = Carbon::createFromDate($NextAppearanceExplode[2],$NextAppearanceExplode[1],$NextAppearanceExplode[0])->format('Y-m-d');
            else
                $NextAppearance = $next_appearance_date[$index];
        }
        $fifthSemesterResultStatusDetailObject->next_appearance_date = $NextAppearance;

        $LastChance = null;
        if(isset($last_chance_date[$index])){
            $LastChanceExplode = explode('/',$last_chance_date[$index]);
            if(count($LastChanceExplode) == 3)
                $LastChance = Carbon::createFromDate($LastChanceExplode[2],$LastChanceExplode[1],$LastChanceExplode[0])->format('Y-m-d');
            else
                $LastChance = $last_chance_date[$index];
        }
        $fifthSemesterResultStatusDetailObject->last_chance_date = $LastChance;

         $Passing = null;
        if(isset($passing_date[$index])){
            $PassingExplode = explode('/',$passing_date[$index]);
            if(count($PassingExplode) == 3)
                $Passing = Carbon::createFromDate($PassingExplode[2],$PassingExplode[1],$PassingExplode[0])->format('Y-m-d');
            else
                $Passing = $passing_date[$index];
        }
        $fifthSemesterResultStatusDetailObject->passing_date = $Passing;

        $fifthSemesterResultStatusDetailObject->save();
    }

    public function deleteFifthSemesterResultStatusDetail(Request $request){
        $params = $request->all();
        $id = Arr::get($params,FifthSemesterResultStatusDetailFields::ID);
        $indexId = Arr::get($params,'index_id');
        $object = FifthSemesterResultStatusDetail::where('id',$id)->where('index_table_id',$indexId);
        if($object->first()){
            $object->delete();
        }
        return response()->json([
            'message' => 'deleted'
        ],200);
    }
}
