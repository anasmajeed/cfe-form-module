<div id="page_16" style="display:none;">
    <form id="page_16_form">
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
                                    <label>Receipt Status:</label>
                                    <select id="receipt_status_cfe_cell_page16" onchange="setFileReceivedInCFECell()" name="receipt_status" class="form-control">
                                        <option value="" selected disabled>--select--</option>
                                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                            <option value="{{$key}}" {{ $data ? $data['second_annual_part_details']['receipt_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3" id="date_div_page16">
                                    <label>Date:</label>
                                    <input type="text" class="form-control text-center datepicker" name="second_part_date"
                                           placeholder="dd/mm/yyyy"
                                           value="{{$data && isset($data['second_annual_part_details']) ?  date('d/m/Y',strtotime($data['second_annual_part_details']['second_part_date'])) : ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <label for="">File Submitted in PWWB:</label>
            </div>
            <div class="card shadow p-3 mt-1 w-100">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Status:</label>
                            <select id="pwwb_status_page16" onchange="setFileSubmittedStatusPage16()" name="pwwb_status" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['second_annual_part_details']['pwwb_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3" id="pwwb_date_div_page16">
                            <label>Date:</label>
                            <input type="text" class="form-control text-center datepicker" name="pwwb_date"
                                   placeholder="dd/mm/yyyy"
                                   value="{{$data && isset($data['second_annual_part_details']) ?  date('d/m/Y',strtotime($data['second_annual_part_details']['pwwb_date'])) : ''}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Diary No. in PWWB:</label>
                            <input type="text" class="form-control text-center" name="diary_pwwb" placeholder="XXXXX"
                            value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['diary_pwwb'] : ''}}">
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
                            <label>Amount of Claim Due:</label>
                            <input onkeyup="numericOnly(event)" type="number" class="form-control text-center" name="amount_claim_due"
                                   placeholder="Enter Amount"
                                   value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['amount_claim_due'] : ''}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Status of Claimed Received:</label>
                            <select id="claim_status_page16" onchange="setStatusClaimReceivedPage16()"  name="claim_status" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['second_annual_part_details']['claim_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3" id="amount_div_claim_page16">
                            <label>Amount Received:</label>
                            <input onkeyup="numericOnly(event)" type="number" class="form-control text-center" name="amount_received"
                                   placeholder="Enter Amount"
                                   value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['amount_received'] : ''}}">
                        </div>
                        <div class="form-group col-md-3" id="date_div_claim_page16">
                            <label>Date:</label>
                            <input type="text" class="form-control text-center datepicker" name="claim_date"
                                   placeholder="dd/mm/yyyy"
                                   value="{{$data && isset($data['second_annual_part_details']) ?  date('d/m/Y',strtotime($data['second_annual_part_details']['claim_date'])) : ''}}">
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
                                    <label>Status:</label>
                                    <select id="exam_fee_status_page16" onchange="setExamFeeStatusPage16()" name="exam_status" class="form-control">
                                        <option value="" selected disabled>--select--</option>
                                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                            <option value="{{$key}}" {{ $data ? $data['second_annual_part_details']['exam_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3" id="date_div_exam_page16">
                                    <label>Date:</label>
                                    <input type="text" class="form-control text-center datepicker" name="exam_date"
                                           placeholder="dd/mm/yyyy"
                                           value="{{$data && isset($data['second_annual_part_details']) ?  date('d/m/Y',strtotime($data['second_annual_part_details']['exam_date'])) : ''}}">
                                </div>
                                <div class="form-group col-md-3" id="amount_div_exam_page16">
                                    <label>Amount:</label>
                                    <input onkeyup="numericOnly(event)" type="number" class="form-control text-center" name="exam_amount"
                                           placeholder="Enter Amount"
                                           value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['exam_amount'] : ''}}">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Roll No:</label>
                                    <input type="text" class="form-control text-center" name="roll_no"
                                           placeholder="Enter Roll No"
                                           value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['roll_no'] : ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-md-1 text-center">
                            <label>Result:</label>
                        </div>
                        <div class="form-row col-md-8 ml-0" id="result_status_annual_part_two_pass_headers">
                            <div class="col-md-3 text-center">
                                <label>Fail:</label>
                            </div>
                            <div class="col-md-3 text-center">
                                <label>Chance of next Appearance:</label>
                            </div>
                            <div class="col-md-3 text-center">
                                <label>Next Appearance Date:</label>
                            </div>
                            <div class="col-md-3 text-center">
                                <label>Last Chance Date:</label>
                            </div>
                        </div>
                        <div class="col-md-2 text-center" id="result_status_annual_part_two_pass_header_passing">
                            <label>Passing Date:</label>
                        </div>
                        <div class="float-right ml-auto mr-2">
                            <button type="button" class="btn btn-primary float-right" onclick="cloneResultStatusAnnualPartTwo()">
                                <strong>+</strong></button>
                        </div>
                    </div>
                    <!-- result status -->
                    @if($data && isset($data['second_annual_result_status_details']) && count($data['second_annual_result_status_details']))
                        @foreach($data['second_annual_result_status_details'] as $secondAnnualResultStatusDetails)
                            <div class="form-row mt-2" id="result_status_annual_part_two_div">
                                <input type="hidden" value="{{$secondAnnualResultStatusDetails['id']}}" id="result_status_annual_part_two_delete_id">
                                <div class="col-md-1 p-0">
                                    <select id="result_field_for_annual_part_two" name="result[]" class="form-control result_annual_part_two" onchange="resultChangedForAnnualPartTwo(event)">
                                        <option value="" selected disabled>--select--</option>
                                        <option value="pass" {{ $secondAnnualResultStatusDetails['result'] == 'pass' ? 'selected' : ''}}>Pass</option>
                                        <option value="fail" {{ $secondAnnualResultStatusDetails['result'] == 'fail' ? 'selected' : ''}}>Fail</option>
                                    </select>
                                </div>
                                <div class="col-md-8 form-row m-0" id="result_status_annual_part_two_pass_values_replacement" style="display: none"></div>
                                <div class="col-md-8 form-row m-0" id="result_status_annual_part_two_pass_values" style="display: none">
                                    <div class="col-md-3 p-0">
                                        <select name="fail[]" class="form-control promotion_annual_part_two">
                                            <option value="promoted" {{ $secondAnnualResultStatusDetails['fail'] == 'promoted' ? 'selected' : ''}}>Promoted</option>
                                            <option value="notPromoted" {{ $secondAnnualResultStatusDetails['fail'] == 'notPromoted' ? 'selected' : ''}}>Not Promoted</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 p-0">
                                        <select name="next_appearance[]" class="form-control">
                                            <option value="yes" {{ $secondAnnualResultStatusDetails['next_appearance'] == 'yes' ? 'selected' : ''}}>Yes</option>
                                            <option value="no" {{ $secondAnnualResultStatusDetails['next_appearance'] == 'no' ? 'selected' : ''}}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 p-0">
                                        <input type="text" class="form-control text-center datepickerAll"
                                               name="next_appearance_date[]" placeholder="dd/mm/yyyy" value="{{ $secondAnnualResultStatusDetails['next_appearance_date'] ? date('d/m/Y',strtotime($secondAnnualResultStatusDetails['next_appearance_date'])) : ''}}">
                                    </div>
                                    <div class="col-md-3 p-0">
                                        <input type="text" class="form-control text-center datepickerAll"
                                               name="last_chance_date[]" placeholder="dd/mm/yyyy" value="{{ $secondAnnualResultStatusDetails['last_chance_date'] ? date('d/m/Y',strtotime($secondAnnualResultStatusDetails['last_chance_date'])) : ''}}">
                                    </div>
                                </div>
                                <div class="col-md-2 p-0" id="result_status_annual_part_two_pass_value_passing" style="display: none">
                                    <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                           placeholder="dd/mm/yyyy" value="{{ $secondAnnualResultStatusDetails['passing_date'] ? date('d/m/Y',strtotime($secondAnnualResultStatusDetails['passing_date'])) : ''}}">
                                </div>
                                <div class="col-md-1">
                                    <button id="removeResultStatusAnnualPartTwoButton" type="button" class="btn btn-danger"
                                            onclick="removeResultStatusAnnualPartTwo(event)" @if ($secondAnnualResultStatusDetails == reset($data['second_annual_result_status_details'])) {{'disabled'}} @endif>-
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="form-row mt-2" id="result_status_annual_part_two_div">
                            <div class="col-md-1 p-0">
                                <select id="result_field_for_annual_part_two" name="result[]" class="form-control result_annual_part_two" onchange="resultChangedForAnnualPartTwo(event)">
                                    <option value="" selected disabled>--select--</option>
                                    <option value="pass">Pass</option>
                                    <option value="fail">Fail</option>
                                </select>
                            </div>
                            <div class="col-md-8 form-row m-0" id="result_status_annual_part_two_pass_values_replacement" style="display: none"></div>
                            <div class="col-md-8 form-row m-0" id="result_status_annual_part_two_pass_values" style="display: none">
                                <div class="col-md-3 p-0">
                                    <select name="fail[]" class="form-control promotion_annual_part_two">
                                        <option value="promoted">Promoted</option>
                                        <option value="notPromoted" selected>Not Promoted</option>
                                    </select>
                                </div>
                                <div class="col-md-3 p-0">
                                    <select name="next_appearance[]" class="form-control">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="col-md-3 p-0">
                                    <input type="text" class="form-control text-center datepickerAll"
                                           name="next_appearance_date[]" placeholder="dd/mm/yyyy">
                                </div>
                                <div class="col-md-3 p-0">
                                    <input type="text" class="form-control text-center datepickerAll"
                                           name="last_chance_date[]" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="col-md-2 p-0" id="result_status_annual_part_two_pass_value_passing" style="display: none">
                                <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                       placeholder="dd/mm/yyyy">
                            </div>
                            <div class="col-md-1">
                                <button id="removeResultStatusAnnualPartTwoButton" type="button" class="btn btn-danger"
                                        onclick="removeResultStatusAnnualPartTwo(event)" disabled>-
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@section('script_page_16')
    <script>
        setResultHeaderAnnualPartTwoDisplay();
        setFileReceivedInCFECell();
        setFileSubmittedStatusPage16();
        setStatusClaimReceivedPage16();
        setExamFeeStatusPage16();
        function cloneResultStatusAnnualPartTwo() {
            let clone = $('#result_status_annual_part_two_div').clone();
            clone.find('input:text').val('');
            $('#result_status_annual_part_two_parent').append(clone);
            let button = clone.find('#removeResultStatusAnnualPartTwoButton').removeAttr('disabled');
            // let dropdown = $(clone.find('#result_field_for_annual_part_one').parent().siblings()[0]).hide();
            setResultHeaderAnnualPartTwoDisplay();
            clone.find('.datepicker').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'dd/mm/yyyy'
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });
            $('input[name="next_appearance_date[]"').datepicker({
                format:'dd/mm/yyyy',
                // startDate: new Date(),
                autoclose: true
            });
            $('input[name="last_chance_date[]"').datepicker({
                format:'dd/mm/yyyy',
                // startDate: new Date(),
                autoclose: true
            });
        }

        function setResultHeaderAnnualPartTwoDisplay() {
            $('.result_annual_part_two').each(function (index,value) {
                if($(value).val() == 'fail'){
                    $(value).parent().parent().find('#result_status_annual_part_two_pass_values').show();
                    $(value).parent().parent().find('#result_status_annual_part_two_pass_values_replacement').hide();
                    $(value).parent().parent().find('#result_status_annual_part_two_pass_value_passing').hide();
                }
                else if($(value).val() == 'pass'){
                    $(value).parent().parent().find('#result_status_annual_part_two_pass_values').hide();
                    $(value).parent().parent().find('#result_status_annual_part_two_pass_values_replacement').show();
                    $(value).parent().parent().find('#result_status_annual_part_two_pass_value_passing').show();
                }
                else{
                    $(value).parent().parent().find('#result_status_annual_part_two_pass_values').hide();
                    $(value).parent().parent().find('#result_status_annual_part_two_pass_values_replacement').hide();
                    $(value).parent().parent().find('#result_status_annual_part_two_pass_value_passing').hide();
                }
            });
        }

        function resultChangedForAnnualPartTwo(event) {
            setResultHeaderAnnualPartTwoDisplay();
            if($(event.target).val() == 'fail'){
                $(event.target).parent().parent().find('#result_status_annual_part_two_pass_values').fadeIn();
                $(event.target).parent().parent().find('#result_status_annual_part_two_pass_values_replacement').fadeOut();
                $(event.target).parent().parent().find('#result_status_annual_part_two_pass_value_passing').fadeOut();
            }
            else if($(event.target).val() == 'pass'){
                $(event.target).parent().parent().find('#result_status_annual_part_two_pass_values').fadeOut();
                $(event.target).parent().parent().find('#result_status_annual_part_two_pass_values_replacement').fadeIn();
                $(event.target).parent().parent().find('#result_status_annual_part_two_pass_value_passing').fadeIn();
            }
            else{
                $(event.target).parent().parent().find('#result_status_annual_part_two_pass_values').fadeOut();
                $(event.target).parent().parent().find('#result_status_annual_part_two_pass_values_replacement').fadeOut();
                $(event.target).parent().parent().find('#result_status_annual_part_two_pass_value_passing').fadeOut();
            }
        }

        function removeResultStatusAnnualPartTwo(event) {
            if(index_id) {
                let csrf_token = $('meta[name="csrf-token"]').attr('content');
                let request = $.ajax({
                    url: '/annual-part-two-delete',
                    method: "POST",
                    data: {
                        'index_id' : index_id,
                        'id' : $(event.target).parent().parent().find('#result_status_annual_part_two_delete_id').val()
                    },
                    headers:{
                        'X-CSRF-TOKEN':csrf_token
                    }
                });

                request.done(function (response) {
                });

                request.fail(function (jqXHR, textStatus) {
                    alert("Request failed: " + textStatus);
                });
            }
            $(event.target).parent().parent().remove();
        }

        function setFileReceivedInCFECell() {
            if($('#receipt_status_cfe_cell_page16').val() == 'yes'){
                $('#date_div_page16').fadeIn();
            }
            else{
                $('#date_div_page16').fadeOut();
            }
        }

        function setFileSubmittedStatusPage16() {
            if($('#pwwb_status_page16').val() == 'yes'){
                $('#pwwb_date_div_page16').fadeIn();
            }
            else{
                $('#pwwb_date_div_page16').fadeOut();
            }
        }

        function setStatusClaimReceivedPage16() {
            if($('#claim_status_page16').val() == 'yes'){
                $('#amount_div_claim_page16').fadeIn();
                $('#date_div_claim_page16').fadeIn();
            }
            else{
                $('#amount_div_claim_page16').fadeOut();
                $('#date_div_claim_page16').fadeOut();
            }
        }

        function setExamFeeStatusPage16() {
            if($('#exam_fee_status_page16').val() == 'yes'){
                $('#date_div_exam_page16').fadeIn();
                $('#amount_div_exam_page16').fadeIn();
            }
            else{
                $('#amount_div_exam_page16').fadeOut();
                $('#date_div_exam_page16').fadeOut();
            }
        }
    </script>
@endsection
