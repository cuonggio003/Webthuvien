

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Logout</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <h1 class="text-center">
                    Đổi mật khẩu
                </h1>
                
                <div class="card">
                    <div class="card-body login-card-body">
                       
                        @include('alert')
                        <form action="" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="password" id="currentPassword" class="form-control" name="currentPassword"
                                    placeholder="Mật khẩu cũ">
                                <div class="input-group-append">
                                    <span class="input-group-btn" id="eyeSlash">
                                        <button class="btn btn-default reveal" onclick="visibility()" type="button"><i
                                                class="fa fa-eye-slash"></i></button>
                                    </span>
                                    <span class="input-group-btn" id="eyeShow" style="display: none;">
                                        <button class="btn btn-default reveal" onclick="visibility()" type="button"><i
                                                class="fa fa-eye"></i></button>
                                    </span>
        
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="newPassword" class="form-control" name="newPassword"
                                    placeholder="Mật khẩu mới">
                                <div class="input-group-append">
        
                                    <span class="input-group-btn" id="eyeSlash1">
                                        <button class="btn btn-default reveal" onclick="visibility1()" type="button"><i
                                                class="fa fa-eye-slash"></i></button>
                                    </span>
                                    <span class="input-group-btn" id="eyeShow1" style="display: none;">
                                        <button class="btn btn-default reveal" onclick="visibility1()" type="button"><i
                                                class="fa fa-eye"></i></button>
                                    </span>
        
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="confirmPassword" class="form-control" name="confirmPassword"
                                    placeholder="Nhập lại mật khẩu">
                                <div class="input-group-append">
        
                                    <span class="input-group-btn" id="eyeSlash2">
                                        <button class="btn btn-default reveal" onclick="visibility2()" type="button"><i
                                                class="fa fa-eye-slash"></i></button>
                                    </span>
                                    <span class="input-group-btn" id="eyeShow2" style="display: none;">
                                        <button class="btn btn-default reveal" onclick="visibility2()" type="button"><i
                                                class="fa fa-eye"></i></button>
                                    </span>
        
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Xác nhận
                            </button>
                            <button href="{{ route('home.index') }}" class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
                        </form>
        
        
                    </div>
                    
                </div>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>

    <script>
        function visibility() {
            var x = document.getElementById('currentPassword');
            if (x.type === 'password') {
                x.type = "text";
                $('#eyeShow').show();
                $('#eyeSlash').hide();
            } else {
                x.type = "password";
                $('#eyeShow').hide();
                $('#eyeSlash').show();
            }
        }
    </script>


    <script>
        function visibility1() {
            var x = document.getElementById('newPassword');
            if (x.type === 'password') {
                x.type = "text";
                $('#eyeShow1').show();
                $('#eyeSlash1').hide();
            } else {
                x.type = "password";
                $('#eyeShow1').hide();
                $('#eyeSlash1').show();
            }
        }
    </script>


    <script>
        function visibility2() {
            var x = document.getElementById('confirmPassword');
            if (x.type === 'password') {
                x.type = "text";
                $('#eyeShow2').show();
                $('#eyeSlash2').hide();
            } else {
                x.type = "password";
                $('#eyeShow2').hide();
                $('#eyeSlash2').show();
            }
        }
    </script>
</body>
</html>
