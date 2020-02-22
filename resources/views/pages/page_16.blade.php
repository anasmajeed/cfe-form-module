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
                                    <select  name="receipt_status" class="form-control">
                                        <option value="yes" {{ $data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['receipt_status'] == 'yes' ? 'selected' : '' : ''}}>
                                        Yes</option>
                                        <option value="no" {{ $data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['receipt_status'] == 'no' ? 'selected' : '' : ''}}>
                                        No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Date:</label>
                                    <input type="text" class="form-control text-center datepicker" name="second_part_date"
                                           placeholder="yyyy-mm-dd"
                                           value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['second_part_date'] : ''}}">
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
                            <label>Status:</label>
                            <select  name="pwwb_status" class="form-control">
                                <option value="yes" {{ $data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['pwwb_status'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['pwwb_status'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Date:</label>
                            <input type="text" class="form-control text-center datepicker" name="pwwb_date"
                                   placeholder="yyyy-mm-dd"
                                   value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['pwwb_date'] : ''}}">
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
                            <input type="text" class="form-control text-center" name="amount_claim_due"
                                   placeholder="XXXXX"
                                   value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['amount_claim_due'] : ''}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Status of Claimed Received:</label>
                            <select  name="claim_status" class="form-control">
                                <option value="yes" {{ $data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['claim_status'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['claim_status'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Amount Received:</label>
                            <input type="text" class="form-control text-center" name="amount_received"
                                   placeholder="XXXXX"
                                   value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['amount_received'] : ''}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Date:</label>
                            <input type="text" class="form-control text-center datepicker" name="claim_date"
                                   placeholder="yyyy-mm-dd"
                                   value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['claim_date'] : ''}}">
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
                                    <select  name="exam_status" class="form-control">
                                        <option value="yes" {{ $data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['exam_status'] == 'yes' ? 'selected' : '' : ''}}>
                                        Yes</option>
                                        <option value="no" {{ $data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['exam_status'] == 'no' ? 'selected' : '' : ''}}>
                                        No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Date:</label>
                                    <input type="text" class="form-control text-center datepicker" name="exam_date"
                                           placeholder="yyyy-mm-dd"
                                           value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['exam_date'] : ''}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Amount:</label>
                                    <input type="text" class="form-control text-center" name="exam_amount"
                                           placeholder="XXXXX"
                                           value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['exam_amount'] : ''}}">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Roll No:</label>
                                    <input type="text" class="form-control text-center" name="roll_no"
                                           placeholder="XXXXX"
                                           value="{{$data && isset($data['second_annual_part_details']) ? $data['second_annual_part_details']['roll_no'] : ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-md-1 text-center">
                            <label>Result:</label>
                        </div>
                        <div class="form-row col-md-10 ml-0" id="result_status_annual_part_two_pass_headers" style="display: none">
                            <div class="col-md-2 text-center">
                                <label>Fail:</label>
                            </div>
                            <div class="col-md-3 text-center">
                                <label>Chance of next Appearance:</label>
                            </div>
                            <div class="col-md-2 text-center">
                                <label>Next Appearance Date:</label>
                            </div>
                            <div class="col-md-2 text-center">
                                <label>Last Chance Date:</label>
                            </div>
                            <div class="col-md-2 text-center">
                                <label>Passing Date:</label>
                            </div>
                        </div>
                        <div class="float-right ml-auto mr-2">
                            <button type="button" class="btn btn-primary float-right" onclick="cloneResultStatusAnnualPartTwo()">
                                <strong>+</strong></button>
                        </div>
                    </div>
                    <!-- result status -->
                    @if($data && isset($data['second_annual_result_status_details']))
                        @foreach($data['second_annual_result_status_details'] as $secondAnnualResultStatusDetails)
                            <div class="form-row mt-2" id="result_status_annual_part_two_div">
                                <input type="hidden" value="{{$secondAnnualResultStatusDetails['id']}}" id="result_status_annual_part_two_delete_id">
                                <div class="col-md-1 p-0">
                                    <select id="result_field_for_annual_part_two" name="result[]" class="form-control result_annual_part_two" onchange="resultChangedForAnnualPartTwo(event)">
                                        <option value="pass" {{ $secondAnnualResultStatusDetails['result'] == 'pass' ? 'selected' : ''}}>Pass</option>
                                        <option value="fail" {{ $secondAnnualResultStatusDetails['result'] == 'fail' ? 'selected' : ''}}>Fail</option>
                                    </select>
                                </div>
                                <div class="col-md-10 form-row m-0" id="result_status_annual_part_two_pass_values" style="display: none">
                                    <div class="col-md-2 p-0">
                                        <select name="fail[]" class="form-control promotion_annual_part_two" onchange="setDisplayForAnnualPartTwo()">
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
                                    <div class="col-md-2 p-0">
                                        <input type="text" class="form-control text-center datepicker"
                                               name="next_appearance_date[]" placeholder="yyyy-mm-dd" value="{{ $secondAnnualResultStatusDetails['next_appearance_date']}}">
                                    </div>
                                    <div class="col-md-2 p-0">
                                        <input type="text" class="form-control text-center datepicker"
                                               name="last_chance_date[]" placeholder="yyyy-mm-dd" value="{{ $secondAnnualResultStatusDetails['last_chance_date']}}">
                                    </div>
                                    <div class="col-md-2 p-0">
                                        <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                               placeholder="yyyy-mm-dd" value="{{ $secondAnnualResultStatusDetails['passing_date']}}">
                                    </div>
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
                                    <option value="pass" selected>Pass</option>
                                    <option value="fail">Fail</option>
                                </select>
                            </div>
                            <div class="col-md-10 form-row m-0" id="result_status_annual_part_two_pass_values" style="display: none">
                                <div class="col-md-2 p-0">
                                    <select name="fail[]" class="form-control promotion_annual_part_two" onchange="setDisplayForAnnualPartTwo()">
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
                                <div class="col-md-2 p-0">
                                    <input type="text" class="form-control text-center datepicker"
                                           name="next_appearance_date[]" placeholder="yyyy-mm-dd">
                                </div>
                                <div class="col-md-2 p-0">
                                    <input type="text" class="form-control text-center datepicker"
                                           name="last_chance_date[]" placeholder="yyyy-mm-dd">
                                </div>
                                <div class="col-md-2 p-0">
                                    <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                           placeholder="yyyy-mm-dd">
                                </div>
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
        function cloneResultStatusAnnualPartTwo() {
            let clone = $('#result_status_annual_part_two_div').clone();
            $('#result_status_annual_part_two_parent').append(clone);
            let button = clone.find('#removeResultStatusAnnualPartTwoButton').removeAttr('disabled');
            // let dropdown = $(clone.find('#result_field_for_annual_part_one').parent().siblings()[0]).hide();
            setResultHeaderAnnualPartTwoDisplay();
            clone.find('.datepicker').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'yyyy-mm-dd'
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });
        }

        function setResultHeaderAnnualPartTwoDisplay() {
            let check = true;
            $('.result_annual_part_two').each(function (index,value) {
                if($(value).val() == 'fail'){
                    $('#result_status_annual_part_two_pass_headers').show();
                    $(value).parent().parent().find('#result_status_annual_part_two_pass_values').show();
                    check = false;
                }
                else{
                    $(value).parent().parent().find('#result_status_annual_part_two_pass_values').hide();
                }
            });
            if(check){
                $('#result_status_annual_part_two_pass_headers').hide();
            }
        }

        function resultChangedForAnnualPartTwo(event) {
            setResultHeaderAnnualPartTwoDisplay();
            if($(event.target).val() == 'fail')
                $(event.target).parent().parent().find('#result_status_annual_part_two_pass_values').fadeIn();
            else
                $(event.target).parent().parent().find('#result_status_annual_part_two_pass_values').fadeOut();
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
    </script>
@endsection
