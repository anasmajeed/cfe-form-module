<?php

namespace App\Http\Controllers;

use App\Fields\SecondSemesterDetailFields;
use App\Fields\SecondSemesterResultStatusDetailFields;
use App\SecondSemesterDetail;
use App\SecondSemesterResultStatusDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SecondSemesterDetailController extends Controller
{
    public function post(Request $request)
    {
        $params = $request->all();

        $cell_status = Arr::get($params, SecondSemesterDetailFields::CELL_STATUS);

        $cell_date_explode = explode('/',Arr::get($params,SecondSemesterDetailFields::CELL_DATE));
        if(count($cell_date_explode) == 3)
            $cell_date = Carbon::createFromDate($cell_date_explode[2],$cell_date_explode[1],$cell_date_explode[0])->format('Y-m-d');
        else
            $cell_date = Arr::get($params, SecondSemesterDetailFields::CELL_DATE);

        $pwwb_status = Arr::get($params, SecondSemesterDetailFields::PWWB_STATUS);

        $pwwb_date_explode = explode('/',Arr::get($params,SecondSemesterDetailFields::PWWB_DATE));
        if(count($pwwb_date_explode) == 3)
            $pwwb_date = Carbon::createFromDate($pwwb_date_explode[2],$pwwb_date_explode[1],$pwwb_date_explode[0])->format('Y-m-d');
        else
            $pwwb_date = Arr::get($params, SecondSemesterDetailFields::PWWB_DATE);

        $diary_pwwb = Arr::get($params, SecondSemesterDetailFields::DIARY_PWWB);
        $amount_claim_due = Arr::get($params, SecondSemesterDetailFields::AMOUNT_CLAIM_DUE);
        $amount_received = Arr::get($params, SecondSemesterDetailFields::AMOUNT_RECEIVED);
        $exam_status = Arr::get($params, SecondSemesterDetailFields::EXAM_STATUS);

        $claim_date_explode = explode('/',Arr::get($params,SecondSemesterDetailFields::CLAIM_DATE));
        if(count($claim_date_explode) == 3)
            $claim_date = Carbon::createFromDate($claim_date_explode[2],$claim_date_explode[1],$claim_date_explode[0])->format('Y-m-d');
        else
            $claim_date = Arr::get($params, SecondSemesterDetailFields::CLAIM_DATE);

        $claim_status = Arr::get($params, SecondSemesterDetailFields::CLAIM_STATUS);
        $roll_no = Arr::get($params, SecondSemesterDetailFields::ROLL_NO);

        $exam_date_explode = explode('/',Arr::get($params,SecondSemesterDetailFields::EXAM_DATE));
        if(count($exam_date_explode) == 3)
            $exam_date = Carbon::createFromDate($exam_date_explode[2],$exam_date_explode[1],$exam_date_explode[0])->format('Y-m-d');
        else
            $exam_date = Arr::get($params, SecondSemesterDetailFields::EXAM_DATE);

        $amount = Arr::get($params, SecondSemesterDetailFields::AMOUNT);

        //Result Status Details
        $result = Arr::get($params,SecondSemesterResultStatusDetailFields::RESULT);
        $fail = Arr::get($params,SecondSemesterResultStatusDetailFields::FAIL);
        $next_appearance = Arr::get($params,SecondSemesterResultStatusDetailFields::NEXT_APPEARANCE);
        $next_appearance_date = Arr::get($params,SecondSemesterResultStatusDetailFields::NEXT_APPEARANCE_DATE);
        $last_chance_date = Arr::get($params,SecondSemesterResultStatusDetailFields::LAST_CHANCE_DATE);
        $passing_date = Arr::get($params,SecondSemesterResultStatusDetailFields::PASSING_DATE);

        $index_id = Arr::get($params, 'index_id');
        if(!$index_id) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }

        $secondSemesterDetail = SecondSemesterDetail::where(SecondSemesterDetailFields::INDEX_TABLE_ID,$index_id)->first();
        if(!$secondSemesterDetail){
            $secondSemesterDetail = new SecondSemesterDetail();
        }

        $secondSemesterDetail->index_table_id = $index_id;
        $secondSemesterDetail->cell_status = $cell_status;
        $secondSemesterDetail->cell_date = $cell_date;
        $secondSemesterDetail->pwwb_status = $pwwb_status;
        $secondSemesterDetail->pwwb_date = $pwwb_date;
        $secondSemesterDetail->diary_pwwb = $diary_pwwb;
        $secondSemesterDetail->amount_claim_due = $amount_claim_due;
        $secondSemesterDetail->exam_status = $exam_status;
        $secondSemesterDetail->amount_received = $amount_received;
        $secondSemesterDetail->roll_no = $roll_no;
        $secondSemesterDetail->claim_date = $claim_date;
        $secondSemesterDetail->claim_status = $claim_status;
        $secondSemesterDetail->exam_date = $exam_date;
        $secondSemesterDetail->amount = $amount;
        $secondSemesterDetail->save();


        if (!$index_id) {
            for ($i = 0; $i < count($result); $i++) {
                $secondSemesterResultStatusDetail = new SecondSemesterResultStatusDetail();
                $this->fillSecondSemesterResultStatusDetailData($i, $secondSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
            }
        } else {
            $j = 0;
            foreach (SecondSemesterResultStatusDetail::where('index_table_id', $index_id)->get() as $secondSemesterResultStatusDetail) {
                $secondSemesterResultStatusDetailSingle = SecondSemesterResultStatusDetail::find($secondSemesterResultStatusDetail->id);
                $this->fillSecondSemesterResultStatusDetailData($j, $secondSemesterResultStatusDetailSingle, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                $j++;
            }
            if ($j < count($result)) {
                for ($k = $j; $k < count($result); $k++) {
                    $secondSemesterResultStatusDetail = new SecondSemesterResultStatusDetail();
                    $this->fillSecondSemesterResultStatusDetailData($k, $secondSemesterResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                }
            }
        }

        return response()->json([
            'message' => 'Saved Successfully',
        ], 200);
    }

    private function fillSecondSemesterResultStatusDetailData($index,$secondSemesterResultStatusDetailObject,$index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date){
        $secondSemesterResultStatusDetailObject->index_table_id = $index_id;
        $secondSemesterResultStatusDetailObject->result = isset($result[$index]) ? $result[$index] : null;
        $secondSemesterResultStatusDetailObject->fail = isset($fail[$index]) ? $fail[$index] : null;
        $secondSemesterResultStatusDetailObject->next_appearance = isset($next_appearance[$index]) ? $next_appearance[$index] : null;
        $NextAppearance = null;
        if(isset($next_appearance_date[$index])){
            $NextAppearanceExplode = explode('/',$next_appearance_date[$index]);
            if(count($NextAppearanceExplode) == 3)
                $NextAppearance = Carbon::createFromDate($NextAppearanceExplode[2],$NextAppearanceExplode[1],$NextAppearanceExplode[0])->format('Y-m-d');
            else
                $NextAppearance = $next_appearance_date[$index];
        }
        $secondSemesterResultStatusDetailObject->next_appearance_date = $NextAppearance;

        $LastChance = null;
        if(isset($last_chance_date[$index])){
            $LastChanceExplode = explode('/',$last_chance_date[$index]);
            if(count($LastChanceExplode) == 3)
                $LastChance = Carbon::createFromDate($LastChanceExplode[2],$LastChanceExplode[1],$LastChanceExplode[0])->format('Y-m-d');
            else
                $LastChance = $last_chance_date[$index];
        }
        $secondSemesterResultStatusDetailObject->last_chance_date = $LastChance;

        $Passing = null;
        if(isset($passing_date[$index])){
            $PassingExplode = explode('/',$passing_date[$index]);
            if(count($PassingExplode) == 3)
                $Passing = Carbon::createFromDate($PassingExplode[2],$PassingExplode[1],$PassingExplode[0])->format('Y-m-d');
            else
                $Passing = $passing_date[$index];
        }
        $secondSemesterResultStatusDetailObject->passing_date = $Passing;
        $secondSemesterResultStatusDetailObject->save();
    }

    public function deleteSecondSemesterResultStatusDetail(Request $request){
        $params = $request->all();
        $id = Arr::get($params,SecondSemesterResultStatusDetailFields::ID);
        $indexId = Arr::get($params,'index_id');
        $object = SecondSemesterResultStatusDetail::where('id',$id)->where('index_table_id',$indexId);
        if($object->first()){
            $object->delete();
        }
        return response()->json([
            'message' => 'deleted'
        ],200);
    }
}
