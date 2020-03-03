
        <div class="col-md-12 mt-4">
            <label>Personal Data of Student</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-6">
                        <label @if( !$data['student_personal_detail']['name']) class="text-danger" @endif><strong>Name:</strong></label>
                        <label>
                            {{$data && $data['student_personal_detail']['name'] ? $data['student_personal_detail']['name'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-6">
                        <label @if( !$data['student_personal_detail']['father_name']) class="text-danger" @endif><strong>Father's Name:</strong></label>
                        <label>
                            {{$data && $data['student_personal_detail']['father_name'] ? $data['student_personal_detail']['father_name'] : '--'}}
                        </label>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <label for="">Student's CNIC/B-Form No</label>
                </div>
                <div class="card shadow p-3 w-100">
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label @if( !$data['student_personal_detail']['cnic_no']) class="text-danger" @endif><strong>CNIC/B-Form No:</strong></label>
                                <label>
                                    {{$data && $data['student_personal_detail']['cnic_no'] ? $data['student_personal_detail']['cnic_no'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label @if( !$data['student_personal_detail']['quantity'] || $data['student_personal_detail']['quantity'] < 4 ) class="text-danger" @endif><strong>Quantity(min 04):</strong></label>
                                <label>
                                    {{$data && $data['student_personal_detail']['quantity'] ? $data['student_personal_detail']['quantity'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label @if( !$data['student_personal_detail']['student_cnic_attested']) class="text-danger" @endif><strong>Attested by Gazzeted Officer:</strong></label>
                                <label>
                                    {{$data && $data['student_personal_detail']['student_cnic_attested'] ? $data['student_personal_detail']['student_cnic_attested'] : '--'}}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-3 mt-4 w-100">
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group  col-md-3">
                                <label @if( !$data['student_personal_detail']['date_of_birth']) class="text-danger" @endif><strong>Date of Birth:</strong></label>
                                <label>
                                    {{$data && $data['student_personal_detail']['date_of_birth'] ? $data['student_personal_detail']['date_of_birth'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label @if( !$data['student_personal_detail']['present_address']) class="text-danger" @endif><strong>Present Address:</strong></label>
                                <label>
                                    {{$data && $data['student_personal_detail']['present_address'] ? $data['student_personal_detail']['present_address'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label @if( !$data['student_personal_detail']['marital_status']) class="text-danger" @endif><strong>Marital Status:</strong></label>
                                <label>
                                    {{$data && $data['student_personal_detail']['marital_status'] ? $data['student_personal_detail']['marital_status'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label @if( !$data['student_personal_detail']['contact_no_1']) class="text-danger" @endif><strong>Contact No 1:</strong></label>
                                <label>
                                    {{$data && $data['student_personal_detail']['contact_no_1'] ? $data['student_personal_detail']['contact_no_1'] : '--'}}
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md-3">
                                <label @if( !$data['student_personal_detail']['contact_no_2']) class="text-danger" @endif><strong>Contact No 2:</strong></label>
                                <label>
                                    {{$data && $data['student_personal_detail']['contact_no_2'] ? $data['student_personal_detail']['contact_no_2'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label @if( !$data['student_personal_detail']['postal_address']) class="text-danger" @endif><strong>Postal Address:</strong></label>
                                <label>
                                    {{$data && $data['student_personal_detail']['postal_address'] ? $data['student_personal_detail']['postal_address'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label @if( !$data['student_personal_detail']['email']) class="text-danger" @endif><strong>Email:</strong></label>
                                <label>
                                    {{$data && $data['student_personal_detail']['email'] ? $data['student_personal_detail']['email'] : '--'}}
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label @if( !$data['student_personal_detail']['signature']) class="text-danger" @endif><strong>Signature on page2(once)& 3(twice):</strong></label>
                                <label>
                                    {{$data && $data['student_personal_detail']['signature'] ? $data['student_personal_detail']['signature'] : '--'}}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
