<?php 
    include "./header.php";
    $db = new PDO("mysql:host=localhost;dbname=student","root","root");
    $sql = "SELECT * FROM news ORDER BY `date` DESC LIMIT 1";
    $res = $db->query($sql);
    $row = $res->fetch();
?>
    <div style="background-image: url(./images/<?=$row['image']?>);" class="ban-image">
        <section   class="ban-image__text">
            <h1 class="ban-image__text--title"><?=$row['title']?></h1>
            <p class="ban-image__text--info"><?=strip_tags($row['announce'])?></p>
        </section>
    </div>    
    <div class="main-info">
        <section class="main-info__title">
                <h1 class="main-info__title--text">Новости</h1>
        </section>
        <?php
            $sql = "SELECT *, DATE_FORMAT(`date`,'%d.%m.%Y') FROM news ORDER BY `date` DESC LIMIT 4";
            $res = $db->query($sql);
            $row = $res->fetch(); 
        ?>
        <section class="main-info__block">
            <ul class="main-info__block--news">
                <li class="main-info__block--date"><p>11.06.2412</p></li>
                <li class="main-info__block--title"><h2>Возвращение этнографа</h2></li>
                <li class="main-info__block--text"><p>Cегодня с Проксимы вернулась этнографическая экспедиция Джона Голдрама.</p></li>
                <li class="main-info__block--button"><button class="main-info__block--button--text">ПОДРОБНЕЕ<div id="arrow-1"></div></button></li>
            </ul>
            <ul class="main-info__block--news">
                <li class="main-info__block--date"><p>11.06.2412</p></li>
                <li class="main-info__block--title"><h2>Несчастный случай с известной светской дивой</h2></li>
                <li class="main-info__block--text"><p class="main-info__block--text--not-selected">Светская дива Алиса Уткина попала под троллейбус, пытаясь уйти от преследования.</p></li>
                <li class="main-info__block--button"><button class="main-info__block--button--text">ПОДРОБНЕЕ<div id="arrow-1"></div></button></li>
            </ul>
        </section>

        <section class="main-info__block">
            <ul class="main-info__block--news">
                <li class="main-info__block--date"><p>26.05.2412</p></li>
                <li class="main-info__block--title"><h2>Папа Римский совершил визит в систему Альфы Центавра</h2></li>
                <li class="main-info__block--text"><p class="main-info__block--text--not-selected">Папа Римский Жан-Клод XIV посетил с апостольским визитом систему Альфы Центавра. Он принял участие в ряде благотворительных мероприятий и совершил богослужение в соборе Ван-Дамм-де-Ури.</p></li>
                <li class="main-info__block--button"><button class="main-info__block--button--text">ПОДРОБНЕЕ<div id="arrow-1"></div></button></li>
            </ul>
            <ul class="main-info__block--news">
                <li class="main-info__block--date"><p>20.05.2412</p></li>
                <li class="main-info__block--title"><h2>На чемпионате по пустотной гребле победила команда с Фобоса</h2></li>
                <li class="main-info__block--text"><p class="main-info__block--text--not-selected">В поясе астероидов на проходившем в последние выходные этапе системного чемпионата по пустотной гребле команда с Фобоса одержала убедительную победу.</p></li>
                <li class="main-info__block--button"><button class="main-info__block--button--text">ПОДРОБНЕЕ<div id="arrow-1"></div></button></li>
            </ul>
        </section>
    </div>
<?php include "./footer.php"?>