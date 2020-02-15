<div id="page_04" style="display:none;">
    <form id="page_04_form">
        <div class="col-md-12 mt-4">
            <label>Factory Details</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-3">
                        <label>Name of Factory/Establishment:</label>
                        <input type="text" class="form-control text-center" placeholder="XXXXX" name="factory_name" value="{{$data ? $data['factory_details']['factory_name'] : ''}}">
                    </div>
                    <div class="form-group col-md-5">
                        <label>Address of Factory/Establishment:</label>
                        <input type="text" class="form-control text-center" placeholder="XXXXX" name="factory_address" value="{{$data ? $data['factory_details']['factory_address'] : ''}}">

                    </div>
                    <div class="form-group col-md-4">
                        <label>Factory/ Establishment Registration No:</label>
                        <input type="text" class="form-control text-center" id="" placeholder="XXXXX"
                               name="factory_registration_number" value="{{$data ? $data['factory_details']['factory_registration_number'] : ''}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group  col-md-3">
                        <label>Date of Factory/Establishment Registration:</label>
                        <input type="text" class="form-control text-center datepicker" name="factory_registration_date"
                               placeholder="dd/mm/yyyy" value="{{$data ? $data['factory_details']['factory_registration_date'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Factory Registration Certificate Attested by Factory Manager:</label>
                        <select name="factory_registration_certificate_attested_by_manager" class="form-control">
                            <option value="yes" {{ $data ? $data['factory_details']['factory_registration_certificate_attested_by_manager'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                            <option value="no" {{ $data ? $data['factory_details']['factory_registration_certificate_attested_by_manager'] == 'no' ? 'selected' : '' : ''}}>No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Factory Registration Certificate Attested by District Officer Labor(DOL):</label>
                        <select name="factory_registration_certificate_attested_by_officer" class="form-control">
                            <option value="yes" {{ $data ? $data['factory_details']['factory_registration_certificate_attested_by_officer'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                            <option value="no" {{ $data ? $data['factory_details']['factory_registration_certificate_attested_by_officer'] == 'no' ? 'selected' : '' : ''}}>No</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group  col-md-3">
                        <label>Factory Registration Certificate Attested by Dir. Labor:</label>
                        <select name="factory_registration_certificate_attested_by_director" class="form-control">
                            <option value="yes" {{ $data ? $data['factory_details']['factory_registration_certificate_attested_by_director'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                            <option value="no" {{ $data ? $data['factory_details']['factory_registration_certificate_attested_by_director'] == 'no' ? 'selected' : '' : ''}}>No</option>
                        </select>
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
                        <label>Signature of worker on pg 1 & 3 of PWWB form:</label>
                        <select name="signature_of_worker" class="form-control">
                            <option value="yes" {{ $data ? $data['factory_details']['signature_of_worker'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                            <option value="no" {{ $data ? $data['factory_details']['signature_of_worker'] == 'no' ? 'selected' : '' : ''}}>No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Date of form Submission:</label>
                        <input type="text" class="form-control text-center datepicker" name="date_of_submission"
                               placeholder="dd/mm/yyyy" value="{{$data ? $data['factory_details']['date_of_submission'] : ''}}">
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
                    <div class="float-right ml-auto">
                        <button type="button" class="btn btn-primary float-right" onclick="cloneServiceDetails()">
                            + Add Details
                        </button>
                    </div>
                </div>
                <div class="form-row pt-4">
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Serial.</label>
                    </div>
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Name</label>
                    </div>
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Appointment Date</label>
                    </div>
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Job Leaving Date</label>
                    </div>
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Total Period</label>
                    </div>
                    <div class="border border-bottom-0 col-md-2 text-center">
                        <label>Completion Date of 3 years Service Period</label>
                    </div>
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Service Period Completion Status</label>
                    </div>
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Attested by Factory Manager</label>
                    </div>
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Attestation by DOL</label>
                    </div>
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Attestation by Dir. Labor</label>
                    </div>
                </div>
                @if($data['service_details'])
                    @foreach($data['service_details'] as $service_details)
                <div class="form-row accumulatedRows" id="service_detail">
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <input type="text" id="service_serial_no" name="serial_no[]" class="form-control rounded-0 "
                               placeholder="01" value="{{$service_details['serial_no']}}">
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <input class="form-control rounded-0" name="name[]" type="text" placeholder="XXXXX" value="{{$service_details['name']}}">
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <input type="text" class="form-control rounded-0 datepickerAccumulated" name="appointment_date[]"
                               placeholder="dd/mm/yyyy" value="{{$service_details['appointment_date']}}">
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <input type="text" class="form-control rounded-0 datepickerAccumulated" name="job_leaving_date[]"
                               placeholder="dd/mm/yyyy" value="{{$service_details['job_leaving_date']}}">
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <input type="text" class="form-control rounded-0" name="total_period[]" placeholder="XXXXX" value="{{$service_details['total_period']}}">
                    </div>
                    <div class="border border-bottom-0 col-md-2 p-0">
                        <input type="text" class="form-control rounded-0 datepicker" name="completion_date[]" value="{{$service_details['completion_date']}}"
                               placeholder="dd/mm/yyyy">
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <select name="service_completion_status[]" class="form-control rounded-0">
                            <option value="yes" {{ $service_details ? $service_details['service_completion_status'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                            <option value="no" {{ $service_details ? $service_details['service_completion_status'] == 'no' ? 'selected' : '' : ''}}>No</option>
                        </select>
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <select id="" name="attested_by_factory_manager[]" class="form-control rounded-0">
                            <option value="yes" {{ $service_details ? $service_details['attested_by_factory_manager'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                            <option value="no" {{ $service_details ? $service_details['attested_by_factory_manager'] == 'no' ? 'selected' : '' : ''}}>No</option>
                        </select>
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <select id="" name="attested_by_dol[]" class="form-control rounded-0">
                            <option value="yes" {{ $service_details ? $service_details['attested_by_dol'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                            <option value="no" {{ $service_details ? $service_details['attested_by_dol'] == 'no' ? 'selected' : '' : ''}}>No</option>
                        </select>
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <select id="" name="attested_by_director[]" class="form-control rounded-0">
                            <option value="yes" {{ $service_details ? $service_details['attested_by_director'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                            <option value="no" {{ $service_details ? $service_details['attested_by_director'] == 'no' ? 'selected' : '' : ''}}>No</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <button id="removeServiceDetailButton" type="button" class="btn btn-danger"
                                onclick="removeServiceDetail(event)"
                        @if ($service_details == reset($data['service_details'])) {{'disabled'}} @endif><strong>-</strong></button>
                    </div>
                </div>
                    @endforeach
                @else
                    <div class="form-row accumulatedRows" id="service_detail">
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input type="text" id="service_serial_no" name="serial_no[]" class="form-control rounded-0 "
                                   placeholder="01">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input class="form-control rounded-0" name="name[]" type="text" placeholder="XXXXX">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input type="text" class="form-control rounded-0 datepicker" name="appointment_date[]"
                                   placeholder="dd/mm/yyyy">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input type="text" class="form-control rounded-0 datepicker" name="job_leaving_date[]"
                                   placeholder="dd/mm/yyyy">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input type="text" class="form-control rounded-0" name="total_period[]" placeholder="XXXXX">
                        </div>
                        <div class="border border-bottom-0 col-md-2 p-0">
                            <input type="text" class="form-control rounded-0 datepicker" name="completion_date[]"
                                   placeholder="dd/mm/yyyy">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <select name="service_completion_status[]" class="form-control rounded-0">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <select id="" name="attested_by_factory_manager[]" class="form-control rounded-0">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <select id="" name="attested_by_dol[]" class="form-control rounded-0">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <select id="" name="attested_by_director[]" class="form-control rounded-0">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <button id="removeServiceDetailButton" type="button" class="btn btn-danger"
                                    onclick="removeServiceDetail(event)" disabled><strong>-</strong></button>
                        </div>
                    </div>
                    @endif
            </div>
            <div class="form-row">
                <div class="float-right ml-auto">
                    <label class="float-right" id="accumulated_years">Accumulated Service Period : 0 Years</label>
                </div>
            </div>
        </div>
    </form>
</div>
@section('script_page_4')
    <script>
        setAccumulatedYears();
        $('.datepickerAccumulated').each(function (index, pick) {
            let picker = $(pick).datepicker({
                format: 'yyyy-mm-dd'
            }).on('changeDate', function (ev) {
                setAccumulatedYears();
                picker.hide();
            }).data('datepicker');
        });

        function cloneServiceDetails() {
            let clone = $('#service_detail').clone();
            clone.find('.datepicker').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'yyyy-mm-dd'
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });

            clone.find('.datepickerAccumulated').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'yyyy-mm-dd'
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });

            $('#service_detail_parent').append(clone);
            let button = clone.find('#removeServiceDetailButton').removeAttr('disabled');
        }

        function removeServiceDetail(event) {
            if(index_id) {
                let csrf_token = $('meta[name="csrf-token"]').attr('content');
                let request = $.ajax({
                    url: '/service-detail-delete',
                    method: "POST",
                    data: {
                        'index_id' : index_id,
                        'serial_no' : $(event.target).parent().parent().find('#service_serial_no').val()
                    },
                    headers:{
                        'X-CSRF-TOKEN':csrf_token
                    }
                });

                request.done(function (response) {
                });

                request.fail(function (jqXHR, textStatus) {
                    alert("Request failed: " + textStatus);
                });
            }
            $(event.target).parent().parent().remove();
        }

        function setAccumulatedYears() {
            let totalYears = 0;
            let totalMonths = 0;
            $('.accumulatedRows').each(function (index, element) {

                let date1Array = $(element).find('input[name="appointment_date[]"]').val().split('-');
                let date2Array = $(element).find('input[name="job_leaving_date[]"]').val().split('-');

                let differenceInMonths = monthDiff(new Date(date1Array[0],date1Array[1]-1,date1Array[2]),new Date(date2Array[0],date2Array[1]-1,date2Array[2]));
                // differenceInYears = yearsDiff(new Date(date1Array[0],date1Array[1]-1,date1Array[2]),new Date(date2Array[0],date2Array[1]-1,date2Array[2]));


                differenceInYears = differenceInMonths / 12;
                // differenceInMonths = differenceInMonths % 12;
                // $(element).find('input[name="total_period[]"]').val('');
                $(element).find('input[name="total_period[]"]').val((differenceInYears).toFixed(2));
                totalYears += differenceInYears;
            });
            let value = totalYears.toFixed(2);
            $('#accumulated_years').text('Accumulated Service Period : '+value+' Years');
        }

        function monthDiff(dt1, dt2) {
            var diff =(dt2.getTime() - dt1.getTime()) / 1000;
            diff /= (60 * 60 * 24 * 7 * 4);
            return Math.abs(Math.round(diff));
        }

        function yearsDiff(d1, d2) {
            let yearsDiff =  d2.getFullYear() - d1.getFullYear();
            return yearsDiff;
        }

    </script>
@endsection
