<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:../index.php');
  exit();
}
?>

<html>

<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="style1.css" rel="stylesheet">
   <link href="style.css" rel="stylesheet">

</head>

<body>
    <section class="vbox">
        <header class="bg-dark dk header navbar navbar-fixed-top-xs">
            <div class="navbar-header aside-md">
              <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"><i class="fa fa-cog" style="position: absolute; right: -100%; top: 9px; z-index: -0; "></i></a>

                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"><i class="fa fa-bars"></i></a>
        <a href=""  data-toggle="fullscreen"><img src="../images/mockboard-logo-01.png" height="40px" style="margin-top: 5px; margin-bottom: 5px;"></a>


            </div>

            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <?php echo $_SESSION['username'];?> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span>


                        <li> <a href="../logout.php" >Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </header>

        <section>
            <section class="hbox stretch"> <!-- .aside -->
                <aside class="bg-dark lter aside-md hidden-print" id="nav">
                    <section class="vbox">

                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                                <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <ul class="nav">
                                        <li class="active"> <a href="home.php" class="active"> <i class="fa fa-building-o"> <b class="bg-info"></b> </i> <span>Home</span> </a> </li>




                                    <li > <a href="result.php" > <i class="fa fa-pencil icon"><b class="bg-info"></b> </i> <span>Results</span> </a> </li>
                                  
                                </ul>
                            </nav> <!-- / nav -->
                        </div>
                    </section>

                        <footer class="footer lt hidden-xs b-t b-dark"> <div id="chat" class="dropup"> <section class="dropdown-menu on aside-md m-l-n"> <section class="panel bg-white"> <header class="panel-heading b-b b-light">Active chats</header> <div class="panel-body animated fadeInRight"> <p class="text-sm">No active chats.</p> <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p> </div> </section> </section> </div> <div id="invite" class="dropup">
                            <section class="dropdown-menu on aside-md m-l-n"> <section class="panel bg-white"> <header class="panel-heading b-b b-light"> John <i class="fa fa-circle text-success"></i> </header> <div class="panel-body animated fadeInRight"> <p class="text-sm">No contacts in your lists.</p> <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p> </div> </section> </section> </div> <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>
                            <div class="btn-group hidden-nav-xs"></div> </footer> </section> </aside> <!-- /.aside --> <section id="content"> <section class="vbox">







                                <section class="scrollable padder">


                                <div style="height:90.5vh;">


                                    <center>
                                    <h4 id="welcomemessage">WELCOME TO</h4>
                                    <h1 id="welcomemessage1">MOCKBOARD PRIME</h1>
                                  </center>





              </div>








                            </div>
                        </section>
                    </section>
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
                </section>
                <aside class="bg-light lter b-l aside-md hide" id="notes">
                    <div class="wrapper">Notification</div>
                </aside>
            </section>
        </section>
    </section> <!-- Bootstrap --> <!-- App -->


	<script src="script.js"></script>

</body>

</html>
