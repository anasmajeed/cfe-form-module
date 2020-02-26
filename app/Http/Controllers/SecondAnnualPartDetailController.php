<?php

namespace App\Http\Controllers;

use App\Fields\SecondAnnualPartDetailFields;
use App\Fields\SecondAnnualPartResultStatusDetailFields;
use App\SecondAnnualPartDetail;
use App\SecondAnnualPartResultStatusDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SecondAnnualPartDetailController extends Controller
{
    public function post(Request $request)
    {
        $params = $request->all();

        $receipt_status = Arr::get($params, SecondAnnualPartDetailFields::RECEIPT_STATUS);
        
        $second_part_date_explode = explode('/',Arr::get($params,SecondAnnualPartDetailFields::SECOND_PART_DATE));
        if(count($second_part_date_explode) == 3)
            $second_part_date = Carbon::createFromDate($second_part_date_explode[2],$second_part_date_explode[1],$second_part_date_explode[0])->format('Y-m-d');
        else
            $second_part_date = Arr::get($params, SecondAnnualPartDetailFields::SECOND_PART_DATE);

        $pwwb_status = Arr::get($params, SecondAnnualPartDetailFields::PWWB_STATUS);

        $pwwb_date_explode = explode('/',Arr::get($params,SecondAnnualPartDetailFields::PWWB_DATE));
        if(count($pwwb_date_explode) == 3)
            $pwwb_date = Carbon::createFromDate($pwwb_date_explode[2],$pwwb_date_explode[1],$pwwb_date_explode[0])->format('Y-m-d');
        else
            $pwwb_date = Arr::get($params, SecondAnnualPartDetailFields::PWWB_DATE);

        $diary_pwwb = Arr::get($params, SecondAnnualPartDetailFields::DIARY_PWWB);
        $amount_claim_due = Arr::get($params, SecondAnnualPartDetailFields::AMOUNT_CLAIM_DUE);
        $claim_status = Arr::get($params, SecondAnnualPartDetailFields::CLAIM_STATUS);
        $amount_received = Arr::get($params, SecondAnnualPartDetailFields::AMOUNT_RECEIVED);

        $claim_date_explode = explode('/',Arr::get($params,SecondAnnualPartDetailFields::CLAIM_DATE));
        if(count($$claim_date_explode) == 3)
            $claim_date = Carbon::createFromDate($$claim_date_explode[2],$$claim_date_explode[1],$$claim_date_explode[0])->format('Y-m-d');
        else
            $claim_date = Arr::get($params, SecondAnnualPartDetailFields::CLAIM_DATE);

        $exam_status = Arr::get($params, SecondAnnualPartDetailFields::EXAM_STATUS);

        $exam_date_explode = explode('/',Arr::get($params,SecondAnnualPartDetailFields::EXAM_DATE));
        if(count($exam_date_explode) == 3)
            $exam_date = Carbon::createFromDate($exam_date_explode[2],$exam_date_explode[1],$exam_date_explode[0])->format('Y-m-d');
        else
            $exam_date = Arr::get($params, SecondAnnualPartDetailFields::EXAM_DATE);

        $exam_amount = Arr::get($params, SecondAnnualPartDetailFields::EXAM_AMOUNT);
        $roll_no = Arr::get($params, SecondAnnualPartDetailFields::ROLL_NO);

        //Result Status Details
        $result = Arr::get($params,SecondAnnualPartResultStatusDetailFields::RESULT);
        $fail = Arr::get($params,SecondAnnualPartResultStatusDetailFields::FAIL);
        $next_appearance = Arr::get($params,SecondAnnualPartResultStatusDetailFields::NEXT_APPEARANCE);
        
        $next_appearance_date_explode = explode('/',Arr::get($params,SecondAnnualPartResultStatusDetailFields::NEXT_APPEARANCE_DATE));
        if(count($next_appearance_date_explode) == 3)
            $next_appearance_date = Carbon::createFromDate($next_appearance_date_explode[2],$next_appearance_date_explode[1],$next_appearance_date_explode[0])->format('Y-m-d');
        else
            $next_appearance_date = Arr::get($params,SecondAnnualPartResultStatusDetailFields::NEXT_APPEARANCE_DATE);

        $last_chance_date_explode = explode('/',Arr::get($params,SecondAnnualPartResultStatusDetailFields::LAST_CHANCE_DATE));
        if(count($last_chance_date_explode) == 3)
            $last_chance_date = Carbon::createFromDate($last_chance_date_explode[2],$last_chance_date_explode[1],$last_chance_date_explode[0])->format('Y-m-d');
        else
            $last_chance_date = Arr::get($params,SecondAnnualPartResultStatusDetailFields::LAST_CHANCE_DATE);

        $passing_date_explode = explode('/',Arr::get($params,SecondAnnualPartResultStatusDetailFields::PASSING_DATE));
        if(count($passing_date_explode) == 3)
            $passing_date = Carbon::createFromDate($passing_date_explode[2],$passing_date_explode[1],$passing_date_explode[0])->format('Y-m-d');
        else
            $passing_date = Arr::get($params,SecondAnnualPartResultStatusDetailFields::PASSING_DATE);

        $index_id = Arr::get($params, 'index_id');
        if(!$index_id) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }

        $secondAnnualPartDetail = SecondAnnualPartDetail::where(SecondAnnualPartDetailFields::INDEX_TABLE_ID,$index_id)->first();
        if(!$secondAnnualPartDetail){
            $secondAnnualPartDetail = new SecondAnnualPartDetail();
        }

        $secondAnnualPartDetail->index_table_id = $index_id;
        $secondAnnualPartDetail->receipt_status = $receipt_status;
        $secondAnnualPartDetail->second_part_date = $second_part_date;
        $secondAnnualPartDetail->pwwb_status = $pwwb_status;
        $secondAnnualPartDetail->pwwb_date = $pwwb_date;
        $secondAnnualPartDetail->diary_pwwb = $diary_pwwb;
        $secondAnnualPartDetail->amount_claim_due = $amount_claim_due;
        $secondAnnualPartDetail->claim_status = $claim_status;
        $secondAnnualPartDetail->amount_received = $amount_received;
        $secondAnnualPartDetail->claim_date = $claim_date;
        $secondAnnualPartDetail->exam_status = $exam_status;
        $secondAnnualPartDetail->exam_date = $exam_date;
        $secondAnnualPartDetail->exam_amount = $exam_amount;
        $secondAnnualPartDetail->roll_no = $roll_no;
        $secondAnnualPartDetail->save();


        if (!$index_id) {
            for ($i = 0; $i < count($result); $i++) {
                $secondAnnualPartResultStatusDetail = new SecondAnnualPartResultStatusDetail();
                $this->fillSecondAnnualPartResultStatusDetailData($i, $secondAnnualPartResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
            }
        } else {
            $j = 0;
            foreach (SecondAnnualPartResultStatusDetail::where('index_table_id', $index_id)->get() as $secondAnnualPartResultStatusDetail) {
                $secondAnnualPartResultStatusDetailSingle = SecondAnnualPartResultStatusDetail::find($secondAnnualPartResultStatusDetail->id);
                $this->fillSecondAnnualPartResultStatusDetailData($j, $secondAnnualPartResultStatusDetailSingle, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                $j++;
            }
            if ($j < count($result)) {
                for ($k = $j; $k < count($result); $k++) {
                    $secondAnnualPartResultStatusDetail = new SecondAnnualPartResultStatusDetail();
                    $this->fillSecondAnnualPartResultStatusDetailData($k, $secondAnnualPartResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                }
            }
        }

        return response()->json([
            'message' => 'Saved Successfully',
        ], 200);
    }

    private function fillSecondAnnualPartResultStatusDetailData($index,$secondAnnualPartResultStatusDetailObject,$index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date){
        $secondAnnualPartResultStatusDetailObject->index_table_id = $index_id;
        $secondAnnualPartResultStatusDetailObject->result = isset($result[$index]) ? $result[$index] : null;
        $secondAnnualPartResultStatusDetailObject->fail = isset($fail[$index]) ? $fail[$index] : null;
        $secondAnnualPartResultStatusDetailObject->next_appearance = isset($next_appearance[$index]) ? $next_appearance[$index] : null;
        $secondAnnualPartResultStatusDetailObject->next_appearance_date = isset($next_appearance_date[$index]) ? $next_appearance_date[$index] : null;
        $secondAnnualPartResultStatusDetailObject->last_chance_date = isset($last_chance_date[$index]) ? $last_chance_date[$index] : null;
        $secondAnnualPartResultStatusDetailObject->passing_date = isset($passing_date[$index]) ? $passing_date[$index] : null;
        $secondAnnualPartResultStatusDetailObject->save();
    }

    public function deleteSecondAnnualResultStatusDetail(Request $request){
        $params = $request->all();
        $id = Arr::get($params,SecondAnnualPartResultStatusDetailFields::ID);
        $indexId = Arr::get($params,'index_id');
        $object = SecondAnnualPartResultStatusDetail::where('id',$id)->where('index_table_id',$indexId);
        if($object->first()){
            $object->delete();
        }
        return response()->json([
            'message' => 'deleted'
        ],200);
    }
}
