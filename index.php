<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Funkcje</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper"> 
        <header>
            <nav>
                <ul>
                    <li><a href="#" class="bta1">strona główna</a></li>
                    <li><a href="#" class="bta2">zadania</a></li>
                    <li><a href="#" class="bta3">kontakt</a></li>
                    <li><a href="#" class="bta4">zaloguj sie</a></li>
                    <li><a href="#" class="bta5">dołącz do nas</a></li>
                </ul>
            </nav>
            <h1>Wybierz Skrypt który cie interesuje</h1>
            <form action="#" method="post">
                <section class="header-bta">
                    <input type="submit" value="wynik-1" name="wynik" id="bta-input" class="bta1">
                    <input type="submit" value="wynik-2" name="wynik" id="bta-input" class="bta2">
                    <input type="submit" value="wynik-3" name="wynik" id="bta-input" class="bta3">
                </section>
            </form>
        </header>
        <main>
            <?php
                session_start();
            
                if(isset($_POST['wynik']) and $_POST['wynik'] == 'wynik-1'){
                    $_SESSION = array();
                    $_SESSION['dziala1'] = 1;
                }
                

                if(isset($_POST['wynik']) and $_POST['wynik'] == 'wynik-2'){
                    $_SESSION = array();
                    $_SESSION['dziala2'] = 2;
                }
                   

                if(isset($_POST['wynik']) and $_POST['wynik'] == 'wynik-3'){
                    $_SESSION = array();
                    $_SESSION['dziala3'] = 3;
                }
                    if(isset($_SESSION['dziala1'])){
                        
                        include('zadanie1.php');
                    }
                    else{
                    }

                    if(isset($_SESSION['dziala2'])){
                        include('zadanie2.php');        
                    }
                    else{

                    }


                    if(isset($_SESSION['dziala3'])){
                        include('zadanie3.php');
                        
                    }
                    else{

                    }    
                     
            ?>
        </main>
    </div>
</body>
</html>