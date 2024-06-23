<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лето в Коломне</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
<?php 
session_start();
include('id.php');
    ?>
<header>
    <div class="logo-nav">
    <div class="logo">
        <img src="images/logo.png" alt="Logo" class="logo-image">
    </div>
    <div class="header-line"></div>
    <h2 class="text-logo">Мероприятия в Коломне</h2>
    </div>
    <div class="auth-buttons">
    <?php 

$login = @ $_SESSION['login'];
if (empty($_SESSION['login']))

{

    ?>
    <a href="login.php" class="login-btn"><img src="images/ic_baseline-person.svg" alt="">Войти</a>
        <?php 
}
else {

    ?>
    <a href="adminpanel.php" class="login-btn"><img src="images/ic_baseline-manage-accounts.svg" alt="">Панель редактирования</a>
    <a href="logout.php" class="login-btn"><img src="images/logout.svg" alt="">Выйти</a>
        <?php 
}

    ?>
    </div>
</header>
<div class="main">

<div class="main-conteiner">
<div class="main-text-title">
    <img src="images/event.png" alt="" class="image-event-title">
    <div class="text-event-title">
    <h1 class="title-event">Ближайшие мероприятия в Коломне</h1>
    <p class="text-event">Открой для себя мир увлекательных событий в самом сердце Коломны! На нашей странице ты найдешь информацию о самых ярких и интересных мероприятиях, которые проходят в нашем городе. Будь в курсе всех культурных и спортивных событий, фестивалей, концертов и выставок, чтобы сделать свое время проведенное в Коломне незабываемым!</p>
    </div>
</div>

<div class="footer-line"></div>

<?php
        include ("dbconnect.php");
        $label = 'id';
        $id = false;
        if (!empty($_GET[$label])) {
            $id = $_GET[$label];
        }
        $result = $mysqli->query
        ("SELECT * FROM event WHERE id ='$id'");
        $result = mysqli_query($mysqli, "SELECT * FROM event");

        $div = "<div class='cards'>";
        $k = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $div .= '<div class="card line">';
            $div .= '<h1 class="title">' . $row['name'] . '</h1>';
            $div.= '<div class="info-container">';
            $div .= '<div class="image"><img class="image-2" src= ' . $row['photo'] . '></div>';
            $div .= '<div class="text-container">';
            $div .= '<p class="text">' . $row['description'] . '</p>';
            $div .= '<div class="info-adress-container">';
            $div .= '<p class="adress size">Место проведения: ' . $row['adress'] . '</p>';
            $div .= '<p class="date-time size">' . $row['date'] . '<br>' . $row['time'] . '</p>';
            $div .= '</div>';
            $div .= '</div>';
            $div .= '</div>';
            $div .= '</div>';
            $k++;
        }
        $div .= '</div>';
        echo $div;
        ?>
</div>
</div>
</div>
</body>
</html>