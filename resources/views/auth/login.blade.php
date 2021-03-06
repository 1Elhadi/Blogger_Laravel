@extends('Master')




    

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4 login-container">
                <div class="card">
                    <div class="card-header text-center">      <a class="navbar-brand" href="{{route('blog.home')}}"><span class="logo">Bridge</span></a>
                    </div>
    
                    <div class="card-body" style="margin-left: 0">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="login-btn">
                                        {{ __('Login') }}
                                    </button>
    
                                    {{-- @if (Route::has('password.request')) --}}
                                       
                                    {{-- @endif --}}
                                </div>
                                <div class="forward">

                                <a class="btn btn-link forward-link" href="{{ route('register') }}">
                                    {{ __('You Do\'nt Have an Account ?') }}
                                </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
            
        </div>

    </div>

  



    
@endsection















