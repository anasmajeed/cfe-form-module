
    <div class="card shadow p-3 w-100 mt-4">
        <div class="card-header text-center bg-success">
            Annual Part 1
        </div>
        <div class="card-body ">
            <div class="col-md-12 mt-3">
                <label for="">Examination Status in Affiliated Body:</label>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body">
                    <div class="col-md-12 mt-4">
                        <label for="">Exam Fee:</label>
                    </div>
                    <div class="card shadow p-3 w-100">
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label><strong>Exam Fee Deposit status:</strong></label>
                                    <label>
                                        {{$data && $data['first_annual_details']['fee_deposit_status'] ? $data['first_annual_details']['fee_deposit_status'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label><strong>Date:</strong></label>
                                    <label>
                                        {{$data && $data['first_annual_details']['exam_fee_date'] ? $data['first_annual_details']['exam_fee_date'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group  col-md-3">
                                    <label><strong>Amount:</strong></label>
                                    <label>
                                        {{$data && $data['first_annual_details']['amount'] ? $data['first_annual_details']['amount'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group  col-md-3">
                                    <label><strong>Roll No:</strong></label>
                                    <label>
                                        {{$data && $data['first_annual_details']['roll_no'] ? $data['first_annual_details']['roll_no'] : '--'}}
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
                    <div class="card shadow mt-3 p-3 w-100" >
                        <div class="card-body" id="result_status_annual_part_one_parent">
                            <div class="form-row pt-2">
                                <div class="col-md-1 text-center">
                                    <label><strong>Result:</strong></label>
                                </div>
                                <div class="form-row col-md-10 ml-0" id="result_status_annual_part_one_pass_headers">
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
                            <!-- Result Status Edit Mode-->
                            @if($data['first_annual_result_status_details'])
                                @foreach($data['first_annual_result_status_details'] as $firstAnnualResultStatusDetails)
                                    <div class="form-row mt-2" id="result_status_annual_part_one_div">
                                        <input type="hidden" value="{{$firstAnnualResultStatusDetails['id']}}" id="result_status_annual_part_one_delete_id">
                                        <div class="col-md-1 p-0">
                                            <label>
                                                {{$firstAnnualResultStatusDetails['result'] ? $firstAnnualResultStatusDetails['result'] : '--'}}
                                            </label>
                                        </div>
                                        <div class="col-md-10 form-row m-0" id="result_status_annual_part_one_pass_values">
                                            <div class="col-md-2 p-0">
                                                <label>
                                                    {{$firstAnnualResultStatusDetails['fail'] ? $firstAnnualResultStatusDetails['fail'] : '--'}}
                                                </label>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <label>
                                                    {{$firstAnnualResultStatusDetails['next_appearance'] ? $firstAnnualResultStatusDetails['next_appearance'] : '--'}}
                                                </label>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <label>
                                                    {{$firstAnnualResultStatusDetails['next_appearance_date'] ? $firstAnnualResultStatusDetails['next_appearance_date'] : '--'}}
                                                </label>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <label>
                                                    {{$firstAnnualResultStatusDetails['last_chance_date'] ? $firstAnnualResultStatusDetails['last_chance_date'] : '--'}}
                                                </label>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <label>
                                                    {{$firstAnnualResultStatusDetails['passing_date'] ? $firstAnnualResultStatusDetails['passing_date'] : '--'}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                    <div class="form-row mt-2" id="result_status_annual_part_one_div">
                                        <div class="col-md-2 p-0">
                                            <label>
                                                No Record Found
                                            </label>
                                        </div>
                                        <div class="col-md-10 form-row m-0" id="result_status_annual_part_one_pass_values">
                                        </div>
                                    </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="">Readmission</label>
                    </div>
                    <div class="card shadow p-3 w-100">
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label><strong>Same Course:</strong></label>
                                    <label>
                                        {{$data && $data['first_annual_details']['same_course'] ? $data['first_annual_details']['same_course'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-4">
                                    <label><strong>Changed Course:</strong></label>
                                    <label>
                                        {{$data && $data['first_annual_details']['changed_course'] ? $data['first_annual_details']['changed_course'] : '--'}}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
