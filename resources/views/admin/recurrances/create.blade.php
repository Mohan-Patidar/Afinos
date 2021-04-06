@extends('layouts.adminlayout')
@section('content')
@if(Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

<div class="page-inner no-page-title">
<div class="page-title">
    <h3 class="breadcrumb-header">Recurrance / Create</h3>
</div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">Add Recurrence</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right btn-margin">
                                        <a href="{{url('/recurrances')}}" class="btn btn-primary">
                                            < Back</a> </div> </div>
                                            @if(Session::has('message')) 
                                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <p>{{ Session::get('message') }}</p>       
                                            </div>
                                            @endif 
                                            <div class="panel-body">
                                                    <div class="panel-body">
                                                        <form method = "Post" id="recurrance-form" action="{{route('recurrances.store')}}">
                                                        @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Name</label>
                                                                        <input required type="text" class="form-control" id="name"  name="name" placeholder="Recurrance Name">
                                                                        @error('name')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                       @enderror    
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Frequency (in months)</label>
                                                                        <input required type="text" class="form-control" id="frequency"  name="frequency" placeholder="Frequency">
                                                                        @error('frequency')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                       @enderror    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Add
                                                                Recurrence</button>
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
@endsection
@section('additionalscripts')
    <script>
        $("#recurrance-form").validate();
    </script>
@endsection 