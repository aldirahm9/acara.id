@extends('attendee.app')

@section('action_acc')
active
@endsection

@section('content')
<section id="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="span4">
                    <div class="pricing-box-plain" hidden>
                    </div>
                </div>
                <div class="span4">
                    <div class="pricing-box-plain">
                        <h4 class="heading" style="color:steelblue">Login</h4>

                        <div class="desc">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus><br>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  placeholder="Password" autocomplete="current-password"> <br>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <a class="form-check-label" for="remember">Remember Me</a>
                                        </div>
                                </div>
                                <br>
                                <div>
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="span4">
                        <div class="pricing-box-plain" hidden>

                        </div>
                    </div>
            </div>
        </div>
</section>
@endsection
