<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website with Login & Registration Form</title>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />


  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">Sharks</a>

        <ul class="nav_items">
          <li class="nav_item">
            <a href="#" class="nav_link">Home</a>
            <a href="#" class="nav_link">Product</a>
            <a href="#" class="nav_link">Contact</a>
          </li>
        </ul>

        @if (Auth::user())
        <ul class="nav_items">
            <li class="nav_item">
                <a class="nav_link" href="{{route('profile.edit')}}">{{auth()->user()->name}}</a>
                <form action="{{ route('logout')}}" method="post" >
                    @csrf
                    <button class="button" type="submit">log out</button>
                </form>
            </li>
        </ul>
        @else
        <button class="button" id="form-open">Login</button>
        @endif

        </nav>
    </header>

    <!-- Home -->
    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>


        <!-- Login From -->
        <div class="form login_form">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Login</h2>

            <div class="input_box">
              <input type="email" name="email" placeholder="Enter your email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" name="password" placeholder="Enter your password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field">
              <span class="checkbox">
                <input type="checkbox" name="remember" id="check" />
                <label for="check">Remember me</label>
              </span>
              <a href="#" class="forgot_pw">Forgot password?</a>
            </div>

            <button class="button">Login Now</button>

            <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
          </form>
        </div>

        <!-- Signup From -->
        <div class="form signup_form">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2>Signup</h2>

            <div class="input_box">
              <input type="text" name="name" placeholder="Enter your name" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="email" name="email" placeholder="Enter your email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password"  name="password" placeholder="Create password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="password" name="password_confirmation" placeholder="Confirm password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button class="button">Signup Now</button>

            <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
          </form>
        </div>
      </div>
    </section>

    <script src="{{asset('assets/script.js')}}"></script>
  </body>
</html>
