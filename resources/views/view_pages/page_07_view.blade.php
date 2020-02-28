
<div class="card shadow p-3 w-100">
    <div class="card-body ">
        <div class="form-row">
            <div class="form-group  col-md-4">
                <label><strong>Educational Wing of CFE:</strong></label>
                <label>
                    {{$data && $data['educational_wing_cfe']['educational_wing_cfe'] ? $data['educational_wing_cfe']['educational_wing_cfe'] : '--'}}
                </label>
            </div>
        </div>
        
        <div id="wing_parent_div">
            @if($data && $data['educational_wing_cfe']['educational_wing_cfe']=='cs')
            <div id="wing_div_bise">
                <div class="col-md-12 mt-2">
                    <label for="">BISE</label>
                </div>
                <div class="card shadow p-3 w-100">
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label><strong>Course Applied in:</strong></label>
                                <label>
                                    {{$data && $data['bise_details']['bise_course_applied_in'] ? $data['bise_details']['bise_course_applied_in'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-3" id="bise_optional_subject_div" style="display: none">
                                <label><strong>Optional Subject:</strong></label>
                                <label>
                                    {{$data && $data['bise_details']['bise_optional_subject'] ? $data['bise_details']['bise_optional_subject'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-3" id="bise_others_div" style="display: none">
                                <label><strong>Others:</strong></label>
                                <label>
                                    {{$data && $data['bise_details']['bise_others'] ? $data['bise_details']['bise_others'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label><strong>Course Enrolled in CFE:</strong></label>
                                <label>
                                    {{$data && $data['bise_details']['bise_course_enrolled_cfe'] ? $data['bise_details']['bise_course_enrolled_cfe'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label><strong>Course Registered in:</strong></label>
                                <label>
                                    {{$data && $data['bise_details']['bise_course_registered_in'] ? $data['bise_details']['bise_course_registered_in'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label><strong>Roll No:</strong></label>
                                <label>
                                    {{$data && $data['bise_details']['bise_roll_no'] ? $data['bise_details']['bise_roll_no'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label><strong>Affiliated Body:</strong></label>
                                <label>
                                    {{$data && $data['bise_details']['bise_affiliated_body'] ? $data['bise_details']['bise_affiliated_body'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label><strong>Duration of Course:</strong></label>
                                <label>
                                    {{$data && $data['bise_details']['bise_duration_of_course'] ? $data['bise_details']['bise_duration_of_course'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label><strong>Date of Admission:</strong></label>
                                <label>
                                    {{$data && $data['bise_details']['bise_admission_date'] ? $data['bise_details']['bise_admission_date'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label><strong>Ending Date:</strong></label>
                                <label>
                                    {{$data && $data['bise_details']['bise_ending_date'] ? $data['bise_details']['bise_ending_date'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label><strong>Academic Term:</strong></label>
                                <label>
                                    {{$data && $data['bise_details']['bise_academic_term'] ? $data['bise_details']['bise_academic_term'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label><strong>Shift:</strong></label>
                                <label>
                                    {{$data && $data['bise_details']['bise_shift'] ? $data['bise_details']['bise_shift'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="card shadow p-3 w-100">
                            <div class="card-body ">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label><strong>Registration Status with Affiliated Body:</strong></label>
                                        <label>
                                            {{$data && $data['bise_details']['bise_registration_status'] ? $data['bise_details']['bise_registration_status'] : '--'}}
                                        </label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label><strong>Date of Registration:</strong></label>
                                        <label>
                                            {{$data && $data['bise_details']['bise_registration_date'] ? $data['bise_details']['bise_registration_date'] : '--'}}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="">Registration Fees</label>
                                </div>
                                <div class="card shadow p-3 w-100">
                                    <div class="card-body ">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label><strong>Actual:</strong></label>
                                                <label>
                                                    {{$data && $data['bise_details']['bise_actual_fee'] ? $data['bise_details']['bise_actual_fee'] : '--'}}
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label><strong>Late:</strong></label>
                                                <label>
                                                    {{$data && $data['bise_details']['bise_late_fee'] ? $data['bise_details']['bise_late_fee'] : '--'}}
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label><strong>Total:</strong></label>
                                                <label>
                                                    {{$data && $data['bise_details']['bise_total_fee'] ? $data['bise_details']['bise_total_fee'] : '--'}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($data && $data['educational_wing_cfe']['educational_wing_cfe']=='ims')
            <div id="wing_div_ims">
                <div class="col-md-12 mt-2">
                    <label for="">IMS</label>
                </div>
                <div class="card shadow p-3 w-100">
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group  col-md-4">
                                <label><strong>Course Applied in CFE:</strong></label>
                                <label>
                                    {{$data && $data['ims_details']['ims_course_applied_in_cfe'] ? $data['ims_details']['ims_course_applied_in_cfe'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Course Enrolled in CFE:</strong></label>
                                <label>
                                    {{$data && $data['ims_details']['ims_course_enrolled_in_cfe'] ? $data['ims_details']['ims_course_enrolled_in_cfe'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Course Registered in:</strong></label>
                                <label>
                                    {{$data && $data['ims_details']['ims_course_registered'] ? $data['ims_details']['ims_course_registered'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md-4">
                                <label><strong>Roll No:</strong></label>
                                <label>
                                    {{$data && $data['ims_details']['ims_roll_no'] ? $data['ims_details']['ims_roll_no'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Affiliated Body:</strong></label>
                                <label>
                                    {{$data && $data['ims_details']['ims_affiliated_body'] ? $data['ims_details']['ims_affiliated_body'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Duration of Course:</strong></label>
                                <label>
                                    {{$data && $data['ims_details']['ims_duration_of_course'] ? $data['ims_details']['ims_duration_of_course'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md-4">
                                <label><strong>Date of Admission:</strong></label>
                                <label>
                                    {{$data && $data['ims_details']['ims_admission_date'] ? $data['ims_details']['ims_admission_date'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Ending date:</strong></label>
                                <label>
                                    {{$data && $data['ims_details']['ims_ending_date'] ? $data['ims_details']['ims_ending_date'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Academic Term:</strong></label>
                                <label>
                                    {{$data && $data['ims_details']['ims_academic_term'] ? $data['ims_details']['ims_academic_term'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md-4">
                                <label><strong>Semester Category:</strong></label>
                                <label>
                                    {{$data && $data['ims_details']['ims_semester_category'] ? $data['ims_details']['ims_semester_category'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Shift:</strong></label>
                                <label>
                                    {{$data && $data['ims_details']['ims_shift'] ? $data['ims_details']['ims_shift'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="card shadow p-3 w-100">
                            <div class="card-body ">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label><strong>Registration Status with Affiliated Body:</strong></label>
                                        <label>
                                            {{$data && $data['ims_details']['ims_registration_status'] ? $data['ims_details']['ims_registration_status'] : '--'}}
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label><strong>Date of Registration:</strong></label>
                                        <label>
                                            {{$data && $data['ims_details']['ims_registration_date'] ? $data['ims_details']['ims_registration_date'] : '--'}}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="">Registration Fees</label>
                                </div>
                                <div class="card shadow p-3 w-100">
                                    <div class="card-body ">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label><strong>Actual:</strong></label>
                                                <label>
                                                    {{$data && $data['ims_details']['ims_actual_fee'] ? $data['ims_details']['ims_actual_fee'] : '--'}}
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label><strong>Late:</strong></label>
                                                <label>
                                                    {{$data && $data['ims_details']['ims_late_fee'] ? $data['ims_details']['ims_late_fee'] : '--'}}
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label><strong>Total:</strong></label>
                                                <label>
                                                    {{$data && $data['ims_details']['ims_total_fee'] ? $data['ims_details']['ims_total_fee'] : '--'}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($data && $data['educational_wing_cfe']['educational_wing_cfe']=='af')
            <div id="wing_div_af">
                <div class="col-md-12 mt-2">
                    <label for="">AF</label>
                </div>
                <div class="card shadow p-3 w-100">
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group  col-md-4">
                                <label><strong>Course Applied in:</strong></label>
                                <label>
                                    {{$data && $data['af_details']['af_course_applied_in'] ? $data['af_details']['af_course_applied_in'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Course Enrolled in CFE:</strong></label>
                                <label>
                                    {{$data && $data['af_details']['af_course_enrolled_in'] ? $data['af_details']['af_course_enrolled_in'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Course Registered in:</strong></label>
                                <label>
                                    {{$data && $data['af_details']['af_course_registered_in'] ? $data['af_details']['af_course_registered_in'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md-4">
                                <label><strong>Roll No:</strong></label>
                                <label>
                                    {{$data && $data['af_details']['af_roll_no'] ? $data['af_details']['af_roll_no'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Affiliated Body:</strong></label>
                                <label>
                                    {{$data && $data['af_details']['af_affiliated_body'] ? $data['af_details']['af_affiliated_body'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Duration of Course:</strong></label>
                                <label>
                                    {{$data && $data['af_details']['af_duration_of_course'] ? $data['af_details']['af_duration_of_course'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md-4">
                                <label><strong>Date of Admission:</strong></label>
                                <label>
                                    {{$data && $data['af_details']['af_admission_date'] ? $data['af_details']['af_admission_date'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Ending date:</strong></label>
                                <label>
                                    {{$data && $data['af_details']['af_ending_date'] ? $data['af_details']['af_ending_date'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Academic Term:</strong></label>
                                <label>
                                    {{$data && $data['af_details']['af_academic_term'] ? $data['af_details']['af_academic_term'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md-4">
                                <label><strong>Shift:</strong></label>
                                <label>
                                    {{$data && $data['af_details']['af_shift'] ? $data['af_details']['af_shift'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="card shadow p-3 w-100">
                            <div class="card-body ">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label><strong>Registration Status with Affiliated Body:</strong></label>
                                        <label>
                                            {{$data && $data['af_details']['af_registration_status'] ? $data['af_details']['af_registration_status'] : '--'}}
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label><strong>Date of Registration:</strong></label>
                                        <label>
                                            {{$data && $data['af_details']['af_registration_date'] ? $data['af_details']['af_registration_date'] : '--'}}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="">Registration Fees</label>
                                </div>
                                <div class="card shadow p-3 w-100">
                                    <div class="card-body ">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label><strong>Actual:</strong></label>
                                                <label>
                                                    {{$data && $data['af_details']['af_actual_fee'] ? $data['af_details']['af_actual_fee'] : '--'}}
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label><strong>Late:</strong></label>
                                                <label>
                                                    {{$data && $data['af_details']['af_late_fee'] ? $data['af_details']['af_late_fee'] : '--'}}
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label><strong>Total:</strong></label>
                                                <label>
                                                    {{$data && $data['af_details']['af_total_fee'] ? $data['af_details']['af_total_fee'] : '--'}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($data && $data['educational_wing_cfe']['educational_wing_cfe']=='vti')
            <div id="wing_div_vti">
                <div class="col-md-12 mt-2">
                    <label for="">VTI</label>
                </div>
                <div class="card shadow p-3 w-100">
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group  col-md-3">
                                <label><strong>Diploma Applied in:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_diploma_applied_in'] ? $data['vti_details']['vti_diploma_applied_in'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-2">
                                <label><strong>Diploma Enrolled in:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_diploma_enrolled_in'] ? $data['vti_details']['vti_diploma_enrolled_in'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-2">
                                <label><strong>Diploma Registered in:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_diploma_registered_in'] ? $data['vti_details']['vti_diploma_registered_in'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-2">
                                <label><strong>Dual course:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_dual_course'] ? $data['vti_details']['vti_dual_course'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-3">
                                <label><strong>Reason:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_reason'] ? $data['vti_details']['vti_reason'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3" style="display: none" id="vti_further_file_div">
                                <label><strong>Further File to be Received:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_further_file_received'] ? $data['vti_details']['vti_further_file_received'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-3" style="display: none" id="vti_follow_up_date">
                                <label><strong>Follow-Up Date:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_follow_up'] ? $data['vti_details']['vti_follow_up'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-3">
                                <label><strong>Roll No:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_roll_no'] ? $data['vti_details']['vti_roll_no'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-3">
                                <label><strong>Affiliated Body:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_affiliated_body'] ? $data['vti_details']['vti_affiliated_body'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md-4">
                                <label><strong>Duration of Diploma:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_duration_of_diploma'] ? $data['vti_details']['vti_duration_of_diploma'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Date of Admission:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_admission_date'] ? $data['vti_details']['vti_admission_date'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Ending Date:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_ending_date'] ? $data['vti_details']['vti_ending_date'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md-4">
                                <label><strong>Scheme of Study:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_scheme_of_study'] ? $data['vti_details']['vti_scheme_of_study'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Semester Category:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_semester_category'] ? $data['vti_details']['vti_semester_category'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group  col-md-4">
                                <label><strong>Shift:</strong></label>
                                <label>
                                    {{$data && $data['vti_details']['vti_shift'] ? $data['vti_details']['vti_shift'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="card shadow p-3 w-100">
                            <div class="card-body ">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label><strong>Registration Status with Affiliated Body:</strong></label>
                                        <label>
                                            {{$data && $data['vti_details']['vti_registration_status'] ? $data['vti_details']['vti_registration_status'] : '--'}}
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label><strong>Date of Registration:</strong></label>
                                        <label>
                                            {{$data && $data['vti_details']['vti_date_of_registration'] ? $data['vti_details']['vti_date_of_registration'] : '--'}}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="">Registration Fees</label>
                                </div>
                                <div class="card shadow p-3 w-100">
                                    <div class="card-body ">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label><strong>Actual:</strong></label>
                                                <label>
                                                    {{$data && $data['vti_details']['vti_registration_actual_fee'] ? $data['vti_details']['vti_registration_actual_fee'] : '--'}}
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label><strong>Late:</strong></label>
                                                <label>
                                                    {{$data && $data['vti_details']['vti_registration_late_fee'] ? $data['vti_details']['vti_registration_late_fee'] : '--'}}
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label><strong>Total:</strong></label>
                                                <label>
                                                    {{$data && $data['vti_details']['vti_registration_total_fee'] ? $data['vti_details']['vti_registration_total_fee'] : '--'}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

