
        <div class="col-md-12 mt-4">
            <label>Factory Details</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-3">
                        <label @if( !$data['factory_details']['factory_name']) class="text-danger" @endif><strong>Name of Factory/Establishment:</strong></label>
                        <label>
                            {{$data && $data['factory_details']['factory_name'] ? $data['factory_details']['factory_name'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-5">
                        <label @if( !$data['factory_details']['factory_address']) class="text-danger" @endif><strong>Address of Factory/Establishment:</strong></label>
                        <label>
                            {{$data && $data['factory_details']['factory_address'] ? $data['factory_details']['factory_address'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label @if( !$data['factory_details']['factory_registration_number']) class="text-danger" @endif><strong>Factory/ Establishment Registration No:</strong></label>
                        <label>
                            {{$data && $data['factory_details']['factory_registration_number'] ? $data['factory_details']['factory_registration_number'] : '--'}}
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group  col-md-3">
                        <label @if( !$data['factory_details']['factory_registration_date']) class="text-danger" @endif><strong>Date of Factory/Establishment Registration:</strong></label>
                        <label>
                            {{$data && $data['factory_details']['factory_registration_date'] ? $data['factory_details']['factory_registration_date'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label @if( !$data['factory_details']['factory_registration_certificate_attested_by_manager']) class="text-danger" @endif><strong>Factory Registration Certificate Attested by Factory Manager:</strong></label>
                        <label>
                            {{$data && $data['factory_details']['factory_registration_certificate_attested_by_manager'] ? $data['factory_details']['factory_registration_certificate_attested_by_manager'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-5">
                        <label @if( !$data['factory_details']['factory_registration_certificate_attested_by_officer']) class="text-danger" @endif><strong>Factory Registration Certificate Attested by District Officer Labor(DOL):</strong></label>
                        <label>
                            {{$data && $data['factory_details']['factory_registration_certificate_attested_by_officer'] ? $data['factory_details']['factory_registration_certificate_attested_by_officer'] : '--'}}
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group  col-md-3">
                        <label @if( !$data['factory_details']['factory_registration_certificate_attested_by_director']) class="text-danger" @endif><strong>Factory Registration Certificate Attested by Dir. Labor:</strong></label>
                        <label>
                            {{$data && $data['factory_details']['factory_registration_certificate_attested_by_director'] ? $data['factory_details']['factory_registration_certificate_attested_by_director'] : '--'}}
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <label for="">Signatures</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-6">
                        <label @if( !$data['factory_details']['signature_of_worker']) class="text-danger" @endif><strong>Signature of worker on pg 1 & 3 of PWWB form:</strong></label>
                        <label>
                            {{$data && $data['factory_details']['signature_of_worker'] ? $data['factory_details']['signature_of_worker'] : '--'}}
                        </label>
                    </div>
                    <div class="form-group col-md-6">
                        <label @if( !$data['factory_details']['date_of_submission']) class="text-danger" @endif><strong>Date of form Submission:</strong></label>
                        <label>
                            {{$data && $data['factory_details']['date_of_submission'] ? $data['factory_details']['date_of_submission'] : '--'}}
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <label for="">Service Details</label>
        </div>
        <div class="card shadow mt-2 p-3 w-100">
            <div class="card-body" id="service_detail_parent">
                <div class="form-row">
                    <div>
                        <label>Factory Details (Eligible)</label>
                    </div>
                </div>
                <div class="form-row pt-4">
                    <div class="border col-md-1 text-center">
                        <label ><strong>Serial.</strong></label>
                    </div>
                    <div class="border col-md-1 text-center">
                        <label ><strong>Name</strong></label>
                    </div>
                    <div class="border col-md-1 text-center">
                        <label ><strong>Appointment Date</strong></label>
                    </div>
                    <div class="border col-md-1 text-center">
                        <label ><strong>Job Leaving Date</strong></label>
                    </div>
                    <div class="border col-md-1 text-center">
                        <label ><strong>Total Period</strong></label>
                    </div>
                    <div class="border col-md-2 text-center">
                        <label ><strong>Completion Date of 3 years Service Period</strong></label>
                    </div>
                    <div class="border col-md-1 text-center">
                        <label ><strong>Service Period Completion Status</strong></label>
                    </div>
                    <div class="border col-md-1 text-center">
                        <label ><strong>Attested by Factory Manager</strong></label>
                    </div>
                    <div class="border col-md-1 text-center">
                        <label ><strong>Attestation by DOL</strong></label>
                    </div>
                    <div class="border col-md-1 text-center">
                        <label ><strong>Attestation by Dir. Labor</strong></label>
                    </div>
                </div>
                @if($data['service_details'])
                    @foreach($data['service_details'] as $service_detail)
                        <div class="form-row" id="service_detail">
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$service_detail['serial_no'] ? $service_detail['serial_no'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$service_detail['name'] ? $service_detail['name'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$service_detail['appointment_date'] ? $service_detail['appointment_date'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$service_detail['job_leaving_date'] ? $service_detail['job_leaving_date'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$service_detail['total_period'] ? $service_detail['total_period'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-2 p-0">
                                <label>
                                    {{$service_detail['completion_date'] ? $service_detail['completion_date'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$service_detail['service_completion_status'] ? $service_detail['service_completion_status'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$service_detail['attested_by_factory_manager'] ? $service_detail['attested_by_factory_manager'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$service_detail['attested_by_dol'] ? $service_detail['attested_by_dol'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$service_detail['attested_by_director'] ? $service_detail['attested_by_director'] : '--'}}
                                </label>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="form-row">
                    <div class="float-right ml-auto">
                        <label class="float-right" id="accumulated_years">Accumulated Service Period : 0 Years</label>
                    </div>
                </div>
            </div>
        </div>