<div id="dual_course_div" class="mt-4" style="display:none;">
    <div class="col-md-12 mt-2">
        <label for="">Dual Course(For CFE purpose):</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="form-row">
                <div class="form-group  col-md-3">
                    <label>Course:</label>
                    <select  name="course" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.course') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['dual_course_details']['course'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group  col-md-3">
                    <label>Roll No:</label>
                    <input type="text" class="form-control text-center" name="roll_no" placeholder="XXXXX"
                    value="{{$data ? $data['dual_course_details']['roll_no'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label>Affiliated Body:</label>
                    <select  name="affiliated_body" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.affiliated_body') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['dual_course_details']['affiliated_body'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label>Duration of Course:</label>
                    <select  name="duration_of_course" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.duration_of_course') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['dual_course_details']['duration_of_course'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label>Date of Admission:</label>
                    <input type="text" class="form-control text-center datepicker" name="admission_date"
                           placeholder="dd/mm/yyyy" value="{{$data && $data['dual_course_details']['admission_date'] ? date('d/m/Y',strtotime($data['dual_course_details']['admission_date'])) : ''}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group  col-md-3">
                    <label>Ending Date:</label>
                    <input type="text" class="form-control text-center datepicker" name="ending_date"
                           placeholder="dd/mm/yyyy" value="{{$data && $data['dual_course_details']['ending_date'] ? date('d/m/Y',strtotime($data['dual_course_details']['ending_date'])) : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label>Scheme of Study:</label>
                    <select  name="scheme_of_study" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.academic_term') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['dual_course_details']['scheme_of_study'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label>Semester Category:</label>
                    <select  name="semester_category" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.semester_category') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['dual_course_details']['semester_category'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label>Shift:</label>
                    <select  name="shift" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.shift') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['dual_course_details']['shift'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body ">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Registration Status with Affiliated Body:</label>
                            <select  name="registration_status" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.registration_status') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['dual_course_details']['registration_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Date of Registration:</label>
                            <input type="text" class="form-control text-center datepicker" name="registration_date"
                                   placeholder="dd/mm/yyyy" value="{{$data && $data['dual_course_details']['registration_date'] ? date('d/m/Y',strtotime($data['dual_course_details']['registration_date'])) : ''}}">
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="">Registration Fees:</label>
                    </div>
                    <div class="card shadow p-3 w-100">
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Actual:</label>
                                    <input type="text" class="form-control text-center" name="actual_fee"
                                           placeholder="XXXXX" value="{{$data ? $data['dual_course_details']['actual_fee'] : ''}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Late:</label>
                                    <input type="text" class="form-control text-center " name="late_fee"
                                           placeholder="XXXXX" value="{{$data ? $data['dual_course_details']['late_fee'] : ''}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Total:</label>
                                    <input type="text" class="form-control text-center" name="total_fee"
                                           placeholder="0000" value="{{$data ? $data['dual_course_details']['total_fee'] : ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-2">
        <label for="">Previous Academic Details:</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Course:</label>
                    <select  name="previous_course" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.previous_course') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['dual_course_details']['previous_course'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label>Affiliated Body:</label>
                    <select  name="previous_affiliated_body" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.previous_affiliated_body') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['dual_course_details']['previous_affiliated_body'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label>Duration of Course:</label>
                    <select  name="previous_duration_of_course" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.previous_duration_of_course') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['dual_course_details']['previous_duration_of_course'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label>Roll No:</label>
                    <input type="text" class="form-control text-center" name="previous_roll_no" placeholder="XXXXX" value="{{$data ? $data['dual_course_details']['previous_roll_no'] : ''}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Passing Date:</label>
                    <input type="text" class="form-control text-center datepicker" name="previous_passing_date" value="{{$data && $data['dual_course_details']['previous_passing_date'] ? date('d/m/Y',strtotime($data['dual_course_details']['previous_passing_date'])) : ''}}"
                           placeholder="dd/mm/yyyy">
                </div>
                <div class="form-group  col-md-3">
                    <label>Total Marks:</label>
                    <input type="text" class="form-control text-center" name="previous_total_marks" placeholder="XXXXX" value="{{$data ? $data['dual_course_details']['previous_total_marks'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label>Marks Obtained:</label>
                    <input type="text" class="form-control text-center" name="previous_marks_obtained" placeholder="XXXXX" value="{{$data ? $data['dual_course_details']['previous_marks_obtained'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label>Percentage/CGPA:</label>
                    <input type="text" class="form-control text-center" name="previous_cgpa" placeholder="XXXXX" value="{{$data ? $data['dual_course_details']['previous_cgpa'] : ''}}">
                </div>
            </div>
        </div>
    </div>
</div>
