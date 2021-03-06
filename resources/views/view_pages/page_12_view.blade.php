
    <div class="col-md-12 mt-2">
        <label for="">Transport Details:</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="form-row">
                <div class="form-group  col-md-4">
                    <label @if( !$data['transport_hostel_details']['transport_facility']) class="text-danger" @endif><strong>Transport Facility:</strong></label>
                    <label>
                        {{$data && $data['transport_hostel_details']['transport_facility'] ? $data['transport_hostel_details']['transport_facility'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label @if( !$data['transport_hostel_details']['bus_stop']) class="text-danger" @endif><strong>Bus Stop:</strong></label>
                    <label>
                        {{$data && $data['transport_hostel_details']['bus_stop'] ? $data['transport_hostel_details']['bus_stop'] : '--'}}
                    </label>
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
                    <label @if( !$data['transport_hostel_details']['hostel_facility']) class="text-danger" @endif><strong>Hostel Facility:</strong></label>
                    <label>
                        {{$data && $data['transport_hostel_details']['hostel_facility'] ? $data['transport_hostel_details']['hostel_facility'] : '--'}}
                    </label>
                </div>
            </div>
            <div class="form-row" id="hostel_facility_div">
                <div class="form-group col-md-3">
                    <label @if( !$data['transport_hostel_details']['hostel_name']) class="text-danger" @endif><strong>Hostel Name:</strong></label>
                    <label>
                        {{$data && $data['transport_hostel_details']['hostel_name'] ? $data['transport_hostel_details']['hostel_name'] : '--'}}
                    </label>
                </div>
                <div class="form-group col-md-3">
                    <label @if( !$data['transport_hostel_details']['address']) class="text-danger" @endif><strong>Address:</strong></label>
                    <label>
                        {{$data && $data['transport_hostel_details']['address'] ? $data['transport_hostel_details']['address'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label @if( !$data['transport_hostel_details']['manager_name']) class="text-danger" @endif><strong>Manager's Name:</strong></label>
                    <label>
                        {{$data && $data['transport_hostel_details']['manager_name'] ? $data['transport_hostel_details']['manager_name'] : '--'}}
                    </label>
                </div>
                <div class="form-group  col-md-3">
                    <label @if( !$data['transport_hostel_details']['manager_contact']) class="text-danger" @endif><strong>Manager's Contact No:</strong></label>
                    <label>
                        {{$data && $data['transport_hostel_details']['manager_contact'] ? $data['transport_hostel_details']['manager_contact'] : '--'}}
                    </label>
                </div>
            </div>
        </div>
    </div>