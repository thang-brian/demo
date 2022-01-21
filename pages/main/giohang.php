<div><h3 style="font-weight: bold;">Giỏ hàng</h3> <br> 
  <?php
  if(isset($_SESSION['dangky'])){
    echo 'Xin chào: '.'<span style="color:violet">'.$_SESSION['dangky'].'</span>';
  } 
  ?>
</div>
  <?php
  if(isset($_SESSION['message'])){
  ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Cảnh báo!</strong> <?php echo $_SESSION['message'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
    // echo '<p class="p-3 mb-2 bg-danger text-white text-center">'.$_SESSION['message'].'</p>';
  }
  if(isset($_SESSION['cart'])){
  	$i = 0;
  	$tongtien = 0;
    $soluong = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
  		$tongtien+=$thanhtien;
  		$i++;
      $soluong += $cart_item['soluong'];
      //$_SESSION['soluong'] = $soluong;
      
  ?>
  <table class="table table-bordered">
  <tr>
    <th style="width:20%">Hình ảnh</th>
    <th style="width:40%">Tên sản phẩm</th>
    <th style="width:20%">Giá tiền</th>
    <th style="width:10%">Số lượng</th>
    <th style="width:10%">Quản lý</th>
  </tr>
  <tr>
    <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px" height="150px"></td>
    <td class="text-nowrap"><?php echo $cart_item['tensanpham']; ?></td>
    <td class="text-primary"><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
    <td>
    	<a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>&id="><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
    	<?php echo $cart_item['soluong']; ?>
    	<a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
    </td>
    <td><a style="text-decoration: none; color: red;" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>" onclick="return confirm('Bạn có muốn xóa sản phẩm ?')">Xoá</a></td>
  </tr>
</table>
  <?php
  	}
  ?>
  <b>Tổng số lượng giỏ hàng: <?php echo $soluong;?></b>
   <tr>
    <td colspan="8">
      <br>

    	<button type="button" class="btn btn-danger">
        <a style="color: white;text-decoration: none;" href="pages/main/themgiohang.php?xoatatca=1" onclick="return confirm('Bạn có muốn xóa tất cả sản phẩm ?')">Xoá tất cả
        </a>
      </button>
      <?php
        if(isset($_SESSION['dangky'])){
          ?>
           <button class="btn btn-success" type="button">
              <a style="color: white;text-decoration: none" href="index.php?quanly=muahang">Xác nhận mua hàng</a>
            </button>
      <?php
        }else{
      ?>
        <button class="btn btn-success">
          <a style="color: white;text-decoration: none" href="index.php?quanly=dangky">Đăng ký đặt hàng</a>
        </button>
      <?php
        }
      ?>
    </td>
  </tr>
  <?php
  }else{ 
  ?>
   <tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
   
  </tr>
  <?php
  } 
  ?>