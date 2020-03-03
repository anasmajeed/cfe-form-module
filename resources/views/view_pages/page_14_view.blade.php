    <div class="col-md-12 mt-2">
        <label for="">Provisional Letter From PWWB:</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="form-row">
                <div class="form-group  col-md-4">
                    <label @if( !$data['provisional_claim_details']['status']) class="text-danger" @endif><strong>Status:</strong></label>
                    <label>
                        {{$data && $data['provisional_claim_details']['status'] ? $data['provisional_claim_details']['status'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label @if( !$data['provisional_claim_details']['provisional_letter_date']) class="text-danger" @endif><strong>Date:</strong></label>
                    <label>
                        {{$data && $data['provisional_claim_details']['provisional_letter_date'] ? $data['provisional_claim_details']['provisional_letter_date'] : '--'}}
                    </label>
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
                    <label @if( !$data['provisional_claim_details']['claim_due']) class="text-danger" @endif><strong>Amount of Claim Due:</strong></label>
                    <label>
                        {{$data && $data['provisional_claim_details']['claim_due'] ? $data['provisional_claim_details']['claim_due'] : '--'}}
                    </label>
                </div>
                <div class="form-group col-md-3">
                    <label @if( !$data['provisional_claim_details']['claim_status']) class="text-danger" @endif><strong>Status of Claim Received:</strong></label>
                    <label>
                        {{$data && $data['provisional_claim_details']['claim_status'] ? $data['provisional_claim_details']['claim_status'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label @if( !$data['provisional_claim_details']['claim_received']) class="text-danger" @endif><strong>Ammount of Claim Received:</strong></label>
                    <label>
                        {{$data && $data['provisional_claim_details']['claim_received'] ? $data['provisional_claim_details']['claim_received'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label @if( !$data['provisional_claim_details']['claim_date']) class="text-danger" @endif><strong>Date:</strong></label>
                    <label>
                        {{$data && $data['provisional_claim_details']['claim_date'] ? $data['provisional_claim_details']['claim_date'] : '--'}}
                    </label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label @if( !$data['provisional_claim_details']['reason']) class="text-danger" @endif><strong>Reason:</strong></label>
                    <label>
                        {{$data && $data['provisional_claim_details']['reason'] ? $data['provisional_claim_details']['reason'] : '--'}}
                    </label>
                </div>
                <div class="form-group col-md-3">
                    <label @if( !$data['provisional_claim_details']['cfe_fee']) class="text-danger" @endif><strong>CFE Fee:</strong></label>
                    <label>
                        {{$data && $data['provisional_claim_details']['cfe_fee'] ? $data['provisional_claim_details']['cfe_fee'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label @if( !$data['provisional_claim_details']['recovery_from_student']) class="text-danger" @endif><strong>Recovery From Studen:</strong></label>
                    <label>
                        {{$data && $data['provisional_claim_details']['recovery_from_student'] ? $data['provisional_claim_details']['recovery_from_student'] : '--'}}
                    </label>
                </div>
            </div>
        </div>
    </div>