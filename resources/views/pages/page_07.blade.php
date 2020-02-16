<div id="page_07" style="display:none;">
    <form id="page_07_form">
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-4">
                        <label>Educational Wing of CFE:</label>
                        <select id="cfe_wing_selection" name="educational_wing_cfe" class="form-control"
                                onchange="setWingCorrespondingSectionDisplay()">
                            <option value="cs" {{ $data ? $data['educational_wing_cfe']['educational_wing_cfe'] == 'cs' ? 'selected' : '' : ''}}>CS</option>
                            <option value="ims" {{ $data ? $data['educational_wing_cfe']['educational_wing_cfe'] == 'ims' ? 'selected' : '' : ''}}>IMS</option>
                            <option value="af" {{ $data ? $data['educational_wing_cfe']['educational_wing_cfe'] == 'af' ? 'selected' : '' : ''}}>AF</option>
                            <option value="vti" {{ $data ? $data['educational_wing_cfe']['educational_wing_cfe'] == 'vti' ? 'selected' : '' : ''}}>VTI</option>
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
                                            <option value="pm" {{ $data ? $data['bise_details']['bise_course_applied_in'] == 'pm' ? 'selected' : '' : ''}}>P/M</option>
                                            <option value="pe" {{ $data ? $data['bise_details']['bise_course_applied_in'] == 'pe' ? 'selected' : '' : ''}}>P/E</option>
                                            <option value="ics" {{ $data ? $data['bise_details']['bise_course_applied_in'] == 'ics' ? 'selected' : '' : ''}}>ICS</option>
                                            <option value="icom" {{ $data ? $data['bise_details']['bise_course_applied_in'] == 'icom' ? 'selected' : '' : ''}}>I.Com</option>
                                            <option value="fa" {{ $data ? $data['bise_details']['bise_course_applied_in'] == 'fa' ? 'selected' : '' : ''}}>FA</option>
                                            <option value="undecided" {{ $data ? $data['bise_details']['bise_course_applied_in'] == 'undecided' ? 'selected' : '' : ''}}>Undecided</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3" id="bise_optional_subject_div" style="display: none">
                                        <label>Optional Subject:</label>
                                        <select name="bise_optional_subject" class="form-control">
                                            <option value="xxxx" {{ $data ? $data['bise_details']['bise_optional_subject'] == 'xxxx' ? 'selected' : '' : ''}}>XXXX</option>
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
                                            <option value="bsse" {{ $data ? $data['bise_details']['bise_course_enrolled_cfe'] == 'bsse' ? 'selected' : '' : ''}}>BSSE</option>
                                            <option value="unenrolled" {{ $data ? $data['bise_details']['bise_course_enrolled_cfe'] == 'unenrolled' ? 'selected' : '' : ''}}>Unenrolled</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Course Registered in:</label>
                                        <select name="bise_course_registered_in" class="form-control">
                                            <option value="pm" {{ $data ? $data['bise_details']['bise_course_registered_in'] == 'pm' ? 'selected' : '' : ''}}>P/M</option>
                                            <option value="pe" {{ $data ? $data['bise_details']['bise_course_registered_in'] == 'pe' ? 'selected' : '' : ''}}>P/E</option>
                                            <option value="ics" {{ $data ? $data['bise_details']['bise_course_registered_in'] == 'ics' ? 'selected' : '' : ''}}>ICS</option>
                                            <option value="icom" {{ $data ? $data['bise_details']['bise_course_registered_in'] == 'icom' ? 'selected' : '' : ''}}>I.Com</option>
                                            <option value="fa" {{ $data ? $data['bise_details']['bise_course_registered_in'] == 'fa' ? 'selected' : '' : ''}}>FA</option>
                                            <option value="undecided" {{ $data ? $data['bise_details']['bise_course_registered_in'] == 'undecided' ? 'selected' : '' : ''}}>Undecided</option>
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
                                            <option value="bise" {{ $data ? $data['bise_details']['bise_affiliated_body'] == 'bise' ? 'selected' : '' : ''}}>BISE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Duration of Course:</label>
                                        <select name="bise_duration_of_course" class="form-control">
                                            <option value="xxxxx" {{ $data ? $data['bise_details']['bise_duration_of_course'] == 'xxxxx' ? 'selected' : '' : ''}}>XXXXX</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Date of Admission:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="bise_admission_date" value="{{$data ? $data['bise_details']['bise_admission_date'] : ''}}"
                                               placeholder="dd/mm/yyyyy">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Ending Date:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="bise_ending_date" value="{{$data ? $data['bise_details']['bise_ending_date'] : ''}}"
                                               placeholder="dd/mm/yyyyy">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Academic Term:</label>
                                        <select name="bise_academic_term" class="form-control">
                                            <option value="annual" {{ $data ? $data['bise_details']['bise_academic_term'] == 'annual' ? 'selected' : '' : ''}}>ANNUAL</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Shift:</label>
                                        <select name="bise_shift" class="form-control">
                                            <option value="morning" {{ $data ? $data['bise_details']['bise_shift'] == 'morning' ? 'selected' : '' : ''}}>Morning</option>
                                            <option value="evening" {{ $data ? $data['bise_details']['bise_shift'] == 'evening' ? 'selected' : '' : ''}}>Evening</option>
                                            <option value="weekend" {{ $data ? $data['bise_details']['bise_shift'] == 'weekend' ? 'selected' : '' : ''}}>Weekend</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card shadow p-3 w-100">
                                    <div class="card-body ">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Registration Status with Affiliated Body:</label>
                                                <select name="bise_registration_status" class="form-control">
                                                    <option value="registered" {{ $data ? $data['bise_details']['bise_registration_status'] == 'registered' ? 'selected' : '' : ''}}>Registered</option>
                                                    <option value="notRegistered" {{ $data ? $data['bise_details']['bise_registration_status'] == 'notRegistered' ? 'selected' : '' : ''}}>Not Registered</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Date of Registration:</label>
                                                <input type="text" class="form-control text-center datepicker"
                                                       name="bise_registration_date" value="{{$data ? $data['bise_details']['bise_registration_date'] : ''}}"
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
                                                        <input type="text" class="form-control text-center"
                                                               name="bise_actual_fee" value="{{$data ? $data['bise_details']['bise_actual_fee'] : ''}}"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Late:</label>
                                                        <input type="text" class="form-control text-center "
                                                               name="bise_late_fee" value="{{$data ? $data['bise_details']['bise_late_fee'] : ''}}"
                                                               placeholder="XXXXX">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Total:</label>
                                                        <input type="text" class="form-control text-center"
                                                               name="bise_total_fee" value="{{$data ? $data['bise_details']['bise_total_fee'] : ''}}"
                                                               placeholder="0000">
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
                                            <option value="bsse" {{ $data ? $data['ims_details']['ims_course_applied_in_cfe'] == 'bsse' ? 'selected' : '' : ''}}>BSSE</option>
                                            <option value="undefined" {{ $data ? $data['ims_details']['ims_course_applied_in_cfe'] == 'undefined' ? 'selected' : '' : ''}}>Undefined</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Course Enrolled in CFE:</label>
                                        <select name="ims_course_enrolled_in_cfe" class="form-control">
                                            <option value="bsse" {{ $data ? $data['ims_details']['ims_course_enrolled_in_cfe'] == 'bsse' ? 'selected' : '' : ''}}>BSSE</option>
                                            <option value="undefined" {{ $data ? $data['ims_details']['ims_course_enrolled_in_cfe'] == 'undefined' ? 'selected' : '' : ''}}>Undefined</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Course Registered in:</label>
                                        <select name="ims_course_registered" class="form-control">
                                            <option value="bsse" {{ $data ? $data['ims_details']['ims_course_registered'] == 'bsse' ? 'selected' : '' : ''}}>BSSE</option>
                                            <option value="undefined" {{ $data ? $data['ims_details']['ims_course_registered'] == 'undefined' ? 'selected' : '' : ''}}>Undefined</option>
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
                                            <option value="xxxxx" {{ $data ? $data['ims_details']['ims_affiliated_body'] == 'xxxxx' ? 'selected' : '' : ''}}>XXXXX</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Duration of Course:</label>
                                        <select name="ims_duration_of_course" class="form-control">
                                            <option value="xxxxx" {{ $data ? $data['ims_details']['ims_duration_of_course'] == 'xxxxx' ? 'selected' : '' : ''}}>XXXXX</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Date of Admission:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="ims_admission_date" value="{{$data ? $data['ims_details']['ims_admission_date'] : ''}}"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Ending date:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="ims_ending_date" value="{{$data ? $data['ims_details']['ims_ending_date'] : ''}}"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Academic Term:</label>
                                        <select name="ims_academic_term" class="form-control">
                                            <option value="annual" {{ $data ? $data['ims_details']['ims_academic_term'] == 'annual' ? 'selected' : '' : ''}}>Annual</option>
                                            <option value="semester" {{ $data ? $data['ims_details']['ims_academic_term'] == 'semester' ? 'selected' : '' : ''}}>Semester</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Semester Category:</label>
                                        <select name="ims_semester_category" class="form-control">
                                            <option value="fall" {{ $data ? $data['ims_details']['ims_semester_category'] == 'fall' ? 'selected' : '' : ''}}>Fall</option>
                                            <option value="spring" {{ $data ? $data['ims_details']['ims_semester_category'] == 'spring' ? 'selected' : '' : ''}}>Spring</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Shift:</label>
                                        <select name="ims_shift" class="form-control">
                                            <option value="morning" {{ $data ? $data['ims_details']['ims_shift'] == 'morning' ? 'selected' : '' : ''}}>Morning</option>
                                            <option value="evening" {{ $data ? $data['ims_details']['ims_shift'] == 'evening' ? 'selected' : '' : ''}}>Evening</option>
                                            <option value="weekend" {{ $data ? $data['ims_details']['ims_shift'] == 'weekend' ? 'selected' : '' : ''}}>Weekend</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card shadow p-3 w-100">
                                    <div class="card-body ">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Registration Status with Affiliated Body:</label>
                                                <select name="ims_registration_status" class="form-control">
                                                    <option value="registered" {{ $data ? $data['ims_details']['ims_registration_status'] == 'registered' ? 'selected' : '' : ''}}>Registered</option>
                                                    <option value="notRegistered" {{ $data ? $data['ims_details']['ims_registration_status'] == 'notRegistered' ? 'selected' : '' : ''}}>Not Registered</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Date of Registration:</label>
                                                <input type="text" class="form-control text-center datepicker"
                                                       name="ims_registration_date" value="{{$data ? $data['ims_details']['ims_registration_date'] : ''}}"
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
                                                        <input type="text" class="form-control text-center"
                                                               name="ims_actual_fee" value="{{$data ? $data['ims_details']['ims_actual_fee'] : ''}}"
                                                               placeholder="XXXXX">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Late:</label>
                                                        <input type="text" class="form-control text-center "
                                                               name="ims_late_fee" value="{{$data ? $data['ims_details']['ims_late_fee'] : ''}}"
                                                               placeholder="XXXXX">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Total:</label>
                                                        <input type="text" class="form-control text-center"
                                                               name="ims_total_fee" value="{{$data ? $data['ims_details']['ims_total_fee'] : ''}}"
                                                               placeholder="0000">
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
                                            <option value="ca" {{ $data ? $data['af_details']['af_course_applied_in'] == 'ca' ? 'selected' : '' : ''}}>CA</option>
                                            <option value="undecided" {{ $data ? $data['af_details']['af_course_applied_in'] == 'undecided' ? 'selected' : '' : ''}}>Undecided</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Course Enrolled in CFE:</label>
                                        <select name="af_course_enrolled_in" class="form-control">
                                            <option value="ca" {{ $data ? $data['af_details']['af_course_enrolled_in'] == 'ca' ? 'selected' : '' : ''}}>CA</option>
                                            <option value="un_enrolled" {{ $data ? $data['af_details']['af_course_enrolled_in'] == 'un_enrolled' ? 'selected' : '' : ''}}>Un-Enrolled</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Course Registered in:</label>
                                        <select name="af_course_registered_in" class="form-control">
                                            <option value="ca" {{ $data ? $data['af_details']['af_course_registered_in'] == 'ca' ? 'selected' : '' : ''}}>CA</option>
                                            <option value="un_registered" {{ $data ? $data['af_details']['af_course_registered_in'] == 'un_registered' ? 'selected' : '' : ''}}>Un-Registered</option>
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
                                            <option value="xxxxx" {{ $data ? $data['af_details']['af_affiliated_body'] == 'xxxxx' ? 'selected' : '' : ''}}>XXXXX</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Duration of Course:</label>
                                        <select name="af_duration_of_course" class="form-control">
                                            <option value="xxxxx" {{ $data ? $data['af_details']['af_duration_of_course'] == 'xxxxx' ? 'selected' : '' : ''}}>XXXXX</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Date of Admission:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="af_admission_date" value="{{$data ? $data['af_details']['af_admission_date'] : ''}}"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Ending date:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="af_ending_date" value="{{$data ? $data['af_details']['af_ending_date'] : ''}}"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Academic Term:</label>
                                        <select name="af_academic_term" class="form-control">
                                            <option value="annual" {{ $data ? $data['af_details']['af_academic_term'] == 'annual' ? 'selected' : '' : ''}}>Annual</option>
                                            <option value="semester" {{ $data ? $data['af_details']['af_academic_term'] == 'semester' ? 'selected' : '' : ''}}>Semester</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Shift:</label>
                                        <select name="af_shift" class="form-control">
                                            <option value="morning" {{ $data ? $data['af_details']['af_shift'] == 'morning' ? 'selected' : '' : ''}}>Morning</option>
                                            <option value="evening" {{ $data ? $data['af_details']['af_shift'] == 'evening' ? 'selected' : '' : ''}}>Evening</option>
                                            <option value="weekend" {{ $data ? $data['af_details']['af_shift'] == 'weekend' ? 'selected' : '' : ''}}>Weekend</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card shadow p-3 w-100">
                                    <div class="card-body ">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Registration Status with Affiliated Body:</label>
                                                <select name="af_registration_status" class="form-control">
                                                    <option value="registered" {{ $data ? $data['af_details']['af_registration_status'] == 'registered' ? 'selected' : '' : ''}}>Registered</option>
                                                    <option value="notRegistered" {{ $data ? $data['af_details']['af_registration_status'] == 'notRegistered' ? 'selected' : '' : ''}}>Not Registered</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Date of Registration:</label>
                                                <input type="text" class="form-control text-center datepicker"
                                                       name="af_registration_date" value="{{$data ? $data['af_details']['af_registration_date'] : ''}}"
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
                                                        <input type="text" class="form-control text-center"
                                                               name="af_actual_fee" value="{{$data ? $data['af_details']['af_actual_fee'] : ''}}"
                                                               placeholder="XXXXX">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Late:</label>
                                                        <input type="text" class="form-control text-center "
                                                               name="af_late_fee" value="{{$data ? $data['af_details']['af_late_fee'] : ''}}"
                                                               placeholder="XXXXX">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Total:</label>
                                                        <input type="text" class="form-control text-center"
                                                               name="af_total_fee" value="{{$data ? $data['af_details']['af_total_fee'] : ''}}"
                                                               placeholder="0000">
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
                                            <option value="dit" {{ $data ? $data['vti_details']['vti_diploma_applied_in'] == 'dit' ? 'selected' : '' : ''}}>DIT</option>
                                            <option value="undecided" {{ $data ? $data['vti_details']['vti_diploma_applied_in'] == 'undecided' ? 'selected' : '' : ''}}>Undecided</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-2">
                                        <label>Diploma Enrolled in:</label>
                                        <select name="vti_diploma_enrolled_in" class="form-control">
                                            <option value="dit" {{ $data ? $data['vti_details']['vti_diploma_enrolled_in'] == 'dit' ? 'selected' : '' : ''}}>DIT</option>
                                            <option value="un_enrolled" {{ $data ? $data['vti_details']['vti_diploma_enrolled_in'] == 'un_enrolled' ? 'selected' : '' : ''}}>Un-Enrolled</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-2">
                                        <label>Diploma Registered in:</label>
                                        <select name="vti_diploma_registered_in" class="form-control">
                                            <option value="dit" {{ $data ? $data['vti_details']['vti_diploma_registered_in'] == 'dit' ? 'selected' : '' : ''}}>DIT</option>
                                            <option value="un_registered" {{ $data ? $data['vti_details']['vti_diploma_registered_in'] == 'un_registered' ? 'selected' : '' : ''}}>Un-Registered</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-2">
                                        <label>Dual course:</label>
                                        <select id="vti_dual_course" name="vti_dual_course" class="form-control" onchange="setDualCoursePageDisplay()">
                                            <option value="yes" {{ $data ? $data['vti_details']['vti_dual_course'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                                            <option value="no" {{ $data ? $data['vti_details']['vti_dual_course'] == 'no' ? 'selected' : '' : ''}}>No</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-3">
                                        <label>Reason:</label>
                                        <select id="vti_reason" name="vti_reason" class="form-control" onchange="setVtiFieldsDisplay()">
                                            <option value="lessService" {{ $data ? $data['vti_details']['vti_reason'] == 'lessService' ? 'selected' : '' : ''}}>Less Service</option>
                                            <option value="result" {{ $data ? $data['vti_details']['vti_reason'] == 'result' ? 'selected' : '' : ''}}>Result %</option>
                                            <option value="supply" {{ $data ? $data['vti_details']['vti_reason'] == 'supply' ? 'selected' : '' : ''}}>Supply</option>
                                            <option value="rpl" {{ $data ? $data['vti_details']['vti_reason'] == 'rpl' ? 'selected' : '' : ''}}>RPL</option>
                                            <option value="genuine" {{ $data ? $data['vti_details']['vti_reason'] == 'genuine' ? 'selected' : '' : ''}}>Genuine</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3" style="display: none" id="vti_further_file_div">
                                        <label>Further File to be Received:</label>
                                        <select name="vti_further_file_received" class="form-control">
                                            <option value="yes" {{ $data ? $data['vti_details']['vti_further_file_received'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                                            <option value="no" {{ $data ? $data['vti_details']['vti_further_file_received'] == 'no' ? 'selected' : '' : ''}}>No</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-3" style="display: none" id="vti_follow_up_date">
                                        <label>Follow-Up Date:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="vti_follow_up" value="{{$data ? $data['vti_details']['vti_follow_up'] : ''}}"
                                               placeholder="yyyy-mm-dd">
                                    </div>
                                    <div class="form-group  col-md-3">
                                        <label>Roll No:</label>
                                        <input type="text" class="form-control text-center" name="vti_roll_no" value="{{$data ? $data['vti_details']['vti_roll_no'] : ''}}"
                                               placeholder="XXXXX">
                                    </div>
                                    <div class="form-group  col-md-3">
                                        <label>Affiliated Body:</label>
                                        <select name="vti_affiliated_body" class="form-control">
                                            <option value="xxxxx" {{ $data ? $data['vti_details']['vti_affiliated_body'] == 'xxxxx' ? 'selected' : '' : ''}}>XXXXX</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Duration of Diploma:</label>
                                        <select name="vti_duration_of_diploma" class="form-control">
                                            <option value="xxxxx" {{ $data ? $data['vti_details']['vti_duration_of_diploma'] == 'xxxxx' ? 'selected' : '' : ''}}>XXXXX</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Date of Admission:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="vti_admission_date" value="{{$data ? $data['vti_details']['vti_admission_date'] : ''}}"
                                               placeholder="yyyy-mm-dd">
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Ending Date:</label>
                                        <input type="text" class="form-control text-center datepicker"
                                               name="vti_ending_date" value="{{$data ? $data['vti_details']['vti_ending_date'] : ''}}"
                                               placeholder="yyyy-mm-dd">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-4">
                                        <label>Scheme of Study:</label>
                                        <select name="vti_scheme_of_study" class="form-control">
                                            <option value="annual" {{ $data ? $data['vti_details']['vti_scheme_of_study'] == 'annual' ? 'selected' : '' : ''}}>Annual</option>
                                            <option value="semester" {{ $data ? $data['vti_details']['vti_scheme_of_study'] == 'semester' ? 'selected' : '' : ''}}>Semester</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Semester Category:</label>
                                        <select name="vti_semester_category" class="form-control">
                                            <option value="fall" {{ $data ? $data['vti_details']['vti_semester_category'] == 'fall' ? 'selected' : '' : ''}}>Fall</option>
                                            <option value="spring" {{ $data ? $data['vti_details']['vti_semester_category'] == 'spring' ? 'selected' : '' : ''}}>Spring</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Shift:</label>
                                        <select name="vti_shift" class="form-control">
                                            <option value="morning" {{ $data ? $data['vti_details']['vti_shift'] == 'morning' ? 'selected' : '' : ''}}>Morning</option>
                                            <option value="evening" {{ $data ? $data['vti_details']['vti_shift'] == 'evening' ? 'selected' : '' : ''}}>Evening</option>
                                            <option value="weekend" {{ $data ? $data['vti_details']['vti_shift'] == 'weekend' ? 'selected' : '' : ''}}>Weekend</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card shadow p-3 w-100">
                                    <div class="card-body ">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Registration Status with Affiliated Body:</label>
                                                <select name="vti_registration_status" class="form-control">
                                                    <option value="registered" {{ $data ? $data['vti_details']['vti_registration_status'] == 'registered' ? 'selected' : '' : ''}}>Registered</option>
                                                    <option value="notRegistered" {{ $data ? $data['vti_details']['vti_registration_status'] == 'notRegistered' ? 'selected' : '' : ''}}>Not Registered</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Date of Registration:</label>
                                                <input type="text" class="form-control text-center datepicker"
                                                       name="vti_date_of_registration" value="{{$data ? $data['vti_details']['vti_date_of_registration'] : ''}}"
                                                       placeholder="yyyy-mm-dd">
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
                                                        <input type="text" class="form-control text-center"
                                                               name="vti_registration_actual_fee" value="{{$data ? $data['vti_details']['vti_registration_actual_fee'] : ''}}"
                                                               placeholder="XXXXX">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Late:</label>
                                                        <input type="text" class="form-control text-center "
                                                               name="vti_registration_late_fee" value="{{$data ? $data['vti_details']['vti_registration_late_fee'] : ''}}"
                                                               placeholder="XXXXX">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Total:</label>
                                                        <input type="text" class="form-control text-center"
                                                               name="vti_registration_total_fee" value="{{$data ? $data['vti_details']['vti_registration_total_fee'] : ''}}"
                                                               placeholder="0000">
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
    </form>
</div>

@section('script_page_7')
    <script>
        setWingCorrespondingSectionDisplay();

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
            if(selected == 'yes'){
                if(container_array.indexOf('#page_11') === -1) {
                    container_array.splice(7, 0, '#page_11');
                    api_url_array.splice(7, 0, '/dual_course-details');
                }
            }
            else{
                $('#page_11').attr('style','display:none');
                container_array.splice(7,1);
                api_url_array.splice(7,1);
            }
        }
    </script>
@endsection
