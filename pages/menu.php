<?php

	$sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="menu">
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d3e600;">
	<a class="navbar-brand" href="index.php">Trang chủ</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		<?php
		if(isset($_SESSION['dangky'])){ 

		?>
		<li class="nav-item active"><a class="nav-link" href="index.php?dangxuat=1" style="color:red" onclick="return confirm('Bạn có muốn đăng xuất tài khoản ?')">Đăng xuất</a></li>
		<li class="nav-item "><a class="nav-link" href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
		<li class="nav-item "><a class="nav-link" href="index.php?quanly=lichsu">Lịch sử mua hàng</a></li>
		<?php
		}else{ 
		?>
		<li class="nav-item active"><a class="nav-link" href="index.php?quanly=dangnhap" style="color:red">Đăng nhập</a></li>
		<?php
		} 
		?>
		<!-- <li class="nav-item"><a class="nav-link" href="index.php?quanly=tintuc">Tin tức</a></li> -->
		<li class="nav-item"><a class="nav-link" href="index.php?quanly=lienhe">Liên hệ</a></li>
		</ul>
		<form class="form-inline my-2 my-lg-0" action="index.php?quanly=timkiem" method="POST">
		<input class="form-control mr-sm-2" type="search" class="rounded" placeholder="Tìm kiếm sản phẩm..." autocomplete="off" name="tukhoa" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem" >Tìm kiếm</button>
		</form>
		<ul class="list_menu">
		<li style="float: right">
			<a href="index.php?quanly=giohang" id="cart" class="cart" data-totalitems="0">
				<span><?php //if(isset($_SESSION['soluong'])){echo $_SESSION['soluong'];}?></span>
			</a>
		</li>
		</ul>
	</div>
	</nav>
</div>
