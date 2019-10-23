@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg mx-auto my-5 col-lg-7">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-user @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{ old('name') }}" autocomplete="name" autofocus
                                    placeholder="Full Name">
                                @error('name')
                                <span class="invalid-feedback pl-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email"
                                    class="form-control form-control-user @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Enter Email Address..."
                                    value="{{ old('email') }}" autofocus autocomplete="off">
                                @error('email')
                                <span class="invalid-feedback pl-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="username"
                                    class="form-control form-control-user @error('username') is-invalid @enderror"
                                    id="username" name="username" placeholder="Enter username here..."
                                    value="{{ old('username') }}" autofocus autocomplete="off">
                                @error('username')
                                <span class="invalid-feedback pl-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="password" type="password"
                                        class="form-control form-control-user @error('password') is-invalid @enderror"
                                        name="password" autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="password-confirm" type="password" class="form-control form-control-user"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Register Account') }}
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="/">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="/login">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection