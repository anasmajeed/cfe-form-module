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
</head>
<body>

<div class="container-fluid">
    <!-- Content here -->
    <div id="container_holder">
        @include('pages.page_01')
        @include('pages.page_02')
        @include('pages.page_03')
        @include('pages.page_04')
    </div>
{{--    @include('pages.page_01')--}}
{{--    @include('pages.page_02')--}}
{{--    @include('pages.page_03')--}}
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
    let container_array = ['#page_01','#page_02','#page_03','#page_04'];
    setDisplayForButtons();
    let picker = $('.datepicker').datepicker({
        format:'dd/mm/yyyy'
    }).on('changeDate', function(ev) {
            picker.hide();
    }).data('datepicker');

    setDisplayNone();

    function setDisplayNone(){

        container_array.forEach(function (value) {
            $(value).attr('style','display:none');
        });
        $(container_array[container_no]).attr('style','display:block');
    }
    function nextForm() {
        if(container_no < container_array.length) {
            container_no++;
            setDisplayNone();
            setDisplayForButtons();
            scrollToTop();
        }
    }

    function prevForm() {
        if(container_no > 0) {
            container_no--;
            setDisplayNone();
            setDisplayForButtons();
            scrollToTop();
        }
    }

    function setDisplayForButtons() {
        if(container_no == 0){
            $('#prevButton').attr('style','display:none');
        }
        else{
            $('#prevButton').attr('style','display:block');
        }

        if(container_no == container_array.length - 1){
            $('#nextButton').attr('style','display:none');
            $('#saveButton').attr('style','display:block');
        }
        else{
            $('#nextButton').attr('style','display:block');
            $('#saveButton').attr('style','display:none');
        }
    }

    function scrollToTop() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
    }
</script>
@yield('scripts')
</body>
</html>
