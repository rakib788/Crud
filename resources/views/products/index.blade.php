@extends('layouts.app')
@section('content')
    <div class="container mt-10">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">Product List</div>
                        <div class="col-6">
                            <a href="{{ route('product.create') }}" class="btn btn-primary float-right">Add</a>
                        </div>
                        </div>
                    </div> @csrf
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Price</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
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
