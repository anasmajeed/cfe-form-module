<div id="page_02" style="display: none">
    <form id="page_02_form">
        <div class="col-md-12">
            <label for="">Photograph and Student</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-4">
                        <label>Photograph Uploaded:</label>
                        <select name="photograph_uploaded" class="form-control text-center">
                            <option
                                value="yes" {{ $data ? $data['worker_personal_details']['photograph_uploaded'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes
                            </option>
                            <option value="no" {{ $data ? $data['worker_personal_details']['photograph_uploaded'] == 'no' ? 'selected' : '' : ''}}>
                                No
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Photograph Attested by Gazzeted Officer :</label>
                        <select name="photograph_attested" class="form-control">
                            <option
                                value="yes" {{ $data ? $data['worker_personal_details']['photograph_attested'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes
                            </option>
                            <option value="no" {{ $data ? $data['worker_personal_details']['photograph_attested'] == 'no' ? 'selected' : '' : ''}}>
                                No
                            </option>
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
                        <input type="text" class="form-control text-center" name="worker_name" placeholder="XXXXX"
                               value="{{$data ? $data['worker_personal_details']['worker_name'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Applicant's Name(Widow of Worker):</label>
                        <input type="text" class="form-control text-center" name="applicant_name" placeholder="XXXXX"
                               value="{{$data ? $data['worker_personal_details']['applicant_name'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Worker's CNIC Number.</label>
                        <input type="text" class="form-control text-center" name="worker_cnic"
                               placeholder="XXXXX-XXXXXXXX-X" value="{{$data ? $data['worker_personal_details']['worker_cnic'] : ''}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Worker's CNIC Attested By Gazzeted Officer:</label>
                        <select name="worker_cnic_attested" class="form-control">
                            <option
                                value="yes" {{ $data ? $data['worker_personal_details']['worker_cnic_attested'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes
                            </option>
                            <option
                                value="no" {{ $data ? $data['worker_personal_details']['worker_cnic_attested'] == 'no' ? 'selected' : '' : ''}}>No
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Worker's Current Status:</label>
                        <select name="worker_current_status" class="form-control">
                            <option value="" selected disabled>Select Status</option>
                            @foreach(\Config::get('constants.workers_current_status') as $key => $workers_current_status)
                                <option value="{{$key}}" {{ $data ? $data['worker_personal_details']['worker_current_status'] == $key ? 'selected' : '' : ''}}>{{$workers_current_status}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Worker's Job Nature:</label>
                        <select name="worker_job_nature" class="form-control">
                            <option value="" selected disabled>Select</option>
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
                            <option
                                value="active" {{ $data ? $data['worker_personal_details']['factory_status'] == 'active' ? 'selected' : '' : ''}}>
                                Active
                            </option>
                            <option
                                value="closed" {{ $data ? $data['worker_personal_details']['factory_status'] == 'closed' ? 'selected' : '' : ''}}>
                                Closed
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Worker's Relationship with Students:</label>
                        <select name="worker_relationship" class="form-control">
                            <option
                                value="self" {{ $data ? $data['worker_personal_details']['worker_relationship'] == 'self' ? 'selected' : '' : ''}}>
                                Self
                            </option>
                            <option
                                value="mother" {{ $data ? $data['worker_personal_details']['worker_relationship'] == 'mother' ? 'selected' : '' : ''}}>
                                Mother
                            </option>
                            <option
                                value="father" {{ $data ? $data['worker_personal_details']['worker_relationship'] == 'father' ? 'selected' : '' : ''}}>
                                Father
                            </option>
                            <option
                                value="sibling" {{ $data ? $data['worker_personal_details']['worker_relationship'] == 'sibling' ? 'selected' : '' : ''}}>
                                Sibling
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Date of Birth:</label>
                        <input type="text" class="form-control datepicker" name="date_of_birth" placeholder="dd/mm/yyyy"
                               value="{{$data ? $data['worker_personal_details']['date_of_birth'] : ''}}">
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-4">
                        <label>Contact No. 1:</label>
                        <input type="text" class="form-control text-center" name="contact_no_1"
                               placeholder="+92-XXX-XXXXXXX" value="{{$data ? $data['worker_personal_details']['contact_no_1'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Contact No. 2:</label>
                        <input type="text" class="form-control text-center" name="contact_no_2"
                               placeholder="+92-XXX-XXXXXXX" value="{{$data ? $data['worker_personal_details']['contact_no_2'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Contact No. 3:</label>
                        <input type="text" class="form-control text-center" name="contact_no_3"
                               placeholder="+92-XXX-XXXXXXX" value="{{$data ? $data['worker_personal_details']['contact_no_3'] : ''}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <label for="">Worker's Designation os per</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row ">
                    <div class="form-group col-md-4">
                        <label>PWWB Scholorship Form:</label>
                        <input type="text" class="form-control text-center" name="pwwb_scholarship_form"
                               placeholder="XXXXX" value="{{$data ? $data['worker_personal_details']['pwwb_scholarship_form'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Factory Card:</label>
                        <input type="text" class="form-control text-center" name="factory_card" placeholder="XXXXX"
                               value="{{$data ? $data['worker_personal_details']['factory_card'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Service Letter:</label>
                        <input type="text" class="form-control text-center" name="service_letter" placeholder="XXXXX"
                               value="{{$data ? $data['worker_personal_details']['service_letter'] : ''}}">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
