<div id="page_13" style="display:none;">
    <form id="page_13_form">
    <div class="col-md-12 mt-2">
        <label for="">Documents Attached:</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="col-md-12 mt-2">
                <label for="">Previous Passed Examination Result Card/ Degree:</label>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body ">
                    <div class="form-row">
                        <div class="form-group  col-md-4">
                            <label>Quantity Min(04):</label>
                            <input type="number" class="form-control text-center" name="result_card_quantity" placeholder="XXXXX"
                            value="{{$data ? $data['document_attachment_details']['result_card_quantity'] : ''}}">
                        </div>
                        <div class="form-group  col-md-4">
                            <label>Attested by Gazetted Officer:</label>
                            <select  name="result_card_attested" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['result_card_attested'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row mt-4 ml-1">
                <div class="form-group  col-md-4">
                    <label>NOC From Previous Affiliated Body(Original):</label>
                    <select  name="noc_affiliated_body" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['noc_affiliated_body'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group  col-md-4">
                    <label>Equivalence Certificate(Original):</label>
                    <select  name="equivalence_certificate" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['equivalence_certificate'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <label for="">Student's Character Certificate:</label>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body ">
                    <div class="form-row">
                        <div class="form-group  col-md-4">
                            <label>Quantity Min(04):</label>
                            <input type="number" class="form-control text-center" name="certificate_quantity" placeholder="XXXXX"
                            value="{{$data ? $data['document_attachment_details']['certificate_quantity'] : ''}}">
                        </div>
                        <div class="form-group  col-md-4">
                            <label>Attested by Gazetted Officer:</label>
                            <select  name="character_certificate_attested" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['character_certificate_attested'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row mt-4 ml-1">
                <div class="form-group  col-md-4">
                    <label>Student College Card Quantity(01):</label>
                    <select  name="collage_card_quantity" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['collage_card_quantity'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group  col-md-4">
                    <label>Transport Card Quantity(01):</label>
                    <select  name="transport_card_quantity" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['transport_card_quantity'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <label for="">Admission Offer Letter:</label>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body ">
                    <div class="form-row">
                        <div class="form-group  col-md-4">
                            <label>Original:</label>
                            <select  name="admission_letter_original" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['admission_letter_original'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Signed by Principal:</label>
                            <select  name="admission_letter_principal_sign" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['admission_letter_principal_sign'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <label for="">Bonafide Letter:</label>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body ">
                    <div class="form-row">
                        <div class="form-group  col-md-4">
                            <label>Original:</label>
                            <select  name="bonafide_letter_original" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['bonafide_letter_original'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Signed by Principal:</label>
                            <select  name="bonafide_letter_principal_sign" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['bonafide_letter_principal_sign'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <label for="">Claim Letter:</label>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body ">
                    <div class="form-row">
                        <div class="form-group  col-md-4">
                            <label>Original:</label>
                            <select  name="claim_letter_original" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['claim_letter_original'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Signed by Principal:</label>
                            <select  name="claim_letter_principal_sign" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['claim_letter_principal_sign'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <label for="">Rs.50/ Affidavit:</label>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body ">
                    <div class="form-row">
                        <div class="form-group  col-md-3">
                            <label>Original:</label>
                            <select  name="affidavit_original" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['affidavit_original'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Signed by Worker:</label>
                            <select  name="affidavit_worker_sign" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['affidavit_worker_sign'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Thumb Impression of Worker:</label>
                            <select  name="worker_thumb" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['worker_thumb'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Attestation by Oath Commissioner:</label>
                            <select  name="oath_commission_attested" class="form-control">
                                <option value="" selected disabled>--select--</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                    <option value="{{$key}}" {{ $data ? $data['document_attachment_details']['oath_commission_attested'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
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
