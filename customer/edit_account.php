<h1 align="center"> Chỉnh sửa tài khoản </h1>

<form   action="" method="post" enctype="multipart/form-data"> <!--form Begin-->

    <div class="form-group"> <!--form-group Begin-->

        <label> Tên khách hàng: </label>
        <input type="text" name="c_name" class="form-control" required>


    </div> <!--form-group Finish-->

    <div class="form-group"> <!--form-group Begin-->

        <label> Email: </label>
        <input type="text" name="c_email" class="form-control" required>
        

    </div> <!--form-group Finish-->

    <div class="form-group"> <!--form-group Begin-->

        <label> Quốc gia: </label>
        <input type="text" name="c_country" class="form-control" required>
        

    </div> <!--form-group Finish-->

    <div class="form-group"> <!--form-group Begin-->

        <label> Tỉnh/ Thành phố: </label>
        <input type="text" name="c_city" class="form-control" required>
        

    </div> <!--form-group Finish-->

 

    <div class="form-group"> <!--form-group Begin-->

        <label> Thông tin liên hệ: </label>
        <input type="text" name="c_contact" class="form-control" required>
        

    </div> <!--form-group Finish-->

    <div class="form-group"> <!--form-group Begin-->

        <label> Địa chỉ: </label>
        <input type="text" name="c_address" class="form-control" required>
        

    </div> <!--form-group Finish-->

    <div class="form-group"> <!--form-group Begin-->

        <label> Avatar: </label>
        <input type="file" name="c_image" class="form-control" required>
        <img class="img-responsive" src="customer_images/lebron.jpg" alt="Customer Image">

    </div> <!--form-group Finish-->

    <div class="text-center"> <!-- text-center Begin-->

    <button name="update" class="btn btn-primary">
        <i class="fa fa-user-md"></i> Cập nhật
    </button>

    </div> <!-- text-center Finish-->
   

<form> <!--form Finish-->