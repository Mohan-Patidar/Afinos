@extends('layouts.adminlayout')

@section('content')
@if(Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

<div class="page-inner no-page-title">
<div class="page-title">
    <h3 class="breadcrumb-header">Recurrance / Edit</h3>
</div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">Edit Recurrence</h4>
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
                                                        <form id="recurrance-form" action ="{{route('recurrances.update',  ['recurrance' => $plans->id])}}" method="post">
                                                            <input type="hidden" name="_method" value="PUT">
                                                            <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                                                            <input type = "hidden" name = "id" value = "{{ $plans->id }}">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Name</label>
                                                                        <input required name="name" type="text" class="form-control"
                                                                        value = '{{ $plans->name }}'>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Frequency (in months)</label>
                                                                        <input required type="text" class="form-control" id="frequency"  name="frequency" value="{{$plans->frequency}}" placeholder="Frequency">
                                                                        @error('frequency')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                       @enderror    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Update
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
@endsection
@section('additionalscripts')
    <script>
        $("#recurrance-form").validate();
    </script>
@endsection
