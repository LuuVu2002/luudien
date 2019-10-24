<?php
	trait cartModel{		
		public function cart_add($id,$sl){
		    if(isset($_SESSION['cart'][$id])){
		        $_SESSION['cart'][$id]['number']+=$sl;
		    } 
		    else {
		        $conn = Connection::getInstance();
		        $query = $conn->prepare("select * from tbl_product where product_id=:id");
		        $query->execute(array("id"=>$id));
		        $query->setFetchMode(PDO::FETCH_OBJ);
		        $product = $query->fetch();
		        $_SESSION['cart'][$id] = array(
		            'id' => $id,
		            'name' => $product->product_name,
		            'img' => $product->product_img,
		            'number' => $sl,
		            'price' => $product->saleprice
		        );
		    }
		}
		/**
		 * Cập nhật số lượng sản phẩm
		 * @param int
		 * @param int
		 */
		public function cart_update($id, $number){
		    if($number==0){
		        unset($_SESSION['cart'][$id]);
		    } else {
		        $_SESSION['cart'][$id]['number'] = $number;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function cart_delete($id){
		    unset($_SESSION['cart'][$id]);
		}
		public function cart_total(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['price'] * $product['number'];
		    }
		    return $total;
		}
		
		public function cart_number(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		public function cart_list(){
		    return $_SESSION['cart'];
		}
		public function cart_destroy(){
		    $_SESSION['cart'] = array();
		}

	}	
?>