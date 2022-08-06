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
                        <form action="{{ route('cart.update',$carts->id) }}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            @csrf
                            <div class="form-group mt-2">
                              <label for="exampleInputPassword1">Quantity</label>
                              <input type="number" name="quantity" value="{{ $carts->quantity }}" class="form-control" >
                            </div>
                            {{-- <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> --}}
                            <button type="submit" class="btn btn-primary mt-4">Update</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
