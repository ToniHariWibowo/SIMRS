<x-guest-layout title="Login">
    <!-- ======= Hero Section ======= -->
    <section class="login d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 login-img" data-aos="zoom-out">
                    <img src="{{ asset('dist/img/login.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center typograph">
                    <div data-aos="fade-up">
                        <div class="card ">
                            <h1>{{ __('Register') }}</h1>
                            <small>Masukan Data diri Anda</small>
                            <hr class="m-0 mx-2">
                            <div class="card-body">
                                @if(session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ session('error') }}</strong>
                                </div>
                                @endif
                                @if(session()->has('status'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ session('status') }}</strong>
                                </div>
                                @endif
                                <form method="POST" class="my-login-validation" autocomplete="off"
                                    action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" type="text" class="form-control" name="name"
                                            value="{{ old('name') }}" autofocus placeholder="{{ __('EnterEmail') }}">
                                        <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" autofocus placeholder="{{ __('EnterEmail') }}">
                                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control" name="password"
                                            data-eye placeholder="{{ __('EnterPassword') }}">
                                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Konfirmasi Password</label>
                                        <input id="password" type="password" class="form-control" name="password_confirmation"
                                            data-eye placeholder="{{ __('EnterPassword') }}">
                                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('SignIn') }} <i class="fas"></i>
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

</x-guest-layout>
