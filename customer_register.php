<?php 
    $active='Account';
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
                        Đăng ký
                    </li>
                </ul>
           </div> <!-- col-md-12 Finish -->

           <div class="col-md-3"> <!-- col-md-3 Begin -->
           
                <?php
                    include("includes/sidebar.php");
                ?>
           </div> <!-- col-md-3 Finish -->

            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h2>Đăng ký tài khoản</h2>
                            <p class="text-muted">
                                Nếu bạn có bất kỳ câu hỏi hay thắc mắc nào thì hãy liên hệ với shop. 
                                Dịch vụ chăm sóc khách hàng của SH Shop luôn hoạt động <strong>24/7</strong>
                            </p>
                        </center>
                        <form action="customer_register.php" method="post" enctype="multipart/form-data"> 
                            <div class="form-group">
                                <label>Tên của bạn</label>
                                <input type="text" class="form-control" name="c_name" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="c_email" required>
                            </div>

                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" name="c_pass" required>
                            </div>

                            <div class="form-group">
                                <label>Quốc gia</label>
                                <input type="text" class="form-control" name="c_country" required>
                            </div>

                            <div class="form-group">
                                <label>Tỉnh thành phố</label>
                                <input type="text" class="form-control" name="c_city" required>
                            </div>

                            <div class="form-group">
                                <label>Thông tin liên hệ</label>
                                <input type="text" class="form-control" name="c_contact" required>
                            </div>

                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" class="form-control" name="c_address" required>
                            </div>

                            <div class="form-group">
                                <label>Avatar của bạn</label>
                                <input type="file" class="form-control" name="c_image" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="register" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i> Đăng ký
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </div>
   </div> <!-- content Finish -->

   <?php
        include("includes/footer.php");
    ?>


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>