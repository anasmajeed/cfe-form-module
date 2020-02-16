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
                            <input type="text" class="form-control text-center" name="result_card_quantity" placeholder="XXXXX"
                            value="{{$data ? $data['document_attachment_details']['result_card_quantity'] : ''}}">
                        </div>
                        <div class="form-group  col-md-4">
                            <label>Attested by Gazetted Officer:</label>
                            <select  name="result_card_attested" class="form-control">
                                <option value="yes" {{ $data ? $data['document_attachment_details']['result_card_attested'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data ? $data['document_attachment_details']['result_card_attested'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row mt-4 ml-1">
                <div class="form-group  col-md-4">
                    <label>NOC From Previous Affiliated Body(Original):</label>
                    <select  name="noc_affiliated_body" class="form-control">
                        <option value="yes" {{ $data ? $data['document_attachment_details']['noc_affiliated_body'] == 'yes' ? 'selected' : '' : ''}}>
                        Yes</option>
                        <option value="no" {{ $data ? $data['document_attachment_details']['noc_affiliated_body'] == 'no' ? 'selected' : '' : ''}}>
                        No</option>
                    </select>
                </div>
                <div class="form-group  col-md-4">
                    <label>Equivalence Certificate(Original):</label>
                    <select  name="equivalence_certificate" class="form-control">
                        <option value="yes" {{ $data ? $data['document_attachment_details']['equivalence_certificate'] == 'yes' ? 'selected' : '' : ''}}>
                        Yes</option>
                        <option value="no" {{ $data ? $data['document_attachment_details']['equivalence_certificate'] == 'no' ? 'selected' : '' : ''}}>
                        No</option>
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
                            <input type="text" class="form-control text-center" name="certificate_quantity" placeholder="XXXXX"
                            value="{{$data ? $data['document_attachment_details']['certificate_quantity'] : ''}}">
                        </div>
                        <div class="form-group  col-md-4">
                            <label>Attested by Gazetted Officer:</label>
                            <select  name="character_certificate_attested" class="form-control">
                                <option value="yes" {{ $data ? $data['document_attachment_details']['character_certificate_attested'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data ? $data['document_attachment_details']['character_certificate_attested'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row mt-4 ml-1">
                <div class="form-group  col-md-4">
                    <label>Student Collage Card Quantity(01):</label>
                    <select  name="collage_card_quantity" class="form-control">
                        <option value="yes" {{ $data ? $data['document_attachment_details']['collage_card_quantity'] == 'yes' ? 'selected' : '' : ''}}>
                        Yes</option>
                        <option value="no" {{ $data ? $data['document_attachment_details']['collage_card_quantity'] == 'no' ? 'selected' : '' : ''}}>
                        No</option>
                    </select>
                </div>
                <div class="form-group  col-md-4">
                    <label>Transport Card Quantity(01):</label>
                    <select  name="transport_card_quantity" class="form-control">
                        <option value="yes" {{ $data ? $data['document_attachment_details']['transport_card_quantity'] == 'yes' ? 'selected' : '' : ''}}>
                        Yes</option>
                        <option value="no" {{ $data ? $data['document_attachment_details']['transport_card_quantity'] == 'no' ? 'selected' : '' : ''}}>
                        No</option>
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
                                <option value="yes" {{ $data ? $data['document_attachment_details']['admission_letter_original'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data ? $data['document_attachment_details']['admission_letter_original'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Signed by Principal:</label>
                            <select  name="admission_letter_principal_sign" class="form-control">
                                <option value="yes" {{ $data ? $data['document_attachment_details']['admission_letter_principal_sign'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data ? $data['document_attachment_details']['admission_letter_principal_sign'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
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
                                <option value="yes" {{ $data ? $data['document_attachment_details']['bonafide_letter_original'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data ? $data['document_attachment_details']['bonafide_letter_original'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Signed by Principal:</label>
                            <select  name="bonafide_letter_principal_sign" class="form-control">
                                <option value="yes" {{ $data ? $data['document_attachment_details']['bonafide_letter_principal_sign'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data ? $data['document_attachment_details']['bonafide_letter_principal_sign'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
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
                                <option value="yes" {{ $data ? $data['document_attachment_details']['claim_letter_original'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data ? $data['document_attachment_details']['claim_letter_original'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Signed by Principal:</label>
                            <select  name="claim_letter_principal_sign" class="form-control">
                                <option value="yes" {{ $data ? $data['document_attachment_details']['claim_letter_principal_sign'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data ? $data['document_attachment_details']['claim_letter_principal_sign'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
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
                                <option value="yes" {{ $data ? $data['document_attachment_details']['affidavit_original'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data ? $data['document_attachment_details']['affidavit_original'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Signed by Worker:</label>
                            <select  name="affidavit_worker_sign" class="form-control">
                                <option value="yes" {{ $data ? $data['document_attachment_details']['affidavit_worker_sign'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data ? $data['document_attachment_details']['affidavit_worker_sign'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Thumb Impression of Worker:</label>
                            <select  name="worker_thumb" class="form-control">
                                <option value="yes" {{ $data ? $data['document_attachment_details']['worker_thumb'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data ? $data['document_attachment_details']['worker_thumb'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Attestation by Oath Commissioner:</label>
                            <select  name="oath_commission_attested" class="form-control">
                                <option value="yes" {{ $data ? $data['document_attachment_details']['oath_commission_attested'] == 'yes' ? 'selected' : '' : ''}}>
                                Yes</option>
                                <option value="no" {{ $data ? $data['document_attachment_details']['oath_commission_attested'] == 'no' ? 'selected' : '' : ''}}>
                                No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
