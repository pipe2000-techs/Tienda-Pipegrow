
    <header class="site-navbar" role="banner" >
      <div class="site-navbar-top" >
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
					<div class="site-top-icons">
					<ul>
					  <li><a href="https://www.instagram.com/pipe_grow/" target="_blank"><span class="icon-instagram" ></span></a></li>
					  <li><a href="https://api.whatsapp.com/send?phone=573124930278&text=%20nesesito%20informacion%20de&source=&data=" target="_blank"><span class="icon-whatsapp"></span></a></li>
					  <li><a href="#" target="_blank"><span class="icon-facebook-square"></span></a></li>
					</ul>
				   </div>
				</div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
				<div class="site-logoi">
					<a href="<?php echo $dominio;?>" class="js-logo-clone"><img src="<?php echo $dominio;?>/logo/pipegrow.png" width="200" height="200"></a>
				</div>
			</div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon-person"></span></a></li>
                  <li><a href="#"><span class="icon-heart-o"></span></a></li>
                  <li>
                    <a href="<?php echo $dominio;?>/cart" class="site-cart">
                      <span class="icon-shopping_cart"></span>
                      <span class="count"><?php echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);?></span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
    