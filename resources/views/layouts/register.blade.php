<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </head>
        <body>
            <div class="login-page">
                <div class="login-form">
                    <h1>Register</h1>
                    <form action="{{ route('register.post') }}" method="post">
                        @csrf
                        <div class="form-group">
                            
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        
                        </div>
                        <div class="form-group">
                            
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit">Register</button>

                        
                    </form>
                    <div class="link-create">
                        <p class="message-link">Already registered? <a href="{{ route('login.index') }}">Sign In</a></p>
                    </div>
                </div>
            </div>

        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>