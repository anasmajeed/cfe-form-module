<div id="page_03" style="display:none;">
    <form id="page_03_form">
        <div class="col-md-12 mt-4">
            <label for="">Worker's Social Security Details</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-3">
                        <label>Social Security R-8 No. &amp;/or CNIC of worker:</label>
                        <input type="text" class="form-control text-center" name="social_security"
                               value="{{$data ? $data['worker_bank_security_details']['social_security'] : ''}}"
                               placeholder="Worker CNIC = Social Security">
                    </div>
                    <div class="form-group col-md-5">
                        <label>Worker's Social Security Card Attested by Factory Manager:</label>
                        <select name="social_security_attested" class="form-control">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                <option value="{{$key}}" {{ $data ? $data['worker_bank_security_details']['social_security_attested'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Social Security Local Office Name:</label>
                        <input type="text" class="form-control text-center" name="social_security_office_name"
                               value="{{$data ? $data['worker_bank_security_details']['social_security_office_name'] : ''}}"
                               placeholder="XXXXX">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <label for="">Worker's EOBI Details</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-6">
                        <label>EOBI Number:</label>
                        <input type="text" class="form-control text-center" name="eobi_number"
                               value="{{$data ? $data['worker_bank_security_details']['eobi_number'] : ''}}"
                               placeholder="XXXXX">
                    </div>
                    <div class="form-group col-md-6">
                        <label>EOBI Card Attested by Factory Manager:</label>
                        <select name="eobi_card_attested" class="form-control">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                <option value="{{$key}}" {{ $data ? $data['worker_bank_security_details']['eobi_card_attested'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <label for="">Worker's Bank Details</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-4">
                        <label>Name of Bank:</label>
                        <input type="text" class="form-control text-center" name="name_of_bank"
                               value="{{$data ? $data['worker_bank_security_details']['name_of_bank'] : ''}}"
                               placeholder="XXXXX">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Branch Address:</label>
                        <input type="text" class="form-control text-center" name="bank_branch_address"
                               value="{{$data ? $data['worker_bank_security_details']['bank_branch_address'] : ''}}"
                               placeholder="XXXXX">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Branch Code:</label>
                        <input type="text" class="form-control text-center" name="bank_branch_code"
                               value="{{$data ? $data['worker_bank_security_details']['bank_branch_code'] : ''}}"
                               placeholder="XXXXX">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group  col-md-4">
                        <label>IBAN:</label>
                        <input type="text" class="form-control text-center" name="bank_iban"
                               value="{{$data ? $data['worker_bank_security_details']['bank_iban'] : ''}}"
                               placeholder="PKXX XXXX XXXX XXXX XXXX XXXX">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <label for="">Postal Address of Worker</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Permanent:</label>
                        <input type="text" class="form-control text-center" name="permanent_address"
                               value="{{$data ? $data['worker_bank_security_details']['permanent_address'] : ''}}"
                               placeholder="XXXXX">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Temporary:</label>
                        <input type="text" class="form-control text-center" name="temporary_address"
                               value="{{$data ? $data['worker_bank_security_details']['temporary_address'] : ''}}"
                               placeholder="XXXXX">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
