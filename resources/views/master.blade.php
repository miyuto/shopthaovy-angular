
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/partner.css">
    <link rel="stylesheet" href="css/introduction.css">
    <link rel="stylesheet" href="css/contact-us.css">
    <link rel="stylesheet" href="css/list-product.css">
    <script rel="js/banner.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    @include('header')
    @yield('content')
    @include('partner')
    @include('footer')
</body>
</html>
