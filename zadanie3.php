<aside>
    <div class="content">
        <section class="zad3-section zad3-content">
            <h1>Legenda do skryptu</h1>
            <p>1 - Laravel</p>
            <p>2 - Symfony</p>
            <p>3 - CakePHP</p>
            <p>4 - Slim</p>
            <p>5 - CodeIgniter</p>
        </section>
        <section class="zad3-section zad3-scrypt">
            <form action="" method="post">
                <input type="text" name="cyfra" id="">
                <input type="submit" value="Pokaż opis">
            </form>
        <?php
            if(isset($_POST['cyfra'])){
                switch($_POST['cyfra']){
                    case 1 : echo "<br><strong>Laravel</strong> - jest jedną z najczęściej pojawiających się nazw, kiedy mowa o frameworkach PHP. Ten stosunkowo nowy – w porównaniu do pozostałych – framework jest znany ze swojej eleganckiej składni, która jest łatwa do zrozumienia i przyjemna w użyciu.";
                    break;
                    case 2 : echo "<br><strong>Symfony</strong> - istnieje znacznie dłużej niż większość frameworków PHP w naszym zestawieniu i nieprzerwanie od 2005 roku cieszy się zaufaniem wśród developerów. Jego komponenty są wykorzystywane przez kilka najpopularniejszych systemów zarządzania treścią, w tym m.in. Drupal.";
                    break;
                    case 3 : echo "<br><strong>CakePHP</strong> -  jest prawdopodobnie najłatwiejszym do opanowania frameworkiem PHP, bazującym na heurystyce CRUD (create, read, update and delete). To, co wyróżnia go na tle pozostałych platform jest ulepszona modułowość i zwiększona możliwość tworzenia dodatkowych samodzielnych bibliotek.";
                    break;
                    case 4 : echo "<br><strong>Slim</strong> - jest nietypową strukturą PHP nazywaną mikro-frameworkiem. Ma to być doskonały wybór w przypadku małych aplikacji, które nie wymagają cech platformy z pełnym stosem. Sprawdzi się więc idealnie w przypadku programistów, którzy chcą tworzyć interfejsy API i usługi RESTful.";
                    break;
                    case 5 : echo "<br><strong>CodeIgniter</strong> - to framework znany z niewielkich rozmiarów, wyróżniający się bezproblemową instalacją z minimalistycznymi wymaganiami systemowymi. Pomimo tego, że zajmuje zaledwie 2 MB, doskonale nadaje się do tworzenia dynamicznych i rozbudowanych witryn internetowych.";
                    break;
                    default;
                }
            }
            else{}
        ?>
        </section>
    </div>
</aside>


















