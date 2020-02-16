<div id="page_12" style="display:none;">
    <div class="col-md-12 mt-2">
        <label for="">Transport Details:</label>
    </div>
    <div class="card shadow p-3 w-100">
        <div class="card-body ">
            <div class="form-row">
                <div class="form-group  col-md-4">
                    <label>Transport Facility:</label>
                    <select  name="transport_facility" class="form-control">
                        <option value="yes" {{ $data ? $data['transport_hostel_details']['transport_facility'] == 'yes' ? 'selected' : '' : ''}}>
                        Yes</option>
                        <option value="no" {{ $data ? $data['transport_hostel_details']['transport_facility'] == 'no' ? 'selected' : '' : ''}}>
                        No</option>
                    </select>
                </div>
                <div class="form-group  col-md-3">
                    <label>Bus Stop:</label>
                    <input type="text" class="form-control text-center" name="bus_stop" placeholder="XXXXX"
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
                    <select  name="hostel_facility" class="form-control">
                        <option value="yes" {{ $data ? $data['transport_hostel_details']['hostel_facility'] == 'yes' ? 'selected' : '' : ''}}>
                        Yes</option>
                        <option value="no" {{ $data ? $data['transport_hostel_details']['hostel_facility'] == 'no' ? 'selected' : '' : ''}}>
                        No</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Hostel Name:</label>
                    <input type="text" class="form-control text-center" name="hostel_name" placeholder="XXXXX"
                    value="{{$data ? $data['transport_hostel_details']['hostel_name'] : ''}}">
                </div>
                <div class="form-group col-md-3">
                    <label>Address:</label>
                    <input type="text" class="form-control text-center" name="address" placeholder="XXXXX"
                    value="{{$data ? $data['transport_hostel_details']['address'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label>Manager's Name:</label>
                    <input type="text" class="form-control text-center" name="manager_name" placeholder="XXXXX"
                    value="{{$data ? $data['transport_hostel_details']['manager_name'] : ''}}">
                </div>
                <div class="form-group  col-md-3">
                    <label>Manager's Contact No:</label>
                    <input type="text" class="form-control text-center" name="manager_contact"
                           placeholder="+92-XXX-XXXXXXX"
                    value="{{$data ? $data['transport_hostel_details']['manager_contact'] : ''}}">
                </div>
            </div>
        </div>
    </div>
</div>
