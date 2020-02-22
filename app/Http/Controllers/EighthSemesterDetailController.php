<?php

namespace App\Http\Controllers;

use App\EighthSemesterDetail;
use App\EighthSemesterResultStatusDetail;
use App\Fields\EighthSemesterDetailFields;
use App\Fields\EighthSemesterResultStatusDetailFields;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class EighthSemesterDetailController extends Controller
{
    public function post(Request $request)
    {
        $params = $request->all();

        $cell_status = Arr::get($params, EighthSemesterDetailFields::CELL_STATUS);
        $cell_date = Arr::get($params, EighthSemesterDetailFields::CELL_DATE);
        $pwwb_status = Arr::get($params, EighthSemesterDetailFields::PWWB_STATUS);
        $pwwb_date = Arr::get($params, EighthSemesterDetailFields::PWWB_DATE);
        $diary_pwwb = Arr::get($params, EighthSemesterDetailFields::DIARY_PWWB);
        $amount_claim_due = Arr::get($params, EighthSemesterDetailFields::AMOUNT_CLAIM_DUE);
        $amount_received = Arr::get($params, EighthSemesterDetailFields::AMOUNT_RECEIVED);
        $exam_status = Arr::get($params, EighthSemesterDetailFields::EXAM_STATUS);
        $claim_date = Arr::get($params, EighthSemesterDetailFields::CLAIM_DATE);
        $claim_status = Arr::get($params, EighthSemesterDetailFields::CLAIM_STATUS);
        $roll_no = Arr::get($params, EighthSemesterDetailFields::ROLL_NO);
        $exam_date = Arr::get($params, EighthSemesterDetailFields::EXAM_DATE);
        $amount = Arr::get($params, EighthSemesterDetailFields::AMOUNT);

        //Result Status Details
        $result = Arr::get($params,EighthSemesterResultStatusDetailFields::RESULT);
        $fail = Arr::get($params,EighthSemesterResultStatusDetailFields::FAIL);
        $next_appearance = Arr::get($params,EighthSemesterResultStatusDetailFields::NEXT_APPEARANCE);
        $next_appearance_date = Arr::get($params,EighthSemesterResultStatusDetailFields::NEXT_APPEARANCE_DATE);
        $last_chance_date = Arr::get($params,EighthSemesterResultStatusDetailFields::LAST_CHANCE_DATE);
        $passing_date = Arr::get($params,EighthSemesterResultStatusDetailFields::PASSING_DATE);

        $index_id = Arr::get($params, 'index_id');
        if(!$index_id) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }

        $eighthSemesterDetail = EighthSemesterDetail::where(EighthSemesterDetailFields::INDEX_TABLE_ID,$index_id)->first();
        if(!$eighthSemesterDetail){
            $eighthSemesterDetail = new EighthSemesterDetail();
        }

        $eighthSemesterDetail->index_table_id = $index_id;
        $eighthSemesterDetail->cell_status = $cell_status;
        $eighthSemesterDetail->cell_date = $cell_date;
        $eighthSemesterDetail->pwwb_status = $pwwb_status;
        $eighthSemesterDetail->pwwb_date = $pwwb_date;
        $eighthSemesterDetail->diary_pwwb = $diary_pwwb;
        $eighthSemesterDetail->amount_claim_due = $amount_claim_due;
        $eighthSemesterDetail->exam_status = $exam_status;
        $eighthSemesterDetail->amount_received = $amount_received;
        $eighthSemesterDetail->roll_no = $roll_no;
        $eighthSemesterDetail->claim_date = $claim_date;
        $eighthSemesterDetail->claim_status = $claim_status;
        $eighthSemesterDetail->exam_date = $exam_date;
        $eighthSemesterDetail->amount = $amount;
        $eighthSemesterDetail->save();


        if (!$index_id) {
            for ($i = 0; $i < count($result); $i++) {
                $eighthSemesterResultStatusDetail = new EighthSemesterResultStatusDetail();
                $this->fillEighthSemesterResultStatusDetailData($i, $eighthSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
            }
        } else {
            $j = 0;
            foreach (EighthSemesterResultStatusDetail::where('index_table_id', $index_id)->get() as $eighthSemesterResultStatusDetail) {
                $eighthSemesterResultStatusDetailSingle = EighthSemesterResultStatusDetail::find($eighthSemesterResultStatusDetail->id);
                $this->fillEighthSemesterResultStatusDetailData($j, $eighthSemesterResultStatusDetailSingle, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                $j++;
            }
            if ($j < count($result)) {
                for ($k = $j; $k < count($result); $k++) {
                    $eighthSemesterResultStatusDetail = new EighthSemesterResultStatusDetail();
                    $this->fillEighthSemesterResultStatusDetailData($k, $eighthSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                }
            }
        }

        return response()->json([
            'message' => 'Saved Successfully',
        ], 200);
    }

    private function fillEighthSemesterResultStatusDetailData($index,$eighthSemesterResultStatusDetailObject,$index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date){
        $eighthSemesterResultStatusDetailObject->index_table_id = $index_id;
        $eighthSemesterResultStatusDetailObject->result = isset($result[$index]) ? $result[$index] : null;
        $eighthSemesterResultStatusDetailObject->fail = isset($fail[$index]) ? $fail[$index] : null;
        $eighthSemesterResultStatusDetailObject->next_appearance = isset($next_appearance[$index]) ? $next_appearance[$index] : null;
        $eighthSemesterResultStatusDetailObject->next_appearance_date = isset($next_appearance_date[$index]) ? $next_appearance_date[$index] : null;
        $eighthSemesterResultStatusDetailObject->last_chance_date = isset($last_chance_date[$index]) ? $last_chance_date[$index] : null;
        $eighthSemesterResultStatusDetailObject->passing_date = isset($passing_date[$index]) ? $passing_date[$index] : null;
        $eighthSemesterResultStatusDetailObject->save();
    }

    public function deleteEighthSemesterResultStatusDetail(Request $request){
        $params = $request->all();
        $id = Arr::get($params,EighthSemesterResultStatusDetailFields::ID);
        $indexId = Arr::get($params,'index_id');
        $object = EighthSemesterResultStatusDetail::where('id',$id)->where('index_table_id',$indexId);
        if($object->first()){
            $object->delete();
        }
        return response()->json([
            'message' => 'deleted'
        ],200);
    }
}
