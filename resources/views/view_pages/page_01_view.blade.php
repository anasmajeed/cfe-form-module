
        <div class="form-row">
            <div class="form-group pt-3 col-md-2">
                <label for="session">Session:</label>
                <label name="session" class="badge badge-primary"  value="{{$data ? $data['session'] : ''}}">
                
                </label>
            </div>
            <div class="form-group pt-3 col-md-4">
                <label for="districts">District:</label>
                <select id="districts" name="district" class="form-control">
                    <option value="" selected disabled>Select District Name</option>
                    @foreach($districtNames as $districtName)
                        <option value="{{$districtName}}" {{ $data ? $data['district'] == $districtName ? 'selected' : '' : ''}}>{{$districtName}}</option>
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
                        <input class="form-control datepicker" type="text" placeholder="yyyy-mm-dd" name="receiving_date" value="{{$data ? $data['receiving_date'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>File Receipt Voucher No:</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="XXXXX" name="file_receipt_voucher_number" value="{{$data ? $data['file_receipt_voucher_number'] : ''}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>FRV Date:</label>
                        <input class="form-control datepicker" type="text" placeholder="yyyy-mm-dd" name="file_receipt_voucher_date" value="{{$data ? $data['file_receipt_voucher_date'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Fresh Fle Submission in PWWB No:</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="S-" name="fresh_file_submission_in_pwwb_number" value="{{$data ? $data['fresh_file_submission_in_pwwb_number'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Priority of Submission:</label>
                        <select id="districts" name="priority_of_submission" class="form-control">
                            <option value="high" {{ $data ? $data['priority_of_submission'] == 'high' ? 'selected' : '' : ''}}>High</option>
                            <option value="medium" {{ $data ? $data['priority_of_submission'] == 'medium' ? 'selected' : '' : ''}}>Medium</option>
                            <option value="low" {{ $data ? $data['priority_of_submission'] == 'low' ? 'selected' : '' : ''}}>Low</option>
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
                        <input class="form-control datepicker" type="text" placeholder="yyyy-mm-dd" name="pwwb_diary_date" value="{{$data ? $data['pwwb_diary_date'] : ''}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Pending Files(With Remarks):</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="XXXXX" name="pending_files_with_remarks" value="{{$data ? $data['pending_files_with_remarks'] : ''}}">
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
                        <label>Worker Name</label>
                    </div>
                    <div class="border border-bottom-0 col-md-2 text-center">
                        <label>Worker's CNIC</label>
                    </div>
                    <div class="border border-bottom-0 col-md-1 text-center">
                        <label>Student Name</label>
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
                @if($data['worker_family_member_details'])
                    @foreach($data['worker_family_member_details'] as $worker_details)
                        <div class="form-row" id="worker_detail">
                            <div class="border border-bottom-0 col-md-1 p-0">
                                <input id="worker_family_serial_no" type="text" class="form-control rounded-0" name="serial_no[]" placeholder="01" value="{{$worker_details['serial_no']}}">
                            </div>
                            <div class="border border-bottom-0 col-md-2 p-0">
                                <input class="form-control rounded-0" type="text" name="worker_name[]" placeholder="XXXXX" value="{{$worker_details['worker_name']}}">
                            </div>
                            <div class="border border-bottom-0 col-md-2 p-0">
                                <input type="text" class="form-control rounded-0" name="worker_cnic[]" placeholder="XXXXX" value="{{$worker_details['worker_cnic']}}">
                            </div>
                            <div class="border border-bottom-0 col-md-1 p-0">
                                <input type="text" class="form-control rounded-0" name="student_name[]" placeholder="XXXXX" value="{{$worker_details['student_name']}}">
                            </div>
                            <div class="border border-bottom-0 col-md-1 p-0">
                                <input type="text" class="form-control rounded-0" name="passed_degree[]" placeholder="XXXXX" value="{{$worker_details['passed_degree']}}">
                            </div>
                            <div class="border border-bottom-0 col-md-1 p-0">
                                <select id="districts" name="potential_degree[]" class="form-control rounded-0">
                                    <option value="yes" {{ $worker_details ? $worker_details['potential_degree'] == 'yes' ? 'selected' : '' : ''}}>XXXXX</option>
                                    <option value="no" {{ $worker_details ? $worker_details['potential_degree'] == 'no' ? 'selected' : '' : ''}}>XXXXX</option>
                                </select>
                            </div>
                            <div class="border border-bottom-0 col-md-1 p-0">
                                <select id="districts" name="file_received_status[]" class="form-control rounded-0">
                                    <option value="yes" {{ $worker_details ? $worker_details['file_received_status'] == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                                    <option value="no" {{ $worker_details ? $worker_details['file_received_status'] == 'no' ? 'selected' : '' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="border border-bottom-0 col-md-2 p-0">
                                <input type="text" class="form-control rounded-0 datepicker" name="follow_up[]"  placeholder="yyyy-mm-dd" value="{{$worker_details['follow_up']}}">
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
                            <input id="worker_family_serial_no" type="text" class="form-control rounded-0" name="serial_no[]" placeholder="01">
                        </div>
                        <div class="border border-bottom-0 col-md-2 p-0">
                            <input class="form-control rounded-0" type="text" name="worker_name[]" placeholder="XXXXX">
                        </div>
                        <div class="border border-bottom-0 col-md-2 p-0">
                            <input type="text" class="form-control rounded-0" name="worker_cnic[]" placeholder="XXXXX">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input type="text" class="form-control rounded-0" name="student_name[]" placeholder="XXXXX">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <input type="text" class="form-control rounded-0" name="passed_degree[]" placeholder="XXXXX">
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <select id="districts" name="potential_degree[]" class="form-control rounded-0">
                                <option value="yes">XXXXX</option>
                                <option value="no">XXXXX</option>
                            </select>
                        </div>
                        <div class="border border-bottom-0 col-md-1 p-0">
                            <select id="districts" name="file_received_status[]" class="form-control rounded-0">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="border border-bottom-0 col-md-2 p-0">
                            <input type="text" class="form-control rounded-0 datepicker" name="follow_up[]"  placeholder="yyyy-mm-dd">
                        </div>
                        <div class="col-md-1">
                            <button id="removeFamilyDetailButton" type="button" class="btn btn-danger" disabled onclick="removeFamilyDetail(event)">-</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>

@section('script_page_1')
    <script>
        function cloneFamilyDetails(){
            let clone = $('#worker_detail').clone();
            let picker = clone.find('.datepicker').datepicker({
                format:'yyyy-mm-dd'
            }).on('changeDate', function(ev) {
                picker.hide();
            }).data('datepicker');

            $('#worker_detail_parent').append(clone);
            let button = clone.find('#removeFamilyDetailButton').removeAttr('disabled');
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
                    alert("Request failed: " + textStatus);
                });
            }
            $(event.target).parent().parent().remove();
        }
    </script>
@endsection
