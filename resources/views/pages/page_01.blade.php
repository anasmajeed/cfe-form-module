<div id="page_01" style="display:none">
    <form id="page_01_form">
        <div class="form-row">
            <div class="form-group pt-3 col-md-2">
                <label for="session">Session:</label>
                <select id="sessions" name="session" class="form-control">
                    @foreach($sessionDates as $sessionDate)
                        <option value="{{$sessionDate}}">{{$sessionDate}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group pt-3 col-md-4">
                <label for="districts">District:</label>
                <select id="districts" name="district" class="form-control">
                    <option value="" selected disabled>Select District Name</option>
                    @foreach($districtNames as $districtName)
                        <option value="{{$districtName}}">{{$districtName}}</option>
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
                        <input type="text" class="form-control" id="inputAddress" placeholder="R-" name="file_received_number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Receiving Date:</label>
                        <input class="form-control datepicker" type="text" placeholder="yyyy-mm-dd" name="receiving_date">
                    </div>
                    <div class="form-group col-md-4">
                        <label>File Receipt Voucher No:</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="XXXXX" name="file_receipt_voucher_number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>FRV Date:</label>
                        <input class="form-control datepicker" type="text" placeholder="yyyy-mm-dd" name="file_receipt_voucher_date">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Fresh Fle Submission in PWWB No:</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="S-" name="fresh_file_submission_in_pwwb_number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Priority of Submission:</label>
                        <select id="districts" name="priority_of_submission" class="form-control">
                            <option value="high">High</option>
                            <option value="medium">Medium</option>
                            <option value="low">Low</option>
                        </select>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-4">
                        <label>PWWB Diary No:</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="INT" name="pwwb_diary_number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>PWWB Diary Date:</label>
                        <input class="form-control datepicker" type="text" placeholder="yyyy-mm-dd" name="pwwb_diary_date">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Pending Files(With Remarks):</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="XXXXX" name="pending_files_with_remarks">
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
                <div class="form-row" id="worker_detail">
                  <div class="border border-bottom-0 col-md-1 p-0">
                        <input type="text" class="form-control rounded-0" name="serial_no[]" placeholder="01">
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
                        <button id="removeFamilyDetailButton" type="button" class="btn btn-danger" onclick="removeFamilyDetail(event)" disabled>-</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@section('scripts')
    <script>
        function cloneFamilyDetails(){
            let clone = $('#worker_detail').clone();
            $('#worker_detail_parent').append(clone);
            let button = clone.find('#removeFamilyDetailButton').removeAttr('disabled');
        }

        function removeFamilyDetail(event) {
            $(event.target).parent().parent().remove();
        }
    </script>
@endsection
