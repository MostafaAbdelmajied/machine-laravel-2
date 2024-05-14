<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login & Registration Form</title>

    <!-- Unicons -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />


    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>

    <!-- Header -->
    <header class="header">
        <nav class="nav_ bg-transparent mt-3 rounded-3">
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
                        <a class="nav_link" href="{{ route('profile.edit') }}">{{ auth()->user()->name }}</a>
                        <form action="{{ route('logout') }}" method="post">
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


    <!-- home -->
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
                            <input type="checkbox" id="check" />
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
                        <input type="password" name="password" placeholder="Create password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="input_box">
                        <input name="password_confirmation" type="password" placeholder="Confirm password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <button class="button">Signup Now</button>

                    <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
                </form>
            </div>
        </div>






    </section>










    <div class="contact p-md-5 py-5" id="contact">

        <div class="overlay-mf"></div>


        <div class="container position-relative p-3 p-md-5 bg-light  ">
            <div class="contact-tittle-1 text-center">
                <h5 class="title-left">
                    Obesity Levels
                </h5>
            </div>

            <!--

{
- Gender: Feature, Categorical, "Gender"
- Age : Feature, Continuous, "Age"
- Height: Feature, Continuous
- Weight: Feature Continuous
- family_history_with_overweight: Feature, Binary, " Has a family member suffered or suffers from overweight? "

- FAVC : Feature, Binary, " Do you eat high caloric food frequently? "
- FCVC : Feature, Integer, " Do you usually eat vegetables in your meals? "
- NCP : Feature, Continuous, " How many main meals do you have daily? "
- CAEC : Feature, Categorical, " Do you eat any food between meals? "
- SMOKE : Feature, Binary, " Do you smoke? "
- CH2O: Feature, Continuous, " How much water do you drink daily? "
- SCC: Feature, Binary, " Do you monitor the calories you eat daily? "
- FAF: Feature, Continuous, " How often do you have physical activity? "
- TUE : Feature, Integer, " How much time do you use technological devices such as cell phone, videogames, television, computer and others? "
- CALC : Feature, Categorical, " How often do you drink alcohol? "
- MTRANS : Feature, Categorical, " Which transportation do you usually use? "
}

       -->
            @if (isset($form_data))
            <form method="POST" action="{{ url('/predict') }}" class=" w-100 row-gap-2" id="form-data">
                    @csrf
                    <div class="row ">
                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="Age">Age</label>
                                <input class="form-control form-control-lg " type="number" id="Age" value="{{$form_data['Age']}}"
                                    name="Age" placeholder="Enter Age" aria-label="Age" min="14">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="Height">Height</label>
                                <input class="form-control form-control-lg " type="number" id="Height" value="{{$form_data['Height']}}"
                                    name="Height" placeholder="Enter Height" aria-label="Height" min="1"
                                    max="2" step="0.01">
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="Weight">Weight</label>
                                <input class="form-control form-control-lg " type="number" id="Weight" value="{{$form_data['Weight']}}"
                                    name="Weight" placeholder="Enter Weight" aria-label="Weight" min="14"
                                    max="180">
                            </div>
                        </div>





                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="Gender">Gender</label>
                                <select class="form-select" aria-label="Default select example" id="Gender"
                                    name="Gender">
                                    <option value="" disabled selected>{{$form_data['Gender']}}</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>

                                </select>
                            </div>

                        </div>




                    </div>



                    <div class="row ">


                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="FCVC">FCVC <span class="text-secondary fs-6">*Do you usually eat
                                        vegetables in your
                                        meals?</span></label>
                                <input class="form-control form-control-lg " type="number" id="FCVC" value="{{$form_data['FCVC']}}"
                                    name="FCVC" placeholder="FCVC"
                                    aria-label="Do you usually eat vegetables in your meals?"
                                    min="1" max="3" step="0.1">
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="NCP">NCP <span class="text-secondary fs-6">*How many main meals do
                                        you have
                                        daily?</span></label>
                                <input class="form-control form-control-lg " type="number" id="NCP" value="{{$form_data['NCP']}}"
                                    name="NCP" placeholder="NCP"
                                    aria-label="How many main meals do you have daily?" min="1"
                                    max="4" step="0.1">
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="FAF">FAF <br> <span class="text-secondary fs-6">*How often do you
                                        have physical
                                        activity</span></label>
                                <input class="form-control form-control-lg " type="number" id="FAF" value="{{$form_data['FAF']}}"
                                    name="FAF" placeholder="FAF"
                                    aria-label="How often do you have physical
                                    activity" min="0"
                                    max="3" step="0.1">
                            </div>
                        </div>



                    </div>



                    <div class="row ">



                        <div class="col-md-5">
                            <div class="mb-4">
                                <label for="CH2O">CH2O <br><span class="text-secondary fs-6">* How much water do
                                        you drink
                                        daily?</span></label>
                                <input class="form-control form-control-lg " type="number" id="CH2O" value="{{$form_data['CH2O']}}"
                                    name="CH2O" placeholder="CH2O" aria-label="CH2O" min="1"
                                    max="3" step="0.1">
                            </div>
                        </div>



                        <div class="col-md-6 offset-md-1">
                            <div class="mb-4">
                                <label for="TUE">TUE <span class="text-secondary fs-6">*How much time do you use
                                        technological devices
                                        such as cell phone</span></label>
                                <input class="form-control form-control-lg " type="number" id="TUE" value="{{$form_data['TUE']}}"
                                    name="TUE" placeholder="TUE" aria-label="TUE" min="0" max="2"
                                    step="0.1">
                            </div>
                        </div>



                    </div>







                    <div class="row">


                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="FAVC">FAVC<span class="text-secondary fs-6">*Do you eat high caloric
                                        food
                                        frequently?</span></label>
                                <select class="form-select" aria-label="Do you eat high caloric food frequently?"
                                    id="FAVC" name="FAVC">
                                    <option value="" disabled selected>{{$form_data['FAVC']}}</option>
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>

                                </select>
                            </div>

                        </div>



                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="SCC">SCC<span class="text-secondary fs-6">*Do you monitor the
                                        calories you eat
                                        daily?</span></label>
                                <select class="form-select" aria-label="*Do you monitor the calories you eat daily?"
                                    id="SCC" name="SCC">
                                    <option value="" disabled selected>{{$form_data['SCC']}}</option>
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>

                                </select>
                            </div>

                        </div>



                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="SMOKE">SMOKE <br><span class="text-secondary fs-6">*Do you
                                        smoke?</span></label>
                                <select class="form-select" aria-label="Do you smoke?" id="SMOKE"
                                    name="SMOKE">
                                    <option value="" disabled selected>{{$form_data['SMOKE']}}</option>
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>

                                </select>
                            </div>

                        </div>



                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="family_history_with_overweight"
                                    class="fs-6 family">family_history_with_overweight <br><span
                                        class="text-secondary special">*Has a family member suffers from
                                        overweight?</span></label>
                                <select class="form-select" aria-label="family_history_with_overweight"
                                    id="family_history_with_overweight" name="family_history_with_overweight">
                                    <option value="" disabled selected>{{$form_data['family_history_with_overweight']}}</option>
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>

                                </select>
                            </div>

                        </div>




                    </div>




                    <div class="row">


                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="CALC">CALC <br><span class="text-secondary fs-6">*How often do you
                                        drink alcohol?</span></label>
                                <select class="form-select" aria-label="How often do you drink alcohol?"
                                    id="CALC" name="CALC">
                                    <option value="" disabled selected>{{$form_data['CALC']}}</option>
                                    <option value="no">no</option>
                                    <option value="Sometimes">Sometimes</option>
                                    <option value="Frequently">Frequently</option>
                                    <option value="Always">Always</option>

                                </select>
                            </div>

                        </div>


                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="CAEC">CAEC <br><span class="text-secondary fs-6">*Do you eat any food
                                        between meals?</span></label>
                                <select class="form-select" aria-label="Do you eat any food between meals?"
                                    id="CAEC" name="CAEC">
                                    <option value="" disabled selected>{{$form_data['CAEC']}}</option>
                                    <option value="no">no</option>
                                    <option value="Sometimes">Sometimes</option>
                                    <option value="Frequently">Frequently</option>
                                    <option value="Always">Always</option>

                                </select>
                            </div>

                        </div>






                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="MTRANS">MTRANS <span class="text-secondary fs-6">*Which transportation
                                        do you usually use?</span></label>
                                <select class="form-select" aria-label="Which transportation do you usually use?"
                                    id="MTRANS" name="MTRANS">
                                    <option value="" disabled selected>{{$form_data['MTRANS']}}</option>
                                    <option value="Public_Transportation">Public_Transportation</option>
                                    <option value="Walking">Walking</option>
                                    <option value="Automobile">Automobile</option>
                                    <option value="Motorbike">Motorbike</option>
                                    <option value="Bike">Bike</option>

                                </select>
                            </div>

                        </div>






                    </div>
                    <div class="big-box d-flex justify-content-center align-items-center">

                        <a class="button bg-danger border-0" href="{{url('/clear')}}">Clear</a>

                        <a class="button bg-primary border-0 ms-4 me-4" href="{{url('/new')}}">New</a>
                    </div>

            </form>
            @else
                <form method="POST" action="{{ url('/predict') }}" class=" w-100 row-gap-2" id="form-data">
                    @csrf
                    <div class="row ">
                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="Age">Age</label>
                                <input class="form-control form-control-lg " type="number" id="Age"
                                    name="Age" placeholder="Enter Age" aria-label="Age" min="14">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="Height">Height</label>
                                <input class="form-control form-control-lg " type="number" id="Height"
                                    name="Height" placeholder="Enter Height" aria-label="Height" min="1"
                                    max="2" step="0.01">
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="Weight">Weight</label>
                                <input class="form-control form-control-lg " type="number" id="Weight"
                                    name="Weight" placeholder="Enter Weight" aria-label="Weight" min="14"
                                    max="180">
                            </div>
                        </div>





                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="Gender">Gender</label>
                                <select class="form-select" aria-label="Default select example" id="Gender"
                                    name="Gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>

                                </select>
                            </div>

                        </div>




                    </div>



                    <div class="row ">


                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="FCVC">FCVC <span class="text-secondary fs-6">*Do you usually eat
                                        vegetables in your
                                        meals?</span></label>
                                <input class="form-control form-control-lg " type="number" id="FCVC"
                                    name="FCVC" placeholder="FCVC"
                                    aria-label="Do you usually eat vegetables in your
                 meals?"
                                    min="1" max="3" step="0.1">
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="NCP">NCP <span class="text-secondary fs-6">*How many main meals do
                                        you have
                                        daily?</span></label>
                                <input class="form-control form-control-lg " type="number" id="NCP"
                                    name="NCP" placeholder="NCP"
                                    aria-label="How many main meals do you have
                 daily?"
                                    min="1" max="4" step="0.1">
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="FAF">FAF <br> <span class="text-secondary fs-6">*How often do you
                                        have physical
                                        activity</span></label>
                                <input class="form-control form-control-lg " type="number" id="FAF"
                                    name="FAF" placeholder="FAF"
                                    aria-label="How often do you have physical
                 activity"
                                    min="0" max="3" step="0.1">
                            </div>
                        </div>



                    </div>



                    <div class="row ">



                        <div class="col-md-5">
                            <div class="mb-4">
                                <label for="CH2O">CH2O <br><span class="text-secondary fs-6">* How much water do
                                        you drink
                                        daily?</span></label>
                                <input class="form-control form-control-lg " type="number" id="CH2O"
                                    name="CH2O" placeholder="CH2O" aria-label="CH2O" min="1"
                                    max="3" step="0.1">
                            </div>
                        </div>



                        <div class="col-md-6 offset-md-1">
                            <div class="mb-4">
                                <label for="TUE">TUE <span class="text-secondary fs-6">*How much time do you use
                                        technological devices
                                        such as cell phone</span></label>
                                <input class="form-control form-control-lg " type="number" id="TUE"
                                    name="TUE" placeholder="TUE" aria-label="TUE" min="0" max="2"
                                    step="0.1">
                            </div>
                        </div>



                    </div>







                    <div class="row">


                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="FAVC">FAVC<span class="text-secondary fs-6">*Do you eat high caloric
                                        food
                                        frequently?</span></label>
                                <select class="form-select" aria-label="Do you eat high caloric food frequently?"
                                    id="FAVC" name="FAVC">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>

                                </select>
                            </div>

                        </div>



                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="SCC">SCC<span class="text-secondary fs-6">*Do you monitor the
                                        calories you eat
                                        daily?</span></label>
                                <select class="form-select" aria-label="*Do you monitor the calories you eat daily?"
                                    id="SCC" name="SCC">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>

                                </select>
                            </div>

                        </div>



                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="SMOKE">SMOKE <br><span class="text-secondary fs-6">*Do you
                                        smoke?</span></label>
                                <select class="form-select" aria-label="Do you smoke?" id="SMOKE"
                                    name="SMOKE">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>

                                </select>
                            </div>

                        </div>



                        <div class="col-md-3">
                            <div class="mb-4">
                                <label for="family_history_with_overweight"
                                    class="fs-6 family">family_history_with_overweight <br><span
                                        class="text-secondary special">*Has a family member suffers from
                                        overweight?</span></label>
                                <select class="form-select" aria-label="family_history_with_overweight"
                                    id="family_history_with_overweight" name="family_history_with_overweight">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>

                                </select>
                            </div>

                        </div>




                    </div>




                    <div class="row">


                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="CALC">CALC <br><span class="text-secondary fs-6">*How often do you
                                        drink alcohol?</span></label>
                                <select class="form-select" aria-label="How often do you drink alcohol?"
                                    id="CALC" name="CALC">
                                    <option value="no">no</option>
                                    <option value="Sometimes">Sometimes</option>
                                    <option value="Frequently">Frequently</option>
                                    <option value="Always">Always</option>

                                </select>
                            </div>

                        </div>


                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="CAEC">CAEC <br><span class="text-secondary fs-6">*Do you eat any food
                                        between meals?</span></label>
                                <select class="form-select" aria-label="Do you eat any food between meals?"
                                    id="CAEC" name="CAEC">
                                    <option value="no">no</option>
                                    <option value="Sometimes">Sometimes</option>
                                    <option value="Frequently">Frequently</option>
                                    <option value="Always">Always</option>

                                </select>
                            </div>

                        </div>






                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="MTRANS">MTRANS <span class="text-secondary fs-6">*Which transportation
                                        do you usually use?</span></label>
                                <select class="form-select" aria-label="Which transportation do you usually use?"
                                    id="MTRANS" name="MTRANS">
                                    <option value="Public_Transportation">Public_Transportation</option>
                                    <option value="Walking">Walking</option>
                                    <option value="Automobile">Automobile</option>
                                    <option value="Motorbike">Motorbike</option>
                                    <option value="Bike">Bike</option>

                                </select>
                            </div>

                        </div>






                    </div>

                    <div class="box">
                        <button class="button" type="submit">Predict</button>
                    </div>

                </form>
            @endif

        </div>









































    </div>



    @if (isset($prediction))
        <div class="prediction w-50 mx-auto bg-light text-dark text-center my-5 p-5">
            <p class="fs-3">Prediction : <span class="fs-5 text-info">{{ $prediction }}</span></p>
        </div>
    @endif




    <div class="footer p-4">

        <div class="container">
            <p class="copyright">© Copyright <strong>Youssef Aboshwaly -- Youssef Ebrahem</strong>. All Rights Reserved
            </p>
            <div class="credits">

                Designed by <a href="https://www.linkedin.com/in/yousef-aboschwaly-936a87237/">Youssef Aboshwaly</a>
                And <a href="https://www.linkedin.com/in/youssef-ebrahem/">Youssef Ebrahem</a>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/script.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>

</body>

</html>
