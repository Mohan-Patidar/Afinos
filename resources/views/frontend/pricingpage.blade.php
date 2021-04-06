@extends('layouts.app')

@section('content')
<div class="medium-container mt-60 mb-50">
        <div class="text-center mb-50 service-lengths flex justify-center">
        @foreach($packagesToReturn as $key => $packages)
            <div class="inline-block  ml-20 mr-20 ml-sm-0 mr-sm-15 smol serivce-length " data-target=".month1">
                <span></span>
                <div class="length-name mt-10 mb-5">{{$key}}</div>

            </div>
        @endforeach
        </div>

        <div class="row">
        @foreach($packagesToReturn as $key => $packages)
            @foreach($packages as $package)
            <div class="pricing-block  text-center col-lg-4 col-md-12 mb-md-30">
                <div class="light-grey-background service-type pt-25 pb-20 top-curved-border">
                    <h3>{{$package->name}}</h3>

                </div>
                <div class="inner pb-40 bottom-curver-border">

                    <span class="price inline-block mt-40 mb-20 ">
                        <span class="month1  pricing-info-large">
                            <div class="flex">{{$package->price}} <div class="text-left"><sup>.00</sup><sub>/Month</sub></div>
                            </div>
                        </span>  
                    </span>

                    <h5 class="orange mb-10">{{$package->headline}} </h5>
                    <div class="mb-20">
                        <p class="smol">{!! $package->description !!}</p>
                    </div>

                </div>
            </div>

                <a class="long-btn month12 show-price" href="{{url('processprincing', $package->id)}}">Get Affinos </a>
                </div>
            @endforeach
                @endforeach
        </div>
    </div>



<!-- <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Pricing</h3>
                    </div>
                    <div class="row">
                    @foreach($packagesToReturn as $key => $packages)
                        @foreach($packages as $package)
                            <div class="col-md-4">
                                <h4>{{$package->name}}</h4>
                                <h3>{{$package->price}}</h3>
                                <p>{{$package->recurrance->name}}</p>
                                <h4>{{$package->headline}}</h4>
                                <p>{!! $package->description !!}</p>
                                <a href="{{url('processprincing', $package->id)}}">Get Affinos</a>
                            </div>
                        @endforeach
                    @endforeach
                    </div>
                    
                    <div class="page-footer">
                        <p>Made with <i class="fa fa-heart"></i> by stacks</p>
                    </div>
                </div> -->
@endsection
