<div id="page_12" style="display:none;">
    <form id="page_12_form">
    <div class="col-md-12 mt-2">
        <label for="">Transport Details:</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="form-row">
                <div class="form-group  col-md-4">
                    <label>Transport Facility:</label>
                    <select id="transport_facility_page12" onchange="setBusStopDisplayPage12()" name="transport_facility" class="form-control">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['transport_hostel_details']['transport_facility'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div id="bus_stop_page12" class="form-group col-md-3" style="display: none">
                    <label>Bus Stop:</label>
                    <input type="text" class="form-control text-center" name="bus_stop" placeholder="Enter Bus Stop"
                    value="{{$data ? $data['transport_hostel_details']['bus_stop'] : ''}}">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-2">
        <label for="">Hostel Details:</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Hostel Facility:</label>
                    <select id="hostel_facility_select" name="hostel_facility" class="form-control" onchange="setHostelRowDisplay()">
                        <option value="" selected disabled>--select--</option>
                        @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                            <option value="{{$key}}" {{ $data ? $data['transport_hostel_details']['hostel_facility'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row" id="hostel_facility_div" style="display: none">
                <div class="form-group col-md-3">
                    <label>Hostel Name:</label>
                    <input type="text" class="form-control text-center" name="hostel_name" placeholder="Enter Hostel Name"
                    value="{{$data ? $data['transport_hostel_details']['hostel_name'] : ''}}">
                </div>
                <div class="form-group col-md-3">
                    <label>Address:</label>
                    <input type="text" class="form-control text-center" name="address" placeholder="Enter Address"
                    value="{{$data ? $data['transport_hostel_details']['address'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label>Manager's Name:</label>
                    <input onkeyup="alphabetsOnly(event)" type="text" class="form-control text-center" name="manager_name" placeholder="Enter Manager's Name"
                    value="{{$data ? $data['transport_hostel_details']['manager_name'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label>Manager's Contact No:</label>
                    <input onkeyup="appendPhonePrefix(event)" type="text" class="form-control text-center" name="manager_contact"
                           placeholder="+92-XXX-XXXXXXX"
                    value="{{$data ? $data['transport_hostel_details']['manager_contact'] : ''}}">
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

@section('script_page_12')
    <script>
        setHostelRowDisplay();
        setBusStopDisplayPage12();

        $('input[name="manager_contact"]').each(function (index,value) {
            $(value).mask('+92-000-0000000');
        });

        function setHostelRowDisplay() {
            let selected = $('#hostel_facility_select option:selected').val();
            if(selected == 'yes') {
                $('#hostel_facility_div').fadeIn();
            }
            else{
                $('#hostel_facility_div').fadeOut();
            }
        }
        function setBusStopDisplayPage12() {
            let selected = $('#transport_facility_page12').val();
            if(selected == 'yes'){
                $('#bus_stop_page12').show();
            }
            else{
                $('#bus_stop_page12').hide();
            }
        }
    </script>
@endsection
