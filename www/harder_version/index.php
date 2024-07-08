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
            $sql = "SELECT *, DATE_FORMAT(`date`,'%d.%m.%Y') news_date FROM news ORDER BY `date` DESC LIMIT 4";
            $res = $db->query($sql);

        ?>

        <section class="main-info__block">
        <?php
            foreach($res->fetchALL() as $row)
            {
        ?>
            <ul class="main-info__block--news">
                <li class="main-info__block--date"><p><?=$row['news_date']?></p></li>
                <li class="main-info__block--title"><h2><?=$row['title']?></h2></li>
                <li class="main-info__block--text"><p><?=strip_tags($row['announce'])?></p></li>
                <li class="main-info__block--button">
                    <a href="/harder_version/news.php?id=<?=$row['id']?>" class="main-info__block--button--text">
                        ПОДРОБНЕЕ<div id="arrow-1"></div>
                    </a>
                </li>
            </ul>
        <?php
            }
        ?>   
        </section>
    </div>
    <div class="nav">
        <ul class="nav__elem">
            <li class="nav__elem--button"><button class="nav_elem--button--text">1</button></li>
            <li class="nav__elem--button"><button class="nav_elem--button--text">2</button></li>
            <li class="nav__elem--button"><button class="nav_elem--button--text">3</button></li>
            <li class="nav__elem--button"><button class="nav_elem--button--arrow"><div id="arrow-2"></div></button></li>
        </ul>
    </div>

    <form action="mail.php" method="POST">
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="text" name="message">
        <input type="submit" value="ОТПРАВИТЬ">
    </form>
<?php include "./footer.php"?>
<?php ?>