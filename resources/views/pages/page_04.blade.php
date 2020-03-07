<div id="page_04" style="display:none;">
    <form id="page_04_form">
        <div class="col-md-12 mt-4">
            <label>Factory Details</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-3">
                        <label>Name of Factory/ Establishment:</label>
                        <input type="text" class="form-control text-center" placeholder="XXXXX" name="factory_name" value="{{$data ? $data['factory_details']['factory_name'] : ''}}">
                    </div>
                    <div class="form-group col-md-5">
                        <label>Address of Factory/ Establishment:</label>
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
                               placeholder="dd/mm/yyyy" value="{{$data && $data['factory_details']['factory_registration_date'] ? date('d/m/Y',strtotime($data['factory_details']['factory_registration_date'])) : ''}}">
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
                        <input onchange="setAccumulatedYears()" type="text" id="date_of_form_submission" class="form-control text-center datepickerAll" name="date_of_submission"
                               placeholder="dd/mm/yyyy" value="{{$data && $data['factory_details']['date_of_submission'] ? date('d/m/Y',strtotime($data['factory_details']['date_of_submission'])) : ''}}">
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
                        <input type="text" id="service_serial_no" name="serial_no[]" class="form-control rounded-0 text-center"
                               placeholder="1" value="{{$service_details['serial_no']}}" readonly>
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <input class="form-control rounded-0" name="name[]" type="text" placeholder="XXXXX" value="{{$service_details['name']}}">
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <input onchange="appointmentDateCheck(event)" type="text" class="form-control rounded-0 datepickerAccumulated" name="appointment_date[]"
                               placeholder="dd/mm/yyyy" value="{{$service_details['appointment_date'] ? date('d/m/Y',strtotime($service_details['appointment_date'])) : ''}}">
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <input onchange="appointmentDateCheck(event)" type="text" class="form-control rounded-0 datepickerAccumulated" name="job_leaving_date[]"
                               placeholder="dd/mm/yyyy" value="{{$service_details['job_leaving_date'] ? date('d/m/Y',strtotime($service_details['job_leaving_date'])) : ''}}">
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <input type="text" class="form-control rounded-0" name="total_period[]" placeholder="XXXXX" value="{{$service_details['total_period']}}">
                    </div>
                    <div class="border border-bottom-0 col-md-2 p-0">
                        <input readonly type="text" class="form-control rounded-0" name="completion_date[]" value="{{ $service_details['completion_date'] ? date('d/m/Y',strtotime($service_details['completion_date'])) : ''}}"
                               placeholder="dd/mm/yyyy">
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <select readonly name="service_completion_status[]" class="form-control rounded-0">
                            <option value="" selected disabled>--select--</option>
                            <option value="yes" {{ $service_details ? $service_details['service_completion_status'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                            <option value="no" {{ $service_details ? $service_details['service_completion_status'] == 'no' ? 'selected' : '' : ''}}>No</option>
                        </select>
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <select id="" name="attested_by_factory_manager[]" class="form-control rounded-0">
                            <option value="" selected disabled>--select--</option>
                            <option value="yes" {{ $service_details ? $service_details['attested_by_factory_manager'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                            <option value="no" {{ $service_details ? $service_details['attested_by_factory_manager'] == 'no' ? 'selected' : '' : ''}}>No</option>
                        </select>
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <select id="" name="attested_by_dol[]" class="form-control rounded-0">
                            <option value="" selected disabled>--select--</option>
                            <option value="yes" {{ $service_details ? $service_details['attested_by_dol'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                            <option value="no" {{ $service_details ? $service_details['attested_by_dol'] == 'no' ? 'selected' : '' : ''}}>No</option>
                        </select>
                    </div>
                    <div class="border border-bottom-0 col-md-1 p-0">
                        <select id="" name="attested_by_director[]" class="form-control rounded-0">
                            <option value="" selected disabled>--select--</option>
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
                            <input type="text" id="service_serial_no" name="serial_no[]" class="form-control rounded-0 text-center"
                                   placeholder="1" readonly>
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input class="form-control rounded-0" name="name[]" type="text" placeholder="XXXXX">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input onchange="appointmentDateCheck(event)" type="text" class="form-control rounded-0 datepickerAccumulated" name="appointment_date[]"
                                   placeholder="dd/mm/yyyy">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input type="text" class="form-control rounded-0 datepickerAccumulated" name="job_leaving_date[]"
                                   onchange="appointmentDateCheck(event)" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input type="text" class="form-control rounded-0" name="total_period[]" placeholder="XXXXX">
                        </div>
                        <div class="border border-bottom-0 col-md-2 p-0">
                            <input readonly type="text" class="form-control rounded-0" name="completion_date[]"
                                   placeholder="dd/mm/yyyy">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <select name="service_completion_status[]" class="form-control rounded-0">
                                <option value="" selected disabled>--select--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <select id="" name="attested_by_factory_manager[]" class="form-control rounded-0">
                                <option value="" selected disabled>--select--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <select id="" name="attested_by_dol[]" class="form-control rounded-0">
                                <option value="" selected disabled>--select--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <select id="" name="attested_by_director[]" class="form-control rounded-0">
                                <option value="" selected disabled>--select--</option>
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
                format: 'dd/mm/yyyy',
            }).on('changeDate', function (ev) {
                setAccumulatedYears();
                picker.hide();
            }).data('datepicker');
        });

        function cloneServiceDetails() {
            let clone = $('#service_detail').clone();
            clone.find('.datepicker').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'dd/mm/yyyy',
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });

            clone.find('.datepickerAccumulated').each(function (index, pick) {
                let picker = $(pick).datepicker({
                    format: 'dd/mm/yyyy',
                }).on('changeDate', function (ev) {
                    setAccumulatedYears();
                    picker.hide();
                }).data('datepicker');
            });

            clone.find('input:text').val('');

            $('#service_detail_parent').append(clone);
            let button = clone.find('#removeServiceDetailButton').removeAttr('disabled');
            clone.find('#service_serial_no').val($('#service_detail input[name="serial_no[]"').length);
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
            $('#service_detail input[name="serial_no[]"').each(function (index,value) {
                $(value).val(index+1);
            });
            setAccumulatedYears();
        }

        function setAccumulatedYears() {
            let totalYears = 0;
            let secondDateArray = $('#date_of_form_submission').val();
            $('.accumulatedRows').each(function (index, element) {

                let date1Array = $(element).find('input[name="appointment_date[]"]').val().split('/');
                let date2Array = $(element).find('input[name="job_leaving_date[]"]').val().split('/');
                let completionDate = $(element).find('input[name="completion_date[]"]');

                if($(element).find('input[name="job_leaving_date[]"]').val() == ''){
                    date2Array = secondDateArray.split('/');
                }

                let differenceInMonths = monthDiff(new Date(date1Array[2],date1Array[1]-1,date1Array[0]),new Date(date2Array[2],date2Array[1]-1,date2Array[0]));
                let differenceInYears = yearsDiff(new Date(date1Array[2],date1Array[1]-1,date1Array[0]),new Date(date2Array[2],date2Array[1]-1,date2Array[0]));
                differenceInMonths = differenceInMonths % 13;

                let sum = differenceInYears +'.'+differenceInMonths;
                $(element).find('input[name="total_period[]"]').val('');
                $(element).find('input[name="total_period[]"]').val(sum);
                $(completionDate).val('');
                //Calculating 3 years
                if($(element).find('input[name="appointment_date[]"]').val() !== ''){
                    let appointmentDate = new Date(date2Array[2],date2Array[1]-1,date2Array[0]);
                    appointmentDate.setMonth(appointmentDate.getMonth() + (12 - differenceInMonths));
                    appointmentDate.setFullYear(appointmentDate.getFullYear() + (2 - differenceInYears));
                    $(completionDate).val(appointmentDate.toLocaleDateString());
                }
                //Selecting Service Period Completion Status
                if(differenceInYears >= 3)
                    $(element).find('select[name="service_completion_status[]"]').val('yes');
                else
                    $(element).find('select[name="service_completion_status[]"]').val('no');
                totalYears += parseFloat(sum);
            });
            let value = totalYears;
            if(value >= 3)
                $('#accumulated_years').attr('style','color:green');
            else
                $('#accumulated_years').attr('style','color:red');

            $('#accumulated_years').text('Accumulated Service Period : '+value.toFixed(2)+' Years');
        }

        // function monthDiff(dt1, dt2) {
        //     var diff =(dt2.getTime() - dt1.getTime()) / 1000;
        //     diff /= (60 * 60 * 24 * 7 * 4);
        //     return Math.abs(Math.round(diff));
        // }

        function monthDiff(dt1,dt2) {
            return dt2.getMonth() - dt1.getMonth();
        }

        function yearsDiff(d1, d2) {
            return d2.getFullYear() - d1.getFullYear();
        }

        function appointmentDateCheck(e) {
            let appointmentField = $(e.target).parent().parent().find('input[name="appointment_date[]"]').val();
            let leavingField = $(e.target).parent().parent().find('input[name="job_leaving_date[]"]').val();
            if(leavingField !== ''){
                let appointmentArray = appointmentField.split('/');
                let leavingArray = leavingField.split('/');

                let leavingDate = new Date(leavingArray[2],leavingArray[1]-1,leavingArray[0]);
                let appointmentDate = new Date(appointmentArray[2],appointmentArray[1]-1,appointmentArray[0]);
                if(leavingDate < appointmentDate){
                    $(e.target).val('');
                }
            }
            setAccumulatedYears();
        }

    </script>
@endsection
