@extends('layouts.app')
@section('content')
    <div class="container mt-10">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">Manage Order</div>
                            <div class="col-6">
                                <a href="{{ route('order.index') }}" class="btn btn-primary float-right">All Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">User Id</label>
                              <select name="user_id" class="form-control" id="">
                                @foreach ($user_id as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Product Id</label>
                              <select name="product_id" class="form-control" id="">
                                @foreach ($product_id as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Quantity</label>
                                <input type="number" name="quantity" class="form-control" id="exampleInputPassword1">
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
