@extends('website.masterLayouts')
@section('content')
@if(isset($details))
@foreach($details as $product)
<br></br>
<section class="site-section" dir="rtl" >
  <div class="container  border rounded" >
    <br></br>
  <center>
    <h3>مشتری گرامی اصالت کالای شما در سیستم مورد تایید میباشد.</h3>
    <br>
    <button class="btn btn-primary btn-lg"> به شرکت {{$product->companyName}} خوش آمدید</button>
  </center><br>
  <div class="container" style=" text-align: right">
    <div class="row">
      <div class="col-lg-5">
        <div class=" p-3 border rounded mb-4">
          <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">مشخصات کالا</h3>
          <ul class="list-unstyled pl-3 mb-0" style="direction: rtl;">
            <li class="mb-2"><strong class="text-black">اسم کالا/محصول: </strong> {{$product->productName}}</li>
            <li class="mb-2"><strong class="text-black">کشور/کمپنی تولید کننده: </strong> {{$product->companyName}}</li>
            <li class="mb-2"><strong class="text-black">نوع کالا: </strong> {{$product->type}}</li>
            <li class="mb-2"><strong class="text-black">قیمت کالا:  </strong> {{$product->price}}</li>
            <li class="mb-2"><strong class="text-black">وزن کالا: </strong> {{$product->weight}}</li>
            <li class="mb-2"><strong class="text-black">محل فروش:  </strong> {{$product->salesPlace}}</li>
            <li class="mb-2"><strong class="text-black">تاریخ تولید:  </strong> {{$product->productionDate}}</li>
            <li class="mb-2"><strong class="text-black">تاریخ انقضا:  </strong> {{$product->expireDate}}</li>
            <li class="mb-2"><strong class="text-black">کد اصالت:  </strong> {{$product->id}}</li>
          </ul>
        </div>

        <div class="bg-light p-3 border rounded">
          <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">شریک ساختن</h3>
          <div class="px-3">
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
          </div>
        </div>

      </div>

      <div class="col-lg-5">
        <div class="mb-5">
          <figure class="mb-5"><img src="/uploadedImages/products/{{$product->productImage}}" alt="" class="img-fluid rounded"></figure>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="mb-5">
          <figure class="mb-5"><img src="/website/images/confirm.png" alt="" class="img-fluid rounded"></figure>
        </div>
      </div>
    </div>

    <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
      <div class="col-md-2">
        <a href="/uploadedImages/companies/{{$product->image}}"><img src="/uploadedImages/companies/{{$product->image}}" alt="Image" class="img-fluid" style="height: 100px"></a>
      </div>
      <div class="col-md-4">
        <h2><a href="job-single.html">{{$product->companyName}}</a> </h2>
        <p class="meta"><strong>{{$product->activity}}</strong></p>
      </div>
      <div class="col-md-3 text-left">
        <h3>{{$product->email}}</h3>
        <span class="meta">{{$product->address}}</span>
      </div>
      <div class="col-md-3 text-md-right">
        <strong class="text-black" dir="ltr">{{$product->phone}}</strong>
      </div>
    </div>

  </div>
  </div>
</section>

@endforeach
@else(isset($message))
<br><br>
<br><br>
<br><br>
  <p class="h2  mb-10" style="text-align: center; background-color: #f70c17; color: white; padding: 15px; direction: rlt">{{$message}}</p><br>
@endif
@endsection
