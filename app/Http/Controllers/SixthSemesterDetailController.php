<?php

namespace App\Http\Controllers;

use App\Fields\SixthSemesterDetailFields;
use App\Fields\SixthSemesterResultStatusDetailFields;
use App\SixthSemesterDetail;
use App\SixthSemesterResultStatusDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SixthSemesterDetailController extends Controller
{
    public function post(Request $request)
    {
        $params = $request->all();

        $cell_status = Arr::get($params, SixthSemesterDetailFields::CELL_STATUS);

        $cell_date_explode = explode('/',Arr::get($params,SixthSemesterDetailFields::CELL_DATE));
        if(count($cell_date_explode) == 3)
            $cell_date = Carbon::createFromDate($cell_date_explode[2],$cell_date_explode[1],$cell_date_explode[0])->format('Y-m-d');
        else
            $cell_date = Arr::get($params, SixthSemesterDetailFields::CELL_DATE);
        $pwwb_status = Arr::get($params, SixthSemesterDetailFields::PWWB_STATUS);

        $pwwb_date_explode = explode('/',Arr::get($params,SixthSemesterDetailFields::PWWB_DATE));
        if(count($pwwb_date_explode) == 3)
            $pwwb_date = Carbon::createFromDate($pwwb_date_explode[2],$pwwb_date_explode[1],$pwwb_date_explode[0])->format('Y-m-d');
        else
            $pwwb_date = Arr::get($params, SixthSemesterDetailFields::PWWB_DATE);
        $diary_pwwb = Arr::get($params, SixthSemesterDetailFields::DIARY_PWWB);
        $amount_claim_due = Arr::get($params, SixthSemesterDetailFields::AMOUNT_CLAIM_DUE);
        $amount_received = Arr::get($params, SixthSemesterDetailFields::AMOUNT_RECEIVED);
        $exam_status = Arr::get($params, SixthSemesterDetailFields::EXAM_STATUS);

        $claim_date_explode = explode('/',Arr::get($params,SixthSemesterDetailFields::CLAIM_DATE));
        if(count($claim_date_explode) == 3)
            $claim_date = Carbon::createFromDate($claim_date_explode[2],$claim_date_explode[1],$claim_date_explode[0])->format('Y-m-d');
        else
            $claim_date = Arr::get($params, SixthSemesterDetailFields::CLAIM_DATE);
        $claim_status = Arr::get($params, SixthSemesterDetailFields::CLAIM_STATUS);
        $roll_no = Arr::get($params, SixthSemesterDetailFields::ROLL_NO);

        $exam_date_explode = explode('/',Arr::get($params,SixthSemesterDetailFields::EXAM_DATE));
        if(count($exam_date_explode) == 3)
            $exam_date = Carbon::createFromDate($exam_date_explode[2],$exam_date_explode[1],$exam_date_explode[0])->format('Y-m-d');
        else
            $exam_date = Arr::get($params, SixthSemesterDetailFields::EXAM_DATE);
        $amount = Arr::get($params, SixthSemesterDetailFields::AMOUNT);

        //Result Status Details
        $result = Arr::get($params,SixthSemesterResultStatusDetailFields::RESULT);
        $fail = Arr::get($params,SixthSemesterResultStatusDetailFields::FAIL);
        $next_appearance = Arr::get($params,SixthSemesterResultStatusDetailFields::NEXT_APPEARANCE);
        
        $next_appearance_date_explode = explode('/',Arr::get($params,SixthSemesterResultStatusDetailFields::NEXT_APPEARANCE_DATE));
        if(count($next_appearance_date_explode) == 3)
            $next_appearance_date = Carbon::createFromDate($next_appearance_date_explode[2],$next_appearance_date_explode[1],$next_appearance_date_explode[0])->format('Y-m-d');
        else
            $next_appearance_date = Arr::get($params,SixthSemesterResultStatusDetailFields::NEXT_APPEARANCE_DATE);

        $last_chance_date_explode = explode('/',Arr::get($params,SixthSemesterResultStatusDetailFields::LAST_CHANCE_DATE));
        if(count($last_chance_date_explode) == 3)
            $last_chance_date = Carbon::createFromDate($last_chance_date_explode[2],$last_chance_date_explode[1],$last_chance_date_explode[0])->format('Y-m-d');
        else
            $last_chance_date = Arr::get($params,SixthSemesterResultStatusDetailFields::LAST_CHANCE_DATE);

        $passing_date_explode = explode('/',Arr::get($params,SixthSemesterResultStatusDetailFields::PASSING_DATE));
        if(count($passing_date_explode) == 3)
            $passing_date = Carbon::createFromDate($passing_date_explode[2],$passing_date_explode[1],$passing_date_explode[0])->format('Y-m-d');
        else
            $passing_date = Arr::get($params,SixthSemesterResultStatusDetailFields::PASSING_DATE);

        $index_id = Arr::get($params, 'index_id');
        if(!$index_id) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }

        $sixthSemesterDetail = SixthSemesterDetail::where(SixthSemesterDetailFields::INDEX_TABLE_ID,$index_id)->first();
        if(!$sixthSemesterDetail){
            $sixthSemesterDetail = new SixthSemesterDetail();
        }

        $sixthSemesterDetail->index_table_id = $index_id;
        $sixthSemesterDetail->cell_status = $cell_status;
        $sixthSemesterDetail->cell_date = $cell_date;
        $sixthSemesterDetail->pwwb_status = $pwwb_status;
        $sixthSemesterDetail->pwwb_date = $pwwb_date;
        $sixthSemesterDetail->diary_pwwb = $diary_pwwb;
        $sixthSemesterDetail->amount_claim_due = $amount_claim_due;
        $sixthSemesterDetail->exam_status = $exam_status;
        $sixthSemesterDetail->amount_received = $amount_received;
        $sixthSemesterDetail->roll_no = $roll_no;
        $sixthSemesterDetail->claim_date = $claim_date;
        $sixthSemesterDetail->claim_status = $claim_status;
        $sixthSemesterDetail->exam_date = $exam_date;
        $sixthSemesterDetail->amount = $amount;
        $sixthSemesterDetail->save();


        if (!$index_id) {
            for ($i = 0; $i < count($result); $i++) {
                $sixthSemesterResultStatusDetail = new SixthSemesterResultStatusDetail();
                $this->fillSixthSemesterResultStatusDetailData($i, $sixthSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
            }
        } else {
            $j = 0;
            foreach (SixthSemesterResultStatusDetail::where('index_table_id', $index_id)->get() as $sixthSemesterResultStatusDetail) {
                $sixthSemesterResultStatusDetailSingle = SixthSemesterResultStatusDetail::find($sixthSemesterResultStatusDetail->id);
                $this->fillSixthSemesterResultStatusDetailData($j, $sixthSemesterResultStatusDetailSingle, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                $j++;
            }
            if ($j < count($result)) {
                for ($k = $j; $k < count($result); $k++) {
                    $sixthSemesterResultStatusDetail = new SixthSemesterResultStatusDetail();
                    $this->fillSixthSemesterResultStatusDetailData($k, $sixthSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                }
            }
        }

        return response()->json([
            'message' => 'Saved Successfully',
        ], 200);
    }

    private function fillSixthSemesterResultStatusDetailData($index,$sixthSemesterResultStatusDetailObject,$index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date){
        $sixthSemesterResultStatusDetailObject->index_table_id = $index_id;
        $sixthSemesterResultStatusDetailObject->result = isset($result[$index]) ? $result[$index] : null;
        $sixthSemesterResultStatusDetailObject->fail = isset($fail[$index]) ? $fail[$index] : null;
        $sixthSemesterResultStatusDetailObject->next_appearance = isset($next_appearance[$index]) ? $next_appearance[$index] : null;
        $sixthSemesterResultStatusDetailObject->next_appearance_date = isset($next_appearance_date[$index]) ? $next_appearance_date[$index] : null;
        $sixthSemesterResultStatusDetailObject->last_chance_date = isset($last_chance_date[$index]) ? $last_chance_date[$index] : null;
        $sixthSemesterResultStatusDetailObject->passing_date = isset($passing_date[$index]) ? $passing_date[$index] : null;
        $sixthSemesterResultStatusDetailObject->save();
    }

    public function deleteSixthSemesterResultStatusDetail(Request $request){
        $params = $request->all();
        $id = Arr::get($params,SixthSemesterResultStatusDetailFields::ID);
        $indexId = Arr::get($params,'index_id');
        $object = SixthSemesterResultStatusDetail::where('id',$id)->where('index_table_id',$indexId);
        if($object->first()){
            $object->delete();
        }
        return response()->json([
            'message' => 'deleted'
        ],200);
    }
}
