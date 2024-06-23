<?php session_start();
include ('id.php');
include ("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Лето в Коломне</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="images/Shape.svg">
</head>

<body>
  <header>
    <div class="logo-nav">
      <div class="logo">
        <img src="images/logo.png" alt="Logo" class="logo-image">
      </div>
      <div class="header-line"></div>
      <h2 class="text-logo">Панель администратора</h2>
    </div>
    <div class="auth-buttons">
      <a href="index.php" class="login-btn"><img src="images/ic_baseline-manage-accounts.svg" alt="">Главная</a>
      <a href="logout.php" class="login-btn"><img src="images/logout.svg" alt="">Выйти</a>
    </div>
  </header>
  <main class="main">
    <div class="main-text">
      <h1 class="title-event">Список мероприятий</h1>
      <a href="event.php" class="event-link">Добавить мероприятие</a>
    </div>
    <table class="table">
      <tr>
        <th class="table-title"><b>Мероприятие</b></th>
        <th class="table-title"><b>Описание</b></th>
        <th class="table-title"><b>Место проведения</b></th>
        <th class="table-title"><b>День</b></th>
        <th class="table-title"><b>Время</b></th>
        <th class="table-title"><b>Фото</b></th>
      </tr>

      <?php
      include ('dbconnect.php');
      $label = 'id';
      $id = false;
      if (!empty($_GET[$label])) {
        $id = $_GET[$label];
      }
      $events = $mysqli->query("SELECT * FROM event");
      $table = "";
      $k = 1;
      while ($row = $events->fetch_assoc()) {
        $table .= "<tr>";
        $table .= "<td>" . $row["name"] . "</td>";
        $table .= '<td class="desc">' . $row["description"] . "</td>";
        $table .= "<td>" . $row["adress"] . "</td>";
        $table .= "<td>" . $row["date"] . "</td>";
        $table .= "<td>" . $row["time"] . "</td>";
        $table .= "<td>" . $row["photo"] . "</td>";
        $table .= "</tr>";
        $k++;
      }
      echo $table;
      ?>
    </table>
  </main>
</body>

</html>