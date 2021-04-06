@extends('layouts.adminlayout')

@section('content')
<div class="page-inner no-page-title">
<div class="page-title">
    <h3 class="breadcrumb-header">Package / Create</h3>
</div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-white">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="panel-heading clearfix">
                                                <h4 class="panel-title">Create Package</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right btn-margin">
                                            <a href="{{url('/packages')}}" class="btn btn-primary">
                                                < Back</a> 
                                        </div> 
                                    </div>
                                    @if(Session::has('message')) 
                                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <p>{{ Session::get('message') }}</p>       
                                    </div>
                                    @endif
                                    <div class="panel-body">
                                            <div class="panel-body">
                                                <form id="package-form" method = "Post" action="{{route('packages.store')}}" novalidate>
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" required name="name" id="name" class="form-control"
                                                                    placeholder="Package Name">
                                                            </div>
                                                        </div>
                                                        @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Price</label>
                                                                <input id="price" required name="price"  type="text" class="form-control"
                                                                    placeholder="Package Price">
                                                            </div>
                                                        </div>
                                                        @error('monthly_rate')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror

                                                        <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Recurrence</label>
                                                            <select required name="recurrance_id" id="recurrance_id" class="form-control">
                                                                @foreach($recurrances as $recurrance)
                                                                <option value="{{$recurrance->id}}">{{$recurrance->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
</div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Headline</label>
                                                                <input required type="text" name="headline" id="headline" class="form-control"
                                                                    placeholder="Package Headline">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea required id="description" name="description"  class="summernote"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Additional user</label>
                                                                <input required type="text" name="additional_user" id="additional_user" class="form-control"
                                                                    placeholder="Aditional User">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Stripe Product Id</label>
                                                                <input required type="text" name="stripe_product_id" id="stripe_product_id" class="form-control"
                                                                    placeholder="Stripe Product Id">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Stripe Price Id</label>
                                                                <input required type="text" name="stripe_price_id" id="stripe_price_id" class="form-control"
                                                                    placeholder="Stripe Price Id">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Addons</label>
                                                                <select name="addon_name[]" class="form-control">
                                                                    <option value="">Addon Name</otion>
                                                                    @foreach($addons as $addon)
                                                                        <option value="{{$addon->id}}">{{$addon->name}}</otion>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Price</label>
                                                                <input type="text" name="packageprice[]" id="price" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Stripe Price Id</label>
                                                                <input type="text" name="packagestripeprice[]" id="packagestripeprice" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Add Package</button>
                                                </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->

            </div><!-- /Page Inner -->

        </div><!-- /Page Content -->
    </div>
@endsection
@section('additionalscripts')
    <script>
        $("#package-form").validate();
    </script>
@endsection 