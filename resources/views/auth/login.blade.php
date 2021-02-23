@extends('auth.layouts.app')

@section('meta')

    <title>Login - Luwal Sining-Pagganap</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="Register User - Luwal Sining-Pagganap" />
    <meta property="og:description" content="Register User to LSP Dashboard" />
    <meta name="description" content="Register User to LSP Dashboard" />

@endsection

@section('content')

    <div class="contentWrap">
        <div class="loginCont mdc-elevation--z1">

            <h2>Log In</h2>
            <p class="error">
                @error('email')
                {{ $message }}
                @enderror
                @error('password')
                {{ $message }}
                @enderror
            </p>
            <form id="signupForm" action="{{ route('login.create') }}" method="post">
                @csrf

                <input type="text" name="email" placeholder="E-mail" autofocus required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="checkbox" name="remember"><label>Remember Me</label>
                <button type="submit" name="login">LOG IN</button>
            </form>
        </div>
    </div>

@endsection
