@extends('layouts.adminlayout')

@section('content')
<div class="page-inner no-page-title">
<div class="page-title">
    <h3 class="breadcrumb-header">Orders</h3>
</div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">Order List</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered display" id="example">
                                            <thead>
                                                <tr>
                                                    
                                                    <th class="p-name">id</th>
                                                    <th class="p-price">Package Name</th>
                                                    <th class="p-subscription">Recurrence</th>
                                                    <th class="p-user">User</th>
                                                    <th class="p-headline">Order Total</th>
                                                    <th class="p-additional">Ordered On</th>
                                                    <th class="p-description">Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $order) 
                                                <tr>
                                                    <th>{{$order->id}}</th>
                                                    <td>{{$order->package->name}}</td>
                                                    <td>{{$order->package->recurrance->name}}</td>
                                                    <td>{{$order->user->name . ' ' . $order->user->last_name}}</td>
                                                    <td>${{$order->order_total}}</td>
                                                    <td>{{date('d-M-Y', strtotime($order->created_at))}}</td>
                                                    <td>{!! $order->status !!}</td>
                                                    <td><a href="{{url('view-order/') . '/'. $order->id}}">View Order</a></td>
                                                    <td><a href="{{url('cancel-subscription/') . '/'. $order->id}}">Cancel</a></td>
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




