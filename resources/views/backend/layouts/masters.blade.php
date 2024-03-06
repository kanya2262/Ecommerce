<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('backend.layouts.header')
    @include('backend.layouts.sidebar')
    @yield('content')
    @include('backend.layouts.footer')
 
</body>
@include('backend.layouts.scripts')

</html>