<?php 
    $active='Home';
    include("includes/header.php");

?>
   
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