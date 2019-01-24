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

   

    </div>

<!-- Main -->
    <div id="main">

        <!-- Login -->
        <section id="login" class="four">
                <div class="container">

                    <header>
                        <h2>Before of using our service please authorize yourself</h2>
                    </header>

                    <form method="POST" action="{{route('admin')}}">
                        <!-- <div class="row"> -->
                            <div class="col-6 col-12-mobile"><input id = "adminName" type="text" name="adminName" placeholder="adminName"/></div>
                            <br/>
                            <div class="col-6 col-12-mobile"><input id = "password" type="password" name="password" placeholder="Password"  /></div>
                            <!-- <div class="col-12">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div> -->
                            <div class="col-12">
                                <input id = "" type="submit" value="Sign in" />
                            </div>
                        <!-- </div> -->
                        {{ csrf_field() }} 

                    </form>

                </div>
            </section>
        <!-- Portfolio -->
          
        <!-- About Me -->
           

        <!-- Contact -->
          
          
    </div>

