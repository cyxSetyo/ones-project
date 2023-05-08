<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
        <body>
            <div class="login-page">
                <div class="login-form">
                    <h1>Login First!</h1>
                    <form action="{{ route('login.post') }}" method="post">
                        @csrf
                        <div class="form-group">
                            
                            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Username">
                            @error('username')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit">Login</button>
                    </form>
                    <div class="link-create">
                        <p class="message-link">Not registered? <a href="{{ route('register') }}">Create an account</a></p>
                    </div>
                </div>
            </div>



  
            <script src="{{ asset('js/scripts.js') }}"></script>
        </body>
</html>