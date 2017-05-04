@extends('frontend.masterpage.masterpage')
@section('title')
      Homepage
@endsection

@section('content')
<!-- banner -->
<div class="banner" >
</div>
<!-- //banner -->
<!--content-->
<div class="content">
</div>
<!---->
<div class="content-top">
   <div class="col-md-5 col-md1 animated wow fadeInLeft" data-wow-delay=".1s">
      <div class="col-3">
         <a href="#">
            <img src="images/products/lenovo-ideapad-100s-11iby-11-6-z3735f-2gb-32g-emmc-integrated-graph_1.jpg" class="img-responsive " alt="">
            <div class="col-pic">
               <h5> LENOVO</h5>
               <p>Tiên Phong trong công nghệ</p>
            </div>
         </a>
      </div>
   </div>
   <div class="col-md-7 col-md2 animated wow fadeInRight" data-wow-delay=".1s">
      @foreach ($products as $product)
      <div class="col-sm-4 item-grid simpleCart_shelfItem">
         <div class="grid-pro">
            <div  class=" grid-product " >
               <figure>
                  <a href="{{ asset('/product/' . $product->Id)}}">
                     <div class="grid-img">
                        <img  src="{{ asset($product->Image) }}" class="img-responsive"  alt="">
                  
                  </div>			
                  </a>		
               </figure>
            </div>
            <div class="women">
               <a href="#"><img src="images/ll.png" alt=""></a>
               <h6><a href="simple"></a>{{ $product->Name }}</h6>
               <p ><em class="item_price">{{ $product->PriceVN() }}</em></p>
               <a href="{{ asset('/checkout/' . $product->Id)}}" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
            </div>
         </div>
      </div>
      @endforeach
      <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
</div>
<div class="content-top">
   <div class="col-md-7 col-md2 animated wow fadeInRight" data-wow-delay=".1s">
      @foreach ($proPhones as $proPhone)
      <div class="col-sm-4 item-grid simpleCart_shelfItem">
         <div class="grid-pro">
            <div  class=" grid-product " >
               <figure>
                  <a href="{{ asset('/product/' . $proPhone->Id)}}">
                     <div class="grid-img">
                        <img  src="{{ asset( $proPhone->Image ) }}" class="img-responsive"  alt="">
                  </a>
                  </div>			
                  </a>		
               </figure>
            </div>
            <div class="women">
               <a href="#"><img src="images/ll.png" alt=""></a>
               <h6><a href="simple"></a>{{ $proPhone->Name }}</h6>
               <p ><em class="item_price">{{ $proPhone->PriceVN() }}</em></p>
               <a href="{{ url('checkout') }}" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
            </div>
         </div>
      </div>
      @endforeach
      <div class="clearfix"></div>
   </div>
   <div class="col-md-5 col-md1 animated wow fadeInRight" data-wow-delay=".1s">
      <div class="col-3">
         <a href="#">
            <img src="images/products/1_26IPhone.jpg" class="img-responsive " alt="">
            <div class="col-pic">
               <h5> Iphone </h5>
               <p>Dẫn đầu trong công nghệ Smartphone</p>
            </div>
         </a>
      </div>
   </div>
   <div class="clearfix"></div>
</div>
@endsection