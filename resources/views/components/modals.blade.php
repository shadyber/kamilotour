<!--Start of Login Form-->
<div id="login__form__wrap">
    <!-- Modal -->
    <div class="modal fade" id="loginform" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="form-pop-up-content">
                        <div class="text-center">
                            <h2 class="modal-title">Login Hare</h2>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-box">
                                <input   type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input  placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="clearfix">
                                    <span class="remember pull-left">

                                         <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                      <label for="pass_chack">Remember Me</label>
                                    </span> <span class="pull-right">

                                     @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </span>

                            </div>
                            <div class="text-center">
                                <button type="submit" class=" text-uppercase login__btn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Login Form-->

<!--Start of Registration Form-->
<div id="register__form__wrap">
    <!-- Modal -->
    <div class="modal fade" id="registrationform" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="form-pop-up-content">
                        <div class="area-title text-center">
                            <h2>Register Now</h2>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-box">

                                    <input   type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>

                            <div class="form-box">


                                    <input  type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>

                            <div class="form-box">

                                    <input   type="password" placeholder="New Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>

                            <div class="form-box">

                                    <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                            <div class="form-box">
                                    <button type="submit" class=" text-uppercase login__btn">
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
<!--End of Registration Form-->
