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
        <div class="loginCont" style="margin-top: 30px;">

        <h2>Sign Up</h2>
            <p class="error">
                @error('password')
                {{ $message }}
                @enderror
            </p>
            <form id="signupForm" action="{{ route('register.create') }}" method="post">
                @csrf

                <label for="username">Full Name</label>
                <input id="username" type="text" name="username" placeholder="Full name (w/o M.I.)" autofocus required>
                <label for="email">E-mail</label>
                <input id="email" type="email" name="email" placeholder="E-mail" required>
                <label for="role">Role</label>
                <select name="role" id="role">
                    <option class="selector">--SELECT DEPARTMENT--</option>
                    <option value="Dance">Dance Department</option>
                    <option value="Music">Music Department</option>
                    <option value="Theatre Arts">Theatre Department</option>
                    <option value="Vocal">Vocal Department</option>
                </select>
                <section>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Password" required>
                </section>
                <section>
                    <label for="password_confirmation">Confirm Password</label>
                    <input  id="password_confirmation" type="password" name="password_confirmation" placeholder="Repeat password" required>

                </section>
                <button type="submit" name="signup">SIGN UP!</button>
            </form>
            <br>
            <a href="{{ route('login') }}">Already have an account? Log In!</a>
        </div>
    </div>

@endsection
