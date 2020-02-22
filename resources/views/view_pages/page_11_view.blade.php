
    <div class="col-md-12 mt-2">
        <label for="">Dual Course(For CFE purpose):</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="form-row">
                <div class="form-group  col-md-3">
                    <label><strong>Course:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['course'] ? $data['dual_course_details']['course'] : '--'}}
                    </label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group  col-md-3">
                    <label><strong>Roll No:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['roll_no'] ? $data['dual_course_details']['roll_no'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Affiliated Body:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['affiliated_body'] ? $data['dual_course_details']['affiliated_body'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Duration of Course:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['duration_of_course'] ? $data['dual_course_details']['duration_of_course'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Date of Admission:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['admission_date'] ? $data['dual_course_details']['admission_date'] : '--'}}
                    </label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group  col-md-3">
                    <label><strong>Ending Date:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['ending_date'] ? $data['dual_course_details']['ending_date'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Scheme of Study:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['scheme_of_study'] ? $data['dual_course_details']['scheme_of_study'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Semester Category:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['semester_category'] ? $data['dual_course_details']['semester_category'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Shift:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['shift'] ? $data['dual_course_details']['shift'] : '--'}}
                    </label>
                </div>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body ">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><strong>Registration Status with Affiliated Body:</strong></label>
                            <label>
                                {{$data && $data['dual_course_details']['registration_status'] ? $data['dual_course_details']['registration_status'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group col-md-3">
                            <label><strong>Date of Registration:</strong></label>
                            <label>
                                {{$data && $data['dual_course_details']['registration_date'] ? $data['dual_course_details']['registration_date'] : '--'}}
                            </label>
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
                                    <label>
                                        {{$data && $data['dual_course_details']['actual_fee'] ? $data['dual_course_details']['actual_fee'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-4">
                                    <label><strong>Late:</strong></label>
                                    <label>
                                        {{$data && $data['dual_course_details']['late_fee'] ? $data['dual_course_details']['late_fee'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-4">
                                    <label><strong>Total:</strong></label>
                                    <label>
                                        {{$data && $data['dual_course_details']['total_fee'] ? $data['dual_course_details']['total_fee'] : '--'}}
                                    </label>
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
                    <label>
                        {{$data && $data['dual_course_details']['previous_course'] ? $data['dual_course_details']['previous_course'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Affiliated Body:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['previous_affiliated_body'] ? $data['dual_course_details']['previous_affiliated_body'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Duration of Course:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['previous_duration_of_course'] ? $data['dual_course_details']['previous_duration_of_course'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Roll No:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['previous_roll_no'] ? $data['dual_course_details']['previous_roll_no'] : '--'}}
                    </label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label><strong>Passing Date:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['previous_passing_date'] ? $data['dual_course_details']['previous_passing_date'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Total Marks:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['previous_total_marks'] ? $data['dual_course_details']['previous_total_marks'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Marks Obtained:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['previous_marks_obtained'] ? $data['dual_course_details']['previous_marks_obtained'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label><strong>Percentage/CGPA:</strong></label>
                    <label>
                        {{$data && $data['dual_course_details']['previous_cgpa'] ? $data['dual_course_details']['previous_cgpa'] : '--'}}
                    </label>
                </div>
            </div>
        </div>
    </div>
