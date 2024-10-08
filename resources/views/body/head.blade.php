<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Admin Page</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">



    <!-- Styles -->


    <style>
        /* General Layout */
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            background-color: #f8f9fc;
        }

        /* Page Wrapper */
        #wrapper {
            display: flex;
            flex-direction: row;
            height: 100vh;
        }

        /* Sidebar */
        #sidebar {
            background-color: #0044cc;
            /* Matching header color */
            color: white;
            width: 250px;
            min-height: 100vh;
            padding: 20px;
        }

        #sidebar a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        #sidebar a:hover {
            background-color: #003399;
            /* Darker shade for hover */
        }

        /* Content Wrapper */
        #content-wrapper {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            background-color: #ffffff;
            padding: 20px;
        }

        /* Topbar */
        .topbar {
            background-color: #007bff;
            /* Same as the header background */
            color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Sidebar Toggle Button */
        #sidebarToggleTop {
            background-color: transparent;
            border: none;
            color: #ffffff;
            font-size: 1.2em;
        }

        /* Logout Modal */
        .modal-content {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .modal-header,
        .modal-footer {
            background-color: #f8f9fc;
            border-color: #e3e6f0;
        }

        /* Buttons */
        .btn-primary {
            background-color: #0044cc;
            border-color: #0044cc;
            color: white;
        }

        .btn-primary:hover {
            background-color: #003399;
            border-color: #003399;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #wrapper {
                flex-direction: column;
            }

            #sidebar {
                width: 100%;
                height: auto;
            }

            #content-wrapper {
                padding: 10px;
            }

            .topbar {
                flex-direction: column;
                text-align: center;
            }
        }

        /* Scroll to Top Button */
        .scroll-to-top {
            background-color: #0044cc;
            border-radius: 50%;
            color: #ffffff;
            padding: 10px;
        }

        .scroll-to-top:hover {
            background-color: #003399;
        }

        /* Card Styles */
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-title {
            color: #0044cc;
            font-weight: bold;
            font-size: 1.25rem;
        }

        .card-body {
            padding: 20px;
        }

        /* Sidebar Header */
        .sidebar-header {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            padding: 20px 0;
        }

        /* Sidebar Links */
        .sidebar-nav a {
            display: flex;
            align-items: center;
            padding: 10px;
            color: #ffffff;
        }

        .sidebar-nav a:hover {
            background-color: #003399;
            border-radius: 4px;
        }

        /* Profile Image */
        .img-profile {
            width: 40px;
            height: 40px;
            margin-left: 10px;
            border-radius: 50%;
        }
    </style>
</head>