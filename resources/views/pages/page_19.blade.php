<div id="page_19" style="display:none;">
    <form id="page_19_form">
        <div class="card shadow p-3 w-100">
            <div class="card-header text-center bg-success">
                Continue 1(Third Semester)
            </div>
            <div class="card-body ">
                <div class="card shadow p-3 w-100">
                    <div class="card-body">
                        <div class="col-md-12 mt-4">
                            <label for="">3rd Semester File Received in CFE Cell:</label>
                        </div>
                        <div class="card shadow p-3 w-100">
                            <div class="card-body ">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Status:</label>
                                        <select onchange="setStatusDatePage19()" id="status_page19" name="cell_status" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['third_semester_details']['cell_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3" id="date_div_page19">
                                        <label>Date:</label>
                                        <input type="text" class="form-control text-center datepicker" name="cell_date"
                                               placeholder="dd/mm/yyyy"
                                               value="{{$data && isset($data['third_semester_details']) ? date('d/m/Y',strtotime($data['third_semester_details']['cell_date'])) : ''}}">
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
                                <select onchange="setPwwbStatusPage19()" id="pwwb_status_page19" name="pwwb_status" class="form-control">
                                    <option value="" selected disabled>--select--</option>
                                    @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                        <option value="{{$key}}" {{ $data ? $data['third_semester_details']['pwwb_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-3" id="date_div_pwwb_page19">
                                <label>Date:</label>
                                <input type="text" class="form-control text-center datepicker" name="pwwb_date"
                                       placeholder="dd/mm/yyyy"
                                       value="{{$data && isset($data['third_semester_details']) ? date('d/m/Y',strtotime($data['third_semester_details']['pwwb_date'])) : ''}}">
                            </div>
                            <div class="form-group col-md-3" id="diary_no_pwwb_page19">
                                <label>Diary No. in PWWB:</label>
                                <input type="text" class="form-control text-center" name="diary_pwwb" placeholder="XXXXX"
                                       value="{{$data && isset($data['third_semester_details']) ? $data['third_semester_details']['diary_pwwb'] : ''}}">
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
                                       value="{{$data && isset($data['third_semester_details']) ? $data['third_semester_details']['amount_claim_due'] : ''}}">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Status of Claimed Received:</label>
                                <select onchange="setClaimStatusPage19()" id="claim_status_page19" name="claim_status" class="form-control">
                                    <option value="" selected disabled>--select--</option>
                                    @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                        <option value="{{$key}}" {{ $data ? $data['third_semester_details']['claim_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-3" id="amount_claim_page19">
                                <label>Amount Received:</label>
                                <input type="number" class="form-control text-center" name="amount_received"
                                       placeholder="Enter Amount"
                                       value="{{$data && isset($data['third_semester_details']) ? $data['third_semester_details']['amount_received'] : ''}}">
                            </div>
                            <div class="form-group col-md-3" id="date_div_claim_page19">
                                <label>Date:</label>
                                <input type="text" class="form-control text-center datepicker" name="claim_date"
                                       placeholder="dd/mm/yyyy"
                                       value="{{$data && isset($data['third_semester_details']) ? date('d/m/Y',strtotime($data['third_semester_details']['claim_date'])) : ''}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label for="">Examination Status in Affiliated Body:</label>
                </div>
                <div class="card shadow p-3 mt-1 w-100">
                    <div class="card-body" id="result_status_third_semester_parent">
                        <div class="col-md-12 mt-4">
                            <label for="">Exam Fee:</label>
                        </div>
                        <div class="card shadow p-3 mt-1 w-100">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Status:</label>
                                        <select onchange="setExamFeeStatusPage19()" id="exam_status_page19" name="exam_status" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['third_semester_details']['exam_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3" id="date_div_exam_page19">
                                        <label>Date:</label>
                                        <input type="text" class="form-control text-center datepicker" name="exam_date"
                                               placeholder="dd/mm/yyyy"
                                               value="{{$data && isset($data['third_semester_details']) ? date('d/m/Y',strtotime($data['third_semester_details']['exam_date'])) : ''}}">
                                    </div>
                                    <div class="form-group col-md-3" id="amount_div_exam_page19">
                                        <label>Amount:</label>
                                        <input type="number" class="form-control text-center" name="amount"
                                               placeholder="Enter Amount"
                                               value="{{$data && isset($data['third_semester_details']) ? $data['third_semester_details']['amount'] : ''}}">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>Roll No:</label>
                                        <input type="text" class="form-control text-center" name="roll_no"
                                               placeholder="XXXXX"
                                               value="{{$data && isset($data['third_semester_details']) ? $data['third_semester_details']['roll_no'] : ''}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="ml-2">
                                <label for="">Result Status:</label>
                            </div>
                            <div class="float-right ml-auto mr-2">
                                <button type="button" class="btn btn-primary float-right" onclick="cloneResultStatusThirdSemester()">
                                    <strong>+</strong></button>
                            </div>
                        </div>
                        <div class="form-row pt-2">
                            <div class="col-md-1 text-center">
                                <label>Result:</label>
                            </div>
                            <div class="form-row col-md-8 ml-0" id="result_status_third_semester_pass_headers">
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
                        @if($data && isset($data['third_semester_result_status_details']) && count($data['third_semester_result_status_details']))
                            @foreach($data['third_semester_result_status_details'] as $thirdSemesterResultStatusDetails)
                                <div class="form-row mt-2" id="result_status_third_semester_div">
                                    <input type="hidden" value="{{$thirdSemesterResultStatusDetails['id']}}" id="result_status_third_semester_delete_id">
                                    <div class="col-md-1 p-0">
                                        <select id="result_field_for_third_semester" name="result[]" class="form-control result_third_semester" onchange="resultChangedForThirdSemester(event)">
                                            <option value="pass" {{ $thirdSemesterResultStatusDetails['result'] == 'pass' ? 'selected' : ''}}>Pass</option>
                                            <option value="fail" {{ $thirdSemesterResultStatusDetails['result'] == 'fail' ? 'selected' : ''}}>Fail</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8 form-row m-0" id="result_status_third_semester_pass_values_replacement" style="display: none"></div>
                                    <div class="col-md-8 form-row m-0" id="result_status_third_semester_pass_values" style="display: none">
                                        <div class="col-md-3 p-0">
                                            <select name="fail[]" class="form-control promotion_third_semester" onchange="setDisplayForFourthSemester()">
                                                <option value="promoted" {{ $thirdSemesterResultStatusDetails['fail'] == 'promoted' ? 'selected' : ''}}>Promoted</option>
                                                <option value="notPromoted" {{ $thirdSemesterResultStatusDetails['fail'] == 'notPromoted' ? 'selected' : ''}}>Not Promoted</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 p-0">
                                            <select name="next_appearance[]" class="form-control">
                                                <option value="yes" {{ $thirdSemesterResultStatusDetails['next_appearance'] == 'yes' ? 'selected' : ''}}>Yes</option>
                                                <option value="no" {{ $thirdSemesterResultStatusDetails['next_appearance'] == 'no' ? 'selected' : ''}}>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 p-0">
                                            <input type="text" class="form-control text-center datepicker"
                                                   name="next_appearance_date[]" placeholder="dd/mm/yyyy" value="{{ $thirdSemesterResultStatusDetails['next_appearance_date'] ? date('d/m/Y',strtotime($thirdSemesterResultStatusDetails['next_appearance_date'])) : ''}}">
                                        </div>
                                        <div class="col-md-3 p-0">
                                            <input type="text" class="form-control text-center datepicker"
                                                   name="last_chance_date[]" placeholder="dd/mm/yyyy" value="{{ $thirdSemesterResultStatusDetails['last_chance_date'] ?  date('d/m/Y',strtotime($thirdSemesterResultStatusDetails['last_chance_date'])) : ''}}">
                                        </div>
                                    </div>
                                    <div class="col-md-2 p-0" id="result_status_third_semester_pass_value_passing" style="display: none">
                                        <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                               placeholder="dd/mm/yyyy" value="{{$thirdSemesterResultStatusDetails['passing_date'] ? date('d/m/Y',strtotime($thirdSemesterResultStatusDetails['passing_date'])) : ''}}">
                                    </div>
                                    <div class="col-md-1">
                                        <button id="removeResultStatusThirdSemesterButton" type="button" class="btn btn-danger"
                                                onclick="removeResultStatusThirdSemester(event)" @if ($thirdSemesterResultStatusDetails == reset($data['third_semester_result_status_details'])) {{'disabled'}} @endif>-
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="form-row mt-2" id="result_status_third_semester_div">
                                <div class="col-md-1 p-0">
                                    <select id="result_field_for_third_semester" name="result[]" class="form-control result_third_semester" onchange="resultChangedForThirdSemester(event)">
                                        <option value="" selected disabled>--select--</option>
                                        <option value="pass">Pass</option>
                                        <option value="fail">Fail</option>
                                    </select>
                                </div>
                                <div class="col-md-8 form-row m-0" id="result_status_third_semester_pass_values_replacement" style="display: none"></div>
                                <div class="col-md-8 form-row m-0" id="result_status_third_semester_pass_values" style="display: none">
                                    <div class="col-md-3 p-0">
                                        <select name="fail[]" class="form-control promotion_third_semester" onchange="setDisplayForFourthSemester()">
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
                                <div class="col-md-2 p-0" id="result_status_third_semester_pass_value_passing" style="display: none">
                                    <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                           placeholder="dd/mm/yyyy">
                                </div>
                                <div class="col-md-1">
                                    <button id="removeResultStatusThirdSemesterButton" type="button" class="btn btn-danger"
                                            onclick="removeResultStatusThirdSemester(event)" disabled>-
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
@section('script_page_19')
    <script>
        setDisplayForFourthSemester();
        setResultHeaderDisplayForThirdSemester();
        setStatusDatePage19();
        setPwwbStatusPage19();
        setClaimStatusPage19();
        setExamFeeStatusPage19();
        function cloneResultStatusThirdSemester() {
            let clone = $('#result_status_third_semester_div').clone();
            $('#result_status_third_semester_parent').append(clone);
            let button = clone.find('#removeResultStatusThirdSemesterButton').removeAttr('disabled');
            // let dropdown = $(clone.find('#result_field_for_annual_part_one').parent().siblings()[0]).hide();
            setResultHeaderDisplayForThirdSemester();
            clone.find('.datepicker').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'dd/mm/yyyy'
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });
            setDisplayForFourthSemester();
        }

        function removeResultStatusThirdSemester(event) {
            if(index_id) {
                let csrf_token = $('meta[name="csrf-token"]').attr('content');
                let request = $.ajax({
                    url: '/third-semester-delete',
                    method: "POST",
                    data: {
                        'index_id' : index_id,
                        'id' : $(event.target).parent().parent().find('#result_status_third_semester_delete_id').val()
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
            setDisplayForFourthSemester();
        }

        function resultChangedForThirdSemester(event) {
            setResultHeaderDisplayForThirdSemester();
            setDisplayForFourthSemester();
            if($(event.target).val() == 'fail'){
                $(event.target).parent().parent().find('#result_status_third_semester_pass_values').fadeIn();
                $(event.target).parent().parent().find('#result_status_third_semester_pass_values_replacement').fadeOut();
                $(event.target).parent().parent().find('#result_status_third_semester_pass_value_passing').fadeOut();
            }
            else if($(event.target).val() == 'pass'){
                $(event.target).parent().parent().find('#result_status_third_semester_pass_values').fadeOut();
                $(event.target).parent().parent().find('#result_status_third_semester_pass_values_replacement').fadeIn();
                $(event.target).parent().parent().find('#result_status_third_semester_pass_value_passing').fadeIn();
            }
            else{
                $(event.target).parent().parent().find('#result_status_third_semester_pass_values').fadeOut();
                $(event.target).parent().parent().find('#result_status_third_semester_pass_values_replacement').fadeOut();
                $(event.target).parent().parent().find('#result_status_third_semester_pass_value_passing').fadeOut();
            }
        }

        function setResultHeaderDisplayForThirdSemester() {
            $('.result_third_semester').each(function (index,value) {
                if($(value).val() == 'fail'){
                    $(value).parent().parent().find('#result_status_third_semester_pass_values').show();
                    $(value).parent().parent().find('#result_status_third_semester_pass_values_replacement').hide();
                    $(value).parent().parent().find('#result_status_third_semester_pass_value_passing').hide();
                }
                else if($(value).val() == 'pass'){
                    $(value).parent().parent().find('#result_status_third_semester_pass_values').hide();
                    $(value).parent().parent().find('#result_status_third_semester_pass_values_replacement').show();
                    $(value).parent().parent().find('#result_status_third_semester_pass_value_passing').show();
                }
                else{
                    $(value).parent().parent().find('#result_status_third_semester_pass_values').hide();
                    $(value).parent().parent().find('#result_status_third_semester_pass_values_replacement').hide();
                    $(value).parent().parent().find('#result_status_third_semester_pass_value_passing').hide();
                }
            });
        }

        function setDisplayForFourthSemester(){
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
                let allResults = $('.result_third_semester');
                let length = allResults.length;
                if ($(allResults[length - 1]).val() == 'pass') {
                    container_array.splice(13, 0, '#page_20');
                    api_url_array.splice(13, 0, '/fourth-semester');
                } else {
                    let allPromotions = $('.promotion_third_semester');
                    let lengthForPromotion = allPromotions.length;
                    if ($(allPromotions[lengthForPromotion - 1]).val() == 'promoted') {
                        container_array.splice(13, 0, '#page_20');
                        api_url_array.splice(13, 0, '/fourth-semester');
                    } else {
                        container_array.splice(13, container_array.length - 13);
                        api_url_array.splice(13, api_url_array.length - 13);
                        container_no = 12;
                    }
                }
            }
            setDisplayForButtons();
        }

        function setStatusDatePage19() {
            if($('#status_page19').val() == 'yes'){
                $('#date_div_page19').fadeIn();
            }
            else{
                $('#date_div_page19').fadeOut();
            }
        }

        function setPwwbStatusPage19() {
            if($('#pwwb_status_page19').val() == 'yes'){
                $('#diary_no_pwwb_page19').fadeIn();
                $('#date_div_pwwb_page19').fadeIn();
            }
            else{
                $('#date_div_pwwb_page19').fadeOut();
                $('#diary_no_pwwb_page19').fadeOut();
            }
        }

        function setClaimStatusPage19() {
            if($('#claim_status_page19').val() == 'yes'){
                $('#date_div_claim_page19').fadeIn();
                $('#amount_claim_page19').fadeIn();
            }
            else{
                $('#amount_claim_page19').fadeOut();
                $('#date_div_claim_page19').fadeOut();
            }
        }

        function setExamFeeStatusPage19() {
            if($('#exam_status_page19').val() == 'yes'){
                $('#date_div_exam_page19').fadeIn();
                $('#amount_div_exam_page19').fadeIn();
            }
            else{
                $('#amount_div_exam_page19').fadeOut();
                $('#date_div_exam_page19').fadeOut();
            }
        }
    </script>
@endsection
