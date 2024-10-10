<?php   

session_start();  
$conn=mysqli_connect("localhost","root","","perfumeshop");  

if(isset( $_SESSION['id'])){

  $id=$_SESSION['id'];
  $query1 = "SELECT * FROM cart where id='$id'";
echo "Chao mung ".$id;

}

else{

  }
?>




@extends('Frontend.layouts.main')
@section('main-container')

<section id="home-section" class="hero">
  
    <div class="home-slider owl-carousel">
    <div class="slider-item js-fullheight">
        <div class="overlay"></div>
      <div class="container-fluid p-0">
        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
            <img class="one-third order-md-last img-fluid"  src="{{url('Frontend/images/bg_1.png')}}" alt="">
            <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <div class="text">
                    <span class="subheading">Sản Phẩm Mới</span>
                    <div class="horizontal">
                      <h1 class="mb-4 mt-3">Mẫu mới nhất năm 2022</h1>
                      <p class="mb-4">Các notes hương nước hoa chính là những thành phần quan trọng tạo nên hương thơm của một chai nước hoa..</p>
                      
                      <p><a href="#" class="btn-custom">Đặt ngay</a></p>
                    </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="slider-item js-fullheight">
        <div class="overlay"></div>
      <div class="container-fluid p-0">
        <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
            <img class="one-third order-md-last img-fluid" src="{{url('Frontend/images/nuochoa.jpg')}}" alt="">
            <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <div class="text">
                    <span class="subheading">Sản Phẩm Mới</span>
                    <div class="horizontal">
                      <h1 class="mb-4 mt-3">New Shoes Winter Collection</h1>
                      <p class="mb-4">Những hương thơm đầu tiên Head Notes bạn cảm nhận được khi xịt hoặc thoa nước hoa lên da chính là lớp hương đầu,</p>
                      
                      <p><a href="#" class="btn-custom">Đặt ngay</a></p>
                    </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
          <div class="row no-gutters ftco-services">
    <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services p-4 py-md-5">
        <div class="icon d-flex justify-content-center align-items-center mb-4">
              <span class="flaticon-bag"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">miễn phí giao hàng</h3>
          <p>Xa xa, đằng sau những ngọn núi chữ, xa những đất nước Vokalia và Consonantia</p>
        </div>
      </div>      
    </div>
    <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services p-4 py-md-5">
        <div class="icon d-flex justify-content-center align-items-center mb-4">
              <span class="flaticon-customer-service"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Hỗ trợ khách hàng</h3>
          <p>Với chúng tôi chúng tui sử dụng dịch vụ chăm sóc khách hàng 24/.</p>
        </div>
      </div>    
    </div>
    <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services p-4 py-md-5">
        <div class="icon d-flex justify-content-center align-items-center mb-4">
              <span class="flaticon-payment-security"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Thanh toán an toàn</h3>
          <p>Chúng tôi sử dụng hệ thống thanh toán an toàn nhất để thanh toán an toàn</p>
        </div>
      </div>      
    </div>
  </div>
      </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
               <div class="col-md-12 heading-section text-center ftco-animate">
           <h2 class="mb-4">Nước hoa mới</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
      </div>
    </div>   		
    </div>
    {{-- @foreach ($product as $du)
    <form method="POST"> --}}
    

      <div class="row">
        <?php foreach($product as $du): ?>
          <div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex"  >
            <div class="product d-flex flex-column" >
              <a href="#" class="img-prod"><img class="img-fluid" src="public/Frontend/images/{{ $du->image }}" width='600' height='800' alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3">
                <div class="d-flex">
                  <div class="cat">
                    <span>{{$du['category']}}</span>
                  </div>
                  <div class="rating">
                    <p class="text-right mb-0">
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>
                  </div>
                </div>
                <h3><a href="#">{{$du['name']}}</a></h3>
                <div class="pricing">
                  <p class="price"><span>{{$du['price']}}</span></p>
                </div>
                <p class="bottom-area d-flex px-3">
                  <a href="{{ route('add.cart1', $du->id) }}" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                  <a href="{{ route('add.to.cart', $du->id)}}"  class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                </p>
              </div>
            </div>
          </div>
        @endforeach 
          
                      
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> 
      
  {{-- </form> --}}
    {{-- @endforeach  --}}
</section>


<section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
  <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-4">
              <div class="choose-wrap divider-one img p-5 d-flex align-items-end" style="background-image: url(Frontend/images/lu1.jpg);">
  
                <div class="text text-center text-white px-2">
                  <span class="subheading">Nước hoa cho nam</span>
                  <h2>Men's Collection</h2>
                  <p>Đây còn được gọi là “trái tim” của nước hoa (Heart Notes)t</p>
                  <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
                </div>
              </div>
            </div>
              <div class="col-lg-8">
              <div class="row no-gutters choose-wrap divider-two align-items-stretch">
                  <div class="col-md-12">
                      <div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end" style="background-image: url(Frontend/images/cho2.jpg);">
                          <div class="col-md-7 d-flex align-items-center">
                              <div class="text text-white px-5">
                                  <span class="subheading">Women's Shoes</span>
                                  <h2>Nước hoa nữ</h2>
                                  <p>Mang đến sự tin tế và hương thơn diệu nhẹ.</p>
                                  <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="row no-gutters">
                          <div class="col-md-6">
                              <div class="choose-wrap wrap img align-self-stretch bg-light d-flex align-items-center">
                                  <div class="text text-center px-5">
                                      <span class="subheading">Giảm giá mùa hè</span>
                                      <h2>Extra 50% Off</h2>
                                      <p>.</p>
                                      <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="choose-wrap wrap img align-self-stretch d-flex align-items-center" style="background-image: url(Frontend/images/001.avif);">
                                  <div class="text text-center text-white px-5">
                                      <span class="subheading">Shoes</span>
                                      <h2>Bán chạy nhất</h2>
                                      <p>. Những notes hương này sẽ giữ lại những tinh tuý hàng đầu của một hương thơm đồng thời mang đến những trải nghiệm mùi hương sâu sắc hơn</p>
                                      <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
  </div>
</section>

<section class="ftco-section ftco-deal bg-primary">
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <img src="Frontend/images/004.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-6">
              <div class="heading-section heading-section-white">
                  <span class="subheading">Giá tốt giữa tháng</span>
          <h2 class="mb-3">Đang giảm giá</h2>
        </div>
              <div id="timer" class="d-flex mb-4">
                    <div class="time" id="days"></div>
                    <div class="time pl-4" id="hours"></div>
                    <div class="time pl-4" id="minutes"></div>
                    <div class="time pl-4" id="seconds"></div>
                  </div>
                  <div class="text-deal">
                      <h2><a href="#">Đang giảm giá mạnh</a></h2>
                      <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                      <ul class="thumb-deal d-flex mt-4">
                          
                      </ul>
                  </div>
          </div>
      </div>
  </div>
</section>

<section class="ftco-section testimony-section">
<div class="container">
  <div class="row">
      <div class="col-lg-5">
          <div class="services-flow">
              <div class="services-2 p-4 d-flex ftco-animate">
                  <div class="icon">
                      <span class="flaticon-bag"></span>
                  </div>
                  <div class="text">
                      <h3>Miễn phí vận chuyển</h3>
                      <p class="mb-0">Chúng tôi giao hàng đến mọi nơi</p>
                  </div>
              </div>
              <div class="services-2 p-4 d-flex ftco-animate">
                  <div class="icon">
                      <span class="flaticon-heart-box"></span>
                  </div>
                  <div class="text">
                      <h3>Quà tặng có giá trị</h3>
                      <p class="mb-0">Gói tặng kèm ưu đãi hấp dẫn</p>
                  </div>
              </div>
              <div class="services-2 p-4 d-flex ftco-animate">
                  <div class="icon">
                      <span class="flaticon-payment-security"></span>
                  </div>
                  <div class="text">
                      <h3>Thanh toán an toàn</h3>
                      <p class="mb-0">Chúng tối sử dụng công nghệ thanh toán tân tiến nhất</p>
                  </div>
              </div>
              <div class="services-2 p-4 d-flex ftco-animate">
                  <div class="icon">
                      <span class="flaticon-customer-service"></span>
                  </div>
                  <div class="text">
                      <h3> Hỗ trợ cả ngày</h3>
                      <p class="mb-0">Chăm sóc khác hàng 24/7</p>
                  </div>
              </div>
          </div>
      </div>
    <div class="col-lg-7">
        <div class="heading-section ftco-animate mb-5">
          <h2 class="mb-4">Khách hàng hài lòng của chúng tôi nói</h2>
          <p>Chúng tôi đã nhận được những sản phẩm tuyệt vời</p>
        </div>
      <div class="carousel-testimony owl-carousel">
        <div class="item">
          <div class="testimony-wrap">
            <div class="user-img mb-4" style="background-image: url(Frontend/images/person_1.jpg)">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-4 pl-4 line">Cảm ơn cửa hàng đã mang đến các sản phẩm chất lượng</p>
              <p class="name">Garreth Smith</p>
              <span class="position">Marketing Manager</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap">
            <div class="user-img mb-4" style="background-image: url(Frontend/images/person_2.jpg)">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="name">Garreth Smith</p>
              <span class="position">Interface Designer</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap">
            <div class="user-img mb-4" style="background-image: url(Frontend/images/person_3.jpg)">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="name">Garreth Smith</p>
              <span class="position">UI Designer</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap">
            <div class="user-img mb-4" style="background-image: url(Frontend/images/person_1.jpg)">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="name">Garreth Smith</p>
              <span class="position">Web Developer</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap">
            <div class="user-img mb-4" style="background-image: url(Frontend/images/person_1.jpg)">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="name">Garreth Smith</p>
              <span class="position">System Analyst</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>






