<div id="page_04" style="display:none;">
    <div class="col-md-12 mt-4">
        <label>Factory Details</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="form-row">
                <div class="form-group  col-md-3">
                    <label>Name of Factory/Establishment:</label>
                    <input type="text" class="form-control text-center" id="inputAddress" placeholder="XXXXX">
                </div>
                <div class="form-group col-md-5">
                    <label>Address of Factory/Establishment:</label>
                    <input type="text" class="form-control text-center" id="inputAddress" placeholder="XXXXX">

                </div>
                <div class="form-group col-md-4">
                    <label>Factory/ Establishment Registration No:</label>
                    <input type="text" class="form-control text-center" id="inputAddress" placeholder="XXXXX">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group  col-md-3">
                    <label>Date of Factory/Establishment Registration:</label>
                    <input type="text" class="form-control text-center datepicker" id="inputAddress" placeholder="dd/mm/yyyy">
                </div>
                <div class="form-group col-md-5">
                    <label>Factory Registration Certificate Attested by Factory Manager:</label>
                    <select id="districts" name="districtlist" class="form-control mt-4">
                        <option value="volvo">Yes</option>
                        <option value="saab">No</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label>FactoryRegisteration Certificate Attested by District Officer Labor(DOL):</label>
                    <select id="districts" name="districtlist" class="form-control">
                        <option value="volvo">Yes</option>
                        <option value="saab">No</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group  col-md-3">
                    <label>FactoryRegisteration Certificate Attested by Dir. Labor:</label>
                    <select id="districts" name="districtlist" class="form-control">
                        <option value="volvo">Yes</option>
                        <option value="saab">No</option>
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
                    <select id="districts" name="districtlist" class="form-control">
                        <option value="volvo">Yes</option>
                        <option value="saab">No</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Date of form Submission:</label>
                    <input type="text" class="form-control text-center datepicker" id="inputAddress" placeholder="dd/mm/yyyy">
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
                    <label >Factory Details (Eligible)</label>
                </div>
                <div class="float-right ml-auto">
                    <button type="button" class="btn btn-primary float-right" onclick="cloneServiceDetails()">+ Add Details</button>
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
            <div class="form-row" id="service_detail">
                <div class="border border-bottom-0 col-md-1 p-0">
                    <input type="text" id="service_serial_no" name="serial_no[]" class="form-control rounded-0 " placeholder="01">
                </div>
                <div class="border border-bottom-0 col-md-1 p-0">
                    <input class="form-control rounded-0" name="name[]" type="text" placeholder="XXXXX">
                </div>
                <div class="border border-bottom-0 col-md-1 p-0">
                    <input type="text" class="form-control rounded-0 datepicker" name="appointment_date[]" placeholder="dd/mm/yyyy">
                </div>
                <div class="border border-bottom-0 col-md-1 p-0">
                    <input type="text" class="form-control rounded-0 datepicker" name="job_leaving_date[]" placeholder="dd/mm/yyyy">
                </div>
                <div class="border border-bottom-0 col-md-1 p-0">
                    <input type="text" class="form-control rounded-0" name="total_period[]" placeholder="XXXXX">
                </div>
                <div class="border border-bottom-0 col-md-2 p-0">
                    <input type="text" class="form-control rounded-0 datepicker" name="completion_date[]" placeholder="dd/mm/yyyy">
                </div>
                <div class="border border-bottom-0 col-md-1 p-0">
                    <select id="districts" name="service_completion_status[]" class="form-control rounded-0">
                        <option value="volvo">Yes</option>
                        <option value="saab">No</option>
                    </select>
                </div>
                <div class="border border-bottom-0 col-md-1 p-0">
                    <select id="districts" name="attested_by_factory_manager[]"  class="form-control rounded-0">
                        <option value="volvo">Yes</option>
                        <option value="saab">No</option>
                    </select>
                </div>
                <div class="border border-bottom-0 col-md-1 p-0">
                    <select id="districts" name="attested_by_dol[]" class="form-control rounded-0">
                        <option value="volvo">Yes</option>
                        <option value="saab">No</option>
                    </select>
                </div>
                <div class="border border-bottom-0 col-md-1 p-0">
                    <select id="districts" name="attested_by_labor[]" class="form-control rounded-0">
                        <option value="volvo">Yes</option>
                        <option value="saab">No</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <button id="removeServiceDetailButton" type="button" class="btn btn-danger" onclick="removeServiceDetail(event)"><strong>-</strong></button>
                </div>
            </div>
            <div class="form-row">
                <div class="float-right ml-auto">
                    <label class="float-right" >Accumulated Service Period : 2.11 Years</label>
                </div>
            </div>
        </div>
    </div>
</div>
