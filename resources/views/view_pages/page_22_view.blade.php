    <div class="card shadow p-3 w-100">
        <div class="card-header text-center bg-success">
            Continue 1(Sixth Semester)
        </div>
        <div class="card-body ">
            <div class="card shadow p-3 w-100">
                <div class="card-body">
                    <div class="col-md-12 mt-4">
                        <label for="">6th Semester File Received in CFE Cell:</label>
                    </div>
                    <div class="card shadow p-3 w-100">
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label @if( !$data['sixth_semester_details']['cell_status']) class="text-danger" @endif><strong>Status:</strong></label>
                                    <label>
                                        {{$data && $data['sixth_semester_details']['cell_status'] ? $data['sixth_semester_details']['cell_status'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label @if( !$data['sixth_semester_details']['cell_date']) class="text-danger" @endif><strong>Date:</strong></label>
                                    <label>
                                        {{$data && $data['sixth_semester_details']['cell_date'] ? $data['sixth_semester_details']['cell_date'] : '--'}}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <label for="">Field Submitted in PWWB:</label>
            </div>
            <div class="card shadow p-3 mt-1 w-100">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label @if( !$data['sixth_semester_details']['pwwb_status']) class="text-danger" @endif><strong>Status:</strong></label>
                            <label>
                                {{$data && $data['sixth_semester_details']['pwwb_status'] ? $data['sixth_semester_details']['pwwb_status'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group col-md-3">
                            <label @if( !$data['sixth_semester_details']['pwwb_date']) class="text-danger" @endif><strong>Date:</strong></label>
                            <label>
                                {{$data && $data['sixth_semester_details']['pwwb_date'] ? $data['sixth_semester_details']['pwwb_date'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group col-md-3">
                            <label @if( !$data['sixth_semester_details']['diary_pwwb']) class="text-danger" @endif><strong>Diary No. in PWWB:</strong></label>
                            <label>
                                {{$data && $data['sixth_semester_details']['diary_pwwb'] ? $data['sixth_semester_details']['diary_pwwb'] : '--'}}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <label for="">Claimed Received From PWWB:</label>
            </div>
            <div class="card shadow p-3 mt-1 w-100">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label @if( !$data['sixth_semester_details']['amount_claim_due']) class="text-danger" @endif><strong>Amount of Claim Due:</strong></label>
                            <label>
                                {{$data && $data['sixth_semester_details']['amount_claim_due'] ? $data['sixth_semester_details']['amount_claim_due'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group col-md-3">
                            <label @if( !$data['sixth_semester_details']['claim_status']) class="text-danger" @endif><strong>Status of Claimed Received:</strong></label>
                            <label>
                                {{$data && $data['sixth_semester_details']['claim_status'] ? $data['sixth_semester_details']['claim_status'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group col-md-3">
                            <label @if( !$data['sixth_semester_details']['amount_received']) class="text-danger" @endif><strong>Amount Received:</strong></label>
                            <label>
                                {{$data && $data['sixth_semester_details']['amount_received'] ? $data['sixth_semester_details']['amount_received'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group col-md-3">
                            <label @if( !$data['sixth_semester_details']['claim_date']) class="text-danger" @endif><strong>Date:</strong></label>
                            <label>
                                {{$data && $data['sixth_semester_details']['claim_date'] ? $data['sixth_semester_details']['claim_date'] : '--'}}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <label for="">Examination Status in Affiliated Body:</label>
            </div>
            <div class="card shadow p-3 mt-1 w-100">
                <div class="card-body" id="result_status_sixth_semester_parent">
                    <div class="col-md-12 mt-4">
                        <label for="">Exam Fee:</label>
                    </div>
                    <div class="card shadow p-3 mt-1 w-100">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label @if( !$data['sixth_semester_details']['exam_status']) class="text-danger" @endif><strong>Status:</strong></label>
                                    <label>
                                        {{$data && $data['sixth_semester_details']['exam_status'] ? $data['sixth_semester_details']['exam_status'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label @if( !$data['sixth_semester_details']['exam_date']) class="text-danger" @endif><strong>Date:</strong></label>
                                    <label>
                                        {{$data && $data['sixth_semester_details']['exam_date'] ? $data['sixth_semester_details']['exam_date'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label @if( !$data['sixth_semester_details']['amount']) class="text-danger" @endif><strong>Amount:</strong></label>
                                    <label>
                                        {{$data && $data['sixth_semester_details']['amount'] ? $data['sixth_semester_details']['amount'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label @if( !$data['sixth_semester_details']['roll_no']) class="text-danger" @endif><strong>Roll No:</strong></label>
                                    <label>
                                        {{$data && $data['sixth_semester_details']['roll_no'] ? $data['sixth_semester_details']['roll_no'] : '--'}}
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
                    <div class="form-row pt-2">
                        <div class="col-md-1 text-center">
                            <label><strong>Result:</strong></label>
                        </div>
                        <div class="form-row col-md-1 ml-0" id="result_status_sixth_semester_pass_headers>
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
                                <label><strong>Passing Date:</strong></label>
                            </div>
                        </div>
                    </div>
                    @if($data && isset($data['sixth_semester_result_status_details']) && count($data['sixth_semester_result_status_details']))
                        @foreach($data['sixth_semester_result_status_details'] as $sixthSemesterResultStatusDetails)
                            <div class="form-row mt-2" id="result_status_sixth_semester_div">
                                <input type="hidden" value="{{$sixthSemesterResultStatusDetails['id']}}" id="result_status_sixth_semester_delete_id">
                                <div class="col-md-1 p-0">
                                    <label>
                                        {{$sixthSemesterResultStatusDetails['result'] ? $sixthSemesterResultStatusDetails['result'] : ''}}
                                    </label>
                                </div>
                                <div class="col-md-10 form-row m-0" id="result_status_sixth_semester_pass_values" style="display: none">
                                    <div class="col-md-2 p-0">
                                        <label>
                                            {{$sixthSemesterResultStatusDetails['fail'] ? $sixthSemesterResultStatusDetails['fail'] : ''}}
                                        </label>
                                    </div>
                                    <div class="col-md-3 p-0">
                                        <label>
                                            {{$sixthSemesterResultStatusDetails['next_appearance'] ? $sixthSemesterResultStatusDetails['next_appearance'] : ''}}
                                        </label>
                                    </div>
                                    <div class="col-md-2 p-0">
                                        <label>
                                            {{$sixthSemesterResultStatusDetails['next_appearance_date'] ? $sixthSemesterResultStatusDetails['next_appearance_date'] : ''}}
                                        </label>
                                    </div>
                                    <div class="col-md-2 p-0">
                                        <label>
                                            {{$sixthSemesterResultStatusDetails['last_chance_date'] ? $sixthSemesterResultStatusDetails['last_chance_date'] : ''}}
                                        </label>
                                    </div>
                                    <div class="col-md-2 p-0">
                                        <label>
                                            {{$sixthSemesterResultStatusDetails['passing_date'] ? $sixthSemesterResultStatusDetails['passing_date'] : ''}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="form-row mt-2 ml-4" id="result_status_sixth_semester_div">
                            <div class="col-md-2 p-0">
                                No Data Found
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>