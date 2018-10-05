<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V15</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-contact100">
    <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

    <div class="wrap-contact100">
        <div class="contact100-form-title" style="background-image: url({{asset('images/bg-01.jpg')}});">
				<span class="contact100-form-title-1"> Add Form</span>

            <span class="contact100-form-title-2">Feel free to drop us a line below!</span>
        </div>

        <form class="contact100-form validate-form" method="post" action="{{route('store')}}" enctype="multipart/form-data">
            @csrf
            <div class="wrap-input100 validate-input">
                <span class="label-input100">Full Name:</span>
                <input class="input100" type="text" name="name" placeholder="Enter full name">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input">
                <span class="label-input100">Phone:</span>
                <input class="input100" type="text" name="phone" placeholder="Enter phone">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input">
                <span class="label-input100">Email:</span>
                <input class="input100" type="text" name="email" placeholder="Enter email">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input">
                <span class="label-input100">Address:</span>
                <input class="input100" type="text" name="address" placeholder="Enter email">
                <span class="focus-input100"></span>
            </div>

            <div class="form-group">
                <label for="inputFileName">File Name</label>
                <input type="text" class="form-control" id="inputFileName" name="inputFileName">
                <input type="file" class="form-control-file" id="inputFile" name="inputFile">
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
						<span>Submit<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span>
                </button>
            </div>
        </form>
        <a href="{{ route('index') }}">< Back</a>
    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="{{asset('js/map-custom.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('js/main.js')}}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
