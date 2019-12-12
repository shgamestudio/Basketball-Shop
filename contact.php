<?php 
     $active='Contact';
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
                        Liên hệ
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
                            <h2>Đừng ngại liên lạc với shop khi cần bạn nhé!</h2>
                            <p class="text-muted">
                                Nếu bạn có bất kỳ câu hỏi hay thắc mắc nào thì hãy liên hệ với shop. 
                                Dịch vụ chăm sóc khách hàng của SH Shop luôn hoạt động <strong>24/7</strong>
                            </p>
                        </center>
                        <form action="contact.php" method="post">
                            <div class="form-group">
                                <label>Tên của bạn</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label>Chủ đề</label>
                                <input type="text" class="form-control" name="subject" required>
                            </div>

                            <div class="form-group">
                                <label>Lời nhắn</label>
                                <textarea name="message" class="form-control"></textarea>        
                            </div>

                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i> Gửi lời nhắn
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