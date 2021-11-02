<aside>
    <form class="form-zad2" action="" method="post">
    <p>Pierwsza liczba</p><input type="text" name="pierwsza"><br>
    <p>Druga liczba</p>   <input type="text" name="druga"> <br>
    <p>Trzecia liczba</p>  <input type="text" name="trzecia"> <br>
        <input type="submit" name="" id=""><br><br>
       <p> 
        <?php
            @$pierwsza = $_POST['pierwsza'];
            @$druga = $_POST['druga'];
            @$trzecia = $_POST['trzecia'];
            if(isset($pierwsza) and isset($druga) and isset($trzecia)){
                if(is_numeric($pierwsza) and is_numeric($druga) and is_numeric($trzecia)){
                    if($pierwsza > $druga and $pierwsza > $trzecia){
                        echo "$pierwsza jest największą liczbą z tego zestawienia";
                    }
                    else if($druga > $pierwsza and $druga > $trzecia){
                        echo "$druga jest największą liczbą z tego zestawienia";
                    }  
                    else if($trzecia > $pierwsza and $trzecia > $druga){
                        echo "$trzecia jest największą liczbą z tego zestawienia";
                    }
                    else if($pierwsza == $druga and $pierwsza == $trzecia){
                        echo "wybrane liczby są równe ";
                    }
                }
                else{
                    echo "wypełnij dobrze pola ";
                }
            }
            else{}
        ?>
        </p>
    </form>
</aside>


