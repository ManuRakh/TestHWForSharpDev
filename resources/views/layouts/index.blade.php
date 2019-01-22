
	<body class="is-preload">

<!-- Header -->
    <div id="header">

        <div class="top">

            <!-- Logo -->
                <div id="logo">
                    <span class="image avatar48"><img src="{{asset('public/images/avatar.jpg')}}" alt="" /></span>
                    <h1 id="title">{{$userName}}</h1>
                    <p id = "userEmail">{{$email}}</p>
                    <p id = "balance">{{$balance}}</p>
                </div>

            <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="#top" id="top-link"><span class="icon fa-home">Intro</span></a></li>
                        <li><a href="#portfolio" id="portfolio-link"><span class="icon fa-th">Portfolio</span></a></li>
                        <li><a href="#about" id="about-link"><span class="icon fa-user">About Me</span></a></li>
                        <li><a href="#contact" id="contact-link"><span class="icon fa-envelope">Contact</span></a></li>
                @if($auth=="false")
                <li><a href="#registration" id="contact-link"><span class="icon fa-envelope">Registration</span></a></li>
                @endif



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

        <!-- Intro -->
            <section id="top" class="one dark cover">
                <div class="container">

                    <header>
                        <h2 class="alt">Hi!  <strong>Make new transaction</strong></h2><br/>
                     <form autocomplete="off" action="{{route('maketrans')}}" method = "POST">
            <div class="autocomplete" style="width:300px;">
            <input id="myInput" type="text" name="name" placeholder="Name">
            <input id = "amount" type = "hidden" name = "amount" placeholder = "amount to send">
            <input id = "userName" type = "hidden" name = "userName" value = {{$userName}}>

            <input id = "submit" type = "hidden" placeholder = "Submit">
            <!-- <input type="submit" value = "next" onclick  = "next()"> -->
            <a  onclick = "next()">next</a>
            </div>
            {{ csrf_field() }} 

            </form>              
             <br/>     
            <div style="display:none;">   
                        @foreach($users['data'] as $i => $v)
                      <h6 class = "users">  {{$v['name']}}</h6> 
                      
                      <br/>
                        @endforeach
                        </div>
                    </header>

                    <footer>
                        <a href="#portfolio" class="button scrolly">Magna Aliquam</a>
                    </footer>

                </div>
            </section>

        <!-- Portfolio -->
            <section id="portfolio" class="two">
                <div class="container">

                    <header>
                        <h2>Portfolio</h2>
                    </header>

                    <p>Vitae natoque dictum etiam semper magnis enim feugiat convallis convallis
                    egestas rhoncus ridiculus in quis risus amet curabitur tempor orci penatibus.
                    Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis
                    fusce hendrerit lacus ridiculus.</p>

                    <div class="row">
                        <div class="col-4 col-12-mobile">
                            <article class="item">
                                <a href="#" class="image fit"><img src="{{asset('public/images/pic02.jpg')}}" alt="" /></a>
                                <header>
                                    <h3>Ipsum Feugiat</h3>
                                </header>
                            </article>
                            <article class="item">
                                <a href="#" class="image fit"><img src="{{asset('public/images/pic03.jpg')}}"  alt="" /></a>
                                <header>
                                    <h3>Rhoncus Semper</h3>
                                </header>
                            </article>
                        </div>
                        <div class="col-4 col-12-mobile">
                            <article class="item">
                                <a href="#" class="image fit"><img src="{{asset('public/images/pic04.jpg')}}"  alt="" /></a>
                                <header>
                                    <h3>Magna Nullam</h3>
                                </header>
                            </article>
                            <article class="item">
                                <a href="#" class="image fit"><img src="{{asset('public/images/pic05.jpg')}}"  alt="" /></a>
                                <header>
                                    <h3>Natoque Vitae</h3>
                                </header>
                            </article>
                        </div>
                        <div class="col-4 col-12-mobile">
                            <article class="item">
                                <a href="#" class="image fit"><img src="{{asset('public/images/pic06.jpg')}}"  alt="" /></a>
                                <header>
                                    <h3>Dolor Penatibus</h3>
                                </header>
                            </article>
                            <article class="item">
                                <a href="#" class="image fit"><img src="{{asset('public/images/pic07.jpg')}}"  alt="" /></a>
                                <header>
                                    <h3>Orci Convallis</h3>
                                </header>
                            </article>
                        </div>
                    </div>

                </div>
            </section>

        <!-- About Me -->
            <section id="about" class="three">
                <div class="container">

                    <header>
                    

                        <h2>About Me</h2>
                    </header>

                    <a href="#" class="image featured"><img src="{{asset('public/images/pic08.jpg')}}" alt="" /></a>

                    <p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus
                    ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae
                    laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem
                    parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper
                    dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec
                    ornare iaculis.</p>

                </div>
            </section>

        <!-- Contact -->
            <section id="contact" class="four">
                <div class="container">

                    <header>
                        <h2>Contact</h2>
                    </header>

                    <p>Elementum sem parturient nulla quam placerat viverra
                    mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
                    donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
                    orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

                    <form method="post" action="#">
                        <div class="row">
                            <div class="col-6 col-12-mobile"><input type="text" name="name" placeholder="Name" /></div>
                            <div class="col-6 col-12-mobile"><input type="text" name="email" placeholder="Email" /></div>
                            <div class="col-12">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Send Message" />
                            </div>
                        </div>
                    </form>

                </div>
            </section>
            @if($auth=="false")
            <section id="registration" class="four">
                <div class="container">

                    <header>
                        <h2>registration</h2>
                    </header>

                    <p>Elementum sem parturient nulla quam placerat viverra
                    mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
                    donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
                    orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

                    <form method="POST" action="{{route('pageauth')}}">
                        <!-- <div class="row"> -->
                            <div class="col-6 col-12-mobile"><input id = "email" type="text" name="email" placeholder="Email" onchange="validateEmail(this.value)" /></div>
                            <br/>
                            <div class="col-6 col-12-mobile"><input id = "password" type="text" name="password" placeholder="Password" onchange="validatePass(this.value)" /></div>
                            <!-- <div class="col-12">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div> -->
                            <div class="col-12">
                                <input type="submit" value="Send Message" />
                            </div>
                        <!-- </div> -->
                        {{ csrf_field() }} 

                    </form>

                </div>
            </section>
            @endif
    </div>
