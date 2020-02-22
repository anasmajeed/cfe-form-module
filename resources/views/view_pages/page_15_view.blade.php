<div id="page_15" style="display:none;">
    <div class="card shadow p-3 w-100">
        <div class="card-header text-center bg-success">
            Annual Part 1
        </div>
        <div class="card-body ">
            <div class="col-md-12 mt-3">
                <label for="">Examination Status in Affiliated Body:</label>
            </div>
            <div class="card shadow p-3 w-100">
                <div class="card-body">
                    <div class="col-md-12 mt-4">
                        <label for="">Exam Fee:</label>
                    </div>
                    <div class="card shadow p-3 w-100">
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Exam Fee Deposit status:</label>
                                    <select  name="fee_deposit_status" class="form-control">
                                        <option value="yes" {{ $data ? $data['first_annual_details']['status'] == 'issued' ? 'selected' : '' : ''}}>
                                        Yes</option>
                                        <option value="no" {{ $data ? $data['first_annual_details']['status'] == 'issued' ? 'selected' : '' : ''}}>
                                        No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Date:</label>
                                    <input type="text" class="form-control text-center datepicker" name="exam_fee_date"
                                            placeholder="yyyy-mm-dd"
                                            value="{{$data ? $data['first_annual_details']['exam_fee_date'] : ''}}">
                                </div>
                                <div class="form-group  col-md-3">
                                    <label>Amount:</label>
                                    <input type="text" class="form-control text-center" name="amount"
                                            placeholder="XXXXX"
                                            value="{{$data ? $data['first_annual_details']['amount'] : ''}}">
                                </div>
                                <div class="form-group  col-md-3">
                                    <label>Roll No:</label>
                                    <input type="text" class="form-control text-center" name="roll_no"
                                            placeholder="XXXXX"
                                            value="{{$data ? $data['first_annual_details']['roll_no'] : ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="ml-2">
                            <label for="">Result Status:</label>
                        </div>
                        <div class="float-right ml-auto mr-2">
                            <button type="button" class="btn btn-primary float-right" onclick="cloneFamilyDetails()">
                                <strong>+</strong></button>
                        </div>
                    </div>
                    <!-- result status -->
                    <div class="card shadow mt-3 p-3 w-100">
                        <div class="card-body" id="worker_detail_parent">
                            <div class="form-row pt-2">
                                <div class="col-md-1 text-center">
                                    <label>Result:</label>
                                </div>
                                <div class="col-md-1 text-center">
                                    <label>Fail:</label>
                                </div>
                                <div class="col-md-3 text-center">
                                    <label>Chance of next Appearance:</label>
                                </div>
                                <div class="col-md-2 text-center">
                                    <label>Next Appeareance Date:</label>
                                </div>
                                <div class="col-md-2 text-center">
                                    <label>Last Chance Date:</label>
                                </div>
                                <div class="col-md-2 text-center">
                                    <label>Passing Date:</label>
                                </div>
                            </div>
                            <div class="form-row" id="worker_detail">
                                <div class="col-md-1 p-0">
                                    <select name="result[]" class="form-control">
                                        <option value="pass">Pass</option>
                                        <option value="fail">Fail</option>
                                    </select>
                                </div>
                                <div class="col-md-1 p-0">
                                    <select name="fail[]" class="form-control">
                                        <option value="promoted">Promoted</option>
                                        <option value="notPromoted">Not Promoted</option>
                                    </select>
                                </div>
                                <div class="col-md-3 p-0">
                                    <select name="next_appearance[]" class="form-control">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="col-md-2 p-0">
                                    <input type="text" class="form-control text-center datepicker"
                                    name="next_appearance_date[]" placeholder="yyyy-mm-dd">
                                </div>
                                <div class="col-md-2 p-0">
                                    <input type="text" class="form-control text-center datepicker"
                                    name="last_chance_date[]" placeholder="yyyy-mm-dd">
                                </div>
                                <div class="col-md-2 p-0">
                                    <input type="text" class="form-control text-center datepicker" name="passing_date"
                                    placeholder="yyyy-mm-dd">
                                </div>
                                <div class="col-md-1">
                                    <button id="removeFamilyDetailButton" type="button" class="btn btn-danger"
                                            onclick="removeFamilyDetail(event)" disabled>-
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="">Readmission</label>
                    </div>
                    <div class="card shadow p-3 w-100">
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Same Course:</label>
                                    <select  name="same_course" class="form-control">
                                        <option value="yes" {{ $data ? $data['first_annual_details']['same_course'] == 'yes' ? 'selected' : '' : ''}}>
                                        Yes</option>
                                        <option value="no" {{ $data ? $data['first_annual_details']['same_course'] == 'no' ? 'selected' : '' : ''}}>
                                        No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Changed Course:</label>
                                    <select  name="changed_course" class="form-control">
                                        <option value="yes" {{ $data ? $data['first_annual_details']['changed_course'] == 'yes' ? 'selected' : '' : ''}}>
                                        Yes</option>
                                        <option value="no" {{ $data ? $data['first_annual_details']['changed_course'] == 'no' ? 'selected' : '' : ''}}>
                                        No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

