<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SH Shop</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link href="styles/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/f6893dcc0b.js" crossorigin="anonymous"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
   
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="checkout.php">4 Items In Your Cart | Total Price: $300 </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="customer_register.php">Đăng ký</a>
                   </li>
                   <li>
                       <a href="customer/my_account.php">Tài khoản</a>
                   </li>
                   <li>
                       <a href="cart.php">Giỏ hàng</a>
                   </li>
                   <li>
                       <a href="checkout.php">Đăng nhập</a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/logo2.png" alt="M-dev-Store Logo" class="hidden-xs">
                   <img src="images/logo-res.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li>
                           <a href="index.php">Trang chủ</a>
                       </li>
                       <li class="active">
                           <a href="shop.php">Cửa hàng</a>
                       </li>
                       <li>
                           <a href="customer/my_account.php">Tài khoản của tôi</a>
                       </li>
                       <li>
                           <a href="cart.php">Giỏ hàng</a>
                       </li>
                       <li>
                           <a href="contact.php">Liên hệ</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>4 Items In Your Cart</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn Finish -->
                   
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->

   <div id="content"> <!-- content Begin -->
       <div class="container">
           <div class="col-md-12"> <!-- col-md-12 Begin -->
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li>
                        Cửa hàng
                    </li>
                </ul>
           </div> <!-- col-md-12 Finish -->

           <div class="col-md-3"> <!-- col-md-3 Begin -->
                <?php
                    include("includes/sidebar.php");
                ?>
           </div> <!-- col-md-3 Finish -->

            <div class="col-md-9"> <!-- col-md-9 Begin -->
                <div id="productMain" class="row"> <!-- row Begin -->
                    <div class="col-sm-6"> <!-- col-sm-6 Begin -->
                        <div id="mainImage"> <!-- mainImage Begin -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- carousel slide Begin -->
                                <ol class="carousel-indicators"> <!-- ol Begin -->
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                </ol> <!-- ol Finish -->

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area\product_images\lining_wade_flyknit_blue_a.jpg" alt=""></center> 
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area\product_images\lining_wade_flyknit_blue_b.jpg" alt=""></center> 
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area\product_images\lining_wade_flyknit_blue_c.jpg" alt=""></center> 
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area\product_images\lining_wade_flyknit_blue_d.jpg" alt=""></center> 
                                    </div>
                                </div>

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Trước</span>
                                </a>

                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Sau</span>
                                </a>

                            </div> <!-- carousel slide Finish -->
                        </div> <!-- mainImage Finish -->
                    </div> <!-- col-sm-6 Finish -->

                    <div class="col-sm-6"> <!-- col-sm-6 Begin -->
                        <div class="box">
                            <h1 class="text-centar">Giày bóng rổ Li-Ning Wade Flyknit - Blue</h1>
                            <form action="details.php" class="form-horizontal" method="post"> <!--form-horizontal Begin-->
                                <div class="form-group"> <!-- form-group Begin-->
                                    <label for="" class="col-md-5 control-label">Số lượng </label>

                                    <div class="col-md-7">
                                        <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                                        <input type="number" id="number" value="1" readonly />
                                        <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                        <script>
                                            function increaseValue() {
                                                var value = parseInt(document.getElementById('number').value, 10);
                                                value = isNaN(value) ? 0 : value;
                                                value++;
                                                document.getElementById('number').value = value;
                                            }

                                            function decreaseValue() {
                                                var value = parseInt(document.getElementById('number').value, 10);
                                                value = isNaN(value) ? 0 : value;
                                                value < 2 ? value = 2 : '';
                                                value--;
                                                document.getElementById('number').value = value;
                                            }
                                        </script>
                                        <!-- <input class="form-control"  type="number" id="number" value="1" min="1" oninput="this.value = Math.abs(this.value)" disable /> -->
                                        <!-- <select name="product_qty" id="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select> -->
                                      

                                    </div>

                                </div> <!-- form-group Finish-->
                                <br>
                                
                                <div class="form-group"> <!-- form-group Begin-->
                                <label class="col-md-5 control-label">Chọn size</label>

                                    <div class="col-md-7">
                                    
                                    <select name="product_size" class="form-control">
                                    
                                        <option>Chọn size</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>

                                    </select>
                                    
                                    </div>
                                </div> <!-- form-group Finish-->
                                <hr>
                                <p class="price">2100000 VNĐ</p>

                                <p class="text-center button"><button class="btn btn-primary i fa fa-shopping-cart">Thêm vào giỏ</button></p>

                            </form> <!--form-horizontal Finish-->
                        </div>

                        <div class="row" id="thumbs"> <!-- row Begin -->
                            
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumbs">
                                    <img src="admin_area\product_images\lining_wade_flyknit_blue_a.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumbs">
                                    <img src="admin_area\product_images\lining_wade_flyknit_blue_b.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumbs">
                                    <img src="admin_area\product_images\lining_wade_flyknit_blue_c.jpg" alt="" class="img-responsive">
                                </a>
                            </div>

                            

                        </div> <!-- row Begin -->
                    </div> <!-- col-sm-6 Finish -->

                </div> <!-- row Finish -->

                <div class="box" id="details">
                    <h4>Chi tiết sản phẩm</h4>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis error eum soluta obcaecati odit ut consectetur 
                        veniam quo nulla porro, voluptate, odio quas commodi libero excepturi ducimus in quaerat mollitia!
                    </p>
                    <h4>Size</h4>

                    <ul>
                        <li>40</li>
                        <li>41</li>
                        <li>42</li>
                    </ul>
                    <hr>
                </div>
                
                <div id="row same-height-row"> <!--row same-height-row Begin-->
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

       </div> <!-- container Finish -->
   </div> <!-- content Finish -->

   <?php
        include("includes/footer.php");
    ?>


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>