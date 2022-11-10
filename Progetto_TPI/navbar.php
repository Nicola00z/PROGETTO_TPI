<?php

    if(!empty($_SESSION['username'])){
      echo "
    <link rel='stylesheet' href='http://localhost/PROGETTO_TPI/Progetto_TPI/stylesheet/navbar.css'>
    </head>
    <body>
    <div class='navbar'>
    
    <a href='http://localhost/PROGETTO_TPI/Progetto_TPI/index.php'>Home</a>
    <a href='http://localhost/PROGETTO_TPI/Progetto_TPI/Oggetti_smarriti/main.php'>Oggetti smarriti</a>
    <a href='#contact'>Contact</a>
    <a class='right' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Login/logout.php'> Logout </a>
    <a class='right' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Login/main.php'>Login</a>
  </div>";
      
      
    }else{
      echo "
    <link rel='stylesheet' href='http://localhost/PROGETTO_TPI/Progetto_TPI/stylesheet/navbar.css'>
    </head>
    <body>
    <div class='navbar'>
    
    <a href='http://localhost/PROGETTO_TPI/Progetto_TPI/index.php'>Home</a>
    <a href='http://localhost/PROGETTO_TPI/Progetto_TPI/Oggetti_smarriti/main.php'>Oggetti smarriti</a>
    <a href='#contact'>Contact</a>
    <a class='right' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Login/main.php'>Login</a>
  </div>";
    }

    
?>