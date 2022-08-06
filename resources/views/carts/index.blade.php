@extends('layouts.app')
@section('content')
    <div class="container mt-10">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">Cart List</div>
                        <div class="col-6">
                            <a href="{{ route('cart.create') }}" class="btn btn-primary float-right">Add</a>
                        </div>
                        </div>
                    </div> @csrf
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr class="mt-2">
                                <th>#</th>
                                <th>User_id</th>
                                <th>Product_id</th>
                                <th>Quantity</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                <tr>
                                    <td>{{ $cart->id }}</td>
                                    <td>{{ $cart->userInfo->name}}</td>
                                    <td>{{ $cart->productInfo->name }}</td>
                                    <td>{{ $cart->quantity }}</td>
                                    <td >
                                        <div class="btn-type" >
                                            <div class="mr-4">
                                                <a href="{{ route('cart.edit',$cart->id) }}" class="btn btn-info"> <i class='fa fa-edit'></i></a>
                                            </div>
                                            <div class="">
                                                <form action="{{ route('cart.destroy',$cart->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class=" btn btn-danger ">
                                                        <i class='fa fa-trash'></i>
                                                    </button>
                                                    </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                          <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <div class="form-group mt-2">
                                <select name="user_id" class="form-control" id="">
                                    @foreach ($users as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="div">
                                <button type="submit" class=" btn btn-primary mt-2">order</button>
                            </div>
                            </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
<style>
    .btn-type{
        display: flex;
    }
    .mr-4{
        margin-right: 4px;
    }
</style>
