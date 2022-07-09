<!DOCTYPE html>
<html lang="en" ng-app="myapp" ng-controller="LoginCustomer">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/admin/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo tài khoản</h1>
                            </div>
                            @{{sai}}
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="label">Tên Khách Hàng</label>
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" ng-model="ten_kh"  
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label class="label">Email</label>
                                            <input type="text" class="form-control form-control-user" id="exampleFirstName" ng-model="email"ng-click='sua()'>
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"  ng-model='pass' placeholder="Nhập mật khẩu"ng-click='sua()'>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"  ng-model='pass2' placeholder="Nhập lại mật khẩu" ng-click='sua()'>
                                    </div>
                                </div>
                                    
                                    <div class="form-group">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label class="label">Địa chỉ</label>
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"  ng-model='dia_chi' >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label">SĐT</label>
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"  ng-model='sdt'>
                                </div>
                                    </div>
                                </div>
                                
                                <a type="submit" href="./" ng-click='dangky(email)' class="btn btn-primary btn-user btn-block">
                                    Tạo tài khoản
                                </a>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Đăng ký với Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Đăng ký với Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Quên mật khẩu?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/login">Bạn có tài khoản? Đăng nhập!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

        <!-- Bootstrap core JavaScript-->
        <script src="/admin/startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js"></script>
    <script src="/admin/startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/admin/startbootstrap-sb-admin-2-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/admin/startbootstrap-sb-admin-2-gh-pages/js/sb-admin-2.min.js"></script>
    <script src="/js/angular.min.js"></script>
    <script src="/js/userKH.js"></script>
    
</body>

</html>
