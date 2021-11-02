<aside>
    <div class="zad2-content">
    <form action="#" method="POST">
        <p>Podaj liczbę</p>
        <input type="text" name="liczba">
        <input type="submit">
        <br><br>
        <?php
    @$liczba = $_POST['liczba'];

    $min = 0;
    $max = 100;
    
    $min1 = 101;
    $max1 = 200;

    $min2 = 201;
    $max2 = 300;

    $min3 = 301;
    $max3 = 400;

    $min4 = 401;
    $max4 = 500;
    
    if(isset($liczba)){
        if($liczba >= $min && $liczba <= $max){
            echo "liczba $liczba nazlezy co przedziału < $min , $max >";
        }
        else if($liczba >= $min1 && $liczba <= $max1){
            echo "liczba $liczba nazlezy co przedziału < $min1 , $max1 >";
        }
        else if($liczba >= $min2 && $liczba <= $max2){
            echo "liczba $liczba nazlezy co przedziału < $min2 , $max2 >";
        }
        else if($liczba >= $min3 && $liczba <= $max3){
            echo "liczba $liczba nazlezy co przedziału < $min3 , $max3 >";
        }
        else if($liczba >= $min4 && $liczba <= $max4){
            echo "liczba $liczba nazlezy co przedziału < $min4 , $max4 >";
        }
        else if($liczba >= 501){
            echo "liczba $liczba nazlezy co przedziału < 500 , +&#x221e; >";
        }

        else{
            echo "podana wartośc nie jest liczbą";
        }
    }
    else{}
    

?>
    </form>
    </div>
   
</aside>


    
