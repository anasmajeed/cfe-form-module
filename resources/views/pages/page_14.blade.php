<div id="page_14" style="display:none;">
    <form id="page_14_form">
    <div class="col-md-12 mt-2">
        <label for="">Provisional Letter From PWWB:</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="form-row">
                <div class="form-group  col-md-4">
                    <label>Status:</label>
                    <select  name="status" class="form-control">
                        <option value="issued" {{ $data ? $data['provisional_claim_details']['status'] == 'issued' ? 'selected' : '' : ''}}>
                        Issued</option>
                        <option value="not_issued" {{ $data ? $data['provisional_claim_details']['status'] == 'not_issued' ? 'selected' : '' : ''}}>
                        Not Issued</option>
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label>Date:</label>
                    <input type="text" class="form-control text-center datepicker" name="provisional_letter_date" placeholder="yyyy-mm-dd"
                    value="{{$data ? $data['provisional_claim_details']['provisional_letter_date'] : ''}}">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-4">
        <label for="">Claim From PWWB:</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Amount of Claim Due:</label>
                    <input type="text" class="form-control text-center" name="claim_due" placeholder="XXXXX"
                    value="{{$data ? $data['provisional_claim_details']['claim_due'] : ''}}">
                </div>
                <div class="form-group col-md-3">
                    <label>Status of Claim Received:</label>
                    <select  name="claim_status" class="form-control">
                        <option value="received" {{ $data ? $data['provisional_claim_details']['claim_status'] == 'received' ? 'selected' : '' : ''}}>
                        Received</option>
                        <option value="Rejected" {{ $data ? $data['provisional_claim_details']['claim_status'] == 'Rejected' ? 'selected' : '' : ''}}>
                        Rejected</option>
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label>Ammount of Claim Received:</label>
                    <input type="text" class="form-control text-center" name="claim_received" placeholder="XXXXX"
                    value="{{$data ? $data['provisional_claim_details']['claim_received'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label>Date:</label>
                    <input type="text" class="form-control text-center datepicker" name="claim_date" placeholder="yyyy-mm-dd"
                    value="{{$data ? $data['provisional_claim_details']['claim_date'] : ''}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Reason:</label>
                    <input type="text" class="form-control text-center" name="reason" placeholder="XXXXX"
                    value="{{$data ? $data['provisional_claim_details']['reason'] : ''}}">
                </div>
                <div class="form-group col-md-3">
                    <label>CFE Fee:</label>
                    <input type="text" class="form-control text-center" name="cfe_fee" placeholder="XXXXX"
                    value="{{$data ? $data['provisional_claim_details']['cfe_fee'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label>Recovery From Studen:</label>
                    <input type="text" class="form-control text-center" name="recovery_from_student"
                    placeholder="XXXXX"
                    value="{{$data ? $data['provisional_claim_details']['recovery_from_student'] : ''}}">
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
