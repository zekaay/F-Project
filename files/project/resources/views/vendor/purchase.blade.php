@extends('vendor.includes.master-vendor')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">
                <!-- Page Heading -->
                <div class="go-title">
                    <h3>My Purchase</h3>
                    <div class="go-line"></div>
                </div>
                <!-- Page Content -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="response">
                            @if(Session::has('message'))
                                <div class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                        </div>
                        <table class="table table-striped table-bordered" cellspacing="0" id="example" width="100%">
                            <thead>
                            <tr class="table-header-row">
                                <th>Order#</th>
                                <th>Date</th>
                                <th>Product Ordered</th>
                                <th>Total Cost</th>
                                <th>Order Status</th>
                                <th>View</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->order_number}}</td>
                                    <td>{{$order->booking_date}}</td>
                                    <td>{{count($order->products)}}</td>
                                    <td>{{$settings[0]->currency_sign}}{{$order->pay_amount}}</td>
                                    <td>{{$order->status}}</td>
                                    <td><a href="{{url('vendor/purchase/')}}/{{$order->id}}" class="btn btn-primary btn-sm">View order</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->


@stop

@section('footer')

@stop