@extends('layout')

@section('title', 'Registration')

@section('content')
    <div class="form-group">
        <form class="ui-form" action="index.php" method="POST">
            @csrf
            <h3>Registration form</h3>
            <div class="form-control-lg col-md-4s">
                <label for="login">Enter login</label>
                <input
                    class="form-control mb-md-3"
                    id="login"
                    type="text"
                    name="username"
                    placeholder="Login"
                    required autocomplete="off"
                    pattern="^[a-zA-z]{1}[a-zA-Z1-9]{7,29}$">
                <label for="password">Enter password</label>
                <input
                    class="form-control mb-md-3"
                    id="password"
                    type="password"
                    name="userpass"
                    placeholder="Password"
                    required autocomplete="off"
                    pattern="^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{6,30}$">
                <label for="passwordagain">Enter password again</label>
                <input
                    class="form-control mb-md-3"
                    id="passwordagain"
                    type="password"
                    name="userpassagain"
                    placeholder="Confirm password"
                    required autocomplete="off"
                    pattern="^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{6,30}$">
                <label for="email">Enter email</label>
                <input
                    class="form-control mb-md-3s"
                    id="email"
                    type="email"
                    name="useremail"
                    placeholder="Enter email"
                    required autocomplete="off"
                    pattern="^\w+@\w+\.[a-z]{2,6}$">

            </div>
            <p><input type="submit" name="submit" value="Registration"></p>
        </form>
    </div>
@endsection
