@include('frontend.header')
<style>
    .banner {
        position: relative;
        width: 100%;
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        overflow: hidden;
    }
    .banner img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }
    .banner-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    max-width: 700px;
    text-align: center;
    color: white; /* White text for better contrast */
    font-weight: bold;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7); /* Adds a shadow for better readability */
	}
    .btn-theme {
        background: #ff6600;
        color: white;
        padding: 12px 30px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
        display: inline-block;
    }
    .btn-theme:hover {
        background: #cc5200;
    }

	body{
	background-color: #eee;
	}
	.container{
	width: 900px;
	}

	.card{
	background-color: #fff;
	border:none;
	border-radius: 10px;
	width: 190px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

	.image-container{
	position: relative;
	}

	.thumbnail-image{
	border-radius: 10px !important;
	}

	.dress-name{
	font-size: 13px;
	font-weight: bold;
	width: 75%;
	}

	.new-price{
	font-size: 13px;
	font-weight: bold;
	color: rgb(58, 131, 113);

	}
	.rating-star{
	font-size: 10px !important;
	}
	.rating-number{
	font-size: 10px;
	color: grey;

	}
	.buy{
	font-size: 12px;
	color: purple;
	font-weight: 500;
	}

	.item-size{
	width: 15px;
	height: 15px;
	border-radius: 50%;
	background: #fff;
	border: 1px solid grey;
	color: grey;
	font-size: 10px;
	text-align: center;
	align-items: center;
	display: flex;
	justify-content: center;
	}

</style>
<!-- Intro Block -->
 @foreach($banners as $banner)
<section class="introBlock position-relative">
    <div class="banner">
        <img src="{{ asset( $banner->image) }}" alt="Banner Image">
        <!-- <div class="banner-content">
            <h1>{{$banner->name}}</h1>
            <p>{{$banner->desc}}.</p>
        </div> -->
    </div>
</section>
@endforeach
<!-- featureSec -->
<section class="featureSec container-fluid overflow-hidden pt-xl-12 pt-lg-10 pt-md-80 pt-5 pb-xl-10 pb-lg-4 pb-md-2 px-xl-14 px-lg-7">
	<!-- mainHeader -->
	<header class="col-12 mainHeader mb-7 text-center">
		<h1 class="headingIV playfair fwEblod mb-4">Featured Product</h1>
		<span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('frontend/images/hbdr.png') }}" alt="Header Border" class="img-fluid img-bdr"></span>
		<p>Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
	</header>
<div class="col-12 p-0 overflow-hidden d-flex flex-wrap">
   		 <!-- featureCol -->
		@foreach($products as $product)
		{{-- <div class="featureCol px-3 mb-6">
			<div class="border">
				<div class="imgHolder position-relative w-100 overflow-hidden">
					<img src="{{ asset($product->image_name) }}" alt="{{ $product->name }}" class="img-fluid w-100">
					<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
						<li class="mr-2 overflow-hidden">
						<a href="product_detail/{{$product->id}}" class="icon-cart d-block"></a>
						</li>
					</ul>
				</div>
				<div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
					<span class="title d-block mb-2">
					{{ $product->name }}
					</span>
					<span class="price d-block fwEbold">{{ number_format($product->price) }} $</span>
					<span class="descroption d-block mb-2">{{ $product->short_desc }}</span>
				</div>
			</div>
		</div> --}}
				                {{-- NEW PRODUCT CARD --}}
		<div class="col-md-3">
			<div class="card">
				<div class="image-container">
					<div class="first">
					</div>
					<img src="https://i.imgur.com/8JIWpnw.jpg" class="img-fluid rounded thumbnail-image">
				</div>
				<div class="product-detail-container p-2">
					<div class="d-flex justify-content-between align-items-center">
						<h5 class="dress-name">White traditional long dress</h5>
						<div class="d-flex flex-column mb-2">
							<span class="new-price">$3.99</span>
						</div>
					</div>
					<div class="d-flex justify-content-between align-items-center pt-1">
						<div>
							<span class="rating-number">ONE LINE DESCRIPTION FOR PRODUCT</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
</div>

</section>
<!-- contactListBlock -->
<div class="contactListBlock container overflow-hidden pt-xl-8 pt-lg-10 pt-md-8 pt-4 pb-xl-12 pb-lg-10 pb-md-4 pb-1">
	<div class="row">
		<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
			<!-- contactListColumn -->
			<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
				<span class="icon icon-van"></span>
				<div class="alignLeft pl-2">
					<strong class="headingV fwEbold d-block mb-1">Free shipping order</strong>
					<p class="m-0">On orders over $100</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
			<!-- contactListColumn -->
			<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
				<span class="icon icon-gift"></span>
				<div class="alignLeft pl-2">
					<strong class="headingV fwEbold d-block mb-1">Special gift card</strong>
					<p class="m-0">The perfect gift idea</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
			<!-- contactListColumn -->
			<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-4 px-md-2 px-3 d-flex">
				<span class="icon icon-recycle"></span>
				<div class="alignLeft pl-2">
					<strong class="headingV fwEbold d-block mb-1">Return &amp; exchange</strong>
					<p class="m-0">Free return within 3 days</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
			<!-- contactListColumn -->
			<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
				<span class="icon icon-call"></span>
				<div class="alignLeft pl-2">
					<strong class="headingV fwEbold d-block mb-1">Support 24 / 7</strong>
					<p class="m-0">Customer support</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- productOfferSec -->
<div class="productOfferSec container overflow-hidden py-xl-12 py-lg-10 py-md-8 py-5">
	<div class="row">
		<div class="col-12 col-sm-6 mb-sm-0 mb-2">
			<a href="shop.html" class="w-100"><img src="https://via.placeholder.com/570x350" alt="image description" class="img-fluid"></a>
		</div>
		<div class="col-12 col-sm-6">
			<a href="shop.html" class="w-100"><img src="http://placehold.it/570x350" alt="image description" class="img-fluid"></a>
		</div>
	</div>
</div>
<!-- dealSecHolder -->
<section class="dealSecHolder container-fluid overflow-hidden py-xl-12 py-lg-10 py-md-8 py-5">
	<!-- mainHeader -->
	<header class="col-12 mainHeader mb-7 text-center">
		<h1 class="headingIV playfair fwEblod mb-5">Daily Deal</h1>
		<span class="headerBorder d-block mb-md-5 mb-3"><img src="images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
		<p class="mb-6">There are many variations of passages of lorem ipsum available.</p>
		<div id="defaultCountdown" class="comming-timer"></div>
	</header>
	<!-- dealSlider -->
	<div class="dealSlider w-100 px-lg-10 px-md-5">
		<div>
			<!-- featureCol -->
			<div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
				<div class="border">
					<div class="imgHolder position-relative w-100 overflow-hidden">
						<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
						<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
							<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
						</ul>
					</div>
					<div class="text-center py-5 px-2">
						<span class="title d-block mb-2"><a href="shop-detail.html">Sint Incidunt Utlabore</a></span>
						<span class="price d-block fwEbold"><del>75.00 $</del>60.50 $</span>
						<span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
						<span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
					</div>
				</div>
			</div>
		</div>
		<div>
			<!-- featureCol -->
			<div class="featureCol px-3 w-100 mb-sm-8 mb-6">
				<div class="border">
					<div class="imgHolder position-relative w-100 overflow-hidden">
						<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
						<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
							<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
						</ul>
					</div>
					<div class="text-center py-5 px-2">
						<span class="title d-block mb-2"><a href="shop-detail.html">Aliquam Quaerat Voluptem</a></span>
						<span class="price d-block fwEbold">58.00 $</span>
					</div>
				</div>
			</div>
		</div>
		<div>
			<!-- featureCol -->
			<div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
				<div class="border">
					<div class="imgHolder position-relative w-100 overflow-hidden">
						<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
						<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
							<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
						</ul>
					</div>
					<div class="text-center py-5 px-2">
						<span class="title d-block mb-2"><a href="shop-detail.html">Neque Porro Quisquam</a></span>
						<span class="price d-block fwEbold"><del>60.00 $</del>48.00 $</span>
						<span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
					</div>
				</div>
			</div>
		</div>
		<div>
			<!-- featureCol -->
			<div class="featureCol px-3 w-100 mb-sm-8 mb-6">
				<div class="border">
					<div class="imgHolder position-relative w-100 overflow-hidden">
						<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
						<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
							<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
						</ul>
					</div>
					<div class="text-center py-5 px-2">
						<span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
						<span class="price d-block fwEbold">65.00 $</span>
					</div>
				</div>
			</div>
		</div>
		<div>
			<!-- featureCol -->
			<div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
				<div class="border">
					<div class="imgHolder position-relative w-100 overflow-hidden">
						<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
						<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
							<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
						</ul>
					</div>
					<div class="text-center py-5 px-2">
						<span class="title d-block mb-2"><a href="shop-detail.html">Aliquam Quaerat Voluptatem</a></span>
						<span class="price d-block fwEbold">80.00 $</span>
						<span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
					</div>
				</div>
			</div>
		</div>
		<div>
			<!-- featureCol -->
			<div class="featureCol px-3 w-100 mb-sm-8 mb-6">
				<div class="border">
					<div class="imgHolder position-relative w-100 overflow-hidden">
						<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
						<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
							<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
						</ul>
					</div>
					<div class="text-center py-5 px-2">
						<span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
						<span class="price d-block fwEbold">65.00 $</span>
					</div>
				</div>
			</div>
		</div>
		<div>
			<!-- featureCol -->
			<div class="featureCol w-100 px-3 mb-sm-8 mb-6">
				<div class="border">
					<div class="imgHolder position-relative w-100 overflow-hidden">
						<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
						<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
							<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
							<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
						</ul>
					</div>
					<div class="text-center py-5 px-2">
						<span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
						<span class="price d-block fwEbold">65.00 $</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- partnerSec -->
<div class="partnerSec container overflow-hidden pt-xl-12 pb-xl-23 pt-lg-10 pt-md-8 pt-5 pb-lg-20 pb-md-16 pb-10">
	<div class="row">
		<div class="col-12">
			<!-- partnerSlider -->
			<div class="partnerSlider d-flex flex-wrap">
				<div>
					<div class="logoColumn d-flex align-items-center justify-content-center">
						<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
					</div>
				</div>
				<div>
					<div class="logoColumn d-flex align-items-center justify-content-center">
						<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
					</div>
				</div>
				<div>
					<div class="logoColumn d-flex align-items-center justify-content-center">
						<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
					</div>
				</div>
				<div>
					<div class="logoColumn d-flex align-items-center justify-content-center">
						<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
					</div>
				</div>
				<div>
					<div class="logoColumn d-flex align-items-center justify-content-center">
						<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
					</div>
				</div>
				<div>
					<div class="logoColumn d-flex align-items-center justify-content-center">
						<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
					</div>
				</div>
				<div>
					<div class="logoColumn d-flex align-items-center justify-content-center">
						<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid px-xl-20 px-lg-14">
	<!-- subscribeSecBlock -->
	<section class="subscribeSecBlock bgCover col-12 pt-xl-24 pb-xl-12 pt-lg-20 pt-md-16 pt-10 pb-md-8 pb-5" style="background-image: url(http://placehold.it/1720x465)">
		<header class="col-12 mainHeader mb-sm-9 mb-6 text-center">
			<h1 class="headingIV playfair fwEblod mb-4">Subscribe Our Newsletter</h1>
			<span class="headerBorder d-block mb-md-5 mb-3"><img src="images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
			<p class="mb-sm-6 mb-3">Enter Your email address to join our mailing list and keep yourself update</p>
		</header>
		<form class="emailForm1 mx-auto overflow-hidden d-flex flex-wrap">
			<input type="email" class="form-control px-4 border-0" placeholder="Enter your mail...">
			<button type="submit" class="btn btnTheme btnShop fwEbold text-white py-3 px-4">Shop Now <i class="fas fa-arrow-right ml-2"></i></button>
		</form>
	</section>
</div>
@include('frontend.footer')
