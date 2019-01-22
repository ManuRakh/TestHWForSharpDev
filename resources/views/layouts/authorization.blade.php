<body class="is-preload">

<!-- Header -->
    <div id="header">

        <div class="top">

            <!-- Logo -->
                <div id="logo">
                    <span class="image avatar48"><img src="{{asset('public/images/avatar.jpg')}}" alt="" /></span>
                    <h1 id="title">PW</h1>
                    <p></p>
                </div>

            <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="#login" id="top-link"><span class="icon fa-home">Login</span></a></li>
                <li><a href="#registration" id="contact-link"><span class="icon fa-user">Registration</span></a></li>



                    </ul>
                </nav>

        </div>

        <div class="bottom">

            <!-- Social Icons -->
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                </ul>

        </div>

    </div>

<!-- Main -->
    <div id="main">

        <!-- Login -->
        <section id="login" class="four">
                <div class="container">

                    <header>
                        <h2>Before of using our service please authorize yourself</h2>
                    </header>

                    <form method="POST" action="{{route('login')}}">
                        <!-- <div class="row"> -->
                            <div class="col-6 col-12-mobile"><input id = "email" type="text" name="email" placeholder="Email" onchange="validateEmail(this.value)" /></div>
                            <br/>
                            <div class="col-6 col-12-mobile"><input id = "password" type="password" name="password" placeholder="Password" onchange="validatePass(this.value)" /></div>
                            <!-- <div class="col-12">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div> -->
                            <div class="col-12">
                                <input type="submit" value="Sign in" />
                            </div>
                        <!-- </div> -->
                        {{ csrf_field() }} 

                    </form>

                </div>
            </section>
        <!-- Portfolio -->
          
        <!-- About Me -->
           

        <!-- Contact -->
          
            <section id="registration" class="four">
                <div class="container">

                    <header>
                        <h2>Registration</h2>
                    </header>

                    <p>Don't have an acoount? Sign up now!</p>

                    <form method="POST" action="{{route('reg')}}">
                        <!-- <div class="row"> -->
                           <div class="col-6 col-12-mobile"><input id = "userName" type="text" name="userName" placeholder="Your User Name"  /></div>

                            <div class="col-6 col-12-mobile"><input id = "email" type="text" name="email" placeholder="Email" onchange="validateEmail(this.value)" /></div>
                            <br/>
                            <div class="col-6 col-12-mobile"><input id = "password" type="password" name="password" placeholder="Password" onchange="validatePass(this.value)" /></div>
                            <!-- <div class="col-12">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div> -->
                            <div class="col-12">
                                <input type="submit" value="Sign up" />
                            </div>
                        <!-- </div> -->
                        {{ csrf_field() }} 

                    </form>

                </div>
            </section>
    </div>

