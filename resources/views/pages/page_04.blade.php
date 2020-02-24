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
                               placeholder="yyyy-mm-dd" value="{{$data ? $data['factory_details']['factory_registration_date'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Factory Registration Certificate Attested by Factory Manager:</label>

                        <select name="factory_registration_certificate_attested_by_manager" class="form-control">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                <option value="{{$key}}" {{ $data ? $data['factory_details']['factory_registration_certificate_attested_by_manager'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Factory Registration Certificate Attested by District Officer Labor(DOL):</label>
                        <select name="factory_registration_certificate_attested_by_officer" class="form-control">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                <option value="{{$key}}" {{ $data ? $data['factory_details']['factory_registration_certificate_attested_by_officer'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group  col-md-3">
                        <label>Factory Registration Certificate Attested by Dir. Labor:</label>
                        <select name="factory_registration_certificate_attested_by_director" class="form-control">
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                <option value="{{$key}}" {{ $data ? $data['factory_details']['factory_registration_certificate_attested_by_director'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                            @endforeach
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
                            <option value="" selected disabled>--select--</option>
                            @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                <option value="{{$key}}" {{ $data ? $data['factory_details']['signature_of_worker'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Date of form Submission:</label>
                        <input type="text" id="date_of_form_submission" class="form-control text-center datepickerAccumulated" name="date_of_submission"
                               placeholder="yyyy-mm-dd" value="{{$data ? $data['factory_details']['date_of_submission'] : ''}}">
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
                @if(isset($data['service_details']) && count($data['service_details']))
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
                               placeholder="yyyy-mm-dd" value="{{$service_details['appointment_date']}}">
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <input type="text" class="form-control rounded-0 datepickerAccumulated" name="job_leaving_date[]"
                               placeholder="yyyy-mm-dd" value="{{$service_details['job_leaving_date']}}">
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <input type="text" class="form-control rounded-0" name="total_period[]" placeholder="XXXXX" value="{{$service_details['total_period']}}">
                    </div>
                    <div class="border border-bottom-0 col-md-2 p-0">
                        <input type="text" class="form-control rounded-0 datepicker" name="completion_date[]" value="{{$service_details['completion_date']}}"
                               placeholder="yyyy-mm-dd">
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
                            <input type="text" class="form-control rounded-0 datepickerAccumulated" name="appointment_date[]"
                                   onchange="setAccumulatedYears()" placeholder="yyyy-mm-dd">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input type="text" class="form-control rounded-0 datepickerAccumulated" name="job_leaving_date[]"
                                   onchange="setAccumulatedYears()" placeholder="yyyy-mm-dd">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input type="text" class="form-control rounded-0" name="total_period[]" placeholder="XXXXX">
                        </div>
                        <div class="border border-bottom-0 col-md-2 p-0">
                            <input type="text" class="form-control rounded-0 datepicker" name="completion_date[]"
                                   placeholder="yyyy-mm-dd">
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
                format: 'yyyy-mm-dd',
            }).on('changeDate', function (ev) {
                setAccumulatedYears();
                picker.hide();
            }).data('datepicker');
        });

        function cloneServiceDetails() {
            let clone = $('#service_detail').clone();
            clone.find('.datepicker').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'yyyy-mm-dd',
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });

            clone.find('.datepickerAccumulated').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'yyyy-mm-dd',
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });

            $('#service_detail_parent').append(clone);
            let button = clone.find('#removeServiceDetailButton').removeAttr('disabled');
            setAccumulatedYears();
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
            setAccumulatedYears();
        }

        function setAccumulatedYears() {
            let totalYears = 0;
            let secondDateArray = $('#date_of_form_submission').val();
            $('.accumulatedRows').each(function (index, element) {

                let date1Array = $(element).find('input[name="appointment_date[]"]').val().split('-');
                let date2Array = $(element).find('input[name="job_leaving_date[]"]').val().split('-');
                if($(element).find('input[name="job_leaving_date[]"]').val() == ''){
                    date2Array = secondDateArray.split('-');
                }

                let differenceInMonths = monthDiff(new Date(date1Array[0],date1Array[1]-1,date1Array[2]),new Date(date2Array[0],date2Array[1]-1,date2Array[2]));
                let differenceInYears = yearsDiff(new Date(date1Array[0],date1Array[1]-1,date1Array[2]),new Date(date2Array[0],date2Array[1]-1,date2Array[2]));
                differenceInMonths = differenceInMonths % 13;

                let sum = differenceInYears +'.'+differenceInMonths;
                $(element).find('input[name="total_period[]"]').val('');
                $(element).find('input[name="total_period[]"]').val(sum);
                totalYears += parseFloat(sum);
            });
            let value = totalYears;
            if(value >= 3)
                $('#accumulated_years').attr('style','color:green');
            else
                $('#accumulated_years').attr('style','color:red');

            $('#accumulated_years').text('Accumulated Service Period : '+value.toFixed(2)+' Years');
        }

        function monthDiff(dt1, dt2) {
            var diff =(dt2.getTime() - dt1.getTime()) / 1000;
            diff /= (60 * 60 * 24 * 7 * 4);
            return Math.abs(Math.round(diff));
        }

        function yearsDiff(d1, d2) {
            return d2.getFullYear() - d1.getFullYear();
        }

    </script>
@endsection
