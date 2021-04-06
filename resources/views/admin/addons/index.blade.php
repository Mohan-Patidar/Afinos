@extends('layouts.adminlayout')

@section('content')

<div class="page-inner no-page-title">
<div class="page-title">
    <h3 class="breadcrumb-header">Addons</h3>
</div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">Addons</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right btn-margin">
                                        <a href="{{route('addons.create')}}" class="btn btn-primary">Add Addons</a>
                                    </div>
                                </div>
                                @if(Session::has('message')) 
                                <div class="alert alert-success alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <p>{{ Session::get('message') }}</p>       
                                </div>
                                @endif
                                @if(Session::has('error')) 
                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <p>{{ Session::get('error') }}</p>       
                                </div>
                                @endif 
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered display" id="example">
                                            <thead>
                                                <tr>
                                                    <th class="p-id">Name</th>
                                                    <th class="r-action">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($addons as $addon) 
                                                <tr>
                                                    <th>{{$addon->name}}</th>
                                                    <td>
                                                        <a class="btn btn-primary btn-addon btn-sm" href="{{route('addons.edit', ['addon' => $addon->id])}}">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <form action ="{{route('addons.destroy', ['addon' => $addon->id])}}" method="post">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-danger btn-addon btn-sm "><i
                                                                class="fa fa-trash"></i></a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
@endsection




