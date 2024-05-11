<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>E-Lades - Masuk</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet'
    href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}">

</head>

<body>
    <!-- Tombol Kembali ke Landing Page dengan Ikon Panah -->
    <div class="back-button">
        <a href="{{ url('/') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> <!-- Ikon panah kiri -->
        </a>
    </div>

    <div class="container">
        <section id="formHolder">
            <div class="row">
                <!-- Brand Box -->
                <div class="col-sm-6 brand">
                    <div class="heading">
                        <a class="logo"><img src="{{ asset('assets/img/Logokab.png') }}" alt="Logo" style="max-width: 120px;"></a>
                        <h2>Pemerintah</h2>
                        <p>Desa Pesudukuh</p>
                    </div>
                    <div class="success-msg">
                        <p>Lupa kata sandi? klik di sini</p>
                        <a href="#" class="profile">Your Profile</a>
                    </div>
                </div>

                <!-- Form Box -->
                <div class="col-sm-6 form">
                    <!-- Login Form -->
                    <div class="login form-peice ">
                        <form class="login-form" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="loginUsername">Username</label>
                                <input type="text" name="loginUsername" id="loginUsername" required>
                                @error('loginUsername')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="loginPassword">Kata sandi</label>
                                <input type="password" name="loginPassword" id="loginPassword" required>
                                @error('loginPassword')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="CTA">
                                <input type="submit" value="Masuk">
                                <a href="#" class="switch">Lupa Katasandi</a>
                            </div>

                            @if (session('error'))
                                <div class="text-danger text-center" style="margin-top: 30px; padding-top: 10px;">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </form>
                    </div>
                    <!-- End Login Form -->

                    <!-- Signup Form -->
                    <div class="signup form-peice switched">

                        <form class="" action="{{ route('lupa-katasandi') }}" method="post">
                            @csrf

                            @if (Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif

                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            <div class="form-group">

                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="username"
                                    value="{{ old('username') }}" required>
                                @if ($errors->has('username'))
                                    <span class="error">{{ $errors->first('username') }}</span>
                                @endif
                            </div>

                            <div class="form-group mt-4" style="margin-top: 10px">
                                <div class="row d-flex">
                                    <div class="col-sm-3 ">
                                        <input type="number" name="kode_otp" class="form-control me-2"
                                            placeholder="Kode OTP" style="width: 100px;" value="{{ old('kode_otp') }}">
                                        @if ($errors->has('kode_otp'))
                                            <span class="error">{{ $errors->first('kode_otp') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3 ">
                                        <button type="submit" class="btn btn-primary btn-sm"
                                            formaction="{{ route('kirimkode') }}" style="margin-left: 20px">Kirim Kode
                                            OTP</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="pass"
                                    value="{{ old('password') }}">
                                @if ($errors->has('password'))
                                    <span class="error">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="konfirmasi_password">Konfirmasi Password</label>
                                <input type="password" name="konfirmasi_password" id="konfirmasi_password"
                                    class="passConfirm" value="{{ old('konfirmasi_password') }}">
                                @if ($errors->has('konfirmasi_password'))
                                    <span class="error">{{ $errors->first('konfirmasi_password') }}</span>
                                @endif
                            </div>

                            <div class="CTA">
                                <input type="submit" value="Konfirmasi" id="submit">
                                <a href="#" class="switch">Masuk</a>
                            </div>
                        </form>
                    </div>
                    <!-- end signup -->
                </div>
            </div>
        </section>
    </div>

    <!-- partial -->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
