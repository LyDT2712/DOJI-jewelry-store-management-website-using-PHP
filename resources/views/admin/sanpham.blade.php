<!doctype html>
<html class="no-js" lang="" ng-app="myapp" ng-controller="sanphamcontroller">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Feb 2022 04:12:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN | PRODUCTS</title>
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
                                <h3>Danh Sách Sản Phẩm</h3>
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
                                        <th>STT</th>
                                        <th>Ảnh SP</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Loai SP</th>
                                        <th>NCC</th>
                                        <th>Mô tả</th>
                                        <th>Đơn Giá</th>
                                        <th>Số lượng</th>
                                        <th>Kích thước</th>
                                        <th>Sửa</th>
                                        <th>Xoá</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr dir-paginate="sp in products|orderBy:sortBy:isASC|filter:searchName|itemsPerPage:itemPerPage">
                                       
                                        <td>@{{$index + serial}}</td>
                                        <td><img src="/upload/sanpham/@{{sp.image}}" style='width:100px' alt=""></td>
                                        <td>@{{sp.name}}</td>
                                        <td>@{{sp.id_loai_sp}}</td>
                                        <td>@{{sp.id_ncc}}</td>
                                        <td>@{{sp.mota_sp}}</td>
                                        <td align="right">@{{sp.unit_price|number:0}}đ</td>
                                        <td>@{{sp.so_luong}}</td>
                                        <td>@{{sp.kich_thuoc}}</td>
                                        <td><button class="btn btn-info fa fa-pencil" ng-click="showmodal(sp.id)">&nbsp;</button></td>
                                        <td><button class="btn btn-danger fa fa-trash" ng-click="deleteClick(sp.id)">&nbsp;</button></td>
                                    </tr>
                                </tbody>
                            </table>

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
                                                    <label for="name">Tên Sản Phẩm:</label>
                                                    <div>
                                                        <input type="text" class="form-control" ng-model="product.name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="form-group">
                                                    <label for="name">Tên loại:</label>
                                                    <select class="select" ng-model="product.id_loai_sp">
                                                        <option ng-repeat = "l in categories" value ="@{{l.id}}" >@{{l.tenloai}}</option>
                                                    </select>
                                                 
                                                </div>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="form-group">
                                                    <label for="name">Tên NCC:</label>
                                                    <select class="select" ng-model="product.id_ncc">
                                                        <option ng-repeat = "n in suppliers" value ="@{{n.id}}" >@{{n.ten_ncc}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="form-group">
                                                    <label for="name">Mô tả:</label>
                                                    <div>
                                                        <input type="text" class="form-control" ng-model="product.mota_sp">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="form-group">
                                                    <label for="name">Đơn giá:</label>
                                                    <div>
                                                        <input type="text" class="form-control" ng-model="product.unit_price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="form-group">
                                                    <label for="name">Số lượng:</label>
                                                    <div>
                                                        <input type="text" class="form-control" ng-model="product.so_luong">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container-fluid">
                                            <div class="form-group">
                                                <label for="name">Ảnh SP:</label>
                                                <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="customFile" name="filename" ng-model="product.anh">
                                                    <label class="custom-file-label" class="form-control" id='img' for="customFile" >@{{product.image}}</label>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="form-group">
                                                    <label for="name">Kích thước:</label>
                                                    <div>
                                                        <input type="text" class="form-control" ng-model="product.kich_thuoc">
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



                            <div class="product__pagination_ad">
                                <dir-pagination-controls max-size="12" on-page-change='indexCount(newPageNumber)' direction-links="true" boundary-links="true" style=></dir-pagination-controls>
                        <!-- <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
        </div>
        <!-- Page Area End Here -->
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
    <script src="/js/sanphamcontroller.js"></script>
    <script> $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
    </script>
    

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Feb 2022 04:12:44 GMT -->
</html>