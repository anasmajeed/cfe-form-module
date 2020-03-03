    <div class="card shadow p-3 w-100">
        <div class="card-header text-center bg-success">
            Continue 1(Annual Part 2)
        </div>
        <div class="card-body ">
            <div class="card shadow p-3 w-100">
                <div class="card-body">
                    <div class="col-md-12 mt-4">
                        <label for="">Annual Part 2 File Received in CFE Cell:</label>
                    </div>
                    <div class="card shadow p-3 w-100">
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label @if( !$data['second_annual_part_details']['receipt_status']) class="text-danger" @endif><strong>Receipt Status:</strong></label>
                                    <label>
                                        {{$data && $data['second_annual_part_details']['receipt_status'] ? $data['second_annual_part_details']['receipt_status'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label @if( !$data['second_annual_part_details']['second_part_date']) class="text-danger" @endif><strong>Date:</strong></label>
                                    <label>
                                        {{$data && $data['second_annual_part_details']['second_part_date'] ? $data['second_annual_part_details']['second_part_date'] : '--'}}
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
                            <label @if( !$data['second_annual_part_details']['pwwb_status']) class="text-danger" @endif><strong>Status:</strong></label>
                            <label>
                                {{$data && $data['second_annual_part_details']['pwwb_status'] ? $data['second_annual_part_details']['pwwb_status'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group col-md-3">
                            <label @if( !$data['second_annual_part_details']['pwwb_date']) class="text-danger" @endif><strong>Date:</strong></label>
                            <label>
                                {{$data && $data['second_annual_part_details']['pwwb_date'] ? $data['second_annual_part_details']['pwwb_date'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group col-md-3">
                            <label @if( !$data['second_annual_part_details']['diary_pwwb']) class="text-danger" @endif><strong>Diary No. in PWWB:</strong></label>
                            <label>
                                {{$data && $data['second_annual_part_details']['diary_pwwb'] ? $data['second_annual_part_details']['diary_pwwb'] : '--'}}
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
                            <label @if( !$data['second_annual_part_details']['amount_claim_due']) class="text-danger" @endif><strong>Amount of Claim Due:</strong></label>
                            <label>
                                {{$data && $data['second_annual_part_details']['amount_claim_due'] ? $data['second_annual_part_details']['amount_claim_due'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group col-md-3">
                            <label @if( !$data['second_annual_part_details']['claim_status']) class="text-danger" @endif><strong>Status of Claimed Received:</strong></label>
                            <label>
                                {{$data && $data['second_annual_part_details']['claim_status'] ? $data['second_annual_part_details']['claim_status'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group col-md-3">
                            <label @if( !$data['second_annual_part_details']['amount_received']) class="text-danger" @endif><strong>Amount Received:</strong></label>
                            <label>
                                {{$data && $data['second_annual_part_details']['amount_received'] ? $data['second_annual_part_details']['amount_received'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group col-md-3">
                            <label @if( !$data['second_annual_part_details']['claim_date']) class="text-danger" @endif><strong>Date:</strong></label>
                            <label>
                                {{$data && $data['second_annual_part_details']['claim_date'] ? $data['second_annual_part_details']['claim_date'] : '--'}}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <label for="">Examination Status in Affiliated Body:</label>
            </div>
            <div class="card shadow p-3 mt-1 w-100">
                <div class="card-body" id="result_status_annual_part_two_parent">
                    <div class="col-md-12 mt-4">
                        <label for="">Exam Fee:</label>
                    </div>
                    <div class="card shadow p-3 mt-1 w-100">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label @if( !$data['second_annual_part_details']['exam_status']) class="text-danger" @endif><strong>Status:</strong></label>
                                    <label>
                                        {{$data && $data['second_annual_part_details']['exam_status'] ? $data['second_annual_part_details']['exam_status'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label @if( !$data['second_annual_part_details']['exam_date']) class="text-danger" @endif><strong>Date:</strong></label>
                                    <label>
                                        {{$data && $data['second_annual_part_details']['exam_date'] ? $data['second_annual_part_details']['exam_date'] : '--'}}
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label @if( !$data['second_annual_part_details']['exam_amount']) class="text-danger" @endif><strong>Amount:</strong></label>
                                    <label>
                                        {{$data && $data['second_annual_part_details']['exam_amount'] ? $data['second_annual_part_details']['exam_amount'] : '--'}}
                                    </label>
                                </div>

                                <div class="form-group col-md-3">
                                    <label @if( !$data['second_annual_part_details']['roll_no']) class="text-danger" @endif><strong>Roll No:</strong></label>
                                    <label>
                                        {{$data && $data['second_annual_part_details']['roll_no'] ? $data['second_annual_part_details']['roll_no'] : '--'}}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-md-1 text-center">
                            <label><strong>Result:</strong></label>
                        </div>
                        <div class="form-row col-md-10 ml-0" id="result_status_annual_part_two_pass_headers" >
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
                    <!-- result status -->
                    @if($data && isset($data['second_annual_result_status_details']))
                        @if(count($data['second_annual_result_status_details'])>0)
                            @foreach($data['second_annual_result_status_details'] as $secondAnnualResultStatusDetails)
                                <div class="form-row mt-2" id="result_status_annual_part_two_div">
                                    <div class="col-md-1 p-0">
                                        <label>
                                            {{$secondAnnualResultStatusDetails['result'] ? $secondAnnualResultStatusDetails['result'] : ''}}
                                        </label>
                                    </div>
                                    <div class="col-md-10 form-row m-0" id="result_status_annual_part_two_pass_values" style="display: none">
                                        <div class="col-md-2 p-0">
                                            <label>
                                                {{$secondAnnualResultStatusDetails['fail'] ? $secondAnnualResultStatusDetails['fail'] : ''}}
                                            </label>
                                        </div>
                                        <div class="col-md-3 p-0">
                                            <label>
                                                {{$secondAnnualResultStatusDetails['next_appearance'] ? $secondAnnualResultStatusDetails['next_appearance'] : ''}}
                                            </label>
                                        </div>
                                        <div class="col-md-2 p-0">
                                            <label>
                                                {{$secondAnnualResultStatusDetails['next_appearance_date'] ? $secondAnnualResultStatusDetails['next_appearance_date'] : ''}}
                                            </label>
                                        </div>
                                        <div class="col-md-2 p-0">
                                            <label>
                                                {{$secondAnnualResultStatusDetails['last_chance_date'] ? $secondAnnualResultStatusDetails['last_chance_date'] : ''}}
                                            </label>
                                        </div>
                                        <div class="col-md-2 p-0">
                                            <label>
                                                {{$secondAnnualResultStatusDetails['passing_date'] ? $secondAnnualResultStatusDetails['passing_date'] : ''}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach    
                        @else
                            <div class="form-row mt-2" id="result_status_annual_part_two_div">
                                <div class="col-md-2 ml-2 p-0">
                                    <label>
                                        No Record Found
                                    </label>
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
