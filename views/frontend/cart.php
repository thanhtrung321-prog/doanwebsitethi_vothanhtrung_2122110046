<?php
if (isset($_REQUEST['addcart'])) {
   require_once 'views/frontend/cart-addcart.php';
} else {
   if (isset($_REQUEST['updatecart'])) {
      require_once 'views/frontend/cart-updatecart.php';
   } else {
      require_once 'views/frontend/cart-content.php';
   }
}
