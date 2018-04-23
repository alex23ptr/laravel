@extends('layouts.layout')

@section('content')  
<section id="advertisement">
    <div class="container">
        <img src="{{asset('images/shop/advertisement.jpg')}}" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
            @foreach($categories as $cat)
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                 <div class="single-products"> 
                     <a href="{{url('categories/')}}/{{$cat}} " class="btn btn-default"><i class="fa fa-plus"></i> {{$cat}}</a>
                 </div>
              </div>
            </div>
            @endforeach
            </div>


        </div>
    </div>
</section>
@endsection