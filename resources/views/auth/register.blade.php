@extends('Master')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-4 register_container">
            <div class="card">
                <div class="card-header text-center"> <a class="navbar-brand" href="{{route('blog.home')}}"><span class="logo">Bridge</span></a></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">

                                <label for="email" class="col-md-4 col-form-label text-md-right">Profile Picture</label>
                                <div class="col-md-6">

                                <div class="input-group">
                    
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="user_image">
                                    @error('user_image')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                  </div>
                                </div>
                            </div>
                            </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="register-btn">
                                    {{ __('Register') }}
                                </button>
                                
                            </div>
                            <div class="forward">
                                <a class="btn btn-link forward-login" href="{{ route('login') }}">
                                {{ __('Already Have an Account ?') }}
                            </a></div>
                            
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  



    
@endsection


















