@extends('layouts.auth')

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

                <label for="email">E-mail</label>
                <input id="email" type="email" name="email" placeholder="E-mail" autofocus required>
                <section>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Password" required>
                </section>
                <input type="checkbox" name="remember"><label>Remember Me</label>
                <button type="submit" name="login">LOG IN</button>
            </form>
            <br>
            <a href="{{ route('register') }}">Don't have an account yet? Sign Up!</a>
        </div>
    </div>

@endsection
