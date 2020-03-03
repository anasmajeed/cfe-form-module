
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
                            <label @if( !$data['document_attachment_details']['result_card_quantity']) class="text-danger" @endif><strong>Quantity Min(04):</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['result_card_quantity'] ? $data['document_attachment_details']['result_card_quantity'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group  col-md-4">
                            <label @if( !$data['document_attachment_details']['result_card_attested']) class="text-danger" @endif><strong>Attested by Gazetted Officer:</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['result_card_attested'] ? $data['document_attachment_details']['result_card_attested'] : '--'}}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row mt-4 ml-1">
                <div class="form-group  col-md-4">
                    <label @if( !$data['document_attachment_details']['noc_affiliated_body']) class="text-danger" @endif><strong>NOC From Previous Affiliated Body(Original):</strong></label>
                    <label>
                        {{$data && $data['document_attachment_details']['noc_affiliated_body'] ? $data['document_attachment_details']['noc_affiliated_body'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-4">
                    <label @if( !$data['document_attachment_details']['equivalence_certificate']) class="text-danger" @endif><strong>Equivalence Certificate(Original):</strong></label>
                    <label>
                        {{$data && $data['document_attachment_details']['equivalence_certificate'] ? $data['document_attachment_details']['equivalence_certificate'] : '--'}}
                    </label>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <label for="">Student's Character Certificate:</label>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body ">
                    <div class="form-row">
                        <div class="form-group  col-md-4">
                            <label @if( !$data['document_attachment_details']['certificate_quantity']) class="text-danger" @endif><strong>Quantity Min(04):</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['certificate_quantity'] ? $data['document_attachment_details']['certificate_quantity'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group  col-md-4">
                            <label @if( !$data['document_attachment_details']['character_certificate_attested']) class="text-danger" @endif><strong>Attested by Gazetted Officer:</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['character_certificate_attested'] ? $data['document_attachment_details']['character_certificate_attested'] : '--'}}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row mt-4 ml-1">
                <div class="form-group  col-md-4">
                    <label @if( !$data['document_attachment_details']['collage_card_quantity']) class="text-danger" @endif><strong>Student Collage Card Quantity(01):</strong></label>
                    <label>
                                {{$data && $data['document_attachment_details']['collage_card_quantity'] ? $data['document_attachment_details']['collage_card_quantity'] : '--'}}
                            </label>
                </div>
                <div class="form-group  col-md-4">
                    <label @if( !$data['document_attachment_details']['transport_card_quantity']) class="text-danger" @endif><strong>Transport Card Quantity(01):</strong></label>
                    <label>
                        {{$data && $data['document_attachment_details']['transport_card_quantity'] ? $data['document_attachment_details']['transport_card_quantity'] : '--'}}
                    </label>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <label for="">Admission Offer Letter:</label>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body ">
                    <div class="form-row">
                        <div class="form-group  col-md-4">
                            <label @if( !$data['document_attachment_details']['admission_letter_original']) class="text-danger" @endif><strong>Original:</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['admission_letter_original'] ? $data['document_attachment_details']['admission_letter_original'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group  col-md-3">
                            <label @if( !$data['document_attachment_details']['admission_letter_principal_sign']) class="text-danger" @endif><strong>Signed by Principal:</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['admission_letter_principal_sign'] ? $data['document_attachment_details']['admission_letter_principal_sign'] : '--'}}
                            </label>
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
                            <label @if( !$data['document_attachment_details']['bonafide_letter_original']) class="text-danger" @endif><strong>Original:</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['bonafide_letter_original'] ? $data['document_attachment_details']['bonafide_letter_original'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group  col-md-3">
                            <label @if( !$data['document_attachment_details']['bonafide_letter_principal_sign']) class="text-danger" @endif><strong>Signed by Principal:</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['bonafide_letter_principal_sign'] ? $data['document_attachment_details']['bonafide_letter_principal_sign'] : '--'}}
                            </label>
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
                            <label @if( !$data['document_attachment_details']['claim_letter_original']) class="text-danger" @endif><strong>Original:</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['claim_letter_original'] ? $data['document_attachment_details']['claim_letter_original'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group  col-md-3">
                            <label @if( !$data['document_attachment_details']['claim_letter_principal_sign']) class="text-danger" @endif><strong>Signed by Principal:</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['claim_letter_principal_sign'] ? $data['document_attachment_details']['claim_letter_principal_sign'] : '--'}}
                            </label>
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
                            <label @if( !$data['document_attachment_details']['affidavit_original']) class="text-danger" @endif><strong>Original:</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['affidavit_original'] ? $data['document_attachment_details']['affidavit_original'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group  col-md-3">
                            <label @if( !$data['document_attachment_details']['affidavit_worker_sign']) class="text-danger" @endif><strong>Signed by Worker:</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['affidavit_worker_sign'] ? $data['document_attachment_details']['affidavit_worker_sign'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group  col-md-3">
                            <label @if( !$data['document_attachment_details']['worker_thumb']) class="text-danger" @endif><strong>Thumb Impression of Worker:</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['worker_thumb'] ? $data['document_attachment_details']['worker_thumb'] : '--'}}
                            </label>
                        </div>
                        <div class="form-group  col-md-3">
                            <label @if( !$data['document_attachment_details']['oath_commission_attested']) class="text-danger" @endif><strong>Attestation by Oath Commissioner:</strong></label>
                            <label>
                                {{$data && $data['document_attachment_details']['oath_commission_attested'] ? $data['document_attachment_details']['oath_commission_attested'] : '--'}}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
