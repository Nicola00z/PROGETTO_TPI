<!DOCTYPE html>   
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" href="../stylesheet/personal_area.css">
        <?php
            $_SESSION['start'] = 1;
            include_once("../navbar.php");
        ?>
    <body>
        <?php
            echo "<h1> Ciao " . $_SESSION['username'];
        ?>
        <div class='buttons'>
        <?php
            switch($_SESSION['level']){
                case 1 :
                    echo "<a href='../reservation'><button> Reservation </button></a>";
                case 2 :
                    echo "<a href='../Oggetti_Smarriti'><button> Oggetti Smarriti </button></a>";
                case 3 :
                    echo "<a href='../reservation'><button> Reservation </button></a>";
                    echo "<a href='../Oggetti_Smarriti'><button> Oggetti Smarriti </button></a>";
                    echo "<a href='register.php'><button> Crea account </button></a>";
            }



        ?>
        </div>
        <a href='./logout.php'> <button> Logout </button> </a>
    </body>
</html>