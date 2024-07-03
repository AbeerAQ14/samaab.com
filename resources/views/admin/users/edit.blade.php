@extends('layouts.admin')
@section('title','Create User')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{route('admin.user.update',['id'=>$user->id])}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="exampleInputUsername1" class="form-label">Full Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       value="{{ old('name') ?? $user->name }}" id="exampleInputUsername1" autocomplete="off"
                                       placeholder="Full Name" name="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('email') ?? $user->email }}" placeholder="Email address">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="exampleInputPassword1" class="form-label">Password (Leave empty if don't want to update )</label>
                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1"
                                       autocomplete="off" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input name="password_confirmation" type="password" class="form-control"
                                       id="password_confirmation" autocomplete="off" placeholder="Confirm Password">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="{{route('admin.user.index')}}" class="btn btn-secondary">Back</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
