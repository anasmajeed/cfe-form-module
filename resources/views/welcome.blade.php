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
    <meta name="index_id" content="13">
</head>
<body>

<div class="container-fluid">
    <!-- Content here -->
    <div id="container_holder">
        @include('pages.page_01')
        @include('pages.page_02')
        @include('pages.page_03')
        @include('pages.page_04')
        @include('pages.page_05')
        @include('pages.page_06')
        @include('pages.page_07')
        @include('pages.page_08')
        @include('pages.page_09')
        @include('pages.page_10')
        @include('pages.page_11')
        @include('pages.page_12')
        @include('pages.page_13')
        @include('pages.page_14')
        @include('pages.page_15')
        @include('pages.page_16')
        @include('pages.page_17')
        @include('pages.page_18')
    </div>
    <div class="mt-4 mb-4 pb-5 clearfix">
        <button id="prevButton" type="button" class="btn btn-primary float-left" onclick="prevForm()">Previous</button>
        <button id="nextButton" type="button" class="btn btn-primary float-right" onclick="nextForm()">Next</button>
        <button id="saveButton" type="button" class="btn btn-primary float-right" onclick="saveForm()">Save</button>
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
<script>
    let container_no = 0;
    let container_array = ['#page_01', '#page_02', '#page_03', '#page_04', '#page_05', '#page_06', '#page_07', '#page_08', '#page_09', '#page_10', '#page_11', '#page_12', '#page_13', '#page_14', '#page_15', '#page_16', '#page_17', '#page_18'];
    let api_url_array = ['/index-table','/worker-personal-details','/worker-bank-security-details','/factory-service-details','/factory-death-manager-details','/student-personal-details'];
    let index_id = $('meta[name="index_id"]').attr('content');
    setDisplayForButtons();
    $('.datepicker').each(function (index, pick) {
        let picker = $(pick).datepicker({
            format: 'yyyy-mm-dd'
        }).on('changeDate', function (ev) {
            picker.hide();
        }).data('datepicker');
    });

    setDisplayNone();

    function setDisplayNone() {

        container_array.forEach(function (value) {
            $(value).attr('style', 'display:none');
        });
        $(container_array[container_no]).attr('style', 'display:block');
    }

    function nextForm() {
        if (container_no < container_array.length) {
            apiRequest();
            container_no++;
            setDisplayNone();
            setDisplayForButtons();
            scrollToTop();
        }
    }

    function prevForm() {
        if (container_no > 0) {
            container_no--;
            setDisplayNone();
            setDisplayForButtons();
            scrollToTop();
        }
    }

    function setDisplayForButtons() {
        if (container_no == 0) {
            $('#prevButton').attr('style', 'display:none');
        } else {
            $('#prevButton').attr('style', 'display:block');
        }

        if (container_no == container_array.length - 1) {
            $('#nextButton').attr('style', 'display:none');
            $('#saveButton').attr('style', 'display:block');
        } else {
            $('#nextButton').attr('style', 'display:block');
            $('#saveButton').attr('style', 'display:none');
        }
    }

    function scrollToTop() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
    }

    function apiRequest() {
        if (api_url_array.length > container_no) {
            let form = $(container_array[container_no] + '_form').serializeArray();
            form.push({name: "index_id", value: index_id});
            let csrf_token = $('meta[name="csrf-token"]').attr('content');
            let index_number = container_no;
            let request = $.ajax({
                url: api_url_array[container_no],
                method: "POST",
                data: form,
                headers: {
                    'X-CSRF-TOKEN': csrf_token
                }
            });

            request.done(function (response) {
                if (api_url_array[index_number] == '/index-table') {
                    if(response.indexObject)
                        index_id = response.indexObject.id;
                }
            });

            request.fail(function (jqXHR, textStatus) {
                alert("Request failed: " + textStatus);
            });
        }
    }
</script>
@yield('script_page_1')
@yield('script_page_4')
</body>
</html>
