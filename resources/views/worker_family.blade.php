<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/datepicker.css')}}">

    <title>CFE FORM</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <meta name="index_id" content="{{ $data['index_id'] ?? ''}}">--}}
    <meta name="index_id" content="11">
</head>
<body>

<div class="card shadow mt-5 p-3 w-100">
            <div class="card-body" id="worker_detail_parent">
                <div class="form-row">
                    <div class="">
                        <label >Worker's Eligible Family Members</label>
                    </div>
                </div>
                <form action="/worker-family" method="GET">
                    <div class="form-row">
                        <div class="col-md-4">
                            <input value="{{$date ? $date : ''}}" name="date" class="form-control datepicker" type="text" placeholder="yyyy-mm-dd">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-outline-success">Search</button>
                        </div>
                    </div>
                </form>
                <div class="form-row pt-3">
                    <div class="border col-md-1 text-center">
                        <label><strong>File Received No.</strong></label>
                    </div>
                    <div class="border col-md-2 text-center">
                        <label><strong>Worker Name</strong></label>
                    </div>
                    <div class="border col-md-2 text-center">
                        <label><strong>Worker's CNIC</strong></label>
                    </div>
                    <div class="border col-md-1 text-center">
                        <label><strong>Student Name</strong></label>
                    </div>
                    <div class="border col-md-1 text-center">
                        <label><strong>Passed Degree</strong></label>
                    </div> 
                    <div class="border col-md-1 text-center">
                        <label><strong>Potential Degree</strong></label>
                    </div>
                    <div class="border col-md-1 text-center">
                        <label><strong>File Received Status</strong></label>
                    </div>
                    <div class="border col-md-1 text-center">
                        <label><strong>Follow-up</strong></label>
                    </div>
                </div>
                @if($workerFamily)
                    @foreach($workerFamily as $worker_details)
                        <div class="form-row" id="worker_detail">
                            <div class="border col-md-1 p-0">
                                <label>
                                {{$worker_details->IndexTable->file_received_number}}
                                </label>
                            </div>
                            <div class="border col-md-2 p-0">
                                <label>
                                    {{$worker_details['worker_name']? $worker_details['worker_name'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-2 p-0">
                                <label>
                                    {{$worker_details['worker_cnic']? $worker_details['worker_cnic'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$worker_details['student_name']? $worker_details['student_name'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$worker_details['passed_degree']? $worker_details['passed_degree'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$worker_details['potential_degree']? $worker_details['potential_degree'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$worker_details['file_received_status']? $worker_details['file_received_status'] : '--'}}
                                </label>
                            </div>
                            <div class="border col-md-1 p-0">
                                <label>
                                    {{$worker_details['follow_up']? $worker_details['follow_up'] : '--'}}
                                </label>
                            </div>
                            <div class="col-md-1">
                            <a href="/view/{{$worker_details->IndexTable->id}}" class="btn btn-outline-info w-100">VIEW</a>
                        </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
</body>
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script>
$('.datepicker').each(function (index, pick) {
        let picker = $(pick).datepicker({
            format: 'yyyy-mm-dd'
        }).on('changeDate', function (ev) {
            picker.hide();
        }).data('datepicker');
    });
</script>