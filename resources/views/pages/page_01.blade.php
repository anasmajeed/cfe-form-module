<form>
    <div class="form-row">
        <div class="form-group pt-3 col-md-2">
            <label for="session">Session:</label>
            <select id="sessions" name="sessionlist" class="form-control">
                <option value="volvo">2019-2021</option>
                <option value="saab">2021-2023</option>
            </select>
        </div>
        <div class="form-group pt-3 col-md-4">
            <label for="districts">District:</label>
            <select id="districts" name="districtlist" class="form-control">
                <option value="volvo">District Name</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
            </select>
        </div>
    </div>
    <div class="col-md-12">
      <label for="">Recipt and Submission</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>File Recieved No:</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="R-">
                </div>
                <div class="form-group col-md-4">
                    <label>Recieving Date:</label>
                    <input class="form-control datepicker" type="text" placeholder="dd/mm/yyyy">
                </div>
                <div class="form-group col-md-4">
                    <label>File Recipt Voucher No:</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="XXXXX">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>FRV Date:</label>
                    <input class="form-control datepicker" type="text" placeholder="dd/mm/yyyy">
                </div>
                <div class="form-group col-md-4">
                    <label>Fresh Fle Submission in PWWB No:</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="S-">
                </div>
                <div class="form-group col-md-4">
                    <label>Priority of Submission:</label>
                    <select id="districts" name="districtlist" class="form-control">
                        <option value="volvo">High</option>
                        <option value="saab">Medium</option>
                        <option value="opel">Low</option>
                    </select>
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-4">
                    <label>PWWB Diary No:</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="INT">
                </div>
                <div class="form-group col-md-4">
                    <label>PWWB Diary Date:</label>
                    <input class="form-control datepicker" type="text" placeholder="dd/mm/yyyy">
                </div>
                <div class="form-group col-md-4">
                    <label>Pending Files(With Remarks):</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="XXXXX">
                </div>
            </div>
           
        </div>
    </div>

    <!-- Add Details -->

    <div class="card shadow mt-5 mb-5 p-3 w-100">
        <div class="card-body">
            <div class="form-row">
              <div class="">
                <label >Worker's Eligible Family Members</label>
              </div>
              <div class="float-right ml-auto">
                <button type="submit" class="btn btn-primary float-right">+ Add Details</button>
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
                </div><div class="border border-bottom-0 col-md-2 text-center">
                    <label>File Recieved Status</label>
                </div><div class="border border-bottom-0 col-md-2 text-center">
                    <label>Follow-up</label>
                </div>
            </div>
            <div class="form-row">
              <div class="border border-bottom-0 col-md-1 p-0">
                    <input type="text" class="form-control rounded-0 " id="inputAddress" placeholder="01">
                </div>
                <div class="border border-bottom-0 col-md-2 p-0">
                    <input class="form-control rounded-0" type="text" placeholder="XXXXX">
                </div>
                <div class="border border-bottom-0 col-md-2 p-0">
                    <input type="text" class="form-control rounded-0" id="inputAddress" placeholder="XXXXX">
                </div>
                <div class="border border-bottom-0 col-md-1 p-0">
                    <input type="text" class="form-control rounded-0" id="inputAddress" placeholder="XXXXX">
                </div>
                <div class="border border-bottom-0 col-md-1 p-0">
                    <input type="text" class="form-control rounded-0" id="inputAddress" placeholder="XXXXX">
                </div>
                <div class="border border-bottom-0 col-md-1 p-0">
                   <select id="districts" name="districtlist" class="form-control rounded-0">
                        <option value="volvo">XXXXX</option>
                        <option value="saab">XXXXX</option>
                    </select>
                </div>
                <div class="border border-bottom-0 col-md-2 p-0">
                    <select id="districts" name="districtlist" class="form-control rounded-0">
                        <option value="volvo">Yes</option>
                        <option value="saab">No</option>
                    </select>
                </div>
                <div class="border border-bottom-0 col-md-2 p-0">
                    <input type="text" class="form-control rounded-0 datepicker" id="inputAddress" placeholder="XXXXX">
                </div>
            </div>
        </div>
    </div>
</form>
