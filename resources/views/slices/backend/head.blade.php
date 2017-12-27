<title>Anak Rimba - Admin</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="{{ URL::asset('public/backend/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/backend/css/animate.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/backend/css/demo.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/backend/css/light-bootstrap-dashboard.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/backend/css/pe-icon-7-stroke.css') }}" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Anak Rimba
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{ url('view_course') }}">
                        <i class="fa fa-terminal"></i><p>Course</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('view_registration') }}">
                        <i class="fa fa-sign-in"></i><p>Registration</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('view_payment') }}">
                        <i class="fa fa-bell"></i><p>Payment Confirmation</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('view_testimony') }}">
                        <i class="fa fa-pencil-square-o"></i><p>Testimony</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="">
                                <p>Account</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
