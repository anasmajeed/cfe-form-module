<div id="page_06" style="display:none;">
    <form id="page_06_form">
        <div class="col-md-12 mt-4">
            <label>Personal Data of Student</label>
        </div>
        <div class="card shadow p-3 w-100">
            <div class="card-body ">
                <div class="form-row">
                    <div class="form-group  col-md-6">
                        <label>Name:</label>
                        <input onkeyup="alphabetsOnly(event)" type="text" name="name" class="form-control text-center" placeholder="Enter Name"
                               value="{{$data ? $data['student_personal_detail']['name'] : ''}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Father's Name:</label>
                        <input onkeyup="alphabetsOnly(event)" type="text" class="form-control text-center" name="father_name" placeholder="Enter Father's Name"
                               value="{{$data ? $data['student_personal_detail']['father_name'] : ''}}">
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <label for="">Student's CNIC/ B-Form No</label>
                </div>
                <div class="card shadow p-3 w-100">
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>CNIC/ B-Form No:</label>
                                <input type="text" class="form-control text-center" name="cnic_no"
                                       value="{{$data ? $data['student_personal_detail']['cnic_no'] : ''}}"
                                       placeholder="XXXXX-XXXXXXX-X">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Quantity Min. (04):</label>
                                <input onkeyup="numericOnly(event)" type="number" class="form-control text-center" name='quantity' placeholder="Enter Quantity"
                                       value="{{$data ? $data['student_personal_detail']['quantity'] : ''}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Attested by Gazetted Officer:</label>
                                <select name="student_cnic_attested" class="form-control">
                                    <option value="" selected disabled>--select--</option>
                                    @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                        <option value="{{$key}}" {{ $data ? $data['student_personal_detail']['student_cnic_attested'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-3 mt-4 w-100">
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group  col-md-3">
                                <label>Date of Birth:</label>
                                <input type="text" class="form-control text-center datepicker" name="date_of_birth"
                                       placeholder="dd/mm/yyyy"
                                       value="{{$data && $data['student_personal_detail']['date_of_birth'] ? date('d/m/Y',strtotime($data['student_personal_detail']['date_of_birth'])) : ''}}">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Present Address:</label>
                                <input type="text" class="form-control text-center" name="present_address"
                                       placeholder="XXXXX"
                                       value="{{$data ? $data['student_personal_detail']['present_address'] : ''}}">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Marital Status:</label>
                                <select name="marital_status" class="form-control">
                                    <option value="" selected disabled>--select--</option>
                                    @foreach(\Config::get('constants.marital_status') as $key => $value)
                                        <option value="{{$key}}" {{ $data ? $data['student_personal_detail']['marital_status'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Contact No 1:</label>
                                <input onkeyup="appendPhonePrefix(event)" type="text" class="form-control text-center" name="contact_no_1"
                                       placeholder="+92-XXX-XXXXXXX"
                                       value="{{$data ? $data['student_personal_detail']['contact_no_1'] : ''}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md-3">
                                <label>Contact No 2:</label>
                                <input onkeyup="appendPhonePrefix(event)" type="text" class="form-control text-center " name="contact_no_2"
                                       placeholder="+92-XXX-XXXXXXX"
                                       value="{{$data ? $data['student_personal_detail']['contact_no_2'] : ''}}">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Postal Address:</label>
                                <input type="text" class="form-control text-center" name="postal_address"
                                       placeholder="XXXXX"
                                       value="{{$data ? $data['student_personal_detail']['postal_address'] : ''}}">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Email:</label>
                                <input type="email" class="form-control text-center" name="email"
                                       value="{{$data ? $data['student_personal_detail']['email'] : ''}}"
                                       placeholder="example@gmail.com">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Signature on Page 2 (Once) &amp; 3 (Twice)</label>
                                <select name="signature" class="form-control">
                                    <option value="" selected disabled>--select--</option>
                                    @foreach(\Config::get('constants.general_yes_no') as $key => $value)
                                        <option value="{{$key}}" {{ $data ? $data['student_personal_detail']['signature'] == $key ? 'selected' : '' : ''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@section('script_page_6')
    <script>
        $('input[name="cnic_no"]').each(function (index,value) {
            $(value).mask('00000-0000000-0');
        });
    </script>
@endsection
