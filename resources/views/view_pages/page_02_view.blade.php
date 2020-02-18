
        <div class="col-md-12">
            <label for="">Photograph and Student</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-4">
                        <label><strong>Photograph Uploaded:</strong></label>
                        <label>
                            {{$data && $data['worker_personal_details']['photograph_uploaded'] ? $data['worker_personal_details']['photograph_uploaded'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Photograph Attested by Gazzeted Officer :</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['photograph_attested'] ? $data['worker_personal_details']['photograph_attested'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Photographs Quantity (Min. 6):</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['photograph_quantity'] ? $data['worker_personal_details']['photograph_quantity'] : '--'}}
                        </label>
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
                        <label><strong>Name of Worker:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['worker_name'] ? $data['worker_personal_details']['worker_name'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Applicant's Name(Widow of Worker):</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['applicant_name'] ? $data['worker_personal_details']['applicant_name'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Worker's CNIC Number.</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['worker_cnic'] ? $data['worker_personal_details']['worker_cnic'] : '--'}}
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label><strong>Worker's CNIC Attested By Gazzeted Officer:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['worker_cnic_attested'] ? $data['worker_personal_details']['worker_cnic_attested'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Worker's Current Status:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['worker_current_status'] ? $data['worker_personal_details']['worker_current_status'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Worker's Job Nature:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['worker_job_nature'] ? $data['worker_personal_details']['worker_job_nature'] : '--'}}
                        </label>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-4">
                        <label><strong>Factory Status:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['factory_status'] ? $data['worker_personal_details']['factory_status'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Worker's Relationship with Students:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['worker_relationship'] ? $data['worker_personal_details']['worker_relationship'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Date of Birth:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['date_of_birth'] ? $data['worker_personal_details']['date_of_birth'] : '--'}}
                        </label>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-4">
                        <label><strong>Contact No. 1:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['contact_no_1'] ? $data['worker_personal_details']['contact_no_1'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Contact No. 2:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['contact_no_2'] ? $data['worker_personal_details']['contact_no_2'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Contact No. 3:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['contact_no_3'] ? $data['worker_personal_details']['contact_no_3'] : '--'}}
                        </label>
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
                        <label><strong>PWWB Scholorship Form:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['pwwb_scholarship_form'] ? $data['worker_personal_details']['pwwb_scholarship_form'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Factory Card:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['factory_card'] ? $data['worker_personal_details']['factory_card'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Service Letter:</strong></label>
                        <label >
                            {{$data && $data['worker_personal_details']['service_letter'] ? $data['worker_personal_details']['service_letter'] : '--'}}
                        </label>
                    </div>
                </div>
            </div>
        </div>
