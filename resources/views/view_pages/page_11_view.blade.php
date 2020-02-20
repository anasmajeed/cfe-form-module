
    <div class="col-md-12 mt-2">
        <label for="">Dual Course(For CFE purpose):</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="form-row">
                <div class="form-group  col-md-3">
                    <label><strong>Course:</strong></label>
                    <select  name="course" class="form-control">
                        <option value="allCourses" {{ $data ? $data['dual_course_details']['course'] == 'allCourses' ? 'selected' : '' : ''}}>
                        All Courses</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group  col-md-3">
                    <label><strong>Roll No:</strong></label>
                    <input type="text" class="form-control text-center" name="roll_no" placeholder="XXXXX"
                    value="{{$data ? $data['dual_course_details']['roll_no'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Affiliated Body:</strong></label>
                    <select  name="affiliated_body" class="form-control">
                        <option value="xxxxx" {{ $data ? $data['dual_course_details']['affiliated_body'] == 'xxxxx' ? 'selected' : '' : ''}}>
                        XXXXX</option>
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Duration of Course:</strong></label>
                    <select  name="duration_of_course" class="form-control">
                        <option value="xxxxx" {{ $data ? $data['dual_course_details']['duration_of_course'] == 'yes' ? 'selected' : '' : ''}}>
                        XXXXX</option>
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Date of Admission:</strong></label>
                    <input type="text" class="form-control text-center datepicker" name="admission_date"
                           placeholder="yyyy-mm-dd" value="{{$data ? $data['dual_course_details']['admission_date'] : ''}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group  col-md-3">
                    <label><strong>Ending Date:</strong></label>
                    <input type="text" class="form-control text-center datepicker" name="ending_date"
                           placeholder="yyyy-mm-dd" value="{{$data ? $data['dual_course_details']['ending_date'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Scheme of Study:</strong></label>
                    <select  name="scheme_of_study" class="form-control">
                        <option value="annual" {{ $data ? $data['dual_course_details']['scheme_of_study'] == 'annual' ? 'selected' : '' : ''}}>
                        Annual</option>
                        <option value="semester" {{ $data ? $data['dual_course_details']['scheme_of_study'] == 'semester' ? 'selected' : '' : ''}}>
                        Semester</option>
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Semester Category:</strong></label>
                    <select  name="semester_category" class="form-control">
                        <option value="fall" {{ $data ? $data['dual_course_details']['semester_category'] == 'fall' ? 'selected' : '' : ''}}>
                        Fall</option>
                        <option value="spring" {{ $data ? $data['dual_course_details']['semester_category'] == 'spring' ? 'selected' : '' : ''}}>
                        Spring</option>
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Shift:</strong></label>
                    <select  name="shift" class="form-control">
                        <option value="morning" {{ $data ? $data['dual_course_details']['shift'] == 'morning' ? 'selected' : '' : ''}}>
                        Morning</option>
                        <option value="evening" {{ $data ? $data['dual_course_details']['shift'] == 'evening' ? 'selected' : '' : ''}}>
                        Evening</option>
                        <option value="weekend" {{ $data ? $data['dual_course_details']['shift'] == 'weekend' ? 'selected' : '' : ''}}>
                        Weekend</option>
                    </select>
                </div>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body ">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><strong>Registration Status with Affiliated Body:</strong></label>
                            <select  name="registration_status" class="form-control">
                                <option value="registered" {{ $data ? $data['dual_course_details']['registration_status'] == 'registered' ? 'selected' : '' : ''}}>
                                Registered</option>
                                <option value="notRegistered" {{ $data ? $data['dual_course_details']['registration_status'] == 'notRegistered' ? 'selected' : '' : ''}}>
                                Not Registered</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label><strong>Date of Registration:</strong></label>
                            <input type="text" class="form-control text-center datepicker" name="registration_date"
                                   placeholder="yyyy-mm-dd" value="{{$data ? $data['dual_course_details']['registration_date'] : ''}}">
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="">Registration Fees:</label>
                    </div>
                    <div class="card shadow p-3 w-100">
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label><strong>Actual:</strong></label>
                                    <input type="text" class="form-control text-center" name="actual_fee"
                                           placeholder="XXXXX" value="{{$data ? $data['dual_course_details']['actual_fee'] : ''}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label><strong>Late:</strong></label>
                                    <input type="text" class="form-control text-center " name="late_fee"
                                           placeholder="XXXXX" value="{{$data ? $data['dual_course_details']['late_fee'] : ''}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label><strong>Total:</strong></label>
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
                    <label><strong>Course:</strong></label>
                    <select  name="previous_course" class="form-control">
                        <option value="xxxxx" {{ $data ? $data['dual_course_details']['previous_course'] == 'xxxxx' ? 'selected' : '' : ''}}>XXXXX</option>
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Affiliated Body:</strong></label>
                    <select  name="previous_affiliated_body" class="form-control">
                        <option value="xxxxx" {{ $data ? $data['dual_course_details']['previous_affiliated_body'] == 'xxxxx' ? 'selected' : '' : ''}}>XXXXX</option>
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Duration of Course:</strong></label>
                    <select  name="previous_duration_of_course" class="form-control">
                        <option value="xxxxx" {{ $data ? $data['dual_course_details']['previous_duration_of_course'] == 'xxxxx' ? 'selected' : '' : ''}}>XXXXX</option>
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Roll No:</strong></label>
                    <input type="text" class="form-control text-center" name="previous_roll_no" placeholder="XXXXX" value="{{$data ? $data['dual_course_details']['previous_roll_no'] : ''}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label><strong>Passing Date:</strong></label>
                    <input type="text" class="form-control text-center datepicker" name="previous_passing_date" value="{{$data ? $data['dual_course_details']['previous_passing_date'] : ''}}"
                           placeholder="yyyy-mm-dd">
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Total Marks:</strong></label>
                    <input type="text" class="form-control text-center" name="previous_total_marks" placeholder="XXXXX" value="{{$data ? $data['dual_course_details']['previous_total_marks'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Marks Obtained:</strong></label>
                    <input type="text" class="form-control text-center" name="previous_marks_obtained" placeholder="XXXXX" value="{{$data ? $data['dual_course_details']['previous_marks_obtained'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Percentage/CGPA:</strong></label>
                    <input type="text" class="form-control text-center" name="previous_cgpa" placeholder="XXXXX" value="{{$data ? $data['dual_course_details']['previous_cgpa'] : ''}}">
                </div>
            </div>
        </div>
    </div>
