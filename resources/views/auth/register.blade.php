@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
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

                        <!-- <div class="form-group row">
                            <lavel for="favorite" class="col-md-4 col-form-label text-md-right">{{ __('好み') }}</label>

                            <li>値段</li>
                            <div class="col-md-6">
                                <input id="price" name="price" type="radio" value="1">1
                                <input id="price" name="price" type="radio" value="2">2
                                <input id="price" name="price" type="radio" value="3">3
                                <input id="price" name="price" type="radio" value="4">4
                                <input id="price" name="price" type="radio" value="5">5
                                <input id="price" name="price" type="radio" value="6">6
                            </div> 
                            <li>量</li>
                            <div class="col-md-6">
                                <input id="volume" name="volume" type="radio" value="1">1
                                <input id="volume" name="volume" type="radio" value="2">2
                                <input id="volume" name="volume" type="radio" value="3">3
                                <input id="volume" name="volume" type="radio" value="4">4
                                <input id="volume" name="volume" type="radio" value="5">5
                                <input id="volume" name="volume" type="radio" value="6">6
                            </div> 
                            <li>こってり度</li>
                            <div class="col-md-6">
                                <input id="kotteri" name="kotteri" type="radio" value="1">1
                                <input id="kotteri" name="kotteri" type="radio" value="2">2
                                <input id="kotteri" name="kotteri" type="radio" value="3">3
                                <input id="kotteri" name="kotteri" type="radio" value="4">4
                                <input id="kotteri" name="kotteri" type="radio" value="5">5
                                <input id="kotteri" name="kotteri" type="radio" value="6">6
                            </div> 
                            <li>スープ</li>
                            <div class="col-md-6">
                                <input id="soup" name="soup" type="radio" value="1">1
                                <input id="soup" name="soup" type="radio" value="2">2
                                <input id="soup" name="soup" type="radio" value="3">3
                                <input id="soup" name="soup" type="radio" value="4">4
                                <input id="soup" name="soup" type="radio" value="5">5
                                <input id="soup" name="soup" type="radio" value="6">6
                            </div> 
                            <li>トッピング</li>
                            <div class="col-md-6">
                                <input id="topping" name="topping" type="radio" value="1">1
                                <input id="topping" name="topping" type="radio" value="2">2
                                <input id="topping" name="topping" type="radio" value="3">3
                                <input id="topping" name="topping" type="radio" value="4">4
                                <input id="topping" name="topping" type="radio" value="5">5
                                <input id="topping" name="topping" type="radio" value="6">6
                            </div> 
                            <li>麺</li>
                            <div class="col-md-6">
                                <input id="noodle_type" name="noodle_type" type="radio" value="1">1
                                <input id="noodle_type" name="noodle_type" type="radio" value="2">2
                                <input id="noodle_type" name="noodle_type" type="radio" value="3">3
                                <input id="noodle_type" name="noodle_type" type="radio" value="4">4
                                <input id="noodle_type" name="noodle_type" type="radio" value="5">5
                                <input id="noodle_type" name="noodle_type" type="radio" value="6">6
                            </div> 
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
