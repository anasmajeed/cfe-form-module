<?php

namespace App\Http\Controllers;

use App\Fields\FirstSemesterDetailFields;
use App\Fields\FirstSemesterResultStatusDetailFields;
use App\FirstSemesterDetail;
use App\FirstSemesterResultStatusDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FirstSemesterDetailController extends Controller
{
    public function post(Request $request)
    {
        $params = $request->all();

        $status = Arr::get($params, FirstSemesterDetailFields::STATUS);
        $degree_date = Arr::get($params, FirstSemesterDetailFields::DEGREE_DATE);
        $exam_status = Arr::get($params, FirstSemesterDetailFields::EXAM_STATUS);
        $roll_no = Arr::get($params, FirstSemesterDetailFields::ROLL_NO);
        $exam_date = Arr::get($params, FirstSemesterDetailFields::EXAM_DATE);
        $amount = Arr::get($params, FirstSemesterDetailFields::AMOUNT);

        //Result Status Details
        $result = Arr::get($params,FirstSemesterResultStatusDetailFields::RESULT);
        $fail = Arr::get($params,FirstSemesterResultStatusDetailFields::FAIL);
        $next_appearance = Arr::get($params,FirstSemesterResultStatusDetailFields::NEXT_APPEARANCE);
        $next_appearance_date = Arr::get($params,FirstSemesterResultStatusDetailFields::NEXT_APPEARANCE_DATE);
        $last_chance_date = Arr::get($params,FirstSemesterResultStatusDetailFields::LAST_CHANCE_DATE);
        $passing_date = Arr::get($params,FirstSemesterResultStatusDetailFields::PASSING_DATE);

        $index_id = Arr::get($params, 'index_id');
        if(!$index_id) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }

        $firstSemesterDetail = FirstSemesterDetail::where(FirstSemesterDetailFields::INDEX_TABLE_ID,$index_id)->first();
        if(!$firstSemesterDetail){
            $firstSemesterDetail = new FirstSemesterDetail();
        }

        $firstSemesterDetail->index_table_id = $index_id;
        $firstSemesterDetail->status = $status;
        $firstSemesterDetail->degree_date = $degree_date;
        $firstSemesterDetail->exam_status = $exam_status;
        $firstSemesterDetail->roll_no = $roll_no;
        $firstSemesterDetail->exam_date = $exam_date;
        $firstSemesterDetail->amount = $amount;
        $firstSemesterDetail->save();


        if (!$index_id) {
            for ($i = 0; $i < count($result); $i++) {
                $firstSemesterResultStatusDetail = new FirstSemesterResultStatusDetail();
                $this->fillFirstSemesterResultStatusDetailData($i, $firstSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
            }
        } else {
            $j = 0;
            foreach (FirstSemesterResultStatusDetail::where('index_table_id', $index_id)->get() as $firstSemesterResultStatusDetail) {
                $firstSemesterResultStatusDetailSingle = FirstSemesterResultStatusDetail::find($firstSemesterResultStatusDetail->id);
                $this->fillFirstSemesterResultStatusDetailData($j, $firstSemesterResultStatusDetailSingle, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                $j++;
            }
            if ($j < count($result)) {
                for ($k = $j; $k < count($result); $k++) {
                    $firstSemesterResultStatusDetail = new FirstSemesterResultStatusDetail();
                    $this->fillFirstSemesterResultStatusDetailData($k, $firstSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                }
            }
        }

        return response()->json([
            'message' => 'Saved Successfully',
        ], 200);
    }

    private function fillFirstSemesterResultStatusDetailData($index,$firstSemesterResultStatusDetailObject,$index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date){
        $firstSemesterResultStatusDetailObject->index_table_id = $index_id;
        $firstSemesterResultStatusDetailObject->result = isset($result[$index]) ? $result[$index] : null;
        $firstSemesterResultStatusDetailObject->fail = isset($fail[$index]) ? $fail[$index] : null;
        $firstSemesterResultStatusDetailObject->next_appearance = isset($next_appearance[$index]) ? $next_appearance[$index] : null;
        $firstSemesterResultStatusDetailObject->next_appearance_date = isset($next_appearance_date[$index]) ? $next_appearance_date[$index] : null;
        $firstSemesterResultStatusDetailObject->last_chance_date = isset($last_chance_date[$index]) ? $last_chance_date[$index] : null;
        $firstSemesterResultStatusDetailObject->passing_date = isset($passing_date[$index]) ? $passing_date[$index] : null;
        $firstSemesterResultStatusDetailObject->save();
    }

    public function deleteFirstSemesterResultStatusDetail(Request $request){
        $params = $request->all();
        $id = Arr::get($params,FirstSemesterResultStatusDetailFields::ID);
        $indexId = Arr::get($params,'index_id');
        $object = FirstSemesterResultStatusDetail::where('id',$id)->where('index_table_id',$indexId);
        if($object->first()){
            $object->delete();
        }
        return response()->json([
            'message' => 'deleted'
        ],200);
    }
}
