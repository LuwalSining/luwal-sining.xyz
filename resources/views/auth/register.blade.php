@extends('auth.layouts.app')

@section('meta')

    <title>Register User - Luwal Sining-Pagganap</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="Register User - Luwal Sining-Pagganap" />
    <meta property="og:description" content="Register User to LSP Dashboard" />
    <meta name="description" content="Register User to LSP Dashboard" />

@endsection

@section('content')

    <div class="contentWrap">
        <div class="loginCont">

        <h2>Sign Up</h2>
            <p class="error">
                @error('password')
                {{ $message }}
                @enderror
            </p>
            <form id="signupForm" action="{{ route('register.create') }}" method="post">
                @csrf

                <input type="text" name="username" placeholder="Full name" autofocus required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Repeat password" required>
                <button type="submit" name="signup">SIGN UP!</button>
            </form>
            <br>
            <a href="{{ route('login') }}">Already have an account? Log In!</a>
        </div>
    </div>

@endsection
