<?php 

    include("includes/db.php");
    include("functions/functions.php");

?>



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
                       
                       <li class="active">
                           <a href="index.php">Trang chủ</a>
                       </li>
                       <li>
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
   
   <div class="container" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                <?php 
                   $count = 0;
                   $query = "select * from slider";
                   $result = mysqli_query($con, $query);

                   while($row_slides = mysqli_fetch_array($result))
                   {
                    if($count == 0)
                    {
                        echo
                      '
                      <li class="active" data-target="#myCarousel" data-slide-to="'.$count.'"></li>
                     ';
                    }
                    else
                    {
                        echo
                      '
                      <li data-target="#myCarousel" data-slide-to="'.$count.'"></li>
                     ';
                    }
                    $count = $count + 1;
                   }

                ?>
                   
               </ol> <!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
                  <?php 

                    $count = 0;
                    $query = "select * from slider";
                    $result = mysqli_query($con, $query);

                    while($row_slides = mysqli_fetch_array($result))
                    {

                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        if($count == 0)
                        {
                            echo
                           '<div class="item active">';
                        }
                        else
                        {
                            echo
                            '
                            <div class="item">';
                            
                        }
                        echo "
                        
                      
                            <img src='admin_area/slides_images/$slide_image'>
                            </div>
                        
                        ";
                        $count = $count + 1;
                    }
                    
                   
                  ?>
                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->
   
   <div id="advantages"> <!-- advantages begin -->
    <div class="container"> <!-- container begin -->
        <div class="same-height-row"> <!-- same height row begin -->
            <div class="col-sm-4"> <!-- col-sm-4 begin -->
                <div class="box same-height"> <!-- box same height begin -->
                    <div class="icon"> <!-- icon begin -->
                        <i class="fa fa-heart ico_pad"></i>
                    </div>

                    <h3><a href="#">Thân thiện</a></h3>
                    <p>Luôn lắng nghe và tư vấn nhiệt tình cho khách hàng</p>
                </div>
            </div>

            <div class="col-sm-4"> <!-- col-sm-4 begin -->
                <div class="box same-height"> <!-- box same height begin -->
                    <div class="icon"> <!-- icon begin -->
                        <i class="fa fa-tag ico_pad"></i>
                    </div>

                    <h3><a href="#">Giá tốt</a></h3>
                    <p>Giá cả đi đôi với chất lượng, luôn cập nhật sản phẩm mới</p>
                </div>
            </div>

            <div class="col-sm-4"> <!-- col-sm-4 begin -->
                <div class="box same-height"> <!-- box same height begin -->
                    <div class="icon"> <!-- icon begin -->
                        <i class="fa fa-thumbs-up ico_pad"></i>
                    </div>

                    <h3><a href="#">Chính hãng</a></h3>
                    <p>Chỉ bán hàng chính hãng và nói không với hàng giả</p>
                </div>
            </div>
        </div>
    </div>
   </div> <!-- advantages Finish -->

   <div id="hot"><!--hot Begin-->
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>
                        Sản phẩm mới nhất
                    </h2>
                </div>
            </div>
        </div>
   </div> <!--hot Finish-->
    
    <div id="content" class="container"> <!--container Begin-->
        <div class="row"> <!--row Begin-->

            <?php 
                getPro();
            ?>

        </div> <!--row Finnish-->
    </div><!--container Finish-->

    <?php
        include("includes/footer.php");
    ?>


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>