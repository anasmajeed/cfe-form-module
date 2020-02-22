<?php

namespace App\Http\Controllers;

use App\AfDetail;
use App\BiseDetail;
use App\DualCourseDetail;
use App\EducationalWingCfe;
use App\Fields\AfDetailFields;
use App\Fields\BiseDetailFields;
use App\Fields\DualCourseDetailFields;
use App\Fields\EducationWingCfeFields;
use App\Fields\ImsDetailFields;
use App\Fields\VtiDetailFields;
use App\ImsDetail;
use App\VtiDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class EducationalWingCfeController extends Controller
{
    public function post(Request $request){
        $params = $request->all();

        //Educational Wing Cfe
        $indexTableId = Arr::get($params,'index_id');
        $educationalWingCfe = Arr::get($params,EducationWingCfeFields::EDUCATION_WING_CFE);

        //Bise Detail
        $bise_course_applied_in = Arr::get($params,BiseDetailFields::BISE_COURSE_APPLIED_IN);
        $bise_optional_subject = Arr::get($params,BiseDetailFields::BISE_OPTIONAL_SUBJECT);
        $bise_others = Arr::get($params,BiseDetailFields::BISE_OTHERS);
        $bise_course_enrolled_cfe = Arr::get($params,BiseDetailFields::BISE_COURSE_ENROLLED_CFE);
        $bise_course_registered_in = Arr::get($params,BiseDetailFields::BISE_COURSE_REGISTERED_IN);
        $bise_roll_no = Arr::get($params,BiseDetailFields::BISE_ROLL_NO);
        $bise_affiliated_body = Arr::get($params,BiseDetailFields::BISE_AFFILIATED_BODY);
        $bise_duration_of_course = Arr::get($params,BiseDetailFields::BISE_DURATION_OF_COURSE);
        $bise_admission_date = Arr::get($params,BiseDetailFields::BISE_ADMISSION_DATE);
        $bise_ending_date = Arr::get($params,BiseDetailFields::BISE_ENDING_DATE);
        $bise_academic_term = Arr::get($params,BiseDetailFields::BISE_ACADEMIC_TERM);
        $bise_shift = Arr::get($params,BiseDetailFields::BISE_SHIFT);
        $bise_registration_status = Arr::get($params,BiseDetailFields::BISE_REGISTRATION_STATUS);
        $bise_registration_date = Arr::get($params,BiseDetailFields::BISE_REGISTRATION_DATE);
        $bise_actual_fee = Arr::get($params,BiseDetailFields::BISE_ACTUAL_FEE);
        $bise_late_fee = Arr::get($params,BiseDetailFields::BISE_LATE_FEE);
        $bise_total_fee = Arr::get($params,BiseDetailFields::BISE_TOTAL_FEE);

        //IMS Detail
        $ims_course_applied_in_cfe = Arr::get($params,ImsDetailFields::IMS_COURSE_APPLIED_IN_CFE);
        $ims_course_enrolled_in_cfe = Arr::get($params,ImsDetailFields::IMS_COURSE_ENROLLED_IN_CFE);
        $ims_course_registered = Arr::get($params,ImsDetailFields::IMS_COURSE_REGISTERED);
        $ims_roll_no = Arr::get($params,ImsDetailFields::IMS_ROLL_NO);
        $ims_affiliated_body = Arr::get($params,ImsDetailFields::IMS_AFFILIATED_BODY);
        $ims_duration_of_course = Arr::get($params,ImsDetailFields::IMS_DURATION_OF_COURSE);
        $ims_admission_date = Arr::get($params,ImsDetailFields::IMS_ADMISSION_DATE);
        $ims_ending_date = Arr::get($params,ImsDetailFields::IMS_ENDING_DATE);
        $ims_academic_term = Arr::get($params,ImsDetailFields::IMS_ACADEMIC_TERM);
        $ims_semester_category = Arr::get($params,ImsDetailFields::IMS_SEMESTER_CATEGORY);
        $ims_shift = Arr::get($params,ImsDetailFields::IMS_SEMESTER_CATEGORY);
        $ims_registration_status = Arr::get($params,ImsDetailFields::IMS_REGISTRATION_STATUS);
        $ims_registration_date = Arr::get($params,ImsDetailFields::IMS_REGISTRATION_DATE);
        $ims_actual_fee = Arr::get($params,ImsDetailFields::IMS_ACTUAL_FEE);
        $ims_late_fee = Arr::get($params,ImsDetailFields::IMS_LATE_FEE);
        $ims_total_fee = Arr::get($params,ImsDetailFields::IMS_TOTAL_FEE);

        //Af Detail
        $af_course_applied_in = Arr::get($params,AfDetailFields::AF_COURSE_APPLIED_IN);
        $af_course_enrolled_in = Arr::get($params,AfDetailFields::AF_COURSE_ENROLLED_IN);
        $af_course_registered_in = Arr::get($params,AfDetailFields::AF_COURSE_REGISTERED_IN);
        $af_roll_no = Arr::get($params,AfDetailFields::AF_ROLL_NO);
        $af_affiliated_body = Arr::get($params,AfDetailFields::AF_AFFILIATED_BODY);
        $af_duration_of_course = Arr::get($params,AfDetailFields::AF_DURATION_OF_COURSE);
        $af_admission_date = Arr::get($params,AfDetailFields::AF_ADMISSION_DATE);
        $af_ending_date = Arr::get($params,AfDetailFields::AF_ENDING_DATE);
        $af_academic_term = Arr::get($params,AfDetailFields::AF_ACADEMIC_TERM);
        $af_shift = Arr::get($params,AfDetailFields::AF_SHIFT);
        $af_registration_status = Arr::get($params,AfDetailFields::AF_REGISTRATION_STATUS);
        $af_registration_date = Arr::get($params,AfDetailFields::AF_REGISTRATION_DATE);
        $af_actual_fee = Arr::get($params,AfDetailFields::AF_ACTUAL_FEE);
        $af_late_fee = Arr::get($params,AfDetailFields::AF_LATE_FEE);
        $af_total_fee = Arr::get($params,AfDetailFields::AF_TOTAL_FEE);

        //VTI Detail
        $vti_diploma_applied_in = Arr::get($params,VtiDetailFields::VTI_DIPLOMA_APPLIED_IN);
        $vti_diploma_enrolled_in = Arr::get($params,VtiDetailFields::VTI_DIPLOMA_ENROLLED_IN);
        $vti_diploma_registered_in = Arr::get($params,VtiDetailFields::VTI_DIPLOMA_REGISTERED_IN);
        $vti_dual_course = Arr::get($params,VtiDetailFields::VTI_DUAL_COURSE);
        $vti_reason = Arr::get($params,VtiDetailFields::VTI_REASON);
        $vti_further_file_received = Arr::get($params,VtiDetailFields::VTI_FURTHER_FILE_RECEIVED);
        $vti_follow_up = Arr::get($params,VtiDetailFields::VTI_FOLLOW_UP);
        $vti_roll_no = Arr::get($params,VtiDetailFields::VTI_ROLL_NO);
        $vti_affiliated_body = Arr::get($params,VtiDetailFields::VTI_AFFILIATED_BODY);
        $vti_duration_of_diploma = Arr::get($params,VtiDetailFields::VTI_DURATION_OF_DIPLOMA);
        $vti_admission_date = Arr::get($params,VtiDetailFields::VTI_ADMISSION_DATE);
        $vti_ending_date = Arr::get($params,VtiDetailFields::VTI_ENDING_DATE);
        $vti_scheme_of_study = Arr::get($params,VtiDetailFields::VTI_SCHEME_OF_STUDY);
        $vti_semester_category = Arr::get($params,VtiDetailFields::VTI_SEMESTER_CATEGORY);
        $vti_shift = Arr::get($params,VtiDetailFields::VTI_SHIFT);
        $vti_registration_status = Arr::get($params,VtiDetailFields::VTI_REGISTRATION_STATUS);
        $vti_date_of_registration = Arr::get($params,VtiDetailFields::VTI_DATE_OF_REGISTRATION);
        $vti_registration_actual_fee = Arr::get($params,VtiDetailFields::VTI_REGISTRATION_ACTUAL_FEE);
        $vti_registration_late_fee = Arr::get($params,VtiDetailFields::VTI_REGISTRATION_LATE_FEE);
        $vti_registration_total_fee = Arr::get($params,VtiDetailFields::VTI_REGISTRATION_TOTAL_FEE);

        //Dual Course Detail
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
            $object = EducationalWingCfe::where(EducationWingCfeFields::INDEX_TABLE_ID,$indexTableId)->first();
            if(!$object){
                $object = new EducationalWingCfe();
            }
            $biseObject = BiseDetail::where(BiseDetailFields::INDEX_TABLE_ID,$indexTableId)->first();
            if(!$biseObject){
                $biseObject = new BiseDetail();
            }
            $imsObject = ImsDetail::where(ImsDetailFields::INDEX_TABLE_ID,$indexTableId)->first();
            if(!$imsObject){
                $imsObject = new ImsDetail();
            }
            $afObject = AfDetail::where(AfDetailFields::INDEX_TABLE_ID,$indexTableId)->first();
            if(!$afObject){
                $afObject = new AfDetail();
            }
            $vtiObject = VtiDetail::where(VtiDetailFields::INDEX_TABLE_ID,$indexTableId)->first();
            if(!$vtiObject){
                $vtiObject = new VtiDetail();
            }
            $dualCourseObject = DualCourseDetail::where(DualCourseDetailFields::INDEX_TABLE_ID,$indexTableId)->first();
            if(!$dualCourseObject){
                $dualCourseObject = new DualCourseDetail();
            }
        }

        //Educational Data
        $object->index_table_id = $indexTableId;
        $object->educational_wing_cfe = $educationalWingCfe;
        $object->save();

        //Bise Detail
        $biseObject->index_table_id = $indexTableId;
        $biseObject->bise_course_applied_in = $bise_course_applied_in;
        $biseObject->bise_optional_subject = $bise_optional_subject;
        $biseObject->bise_others = $bise_others;
        $biseObject->bise_course_enrolled_cfe = $bise_course_enrolled_cfe;
        $biseObject->bise_course_registered_in = $bise_course_registered_in;
        $biseObject->bise_roll_no = $bise_roll_no;
        $biseObject->bise_affiliated_body = $bise_affiliated_body;
        $biseObject->bise_duration_of_course = $bise_duration_of_course;
        $biseObject->bise_admission_date = $bise_admission_date;
        $biseObject->bise_ending_date = $bise_ending_date;
        $biseObject->bise_academic_term = $bise_academic_term;
        $biseObject->bise_shift = $bise_shift;
        $biseObject->bise_registration_status = $bise_registration_status;
        $biseObject->bise_registration_date = $bise_registration_date;
        $biseObject->bise_actual_fee = $bise_actual_fee;
        $biseObject->bise_late_fee = $bise_late_fee;
        $biseObject->bise_total_fee = $bise_total_fee;
        $biseObject->save();

        //IMS Detail
        $imsObject->index_table_id = $indexTableId;
        $imsObject->ims_course_applied_in_cfe = $ims_course_applied_in_cfe;
        $imsObject->ims_course_enrolled_in_cfe = $ims_course_enrolled_in_cfe;
        $imsObject->ims_course_registered = $ims_course_registered;
        $imsObject->ims_roll_no = $ims_roll_no;
        $imsObject->ims_affiliated_body = $ims_affiliated_body;
        $imsObject->ims_duration_of_course = $ims_duration_of_course;
        $imsObject->ims_admission_date = $ims_admission_date;
        $imsObject->ims_ending_date = $ims_ending_date;
        $imsObject->ims_academic_term = $ims_academic_term;
        $imsObject->ims_semester_category = $ims_semester_category;
        $imsObject->ims_shift = $ims_shift;
        $imsObject->ims_registration_status = $ims_registration_status;
        $imsObject->ims_registration_date = $ims_registration_date;
        $imsObject->ims_actual_fee = $ims_actual_fee;
        $imsObject->ims_late_fee = $ims_late_fee;
        $imsObject->ims_total_fee = $ims_total_fee;
        $imsObject->save();

        //AF Detail
        $afObject->index_table_id = $indexTableId;
        $afObject->af_course_applied_in = $af_course_applied_in;
        $afObject->af_course_enrolled_in = $af_course_enrolled_in;
        $afObject->af_course_registered_in = $af_course_registered_in;
        $afObject->af_roll_no = $af_roll_no;
        $afObject->af_affiliated_body = $af_affiliated_body;
        $afObject->af_duration_of_course = $af_duration_of_course;
        $afObject->af_admission_date = $af_admission_date;
        $afObject->af_ending_date = $af_ending_date;
        $afObject->af_academic_term = $af_academic_term;
        $afObject->af_shift = $af_shift;
        $afObject->af_registration_status = $af_registration_status;
        $afObject->af_registration_date = $af_registration_date;
        $afObject->af_actual_fee = $af_actual_fee;
        $afObject->af_late_fee = $af_late_fee;
        $afObject->af_total_fee = $af_total_fee;
        $afObject->save();

        // VTI Detail
        $vtiObject->index_table_id = $indexTableId;
        $vtiObject->vti_diploma_applied_in = $vti_diploma_applied_in;
        $vtiObject->vti_diploma_enrolled_in = $vti_diploma_enrolled_in;
        $vtiObject->vti_diploma_registered_in = $vti_diploma_registered_in;
        $vtiObject->vti_dual_course = $vti_dual_course;
        $vtiObject->vti_reason = $vti_reason;
        $vtiObject->vti_further_file_received = $vti_further_file_received;
        $vtiObject->vti_follow_up = $vti_follow_up;
        $vtiObject->vti_roll_no = $vti_roll_no;
        $vtiObject->vti_affiliated_body = $vti_affiliated_body;
        $vtiObject->vti_duration_of_diploma = $vti_duration_of_diploma;
        $vtiObject->vti_admission_date = $vti_admission_date;
        $vtiObject->vti_ending_date = $vti_ending_date;
        $vtiObject->vti_scheme_of_study = $vti_scheme_of_study;
        $vtiObject->vti_semester_category = $vti_semester_category;
        $vtiObject->vti_shift = $vti_shift;
        $vtiObject->vti_registration_status = $vti_registration_status;
        $vtiObject->vti_date_of_registration = $vti_date_of_registration;
        $vtiObject->vti_registration_actual_fee = $vti_registration_actual_fee;
        $vtiObject->vti_registration_late_fee = $vti_registration_late_fee;
        $vtiObject->vti_registration_total_fee = $vti_registration_total_fee;
        $vtiObject->save();

        //Dual Course Detail
        $dualCourseObject->index_table_id = $indexTableId;
        $dualCourseObject->course = $course;
        $dualCourseObject->roll_no = $roll_no;
        $dualCourseObject->affiliated_body = $affiliated_body;
        $dualCourseObject->duration_of_course = $duration_of_course;
        $dualCourseObject->admission_date = $admission_date;
        $dualCourseObject->ending_date = $ending_date;
        $dualCourseObject->scheme_of_study = $scheme_of_study;
        $dualCourseObject->semester_category = $semester_category;
        $dualCourseObject->shift = $shift;
        $dualCourseObject->registration_status = $registration_status;
        $dualCourseObject->registration_date = $registration_date;
        $dualCourseObject->actual_fee = $actual_fee;
        $dualCourseObject->late_fee = $late_fee;
        $dualCourseObject->total_fee = $total_fee;
        $dualCourseObject->previous_course = $previous_course;
        $dualCourseObject->previous_affiliated_body = $previous_affiliated_body;
        $dualCourseObject->previous_duration_of_course = $previous_duration_of_course;
        $dualCourseObject->previous_roll_no = $previous_roll_no;
        $dualCourseObject->previous_passing_date = $previous_passing_date;
        $dualCourseObject->previous_total_marks = $previous_total_marks;
        $dualCourseObject->previous_marks_obtained = $previous_marks_obtained;
        $dualCourseObject->previous_cgpa = $previous_cgpa;
        $dualCourseObject->save();

        return response()->json([
            'message' => 'Saved Successfully',
            'object' => $object
        ],200);
    }
}
