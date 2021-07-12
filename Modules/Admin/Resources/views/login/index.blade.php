<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="{{ config('admin.styles_path') }}/login.css">
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <h1 class="active"> Log In </h1>
            <div class="fadeIn first">
                <img src="{{ config('admin.images_path') }}/admin-logo.png" id="icon"/>
            </div>
            @error('not_found')
            <div class="alert alert-danger"><b>{{ $message }}</b></div>
            @enderror
            <form method="POST" action="{{ Request::url() }}">
                @csrf
                @error('email')
                <div class="alert alert-danger"><b>{{ $message }}</b></div>
                @enderror
                <input type="email" id="email" class="fadeIn second" name="email" placeholder="Your email">
                @error('password')
                <div class="alert alert-danger"><b>{{ $message }}</b></div>
                @enderror
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="Your password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</body>
</html>
