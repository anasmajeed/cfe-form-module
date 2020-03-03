    <div class="col-md-12 mt-4">
        <label for="">Conversion in Next Degree:</label>
    </div>
    <div class="card shadow p-3 mt-1 w-100">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label @if(!$data['first_semester_details']['status']) class="text-danger" @endif><strong>Status:</strong></label>
                    <label>
                        {{$data && $data['first_semester_details']['status'] ? $data['first_semester_details']['status'] : '--'}}
                    </label>
                </div>
                <div class="form-group col-md-3">
                    <label @if(!$data['first_semester_details']['degree_date']) class="text-danger" @endif><strong>Date:</strong></label>
                    <label>
                        {{$data && $data['first_semester_details']['degree_date'] ? $data['first_semester_details']['degree_date'] : '--'}}
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow p-3 mt-4 w-100">
        <div class="card-header text-center bg-success">
            1st Semester
        </div>
        <div class="card-body ">
            <div class="col-md-12 mt-4">
                <label for="">Examination Status in Affiliated Body:</label>
            </div>
            <div class="card shadow p-3 mt-1 w-100">
                <div class="card-body">
                    <div class="col-md-12 mt-4">
                        <label for="">Exam Fee:</label>
                    </div>
                    <div class="card shadow p-3 mt-1 w-100">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label @if(!$data['first_semester_details']['exam_status']) class="text-danger" @endif><strong>Status:</strong></label>
                                    <label>
                                        {{$data && $data['first_semester_details']['exam_status'] ? $data['first_semester_details']['exam_status'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label @if(!$data['first_semester_details']['exam_date']) class="text-danger" @endif><strong>Date:</strong></label>
                                    <label>
                                        {{$data && $data['first_semester_details']['exam_date'] ? $data['first_semester_details']['exam_date'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label @if(!$data['first_semester_details']['amount']) class="text-danger" @endif><strong>Amount:</strong></label>
                                    <label>
                                        {{$data && $data['first_semester_details']['amount'] ? $data['first_semester_details']['amount'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label @if(!$data['first_semester_details']['roll_no']) class="text-danger" @endif><strong>Roll No:</strong></label>
                                    <label>
                                        {{$data && $data['first_semester_details']['roll_no'] ? $data['first_semester_details']['roll_no'] : '--'}}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="ml-2">
                            <label for="">Result Status:</label>
                        </div>
                    </div>
                    <!-- result status -->
                    <div class="card shadow mt-3 p-3 w-100">
                        <div class="card-body" id="result_status_first_semester_parent">
                            <div class="form-row pt-2">
                                <div class="col-md-1 text-center">
                                    <label><strong>Result:</strong></label>
                                </div>
                                <div class="form-row col-md-10 ml-0" id="result_status_first_semester_pass_headers">
                                    <div class="col-md-2 text-center">
                                        <label><strong>Fail:</strong></label>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <label><strong>Chance of next Appearance:</strong></label>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <label><strong>Next Appearance Date:</strong></label>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <label><strong>Last Chance Date:</strong></label>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <label><strong></label>Passing Date:</strong></label>
                                    </div>
                                </div>
                            </div>
                            @if($data && isset($data['first_semester_result_status_details']) && count($data['first_semester_result_status_details']))
                                @foreach($data['first_semester_result_status_details'] as $firstSemesterResultStatusDetails)
                                    <div class="form-row mt-2" id="result_status_first_semester_div">
                                        <div class="col-md-1 p-0">
                                            <label>
                                                {{$firstSemesterResultStatusDetails['result'] ? $firstSemesterResultStatusDetails['result'] : ''}}
                                            </label>
                                        </div>
                                        <div class="col-md-10 form-row m-0" id="result_status_first_semester_pass_values" >
                                            <div class="col-md-2 p-0">
                                                <label>
                                                    {{$firstSemesterResultStatusDetails['fail'] ? $firstSemesterResultStatusDetails['fail'] : ''}}
                                                </label>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <label>
                                                    {{$firstSemesterResultStatusDetails['next_appearance'] ? $firstSemesterResultStatusDetails['next_appearance'] : ''}}
                                                </label>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <label>
                                                    {{$firstSemesterResultStatusDetails['next_appearance_date'] ? $firstSemesterResultStatusDetails['next_appearance_date'] : ''}}
                                                </label>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <label>
                                                    {{$firstSemesterResultStatusDetails['last_chance_date'] ? $firstSemesterResultStatusDetails['last_chance_date'] : ''}}
                                                </label>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <label>
                                                    {{$firstSemesterResultStatusDetails['passing_date'] ? $firstSemesterResultStatusDetails['passing_date'] : ''}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="form-row mt-2" id="result_status_first_semester_div">
                                    <div class="col-md-2 p-0">
                                    No Data Found
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>