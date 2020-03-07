<div id="page_18" style="display:none;">
    <form id="page_18_form">
    <div class="card shadow p-3 w-100">
        <div class="card-header text-center bg-success">
            Continue 1(Second Semester)
        </div>
        <div class="card-body ">
            <div class="card shadow p-3 w-100">
                <div class="card-body">
                    <div class="col-md-12 mt-4">
                        <label for="">2nd Semester File Received in CFE Cell:</label>
                    </div>
                    <div class="card shadow p-3 w-100">
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Status:</label>
                                    <select onchange="setStatusDatePage18()" id="status_page18" name="cell_status" class="form-control">
                                        <option value="" selected disabled>--select--</option>
                                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                            <option value="{{$key}}" {{ $data ? $data['second_semester_details']['cell_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3" id="date_div_page18">
                                    <label>Date:</label>
                                    <input type="text" class="form-control text-center datepicker" name="cell_date"
                                           placeholder="dd/mm/yyyy"
                                           value="{{$data && isset($data['second_semester_details']) ? date('d/m/Y',strtotime($data['second_semester_details']['cell_date'])) : ''}}">
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
                            <select onchange="setPwwbStatusPage18()" id="pwwb_status_page18" name="pwwb_status" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['second_semester_details']['pwwb_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3" id="date_div_pwwb_page18">
                            <label>Date:</label>
                            <input type="text" class="form-control text-center datepicker" name="pwwb_date"
                                   placeholder="dd/mm/yyyy"
                                   value="{{$data && isset($data['second_semester_details']) ? date('d/m/Y',strtotime($data['second_semester_details']['pwwb_date'])) : ''}}">
                        </div>
                        <div class="form-group col-md-3" id="diary_no_pwwb_page18">
                            <label>Diary No. in PWWB:</label>
                            <input type="text" class="form-control text-center" name="diary_pwwb" placeholder="XXXXX"
                            value="{{$data && isset($data['second_semester_details']) ? $data['second_semester_details']['diary_pwwb'] : ''}}">
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
                            <input type="number" class="form-control text-center" name="amount_claim_due"
                                   placeholder="XXXXX"
                                   value="{{$data && isset($data['second_semester_details']) ? $data['second_semester_details']['amount_claim_due'] : ''}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Status of Claimed Received:</label>
                            <select onchange="setClaimStatusPage18()" id="claim_status_page18" name="claim_status" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['second_semester_details']['claim_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3" id="amount_claim_page18">
                            <label>Amount Received:</label>
                            <input type="number" class="form-control text-center" name="amount_received"
                                   placeholder="Enter Amount"
                                   value="{{$data && isset($data['second_semester_details']) ? $data['second_semester_details']['amount_received'] : ''}}">
                        </div>
                        <div class="form-group col-md-3" id="date_div_claim_page18">
                            <label>Date:</label>
                            <input type="text" class="form-control text-center datepicker" name="claim_date"
                                   placeholder="dd/mm/yyyy"
                                   value="{{$data && isset($data['second_semester_details']) ? date('d/m/Y',strtotime($data['second_semester_details']['claim_date'])) : ''}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <label for="">Examination Status in Affiliated Body:</label>
            </div>
            <div class="card shadow p-3 mt-1 w-100">
                <div class="card-body" id="result_status_second_semester_parent">
                    <div class="col-md-12 mt-4">
                        <label for="">Exam Fee:</label>
                    </div>
                    <div class="card shadow p-3 mt-1 w-100">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Status:</label>
                                    <select onchange="setExamFeeStatusPage18()" id="exam_status_page18" name="exam_status" class="form-control">
                                        <option value="" selected disabled>--select--</option>
                                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                            <option value="{{$key}}" {{ $data ? $data['second_semester_details']['exam_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3" id="date_div_exam_page18">
                                    <label>Date:</label>
                                    <input type="text" class="form-control text-center datepicker" name="exam_date"
                                           placeholder="dd/mm/yyyy"
                                           value="{{$data && isset($data['second_semester_details']) ? date('d/m/Y',strtotime($data['second_semester_details']['exam_date'])) : ''}}">
                                </div>
                                <div class="form-group col-md-3" id="amount_div_exam_page18">
                                    <label>Amount:</label>
                                    <input type="number" class="form-control text-center" name="amount"
                                           placeholder="Enter Amount"
                                           value="{{$data && isset($data['second_semester_details']) ? $data['second_semester_details']['amount'] : ''}}">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Roll No:</label>
                                    <input type="text" class="form-control text-center" name="roll_no"
                                           placeholder="XXXXX"
                                           value="{{$data && isset($data['second_semester_details']) ? $data['second_semester_details']['roll_no'] : ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="ml-2">
                            <label for="">Result Status:</label>
                        </div>
                        <div class="float-right ml-auto mr-2">
                            <button type="button" class="btn btn-primary float-right" onclick="cloneResultStatusSecondSemester()">
                                <strong>+</strong></button>
                        </div>
                    </div>
                    <div class="form-row pt-2">
                        <div class="col-md-1 text-center">
                            <label>Result:</label>
                        </div>
                        <div class="form-row col-md-8 ml-0" id="result_status_second_semester_pass_headers">
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
                        <div class="col-md-2 text-center">
                            <label>Passing Date:</label>
                        </div>
                    </div>
                    @if($data && isset($data['second_semester_result_status_details']) && count($data['second_semester_result_status_details']))
                        @foreach($data['second_semester_result_status_details'] as $secondSemesterResultStatusDetails)
                            <div class="form-row mt-2" id="result_status_second_semester_div">
                                <input type="hidden" value="{{$secondSemesterResultStatusDetails['id']}}" id="result_status_second_semester_delete_id">
                                <div class="col-md-1 p-0">
                                    <select id="result_field_for_second_semester" name="result[]" class="form-control result_second_semester" onchange="resultChangedForSecondSemester(event)">
                                        <option value="pass" {{ $secondSemesterResultStatusDetails['result'] == 'pass' ? 'selected' : ''}}>Pass</option>
                                        <option value="fail" {{ $secondSemesterResultStatusDetails['result'] == 'fail' ? 'selected' : ''}}>Fail</option>
                                    </select>
                                </div>
                                <div class="col-md-8 form-row m-0" id="result_status_second_semester_pass_values_replacement" style="display: none"></div>
                                <div class="col-md-8 form-row m-0" id="result_status_second_semester_pass_values" style="display: none">
                                    <div class="col-md-3 p-0">
                                        <select name="fail[]" class="form-control promotion_second_semester" onchange="setDisplayForThirdSemester()">
                                            <option value="promoted" {{ $secondSemesterResultStatusDetails['fail'] == 'promoted' ? 'selected' : ''}}>Promoted</option>
                                            <option value="notPromoted" {{ $secondSemesterResultStatusDetails['fail'] == 'notPromoted' ? 'selected' : ''}}>Not Promoted</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 p-0">
                                        <select name="next_appearance[]" class="form-control">
                                            <option value="yes" {{ $secondSemesterResultStatusDetails['next_appearance'] == 'yes' ? 'selected' : ''}}>Yes</option>
                                            <option value="no" {{ $secondSemesterResultStatusDetails['next_appearance'] == 'no' ? 'selected' : ''}}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 p-0">
                                        <input type="text" class="form-control text-center datepicker"
                                               name="next_appearance_date[]" placeholder="dd/mm/yyyy" value="{{ $secondSemesterResultStatusDetails['next_appearance_date'] ? date('d/m/Y',strtotime($secondSemesterResultStatusDetails['next_appearance_date'])) : ''}}">
                                    </div>
                                    <div class="col-md-3 p-0">
                                        <input type="text" class="form-control text-center datepicker"
                                               name="last_chance_date[]" placeholder="dd/mm/yyyy" value="{{$secondSemesterResultStatusDetails['last_chance_date'] ? date('d/m/Y',strtotime($secondSemesterResultStatusDetails['last_chance_date'])) : ''}}">
                                    </div>
                                </div>
                                <div class="col-md-2 p-0" id="result_status_second_semester_pass_value_passing" style="display: none">
                                    <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                           placeholder="dd/mm/yyyy" value="{{$secondSemesterResultStatusDetails['passing_date'] ?  date('d/m/Y',strtotime($secondSemesterResultStatusDetails['passing_date'])) : ''}}">
                                </div>
                                <div class="col-md-1">
                                    <button id="removeResultStatusSecondSemesterButton" type="button" class="btn btn-danger"
                                            onclick="removeResultStatusSecondSemester(event)" @if ($secondSemesterResultStatusDetails == reset($data['second_semester_result_status_details'])) {{'disabled'}} @endif>-
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="form-row mt-2" id="result_status_second_semester_div">
                            <div class="col-md-1 p-0">
                                <select id="result_field_for_second_semester" name="result[]" class="form-control result_second_semester" onchange="resultChangedForSecondSemester(event)">
                                    <option value="" selected disabled>--select--</option>
                                    <option value="pass">Pass</option>
                                    <option value="fail">Fail</option>
                                </select>
                            </div>
                            <div class="col-md-8 form-row m-0" id="result_status_second_semester_pass_values_replacement" style="display: none"></div>
                            <div class="col-md-8 form-row m-0" id="result_status_second_semester_pass_values" style="display: none">
                                <div class="col-md-3 p-0">
                                    <select name="fail[]" class="form-control promotion_second_semester" onchange="setDisplayForThirdSemester()">
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
                                    <input type="text" class="form-control text-center datepicker"
                                           name="next_appearance_date[]" placeholder="dd/mm/yyyy">
                                </div>
                                <div class="col-md-3 p-0">
                                    <input type="text" class="form-control text-center datepicker"
                                           name="last_chance_date[]" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="col-md-2 p-0" id="result_status_second_semester_pass_value_passing" style="display: none">
                                <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                       placeholder="dd/mm/yyyy">
                            </div>
                            <div class="col-md-1">
                                <button id="removeResultStatusSecondSemesterButton" type="button" class="btn btn-danger"
                                        onclick="removeResultStatusSecondSemester(event)" disabled>-
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
@section('script_page_18')
    <script>
        setDisplayForThirdSemester();
        setResultHeaderDisplayForSecondSemester();
        setStatusDatePage18();
        setPwwbStatusPage18();
        setClaimStatusPage18();
        setExamFeeStatusPage18();
        function cloneResultStatusSecondSemester() {
            let clone = $('#result_status_second_semester_div').clone();
            $('#result_status_second_semester_parent').append(clone);
            let button = clone.find('#removeResultStatusSecondSemesterButton').removeAttr('disabled');
            // let dropdown = $(clone.find('#result_field_for_annual_part_one').parent().siblings()[0]).hide();
            setResultHeaderDisplayForSecondSemester();
            clone.find('.datepicker').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'dd/mm/yyyy'
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });
            setDisplayForThirdSemester();
        }

        function removeResultStatusSecondSemester(event) {
            if(index_id) {
                let csrf_token = $('meta[name="csrf-token"]').attr('content');
                let request = $.ajax({
                    url: '/second-semester-delete',
                    method: "POST",
                    data: {
                        'index_id' : index_id,
                        'id' : $(event.target).parent().parent().find('#result_status_second_semester_delete_id').val()
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
            setDisplayForThirdSemester();
        }

        function resultChangedForSecondSemester(event) {
            setResultHeaderDisplayForSecondSemester();
            setDisplayForThirdSemester();
            if($(event.target).val() == 'fail'){
                $(event.target).parent().parent().find('#result_status_second_semester_pass_values').fadeIn();
                $(event.target).parent().parent().find('#result_status_second_semester_pass_values_replacement').fadeOut();
                $(event.target).parent().parent().find('#result_status_second_semester_pass_value_passing').fadeOut();
            }
            else if($(event.target).val() == 'pass'){
                $(event.target).parent().parent().find('#result_status_second_semester_pass_values').fadeOut();
                $(event.target).parent().parent().find('#result_status_second_semester_pass_values_replacement').fadeIn();
                $(event.target).parent().parent().find('#result_status_second_semester_pass_value_passing').fadeIn();
            }
            else{
                $(event.target).parent().parent().find('#result_status_second_semester_pass_values').fadeOut();
                $(event.target).parent().parent().find('#result_status_second_semester_pass_values_replacement').fadeOut();
                $(event.target).parent().parent().find('#result_status_second_semester_pass_value_passing').fadeOut();
            }
        }

        function setResultHeaderDisplayForSecondSemester() {
            $('.result_second_semester').each(function (index,value) {
                if($(value).val() == 'fail'){
                    $(value).parent().parent().find('#result_status_second_semester_pass_values').show();
                    $(value).parent().parent().find('#result_status_second_semester_pass_values_replacement').hide();
                    $(value).parent().parent().find('#result_status_second_semester_pass_value_passing').hide();
                }
                else if($(value).val() == 'pass'){
                    $(value).parent().parent().find('#result_status_second_semester_pass_values').hide();
                    $(value).parent().parent().find('#result_status_second_semester_pass_values_replacement').show();
                    $(value).parent().parent().find('#result_status_second_semester_pass_value_passing').show();
                }
                else{
                    $(value).parent().parent().find('#result_status_second_semester_pass_values').hide();
                    $(value).parent().parent().find('#result_status_second_semester_pass_values_replacement').hide();
                    $(value).parent().parent().find('#result_status_second_semester_pass_value_passing').hide();
                }
            });
        }

        function setDisplayForThirdSemester(){
            let check = true;
            let term_array = {
                'cs': '#bise_academic_term',
                'ims': '#ims_academic_term',
                'af': '#af_academic_term',
                'vti': '#vti_scheme_of_study'
            };
            let parent = $('#cfe_wing_selection option:selected').val();
            let selectedTerm = $(term_array[parent]).val();
            if(selectedTerm == 'semester') {
                let allResults = $('.result_second_semester');
                let length = allResults.length;
                if ($(allResults[length - 1]).val() == 'pass') {
                    container_array.splice(12, 0, '#page_19');
                    api_url_array.splice(12, 0, '/third-semester');
                } else {
                    let allPromotions = $('.promotion_second_semester');
                    let lengthForPromotion = allPromotions.length;
                    if ($(allPromotions[lengthForPromotion - 1]).val() == 'promoted') {
                        container_array.splice(12, 0, '#page_19');
                        api_url_array.splice(12, 0, '/third-semester');
                    } else {
                        container_array.splice(12, container_array.length - 12);
                        api_url_array.splice(12, api_url_array.length - 12);
                        container_no = 11;
                    }
                }
            }
            setDisplayForButtons();
        }

        function setStatusDatePage18() {
            if($('#status_page18').val() == 'yes'){
                $('#date_div_page18').fadeIn();
            }
            else{
                $('#date_div_page18').fadeOut();
            }
        }

        function setPwwbStatusPage18() {
            if($('#pwwb_status_page18').val() == 'yes'){
                $('#diary_no_pwwb_page18').fadeIn();
                $('#date_div_pwwb_page18').fadeIn();
            }
            else{
                $('#date_div_pwwb_page18').fadeOut();
                $('#diary_no_pwwb_page18').fadeOut();
            }
        }

        function setClaimStatusPage18() {
            if($('#claim_status_page18').val() == 'yes'){
                $('#date_div_claim_page18').fadeIn();
                $('#amount_claim_page18').fadeIn();
            }
            else{
                $('#amount_claim_page18').fadeOut();
                $('#date_div_claim_page18').fadeOut();
            }
        }

        function setExamFeeStatusPage18() {
            if($('#exam_status_page18').val() == 'yes'){
                $('#date_div_exam_page18').fadeIn();
                $('#amount_div_exam_page18').fadeIn();
            }
            else{
                $('#amount_div_exam_page18').fadeOut();
                $('#date_div_exam_page18').fadeOut();
            }
        }
    </script>
@endsection
