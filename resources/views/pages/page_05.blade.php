<div id="page_05" style="display:none;">
    <form id="page_05_form">
        <div class="col-md-12 mt-4">
            <label>Death/Retirement</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-4">
                        <label>Death Date of Worker:</label>
                        <input type="text" class="form-control text-center datepicker" name="death_date_of_worker"
                               value="{{$data ? $data['factory_death_manager_details']['death_date_of_worker'] : ''}}"
                               placeholder="dd/mm/yyyy">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Death Grant Claimed:</label>
                        <select name="death_grant_claimed" class="form-control">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                <option value="{{$key}}" {{ $data ? $data['factory_death_manager_details']['death_grant_claimed'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Retirement Date of Worker:</label>
                        <input type="text" class="form-control text-center datepicker" name="retirement_date_of_worker"
                               value="{{$data ? $data['factory_death_manager_details']['retirement_date_of_worker'] : ''}}"
                               placeholder="dd/mm/yyyy">
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
                        <label>Name:</label>
                        <input type="text" class="form-control text-center" name="factory_manager_name"
                               placeholder="XXXXX"
                               value="{{$data ? $data['factory_death_manager_details']['factory_manager_name'] : ''}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Designation:</label>
                        <input type="text" class="form-control text-center" name="factory_manager_designation"
                               placeholder="XXXXX"
                               value="{{$data ? $data['factory_death_manager_details']['factory_manager_designation'] : ''}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Contact No:</label>
                        <input type="text" class="form-control text-center" name="factory_manager_contact_no"
                               placeholder="+92-XXX-XXXXXXX"
                               value="{{$data ? $data['factory_death_manager_details']['factory_manager_contact_no'] : ''}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Email:</label>
                        <input type="email" class="form-control text-center" name="factory_manager_email"
                               value="{{$data ? $data['factory_death_manager_details']['factory_manager_email'] : ''}}"
                               placeholder="example@gmail.com">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="mt-4">
                    <label>PWWB Scholorship Form Attested by Factory Manager</label>
                </div>
                <div class="card shadow p-3">
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Sign:</label>
                                <select name="form_attested_by_manager_sign" class="form-control">
                                    <option value="" selected disabled>--select--</option>
                                    @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                        <option value="{{$key}}" {{ $data ? $data['factory_death_manager_details']['form_attested_by_manager_sign'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Stamp:</label>
                                <select name="form_attested_by_manager_stamp" class="form-control">
                                    <option value="" selected disabled>--select--</option>
                                    @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                        <option value="{{$key}}" {{ $data ? $data['factory_death_manager_details']['form_attested_by_manager_stamp'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                    @endforeach
                                </select>
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
                                <label>Sign:</label>
                                <select name="form_attested_by_dol_sign" class="form-control">
                                    <option value="" selected disabled>--select--</option>
                                    @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                        <option value="{{$key}}" {{ $data ? $data['factory_death_manager_details']['form_attested_by_dol_sign'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Stamp:</label>
                                <select name="form_attested_by_dol_stamp" class="form-control">
                                    <option value="" selected disabled>--select--</option>
                                    @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                        <option value="{{$key}}" {{ $data ? $data['factory_death_manager_details']['form_attested_by_dol_stamp'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
