<header id="header" class="header header-style-1">
	<div class="container-fluid">
		<div class="row">
			<div class="topbar-menu-area">
				<div class="container">
					<div class="topbar-menu left-menu">
						<ul>
							<li class="menu-item">
								<a title="Hotline: (+123) 456 789" href="#"><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
							</li>
						</ul>
					</div>
					<div class="topbar-menu right-menu">
						<ul>
							<li class="menu-item">
								<a title="Register or Login" href="#" class="btnLogin-popup">Login</a>
							</li>
							<!-- <li class="menu-item">
								<a title="Register or Login" href="{{ route('register')}}">Register</a>
							</li> -->
							<!-- my account admin -->
							<li class="menu-item menu-item-has-children parent">
								<a title="My Account" href="#">My Account (Admin)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="submenu admin">
									<li class="menu-item"><a href="#">Products</a></li>
									<li class="menu-item"><a href="#">Categories</a></li>
									<li class="menu-item"><a href="#">Coupons</a></li>
									<li class="menu-item"><a href="#">Orders</a></li>
									<li class="menu-item"><a href="#">Customers</a></li>
									<li class="menu-item"><a title="Logout" href="#">Logout</a></li>
								</ul>
							</li>
							<!-- my account admin -->

							<!-- my account user -->
							<li class="menu-item menu-item-has-children parent">
								<a title="My Account" href="#">My Account (User)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="submenu user">
									<li class="menu-item"><a href="{{route('profile.edit')}}">Account Details</a></li>
									<li class="menu-item"><a href="{{route('profile.edit')}}">Orders</a></li>
									<li class="menu-item"><a title="Logout" href="#">Logout</a></li>
								</ul>
							</li>
							<!-- my account user -->
						</ul>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="mid-section main-info-area">

					<div class="wrap-logo-top left-section">
						<a href="{{ route('home') }}" class="link-to-home"><img src="{{ asset('/frontend/images/logo-top-1.jpg') }}" alt="mercado"></a>
					</div>

					<div class="wrap-search center-section">
						<div class="wrap-search-form">
							<form action="#" id="form-search-top" name="form-search-top">
								<input type="text" name="search" value="" placeholder="Search here...">
								<button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
								<div class="wrap-list-cate">
									<input type="hidden" name="product-cate" value="0" id="product-cate">
									<a href="#" class="link-control">All Category</a>
									<ul class="list-cate">
										<li class="level-0">All Category</li>
										<li class="level-1">-Office furniture</li>
										<li class="level-2">Desk Office</li>
										<li class="level-2">Chair Office</li>
										<li class="level-2">Cabinet-shelves Office</li>

										<li class="level-1">-Living furniture</li>
										<li class="level-2">Sofa</li>
										<li class="level-2">Sofa table</li>
										<li class="level-2">TV Shelf</li>
										<li class="level-2">Bookshelf-Decorative shelf</li>
										<li class="level-2">Decorative cabinets</li>
										<li class="level-2">Combo living room</li>

										<li class="level-1">-Kitchen - Dining furniture</li>
										<li class="level-2">Dining table</li>
										<li class="level-2">Dining chair</li>
										<li class="level-2">Dining table and chair set</li>
										<li class="level-2">Kitchen cabinets</li>

										<li class="level-1">-Bedroom furniture</li>
										<li class="level-2">Bed</li>
										<li class="level-2">Wardrobe - clothes shelves</li>
										<li class="level-2">Makeup table</li>
										<li class="level-2">Combo bedroom</li>
									</ul>
								</div>
							</form>
						</div>
					</div>

					<div class="wrap-icon right-section">

						<div class="wrap-icon-section wishlist">
							<a href="#" class="link-direction">
								<i class="fa fa-heart" aria-hidden="true"></i>
								<div class="left-info">
									<span class="index count-product-wish">0 item</span>
									<span class="title">Wishlist</span>
								</div>
							</a>
						</div>

						<div class="wrap-icon-section minicart">
							<a href="#" class="link-direction btnCart-popup">
								<i class="fa fa-shopping-basket" aria-hidden="true"></i>
								<div class="left-info">
									<span class="index count-product-cart" id="count">4 items</span>
									<span class="title">CART</span>
								</div>
							</a>
						</div>

						<div class="wrap-icon-section show-up-after-1024">
							<a href="#" class="mobile-navigation">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>
					</div>


				</div>
			</div>

			<div class="nav-section header-sticky">

				<div class="primary-nav-section">
					<div class="container">
						<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
							<li class="menu-item home-icon">
								<a href="{{route('home')}}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
							</li>
							<li class="menu-item">
								<a href="{{route('about')}}" class="link-term mercado-item-title">About Us</a>
							</li>
							<li class="menu-item">
								<a href="{{route('product.index')}}" class="link-term mercado-item-title">Products</a>
							</li>
							<li class="menu-item">
								<a href="{{ route('cart') }}" class="link-term mercado-item-title">Cart</a>
							</li>
							<li class="menu-item">
								<a href="{{route('checkout')}}" class="link-term mercado-item-title">Checkout</a>
							</li>
							<li class="menu-item">
								<a href="{{route('contact')}}" class="link-term mercado-item-title">Contact Us</a>
							</li>

						</ul>
					</div>
				</div>

				<!-- <div class="header-nav-section">
					<div class="container">
						<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info">
							<li class="menu-item">
								<a href="{{route('product.index')}}" class="link-term">Weekly Featured</a>
								<span class="nav-label hot-label">hot</span>
							</li>
							<li class="menu-item">
								<a href="{{route('product.index')}}" class="link-term">Hot Sale items</a>
								<span class="nav-label hot-label">hot</span>
							</li>
							<li class="menu-item">
								<a href="{{route('product.index')}}" class="link-term">Top new items</a>
								<span class="nav-label hot-label">hot</span>
							</li>
							<li class="menu-item">
								<a href="{{route('product.index')}}" class="link-term">Top Selling</a>
								<span class="nav-label hot-label">hot</span>
							</li>
							<li class="menu-item">
								<a href="{{route('product.index')}}" class="link-term">Top rated items</a>
								<span class="nav-label hot-label">hot</span>
							</li>
						</ul>
					</div>
				</div> -->

			</div>
		</div>
	</div>
</header>