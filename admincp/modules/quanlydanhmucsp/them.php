<fieldset>
	<legend>Thêm danh mục sản phẩm</legend>
	<table class="table table-bordered" width="50%" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
	  <tr>
	  	<td>Tên danh mục</td>
	  	<td><input type="text" name="tendanhmuc" required></td>
	  </tr>
	  <tr>
	    <td>Thứ tự</td>
	    <td><input type="text" name="thutu" required></td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="themdanhmuc" class="btn btn-primary" value="Thêm danh mục sản phẩm"></td>
	  </tr>
 </form>
</table>
</fieldset>
<a href="?action=quanlydanhmucsanpham&query=them" class="btn btn-success">
	Quay lại
</a>