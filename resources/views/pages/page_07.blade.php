<div id="page_07" style="display:none;">
    <form id="page_07_form">
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-4">
                        <label>Educational Wing of CFE:</label>
                        <select id="cfe_wing_selection" name="educational_wing_cfe" class="form-control"
                                onchange="setWingCorrespondingSectionDisplay()">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.educational_wing_cfe') as $key => $value)
                                <option value="{{$key}}" {{ $data ? $data['educational_wing_cfe']['educational_wing_cfe'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div id="wing_parent_div">
                    <div id="wing_div_bise">
                        <div class="col-md-12 mt-2">
                            <label for="">BISE</label>
                        </div>
                        <div class="card shadow p-3 w-100">
                            <div class="card-body ">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Course Applied in:</label>
                                        <select id="bise_course_applied" onchange="setBiseFieldsDisplay()" name="bise_course_applied_in" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.bise_course_applied_in') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['bise_details']['bise_course_applied_in'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3" id="bise_optional_subject_div" style="display: none">
                                        <label>Optional Subjects:</label>
                                        <select name="bise_optional_subject" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.bise_optional_subject') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['bise_details']['bise_optional_subject'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3" id="bise_others_div" style="display: none">
                                        <label>Others:</label>
                                        <input type="text" class="form-control text-center" name="bise_others" value="{{$data ? $data['bise_details']['bise_others'] : ''}}"
                                               placeholder="XXXXX">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Course Enrolled in CFE:</label>
                                        <select name="bise_course_enrolled_cfe" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.bise_course_enrolled_cfe') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['bise_details']['bise_course_enrolled_cfe'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Course Registered in:</label>
                                        <select name="bise_course_registered_in" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.bise_course_applied_in') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['bise_details']['bise_course_registered_in'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Roll No:</label>
                                        <input type="text" class="form-control text-center" name='bise_roll_no' value="{{$data ? $data['bise_details']['bise_roll_no'] : ''}}"
                                               placeholder="XXXXX">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Affiliated Body:</label>
                                        <select name="bise_affiliated_body" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.bise_affiliated_body') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['bise_details']['bise_affiliated_body'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Duration of Course:</label>
                                        <select name="bise_duration_of_course" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.bise_duration_of_course') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['bise_details']['bise_duration_of_course'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Date of Admission:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="bise_admission_date" value="{{$data && $data['bise_details']['bise_admission_date'] ? date('d/m/Y',strtotime($data['bise_details']['bise_admission_date'])) : ''}}"
                                               placeholder="dd/mm/yyyyy">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Ending Date:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="bise_ending_date" value="{{$data && $data['bise_details']['bise_ending_date'] ? date('d/m/Y',strtotime($data['bise_details']['bise_ending_date'])) : ''}}"
                                               placeholder="dd/mm/yyyyy">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Academic Term:</label>
                                        <select id="bise_academic_term" name="bise_academic_term" class="form-control" onchange="setDisplayForAnnualAndSemester()">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.academic_term') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['bise_details']['bise_academic_term'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Shift:</label>
                                        <select name="bise_shift" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.shift') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['bise_details']['bise_shift'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="card shadow p-3 w-100">
                                    <div class="card-body ">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Registration Status with Affiliated Body:</label>

                                                <select name="bise_registration_status" class="form-control">
                                                    <option value="" selected disabled>--select--</option>
                                                    @foreach(\Config::get('constants.registration_status') as $key => $value)
                                                        <option value="{{$key}}" {{ $data ? $data['bise_details']['bise_registration_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Date of Registration:</label>
                                                <input type="text" class="form-control text-center datepicker"
                                                       name="bise_registration_date" value="{{$data && $data['bise_details']['bise_registration_date'] ? date('d/m/Y',strtotime($data['bise_details']['bise_registration_date'])) : ''}}"
                                                       placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <label for="">Registration Fees</label>
                                        </div>
                                        <div class="card shadow p-3 w-100">
                                            <div class="card-body ">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label>Actual:</label>
                                                        <input onkeyup="setTotalFeeBise()" id="actual_fee_bise" type="number" class="form-control text-center"
                                                               name="bise_actual_fee" value="{{$data ? $data['bise_details']['bise_actual_fee'] : ''}}"
                                                               placeholder="Enter Actual Fee">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Late:</label>
                                                        <input onkeyup="setTotalFeeBise()" id="late_fee_bise" type="number" class="form-control text-center "
                                                               name="bise_late_fee" value="{{$data ? $data['bise_details']['bise_late_fee'] : ''}}"
                                                               placeholder="Enter Late Fee">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Total:</label>
                                                        <input readonly id="total_fee_bise" type="number" class="form-control text-center"
                                                               name="bise_total_fee" value="{{$data ? $data['bise_details']['bise_total_fee'] : ''}}"
                                                               placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="wing_div_ims">
                        <div class="col-md-12 mt-2">
                            <label for="">IMS</label>
                        </div>
                        <div class="card shadow p-3 w-100">
                            <div class="card-body ">
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Course Applied in CFE:</label>
                                        <select name="ims_course_applied_in_cfe" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.ims_course_applied_in_cfe') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['ims_details']['ims_course_applied_in_cfe'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Course Enrolled in CFE:</label>
                                        <select name="ims_course_enrolled_in_cfe" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.ims_course_applied_in_cfe') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['ims_details']['ims_course_enrolled_in_cfe'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Course Registered in:</label>
                                        <select name="ims_course_registered" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.ims_course_registered') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['ims_details']['ims_course_registered'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Roll No:</label>
                                        <input type="text" class="form-control text-center" name="ims_roll_no" value="{{$data ? $data['ims_details']['ims_roll_no'] : ''}}"
                                               placeholder="XXXXX">
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Affiliated Body:</label>
                                        <select name="ims_affiliated_body" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.ims_affiliated_body') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['ims_details']['ims_affiliated_body'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Duration of Course:</label>
                                        <select name="ims_duration_of_course" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.ims_duration_of_course') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['ims_details']['ims_duration_of_course'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Date of Admission:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="ims_admission_date" value="{{$data && $data['ims_details']['ims_admission_date'] ? date('d/m/Y',strtotime($data['ims_details']['ims_admission_date'])) : ''}}"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Ending date:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="ims_ending_date" value="{{$data && $data['ims_details']['ims_ending_date'] ? date('d/m/Y',strtotime($data['ims_details']['ims_ending_date'])) : ''}}"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Academic Term:</label>
                                        <select id="ims_academic_term" name="ims_academic_term" class="form-control" onchange="setDisplayForAnnualAndSemester()">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.academic_term') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['ims_details']['ims_academic_term'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Semester Category:</label>
                                        <select name="ims_semester_category" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.semester_category') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['ims_details']['ims_semester_category'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Shift:</label>
                                        <select name="ims_shift" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.shift') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['ims_details']['ims_shift'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="card shadow p-3 w-100">
                                    <div class="card-body ">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Registration Status with Affiliated Body:</label>
                                                <select name="ims_registration_status" class="form-control">
                                                    <option value="" selected disabled>--select--</option>
                                                    @foreach(\Config::get('constants.registration_status') as $key => $value)
                                                        <option value="{{$key}}" {{ $data ? $data['ims_details']['ims_registration_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Date of Registration:</label>
                                                <input type="text" class="form-control text-center datepicker"
                                                       name="ims_registration_date" value="{{$data && $data['ims_details']['ims_registration_date']? date('d/m/Y',strtotime($data['ims_details']['ims_registration_date'])) : ''}}"
                                                       placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <label for="">Registration Fees</label>
                                        </div>
                                        <div class="card shadow p-3 w-100">
                                            <div class="card-body ">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label>Actual:</label>
                                                        <input onkeyup="setTotalFeeIms()" id="actual_fee_ims" type="number" class="form-control text-center"
                                                               name="ims_actual_fee" value="{{$data ? $data['ims_details']['ims_actual_fee'] : ''}}"
                                                               placeholder="Enter Actual Fee">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Late:</label>
                                                        <input onkeyup="setTotalFeeIms()" id="late_fee_ims" type="number" class="form-control text-center "
                                                               name="ims_late_fee" value="{{$data ? $data['ims_details']['ims_late_fee'] : ''}}"
                                                               placeholder="Enter Late Fee">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Total:</label>
                                                        <input id="total_fee_ims" type="number" class="form-control text-center"
                                                               name="ims_total_fee" value="{{$data ? $data['ims_details']['ims_total_fee'] : ''}}"
                                                               readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="wing_div_af">
                        <div class="col-md-12 mt-2">
                            <label for="">AF</label>
                        </div>
                        <div class="card shadow p-3 w-100">
                            <div class="card-body ">
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Course Applied in:</label>
                                        <select name="af_course_applied_in" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.af_course_applied_in') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['af_details']['af_course_applied_in'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Course Enrolled in CFE:</label>
                                        <select name="af_course_enrolled_in" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.af_course_enrolled_in') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['af_details']['af_course_enrolled_in'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Course Registered in:</label>
                                        <select name="af_course_registered_in" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.af_course_registered_in') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['af_details']['af_course_registered_in'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Roll No:</label>
                                        <input type="text" class="form-control text-center" name="af_roll_no" value="{{$data ? $data['af_details']['af_roll_no'] : ''}}"
                                               placeholder="XXXXX">
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Affiliated Body:</label>
                                        <select name="af_affiliated_body" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.af_affiliated_body') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['af_details']['af_affiliated_body'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Duration of Course:</label>
                                        <select name="af_duration_of_course" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.af_duration_of_course') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['af_details']['af_duration_of_course'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Date of Admission:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="af_admission_date" value="{{$data && $data['af_details']['af_admission_date'] ? date('d/m/Y',strtotime($data['af_details']['af_admission_date'])) : ''}}"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Ending date:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="af_ending_date" value="{{$data && $data['af_details']['af_ending_date'] ? date('d/m/Y',strtotime($data['af_details']['af_ending_date'])) : ''}}"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Academic Term:</label>
                                        <select id="af_academic_term" name="af_academic_term" class="form-control" onchange="setDisplayForAnnualAndSemester()">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.academic_term') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['af_details']['af_academic_term'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Shift:</label>
                                        <select name="af_shift" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.shift') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['af_details']['af_shift'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="card shadow p-3 w-100">
                                    <div class="card-body ">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Registration Status with Affiliated Body:</label>
                                                <select name="af_registration_status" class="form-control">
                                                    <option value="" selected disabled>--select--</option>
                                                    @foreach(\Config::get('constants.registration_status') as $key => $value)
                                                        <option value="{{$key}}" {{ $data ? $data['af_details']['af_registration_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Date of Registration:</label>
                                                <input type="text" class="form-control text-center datepicker"
                                                       name="af_registration_date" value="{{$data && $data['af_details']['af_registration_date'] ? date('d/m/Y',strtotime($data['af_details']['af_registration_date'])) : ''}}"
                                                       placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <label for="">Registration Fees</label>
                                        </div>
                                        <div class="card shadow p-3 w-100">
                                            <div class="card-body ">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label>Actual:</label>
                                                        <input onkeyup="setTotalFeeAf()" id="actual_fee_af" type="number" class="form-control text-center"
                                                               name="af_actual_fee" value="{{$data ? $data['af_details']['af_actual_fee'] : ''}}"
                                                               placeholder="Enter Actual Fee">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Late:</label>
                                                        <input onkeyup="setTotalFeeAf()" id="late_fee_af" type="number" class="form-control text-center "
                                                               name="af_late_fee" value="{{$data ? $data['af_details']['af_late_fee'] : ''}}"
                                                               placeholder="Enter Late Fee">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Total:</label>
                                                        <input id="total_fee_af" type="number" class="form-control text-center"
                                                               name="af_total_fee" value="{{$data ? $data['af_details']['af_total_fee'] : ''}}"
                                                               readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="wing_div_vti">
                        <div class="col-md-12 mt-2">
                            <label for="">VTI</label>
                        </div>
                        <div class="card shadow p-3 w-100">
                            <div class="card-body ">
                                <div class="form-row">
                                    <div class="form-group  col-md-3">
                                        <label>Diploma Applied in:</label>
                                        <select name="vti_diploma_applied_in" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.vti_diploma_applied_in') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['vti_details']['vti_diploma_applied_in'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-2">
                                        <label>Diploma Enrolled in:</label>
                                        <select name="vti_diploma_enrolled_in" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.vti_diploma_enrolled_in') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['vti_details']['vti_diploma_enrolled_in'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-2">
                                        <label>Diploma Registered in:</label>
                                        <select name="vti_diploma_registered_in" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.vti_diploma_registered_in') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['vti_details']['vti_diploma_registered_in'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-2">
                                        <label>Dual course:</label>
                                        <select id="vti_dual_course" name="vti_dual_course" class="form-control" onchange="setDualCoursePageDisplay()">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['vti_details']['vti_dual_course'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-3">
                                        <label>Reason:</label>
                                        <select id="vti_reason" name="vti_reason" class="form-control" onchange="setVtiFieldsDisplay()">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.vti_reason') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['vti_details']['vti_reason'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3" style="display: none" id="vti_further_file_div">
                                        <label>Further File to be Received:</label>
                                        <select name="vti_further_file_received" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['vti_details']['vti_further_file_received'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-3" style="display: none" id="vti_follow_up_date">
                                        <label>Follow-Up Date:</label>
                                        <input type="text" class="form-control text-center" id="vti_follow_up"
                                               name="vti_follow_up" value="{{$data && $data['vti_details']['vti_follow_up'] ? date('d/m/Y',strtotime($data['vti_details']['vti_follow_up'])) : ''}}"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group  col-md-3">
                                        <label>Roll No:</label>
                                        <input type="text" class="form-control text-center" name="vti_roll_no" value="{{$data ? $data['vti_details']['vti_roll_no'] : ''}}"
                                               placeholder="XXXXX">
                                    </div>
                                    <div class="form-group  col-md-3">
                                        <label>Affiliated Body:</label>
                                        <select name="vti_affiliated_body" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.vti_affiliated_body') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['vti_details']['vti_affiliated_body'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Duration of Diploma:</label>
                                        <select name="vti_duration_of_diploma" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.vti_duration_of_diploma') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['vti_details']['vti_duration_of_diploma'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Date of Admission:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="vti_admission_date" value="{{$data && $data['vti_details']['vti_admission_date'] ? date('d/m/Y',strtotime($data['vti_details']['vti_admission_date'])) : ''}}"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Ending Date:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="vti_ending_date" value="{{$data && $data['vti_details']['vti_ending_date'] ? date('d/m/Y',strtotime($data['vti_details']['vti_ending_date'])) : ''}}"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Scheme of Study:</label>
                                        <select id="vti_scheme_of_study" name="vti_scheme_of_study" class="form-control" onchange="setDisplayForAnnualAndSemester()">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.academic_term') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['vti_details']['vti_scheme_of_study'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Semester Category:</label>
                                        <select name="vti_semester_category" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.semester_category') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['vti_details']['vti_semester_category'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Shift:</label>
                                        <select name="vti_shift" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.shift') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['vti_details']['vti_shift'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="card shadow p-3 w-100">
                                    <div class="card-body ">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Registration Status with Affiliated Body:</label>
                                                <select name="vti_registration_status" class="form-control">
                                                    <option value="" selected disabled>--select--</option>
                                                    @foreach(\Config::get('constants.registration_status') as $key => $value)
                                                        <option value="{{$key}}" {{ $data ? $data['vti_details']['vti_registration_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Date of Registration:</label>
                                                <input type="text" class="form-control text-center datepicker"
                                                       name="vti_date_of_registration" value="{{$data && $data['vti_details']['vti_date_of_registration'] ? date('d/m/Y',strtotime($data['vti_details']['vti_date_of_registration'])) : ''}}"
                                                       placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <label for="">Registration Fees</label>
                                        </div>
                                        <div class="card shadow p-3 w-100">
                                            <div class="card-body ">
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label>Actual:</label>
                                                        <input onkeyup="setTotalFeeVti()" id="actual_fee_vti" type="number" class="form-control text-center"
                                                               name="vti_registration_actual_fee" value="{{$data ? $data['vti_details']['vti_registration_actual_fee'] : ''}}"
                                                               placeholder="Enter Actual Fee">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Late:</label>
                                                        <input onkeyup="setTotalFeeVti()" id="late_fee_vti" type="number" class="form-control text-center "
                                                               name="vti_registration_late_fee" value="{{$data ? $data['vti_details']['vti_registration_late_fee'] : ''}}"
                                                               placeholder="Enter Late Fee">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Total:</label>
                                                        <input id="total_fee_vti" type="number" class="form-control text-center"
                                                               name="vti_registration_total_fee" value="{{$data ? $data['vti_details']['vti_registration_total_fee'] : ''}}"
                                                               readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('pages.page_11')
    </form>
</div>

@section('script_page_7')
    <script>
        setTotalFeeBise();
        setTotalFeeIms();
        setTotalFeeAf();
        setTotalFeeVti();
        setWingCorrespondingSectionDisplay();
        setDisplayForAnnualAndSemester();

        $('#vti_follow_up').datepicker({
            format:'dd/mm/yyyy',
            startDate: new Date(),
            autoclose: true
        });

        function setWingCorrespondingSectionDisplay() {
            let wings_array = {
                'cs': 'wing_div_bise',
                'ims': 'wing_div_ims',
                'af': 'wing_div_af',
                'vti': 'wing_div_vti'
            };
            for (let key in wings_array) {
                $('#' + wings_array[key]).hide();
            }

            $('#' + wings_array[$('#cfe_wing_selection option:selected').val()]).fadeIn();
            setBiseFieldsDisplay();
            setVtiFieldsDisplay();
            setDualCoursePageDisplay();
        }

        function setBiseFieldsDisplay() {
            let selected = $('#bise_course_applied option:selected').val();
            if(selected == 'ics'){
                $('#bise_optional_subject_div').fadeIn();
            }
            else if(selected == 'fa'){
                $('#bise_optional_subject_div').fadeIn();
                $('#bise_others_div').fadeIn();
            }
            else{
                $('#bise_optional_subject_div').fadeOut();
                $('#bise_others_div').fadeOut();
            }
        }

        function setVtiFieldsDisplay() {
            let selected = $('#vti_reason option:selected').val();
            if(selected == 'lessService'){
                $('#vti_further_file_div').fadeIn();
                $('#vti_follow_up_date').fadeIn();
            }
            else{
                $('#vti_further_file_div').fadeOut();
                $('#vti_follow_up_date').fadeOut();
            }
        }

        function setDualCoursePageDisplay() {
            let selected = $('#vti_dual_course option:selected').val();
            let parent = $('#cfe_wing_selection option:selected').val();
            if(selected == 'yes' && parent == 'vti'){
                $('#dual_course_div').fadeIn();
                // if(container_array.indexOf('#page_11') === -1) {
                //     container_array.splice(7, 0, '#page_11');
                //     api_url_array.splice(7, 0, '/dual_course-details');
                // }
            }
            else{
                $('#dual_course_div').fadeOut();
                // $('#page_11').attr('style','display:none');
                // container_array.splice(7,1);
                // api_url_array.splice(7,1);
            }
        }

        function setDisplayForAnnualAndSemester() {
            //clearing All Pages for annual and semester
            for(let index = 15; index <= 24 ;index++){
                $('#page_'+index).hide();
            }
            container_array.splice(10,container_array.length - 10);
            api_url_array.splice(10,api_url_array.length - 10);
            let term_array = {
                'cs': '#bise_academic_term',
                'ims': '#ims_academic_term',
                'af': '#af_academic_term',
                'vti': '#vti_scheme_of_study'
            };
            let parent = $('#cfe_wing_selection option:selected').val();
            let selectedTerm = $(term_array[parent]).val();
            if(selectedTerm == 'annual'){
                container_array.splice(10, 0, '#page_15');
                api_url_array.splice(10, 0, '/annual-part-one');
            }
            else if(selectedTerm == 'semester'){
                container_array.splice(10, 0, '#page_17');
                api_url_array.splice(10, 0, '/first-semester');
            }
            setDisplayForButtons();
            $('input[name="next_appearance_date[]"').datepicker({
                format:'dd/mm/yyyy',
                autoclose: true
            });
            $('input[name="last_chance_date[]"').datepicker({
                format:'dd/mm/yyyy',
                autoclose: true
            });
        }

        function setTotalFeeBise() {
            let actual = $('#actual_fee_bise').val();
            let late = $('#late_fee_bise').val();
            $('#total_fee_bise').val(parseInt(actual)+parseInt(late));
        }
        function setTotalFeeIms() {
            let actual = $('#actual_fee_ims').val();
            let late = $('#late_fee_ims').val();
            $('#total_fee_ims').val(parseInt(actual)+parseInt(late));
        }
        function setTotalFeeAf() {
            let actual = $('#actual_fee_af').val();
            let late = $('#late_fee_af').val();
            $('#total_fee_af').val(parseInt(actual)+parseInt(late));
        }
        function setTotalFeeVti() {
            let actual = $('#actual_fee_vti').val();
            let late = $('#late_fee_vti').val();
            $('#total_fee_vti').val(parseInt(actual)+parseInt(late));
        }
    </script>
@endsection
