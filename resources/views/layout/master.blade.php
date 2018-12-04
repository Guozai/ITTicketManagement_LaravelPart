<html>
<head>

    <link rel="stylesheet" type="text/css" href="css/layout.css">

    <a href="https://www.rmit.edu.au/"><img src="{{URL::asset('/image/logo.png')}}" alt="profile Pic" height="100" width="200" ></a>
    <h4>Service & Support</h4>


    <title> @yield('title') </title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
@include('shared.navbar')
<div class="container">
    @yield('content')
</div>
</body>
<footer>
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="row py-0">
                        <div class="col-sm-1 hidden-md-down">
                            <a class="bg-circle bg-info" href="#">
                                <i class="fa fa-2x fa-fw fa-address-card" aria-hidden="true "></i>
                            </a>
                        </div>
                        <div class="col-sm-11 text-white">
                            <div>
                                <p> </p>
                                <p>COPYRIGHT © 2017 RMIT UNIVERSITY</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-inline-block">
                        <div class="bg-circle-outline d-inline-block" style="background-color:#3b5998">
                            <a href="https://www.facebook.com/"><i class="fa fa-2x fa-fw fa-facebook text-white"></i>
                            </a>
                        </div>
                        <div class="bg-circle-outline d-inline-block" style="background-color:#4099FF">
                            <a href="https://twitter.com/">
                                <i class="fa fa-2x fa-fw fa-twitter text-white"></i></a>
                        </div>

                        <div class="bg-circle-outline d-inline-block" style="background-color:#0077B5">
                            <a href="https://www.linkedin.com/company/">
                                <i class="fa fa-2x fa-fw fa-linkedin text-white"></i></a>
                        </div>
                        <div class="bg-circle-outline d-inline-block" style="background-color:#d34836">
                            <a href="https://www.google.com/">
                                <i class="fa fa-2x fa-fw fa-google text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>