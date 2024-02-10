<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>
    {{-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/pricing.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="css/sb-admin-2.min.css">
=======
    <link rel="stylesheet" href="css/cover.css">
>>>>>>> 8a52976a255e05811f3fd3a15ad770559d0f010b
    <!-- Custom styles for this template-->
    {{-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> --}}
    @Vite('resources/css/fontawesome.css')
</head>

<body>
    {{ $slot }}
    @Vite(['resources/js/app.js','resources/css/sb-admin-2.css'])
</body>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
