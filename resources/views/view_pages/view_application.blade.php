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
    <meta name="index_id" content="{{ $data['index_id'] ?? ''}}">
{{--    <meta name="index_id" content="13">--}}
</head>
<body>
    <div class="container-fluid">
        <!-- Content here -->
        <div id="container_holder">
            @include('view_pages.page_01_view')
            @include('view_pages.page_02_view')
            @include('view_pages.page_03_view')
            @include('view_pages.page_04_view')
            @include('view_pages.page_05_view')
            @include('view_pages.page_06_view')
            @include('view_pages.page_07_view')
        </div>
    </div>
</body>
</html>