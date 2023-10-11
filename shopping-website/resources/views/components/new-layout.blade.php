<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Home</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/style_global.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .cart-button:hover .material-icons-sharp,
        .account-button:hover .material-icons-sharp,
        .login-button:hover .material-icons-sharp,
        .register-button:hover .material-icons-sharp {
            color: #212529 !important;
            transition: color 0.3s;
        }

        .active-category {
            background-color: #343a40 !important;
            color: #ffffff !important;
        }

        .active-page {
            background-color: #343a40 !important;
            color: #ffffff !important;
        }

        .inactive-page {
            color: #343a40 !important;
        }

        .page-link {
            border: none !important;
            color: #343a40 !important;
        }

        .page-item.active .page-link {
            background-color: #343a40 !important;
            color: #ffffff !important;
        }

        .pagination-container {
            text-align: center;
        }

        .pagination-info {
            margin-top: 3px;
            display: inline-block;
        }

    </style>
</head>
<body>
    {{$slot}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
