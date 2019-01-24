
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
                        <li><a href="#MakeTransaction" id="top-link"><span class="icon fa-home">MakeTransaction</span></a></li>
                        <li><a href="#Senttransactions" id="portfolio-link"><span class="icon fa-th">Sent transactions</span></a></li>
                        <li><a href="#TakenTransactions" id="about-link"><span class="icon fa-user">Taken Transactions</span></a></li>
                        <li><a href="#logout" id="contact-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="icon fa-envelope">Log out</span></a></li>
             



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

        <!-- MakeTransaction -->
        @if($userBanned!=true)

            <section id="MakeTransaction" class="one dark cover">
                <div class="container">

                    <header>
                        <h2 class="alt">Hi!  <strong>Make new transaction</strong></h2><br/>
                        <h4>Note that if you send money to yourself, nothing will change
</h4><br/>
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

        <!-- Sent transactions -->
            <section id="Senttransactions" class="two">
                <div class="container">

                    <header>
                        <h2> Sent transactions</h2>
                    </header>

                  <table id="transactionsTable">
                 <tr>
                  <th onclick="sortTable(0)"  style = "cursor: pointer;">User Name of Sender</th>
                  <th onclick="sortTable(1)"  style = "cursor: pointer;">Receiver's name</th>
                  <th onclick="sortTable(2)"  style = "cursor: pointer;">Amount</th>
                  <th onclick="sortTable(3)"  style = "cursor: pointer;">Balance after transaction</th>
                  <th onclick="sortTable(4)"  style = "cursor: pointer;">Date</th>
                  </tr>
                  @foreach($transaction as $transsend)
                  <tr> <td>{{$userName}}</td>
                  <td> {{$transsend->userName}} </td>
                  <td> {{$transsend->amount}}</td>
                  <td> {{$transsend->leftamount}} </td>
                  <td> {{$transsend->created_at}}</td>
                  </tr>
                    @endforeach
                  </table>
               
                </div>
            </section>

        <!-- Taken transactions -->
            <section id="TakenTransactions" class="three">
                <div class="container">

                      <header>
                        <h2>Taken transactions</h2>
                    </header>
                    <table id = "transactionsTable" >
                    <tr>
                  <th onclick="sortTable(0)" style = "cursor: pointer;">User Name of Receiver</th>
                  <th onclick="sortTable(1)" style = "cursor: pointer;">Sender's name</th>
                  <th onclick="sortTable(2)" style = "cursor: pointer;">Amount</th>
                  <th onclick="sortTable(3)" style = "cursor: pointer;">Balance after transaction</th>
                  <th onclick="sortTable(4)" style = "cursor: pointer;">Date</th>
                  </tr>
                  @foreach($transactionreceived as $transrec)
                  <tr> 
                  <td>{{$userName}}</td>
                  <td> {{$transrec->userName}} </td>
                  <td> {{$transrec->amount}}</td>
                  <td> {{$transrec->current_balance}} </td>
                  <td> {{$transrec->created_at}}</td>

                  </tr>
                  @endforeach

                  </table>
                    
            </section>
            @endif
            @if($userBanned==true)
            <section id="Users" class="one dark cover">

         <th>   Sorry, but this user are Banned!!!</th>
            </section>
            @endif

       <section id = "logout" style ="display:none">
       <form id = "logout-form" method = "POST" action = "{{route('logout')}}">
       {{ csrf_field() }} 

       </form>
       </section>
           
    </div>
