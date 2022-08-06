@extends('layouts.app')
@section('content')
    <div class="container mt-10">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">Manage Cart</div>
                            <div class="col-6">
                                <a href="{{ route('cart.index') }}" class="btn btn-primary float-right">All Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <div class="form-group mt-2">
                            <label for="user_id">User Name</label>
                            <select name="user_id" class="form-control" id="">
                                @foreach ($user_id as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Product Name</label>
                                <select name="product_id" class="form-control" id="">
                                    @foreach ($product_id as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                              <label for="exampleInputPassword1">Quantity</label>
                              <input type="number" name="quantity" class="form-control" id="exampleInputPassword1">
                            </div>
                            {{-- <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> --}}
                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
