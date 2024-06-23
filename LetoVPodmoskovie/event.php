<?php session_start();
include ('id.php');
include ("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Новое мероприятие</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="login-style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="images/Shape.svg">
</head>

<body style="background-color: #0bda51;">
  <header>
    <div class="logo-nav">
      <div class="logo">
        <img src="images/logo.png" alt="Logo" class="logo-image">
      </div>
      <div class="header-line"></div>
      <h2 class="text-logo">Мероприятия в Коломне</h2>
    </div>
    <div class="auth-buttons">

      <a href="adminpanel.php" class="login-btn"><img src="images/ic_baseline-manage-accounts.svg" alt="">Панель
        редактирования</a>
      <a href="logout.php" class="login-btn"><img src="images/logout.svg" alt="">Выйти</a>
    </div>
  </header>

  <div class="main-container">
    <div class="main-form">
      <div class="form">
        <div class="form-panel">
          <div class="form-header">
            <h1 class="title">Новое мероприятие</h1>
          </div>
          <div class="form-content">
            <form action="save_event.php" method="post">
              <div class="form-group">
                <input type="text" id="name" name="name" required="required" placeholder="Название мероприятия" />
              </div>
              <div class="form-group">
                <textarea name="desc" id="desc" placeholder="Описание мероприятия"></textarea>
              </div>
              <div class="form-group">
                <input type="text" id="adress" name="adress" required="required" placeholder="Адрес проведения" />
              </div>
              <div class="form-group">
                <input type="text" id="date" name="date" required="required" placeholder="День месяц год" />
              </div>
              <div class="form-group">
                <input type="text" id="time" name="time" required="required" placeholder="Время проведения" />
              </div>
              <div class="form-group">
                <input type="text" id="img" name="img" required="required" placeholder="Ссылка на изображение" />
              </div>
              <div class="form-group">
                <button type="submit" class="button">Сохранить<img src="images/arrow-right.svg" alt=""
                    class="image-button"></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>