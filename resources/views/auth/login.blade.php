<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Department</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background-color: #4e73df;
        }

        .login-img {
            background: url("{{ asset('/img/tech_logo.png') }}");
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div class="container">
        <main class="w-full m-auto mt-5 rounded shadow bg-white" style="max-width: 56rem">
            <div class="row" style="height: 400px">
                <div class="login-img p-5 col-md-6"></div>
                <div class="col-md-6 p-5">
                    <form
                        action="{{ route('login') }}"
                        method="post"
                        class="d-flex flex-column justify-content-center h-100" >

                        @csrf

                        <h1 class="h4 mb-3 fw-bold text-center">welcome back!</h1>

                        <div class="mb-3">
                            <input
                                type="email"
                                name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email address"
                                value="{{ old('email') }}"
                                required
                                autofocus />

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Password"
                                required />
                        </div>
                        <button type="submit" class="btn w-100 btn-primary">
                            Log in
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>

</html>

