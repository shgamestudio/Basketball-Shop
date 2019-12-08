
<?php 

    include("includes/db.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    
</head>
<body>
    
<div class="row"> <!--row Begin-->

    <div class="col-lg-12"> <!--col-lg-12 Begin-->

        <ol class="breadcrumb"> <!--breadcrumb Begin-->

            <li class="active">
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Thêm sản phẩm
            </li>

        </ol> <!--breadcrumb End-->

    </div> <!--col-lg-12 End-->

</div> <!--row End-->


<div class="row"> <!--row Begin-->

    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-heading">

                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Thêm sản phẩm
                </h3>

            </div>

        </div>

        <div class="panel-body"> <!--panel-body Begin-->
            <form method="post" class="form-horizontal" enctype="multipart/form-data"> <!--form horizontal Begin-->

                <div class="form-group"> <!--form-group Begin-->

                    <label class="col-md-3 control-label">Tên sản phẩm</label>

                    <div class="col-md-6">
                        <input type="text" name="product_title" class="form-control" required>
                    </div>

                </div> <!--form-group End-->


                 <div class="form-group"> <!--form-group Begin-->

                    <label class="col-md-3 control-label"> Danh mục sản phẩm </label>

                    <div class="col-md-6">
                       <select name="product_cat" class="form-control">
                           <option>Chọn một danh mục</option>

                           <?php 
                            $get_p_cats = "select * from product_categories";
                            $run_p_cats = mysqli_query($con,$get_p_cats);
                            while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                $p_cat_id = $row_p_cats['p_cat_id'];
                                $p_cat_title = $row_p_cats['p_cat_title'];

                                echo "
                                    <option value='$p_cat_id'> $p_cat_title </option>
                                ";
                            }
                           ?>
                       </select>
                    </div>

                </div> <!--form-group End-->

                <div class="form-group"> <!--form-group Begin-->

                    <label class="col-md-3 control-label"> Danh mục hãng </label>

                    <div class="col-md-6">
                       <select name="product_cat" class="form-control">
                           <option>Chọn một hãng</option>

                           <?php 
                            $get_cat = "select * from categories";
                            $run_cat = mysqli_query($con,$get_cat);
                            while($row_cat=mysqli_fetch_array($run_cat)){
                                $cat_id = $row_cat['cat_id'];
                                $cat_title = $row_cat['cat_title'];

                                echo "
                                    <option value='$cat_id'> $cat_title </option>
                                ";
                            }
                           ?>
                       </select>
                    </div>

                </div> <!--form-group End-->

                <div class="form-group"> <!--form-group Begin-->

                    <label class="col-md-3 control-label"> Hình sản phẩm - 1 </label>

                    <div class="col-md-6">
                        <input type="file" name="product_img1" class="form-control" required>
                    </div>

                </div> <!--form-group End-->
                
                <div class="form-group"> <!--form-group Begin-->

                    <label class="col-md-3 control-label"> Hình sản phẩm - 2 </label>

                    <div class="col-md-6">
                        <input type="file" name="product_img2" class="form-control" required>
                    </div>

                </div> <!--form-group End-->

                <div class="form-group"> <!--form-group Begin-->

                    <label class="col-md-3 control-label"> Hình sản phẩm - 3 </label>

                    <div class="col-md-6">
                        <input type="file" name="product_img3" class="form-control" required>
                    </div>

                </div> <!--form-group End-->

                <div class="form-group"> <!--form-group Begin-->

                    <label class="col-md-3 control-label"> Hình sản phẩm - 4 </label>

                    <div class="col-md-6">
                        <input type="file" name="product_img4" class="form-control" required>
                    </div>

                </div> <!--form-group End-->

                <div class="form-group"> <!--form-group Begin-->

                    <label class="col-md-3 control-label"> Giá sản phẩm </label>

                    <div class="col-md-6">
                        <input type="text" name="product_price" class="form-control" required>
                    </div>

                </div> <!--form-group End-->

                <div class="form-group"> <!--form-group Begin-->

                    <label class="col-md-3 control-label"> Từ khóa sản phẩm </label>

                    <div class="col-md-6">
                        <input type="text" name="product_keywords" class="form-control" required>
                    </div>

                </div> <!--form-group End-->

                <div class="form-group"> <!--form-group Begin-->

                    <label class="col-md-3 control-label"> Mô tả sản phẩm </label>

                    <div class="col-md-6">
                        <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>
                    </div>

                </div> <!--form-group End-->

                <div class="form-group"> <!--form-group Begin-->

                    <label class="col-md-3 control-label"></label>

                    <div class="col-md-6">
                       <input name="submit" value="Thêm sản phẩm" type="submit" class="btn btn-primary form-control">
                    </div>

                </div> <!--form-group End-->

            </form> <!--form horizontal-->
        </div> <!--panel-body End-->
    </div>

</div> <!--row End-->

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</body>
</html>