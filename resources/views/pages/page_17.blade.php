<div id="page_17" style="display:none;">
    <form id="page_17_form">
    <div class="col-md-12 mt-4">
        <label for="">Conversion in Next Degree:</label>
    </div>
    <div class="card shadow p-3 mt-1 w-100">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Status:</label>
                    <select  name="status" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['first_semester_details']['status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label>Date:</label>
                    <input type="text" class="form-control text-center datepicker" name="degree_date" placeholder="yyyy-mm-dd"
                    value="{{$data && isset($data['first_semester_details']) ? $data['first_semester_details']['degree_date'] : ''}}">
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
                                    <label>Status:</label>
                                    <select  name="exam_status" class="form-control">
                                        <option value="" selected disabled>--select--</option>
                                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                            <option value="{{$key}}" {{ $data ? $data['first_semester_details']['exam_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Date:</label>
                                    <input type="text" class="form-control text-center datepicker" name="exam_date"
                                           placeholder="yyyy-mm-dd"
                                           value="{{$data && isset($data['first_semester_details']) ? $data['first_semester_details']['exam_date'] : ''}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Amount:</label>
                                    <input type="text" class="form-control text-center" name="amount"
                                           placeholder="XXXXX"
                                           value="{{$data && isset($data['first_semester_details']) ? $data['first_semester_details']['amount'] : ''}}">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Roll No:</label>
                                    <input type="text" class="form-control text-center" name="roll_no"
                                           placeholder="XXXXX"
                                           value="{{$data && isset($data['first_semester_details']) ? $data['first_semester_details']['roll_no'] : ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="ml-2">
                            <label for="">Result Status:</label>
                        </div>
                        <div class="float-right ml-auto mr-2">
                            <button type="button" class="btn btn-primary float-right" onclick="cloneResultStatusFirstSemester()">
                                <strong>+</strong></button>
                        </div>
                    </div>
                    <!-- result status -->
                    <div class="card shadow mt-3 p-3 w-100">
                        <div class="card-body" id="result_status_first_semester_parent">
                            <div class="form-row pt-2">
                                <div class="col-md-1 text-center">
                                    <label>Result:</label>
                                </div>
                                <div class="form-row col-md-10 ml-0" id="result_status_first_semester_pass_headers" style="display: none">
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
                            @if($data && isset($data['first_semester_result_status_details']) && count($data['first_semester_result_status_details']))
                                @foreach($data['first_semester_result_status_details'] as $firstSemesterResultStatusDetails)
                                    <div class="form-row mt-2" id="result_status_first_semester_div">
                                        <input type="hidden" value="{{$firstSemesterResultStatusDetails['id']}}" id="result_status_first_semester_delete_id">
                                        <div class="col-md-1 p-0">
                                            <select id="result_field_for_first_semester" name="result[]" class="form-control result_first_semester" onchange="resultChangedForFirstSemester(event)">
                                                <option value="pass" {{ $firstSemesterResultStatusDetails['result'] == 'pass' ? 'selected' : ''}}>Pass</option>
                                                <option value="fail" {{ $firstSemesterResultStatusDetails['result'] == 'fail' ? 'selected' : ''}}>Fail</option>
                                            </select>
                                        </div>
                                        <div class="col-md-10 form-row m-0" id="result_status_first_semester_pass_values" style="display: none">
                                            <div class="col-md-2 p-0">
                                                <select name="fail[]" class="form-control promotion_first_semester" onchange="setDisplayForSecondSemester()">
                                                    <option value="promoted" {{ $firstSemesterResultStatusDetails['fail'] == 'promoted' ? 'selected' : ''}}>Promoted</option>
                                                    <option value="notPromoted" {{ $firstSemesterResultStatusDetails['fail'] == 'notPromoted' ? 'selected' : ''}}>Not Promoted</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <select name="next_appearance[]" class="form-control">
                                                    <option value="yes" {{ $firstSemesterResultStatusDetails['next_appearance'] == 'yes' ? 'selected' : ''}}>Yes</option>
                                                    <option value="no" {{ $firstSemesterResultStatusDetails['next_appearance'] == 'no' ? 'selected' : ''}}>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <input type="text" class="form-control text-center datepicker"
                                                       name="next_appearance_date[]" placeholder="yyyy-mm-dd" value="{{ $firstSemesterResultStatusDetails['next_appearance_date']}}">
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <input type="text" class="form-control text-center datepicker"
                                                       name="last_chance_date[]" placeholder="yyyy-mm-dd" value="{{ $firstSemesterResultStatusDetails['last_chance_date']}}">
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                                       placeholder="yyyy-mm-dd" value="{{ $firstSemesterResultStatusDetails['passing_date']}}">
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <button id="removeResultStatusFirstSemesterButton" type="button" class="btn btn-danger"
                                                    onclick="removeResultStatusFirstSemester(event)" @if ($firstSemesterResultStatusDetails == reset($data['first_semester_result_status_details'])) {{'disabled'}} @endif>-
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="form-row mt-2" id="result_status_first_semester_div">
                                    <div class="col-md-1 p-0">
                                        <select id="result_field_for_first_semester" name="result[]" class="form-control result_first_semester" onchange="resultChangedForFirstSemester(event)">
                                            <option value="pass" selected>Pass</option>
                                            <option value="fail">Fail</option>
                                        </select>
                                    </div>
                                    <div class="col-md-10 form-row m-0" id="result_status_first_semester_pass_values" style="display: none">
                                        <div class="col-md-2 p-0">
                                            <select name="fail[]" class="form-control promotion_first_semester" onchange="setDisplayForSecondSemester()">
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
                                        <button id="removeResultStatusFirstSemesterButton" type="button" class="btn btn-danger"
                                                onclick="removeResultStatusFirstSemester(event)" disabled>-
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@section('script_page_17')
    <script>
        setDisplayForSecondSemester();
        setResultHeaderDisplayForFirstSemester();
        function cloneResultStatusFirstSemester() {
            let clone = $('#result_status_first_semester_div').clone();
            $('#result_status_first_semester_parent').append(clone);
            let button = clone.find('#removeResultStatusFirstSemesterButton').removeAttr('disabled');
            // let dropdown = $(clone.find('#result_field_for_annual_part_one').parent().siblings()[0]).hide();
            setResultHeaderDisplayForFirstSemester();
            clone.find('.datepicker').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'yyyy-mm-dd'
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });
            setDisplayForSecondSemester();
        }

        function removeResultStatusFirstSemester(event) {
            if(index_id) {
                let csrf_token = $('meta[name="csrf-token"]').attr('content');
                let request = $.ajax({
                    url: '/first-semester-delete',
                    method: "POST",
                    data: {
                        'index_id' : index_id,
                        'id' : $(event.target).parent().parent().find('#result_status_first_semester_delete_id').val()
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
            setDisplayForSecondSemester();
        }

        function resultChangedForFirstSemester(event) {
            setResultHeaderDisplayForFirstSemester();
            setDisplayForSecondSemester();
            if($(event.target).val() == 'fail')
                $(event.target).parent().parent().find('#result_status_first_semester_pass_values').fadeIn();
            else
                $(event.target).parent().parent().find('#result_status_first_semester_pass_values').fadeOut();
        }

        function setResultHeaderDisplayForFirstSemester() {
            let check = true;
            $('.result_first_semester').each(function (index,value) {
                if($(value).val() == 'fail'){
                    $('#result_status_first_semester_pass_headers').show();
                    $(value).parent().parent().find('#result_status_first_semester_pass_values').show();
                    check = false;
                }
                else{
                    $(value).parent().parent().find('#result_status_first_semester_pass_values').hide();
                }
            });
            if(check){
                $('#result_status_first_semester_pass_headers').hide();
            }
        }

        function setDisplayForSecondSemester(){
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
                let allResults = $('.result_first_semester');
                let length = allResults.length;
                if ($(allResults[length - 1]).val() == 'pass') {
                    container_array.splice(11, 0, '#page_18');
                    api_url_array.splice(11, 0, '/second-semester');
                } else {
                    let allPromotions = $('.promotion_first_semester');
                    let lengthForPromotion = allPromotions.length;
                    if ($(allPromotions[lengthForPromotion - 1]).val() == 'promoted') {
                        container_array.splice(11, 0, '#page_18');
                        api_url_array.splice(11, 0, '/second-semester');
                    } else {
                        container_array.splice(11, container_array.length - 11);
                        api_url_array.splice(11, api_url_array.length - 11);
                        container_no = 10;
                    }
                }
            }
            setDisplayForButtons();
        }
    </script>
@endsection
