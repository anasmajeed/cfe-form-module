<div id="page_21" style="display:none;">
    <form id="page_21_form">
        <div class="card shadow p-3 w-100">
            <div class="card-header text-center bg-success">
                Continue 1(Fifth Semester)
            </div>
            <div class="card-body ">
                <div class="card shadow p-3 w-100">
                    <div class="card-body">
                        <div class="col-md-12 mt-4">
                            <label for="">5th Semester File Received in CFE Cell:</label>
                        </div>
                        <div class="card shadow p-3 w-100">
                            <div class="card-body ">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Status:</label>
                                        <select  name="cell_status" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['fifth_semester_details']['cell_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Date:</label>
                                        <input type="text" class="form-control text-center datepicker" name="cell_date"
                                               placeholder="dd/mm/yyyy"
                                               value="{{$data && isset($data['fifth_semester_details']) ? date('d/m/Y',strtotime($data['fifth_semester_details']['cell_date'])) : ''}}">
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
                                    <option value="" selected disabled>--select--</option>
                                    @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                        <option value="{{$key}}" {{ $data ? $data['fifth_semester_details']['pwwb_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Date:</label>
                                <input type="text" class="form-control text-center datepicker" name="pwwb_date"
                                       placeholder="dd/mm/yyyy"
                                       value="{{$data && isset($data['fifth_semester_details']) ? date('d/m/Y',strtotime($data['fifth_semester_details']['pwwb_date'])) : ''}}">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Diary No. in PWWB:</label>
                                <input type="text" class="form-control text-center" name="diary_pwwb" placeholder="XXXXX"
                                       value="{{$data && isset($data['fifth_semester_details']) ? $data['fifth_semester_details']['diary_pwwb'] : ''}}">
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
                                       value="{{$data && isset($data['fifth_semester_details']) ? $data['fifth_semester_details']['amount_claim_due'] : ''}}">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Status of Claimed Received:</label>
                                <select  name="claim_status" class="form-control">
                                    <option value="" selected disabled>--select--</option>
                                    @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                        <option value="{{$key}}" {{ $data ? $data['fifth_semester_details']['claim_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Amount Received:</label>
                                <input type="text" class="form-control text-center" name="amount_received"
                                       placeholder="XXXXX"
                                       value="{{$data && isset($data['fifth_semester_details']) ? $data['fifth_semester_details']['amount_received'] : ''}}">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Date:</label>
                                <input type="text" class="form-control text-center datepicker" name="claim_date"
                                       placeholder="dd/mm/yyyy"
                                       value="{{$data && isset($data['fifth_semester_details']) ? date('d/m/Y',strtotime($data['fifth_semester_details']['claim_date'])) : ''}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label for="">Examination Status in Affiliated Body:</label>
                </div>
                <div class="card shadow p-3 mt-1 w-100">
                    <div class="card-body" id="result_status_fifth_semester_parent">
                        <div class="col-md-12 mt-4">
                            <label for="">Exam Fee:</label>
                        </div>
                        <div class="card shadow p-3 mt-1 w-100">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Status:</label>
                                        <select  name="exam_status" class="form-control">
                                            <option value="" selected disabled>--select--</option>
                                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                                <option value="{{$key}}" {{ $data ? $data['fifth_semester_details']['exam_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Date:</label>
                                        <input type="text" class="form-control text-center datepicker" name="exam_date"
                                               placeholder="dd/mm/yyyy"
                                               value="{{$data && isset($data['fifth_semester_details']) ? date('d/m/Y',strtotime($data['fifth_semester_details']['exam_date'])) : ''}}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Amount:</label>
                                        <input type="text" class="form-control text-center" name="amount"
                                               placeholder="XXXXX"
                                               value="{{$data && isset($data['fifth_semester_details']) ? $data['fifth_semester_details']['amount'] : ''}}">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>Roll No:</label>
                                        <input type="text" class="form-control text-center" name="roll_no"
                                               placeholder="XXXXX"
                                               value="{{$data && isset($data['fifth_semester_details']) ? $data['fifth_semester_details']['roll_no'] : ''}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="ml-2">
                                <label for="">Result Status:</label>
                            </div>
                            <div class="float-right ml-auto mr-2">
                                <button type="button" class="btn btn-primary float-right" onclick="cloneResultStatusFifthSemester()">
                                    <strong>+</strong></button>
                            </div>
                        </div>
                        <div class="form-row pt-2">
                            <div class="col-md-1 text-center">
                                <label>Result:</label>
                            </div>
                            <div class="form-row col-md-10 ml-0" id="result_status_fifth_semester_pass_headers" style="display: none">
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
                        </div>
                        @if($data && isset($data['fifth_semester_result_status_details']) && count($data['fifth_semester_result_status_details']))
                            @foreach($data['fifth_semester_result_status_details'] as $fifthSemesterResultStatusDetails)
                                <div class="form-row mt-2" id="result_status_fifth_semester_div">
                                    <input type="hidden" value="{{$fifthSemesterResultStatusDetails['id']}}" id="result_status_fifth_semester_delete_id">
                                    <div class="col-md-1 p-0">
                                        <select id="result_field_for_fifth_semester" name="result[]" class="form-control result_fifth_semester" onchange="resultChangedForFifthSemester(event)">
                                            <option value="pass" {{ $fifthSemesterResultStatusDetails['result'] == 'pass' ? 'selected' : ''}}>Pass</option>
                                            <option value="fail" {{ $fifthSemesterResultStatusDetails['result'] == 'fail' ? 'selected' : ''}}>Fail</option>
                                        </select>
                                    </div>
                                    <div class="col-md-10 form-row m-0" id="result_status_fifth_semester_pass_values" style="display: none">
                                        <div class="col-md-2 p-0">
                                            <select name="fail[]" class="form-control promotion_fifth_semester" onchange="setDisplayForSixthSemester()">
                                                <option value="promoted" {{ $fifthSemesterResultStatusDetails['fail'] == 'promoted' ? 'selected' : ''}}>Promoted</option>
                                                <option value="notPromoted" {{ $fifthSemesterResultStatusDetails['fail'] == 'notPromoted' ? 'selected' : ''}}>Not Promoted</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 p-0">
                                            <select name="next_appearance[]" class="form-control">
                                                <option value="yes" {{ $fifthSemesterResultStatusDetails['next_appearance'] == 'yes' ? 'selected' : ''}}>Yes</option>
                                                <option value="no" {{ $fifthSemesterResultStatusDetails['next_appearance'] == 'no' ? 'selected' : ''}}>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 p-0">
                                            <input type="text" class="form-control text-center datepicker"
                                                   name="next_appearance_date[]" placeholder="dd/mm/yyyy" value="{{ $fifthSemesterResultStatusDetails['next_appearance_date'] ? date('d/m/Y',strtotime($fifthSemesterResultStatusDetails['next_appearance_date'])) : ''}}">
                                        </div>
                                        <div class="col-md-2 p-0">
                                            <input type="text" class="form-control text-center datepicker"
                                                   name="last_chance_date[]" placeholder="dd/mm/yyyy" value="{{$fifthSemesterResultStatusDetails['last_chance_date'] ?  date('d/m/Y',strtotime($fifthSemesterResultStatusDetails['last_chance_date'])) : ''}}">
                                        </div>
                                        <div class="col-md-2 p-0">
                                            <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                                   placeholder="dd/mm/yyyy" value="{{ $fifthSemesterResultStatusDetails['passing_date'] ? date('d/m/Y',strtotime($fifthSemesterResultStatusDetails['passing_date'])) : ''}}">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <button id="removeResultStatusFifthSemesterButton" type="button" class="btn btn-danger"
                                                onclick="removeResultStatusFifthSemester(event)" @if ($fifthSemesterResultStatusDetails == reset($data['fifth_semester_result_status_details'])) {{'disabled'}} @endif>-
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="form-row mt-2" id="result_status_fifth_semester_div">
                                <div class="col-md-1 p-0">
                                    <select id="result_field_for_fifth_semester" name="result[]" class="form-control result_fifth_semester" onchange="resultChangedForFifthSemester(event)">
                                        <option value="pass" selected>Pass</option>
                                        <option value="fail">Fail</option>
                                    </select>
                                </div>
                                <div class="col-md-10 form-row m-0" id="result_status_fifth_semester_pass_values" style="display: none">
                                    <div class="col-md-2 p-0">
                                        <select name="fail[]" class="form-control promotion_fifth_semester" onchange="setDisplayForSixthSemester()">
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
                                               name="next_appearance_date[]" placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="col-md-2 p-0">
                                        <input type="text" class="form-control text-center datepicker"
                                               name="last_chance_date[]" placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="col-md-2 p-0">
                                        <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button id="removeResultStatusFifthSemesterButton" type="button" class="btn btn-danger"
                                            onclick="removeResultStatusFifthSemester(event)" disabled>-
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
@section('script_page_21')
    <script>
        setDisplayForSixthSemester();
        setResultHeaderDisplayForFifthSemester();
        function cloneResultStatusFifthSemester() {
            let clone = $('#result_status_fifth_semester_div').clone();
            $('#result_status_fifth_semester_parent').append(clone);
            let button = clone.find('#removeResultStatusFifthSemesterButton').removeAttr('disabled');
            // let dropdown = $(clone.find('#result_field_for_annual_part_one').parent().siblings()[0]).hide();
            setResultHeaderDisplayForFifthSemester();
            clone.find('.datepicker').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'dd/mm/yyyy'
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });
            setDisplayForSixthSemester();
        }

        function removeResultStatusFifthSemester(event) {
            if(index_id) {
                let csrf_token = $('meta[name="csrf-token"]').attr('content');
                let request = $.ajax({
                    url: '/fifth-semester-delete',
                    method: "POST",
                    data: {
                        'index_id' : index_id,
                        'id' : $(event.target).parent().parent().find('#result_status_fifth_semester_delete_id').val()
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
            setDisplayForSixthSemester();
        }

        function resultChangedForFifthSemester(event) {
            setResultHeaderDisplayForFifthSemester();
            setDisplayForSixthSemester();
            if($(event.target).val() == 'fail')
                $(event.target).parent().parent().find('#result_status_fifth_semester_pass_values').fadeIn();
            else
                $(event.target).parent().parent().find('#result_status_fifth_semester_pass_values').fadeOut();
        }

        function setResultHeaderDisplayForFifthSemester() {
            let check = true;
            $('.result_fifth_semester').each(function (index,value) {
                if($(value).val() == 'fail'){
                    $('#result_status_fifth_semester_pass_headers').show();
                    $(value).parent().parent().find('#result_status_fifth_semester_pass_values').show();
                    check = false;
                }
                else{
                    $(value).parent().parent().find('#result_status_fifth_semester_pass_values').hide();
                }
            });
            if(check){
                $('#result_status_fifth_semester_pass_headers').hide();
            }
        }

        function setDisplayForSixthSemester(){
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
                let allResults = $('.result_fifth_semester');
                let length = allResults.length;
                if ($(allResults[length - 1]).val() == 'pass') {
                    container_array.splice(15, 0, '#page_22');
                    api_url_array.splice(15, 0, '/sixth-semester');
                } else {
                    let allPromotions = $('.promotion_fifth_semester');
                    let lengthForPromotion = allPromotions.length;
                    if ($(allPromotions[lengthForPromotion - 1]).val() == 'promoted') {
                        container_array.splice(15, 0, '#page_22');
                        api_url_array.splice(15, 0, '/sixth-semester');
                    } else {
                        container_array.splice(15, container_array.length - 15);
                        api_url_array.splice(15, api_url_array.length - 15);
                        container_no = 14;
                    }
                }
            }
            setDisplayForButtons();

        }
    </script>
@endsection
