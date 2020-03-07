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
                    <select id="status_page10" onchange="setStatusDateDisplay()" name="status" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.status') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['provisional_claim_details']['status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3" id="status_div_page10" style="display: none">
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
                <div class="form-group col-md-3" id="status_of_claim_div_page14">
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
                    <input onkeyup="numericOnly(event)" type="text" class="form-control text-center" name="claim_received" placeholder="Enter Claim Received"
                    value="{{$data ? $data['provisional_claim_details']['claim_received'] : ''}}">
                </div>
                <div id="date_page14" class="form-group col-md-3" style="display: none">
                    <label>Date:</label>
                    <input type="text" class="form-control text-center datepicker" name="claim_date" placeholder="dd/mm/yyyy"
                    value="{{$data && $data['provisional_claim_details']['claim_date'] ? date('d/m/Y',strtotime($data['provisional_claim_details']['claim_date'])) : ''}}">
                </div>
                <div class="form-group col-md-3" id="reason_page14" style="display: none">
                    <label>Reason:</label>
                    <input type="text" class="form-control text-center" name="reason" placeholder="Enter Reason"
                    value="{{$data ? $data['provisional_claim_details']['reason'] : ''}}">
                </div>
                <div class="form-group col-md-3" id="fee_page14" style="display: none">
                    <label>CFE Fee:</label>
                    <input onkeyup="numericOnly(event)" type="text" class="form-control text-center" name="cfe_fee" placeholder="Enter CFE Fee"
                    value="{{$data ? $data['provisional_claim_details']['cfe_fee'] : ''}}">
                </div>
                <div class="form-group  col-md-3" id="recovery_page14" style="display: none">
                    <label>Recovery From Student:</label>
                    <input onkeyup="numericOnly(event)" type="text" class="form-control text-center" name="recovery_from_student"
                    placeholder="Enter Recovery from Student"
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
        setStatusDateDisplay();
        function setDisplayForClaimReceivedPage14() {
            let selected = $('#claim_received_page14').val();
            if(selected == 'received'){
                $('#amount_page14').fadeIn();
                $('#date_page14').fadeIn();
                $('#reason_page14').fadeOut();
                $('#fee_page14').fadeOut();
                $('#recovery_page14').fadeOut();
            }
            else if(selected == 'rejected'){
                $('#amount_page14').fadeOut();
                $('#date_page14').fadeOut();
                $('#reason_page14').fadeIn();
                $('#fee_page14').fadeIn();
                $('#recovery_page14').fadeIn();
            }
            else if(selected == 'notReceived'){
                $('#amount_page14').fadeOut();
                $('#date_page14').fadeOut();
                $('#reason_page14').fadeIn();
                $('#fee_page14').fadeOut();
                $('#recovery_page14').fadeOut();
            }
            else{
                $('#amount_page14').fadeOut();
                $('#date_page14').fadeOut();
                $('#reason_page14').fadeOut();
                $('#fee_page14').fadeOut();
                $('#recovery_page14').fadeOut();
            }
        }

        function setStatusDateDisplay() {
            if($('#status_page10').val() == 'issued'){
                $('#status_div_page10').fadeIn();
            }
            else{
                $('#status_div_page10').fadeOut();
            }
        }
    </script>
@endsection
