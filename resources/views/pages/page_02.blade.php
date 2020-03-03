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
                <div class="form-row ">
                    <div class="form-group col-md-4">
                        <label>Contact No. 1:</label>
                        <input onkeyup="appendPhonePrefix(event)" type="text" class="form-control text-center" name="contact_no_1"
                               placeholder="+92-000-0000000" value="{{$data ? $data['worker_personal_details']['contact_no_1'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Contact No. 2:</label>
                        <input onkeyup="appendPhonePrefix(event)" type="text" class="form-control text-center" name="contact_no_2"
                               placeholder="+92-000-0000000" value="{{$data ? $data['worker_personal_details']['contact_no_2'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Contact No. 3:</label>
                        <input onkeyup="appendPhonePrefix(event)" type="text" class="form-control text-center" name="contact_no_3"
                               placeholder="+92-000-0000000" value="{{$data ? $data['worker_personal_details']['contact_no_3'] : ''}}">
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

        $('input[name="contact_no_1"]').each(function (index,value) {
            $(value).mask('+92-000-0000000');
        });
        $('input[name="contact_no_2"]').each(function (index,value) {
            $(value).mask('+92-000-0000000');
        });
        $('input[name="contact_no_3"]').each(function (index,value) {
            $(value).mask('+92-000-0000000');
        });
        $('#contact_no_page5').each(function (index,value) {
            $(value).mask('+92-000-0000000');
        });

        function workerDeathStatusFirstTime(){
            let selected = $('select[name="worker_current_status"]').val();
            if(selected == 'died'){
                $('#death_date_page5').show();
            }
            else
                $('#death_date_page5').hide();
        }

        function appendPhonePrefix(event) {
            let value = $(event.target).val().replace('+92-','');
            $(event.target).val('');
            $(event.target).val('+92-'+value);
        }

        function workerDeathStatus(e){
            if($(e.target).val() == 'died'){
                $('#death_date_page5').show();
            }
        }
    </script>
@endsection
