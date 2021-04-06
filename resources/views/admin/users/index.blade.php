@extends('layouts.adminlayout')

@section('content')
<div class="page-inner no-page-title">
<div class="page-title">
    <h3 class="breadcrumb-header">Users</h3>
</div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">Users List</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered display" id="example">
                                            <thead>
                                                <tr>
                                                    
                                                    <th class="p-name">First Name</th>
                                                    <th class="p-price">Last Name</th>
                                                    <th class="p-subscription">Phone</th>
                                                    <th class="p-headline">Email</th>
                                                    <th class="p-additional">Cagecode</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user) 
                                                <tr>
                                                    <th>{{$user->name}}</th>
                                                    <td>{{$user->last_name}}</td>
                                                    <td>{{$user->phone}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->cagecode }}</td>
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




