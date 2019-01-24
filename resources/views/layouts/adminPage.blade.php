
	<body class="is-preload">

<!-- Header -->
    <div id="header">

        <div class="top">

            <!-- Logo -->
                <div id="logo">
                    <span class="image avatar48"><img src="{{asset('public/images/avatar.jpg')}}" alt="" /></span>
                    <h1 id="title">Admin Panel</h1>
                </div>
               

            <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="#Users" id="top-link"><span class="icon fa-home">Users List</span></a></li>
                        <li><a href="#Transactions" id="top-link"><span class="icon fa-home">Transactions List</span></a></li>



                    </ul>
                </nav>

        </div>

      

    </div>

<!-- Main -->
    <div id="main">

<section id="Users" class="one dark cover">
<h2>Users list</h2>

               <table id="transactionsTable" >
               <tr>
               <th onclick="sortTable(0)" style = "cursor: pointer;">User Id</th>
               <th onclick="sortTable(1)" style = "cursor: pointer;"> User Name</th>
               <th onclick="sortTable(2)" style = "cursor: pointer;">User Current amount of Money</th>
               <th onclick="sortTable(3)" style = "cursor: pointer;">Date of registration</th>
               </tr>
               @foreach($users as $user)
               <tr>
               <td style="color:#FFA100;">{{$user->id}}</td>
               <td style="color:#FFA100;">{{$user->userName}}</td>
               <td style="color:#FFA100;"> {{$user->balance}}</td>
               <td style="color:#FFA100;">{{$user->created_at}}</td>
                </tr>
                @endforeach

               </table> 
                <div class="container"></div>
                </section>
<section id="Transactions" class="one dark cover">
<h2>Transactions list</h2>

               <table id="transactionsTable2" >
               <tr>
               <th onclick="sortTable2(0)" style = "cursor: pointer;">Id</th>
               <th onclick="sortTable2(1)" style = "cursor: pointer;">Sender</th>
               <th onclick="sortTable2(2)" style = "cursor: pointer;">Receiver</th>
               <th onclick="sortTable2(3)" style = "cursor: pointer;">Amount</th>
               <th onclick="sortTable2(4)" style = "cursor: pointer;">Left amount of sender after the transaction</th>
               <th onclick="sortTable2(5)" style = "cursor: pointer;">Date</th>

               </tr>
               @foreach($transactions as $transaction)
               <tr>
               <td style="color:#FFA100;">{{$transaction->id}}</td>
               <td style="color:#FFA100;">{{$transaction->userid}}</td>
               <td style="color:#FFA100;"> {{$transaction->towhom}}</td>
               <td style="color:#FFA100;">{{$transaction->amount}}</td>
               <td style="color:#FFA100;">{{$transaction->leftamount}}</td>
               <td style="color:#FFA100;">{{$transaction->created_at}}</td>

                </tr>
                @endforeach

               </table> 
                <div class="container"></div>
                </section>
    </div>
