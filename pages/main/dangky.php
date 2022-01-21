<?php
	if(isset($_POST['dangky'])) {
		if(!empty($_POST['hovaten']) && 
			!empty($_POST['email']) &&
			!empty($_POST['dienthoai']) &&
			!empty($_POST['matkhau']) &&
			!empty($_POST['diachi']) && !empty($_POST['pass'])){
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$pattern = '#^?[\d]3?-?[\d]2?-[\d]{2}\.[\d]{3}-[\d]{3}$#';
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		$matkhaua = md5($_POST['pass']);
		if($matkhaua === $matkhau ) {
			$sql_dangky = mysqli_query($mysqli,"INSERT INTO dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
			if($sql_dangky){
				echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
				$_SESSION['dangky'] = $tenkhachhang;
				$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
				header('Location:index.php?quanly=giohang');
			}
			}else{
				echo '<b style="color:red">Bạn chưa nhập đầy đủ thông tin</b>';
			}
		}
		
	}
?>
<h3>Đăng ký thành viên</h3>
<a href="index.php?quanly=dangnhap">
	<button type="button" class="btn btn-primary">Đăng nhập nếu đã có tài khoản</button>
</a>

<style type="text/css">
	table.dangky tr td {
	    padding: 5px;
	}
</style>
<form action="" method="POST">
<table class="dangky" style="border-collapse: collapse;border:none">
	<p style="color: red">Hãy nhập đầy đủ và đúng thông tin</p>
	<tr>
		<td>Họ và tên</td>
		<td><input type="text" size="50" name="hovaten" required="required"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="mail" size="50" name="email" placeholder="VD: abc@ltkk.vn" pattern="^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$" required="required"><small id="emailHelp" class="form-text text-muted">Đây sẽ là mục nhập Tài khoản ở trang đăng nhâp</small></td>
	</tr>
	<tr>
		<td>Điện thoại</td>
		<td><input type="text" size="50" name="dienthoai" placeholder="VD: 0273456789" pattern="^(0[234][0-9]{8}|1[89]00[0-9]{4})$"></td>
	</tr>
	<tr>
		<td>Địa chỉ</td>
		<td><input type="text" size="50" name="diachi"></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input id="pass" type="password" size="50" name="matkhau" required="required"></td>
		<td><i class="fas fa-eye" onclick="password()"></i></td>
	</tr>
	<tr>
		<td>Nhập lại mật khẩu</td>
		<td><input id="pass1" type="password" size="50" name="pass" required="required"></td>
		<td><i class="fas fa-eye" onclick="password_again()"></i></td>
	</tr>
	<tr>
		<td></td>
		<td><input class="btndangky btn btn-success" type="submit" name="dangky" value="Đăng ký"></td>
	</tr>
</table>

</form>
<script type="text/javascript">
	var x = true;
	function password(){
		if(x){
			document.getElementById('pass').type="text";
			x = false;
		}else{
			document.getElementById('pass').type="password";
			x = true;
		}
	}
	function password_again(){
		if(x){
			document.getElementById('pass1').type="text";
			x = false;
		}else{
			document.getElementById('pass1').type="password";
			x = true;
		}
	}
</script>