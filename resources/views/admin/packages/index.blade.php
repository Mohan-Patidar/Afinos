@extends('layouts.adminlayout')

@section('content')
<div class="page-inner no-page-title">
<div class="page-title">
    <h3 class="breadcrumb-header">Packages</h3>
</div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">Packages List</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right btn-margin">
                                        <a href="{{route('packages.create')}}" class="btn btn-primary">Add Packages</a>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered display" id="example">
                                            <thead>
                                                <tr>
                                                    
                                                    <th class="p-name">Name</th>
                                                    <th class="p-price">Price</th>
                                                    <th class="p-subscription">Recurrence</th>
                                                    <th class="p-headline">Headline</th>
                                                    <th class="p-additional">Additional user Price</th>
                                                    <th class="p-description">Description</th>
                                                    <th class="p-action">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($packages as $package) 
                                                <tr>
                                                    <th>{{$package->name}}</th>
                                                    <td>{{$package->price}}</td>
                                                    <td>{{$package->recurrance->name}}</td>
                                                    <td>{{$package->headline}}</td>
                                                    <td>{{$package->additional_user }}</td>
                                                    <td>{!! $package->description !!}</td>
                                                    <td>
                                                        <a href="{{route('packages.edit', ['package' => $package->id])}}" class="btn btn-primary btn-addon btn-sm" >
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <form action ="{{route('packages.destroy', ['package' => $package->id])}}" method="post">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
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




