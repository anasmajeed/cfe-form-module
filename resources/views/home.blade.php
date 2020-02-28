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

    <title>Home Page</title>

</head>
<body>

<div class="container-fluid">
    <!-- Content here -->
    <div id="container_holder">
        <div class="card mt-5">
            <div class="card-header">
                List of All Participant's
            </div>
            <div class="card-body">
                <div class="form-row mb-3">
                    <div class="col-md-4 text-center border-1 border border-dark">
                        Index Id
                    </div>
                    <div class="col-md-4 text-center border-1 border border-dark">
                        File Receiving Number
                    </div>
                    <div class="col-md-4 text-center border-1 border border-dark">
                        Action
                    </div>
                </div>
                @foreach($mainTable as $value)
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <input class="form-control text-center" name="index_id" disabled
                                   value="{{$value->id}}">
                        </div>
                        <div class="col-md-4">
                            <input class="form-control text-center" disabled
                                   value="{{$value->file_received_number}}">
                        </div>
                        <div class="col-md-2">
                            <a href="/edit/{{$value->id}}" class="btn btn-outline-primary w-100">EDIT</a>
                        </div>
                        <div class="col-md-2">
                            <a href="/view/{{$value->id}}" class="btn btn-outline-info w-100">VIEW</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
</body>
</html>
