@extends('layouts.app')
@section('content')
    <div class="container mt-10">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">Order List</div>
                        </div>
                    </div> @csrf
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>User_id</th>
                                <th>Product_id</th>
                                <th>Quantity</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->users->name }}</td>
                                    <td>{{ $order->products->name }}</td>
                                    <td>{{ $order->quantity }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
