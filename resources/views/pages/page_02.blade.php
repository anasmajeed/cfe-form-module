<div id="page_02" style="display: none">
    <form id="page_02_form">
        <div class="col-md-12">
            <label for="">Photograph of Student</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-4">
                        <label>Photograph Uploaded:</label>
                        <select name="photograph_uploaded" class="form-control text-center">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.general_yes_no') as $key => $general_yes_no)
                                <option value="{{$key}}" {{ $data ? $data['worker_personal_details']['photograph_uploaded'] == $key ? 'selected' : '' : ''}}>{{$general_yes_no}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Photograph Attested by Gazzeted Officer :</label>
                        <select name="photograph_attested" class="form-control">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.general_yes_no') as $key => $general_yes_no)
                                <option value="{{$key}}" {{ $data ? $data['worker_personal_details']['photograph_attested'] == $key ? 'selected' : '' : ''}}>{{$general_yes_no}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Photographs Quantity (Min. 6):</label>
                        <input type="number" min="6" class="form-control text-center" placeholder="INT"
                               name="photograph_quantity" value="{{$data ? $data['worker_personal_details']['photograph_quantity'] : ''}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-1">
            <label for="">Worker's Personal Details</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Name of Worker:</label>
                        <input onkeyup="alphabetsOnly(event)" type="text" class="form-control text-center" name="worker_name" placeholder="Enter Name"
                               value="{{$data ? $data['worker_personal_details']['worker_name'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Applicant's Name (Widow of Worker):</label>
                        <input onkeyup="alphabetsOnly(event)" type="text" class="form-control text-center" name="applicant_name" placeholder="Enter Name"
                               value="{{$data ? $data['worker_personal_details']['applicant_name'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Worker's CNIC Number.</label>
                        <input type="text" class="form-control text-center" name="worker_cnic"
                               placeholder="00000-00000000-0" value="{{$data ? $data['worker_personal_details']['worker_cnic'] : ''}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Worker's CNIC Attested By Gazzeted Officer:</label>
                        <select name="worker_cnic_attested" class="form-control">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.general_yes_no') as $key => $general_yes_no)
                                <option value="{{$key}}" {{ $data ? $data['worker_personal_details']['worker_cnic_attested'] == $key ? 'selected' : '' : ''}}>{{$general_yes_no}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Worker's Current Status:</label>
                        <select onchange="workerDeathStatus(event)" name="worker_current_status" class="form-control">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.workers_current_status') as $key => $workers_current_status)
                                <option value="{{$key}}" {{ $data ? $data['worker_personal_details']['worker_current_status'] == $key ? 'selected' : '' : ''}}>{{$workers_current_status}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Worker's Job Nature:</label>
                        <select name="worker_job_nature" class="form-control">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.workers_job_nature') as $key => $workers_job_nature)
                                <option value="{{$key}}" {{ $data ? $data['worker_personal_details']['worker_job_nature'] == $key ? 'selected' : '' : ''}}>{{$workers_job_nature}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-4">
                        <label>Factory Status:</label>
                        <select name="factory_status" class="form-control">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.factory_status') as $key => $factory_status)
                                <option value="{{$key}}" {{ $data ? $data['worker_personal_details']['factory_status'] == $key ? 'selected' : '' : ''}}>{{$factory_status}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Worker's Relationship with Student:</label>
                        <select name="worker_relationship" class="form-control">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.worker_relationship') as $key => $worker_relationship)
                                <option value="{{$key}}" {{ $data ? $data['worker_personal_details']['worker_relationship'] == $key ? 'selected' : '' : ''}}>{{$worker_relationship}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Date of Birth:</label>
                        <input type="text" class="form-control datepicker" name="date_of_birth" placeholder="dd/mm/yyyy"
                               value="{{$data && $data['worker_personal_details']['date_of_birth'] ? date('d/m/Y',strtotime($data['worker_personal_details']['date_of_birth'])) : '' }}">
                    </div>
                </div>
                <div class="card shadow mt-5 p-3 w-100">
                    <div class="card-body" id="worker_contact_number_parent">
                        <div class="form-row">
                            <div class="">
                                <label >Worker's Contact Numbers</label>
                            </div>
                            <div class="float-right ml-auto">
                                <button type="button" class="btn btn-primary float-right" onclick="cloneWorkerContactNumber()">+ Add Details</button>
                            </div>
                        </div>
                        <div class="form-row pt-3">
                            <div class="border border-bottom-0 col-md-1 text-center">
                                <label>Serial No.</label>
                            </div>
                            <div class="border border-bottom-0 col-md-2 text-center">
                                <label>Contact No</label>
                            </div>
                            <div class="border border-bottom-0 col-md-2 text-center">
                                <label>Worker's Relationship</label>
                            </div>
                        </div>
                        @if($data && isset($data['worker_contact_numbers']) && count($data['worker_contact_numbers']))
                            @foreach($data['worker_contact_numbers'] as $workerContactNumber)
                                <div class="form-row" id="worker_contact_number">
                                    <div class="border border-bottom-0 col-md-1 p-0">
                                        <input readonly id="worker_contact_number_serial_no" type="text" class="form-control rounded-0 text-center" name="serial_no[]" placeholder="1" value="{{$workerContactNumber['serial_no']}}">
                                    </div>
                                    <div class="border border-bottom-0 col-md-2 p-0">
                                        <input onkeyup="appendPhonePrefix(event)" type="text" class="form-control rounded-0" name="contact_no[]" placeholder="+92-000-0000000" value="{{$workerContactNumber['contact_no']}}">
                                    </div>
                                    <div class="border border-bottom-0 col-md-2 p-0">
                                        <select name="worker_contact_relationship[]" class="form-control rounded-0">
                                            <option value="" selected disabled>Select Relation</option>
                                            @foreach(\Config::get('constants.worker_relationship') as $key => $worker_relationship)
                                                <option value="{{$key}}" {{ $workerContactNumber ? $workerContactNumber['worker_contact_relationship'] == $key ? 'selected' : '' : ''}}>{{$worker_relationship}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <button id="removeContactNumberButton" type="button" class="btn btn-danger" onclick="removeContactNumber(event)"
                                        @if ($workerContactNumber == reset($data['worker_contact_numbers'])) {{'disabled'}} @endif>-</button>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="form-row" id="worker_contact_number">
                                <div class="border border-bottom-0 col-md-1 p-0">
                                    <input readonly id="worker_contact_number_serial_no" type="text" class="form-control rounded-0 text-center" name="serial_no[]" value="1">
                                </div>
                                <div class="border border-bottom-0 col-md-2 p-0">
                                    <input onkeyup="appendPhonePrefix(event)" class="form-control rounded-0" type="text" name="contact_no[]" placeholder="+92-000-0000000">
                                </div>
                                <div class="border border-bottom-0 col-md-2 p-0">
                                    <select id="districts" name="worker_contact_relationship[]" class="form-control rounded-0">
                                        <option value="" selected disabled>Select Relation</option>
                                        @foreach(\Config::get('constants.worker_relationship') as $key => $worker_relationship)
                                            <option value="{{$key}}">{{$worker_relationship}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button id="removeContactNumberButton" type="button" class="btn btn-danger" disabled onclick="removeContactNumber(event)">-</button>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <label for="">Worker's Designation As Per</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row ">
                    <div class="form-group col-md-4">
                        <label>PWWB Scholarship Form:</label>
                        <input onkeyup="alphabetsOnly(event)" type="text" class="form-control text-center" name="pwwb_scholarship_form"
                               placeholder="Enter Form" value="{{$data ? $data['worker_personal_details']['pwwb_scholarship_form'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Factory Card:</label>
                        <input onkeyup="alphabetsOnly(event)" type="text" class="form-control text-center" name="factory_card" placeholder="Enter Factory Card"
                               value="{{$data ? $data['worker_personal_details']['factory_card'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Service Letter:</label>
                        <input onkeyup="alphabetsOnly(event)" type="text" class="form-control text-center" name="service_letter" placeholder="Enter Service Letter"
                               value="{{$data ? $data['worker_personal_details']['service_letter'] : ''}}">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@section('script_page_2')
    <script>
        workerDeathStatusFirstTime();
        $('input[name="worker_cnic"]').each(function (index,value) {
            $(value).mask('00000-0000000-0');
        });

        $('input[name="contact_no[]"]').each(function (index,value) {
            $(value).mask('+92-000-0000000');
        });
        $('#contact_no_page5').each(function (index,value) {
            $(value).mask('+92-000-0000000');
        });

        function workerDeathStatusFirstTime(){
            let selected = $('select[name="worker_current_status"]').val();
            if(selected == 'died'){
                $('#current_status_card_page5').show();
                $('#death_date_page5_header').show();
            }
            else if(selected == 'retired'){
                $('#current_status_card_page5').show();
                $('#death_date_page5_header').show();
                $('#retirement_date_worker_page5').show();
                $('#death_grant_claimed_page5').hide();
                $('#death_date_page5').hide();
            }
            else {
                $('#current_status_card_page5').hide();
                $('#death_date_page5_header').hide();
            }
        }

        function appendPhonePrefix(event) {
            let value = $(event.target).val().replace('+92-','');
            $(event.target).val('');
            $(event.target).val('+92-'+value);
        }

        function workerDeathStatus(e){
            if($(e.target).val() == 'died'){
                $('#current_status_card_page5').show();
                $('#death_date_page5_header').show();
                $('#retirement_date_worker_page5').show();
                $('#death_grant_claimed_page5').show();
                $('#death_date_page5').show();
            }
            else if($(e.target).val() == 'retired'){
                $('#current_status_card_page5').show();
                $('#death_date_page5_header').show();
                $('#retirement_date_worker_page5').show();
                $('#death_grant_claimed_page5').hide();
                $('#death_date_page5').hide();
            }
            else{
                $('#current_status_card_page5').hide();
                $('#death_date_page5_header').hide();
            }
        }

        function cloneWorkerContactNumber(){
            let clone = $('#worker_contact_number').clone();

            clone.find('input:text').val('');
            $('#worker_contact_number_parent').append(clone);
            let button = clone.find('#removeContactNumberButton').removeAttr('disabled');
            clone.find('#worker_contact_number_serial_no').val($('#worker_contact_number input[name="serial_no[]"').length);
            $('input[name="contact_no[]"]').each(function (index,value) {
                $(value).mask('+92-000-0000000');
            });
        }

        function removeContactNumber(event) {
            if(index_id) {
                let csrf_token = $('meta[name="csrf-token"]').attr('content');
                let request = $.ajax({
                    url: '/worker-contact-number-delete',
                    method: "POST",
                    data: {
                        'index_id' : index_id,
                        'serial_no' : $(event.target).parent().parent().find('#worker_contact_number_serial_no').val()
                    },
                    headers:{
                        'X-CSRF-TOKEN':csrf_token
                    }
                });

                request.done(function (response) {
                });

                request.fail(function (jqXHR, textStatus) {
                    // alert("Request failed: " + textStatus);
                });
            }
            $(event.target).parent().parent().remove();
            $('#worker_contact_number input[name="serial_no[]"').each(function (index,value) {
                $(value).val(index+1);
            });
        }
    </script>
@endsection
