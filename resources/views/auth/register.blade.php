<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diomand Calendar</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
    <main class="page-auth">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h2 class="auth-section-title">Create account</h2>
                                <p class="auth-section-subtitle">Create your account to continue.</p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name <sup>*</sup></label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <sup>*</sup></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm">Confirm Password <sup>*</sup></label>
                                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                    <button class="btn btn-primary btn-auth-submit" type="submit">Create account</button>
                                </form>
                                <p class="mb-0">
                                    <a href="{{route('login')}}" class="text-dark font-weight-bold">Already have an acocunt? Sign in</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="assets/images/Register.png" alt="login" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>

</html>