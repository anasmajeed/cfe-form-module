<div id="page_15" style="display:none;">
    <form id="page_15_form">
    <div class="card shadow p-3 w-100">
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
                                    <label>Exam Fee Deposit status:</label>
                                    <select id="fee_deposit_status_page15" onchange="setFeeDepositStatus()" name="fee_deposit_status" class="form-control">
                                        <option value="" selected disabled>--select--</option>
                                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                            <option value="{{$key}}" {{ $data ? $data['first_annual_details']['fee_deposit_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3" id="date_div_page15" style="display: none">
                                    <label>Date:</label>
                                    <input type="text" class="form-control text-center datepicker" name="exam_fee_date"
                                            placeholder="dd/mm/yyyy"
                                            value="{{$data && $data['first_annual_details']['exam_fee_date'] ? date('d/m/Y',strtotime($data['first_annual_details']['exam_fee_date'])) : ''}}">
                                </div>
                                <div class="form-group  col-md-3" id="amount_div_page15" style="display:none;">
                                    <label>Amount:</label>
                                    <input onkeyup="numericOnly(event)" type="number" class="form-control text-center" name="amount"
                                            placeholder="Enter Amount"
                                            value="{{$data ? $data['first_annual_details']['amount'] : ''}}">
                                </div>
                                <div class="form-group  col-md-3">
                                    <label>Roll No:</label>
                                    <input type="text" class="form-control text-center" name="roll_no"
                                            placeholder="XXXXX"
                                            value="{{$data ? $data['first_annual_details']['roll_no'] : ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="ml-2">
                            <label for="">Result Status:</label>
                        </div>
                        <div class="float-right ml-auto mr-2">
                            <button type="button" class="btn btn-primary float-right" onclick="cloneResultStatusAnnualPartOne()">
                                <strong>+</strong></button>
                        </div>
                    </div>
                    <!-- result status -->
                    <div class="card shadow mt-3 p-3 w-100" >
                        <div class="card-body" id="result_status_annual_part_one_parent">
                            <div class="form-row pt-2">
                                <div class="col-md-1 text-center">
                                    <label>Result:</label>
                                </div>
                                <div class="col-md-8 form-row ml-0" id="result_status_annual_part_one_pass_headers">
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
                                <div class="col-md-2 text-center" id="result_status_annual_part_one_pass_header_passing">
                                    <label>Passing Date:</label>
                                </div>
                            </div>
                            <!-- Result Status Edit Mode-->
                            @if($data && isset($data['first_annual_result_status_details']) && count($data['first_annual_result_status_details']))
                                @foreach($data['first_annual_result_status_details'] as $firstAnnualResultStatusDetails)
                                    <div class="form-row mt-2" id="result_status_annual_part_one_div">
                                        <input type="hidden" value="{{$firstAnnualResultStatusDetails['id']}}" id="result_status_annual_part_one_delete_id">
                                        <div class="col-md-1 p-0">
                                            <select id="result_field_for_annual_part_one" name="result[]" class="form-control result_annual_part_one" onchange="resultChangedForAnnualPartOne(event)">
                                                <option value="pass" {{ $firstAnnualResultStatusDetails['result'] == 'pass' ? 'selected' : ''}}>Pass</option>
                                                <option value="fail" {{ $firstAnnualResultStatusDetails['result'] == 'fail' ? 'selected' : ''}}>Fail</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8 form-row m-0" id="result_status_annual_part_one_pass_values_replacement" style="display: none"></div>
                                        <div class="col-md-8 form-row m-0" id="result_status_annual_part_one_pass_values" style="display: none">
                                            <div class="col-md-3 p-0">
                                                <select name="fail[]" class="form-control promotion_annual_part_one" onchange="setDisplayForAnnualPartTwo()">
                                                    <option value="promoted" {{ $firstAnnualResultStatusDetails['fail'] == 'promoted' ? 'selected' : ''}}>Promoted</option>
                                                    <option value="notPromoted" {{ $firstAnnualResultStatusDetails['fail'] == 'notPromoted' ? 'selected' : ''}}>Not Promoted</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <select name="next_appearance[]" class="form-control">
                                                    <option value="yes" {{ $firstAnnualResultStatusDetails['next_appearance'] == 'yes' ? 'selected' : ''}}>Yes</option>
                                                    <option value="no" {{ $firstAnnualResultStatusDetails['next_appearance'] == 'no' ? 'selected' : ''}}>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <input type="text" class="form-control text-center datepickerAll"
                                                name="next_appearance_date[]" placeholder="dd/mm/yyyy" value="{{$firstAnnualResultStatusDetails['next_appearance_date'] ?  date('d/m/Y',strtotime($firstAnnualResultStatusDetails['next_appearance_date'])) : ''}}">
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <input type="text" class="form-control text-center datepickerAll"
                                                name="last_chance_date[]" placeholder="dd/mm/yyyy" value="{{ $firstAnnualResultStatusDetails['last_chance_date'] ? date('d/m/Y',strtotime($firstAnnualResultStatusDetails['last_chance_date'])) : ''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2 p-0" id="result_status_annual_part_one_pass_value_passing" style="display:none;">
                                            <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                                   placeholder="dd/mm/yyyy" value="{{ $firstAnnualResultStatusDetails['passing_date'] ? date('d/m/Y',strtotime($firstAnnualResultStatusDetails['passing_date'])) : ''}}">
                                        </div>
                                        <div class="col-md-1">
                                            <button id="removeResultStatusAnnualPartOneButton" type="button" class="btn btn-danger"
                                                    onclick="removeResultStatusAnnualPartOne(event)" @if ($firstAnnualResultStatusDetails == reset($data['first_annual_result_status_details'])) {{'disabled'}} @endif>-
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="form-row mt-2" id="result_status_annual_part_one_div">
                                    <div class="col-md-1 p-0">
                                        <select id="result_field_for_annual_part_one" name="result[]" class="form-control result_annual_part_one" onchange="resultChangedForAnnualPartOne(event)">
                                            <option value="" selected disabled>--select--</option>
                                            <option value="pass">Pass</option>
                                            <option value="fail">Fail</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8 form-row m-0" id="result_status_annual_part_one_pass_values_replacement" style="display: none"></div>
                                    <div class="col-md-8 form-row m-0" id="result_status_annual_part_one_pass_values" style="display: none">
                                        <div class="col-md-3 p-0">
                                            <select name="fail[]" class="form-control promotion_annual_part_one" onchange="setDisplayForAnnualPartTwo()">
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
                                    <div class="col-md-2 p-0" id="result_status_annual_part_one_pass_value_passing" style="display: none">
                                        <input type="text" class="form-control text-center datepicker" name="passing_date[]"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="col-md-1">
                                        <button id="removeResultStatusAnnualPartOneButton" type="button" class="btn btn-danger"
                                                onclick="removeResultStatusAnnualPartOne(event)" disabled>-
                                        </button>
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
                                    <label>Same Course:</label>
                                    <select  name="same_course" class="form-control">
                                        <option value="" selected disabled>--select--</option>
                                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                            <option value="{{$key}}" {{ $data ? $data['first_annual_details']['same_course'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Changed Course:</label>
                                    <select  name="changed_course" class="form-control">
                                        <option value="" selected disabled>--select--</option>
                                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                            <option value="{{$key}}" {{ $data ? $data['first_annual_details']['changed_course'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@section('script_page_15')
    <script>
        setDisplayForAnnualPartTwo();
        setResultHeaderDisplay();
        setFeeDepositStatus();
        function cloneResultStatusAnnualPartOne() {
            let clone = $('#result_status_annual_part_one_div').clone();
            clone.find('input:text').val('');
            $('#result_status_annual_part_one_parent').append(clone);
            let button = clone.find('#removeResultStatusAnnualPartOneButton').removeAttr('disabled');
            // let dropdown = $(clone.find('#result_field_for_annual_part_one').parent().siblings()[0]).hide();
            setResultHeaderDisplay();
            clone.find('.datepicker').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'dd/mm/yyyy'
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });
            setDisplayForAnnualPartTwo();
        }

        function removeResultStatusAnnualPartOne(event) {
            if(index_id) {
                let csrf_token = $('meta[name="csrf-token"]').attr('content');
                let request = $.ajax({
                    url: '/annual-part-one-delete',
                    method: "POST",
                    data: {
                        'index_id' : index_id,
                        'id' : $(event.target).parent().parent().find('#result_status_annual_part_one_delete_id').val()
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
            setDisplayForAnnualPartTwo();
        }

        function resultChangedForAnnualPartOne(event) {
            setResultHeaderDisplay();
            if($(event.target).val() == 'fail'){
                $(event.target).parent().parent().find('#result_status_annual_part_one_pass_values').fadeIn();
                $(event.target).parent().parent().find('#result_status_annual_part_one_pass_values_replacement').fadeOut();
                $(event.target).parent().parent().find('#result_status_annual_part_one_pass_value_passing').fadeOut();
            }
            else if($(event.target).val() == 'pass'){
                $(event.target).parent().parent().find('#result_status_annual_part_one_pass_values').fadeOut();
                $(event.target).parent().parent().find('#result_status_annual_part_one_pass_values_replacement').fadeIn();
                $(event.target).parent().parent().find('#result_status_annual_part_one_pass_value_passing').fadeIn();
            }
            else{
                $(event.target).parent().parent().find('#result_status_annual_part_one_pass_values').fadeOut();
                $(event.target).parent().parent().find('#result_status_annual_part_one_pass_values_replacement').fadeOut();
                $(event.target).parent().parent().find('#result_status_annual_part_one_pass_value_passing').fadeOut();
            }
            setDisplayForAnnualPartTwo();
        }

        function setResultHeaderDisplay() {
            $('.result_annual_part_one').each(function (index,value) {
                if($(value).val() == 'fail'){
                    $(value).parent().parent().find('#result_status_annual_part_one_pass_values').show();
                    $(value).parent().parent().find('#result_status_annual_part_one_pass_values_replacement').hide();
                    $(value).parent().parent().find('#result_status_annual_part_one_pass_value_passing').hide();
                }
                else if($(value).val() == 'pass'){
                    $(value).parent().parent().find('#result_status_annual_part_one_pass_values').hide();
                    $(value).parent().parent().find('#result_status_annual_part_one_pass_values_replacement').show();
                    $(value).parent().parent().find('#result_status_annual_part_one_pass_value_passing').show();
                }
                else{
                    $(value).parent().parent().find('#result_status_annual_part_one_pass_values').hide();
                    $(value).parent().parent().find('#result_status_annual_part_one_pass_values_replacement').hide();
                    $(value).parent().parent().find('#result_status_annual_part_one_pass_value_passing').hide();
                }
            });
        }

        function setDisplayForAnnualPartTwo(){
            let check = true;
            let term_array = {
                'cs': '#bise_academic_term',
                'ims': '#ims_academic_term',
                'af': '#af_academic_term',
                'vti': '#vti_scheme_of_study'
            };
            let parent = $('#cfe_wing_selection option:selected').val();
            if(parent == 'vti'){
                return;
            }
            let selectedTerm = $(term_array[parent]).val();
            if(selectedTerm == 'annual') {
                let allResults = $('.result_annual_part_one');
                let length = allResults.length;
                if ($(allResults[length - 1]).val() == 'pass') {
                    container_array.splice(11, 0, '#page_16');
                    api_url_array.splice(11, 0, '/annual-part-two');
                }else {
                    let allPromotions = $('.promotion_annual_part_one');
                    let lengthForPromotion = allPromotions.length;
                    if ($(allPromotions[lengthForPromotion - 1]).val() == 'promoted') {
                        container_array.splice(11, 0, '#page_16');
                        api_url_array.splice(11, 0, '/annual-part-two');
                    } else {
                        container_array.splice(11, container_array.length - 11);
                        api_url_array.splice(11, api_url_array.length - 11);
                        container_no = 10;
                    }
                }
            }
            setDisplayForButtons();
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

        function setFeeDepositStatus() {
            if($('#fee_deposit_status_page15').val() == 'yes'){
                $('#date_div_page15').fadeIn();
                $('#amount_div_page15').fadeIn();
            }
            else{
                $('#date_div_page15').fadeOut();
                $('#amount_div_page15').fadeOut();
            }
        }
    </script>
@endsection
