<?php

namespace App\Http\Controllers;

use App\DualCourseDetail;
use App\Fields\DualCourseDetailFields;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DualCourseDetailController extends Controller
{
    public function post(Request $request){
        $params = $request->all();

        $indexTableId = Arr::get($params,'index_id');
        $course = Arr::get($params,DualCourseDetailFields::COURSE);
        $roll_no = Arr::get($params,DualCourseDetailFields::ROLL_NO);
        $affiliated_body = Arr::get($params,DualCourseDetailFields::AFFILIATED_BODY);
        $duration_of_course = Arr::get($params,DualCourseDetailFields::DURATION_OF_COURSE);
        $admission_date = Arr::get($params,DualCourseDetailFields::ADMISSION_DATE);
        $ending_date = Arr::get($params,DualCourseDetailFields::ENDING_DATE);
        $scheme_of_study = Arr::get($params,DualCourseDetailFields::SCHEME_OF_STUDY);
        $semester_category = Arr::get($params,DualCourseDetailFields::SEMESTER_CATEGORY);
        $shift = Arr::get($params,DualCourseDetailFields::SHIFT);
        $registration_status = Arr::get($params,DualCourseDetailFields::REGISTRATION_STATUS);
        $registration_date = Arr::get($params,DualCourseDetailFields::REGISTRATION_DATE);
        $actual_fee = Arr::get($params,DualCourseDetailFields::ACTUAL_FEE);
        $late_fee = Arr::get($params,DualCourseDetailFields::LATE_FEE);
        $total_fee = Arr::get($params,DualCourseDetailFields::TOTAL_FEE);
        $previous_course = Arr::get($params,DualCourseDetailFields::PREVIOUS_COURSE);
        $previous_affiliated_body = Arr::get($params,DualCourseDetailFields::PREVIOUS_AFFILIATED_BODY);
        $previous_duration_of_course = Arr::get($params,DualCourseDetailFields::PREVIOUS_DURATION_OF_COURSE);
        $previous_roll_no = Arr::get($params,DualCourseDetailFields::PREVIOUS_ROLL_NO);
        $previous_passing_date = Arr::get($params,DualCourseDetailFields::PREVIOUS_PASSING_DATE);
        $previous_total_marks = Arr::get($params,DualCourseDetailFields::PREVIOUS_TOTAL_MARKS);
        $previous_marks_obtained = Arr::get($params,DualCourseDetailFields::PREVIOUS_MARKS_OBTAINED);
        $previous_cgpa = Arr::get($params,DualCourseDetailFields::PREVIOUS_CGPA);

        if(!$indexTableId) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }
        else{
            $object = DualCourseDetail::where(DualCourseDetailFields::INDEX_TABLE_ID,$indexTableId)->first();
            if(!$object){
                $object = new DualCourseDetail();
            }
        }

        $object->index_table_id = $indexTableId;
        $object->course = $course;
        $object->roll_no = $roll_no;
        $object->affiliated_body = $affiliated_body;
        $object->duration_of_course = $duration_of_course;
        $object->admission_date = $admission_date;
        $object->ending_date = $ending_date;
        $object->scheme_of_study = $scheme_of_study;
        $object->semester_category = $semester_category;
        $object->shift = $shift;
        $object->registration_status = $registration_status;
        $object->registration_date = $registration_date;
        $object->actual_fee = $actual_fee;
        $object->late_fee = $late_fee;
        $object->total_fee = $total_fee;
        $object->previous_course = $previous_course;
        $object->previous_affiliated_body = $previous_affiliated_body;
        $object->previous_duration_of_course = $previous_duration_of_course;
        $object->previous_roll_no = $previous_roll_no;
        $object->previous_passing_date = $previous_passing_date;
        $object->previous_total_marks = $previous_total_marks;
        $object->previous_marks_obtained = $previous_marks_obtained;
        $object->previous_cgpa = $previous_cgpa;
        $object->save();


        return response()->json([
            'message' => 'Saved Successfully',
            'object' => $object
        ],200);
    }
}
