<div id="page_01" style="display:none">
    <form id="page_01_form">
        <div class="form-row">
            <div class="form-group pt-3 col-md-2">
                <label for="session">Session:</label>
                <select id="sessions" name="session" class="form-control">
                    <option value="" selected disabled>Select Session</option>
                    @foreach(\Config::get('constants.sessions') as $key => $sessionDate)
                            <option value="{{$key}}" {{ $data ? $data['session'] == $key ? 'selected' : '' : ''}}>{{$sessionDate}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group pt-3 col-md-4">
                <label for="districts">District:</label>
                <select id="districts" name="district" class="form-control">
                    <option value="" selected disabled>Select District Name</option>
                    @foreach(\Config::get('constants.districts') as $key => $districtName)
                        <option value="{{$key}}" {{ $data ? $data['district'] == $key ? 'selected' : '' : ''}}>{{$districtName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <label for="">Receipt and Submission</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>File Received No:</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="R-" name="file_received_number" value="{{$data ? $data['file_received_number'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Receiving Date:</label>
                        <input class="form-control datepicker" type="text" placeholder="dd/mm/yyyy" name="receiving_date" value="{{$data && $data['receiving_date'] ? date('d/m/Y',strtotime($data['receiving_date'])) : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>File Receipt Voucher No:</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="aaaaa" name="file_receipt_voucher_number" value="{{$data ? $data['file_receipt_voucher_number'] : ''}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>FRV Date:</label>
                        <input class="form-control datepicker" type="text" placeholder="dd/mm/yyyy" name="file_receipt_voucher_date" value="{{$data && $data['file_receipt_voucher_date'] ? date('d/m/Y',strtotime($data['file_receipt_voucher_date'])) : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Fresh Fle Submission in PWWB No:</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="S-" name="fresh_file_submission_in_pwwb_number" value="{{$data ? $data['fresh_file_submission_in_pwwb_number'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Priority of Submission:</label>
                        <select name="priority_of_submission" class="form-control">
                            <option value="" selected disabled>Select Priority</option>
                            @foreach(\Config::get('constants.priority_of_submission') as $key => $priority_of_submission)
                                <option value="{{$key}}" {{ $data ? $data['priority_of_submission'] == $key ? 'selected' : '' : ''}}>{{$priority_of_submission}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-4">
                        <label>PWWB Diary No:</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="INT" name="pwwb_diary_number" value="{{$data ? $data['pwwb_diary_number'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>PWWB Diary Date:</label>
                        <input class="form-control datepicker" type="text" placeholder="dd/mm/yyyy" name="pwwb_diary_date" value="{{$data && $data['pwwb_diary_date'] ? date('d/m/Y',strtotime($data['pwwb_diary_date'])) : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Pending Files (With Remarks):</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="aaaaa" name="pending_files_with_remarks" value="{{$data ? $data['pending_files_with_remarks'] : ''}}">
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Details -->
        <div class="card shadow mt-5 p-3 w-100">
            <div class="card-body" id="worker_detail_parent">
                <div class="form-row">
                    <div class="">
                        <label >Worker's Eligible Family Members</label>
                    </div>
                    <div class="float-right ml-auto">
                        <button type="button" class="btn btn-primary float-right" onclick="cloneFamilyDetails()">+ Add Details</button>
                    </div>
                </div>
                <div class="form-row pt-3">
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Serial No.</label>
                    </div>
                    <div class="border border-bottom-0 col-md-2 text-center">
                        <label>Worker's Name</label>
                    </div>
                    <div class="border border-bottom-0 col-md-2 text-center">
                        <label>Worker's CNIC</label>
                    </div>
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Student's Name</label>
                    </div>
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Passed Degree</label>
                    </div><div class="border border-bottom-0 col-md-1 text-center">
                        <label>Potential Degree</label>
                    </div><div class="border border-bottom-0 col-md-1 text-center">
                        <label>File Received Status</label>
                    </div><div class="border border-bottom-0 col-md-2 text-center">
                        <label>Follow-up</label>
                    </div>
                </div>
                @if($data && isset($data['worker_family_member_details']) && count($data['worker_family_member_details']))
                    @foreach($data['worker_family_member_details'] as $worker_details)
                        <div class="form-row" id="worker_detail">
                            <div class="border border-bottom-0 col-md-1 p-0">
                                <input readonly id="worker_family_serial_no" type="text" class="form-control rounded-0 text-center" name="serial_no[]" placeholder="1" value="{{$worker_details['serial_no']}}">
                            </div>
                            <div class="border border-bottom-0 col-md-2 p-0">
                                <input class="form-control rounded-0" type="text" name="worker_name[]" placeholder="aaaaa" value="{{$worker_details['worker_name']}}">
                            </div>
                            <div class="border border-bottom-0 col-md-2 p-0">
                                <input type="text" class="form-control rounded-0" name="worker_cnic[]" placeholder="00000-0000000-0" value="{{$worker_details['worker_cnic']}}">
                            </div>
                            <div class="border border-bottom-0 col-md-1 p-0">
                                <input type="text" class="form-control rounded-0" name="student_name[]" placeholder="aaaaa" value="{{$worker_details['student_name']}}">
                            </div>
                            <div class="border border-bottom-0 col-md-1 p-0">
                                <input type="text" class="form-control rounded-0" name="passed_degree[]" placeholder="aaaaa" value="{{$worker_details['passed_degree']}}">
                            </div>
                            <div class="border border-bottom-0 col-md-1 p-0">
                                <select id="districts" name="potential_degree[]" class="form-control rounded-0">
                                    <option value="" selected disabled>Select Potential Degree</option>
                                    @foreach(\Config::get('constants.potential_degree') as $key => $potential_degree)
                                        <option value="{{$key}}" {{ $worker_details ? $worker_details['potential_degree'] == $key ? 'selected' : '' : ''}}>{{$potential_degree}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="border border-bottom-0 col-md-1 p-0">
                                <select id="districts" name="file_received_status[]" class="form-control rounded-0">
                                    <option value="" selected disabled>Select Status</option>
                                    @foreach(\Config::get('constants.general_yes_no') as $key => $file_received_status)
                                        <option value="{{$key}}" {{ $worker_details ? $worker_details['file_received_status'] == $key ? 'selected' : '' : ''}}>{{$file_received_status}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="border border-bottom-0 col-md-2 p-0">
                                <input type="text" class="form-control rounded-0 datepickerFollowUp" name="follow_up[]"  placeholder="dd/mm/yyyy" value="{{$worker_details['follow_up'] ? date('d/m/Y',strtotime($worker_details['follow_up'])) : ''}}">
                            </div>
                            <div class="col-md-1">
                                <button id="removeFamilyDetailButton" type="button" class="btn btn-danger" onclick="removeFamilyDetail(event)"
                                @if ($worker_details == reset($data['worker_family_member_details'])) {{'disabled'}} @endif>-</button>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="form-row" id="worker_detail">
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input readonly id="worker_family_serial_no" type="text" class="form-control rounded-0 text-center" name="serial_no[]" value="1">
                        </div>
                        <div class="border border-bottom-0 col-md-2 p-0">
                            <input class="form-control rounded-0" type="text" name="worker_name[]" placeholder="XXXX">
                        </div>
                        <div class="border border-bottom-0 col-md-2 p-0">
                            <input type="text" class="form-control rounded-0" name="worker_cnic[]" placeholder="00000-0000000-0">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input type="text" class="form-control rounded-0" name="student_name[]" placeholder="aaaaa">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input type="text" class="form-control rounded-0" name="passed_degree[]" placeholder="aaaaa">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <select name="potential_degree[]" class="form-control rounded-0">
                                <option value="" selected disabled>Select Potential Degree</option>
                                @foreach(\Config::get('constants.potential_degree') as $key => $potential_degree)
                                    <option value="{{$key}}">{{$potential_degree}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <select name="file_received_status[]" class="form-control rounded-0">
                                <option value="" selected disabled>Select Status</option>
                                @foreach(\Config::get('constants.general_yes_no') as $key => $file_received_status)
                                    <option value="{{$key}}">{{$file_received_status}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="border border-bottom-0 col-md-2 p-0">
                            <input type="text" class="form-control rounded-0 datepickerFollowUp" name="follow_up[]"  placeholder="dd/mm/yyyy">
                        </div>
                        <div class="col-md-1">
                            <button id="removeFamilyDetailButton" type="button" class="btn btn-danger" disabled onclick="removeFamilyDetail(event)">-</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </form>
</div>

@section('script_page_1')
    <script>

        $('input[name="worker_cnic[]"').each(function (index,value) {
            $(value).mask('00000-0000000-0');
        });

        $('.datepickerFollowUp').datepicker({
            format:'dd/mm/yyyy',
            autoclose: true
        });

        function cloneFamilyDetails(){
            let clone = $('#worker_detail').clone();
            clone.find('.datepickerFollowUp').datepicker({
                format:'dd/mm/yyyy',
                autoclose: true
            });

            clone.find('input:text').val('');
            $('#worker_detail_parent').append(clone);
            let button = clone.find('#removeFamilyDetailButton').removeAttr('disabled');
            clone.find('#worker_family_serial_no').val($('#worker_detail input[name="serial_no[]"').length);

            $('input[name="worker_cnic[]"').each(function (index,value) {
                $(value).mask('00000-0000000-0');
            });
        }

        function removeFamilyDetail(event) {
            if(index_id) {
                let csrf_token = $('meta[name="csrf-token"]').attr('content');
                let request = $.ajax({
                    url: '/worker-family-detail-delete',
                    method: "POST",
                    data: {
                        'index_id' : index_id,
                        'serial_no' : $(event.target).parent().parent().find('#worker_family_serial_no').val()
                    },
                    headers:{
                        'X-CSRF-TOKEN':csrf_token
                    }
                });

                request.done(function (response) {
                });

                request.fail(function (jqXHR, textStatus) {
                    // alert("Request failed: " + textStatus);
                });
            }
            $(event.target).parent().parent().remove();
            $('#worker_detail input[name="serial_no[]"').each(function (index,value) {
                $(value).val(index+1);
            });
        }
    </script>
@endsection
