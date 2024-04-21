<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.parts.head')
</head>
    <section class="admin">
        <div class="row-grid">
            <div class="admin-sidebar">
                <div class="admin-sidebar-top">
                    <a href="/admin/index.html"><img src="/admin/asset/images/logo.png" alt=""></a>
                 
                </div>
                <div class="admin-sidebar-content">
                    <ul>
                        <li><a href=""><i class="ri-dashboard-3-line"></i>Dashboard</a></li>
                        <li><a href=""><i class="ri-list-check-2"></i>Đơn Hàng <i class="ri-corner-right-down-line"></i></a>
                              <ul class="sub-menu">
                            <li><a href="/admin/order_list.html"><i class="ri-corner-left-up-fill"></i>Danh sách</a><li>
                            <li><a href=""><i class="ri-corner-left-up-fill"></i>Thêm</a></li>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-list-check-2"></i>Sản Phẩm <i class="ri-corner-right-down-line"></i></a>
                            <ul class="sub-menu">
                                <li><a href="/admin/product_list.html"><i class="ri-corner-left-up-fill"></i>Danh sách</a><li>
                                <li><a href="/admin/product_add.html"><i class="ri-corner-left-up-fill"></i>Thêm</a></li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="admin-content">
                    <div class="admin-content-top">
                        <div class="admin-content-top-left">
                            <ul>
                                <li><i class="ri-search-2-line"></i></li>
                                <li><i class="ri-drag-move-line"></i></li>
                            </ul>
                                                       
                        </div>
                        <div class="admin-content-top-right">
                            <ul>
                                <li><i class="ri-notification-4-line" number="3"></i></li>
                                <li><i class="ri-message-line" number="4"></i></li>
                                <li> <img style="width: 30px;" src="asset/images/logo.png" alt=""></li>
                                <p>MinhCake<i class="ri-arrow-down-s-fill"></i></p>
                            </ul>                                                    
                        </div>
                    </div>
                    <div class="admin-content-main">
                        <div class="admin-content-main-title">
                            <h1><i class="ri-expand-left-right-fill"></i>Dashboard</h1>
                        </div>

                        <!--  -->
                    </div>
            </div>
        </div>
       
    </section>




    <script src="{{asset ('/backend/asset/js/script.js')}}"></script>
<body>
    
</body>
</html>