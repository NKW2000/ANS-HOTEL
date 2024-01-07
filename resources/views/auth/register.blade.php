@include('layouts.app')
@extends('layouts.login.log')
@section('title', 'Register')


<div class="my-element">
  <!-- محتوى العنصر الذي ترغب في تطبيق الأنميشن عليه -->
  <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-0">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Get started</h1>
                            <p class="lead">
                                Start creating the best possible user experience for you customers.
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                   <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback alertt alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback alertt alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Phone Namber</label>
                                            <input class="form-control " type="number" name="phone" placeholder="Enter your phone " />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback alertt alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Profile Picture</label>
                                            <input class="form-control " type="file" name="filename" placeholder="Chose Picture" accept="image/*" />
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

</div>

