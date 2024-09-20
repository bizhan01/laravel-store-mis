@extends('website.masterLayouts')
@section('content')
<div style="height: 113px;"></div>
<div class="unit-5 overlay" style="background-image: url('/website/images/double-exposuresuccessful-collaboration-concept-ceo-260nw-1536476852.jpg');">
  <div class="container text-center">
    <h2 class="mb-0">همکاران / شرکا</h2>
    <p class="mb-0 unit-6"><a href="index.html">خانه</a> <span class="sep">></span> <span>همکاران / شرکا</span></p>
  </div>
</div>





<div class="site-section block-15">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2>همکاران / شرکای ما</h2>
      </div>
    </div>


    <div class="nonloop-block-15 owl-carousel">
      @foreach($companies as $company)
        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="image-play">
              <img src="/uploadedImages/companies/{{$company->image}}" alt="" class="img-fluid" style="height: 300px">
            </a>
          </div>
          <center>
          <h2 class="heading mb-0 h5"><a href="#">{{$company->companyName}}</a></h2>
          <span class="mb-3 d-block post-date"><a href="#">{{$company->activity}}</a></span>
        </center>
        </div>
      @endforeach
    </div>


    <div class="row">

    </div>
  </div>
</div>

@endsection
