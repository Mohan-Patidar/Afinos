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
                <h4 class="panel-title">Order Detail</h4>
              </div>
            </div>
          </div>

          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="order-box">
                  <h4 class="order-head">Order: {{ $order->package->name }}</h4>
                  <div class="order-box-border">
                    <table class="table display" id="example">
                      <tbody>
                        <tr>
                          <th>Order Date</th>
                          <td>{{date('d-M-Y', strtotime($order->created_at))}}</td>
                        </tr>
                        <tr>
                            <th>Expired on</th>
                            <td>{{ date('d-M-Y', strtotime("+". $order->package->recurrance->frequency ." months", strtotime($order->created_at)))}}</td>
                        </tr>
                        <tr>
                          <th>Order Status</th>
                          <td><span class="success-batch">{!! $order->status !!}</span></td>
                        </tr>
                        <tr>
                          <th class="p-name">Perchased From</th>
                          <td>Main Website</td>
                        </tr>
                        <tr>
                          <th>Recurrence</th>
                          <td>{{$order->package->recurrance->name}}</td>
                        </tr>
                        <tr>
                          <th>FSCs</th>
                          <td>{{$order->fscs}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="order-box">
                  <h4 class="order-head">Account Information</h4>
                  <div class="order-box-border">
                    <table class="table display" id="example">
                      <tbody>
                        <tr>
                          <th>User Name</th>
                          <td>{{$order->user->name . ' ' . $order->user->last_name}}</td>
                        </tr>
                        <tr>
                          <th class="p-name">Email</th>
                          <td>{{ $order->user->email }}</td>
                        </tr>
                        <tr>
                          <th class="p-name">Phone</th>
                          <td>{{ $order->user->phone }}</td>
                        </tr>
                        <tr>
                          <th class="p-name">User Group</th>
                          <td>Customer</td>
                        </tr>
                        <tr>
                          <th class="p-name">Cage Code</th>
                          <td>{{ $order->user->cagecode }}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="order-box">
                  <h4 class="order-head">Billing Address</h4>
                  <div class="order-box-border">
                    <ul class="address-detail">
                      <li class="">{{$order->user->name . ' ' . $order->user->last_name}}</li>
                      <li class="">{{$billingAddress->address}}</li>
                      <li class="">{{$billingAddress->city}}</li>
                      <li class="">{{$billingAddress->city}}, {{$billingAddress->state}}
                        {{$billingAddress->zip}}</li>
                      <li class="">{{$billingAddress->country}}</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="order-box">
                  <h4 class="order-head">Shipping Address</h4>
                  <div class="order-box-border">
                    <ul class="address-detail">
                      <li class="">{{$order->user->name . ' ' . $order->user->last_name}}</li>
                      <li class="">{{$shippingAddress->address}}</li>
                      <li class="">{{$shippingAddress->city}}</li>
                      <li class="">{{$shippingAddress->city}}, {{$shippingAddress->state}}
                        {{$shippingAddress->zip}}</li>
                      <li class="">{{$shippingAddress->country}}</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="order-box">
                  <h4 class="order-head">Item Ordered List</h4>
                  <div class="table-responsive height-auto">
                    <table class="table table-bordered display" id="example">
                      <thead>
                        <tr>

                          <th class="p-name">Order id</th>
                          <th class="p-price">Package Name</th>
                          <th class="p-subscription">Recurrence</th>
                          <th class="p-user">User</th>
                          <th class="p-headline">Order Total</th>
                          <th class="p-additional">Ordered On</th>
                          <th class="p-description">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>{{$order->id}}</th>
                          <td>{{$order->package->name}}</td>
                          <td>{{$order->package->recurrance->name}}</td>
                          <td>{{$order->user->name . ' ' . $order->user->last_name}}</td>
                          <td>${{$order->package->price * $order->package->recurrance->frequency}}</td>
                          <td>{{date('d-M-Y', strtotime($order->created_at))}}</td>
                          <td>{!! $order->status !!}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="order-box">
                  <h4 class="order-head">Addons</h4>
                  <div class="table-responsive height-auto">
                    <table class="table table-bordered display" id="example">
                      <thead>
                        <tr>
                          <th class="p-name">Name</th>
                          <th class="p-price">price</th>
                          <th class="p-subscription">Recurrence</th>
                          <th class="p-user">total</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($order->additional_qty)
                        <tr>
                          <th>Additional User ({{$order->additional_qty}})</th>
                          <td>${{$order->package->additional_user}}</td>
                          <td>{{$order->package->recurrance->name}}</td>
                          <td>${{$order->package->additional_user * $order->package->recurrance->frequency}}</td>
                        </tr>
                        @endif
                        @foreach($addons as $addon)
                        <tr>
                          <th>{{$addon->addonPrice->addon["name"]}}</th>
                          <td>${{$addon->addonPrice->price}}</td>
                          <td>{{$order->package->recurrance->name}}</td>
                          <td>${{$addon->addonPrice->price * $order->package->recurrance->frequency}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="order-box">
                  <h4 class="order-head">Payment Information</h4>
                  <div class="order-box-border">
                    <table class="table display" id="example">
                      <tbody>
                        <tr>
                          <th>Payment Through</th>
                          <td>Stripe</td>
                        </tr>
                        <tr>
                          <th>Transaction Id</th>
                          <td>{{$order->transaction_id}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="order-box">
                  <h4 class="order-head">Orderd Totals</h4>
                  <div class="order-box-border">
                    <table class="table display" id="example">
                      <tbody>
                        <tr>
                          <th>Subtotal</th>
                          <td>${{$order->order_total}}</td>
                        </tr>
                        <tr>
                          <th>Package Discount</th>
                          <td>${{$order->discount_price}}</td>
                        </tr>
                        <tr>
                          <th>Total Paid</th>
                          <td>${{$order->order_total}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection