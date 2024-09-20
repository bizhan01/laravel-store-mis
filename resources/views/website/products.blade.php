@extends('website.masterLayouts')
@section('content')
<div style="height: 113px;"></div>
<div class="unit-5 overlay" style="background-image: url('/website/images/Website-product-banner.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">محصولات</h2>
        <p class="mb-0 unit-6"><a href="index.html">خانه</a> <span class="sep">></span> <span>محصولات</span></p>
      </div>
    </div>


    <div class="site-section bg-light" dir="rtl">
      <div class="container">
        <div class="row">
          @foreach($products as $product)
          <div class="col-md-6 mb-5 mb-lg-4 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a href="#" class="mb-3 d-block img-a"><img src="/UploadedImages/products/{{$product->productImage}}"  alt="Image" class="img-fluid rounded" style="height: 300px"></a>
            <center>
              <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a href="#" class="text-black">{{$product->productName}}</a></h2>
              <a href="productShowDetails/{{ $product->id }}"><button class="btn btn-success btn-rounded btn-sm" name="button">جزئیات محصول</button></a>
            </center>
            </div>
          </div>
          @endforeach
        </div>


        <div class="row mt-5" dir="rtl">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#"><i class="icon-keyboard_arrow_left h5"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="icon-keyboard_arrow_right h5"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
