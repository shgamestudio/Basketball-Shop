<?php 

    $active='Cart';
    include("includes/header.php");

?>



   <div id="content"> <!-- content Begin -->
       <div class="container">
           <div class="col-md-12"> <!-- col-md-12 Begin -->
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li>
                        Giỏ hàng
                    </li>
                </ul>
           </div> <!-- col-md-12 Finish -->     
           
            
           <div id="cart" class="col-md-9">  <!-- col-md-9 Begin -->
                <div class="box"> <!--box Begin-->
                    <form action="cart.php" method="post" enctype="multipart/form-data"> <!--form Begin-->
                    
                        <h1>Giỏ hàng</h1>
                        <p class="text-muted">Hiện tại có 3 sản phẩm trong giỏ hàng</p>
                        <div class="table-responsive"> <!--table-responsive Begin-->
                            <table class="table"> <!--table Begin-->
                                <thead> <!--thread Begin-->

                                <tr>
                                    <th colspan="2">Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Size</th>
                                    <th colspan="1">Xóa</th>
                                    <th colspan="2">Tổng tiền</th>
                                </tr>

                                </thead> <!--thread Finish-->

                                <tbody> <!--tbody Begin-->
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="admin_area\product_images\lining_wade_flyknit_blue_a.jpg" alt="Product 3a">
                                        </td>

                                        <td>
                                            <a href="#">Giày bóng rổ Li-Ning Wade Flyknit - Blue</a>
                                        </td>

                                        <td>
                                            2
                                        </td>

                                        <td>
                                            2100000 VNĐ
                                        </td>

                                        <td>
                                            41
                                        </td>

                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>

                                        <td>
                                            4200000 VNĐ
                                        </td>
                                    </tr>
                                </tbody> <!--tbody Finish-->

                                <tbody> <!--tbody Begin-->
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="admin_area\product_images\lining_wade_flyknit_black_a.jpg" alt="Product 4a">
                                        </td>

                                        <td>
                                            <a href="#">Giày bóng rổ Li-Ning Wade Flyknit - Black</a>
                                        </td>

                                        <td>
                                            2
                                        </td>

                                        <td>
                                            2100000 VNĐ
                                        </td>

                                        <td>
                                            42
                                        </td>

                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>

                                        <td>
                                            4200000 VNĐ
                                        </td>
                                    </tr>
                                </tbody> <!--tbody Finish-->

                                <tbody> <!--tbody Begin-->
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="admin_area\product_images\lining_wade_flyknit_Pink_a.jpg" alt="Product 5a">
                                        </td>

                                        <td>
                                            <a href="#">Giày bóng rổ Li-Ning Wade Flyknit - Pink</a>
                                        </td>

                                        <td>
                                            2
                                        </td>

                                        <td>
                                            2100000 VNĐ
                                        </td>

                                        <td>
                                            41
                                        </td>

                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>

                                        <td>
                                            4200000 VNĐ
                                        </td>
                                    </tr>
                                </tbody> <!--tbody Finish-->

                                <tfoot> <!--tfoot Begin-->

                                    <tr>
                                        <th colspan="5">Tổng tiền</th>
                                        <th colspan="2">2100000 VNĐ</th>
                                    </tr>

                                </tfoot> <!--tfoot Finish-->

                            </table> <!--table Finish-->
                        </div> <!--table-responsive Finish-->
                        <div class="box-footer"> <!--box-footer Begin-->

                            <div class="pull-left"> <!--pull-left Begin-->
                                <a href="index.php" class="btn btn-default"> <!--btn btn-default Finish-->
                                    <i class="fa fa-chevron-left"></i> Tiếp tục mua sắm
                                </a> <!--btn btn-default Finish-->
                            </div> <!--pull-left Finish-->
                
                            <div class="pull-right"> <!--pull-right Begin-->
                                <button type="submit" name="update" value="Update Cart" class="btn btn-default"> <!--btn btn-default Finish-->
                                    <i class="fa fa-refresh"></i> Cập nhật giỏ hàng
                                </button> <!--btn btn-default Finish-->

                                <a href="checkout.php" class="btn btn-primary">
                                    Tiến hành thanh toán <i class="fa fa-chevron-right"></i>
                                </a>

                            </div> <!--pull-lefrightt Finish-->

                        </div> <!--box-footer Finish-->

                    </form> <!--form Finish-->

                </div> <!--box Finish-->
                <div id="row same-heigh-row"> <!--row same-height-row Begin-->
                    <div class="col-md-3 col-sm-6"> <!--col-md-3 col-sm-6 Begin-->
                        <div class="box same-height headline">
                            <h3 class="text-center">Những sản phẩm bạn có thể thích</h3>
                        </div>
                    </div> <!--col-md-3 col-sm-6 Finish-->

                    <div class="col-md-3 col-sm-6 center-responsive"> <!--col-md-3 col-sm-6 center-responsive Begin-->
                        <div class="product same-height">
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area\product_images\lining_x_china_a.jpg" alt="Product 6">
                            </a>

                            <div class="text">
                                <h3><a href="details.php">Lining X China Basketball</a></h3>
                                <p class="price">2150000 VNĐ</p>
                            </div>
                        </div>
                    </div> <!--col-md-3 col-sm-6 center-responsive Finish-->

                    <div class="col-md-3 col-sm-6 center-responsive"> <!--col-md-3 col-sm-6 center-responsive Begin-->
                        <div class="product same-height">
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area\product_images\lining_new_fighting_falcon_black_white_a.jpg" alt="Product 6">
                            </a>

                            <div class="text">
                                <h3><a href="details.php">Lining Fighting Black-White</a></h3>
                                <p class="price">2150000 VNĐ</p>
                            </div>
                        </div>
                    </div> <!--col-md-3 col-sm-6 center-responsive Finish-->

                    <div class="col-md-3 col-sm-6 center-responsive"> <!--col-md-3 col-sm-6 center-responsive Begin-->
                        <div class="product same-height">
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area\product_images\lining_storm_rose_city_a.jpg" alt="Product 6">
                            </a>

                            <div class="text">
                                <h3><a href="details.php">Lining Storm Rose City</a></h3>
                                <p class="price">2150000 VNĐ</p>
                            </div>
                        </div>
                    </div> <!--col-md-3 col-sm-6 center-responsive Finish-->

                </div> <!--row same-height-row Finish-->
           </div> <!-- col-md-9 Finish -->

           <div class="col-md-3"> <!--col-md-3 Begin-->

                <div id="order-summary" class="box">
                
                    <div class="box-header">
                        <h3>Order Summary</h3>
                    </div>

                    <p class="text-muted">
                        Giá ship và phụ phí tùy thuộc dựa trên giá trị bạn nhập vào
                    </p>

                    <div class="table-responsive">
                    
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Giá đơn hàng</td>
                                    <th>4200000</th>
                                </tr>

                                <tr>
                                    <td>Giao hàng tận tay</td>
                                    <td>0 VNĐ</td>
                                </tr>

                                <tr>
                                    <td>Thuế</td>
                                    <th>0 VNĐ</th>
                                </tr>

                                <tr class="total">
                                    <td>Tổng cộng</td>
                                    <th>4200000 VNĐ</th>
                                </tr>

                            </tbody>
                        </table>
                    
                    </div>

                </div>

           </div> <!-- col-md-3 Finish-->

       </div> <!-- content Finish -->
   </div> <!-- content Finish -->

   <?php
        include("includes/footer.php");
    ?>


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>