@extends('layouts.app')
@section('content')
    <div class="container mt-10">
        <div class="row">
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">User List</div>
                        <div class="col-6">
                            <a href="{{ route('user.create') }}" class="btn btn-primary float-right">Add</a>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
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
