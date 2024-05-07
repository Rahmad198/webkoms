<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HMI KOMSTEK UMM</title>
    <link rel="shortcut icon" href="assets/media/logos/logoatas.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 m-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body text-center">
                            <div class="card-body">
                                <img alt="Logo" class="mb-3" src="{{ asset('back/media/logo/logoatas.png') }}" style="width: 100px; height: 100px;">
                            </div>
                            <form method="POST" action="{{ route('admin.login')}}" novalidate>
                                @csrf
                                <input class="form-control py-4 @error('email') is-invalid @enderror" id="inputEmailAddress" type="email" placeholder="Masukkan Email Anda" name="email" value="{{ old('email') }}"/>
                                @error('email')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                                <br>
                                <input class="form-control py-4 @error('password') is-invalid @enderror" id="inputPassword" type="password" placeholder="Masukkan Password Anda" name="password"/>
                                @error('password')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn text-white" style="background-color: #435939">{{__('login')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
  </body>
</html>