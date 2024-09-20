@extends('website.masterLayouts')
@section('content')
<div style="height: 113px;"></div>
<div class="site-blocks-cover overlay inner-page" style="background-image: url('/website/images/IMG-20210727-WA0005.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="h3 mb-0">نتیجه جستجو</h1>
        <h3 class="mb-0 unit-6"><span>از اعتماد همیشگی شما سپاسگزاریم</span></h3><br>
         @if(isset($details))
         @foreach($details as $order)
        <p class="h2  mb-10" style="background-color: green; color: white; padding: 15px;">
          مشتری گرامی سفارش شما
          @if($order->status == 1)
             در حال پروسیس
           @elseif($order->status == 2)
             آماده تحویل
           @elseif($order->status == 3)
             تحویل داده شده
           @else
          @endif
          است
        </p><br>
        @endforeach
        @else(isset($message))
          <p class="h2  mb-10" style="background-color: #f70c17; color: white; padding: 15px; direction: rlt">{{$message}}</p><br>
        @endif
        <p><a href="{{route('contactUs')}}" class="btn btn-outline-warning py-3 px-4">تماس باما</a> <a href="{{route('welcome')}}" class="btn btn-warning py-3 px-4">برگشت</a></p>
      </div>
    </div>
  </div>
</div>
@endsection
