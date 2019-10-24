
<?php 
    $this->layout = "views/frontend/layout_sanpham.php";
 ?>
 <div class="dv-child-left">
 <div class="template-cart">
          <form action="index.php?controller=cart&action=update" method="post">
            <div class="table-responsive">
              <table class="table table-cart" width="73%">
                <thead>
                  <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th>Giá bán lẻ</th>
                    <th class="quantity">Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                <?php if(isset($_SESSION["cart"])): ?>
                  <?php foreach($_SESSION["cart"] as $product): ?>
                  <tr>
                    <td style="width: 150px; height: 150px;"><img src="assets/upload/news/<?php echo $product["img"]; ?>" class="img-responsive" /></td>
                    <td><a href="index.php?controller=product&action=detail&product_id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a></td>
                    <td> <?php echo number_format($product["price"]); ?>₫ </td>
                    <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống"></td>
                    <td><p><b><?php echo number_format($product["number"]*$product["price"]); ?>₫</b></p></td>
                    <td><a href="index.php?controller=cart&action=delete&product_id=<?php echo $product["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <?php endforeach; ?>  
        <?php endif; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6"><a href="index.php?controller=cart&action=destroy" class="button pull-left" style="background: #98D0B9; color: black; padding: 0px 7px;">Xóa toàn bộ</a> <a href="index.php?controller=product" class="button pull-right black" style="background: #98D0B9; color: black; padding: 0px 7px;">Tiếp tục mua hàng</a>
                      <input type="submit" class="button pull-right" value="Cập nhật" style="background: #98D0B9; margin-right: 10px;"></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </form>
          <?php if($this->cart_number() > 0): ?>
          <div class="total-cart" style="float: right; margin-right: 10px;"> Tổng tiền thanh toán: 
            <?php echo number_format($this->cart_total()); ?>₫ <br>
            <a href="index.php?controller=checkout" class="button black" style="width: 100px; float: right;">Thanh toán</a> </div>
          <?php endif; ?>
        </div>
      </div>