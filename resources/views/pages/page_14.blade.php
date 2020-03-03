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
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.status') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['provisional_claim_details']['status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label>Date:</label>
                    <input type="text" class="form-control text-center datepicker" name="provisional_letter_date" placeholder="dd/mm/yyyy"
                    value="{{$data && $data['provisional_claim_details']['provisional_letter_date']? date('d/m/Y',strtotime($data['provisional_claim_details']['provisional_letter_date'])) : ''}}">
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
                    <select onchange="setDisplayForClaimReceivedPage14()" id="claim_received_page14" name="claim_status" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.claim_status') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['provisional_claim_details']['claim_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div id="amount_page14" class="form-group col-md-3" style="display: none">
                    <label>Amount of Claim Received:</label>
                    <input type="text" class="form-control text-center" name="claim_received" placeholder="XXXXX"
                    value="{{$data ? $data['provisional_claim_details']['claim_received'] : ''}}">
                </div>
                <div id="date_page14" class="form-group col-md-3" style="display: none">
                    <label>Date:</label>
                    <input type="text" class="form-control text-center datepicker" name="claim_date" placeholder="dd/mm/yyyy"
                    value="{{$data && $data['provisional_claim_details']['claim_date'] ? date('d/m/Y',strtotime($data['provisional_claim_details']['claim_date'])) : ''}}">
                </div>
            </div>
            <div class="form-row" id="rejected_row_page14" style="display: none">
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
                    <label>Recovery From Student:</label>
                    <input type="text" class="form-control text-center" name="recovery_from_student"
                    placeholder="XXXXX"
                    value="{{$data ? $data['provisional_claim_details']['recovery_from_student'] : ''}}">
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@section('script_page_14')
    <script>
        setDisplayForClaimReceivedPage14();
        function setDisplayForClaimReceivedPage14() {
            let selected = $('#claim_received_page14').val();
            if(selected == 'received'){
                $('#amount_page14').fadeIn();
                $('#date_page14').fadeIn();
            }
            else if(selected == 'rejected'){
                $('#amount_page14').fadeOut();
                $('#date_page14').fadeOut();
                $('#rejected_row_page14').fadeIn();
            }
            else{
                $('#amount_page14').fadeOut();
                $('#date_page14').fadeOut();
                $('#rejected_row_page14').fadeOut();
            }
        }
    </script>
@endsection
