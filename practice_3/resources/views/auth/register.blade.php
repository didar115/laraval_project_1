@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="card ">
                <div class="card-header bg-primary text-white ">{{ __('Register') }}</div>

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

                            {{-- -- select divistion-- --}}
                          <div class="form-group row">
                            <label for="division" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="division" type="text" class="form-control" name="division" required > --}}
                                <select class="form-control"  name="division">
                                  

                                
                                    <option value="dhaka">Dhaka</option>
                                    <option value="borisal">Borisal</option>
                                    <option value="cumilla">Cumilla</option>
                                    <option value="khulna">Khulna</option>
                                    <option value="shylet">Shylet</option>
                                    <option value="chitagong">Chitagong</option>
                                    <option value="rajshahi">Rajshahi</option>
                                </select>
                                

                                  @error('division')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                               
                            </div>
                           
                        </div>

                        {{-- -- for birthdate -- --}}

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="date" class="form-control" name="birthdate" required >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success btn-block">
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
