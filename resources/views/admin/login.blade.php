<x-layout>
    <head>
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
        <title>{{$title ?? "EasyCoach KE"}}</title>
    </head>
    <section class="login animate-opacity">
        <div class="container">
            <form action="/admin/authenticate" method="post" class="login__form" id="loginForm">
                <h2 class="login__form--title">Login</h2>

                <div class="login__form--box">
                    <input type="text" placeholder=" " name="email" id="email" class="login__form--input">
                    @error('email')
                        <p>Invalid Credentials</p>
                    @enderror
                    <label for="email" class="login__form--label">Email</label>
                </div>

                <div class="login__form--box">
                    <input type="password" id="password" name="password" placeholder=" " class="login__form--input w3-input"><br>
                    <label for="password" class="login__form--label">Password</label>
                </div>

                <button type="submit" class="login__form--btn">Login</button>
            </form>

        </div>
    </section>
</x-layout>