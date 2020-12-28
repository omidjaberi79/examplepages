<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>اپلیکیشن الوان - ثبت سفارش</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Persian Data Picker -->
  <link rel="stylesheet" href="../../dist/css/persian-datepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="../../dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="../../dist/css/custom-style.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Home Contact Us -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">خانه</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../about/call_us.php" class="nav-link">تماس</a>
      </li>
    </ul>




 <!-- Tollbar -->

    <?php
	   if(isset($_GET["errorlevel"]))
	   {
		 echo '
    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">1</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  سیستم
                  <span class="float-left text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">برای ورود به این صفحه نیاز به دسترسی دارید</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
        </div>
      </li>
	  ';
	   }
	  else
	  {
		 echo '
    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
        </div>
      </li>
	  ';
	  }

		?>

		  <li>
	  <a href="../../login/login.php" class="dropdown-item" name"btnexit">
		  <?php
		  include "../../functs/connect2.php";
		  if(isset($_GET["btnexit"]))
		  {
		  $_SESSION["admin-login"] = 0;
		  }
		  echo '
            <i class=""></i> خروج
          ';
		    ?>
	  <!-- End Tollbar -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                class="fa fa-th-large"></i></li></a>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../img/admin.png" class="img-circle elevation-2" alt="User Image">
          </div>
			<a href="#" class="d-block">
			<?php
include "../../functs/connect2.php";
include "../../functs/basedata.php";
	echo " ".$rowsfnamelname["fname"]." ".$rowsfnamelname["lname"]." ";
				if($rowsfnamelname["level"] < 10)
				{
                   redirect("../../index.php?username=".$rowsfnamelname["username"]."&errorlevel=7900");
				}
		?>
			</a>
        </div>

         <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  سفارشات
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../order/orders.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>سفارشات</p>
                  </a>
                </li>
				  <li class="nav-item">
                  <a href="../order/enter-order.php" class="nav-link active">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ثبت سفارش</p>
                  </a>
                </li>
              </ul>
            </li>
			  <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  هزینه ها
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../reaccount/reaccounts.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>هزینه ها</p>
                  </a>
                </li>
				  <li class="nav-item">
                  <a href="../reaccount/enter-reacc.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ثبت هزینه</p>
                  </a>
                </li>
              </ul>
            </li>
			  <li class="nav-item has-treeview">
              <a href="../sod/enter-sod.php" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  سود
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
            </li>
			  			  <!-- New Menu -->
			  <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  فروش رسمی
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../order_rasmi/orders_r.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>فروش رسمی</p>
                  </a>
                </li>
              </ul>
            </li>
			<li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  حقوق
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../hoghogh/create-m.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ثبت حقوق</p>
                  </a>
                </li>
				<li class="nav-item">
                  <a href="../hoghogh/products-m.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمایش حقوق ها</p>
                  </a>
                </li>
              </ul>
            </li>
			 <!-- End New Menu -->
			 <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                   تعریف کالا ورودی
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../enter_pr/create-pr.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>تعریف کالا ورودی</p>
                  </a>
                </li>
				  <li class="nav-item">
                  <a href="../enter_pr/products-cr.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمایش کالا ورودی</p>
                  </a>
                </li>
              </ul>
            </li>
			  <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                   تعریف کالا فروش
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../product/create-pr.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>تعریف کالا فروش</p>
                  </a>
                </li>
				  <li class="nav-item">
                  <a href="../product/products-cr.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمایش کالا فروش</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  ورود کالا
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href='../materials/enter-mat.php' class='nav-link'>
                    <i class='fa fa-circle-o nav-icon'></i>
                    <p>ورود کالا</p>
                  </a>

                </li>
                <li class="nav-item">
                  <a href="../materials/materials.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمایش ورود کالا</p>
                  </a>
                </li>
              </ul>
            </li>
			  <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  خروج کالا
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href='../product/enter-pr.php' class='nav-link'>
                    <i class='fa fa-circle-o nav-icon'></i>
                    <p>خروج کالا</p>
                  </a>

                </li>
                <li class="nav-item">
                  <a href="../product/products.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمایش خروج کالا</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-pie-chart"></i>
                <p>
                  حساب‌ها
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../accounts/enter-acc.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>اضافه کردن حساب</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../accounts/accounts.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ویرایش حساب</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../accounts/accounts.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>حذف حساب</p>
                  </a>
                </li>
				<li class="nav-item">
                  <a href="../accounts/accounts.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>مشاهده حساب ها</p>
                  </a>
                </li>
              </ul>
            </li>
			  			 <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-pie-chart"></i>
                <p>
                  مشتری ها
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../customer/enter-cus.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>اضافه مشتری</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../customer/customer.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمایش مشتری ها</p>
                  </a>
                </li>
              </ul>
            </li>
			  <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-table"></i>
                <p>
                  انبار
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../store/enter-str.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ثبت موجودی انبار</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../store/stores.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمایش موجودی انبار</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-table"></i>
                <p>
                  نمودار ها
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../nemodar/order.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار فروش</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../nemodar/reacc.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار هزینه ها</p>
                  </a>
                </li>
              </ul>
            </li>
			  <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  کاربران
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href='../users/users.php' class='nav-link'>
                    <i class='fa fa-circle-o nav-icon'></i>
                    <p>مشاهده کاربران</p>
                  </a>

                </li>
                <li class="nav-item">
                  <a href="../users/edit-user.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ویرایش کاربران</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../users/delete-user.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>حذف کاربران</p>
                  </a>
                </li>
				  <li class="nav-item">
                  <a href="../users/add-user.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>اضافه کردن کاربر</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">راهنما</li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  آموزش ها
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../learn/learn_text.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>متنی</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../learn/learn_video.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>فیلم</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">گزارش</li>
            <li class="nav-item">
              <a href="../about/report.php" class="nav-link">
                <i class="nav-icon fa fa-file"></i>
                <p>گزارش مشکل</p>
              </a>
            </li>
            <li class="nav-header">درباره ما</li>
            <li class="nav-item">
              <a href="../about/about_co.php" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-danger"></i>
                <p class="text">شرکت OJ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../about/call_us.php" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-warning"></i>
                <p>تماس با ما</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../about/about_us.php" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-info"></i>
                <p>طراح وب</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ثبت سفارش</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="../../index.php">خانه</a></li>
              <li class="breadcrumb-item active">ثبت سفارش</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ثبت سفارش</h3>
              </div>

              <form role="form">
				  <br/>
				 <?php
				   include "../../functs/jdf.php";
				   echo "تاریخ امروز:";
				   $datet = jdate("Y/n/j");
				   echo $datet;
				  ?>
				  <div class="form-group">
                    <label>نام خریدار</label>
                    <input type="text" class="form-control" placeholder=" نام را وارد کنید " name="txtnameorder" id="txtnewcustomer" disabled>
                  </div>
				  <div class="form-group">
                    <label>خریدار ها</label>
                    <select class="form-control" name="txtnameorder" id="txtcustomers">
					<?php
						$sqlprname = "SELECT * FROM `official_user_hoghoghi`";
                        $resultprname=$connect->query($sqlprname);
                        foreach($resultprname as $rowsprname)
                        {
	                    echo '
					    <option>'.$rowsprname["name"].'</option>
					    ';
                        }
					?>
                    </select>
                  </div>
				  <label >خریدار</label>
				    <div class="form-check">
                      <input class="form-check-input" type="radio" value="darad" name="chnseller" id="newcoustomer">
                      <label class="form-check-label">خریدار جدید</label>
                    </div>
					<div class="form-check">
                      <input class="form-check-input" type="radio" value="nadarad" name="chnseller" id="coustomers">
                      <label class="form-check-label">نمایش خریدار ها</label>
                    </div>
				  <div class="form-group">
                    <label>تلفن خریدار</label>
                    <input type="text" class="form-control" placeholder=" تلفن خریدار را وارد کنید " name="txtphone">
                  </div>
				  <div class="form-check">
                      <input class="form-check-input" type="radio" value="rasmi" name="chrasmi">
                      <label class="form-check-label">فاکتور رسمی</label>
                    </div>
				  <div class="form-check">
                      <input class="form-check-input" type="radio" value="ghrasmi" name="chrasmi">
                      <label class="form-check-label">فاکتور غیر رسمی</label>
                    </div>
				  <div class="form-group">
                    <label>نام فروشنده</label>
                    <select class="form-control" name="txtnnameseller">
					    <option>الوان پلی اتیلن - کارخانه</option>
						<option>الوان پلی اتیلن - دفتر</option>
                    </select>
                  </div>
				 <div class="form-group">
                    <label>نام حساب</label>
                    <select class="form-control" name="txtnameseller">
					<?php
						$sqlprname = "SELECT * FROM `accounts`";
                        $resultprname=$connect->query($sqlprname);
                        foreach($resultprname as $rowsprname)
                        {
	                    echo '
					    <option>'.$rowsprname["nameac"].'</option>
					    ';
                        }
					?>
                    </select>
                  </div>
                <div class="card-body">
				  <div class="form-group">
                  <label>نام کالا</label>
                  <select name="namekala[]" multiple="multiple" class="form-control select2" style="width: 100%;text-align: right">
                    <?php
						$sqlprname = "SELECT * FROM `products`";
                        $resultprname=$connect->query($sqlprname);
                        foreach($resultprname as $rowsprname)
                        {
	                    echo '
					    <option value="'.$rowsprname["name"].'">'.$rowsprname["name"].'</option>
					    ';
                        }
					?>
                  </select>
                </div>
					<div class="form-group">
                    <label >سایز کالا</label>
                    <input type="text" class="form-control" placeholder="سایز کالا را وارد کنید" name="txtsizepr">
                  </div>
					<div class="form-group">
                    <label >ضخامت</label>
                    <input type="text" class="form-control" placeholder="ضخامت را وارد کنید" name="txtzekhamat">
                  </div>
					<div class="form-group">
                    <label >وزن (کیلوگرم)</label>
                    <input type="text" class="form-control" placeholder="وزن را وارد کنید" name="txtvazn">
                  </div>
					<div class="form-group">
                    <label> قیمت ( ریال )</label>
                    <input type="text" class="form-control" placeholder=" قیمت را وارد کنید " name="txtprice" onkeyup="javascript:this.value=itpro(this.value);">
                  </div>
					<div class="form-group">
                    <label>مبلغ بیانه ( ریال )</label>
                    <input type="text" class="form-control" placeholder=" مبلغ بیانه را وارد کنید " name="txtbeyane" onkeyup="javascript:this.value=itpro(this.value);">
                  </div>
					<div class="form-check">
                      <input class="form-check-input" type="radio" value="sade" name="chksade">
                      <label class="form-check-label">ساده</label>
                    </div>
					<div class="form-check">
                      <input class="form-check-input" type="radio" value="takla" name="chksade">
                      <label class="form-check-label">تک لا</label>
						<div class="form-group">
                    </div>
					<div class="form-check">
                      <input class="form-check-input" type="radio" value="chla" name="chksade">
                      <label class="form-check-label">چهار لا</label>
						<div class="form-group">
                    <label>سایز</label>
                    <input type="text" class="form-control" placeholder=" سایز را وارد کنید " name="txtsizechar">
                  </div>
                    </div>
                    <label >جرقه گیری</label>
				    <div class="form-check">
                      <input class="form-check-input" type="radio" value="darad" name="chjard">
                      <label class="form-check-label">دارد</label>
                    </div>
					<div class="form-check">
                      <input class="form-check-input" type="radio" value="nadarad" name="chjard">
                      <label class="form-check-label">ندارد</label>
                    </div>
					<div class="form-group">
                    <label>دسته</label>
                    <select class="form-control" name="txtdaste" id="txtdastee">
					    <option id="first-cho">موزی</option>
						<option id="sec-cho">رکابی</option>
						<option id="thi-cho">بندی</option>
						<option id="fou-cho">تقویت</option>
                    </select>
                  </div>

						<label >لب کاست</label>
				    <div class="form-check">
                      <input class="form-check-input radio-sec" type="radio" value="darad" name="chlabd" id="labd" disabled="">
                      <label class="form-check-label">دارد</label>
                    </div>
					<div class="form-check">
                      <input class="form-check-input radio-sec" type="radio" value="nadarad" name="chlabd" disabled="" id="labn">
                      <label class="form-check-label">ندارد</label>
                    </div>
						<label >ته کاست</label>
				    <div class="form-check">
                      <input class="form-check-input" type="radio" value="darad" name="chtd" disabled="" id="tahd">
                      <label class="form-check-label">دارد</label>
                    </div>
					<div class="form-check">
                      <input class="form-check-input" type="radio" value="ندارد" name="chtd" disabled="" id="tahn">
                      <label class="form-check-label">ندارد</label>
                    </div>
					<div class="form-group">
                    <label >رنگ جنس</label>
                    <input type="text" class="form-control"  placeholder="رنگ جنس را وارد کنید" name="txtcolorjens">
                  </div>
					<label >آج</label>
				    <div class="form-check">
                      <input class="form-check-input" type="radio" value="darad" name="chajd">
                      <label class="form-check-label">دارد</label>
                    </div>
					<div class="form-check">
                      <input class="form-check-input" type="radio" value="nadarad" name="chajd">
                      <label class="form-check-label">ندارد</label>
                    </div>
					<div class="form-group">
                    <label >عنوان چاپ</label>
                    <input type="text" class="form-control" placeholder="عنوان چاپ را وارد کنید" name="txtcoorder">
                  </div>
				    <div class="form-check">
                      <input class="form-check-input" type="radio" value="yekr" name="chyekrang">
                      <label class="form-check-label">یک رنگ</label>
                    </div>
					<div class="form-check">
                      <input class="form-check-input" type="radio" value="dor" name="chyekrang">
                      <label class="form-check-label">دو رنگ</label>
                    </div>
					<div class="form-check">
                      <input class="form-check-input" type="radio" value="ser" name="chyekrang">
                      <label class="form-check-label">سه رنگ</label>
                    </div>
					<div class="form-check">
                      <input class="form-check-input" type="radio" value="chr" name="chyekrang">
                      <label class="form-check-label">چهار رنگ</label>
                    </div>
				  <div class="form-group">
                    <label >رنگ چاپ</label>
                    <input type="text" class="form-control"  placeholder="رنگ چاپ را وارد کنید" name="txtcolorchap">
                  </div>
						<div class="form-check">
                      <input class="form-check-input" type="radio" value="yekro" name="chyekro">
                      <label class="form-check-label">یک رو</label>
                    </div>
						<div class="form-check">
                      <input class="form-check-input" type="radio" value="doro" name="chyekro">
                      <label class="form-check-label">دو رو</label>
                    </div>
					<div class="form-group">
                    <label >توضیحات</label>
                    <input type="text" class="form-control"  placeholder="توضیحات را وارد کنید" name="txttozihat">
                  </div>

                  <div class="card-footer">
                  <button type="submit" class="btn btn-info" name="btnenterpr">ثبت</button>
                  <button type="submit" class="btn btn-default float-left" name="btncancel">لغو</button>
                </div>
        <?php
		include "../../functs/connect2.php";
		include "../../functs/funcs.php";
		if(isset($_GET["btnenterpr"]))
		{
			$checka= 0;
			$txtnameorder=xss($_GET["txtnameorder"]);
			$datepr=xss(date("Y/m/d"));
			$txtphone=xss($_GET["txtphone"]);
			$txtnameseller=xss($_GET["txtnameseller"]);
			$namekalaf=$_GET["namekala"];
			$namekalaff="";
//			$namekala_final[];
//			foreach($namekala as $kala){
//				array_push($namekala_final,$kala)
//			}
			$namekala = implode($namekalaff."-",$namekalaf);
			echo $namekala;
			$txtsizepr=xss($_GET["txtsizepr"]);
			$txtzekhamat=xss($_GET["txtzekhamat"]);
			$txtvazn=xss($_GET["txtvazn"]);
			$txtprice=xss($_GET["txtprice"]);
			$txtbeyane=xss($_GET["txtbeyane"]);
			$txtsizechar=xss($_GET["txtsizechar"]);
			$txtdaste=xss($_GET["txtdaste"]);
			$txtcolorjens=xss($_GET["txtcolorjens"]);
			$txtcoorder=xss($_GET["txtcoorder"]);
			$txtcolorchap=xss($_GET["txtcolorchap"]);
		    $txttozihat=xss($_GET["txttozihat"]);
		    $txtnnameseller=xss($_GET["txtnnameseller"]);
			$txt4lasize="چهار لا".$txtsizechar;
			$sql4="select name from official_user_hoghoghi";
			$result4=$connect->query($sql4);
			if($_GET["chrasmi"] == "rasmi")
			{
			foreach($result4 as $rows1)
			{
			if($rows1["name"] == $txtnameorder)
			{
			$checka= 1;
			$sql5="select * from official_user_hoghoghi where name = ?";
			$result5=$connect->prepare($sql5);
			$result5->bindValue(1,$txtnameorder);
			$query5=$result5->execute();
			foreach($result5 as $rows)
			{
			$bedehkar=$txtprice-$txtbeyane;
			$sql6="UPDATE `official_user_hoghoghi` SET `bedehkar` = ? WHERE `official_user_hoghoghi`.`name` = ?; ";
			$result6=$connect->prepare($sql6);
			$result6->bindValue(1,$bedehkar);
			$result6->bindValue(2,$txtnameorder);
			$query6=$result6->execute();
		    $sql8="INSERT INTO `orders_rasmi` (`id`, `nameorder`, `nameseller`, `price`, `eghtesadi_num`, `sabt_num`, `shahrestan`, `shahr`, `addres`, `posti_code`, `phone`, `date`, `nnseller`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$result8=$connect->prepare($sql8);
			$result8->bindValue(1,$txtnameorder);
			$result8->bindValue(2,$txtnameseller);
			$result8->bindValue(3,$txtprice);
			$result8->bindValue(4,$rows["eghtesadi_num"]);
			$result8->bindValue(5,$rows["sabt_num"]);
			$result8->bindValue(6,$rows["shahrestan"]);
			$result8->bindValue(7,$rows["shahr"]);
			$result8->bindValue(8,$rows["addres"]);
			$result8->bindValue(9,$rows["posti_code"]);
			$result8->bindValue(10,$rows["phone"]);
			$result8->bindValue(11,$datepr);
			$result8->bindValue(12,$txtnnameseller);
			$query8=$result8->execute();
			$sql="INSERT INTO `orders` (`id`, `date`, `nameorder`, `coorder`, `namepr`, `zekhamat`, `vazn`, `price`, `4lasade`, `jaraghe`, `colorjens`, `aj`, `colorpach`, `daste`, `tozihat`, `seller`, `beyane`, `sizepr`, `labkaset`, `phone`, `tahkaset`, `xrang`, `yekro`, `sellername`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?); ";
			$result=$connect->prepare($sql);
			$result->bindValue(1,$datepr);
			$result->bindValue(2,$txtnameorder);
			$result->bindValue(3,$txtcoorder);
			$result->bindValue(4,$namekala);
			$result->bindValue(5,$txtzekhamat);
			$result->bindValue(6,$txtvazn);
			$result->bindValue(7,$txtprice);
			if($_GET["chksade"] == "sade")
			{
			$result->bindValue(8,"ساده");
			}
			if($_GET["chksade"] == "takla")
			{
			$result->bindValue(8,"تک لا");
			}
			if($_GET["chksade"] == "chla")
			{
			$result->bindValue(8,$txt4lasize);
			}
            if($_GET["chjard"] == "darad")
			{
			$result->bindValue(9,"دارد");
			}
			else
			{
			$result->bindValue(9,"ندارد");
			}
			$result->bindValue(10,$txtcolorjens);
			if($_GET["chajd"] == "darad")
			{
			$result->bindValue(11,"دارد");
			}
			else
			{
			$result->bindValue(11,"ندارد");
			}
			$result->bindValue(12,$txtcolorchap);
			$result->bindValue(13,$txtdaste);
			$result->bindValue(14,$txttozihat);
			$result->bindValue(15,$txtnameseller);
			$result->bindValue(16,$txtbeyane);
			$result->bindValue(17,$txtsizepr);
			if($_GET["chlabd"] == "darad")
			{
			$result->bindValue(18,"دارد");
			}
			else
			{
			$result->bindValue(18,"ندارد");
			}
			$result->bindValue(19,$txtphone);
			if($_GET["chtd"] == "darad")
			{
			$result->bindValue(20,"دارد");
			}
			else
			{
			$result->bindValue(20,"ندارد");
			}
			if($_GET["chyekrang"] == "yekr")
			{
			$result->bindValue(21,"یک رنگ");
			}
			if($_GET["chyekrang"] == "dor")
			{
			$result->bindValue(21,"دو رنگ");
			}
			if($_GET["chyekrang"] == "ser")
			{
			$result->bindValue(21,"سه رنگ");
			}
			if($_GET["chyekrang"] == "chr")
			{
			$result->bindValue(21,"چهار رنگ");
			}
			if($_GET["chyekro"] == "yekro")
			{
			$result->bindValue(22,"یک رو");
			}
			else
			{
			$result->bindValue(22,"دو رو");
			}
			$result->bindValue(23,$txtnnameseller);
			$query=$result->execute();
			}
			if($query8)
			{
				echo "فاکتور رسمی جدید برای کاربر قدیمی ثبت شد";
			}
				else
				{
				echo "خطا در ثبت فاکتور رسمی برای کاربر قدیمی";
				}
			}
			}
			if($checka == 0)
			{
		    $bedehkar=$txtprice-$txtbeyane;
		    $sql7="INSERT INTO `official_user_hoghoghi` (`id`, `eghtesadi_num`, `sabt_num`, `posti_code`, `name`, `addres`, `shahrestan`, `shahr`, `phone`, `bestankar`, `bedehkar`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";
			$result7=$connect->prepare($sql7);
			$result7->bindValue(1,0);
			$result7->bindValue(2,0);
			$result7->bindValue(3,0);
			$result7->bindValue(4,$txtnameorder);
			$result7->bindValue(5,"");
			$result7->bindValue(6,"");
			$result7->bindValue(7,"");
			$result7->bindValue(8,$txtphone);
			$result7->bindValue(9,0);
			$result7->bindValue(10,$bedehkar);
			$query7=$result7->execute();
			if($query7)
			{
				echo "کاربر جدیدی اضافه شد";
			}
			else
			{
				echo "خطا در ثبت کاربر جدید";
			}
			$sql9="INSERT INTO `orders_rasmi` (`id`, `nameorder`, `nameseller`, `price`, `eghtesadi_num`, `sabt_num`, `shahrestan`, `shahr`, `addres`, `posti_code`, `phone`, `date`, `nnseller`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$result9=$connect->prepare($sql9);
			$result9->bindValue(1,$txtnameorder);
			$result9->bindValue(2,$txtnameseller);
			$result9->bindValue(3,$txtprice);
			$result9->bindValue(4,"");
			$result9->bindValue(5,"");
			$result9->bindValue(6,"");
			$result9->bindValue(7,"");
			$result9->bindValue(8,"");
			$result9->bindValue(9,"");
			$result9->bindValue(10,$txtphone);
			$result9->bindValue(11,$datepr);
			$result9->bindValue(12,$txtnnameseller);
			$query9=$result9->execute();
			$sql="INSERT INTO `orders` (`id`, `date`, `nameorder`, `coorder`, `namepr`, `zekhamat`, `vazn`, `price`, `4lasade`, `jaraghe`, `colorjens`, `aj`, `colorpach`, `daste`, `tozihat`, `seller`, `beyane`, `sizepr`, `labkaset`, `phone`, `tahkaset`, `xrang`, `yekro`, `sellername`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?); ";
			$result=$connect->prepare($sql);
			$result->bindValue(1,$datepr);
			$result->bindValue(2,$txtnameorder);
			$result->bindValue(3,$txtcoorder);
			$result->bindValue(4,$namekala);
			$result->bindValue(5,$txtzekhamat);
			$result->bindValue(6,$txtvazn);
			$result->bindValue(7,$txtprice);
			if($_GET["chksade"] == "sade")
			{
			$result->bindValue(8,"ساده");
			}
			if($_GET["chksade"] == "takla")
			{
			$result->bindValue(8,"تک لا");
			}
			if($_GET["chksade"] == "chla")
			{
			$result->bindValue(8,$txt4lasize);
			}
            if($_GET["chjard"] == "darad")
			{
			$result->bindValue(9,"دارد");
			}
			else
			{
			$result->bindValue(9,"ندارد");
			}
			$result->bindValue(10,$txtcolorjens);
			if($_GET["chajd"] == "darad")
			{
			$result->bindValue(11,"دارد");
			}
			else
			{
			$result->bindValue(11,"ندارد");
			}
			$result->bindValue(12,$txtcolorchap);
			$result->bindValue(13,$txtdaste);
			$result->bindValue(14,$txttozihat);
			$result->bindValue(15,$txtnameseller);
			$result->bindValue(16,$txtbeyane);
			$result->bindValue(17,$txtsizepr);
			if($_GET["chlabd"] == "darad")
			{
			$result->bindValue(18,"دارد");
			}
			else
			{
			$result->bindValue(18,"ندارد");
			}
			$result->bindValue(19,$txtphone);
			if($_GET["chtd"] == "darad")
			{
			$result->bindValue(20,"دارد");
			}
			else
			{
			$result->bindValue(20,"ندارد");
			}
			if($_GET["chyekrang"] == "yekr")
			{
			$result->bindValue(21,"یک رنگ");
			}
			if($_GET["chyekrang"] == "dor")
			{
			$result->bindValue(21,"دو رنگ");
			}
			if($_GET["chyekrang"] == "ser")
			{
			$result->bindValue(21,"سه رنگ");
			}
			if($_GET["chyekrang"] == "chr")
			{
			$result->bindValue(21,"چهار رنگ");
			}
			if($_GET["chyekro"] == "yekro")
			{
			$result->bindValue(22,"یک رو");
			}
			else
			{
			$result->bindValue(22,"دو رو");
			}
			$result->bindValue(23,$txtnnameseller);
			$query=$result->execute();
			if($query)
			{
			echo "فاکتور رسمی ثبت شد";
			}
			else
			{
			echo "خطا در ثبت فاکتور";
			}
			}
			}
			else
			{
			$sql10="select name from official_user_hoghoghi";
			$result10=$connect->query($sql10);
			if($_GET["chrasmi"] != "rasmi")
			{
			foreach($result10 as $rows2)
			{
			if($rows2["name"] == $txtnameorder)
			{
			$checka= 1;
			$sql15="select * from official_user_hoghoghi where name = ?";
			$result15=$connect->prepare($sql15);
			$result15->bindValue(1,$txtnameorder);
			$query15=$result15->execute();
			foreach($result15 as $rows)
			{
			$bedehkar=$txtprice-$txtbeyane;
			$sql16="UPDATE `official_user_hoghoghi` SET `bedehkar` = ? WHERE `official_user_hoghoghi`.`name` = ?; ";
			$result16=$connect->prepare($sql16);
			$result16->bindValue(1,$bedehkar);
			$result16->bindValue(2,$txtnameorder);
			$query16=$result16->execute();
			}
			$str1=toupper($txtnameorder);
			$sql17="INSERT INTO `orders` (`id`, `date`, `nameorder`, `coorder`, `namepr`, `zekhamat`, `vazn`, `price`, `4lasade`, `jaraghe`, `colorjens`, `aj`, `colorpach`, `daste`, `tozihat`, `seller`, `beyane`, `sizepr`, `labkaset`, `phone`, `tahkaset`, `xrang`, `yekro`, `sellername`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?); ";
			$result17=$connect->prepare($sql17);
			$result17->bindValue(1,$datepr);
			$result17->bindValue(2,$txtnameorder);
			$result17->bindValue(3,$txtcoorder);
			$result17->bindValue(4,$namekala);
			$result17->bindValue(5,$txtzekhamat);
			$result17->bindValue(6,$txtvazn);
			$result17->bindValue(7,$txtprice);
			if($_GET["chksade"] == "sade")
			{
			$result17->bindValue(8,"ساده");
			}
			if($_GET["chksade"] == "takla")
			{
			$result17->bindValue(8,"تک لا");
			}
			if($_GET["chksade"] == "chla")
			{
			$result17->bindValue(8,$txt4lasize);
			}
            if($_GET["chjard"] == "darad")
			{
			$result17->bindValue(9,"دارد");
			}
			else
			{
			$result17->bindValue(9,"ندارد");
			}
			$result17->bindValue(10,$txtcolorjens);
			if($_GET["chajd"] == "darad")
			{
			$result17->bindValue(11,"دارد");
			}
			else
			{
			$result17->bindValue(11,"ندارد");
			}
			$result17->bindValue(12,$txtcolorchap);
			$result17->bindValue(13,$txtdaste);
			$result17->bindValue(14,$txttozihat);
			$result17->bindValue(15,$txtnameseller);
			$result17->bindValue(16,$txtbeyane);
			$result17->bindValue(17,$txtsizepr);
			if($_GET["chlabd"] == "darad")
			{
			$result17->bindValue(18,"دارد");
			}
			else
			{
			$result17->bindValue(18,"ندارد");
			}
			$result17->bindValue(19,$txtphone);
			if($_GET["chtd"] == "darad")
			{
			$result17->bindValue(20,"دارد");
			}
			else
			{
			$result17->bindValue(20,"ندارد");
			}
			if($_GET["chyekrang"] == "yekr")
			{
			$result17->bindValue(21,"یک رنگ");
			}
			if($_GET["chyekrang"] == "dor")
			{
			$result17->bindValue(21,"دو رنگ");
			}
			if($_GET["chyekrang"] == "ser")
			{
			$result17->bindValue(21,"سه رنگ");
			}
			if($_GET["chyekrang"] == "chr")
			{
			$result17->bindValue(21,"چهار رنگ");
			}
			if($_GET["chyekro"] == "yekro")
			{
			$result17->bindValue(22,"یک رو");
			}
			else
			{
			$result17->bindValue(22,"دو رو");
			}
			$result17->bindValue(23,$txtnnameseller);
			$query17=$result17->execute();
			if($query17)
			{
			    echo "سفارش با موفقیت ثبت شد";
			}
			else
			{
				echo "خاطا در ثبت سفارش";
			}
			}
			}
			if($checka == 0)
			{
			$bedehkar=$txtprice-$txtbeyane;
		    $sql18="INSERT INTO `official_user_hoghoghi` (`id`, `eghtesadi_num`, `sabt_num`, `posti_code`, `name`, `addres`, `shahrestan`, `shahr`, `phone`, `bestankar`, `bedehkar`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";
			$result18=$connect->prepare($sql18);
			$result18->bindValue(1,0);
			$result18->bindValue(2,0);
			$result18->bindValue(3,0);
			$result18->bindValue(4,$txtnameorder);
			$result18->bindValue(5,"");
			$result18->bindValue(6,"");
			$result18->bindValue(7,"");
			$result18->bindValue(8,$txtphone);
			$result18->bindValue(9,0);
			$result18->bindValue(10,$bedehkar);
			$query18=$result18->execute();
			if($query18)
			{
				echo "کاربر جدیدی اضافه شد";
			}
			else
			{
				echo "خطا در ثبت کاربر جدید";
			}
			$sql="INSERT INTO `orders` (`id`, `date`, `nameorder`, `coorder`, `namepr`, `zekhamat`, `vazn`, `price`, `4lasade`, `jaraghe`, `colorjens`, `aj`, `colorpach`, `daste`, `tozihat`, `seller`, `beyane`, `sizepr`, `labkaset`, `phone`, `tahkaset`, `xrang`, `yekro`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?); ";
			$result=$connect->prepare($sql);
			$result->bindValue(1,$datepr);
			$result->bindValue(2,$txtnameorder);
			$result->bindValue(3,$txtcoorder);
			$result->bindValue(4,$namekala);
			$result->bindValue(5,$txtzekhamat);
			$result->bindValue(6,$txtvazn);
			$result->bindValue(7,$txtprice);
			if($_GET["chksade"] == "sade")
			{
			$result->bindValue(8,"ساده");
			}
			if($_GET["chksade"] == "takla")
			{
			$result->bindValue(8,"تک لا");
			}
			if($_GET["chksade"] == "chla")
			{
			$result->bindValue(8,$txt4lasize);
			}
            if($_GET["chjard"] == "darad")
			{
			$result->bindValue(9,"دارد");
			}
			else
			{
			$result->bindValue(9,"ندارد");
			}
			$result->bindValue(10,$txtcolorjens);
			if($_GET["chajd"] == "darad")
			{
			$result->bindValue(11,"دارد");
			}
			else
			{
			$result->bindValue(11,"ندارد");
			}
			$result->bindValue(12,$txtcolorchap);
			$result->bindValue(13,$txtdaste);
			$result->bindValue(14,$txttozihat);
			$result->bindValue(15,$txtnameseller);
			$result->bindValue(16,$txtbeyane);
			$result->bindValue(17,$txtsizepr);
			if($_GET["chlabd"] == "darad")
			{
			$result->bindValue(18,"دارد");
			}
			else
			{
			$result->bindValue(18,"ندارد");
			}
			$result->bindValue(19,$txtphone);
			if($_GET["chtd"] == "darad")
			{
			$result->bindValue(20,"دارد");
			}
			else
			{
			$result->bindValue(20,"ندارد");
			}
			if($_GET["chyekrang"] == "yekr")
			{
			$result->bindValue(21,"یک رنگ");
			}
			if($_GET["chyekrang"] == "dor")
			{
			$result->bindValue(21,"دو رنگ");
			}
			if($_GET["chyekrang"] == "ser")
			{
			$result->bindValue(21,"سه رنگ");
			}
			if($_GET["chyekrang"] == "chr")
			{
			$result->bindValue(21,"چهار رنگ");
			}
			if($_GET["chyekro"] == "yekro")
			{
			$result->bindValue(22,"یک رو");
			}
			else
			{
			$result->bindValue(23,$txtnnameseller);
			}
			$query=$result->execute();
			if($query)
			{
			echo "سفارش ثبت شد";
			}
			else
			{
			echo "خطا در ثبت سفارش";
			}
		}
			}
			}
		}
		?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>تمام حقوق این سایت متعلق به تیم OJ میباشد &copy; 2020 <a href="https://www.instagram.com/omidjaberi79/">امید جابری</a>.</strong>
  </footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- Persian Data Picker -->
<script src="../../dist/js/persian-date.min.js"></script>
<script src="../../dist/js/persian-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()


    $('.normal-example').persianDatepicker();




  })
</script>
				
<script>
$( ".form-check" ).change(function () {
//    $( ".form-control option:selected" ).each(function() {
//      if($(this).attr("id")=="first-cho"){
//		console.log('sec1');
//	  }
//
//	  else if($(this).attr("id")=="sec-cho"){
//		console.log('sec2');
//	  }
//
//	  else if($(this).attr("id")=="sec-cho"){
//		console.log('sec3');
//	  }
//
//		else if($(this).attr("id")=="fou-cho"){
//			console.log('sec4');
//		 }
//    });
	
	$('.form-check input').each(function(){
		if($('#newcoustomer').prop('checked')){
		   $('#txtcustomers').attr('disabled','');
			$('#txtnewcustomer').removeAttr('disabled','');
		   }
	else if($('#coustomers').prop('checked')){
		   
		$('#txtnewcustomer').attr('disabled','');
			$('#txtcustomers').removeAttr('disabled','');
		   }
	
//	console.log('testss');
	})
	
  });
//	$('#txtdastee').each(function(){
//		if ($('#thi-cho').is(':selected')){
//		$('#labd').removeAttr('disabled','');
//		$('#labn').removeAttr('disabled','');
//		$('#tahd').removeAttr('disabled','');
//		$('#tahn').removeAttr('disabled','');
//		
//	}
	$('#txtdastee').change(function(){
		if ($('#first-cho').is(':selected')||$('#sec-cho').is(':selected')){
//		if(this.selected){
		   	$('#labd').attr('disabled',"");
			$('#labn').attr('disabled',"");
			$('#tahd').attr('disabled',"");
			$('#tahn').attr('disabled',"");
			
			$('#labd').attr('value',"");
			$('#labn').attr('value',"");
			$('#tahd').attr('value',"");
			$('#tahn').attr('value',"");
		   }
		
		if ($('#thi-cho').is(':selected')){
//		if(this.selected){
		   	$('#labd').removeAttr('disabled');
			$('#labn').removeAttr('disabled');
			$('#tahd').removeAttr('disabled');
			$('#tahn').removeAttr('disabled');
			
			$('#labd').attr('value',"darad");
			$('#labn').attr('value',"nadarad");
			$('#tahd').attr('value',"darad");
			$('#tahn').attr('value',"ندارد");
			
		   }
		if ($('#fou-cho').is(':selected')){
//		if(this.selected){
		   	$('#labd').attr('disabled',"");
			$('#labn').attr('disabled',"");
			$('#tahd').attr('value',"darad");
			$('#tahn').attr('value',"ندارد");
			$('#tahd').removeAttr('disabled');
			$('#tahn').removeAttr('disabled');
		   }
	})

	
//	});
</script>
<script>
function itpro(Number) 
  {
       Number+= '';
        Number= Number.replace(',', ''); Number= Number.replace(',', ''); Number= Number.replace(',', '');
        Number= Number.replace(',', ''); Number= Number.replace(',', ''); Number= Number.replace(',', '');
        x = Number.split('.');
        y = x[0];
        z= x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
         while (rgx.test(y))
          y= y.replace(rgx, '$1' + ',' + '$2');
          return y+ z;
  }
</script>
</body>
</html>
