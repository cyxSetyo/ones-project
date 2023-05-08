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

                        <button type="button"  data-toggle="modal" data-target="#myModal" id="myBtn">Register</button>

                    </form>
                    <div class="link-create">
                        <p class="message-link">Already registered? <a href="{{ route('login.index') }}">Sign In</a></p>
                    </div>
                </div>
            </div>

            <!-- Modal Register -->
            <div class="modal fade" id="modalRegister" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal Content Register -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-titleRegister"> Modal Header Register</h4>
                        </div>
                        <div class="modal-body">
                            <p>Sure Register Your Account</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit">Sumbit</button>
                        </div>
                    </div>
                </div>
            </div>

            
  
            <script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>
        </body>
</html>