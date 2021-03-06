<?php

namespace App\Http\Controllers;

use App\Fields\FirstAnnualDetailFields;
use App\Fields\FirstAnnualResultStatusDetailFields;
use App\FirstAnnualDetail;
use App\FirstAnnualResultStatusDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FirstAnnualDetailController extends Controller
{
    public function post(Request $request)
    {
        $params = $request->all();

        $fee_deposit_status = Arr::get($params, FirstAnnualDetailFields::FEE_DEPOSIT_STATUS);

        $exam_fee_date_explode = explode('/',Arr::get($params,FirstAnnualDetailFields::EXAM_FEE_DATE));
        if(count($exam_fee_date_explode) == 3)
            $exam_fee_date = Carbon::createFromDate($exam_fee_date_explode[2],$exam_fee_date_explode[1],$exam_fee_date_explode[0])->format('Y-m-d');
        else
            $exam_fee_date = Arr::get($params, FirstAnnualDetailFields::EXAM_FEE_DATE);

        $amount = Arr::get($params, FirstAnnualDetailFields::AMOUNT);
        $roll_no = Arr::get($params, FirstAnnualDetailFields::ROLL_NO);
        $same_course = Arr::get($params, FirstAnnualDetailFields::SAME_COURSE);
        $changed_course = Arr::get($params, FirstAnnualDetailFields::CHANGED_COURSE);

        //Result Status Details
        $result = Arr::get($params,FirstAnnualResultStatusDetailFields::RESULT);
        $fail = Arr::get($params,FirstAnnualResultStatusDetailFields::FAIL);
        $next_appearance = Arr::get($params,FirstAnnualResultStatusDetailFields::NEXT_APPEARANCE);
        $next_appearance_date = Arr::get($params,FirstAnnualResultStatusDetailFields::NEXT_APPEARANCE_DATE);
        $last_chance_date = Arr::get($params,FirstAnnualResultStatusDetailFields::LAST_CHANCE_DATE);
        $passing_date = Arr::get($params,FirstAnnualResultStatusDetailFields::PASSING_DATE);

        $index_id = Arr::get($params, 'index_id');
        if(!$index_id) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }

        $firstAnnualDetail = FirstAnnualDetail::where(FirstAnnualDetailFields::INDEX_TABLE_ID,$index_id)->first();
        if(!$firstAnnualDetail){
            $firstAnnualDetail = new FirstAnnualDetail();
        }

        $firstAnnualDetail->index_table_id = $index_id;
        $firstAnnualDetail->fee_deposit_status = $fee_deposit_status;
        $firstAnnualDetail->exam_fee_date = $exam_fee_date;
        $firstAnnualDetail->amount = $amount;
        $firstAnnualDetail->roll_no = $roll_no;
        $firstAnnualDetail->same_course = $same_course;
        $firstAnnualDetail->changed_course = $changed_course;
        $firstAnnualDetail->save();


        if (!$index_id) {
            for ($i = 0; $i < count($result); $i++) {
                $firstAnnualResultStatusDetail = new FirstAnnualResultStatusDetail();
                $this->fillFirstAnnualResultStatusDetailData($i, $firstAnnualResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
            }
        } else {
            $j = 0;
            foreach (FirstAnnualResultStatusDetail::where('index_table_id', $index_id)->get() as $firstAnnualResultStatusDetail) {
                $firstAnnualResultStatusDetailSingle = FirstAnnualResultStatusDetail::find($firstAnnualResultStatusDetail->id);
                $this->fillFirstAnnualResultStatusDetailData($j, $firstAnnualResultStatusDetailSingle, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                $j++;
            }
            if ($j < count($result)) {
                for ($k = $j; $k < count($result); $k++) {
                    $firstAnnualResultStatusDetail = new FirstAnnualResultStatusDetail();
                    $this->fillFirstAnnualResultStatusDetailData($k, $firstAnnualResultStatusDetail, $index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date);
                }
            }
        }

        return response()->json([
            'message' => 'Saved Successfully',
        ], 200);
    }

    private function fillFirstAnnualResultStatusDetailData($index,$firstAnnualResultStatusDetailObject,$index_id, $result, $fail, $next_appearance, $next_appearance_date, $last_chance_date, $passing_date){
        $firstAnnualResultStatusDetailObject->index_table_id = $index_id;
        $firstAnnualResultStatusDetailObject->result = isset($result[$index]) ? $result[$index] : null;
        $firstAnnualResultStatusDetailObject->fail = isset($fail[$index]) ? $fail[$index] : null;
        $firstAnnualResultStatusDetailObject->next_appearance = isset($next_appearance[$index]) ? $next_appearance[$index] : null;

        $NextAppearance = null;
        if(isset($next_appearance_date[$index])){
            $NextAppearanceExplode = explode('/',$next_appearance_date[$index]);
            if(count($NextAppearanceExplode) == 3)
                $NextAppearance = Carbon::createFromDate($NextAppearanceExplode[2],$NextAppearanceExplode[1],$NextAppearanceExplode[0])->format('Y-m-d');
            else
                $NextAppearance = $next_appearance_date[$index];
        }
        $firstAnnualResultStatusDetailObject->next_appearance_date = $NextAppearance;

        $LastChance = null;
        if(isset($last_chance_date[$index])){
            $LastChanceExplode = explode('/',$last_chance_date[$index]);
            if(count($LastChanceExplode) == 3)
                $LastChance = Carbon::createFromDate($LastChanceExplode[2],$LastChanceExplode[1],$LastChanceExplode[0])->format('Y-m-d');
            else
                $LastChance = $last_chance_date[$index];
        }
        $firstAnnualResultStatusDetailObject->last_chance_date = $LastChance;

         $Passing = null;
        if(isset($passing_date[$index])){
            $PassingExplode = explode('/',$passing_date[$index]);
            if(count($PassingExplode) == 3)
                $Passing = Carbon::createFromDate($PassingExplode[2],$PassingExplode[1],$PassingExplode[0])->format('Y-m-d');
            else
                $Passing = $passing_date[$index];
        }
        $firstAnnualResultStatusDetailObject->passing_date = $Passing;
        $firstAnnualResultStatusDetailObject->save();
    }

    public function deleteFirstAnnualResultStatusDetail(Request $request){
        $params = $request->all();
        $id = Arr::get($params,FirstAnnualResultStatusDetailFields::ID);
        $indexId = Arr::get($params,'index_id');
        $object = FirstAnnualResultStatusDetail::where('id',$id)->where('index_table_id',$indexId);
        if($object->first()){
            $object->delete();
        }
        return response()->json([
            'message' => 'deleted'
        ],200);
    }
}
