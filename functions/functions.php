<?php 

$db = mysqli_connect("localhost","root","","basketball_shop");

/// begin  getPro function ///

function getPro(){

    global $db;
    $get_products = "select * from products order by 1 DESC LIMIT 0,8";
    $run_products = mysqli_query($db,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_price = $row_products['product_price'];

        $pro_img1 = $row_products['product_img1'];
            
        echo "
            
            <div class='col-md-4 col-sm-6 center-responsive '>
                
                <div class='product eff'>
                    <a href='detail.php?pro_id=$pro_id'>
                        <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                    </a>

                    <div class='text'>
                        <h3 class='pad_h'>
                            <a href='details.php?pro_id=$pro_id' class='pro_title_size'>
                                $pro_title
                            </a>
                        </h3>

                        <p class='price'>
                            <strong>  $pro_price VNĐ </strong>
                        </p>

                        <p class='button'>
                            <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                Chi tiết
                            </a>

                            <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                <i class='fa fa-shoping-cart'></i> Thêm vào giỏ hàng
                            </a>
                        </p>
                    </div>

                </div>

            </div>

        ";
    }
}

/// finish  getPro function ///



/// begin  getPCats function ///


function getPCats(){
    global $db;
    $get_p_cats = "select * from product_categories";
    $run_p_cats = mysqli_query($db,$get_p_cats);

    while($row_p_cats=mysqli_fetch_array($run_p_cats)){

        $p_cat_id = $row_p_cats['p_cat_id'];
        $p_cat_title = $row_p_cats['p_cat_title'];

        echo "
            <li>
                <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a>
            </li>
        ";

    }
}

/// finish  getPCats function ///



/// begin  getCats function ///


function getCats(){
    global $db;
    $get_cats = "select * from categories";
    $run_cats = mysqli_query($db,$get_cats);

    while($row_cats=mysqli_fetch_array($run_cats)){

        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

        echo "
            <li>
                <a href='shop.php?cat=$cat_id'> $cat_title </a>
                
            </li>
        ";

    }
}

/// finish  getCats function ///



/// begin  getpcatpro function ///
function getpcatpro(){
    global $db;
    if(isset($_GET['p_cat'])){
        $p_cat_id = $_GET['p_cat'];

        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

        $run_p_cat = mysqli_query($db,$get_p_cat);

        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['p_cat_title'];

        $p_cat_desc = $row_p_cat['p_cat_desc'];

        $get_products = "select * from products where p_cat_id='$p_cat_id'";

        $run_products = mysqli_query($db,$get_products);

        $count = mysqli_num_rows($run_products);

        if($count==0)
        {
            echo"
                <div class='box'>

                    <h1> Không có sản phẩm nào </h1>

                </div>
            ";
        }else{
            
            echo"
                <div class='box'>

                    <h1> $p_cat_title </h1>

                    <p> $p_cat_desc </p>

                </div>
            ";

        }
        
        while($row_products=mysqli_fetch_array($run_products)){

            $pro_id = $row_products['product_id'];

            $pro_title = $row_products['product_title'];
    
            $pro_price = $row_products['product_price'];
    
            $pro_img1 = $row_products['product_img1'];

            echo "
            
            <div class='col-md-4 col-sm-6 center-responsive'>
                
            <div class='product eff'>
                <a href='details.php?pro_id=$pro_id'>
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                </a>

                <div class='text'>
                    <h3 class='pad_h'>
                        <a href='details.php?pro_id=$pro_id' class='pro_title_size'>
                            $pro_title
                        </a>
                    </h3>

                    <p class='price'>
                        <strong>  $pro_price VNĐ </strong>
                    </p>

                    <p class='button'>
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                            Chi tiết
                        </a>

                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                            <i class='fa fa-shoping-cart'></i> Thêm vào giỏ hàng
                        </a>
                    </p>
                </div>

            </div>

        </div>

            ";
        }

    }
}
/// finish  getpcatpro function ///


/// begin  getcatpro function ///

function getcatpro(){

    global $db;

    if(isset($_GET['cat'])){

        $cat_id = $_GET['cat'];

        $get_cat = "select * from categories where cat_id='$cat_id' ";

        $run_cat = mysqli_query($db,$get_cat);

        $row_cat = mysqli_fetch_array($run_cat);

        $cat_title = $row_cat['cat_title'];

        $cat_desc = $row_cat['cat_desc'];

        $get_cat = "select * from products where cat_id='$cat_id' LIMIT 0,6";

        $run_products = mysqli_query($db,$get_cat);

        $count = mysqli_num_rows($run_products);

        if($count==0){
            echo "
                <div class='box'>

                    <h1> Không có sản phẩm nào </h1>
                    
                </div>
            
            ";

        } else{

            echo"
            <div class='box'>

            <h1> $cat_title </h1>

            <p> $cat_desc </p>
            
            </div>
            ";
        }

        while($row_products=mysqli_fetch_array($run_products)){

            $pro_id = $row_products['product_id'];

            $pro_title = $row_products['product_title'];
    
            $pro_price = $row_products['product_price'];
    
            $pro_img1 = $row_products['product_img1'];

            echo "
            
            <div class='col-md-4 col-sm-6 center-responsive'>
                
            <div class='product eff'>
                <a href='details.php?pro_id=$pro_id'>
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                </a>

                <div class='text'>
                    <h3 class='pad_h'>
                        <a href='details.php?pro_id=$pro_id' class='pro_title_size'>
                            $pro_title
                        </a>
                    </h3>

                    <p class='price'>
                        <strong>  $pro_price VNĐ </strong>
                    </p>

                    <p class='button'>
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                            Chi tiết
                        </a>

                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                            <i class='fa fa-shoping-cart'></i> Thêm vào giỏ hàng
                        </a>
                    </p>
                </div>

            </div>

        </div>

            ";
        }

    }

}

/// finish  getcatpro function ///






?>
