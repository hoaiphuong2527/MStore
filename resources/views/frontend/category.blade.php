@extends('frontend.masterpage.masterpage')
@section('content')
<!--banner-->
<div class="banner-top">
   <div class="container">
      <h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Products</h2>
      <h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="{{ asset ('/') }}">Home</a><label>/</label>Products</h3>
      <div class="clearfix"></div>
   </div>
</div>
<!--content-->
<div class="product">
   <div class="container">
      <div class="col-md-3 product-bottom">
         <!--categories-->
         <!--//menu-->
         <!--price-->
         <div class="price animated wow fadeInUp animated" data-wow-delay=".5s" >
            <h3>Price Range</h3>
            <div class="price-head">
               <div class="col-md-6 price-head1">
                  <div class="price-top1">
                     <span class="price-top">$</span>
                     <input type="text"  value="0">
                  </div>
               </div>
               <div class="col-md-6 price-head2">
                  <div class="price-top1">
                     <span class="price-top">$</span>
                     <input type="text"  value="500">
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
         <!--//price-->
         <!--colors-->
         <!--//colors-->
         <!---->
      </div>
      <div class="col-md-9 animated wow fadeInRight" data-wow-delay=".5s">
         <div class="mens-toolbar">
            <p >Showing 1–9 of 21 results</p>
            <p class="showing">
               Sorting By
               <select>
                  <option value=""> Name</option>
                  <option value="">  Rate</option>
                  <option value=""> Color </option>
                  <option value=""> Price </option>
               </select>
            </p>
            <p>
               Show
               <select>
                  <option value=""> 9</option>
                  <option value=""> 10</option>
                  <option value=""> 11 </option>
                  <option value=""> 12 </option>
               </select>
            </p>
            <div class="clearfix"></div>
         </div>
         <div class="mid-popular">
            @foreach ($products as $product)
            <div class="col-sm-4 item-grid item-gr  simpleCart_shelfItem">
               <div class="grid-pro">
                  <div  class=" grid-product " >
                     <figure>
                        <div class="grid-img">
                           <a href="{{ asset('/product/' . $product->Id)}}">
                           <img  src="{{ asset($product->Image) }}" class="img-responsive"  alt="">
                           </a>
                        </div>
                     </figure>
                  </div>
                  <div class="women">
                     <a href="#"><img src="{{ asset('images/ll.png') }}" alt=""></a>
                     <h6><a href="{{ asset('/product/' . $product->Id)}}">{{ $product->Name }}</a></h6>
                     <p ><em class="item_price">{{ $product->PriceVN() }} VND</em></p>
                     <a href="{{ url('checkout') }}" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                  </div>
               </div>
            </div>
            @endforeach
            <div class="clearfix"></div>
         </div>
      </div>
      </div class="clearfix">
   </div>
</div>
</div>
<!--//products-->
@endsection