<div class="panel panel-default sidebar-menu"> <!--panel panel default  sidebar-menu Begin-->
    <div class="panel-heading"> 

        <center>
            <img class="img-responsive" src="customer_images/lebron.jpg" alt="SH Shop Profile">
        </center>

        <br/>

        <h3 align="center" class="panel-title">
            Tên: Lebron James
        </h3>
    </div>

    <div class="panel-body"> <!--panel body Begin-->

        <ul class="nav-pills nav-stacked nav">

            <li class="<?php if(isset($_GET['my_orders'])){echo"active";} ?>">
                <a href="my_account.php?my_orders">
                    <i class="fa fa-list"></i> Đơn hàng của tôi
                </a>
            </li>

            <li class="<?php if(isset($_GET['pay_offline'])){echo"active";} ?>">
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i> Thanh toán trực tiếp
                </a>
            </li>

            <li class="<?php if(isset($_GET['edit_account'])){echo"active";} ?>">
                <a href="my_account.php?edit_account">
                    <i class="fa fa-pencil"></i> Chỉnh sửa
                </a>
            </li>

            <li class="<?php if(isset($_GET['change_pass'])){echo"active";} ?>">
                <a href="my_account.php?change_pass">
                    <i class="fa fa-user"></i> Đổi mật khẩu
                </a>
            </li>

            <li class="<?php if(isset($_GET['delete_account'])){echo"active";} ?>">
                <a href="my_account.php?delete_account">
                    <i class="fa fa-trash-o"></i> Xóa tài khoản
                </a>
            </li>

            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out"></i> Đăng xuất
                </a>
            </li>
            
        </ul>

    </div> <!--panel body End-->

</div> <!--panel panel default  sidebar-menu End-->