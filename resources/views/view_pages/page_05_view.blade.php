
        <div class="col-md-12 mt-4">
            <label>Death/Retirement</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-4">
                        <label><strong>Death Date of Worker:</strong></label>
                        <label>
                            {{$data && $data['factory_death_manager_details']['death_date_of_worker'] ? $data['factory_death_manager_details']['death_date_of_worker'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Death Grant Claimed:</strong></label>
                        <label>
                            {{$data && $data['factory_death_manager_details']['death_grant_claimed'] ? $data['factory_death_manager_details']['death_grant_claimed'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><strong>Retirement Date of Worker:</strong></label>
                        <label>
                            {{$data && $data['factory_death_manager_details']['retirement_date_of_worker'] ? $data['factory_death_manager_details']['retirement_date_of_worker'] : '--'}}
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <label for="">Factory Manager's Details</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-3">
                        <label><strong>Name:</strong></label>
                        <label>
                            {{$data && $data['factory_death_manager_details']['factory_manager_name'] ? $data['factory_death_manager_details']['factory_manager_name'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-3">
                        <label><strong>Designation:</strong></label>
                        <label>
                            {{$data && $data['factory_death_manager_details']['factory_manager_designation'] ? $data['factory_death_manager_details']['factory_manager_designation'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-3">
                        <label><strong>Contact No:</strong></label>
                        <label>
                            {{$data && $data['factory_death_manager_details']['factory_manager_contact_no'] ? $data['factory_death_manager_details']['factory_manager_contact_no'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-3">
                        <label><strong>Email:</strong></label>
                        <label>
                            {{$data && $data['factory_death_manager_details']['factory_manager_email'] ? $data['factory_death_manager_details']['factory_manager_email'] : '--'}}
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="mt-4">
                    <label><strong>PWWB Scholorship Form Attested by Factory Manager</strong></label>
                </div>
                <div class="card shadow p-3">
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label><strong>Sign:</strong></label>
                                <label>
                                    {{$data && $data['factory_death_manager_details']['form_attested_by_manager_sign'] ? $data['factory_death_manager_details']['form_attested_by_manager_sign'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-6">
                                <label><strong>Stamp:</strong></label>
                                <label>
                                    {{$data && $data['factory_death_manager_details']['form_attested_by_manager_stamp'] ? $data['factory_death_manager_details']['form_attested_by_manager_stamp'] : '--'}}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="mt-4">
                    <label>PWWB Scholarship Form Attested by DOL Dir. Labor</label>
                </div>
                <div class="card shadow p-3">
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group  col-md-6">
                                <label><strong>Sign:</strong></label>
                                <label>
                                    {{$data && $data['factory_death_manager_details']['form_attested_by_dol_sign'] ? $data['factory_death_manager_details']['form_attested_by_dol_sign'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-6">
                                <label><strong>Stamp:</strong></label>
                                <label>
                                    {{$data && $data['factory_death_manager_details']['form_attested_by_dol_stamp'] ? $data['factory_death_manager_details']['form_attested_by_dol_stamp'] : '--'}}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
