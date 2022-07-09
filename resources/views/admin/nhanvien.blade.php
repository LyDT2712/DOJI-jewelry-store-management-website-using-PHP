<!doctype html>
<html class="no-js" lang="" ng-app="myapp" ng-controller="nhanviencontroller">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Feb 2022 04:12:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN | STAFFS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="/admin/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/admin/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/admin/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/admin/fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/admin/css/animate.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="/admin/css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/admin/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Modernize js -->
    <script src="/admin/js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        @include('includes.headerad')
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            @include('includes.slidebarad')
            <!-- Sidebar Area End Here -->
            <div class="card height-auto" style="width: 90%;">
                <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Danh Sách Nhân Viên</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Đóng</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Sửa</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>ReLoad</a>
                                </div>
                            </div>
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by ID ..." class="form-control"ng-model="searchID">
                                </div>
                                <div class="col-5-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control" ng-model="searchName">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">Search</button>
                                </div>
                            </div>
                        </form>
                        <div class="col-3-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow" ng-click="showmodal(0)">Thêm mới</button>
                                </div>
                       
                        
                        <div class="table-responsive" >
                            <table class="table table-border text-nowrap" >
            <thead>
                <tr>
                    <th>TT</th>
                    <th>Ten NV</th>
                    <th>GioiTinh</th>
                    <th>NgaySinh</th>
                    <th>QueQuan</th>
                    <th>SDT</th>
                    <th>Email</th>
                    <th>CapBac</th>

                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr dir-paginate="sp in staff|orderBy:sortBy:isASC|filter:searchName|itemsPerPage:itemPerPage">
                    <td>@{{$index+1}}</td>
                    <td>@{{sp.ten_nhanvien}}</td>
                    <td>@{{sp.gioitinh}}</td>
                    <td>@{{sp.ngaysinh}}</td>
                    <td>@{{sp.quequan}}</td>
                    <td>@{{sp.sdt}}</td>
                    <td>@{{sp.email}}</td>
                    <td>@{{sp.capbac}}</td>
                    <td><button class="btn btn-info fa fa-pencil" ng-click="showmodal(sp.id)"></button></td>
                    <td><button class="btn btn-danger fa fa-trash" ng-click="deleteClick(sp.id)"></button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="product__pagination_ad">
                                <dir-pagination-controls max-size="12" on-page-change='indexCount(newPageNumber)' direction-links="true" boundary-links="true" style=></dir-pagination-controls>
                        <!-- <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@{{modalTitle}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">Ten NV:</label>
                            <div>
                                <input type="text" class="form-control" ng-model="nhanvien.ten_nhanvien">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">GioiTinh:</label>
                            <div>
                                <input type="text" class="form-control" ng-model="nhanvien.gioitinh">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">NgaySinh:</label>
                            <div>
                                <input type="text" class="form-control" ng-model="nhanvien.ngaysinh">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">QueQuan:</label>
                            <div>
                                <input type="text" class="form-control" ng-model="nhanvien.quequan">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">SDT:</label>
                            <div>
                                <input type="text" class="form-control" ng-model="nhanvien.sdt">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">email:</label>
                            <div>
                                <input type="text" class="form-control" ng-model="nhanvien.email">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="name">CapBac:</label>
                            <div>
                                <input type="text" class="form-control" ng-model="nhanvien.capbac">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" ng-click="saveData()">Save</button>
                </div>
            </div>
        </div>
    </div>

        </div>
        <!-- Page Area End Here -->
    </div>
    </div>
    <!-- jquery-->
    <script src="/admin/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="/admin/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="/admin/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/admin/js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="/admin/js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="/admin/js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="/admin/js/main.js"></script>
    <script src="/js/angular.min.js"></script>
    <script src="/js/dirPagination.js"></script>
    <script src="/js/nhanviencontroller.js"></script>
    

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Feb 2022 04:12:44 GMT -->
</html>