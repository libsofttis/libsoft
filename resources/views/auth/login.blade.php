<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.htmlheader')
    <style>
        body,html{height:100%}
    </style>
</head>

<body style="background-image: url('/img/body.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <br>
    <br>
    <br>
    <!--Grid row-->

    <div class="row wow fadeIn aling-items-center" style="margin-right:0px; margin-left:0px; margin-top:0px;">
        <div class="col-md-8 ">
            <img src="/img/logo3.png" class="img-fluid z-depth-1-half" alt="">
        </div>
        
        <div class="col-md-4">
            <!--Form with header-->
            <div class="card bg-transparent">
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <!--Header-->
                        <div class="form-header  blue-grey darken-3">
                            <h3>
                                <i class="fa fa-lock white-text"></i> Login:
                            </h3>
                        </div>

                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix white-text"></i>
                            <input style="color: white" type="email" id="email" class="form-control validate" name="email">
                            <label style="color: orange" for="email">Your email</label>
                        </div>

                        <br>

                        <div class="md-form">
                            <i class="fa fa-lock prefix white-text"></i>
                            <input style="color: white" type="password" id="password" class="form-control validate" name="password">
                            <label style="color: orange" for="password">Your password</label>
                        </div>

                        <br>

                        <div class="text-center">
                            <button class="btn btn-  blue-grey darken-3 waves-effect waves-light">Login</button>
                        </div>
                    </form>
                    <!-- Form -->
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    
                    <div style="color: orange" class="footer-copyright py-3 text-center" alig="center">
                        © 2018 Copyright:
                        <a href="#"> Libsoft.com </a>
                    </div>
                    
                </div>
            </div>
            <!--/Form with header-->
        </div>
        <div class="col-md"></div>
    </div>
    <!--Grid row-->

    <!-- SCRIPTS -->
    @include('layouts.scripts')

</body>

</html>