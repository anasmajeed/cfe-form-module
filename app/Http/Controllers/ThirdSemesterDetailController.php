<?php

namespace App\Http\Controllers;

use App\Fields\ThirdSemesterDetailFields;
use App\Fields\ThirdSemesterResultStatusDetailFields;
use App\ThirdSemesterDetail;
use App\ThirdSemesterResultStatusDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ThirdSemesterDetailController extends Controller
{
    public function post(Request $request)
    {
        $params = $request->all();

        $cell_status = Arr::get($params, ThirdSemesterDetailFields::CELL_STATUS);

        $cell_date_explode = explode('/',Arr::get($params,ThirdSemesterDetailFields::CELL_DATE));
        if(count($cell_date_explode) == 3)
            $cell_date = Carbon::createFromDate($cell_date_explode[2],$cell_date_explode[1],$cell_date_explode[0])->format('Y-m-d');
        else
            $cell_date = Arr::get($params, ThirdSemesterDetailFields::CELL_DATE);
        $pwwb_status = Arr::get($params, ThirdSemesterDetailFields::PWWB_STATUS);
        
        $pwwb_date_explode = explode('/',Arr::get($params,ThirdSemesterDetailFields::PWWB_DATE));
        if(count($pwwb_date_explode) == 3)
            $pwwb_date = Carbon::createFromDate($pwwb_date_explode[2],$pwwb_date_explode[1],$pwwb_date_explode[0])->format('Y-m-d');
        else
            $pwwb_date = Arr::get($params, ThirdSemesterDetailFields::PWWB_DATE);
        $diary_pwwb = Arr::get($params, ThirdSemesterDetailFields::DIARY_PWWB);
        $amount_claim_due = Arr::get($params, ThirdSemesterDetailFields::AMOUNT_CLAIM_DUE);
        $amount_received = Arr::get($params, ThirdSemesterDetailFields::AMOUNT_RECEIVED);
        $exam_status = Arr::get($params, ThirdSemesterDetailFields::EXAM_STATUS);
        
        $claim_date_explode = explode('/',Arr::get($params,ThirdSemesterDetailFields::CLAIM_DATE));
        if(count($claim_date_explode) == 3)
            $claim_date = Carbon::createFromDate($claim_date_explode[2],$claim_date_explode[1],$claim_date_explode[0])->format('Y-m-d');
        else
            $claim_date = Arr::get($params, ThirdSemesterDetailFields::CLAIM_DATE);
        $claim_status = Arr::get($params, ThirdSemesterDetailFields::CLAIM_STATUS);
        $roll_no = Arr::get($params, ThirdSemesterDetailFields::ROLL_NO);
        
        $exam_date_explode = explode('/',Arr::get($params,ThirdSemesterDetailFields::EXAM_DATE));
        if(count($exam_date_explode) == 3)
            $exam_date = Carbon::createFromDate($exam_date_explode[2],$exam_date_explode[1],$exam_date_explode[0])->format('Y-m-d');
        else
            $exam_date = Arr::get($params, ThirdSemesterDetailFields::EXAM_DATE);
        $amount = Arr::get($params, ThirdSemesterDetailFields::AMOUNT);

        //Result Status Details
        $result = Arr::get($params,ThirdSemesterResultStatusDetailFields::RESULT);
        $fail = Arr::get($params,ThirdSemesterResultStatusDetailFields::FAIL);
        $next_appearance = Arr::get($params,ThirdSemesterResultStatusDetailFields::NEXT_APPEARANCE);
        
        $next_appearance_date_explode = explode('/',Arr::get($params,ThirdSemesterResultStatusDetailFields::NEXT_APPEARANCE_DATE));
        if(count($next_appearance_date_explode) == 3)
            $next_appearance_date = Carbon::createFromDate($next_appearance_date_explode[2],$next_appearance_date_explode[1],$next_appearance_date_explode[0])->format('Y-m-d');
        else
            $next_appearance_date = Arr::get($params,ThirdSemesterResultStatusDetailFields::NEXT_APPEARANCE_DATE);

        $last_chance_date_explode = explode('/',Arr::get($params,ThirdSemesterResultStatusDetailFields::LAST_CHANCE_DATE));
        if(count($last_chance_date_explode) == 3)
            $last_chance_date = Carbon::createFromDate($last_chance_date_explode[2],$last_chance_date_explode[1],$last_chance_date_explode[0])->format('Y-m-d');
        else
            $last_chance_date = Arr::get($params,ThirdSemesterResultStatusDetailFields::LAST_CHANCE_DATE);

        $passing_date_explode = explode('/',Arr::get($params,ThirdSemesterResultStatusDetailFields::PASSING_DATE));
        if(count($passing_date_explode) == 3)
            $passing_date = Carbon::createFromDate($passing_date_explode[2],$passing_date_explode[1],$passing_date_explode[0])->format('Y-m-d');
        else
            $passing_date = Arr::get($params,ThirdSemesterResultStatusDetailFields::PASSING_DATE);

        $index_id = Arr::get($params, 'index_id');
        if(!$index_id) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }

        $thirdSemesterDetail = ThirdSemesterDetail::where(ThirdSemesterDetailFields::INDEX_TABLE_ID,$index_id)->first();
        if(!$thirdSemesterDetail){
            $thirdSemesterDetail = new ThirdSemesterDetail();
        }

        $thirdSemesterDetail->index_table_id = $index_id;
        $thirdSemesterDetail->cell_status = $cell_status;
        $thirdSemesterDetail->cell_date = $cell_date;
        $thirdSemesterDetail->pwwb_status = $pwwb_status;
        $thirdSemesterDetail->pwwb_date = $pwwb_date;
        $thirdSemesterDetail->diary_pwwb = $diary_pwwb;
        $thirdSemesterDetail->amount_claim_due = $amount_claim_due;
        $thirdSemesterDetail->exam_status = $exam_status;
        $thirdSemesterDetail->amount_received = $amount_received;
        $thirdSemesterDetail->roll_no = $roll_no;
        $thirdSemesterDetail->claim_date = $claim_date;
        $thirdSemesterDetail->claim_status = $claim_status;
        $thirdSemesterDetail->exam_date = $exam_date;
        $thirdSemesterDetail->amount = $amount;
        $thirdSemesterDetail->save();


        if (!$index_id) {
            for ($i = 0; $i < count($result); $i++) {
                $thirdSemesterResultStatusDetail = new ThirdSemesterResultStatusDetail();
                $this->fillThirdSemesterResultStatusDetailData($i, $thirdSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
            }
        } else {
            $j = 0;
            foreach (ThirdSemesterResultStatusDetail::where('index_table_id', $index_id)->get() as $thirdSemesterResultStatusDetail) {
                $thirdSemesterResultStatusDetailSingle = ThirdSemesterResultStatusDetail::find($thirdSemesterResultStatusDetail->id);
                $this->fillThirdSemesterResultStatusDetailData($j, $thirdSemesterResultStatusDetailSingle, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                $j++;
            }
            if ($j < count($result)) {
                for ($k = $j; $k < count($result); $k++) {
                    $thirdSemesterResultStatusDetail = new ThirdSemesterResultStatusDetail();
                    $this->fillThirdSemesterResultStatusDetailData($k, $thirdSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                }
            }
        }

        return response()->json([
            'message' => 'Saved Successfully',
        ], 200);
    }

    private function fillThirdSemesterResultStatusDetailData($index,$thirdSemesterResultStatusDetailObject,$index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date){
        $thirdSemesterResultStatusDetailObject->index_table_id = $index_id;
        $thirdSemesterResultStatusDetailObject->result = isset($result[$index]) ? $result[$index] : null;
        $thirdSemesterResultStatusDetailObject->fail = isset($fail[$index]) ? $fail[$index] : null;
        $thirdSemesterResultStatusDetailObject->next_appearance = isset($next_appearance[$index]) ? $next_appearance[$index] : null;
        $thirdSemesterResultStatusDetailObject->next_appearance_date = isset($next_appearance_date[$index]) ? $next_appearance_date[$index] : null;
        $thirdSemesterResultStatusDetailObject->last_chance_date = isset($last_chance_date[$index]) ? $last_chance_date[$index] : null;
        $thirdSemesterResultStatusDetailObject->passing_date = isset($passing_date[$index]) ? $passing_date[$index] : null;
        $thirdSemesterResultStatusDetailObject->save();
    }

    public function deleteThirdSemesterResultStatusDetail(Request $request){
        $params = $request->all();
        $id = Arr::get($params,ThirdSemesterResultStatusDetailFields::ID);
        $indexId = Arr::get($params,'index_id');
        $object = ThirdSemesterResultStatusDetail::where('id',$id)->where('index_table_id',$indexId);
        if($object->first()){
            $object->delete();
        }
        return response()->json([
            'message' => 'deleted'
        ],200);
    }
}
