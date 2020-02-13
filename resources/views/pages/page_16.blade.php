<div id="page_16" style="display:none;">
    <div class="card shadow p-3 w-100">
        <div class="card-header text-center bg-success">
            Continue 1(Annual Part 2)
        </div>
        <div class="card-body ">
            <div class="card shadow p-3 w-100">
                <div class="card-body" >
                    <div class="col-md-12 mt-4">
                        <label for="">Annual Part 2 File Received in CFE Cell:</label>
                    </div>
                    <div class="card shadow p-3 w-100">
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Recipt Status:</label>
                                    <select id="districts" name="districtlist" class="form-control">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Date:</label>
                                    <input type="text" class="form-control text-center datepicker" name="date"  placeholder="yyyy-mm-dd">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <label for="">Fiel Submitted in PWWB:</label>
            </div>
            <div class="card shadow p-3 mt-1 w-100">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Status:</label>
                            <select id="districts" name="districtlist" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Date:</label>
                            <input type="text" class="form-control text-center datepicker" name="date"  placeholder="yyyy-mm-dd">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Diary No. in PWWB:</label>
                            <input type="text" class="form-control text-center" name="diary_pwwb"  placeholder="XXXXX">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <label for="">Claimed Received From PWWB:</label>
            </div>
            <div class="card shadow p-3 mt-1 w-100">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Amount of Claim Due:</label>
                            <input type="text" class="form-control text-center" name="amount_claim_due"  placeholder="XXXXX">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Status of Claimed Received:</label>
                            <select id="districts" name="districtlist" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Amount Received:</label>
                            <input type="text" class="form-control text-center" name="amount_received"  placeholder="XXXXX">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Date:</label>
                            <input type="text" class="form-control text-center datepicker" name="date"  placeholder="yyyy-mm-dd">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <label for="">Exmination Status in Affiliated Body:</label>
            </div>
            <div class="card shadow p-3 mt-1 w-100">
                <div class="card-body">
                    <div class="col-md-12 mt-4">
                        <label for="">Exam Fee:</label>
                    </div>
                    <div class="card shadow p-3 mt-1 w-100">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Status:</label>
                                    <select id="districts" name="districtlist" class="form-control">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Date:</label>
                                    <input type="text" class="form-control text-center datepicker" name="date"  placeholder="yyyy-mm-dd">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Amount:</label>
                                    <input type="text" class="form-control text-center" name="amount"  placeholder="XXXXX">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label>Roll No:</label>
                                    <input type="text" class="form-control text-center" name="roll_no"  placeholder="XXXXX">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="ml-2">
                            <label for="">Result Status:</label>
                        </div>
                        <div class="float-right ml-auto mr-2">
                            <button type="button" class="btn btn-primary float-right" onclick="cloneFamilyDetails()">+ Add Details</button>
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
                                </div><div class="col-md-2 text-center">
                                    <label>Passing Date:</label>
                                </div>
                            </div>
                            <div class="form-row" id="worker_detail">
                                <div class="col-md-1 p-0">
                                    <select id="" name="result" class="form-control">
                                        <option value="pass">Pass</option>
                                        <option value="fail">Fail</option>
                                    </select>
                                </div>
                                <div class="col-md-1 p-0">
                                    <select id="" name="fail" class="form-control">
                                        <option value="promoted">Promoted</option>
                                        <option value="notPromoted">Not Promoted</option>
                                    </select>
                                </div>
                                <div class="col-md-3 p-0">
                                    <select id="" name="next_appearance" class="form-control">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="col-md-2 p-0">
                                    <input type="text" class="form-control text-center datepicker" name="next_appearance_date"  placeholder="yyyy-mm-dd">
                                </div>
                                <div class="col-md-2 p-0">
                                    <input type="text" class="form-control text-center datepicker" name="last_chance_date"  placeholder="yyyy-mm-dd">
                                </div>
                                <div class="col-md-2 p-0">
                                    <input type="text" class="form-control text-center datepicker" name="passing_date"  placeholder="yyyy-mm-dd">
                                </div>
                                <div class="col-md-1">
                                    <button id="removeFamilyDetailButton" type="button" class="btn btn-danger" onclick="removeFamilyDetail(event)" disabled>-</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
