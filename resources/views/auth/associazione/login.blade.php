@extends('layouts.app')

@section('title', 'LovePets | Login Associazione')

@section('content')
<div class="container" style="padding-top: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <ol class="breadcrumb ">
    <li class="breadcrumb-item">Sei qui:  <a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item"> <a href="#"> Login</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('associazione.login') }}"> Associazione</a></li>
  </ol>
            <div class="card" style="border-color: #223C7B;">
                <div class="card-header text-white" style="background-color: #26448A; font-size: 18px;"><i class="fas fa-users"></i> {{ __('Login Associazione') }}</div>

                <div class="card-body">
                    <form action="{{ route('associazione.check') }}" method="post"> 
                    @if (Session::get('fail'))
                        <div class="alert alert-danger"><i class="fas fa-exclamation-circle"></i> 
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                        @csrf
                    <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Indirizzo E-Mail*') }}</strong></label>

                            <div class="col-md-6">
                                <input id="text" type="email" placeholder="es. mariorossi@gmail.it" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Password*') }}</strong></label>

                            <div class="col-md-6">
                                <input id="password-field" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Password dimenticata?') }}
                                    </a>
                                @endif 
                            </div>
                        </div>

                        <div class="col-md-8 offset-md-4" style="margin-bottom: 15px;">
                            * campo obbligatorio.
                            </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Ricordami') }}
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn"  style="background-color: #2b4c9a; color: white; margin-bottom: 10px;">
                                    {{ __('Login') }}
                                </button>      
                                              
                            </div>
                            <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <a  href="{{ route('associazione.register') }}" style="padding-left: 10px;"><u>Non hai un account? {{ __('Registrati') }}</u></a>            
                            </div></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
  cursor: pointer; 
  margin-right: 7px;
}
</style>
<script>
      $(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
    </script>
@endsection