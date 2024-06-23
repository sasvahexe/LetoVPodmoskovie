<?php
session_start();
if (isset($_POST['name'])) {
  $name = $_POST['name'];
  if ($name == '') {
    unset($name);
  }
}
if (isset($_POST['desc'])) {
  $desc = $_POST['desc'];
  if ($desc == '') {
    unset($desc);
  }
}
if (isset($_POST['adress'])) {
  $adress = $_POST['adress'];
  if ($adress == '') {
    unset($adress);
  }
}
if (isset($_POST['date'])) {
  $date = $_POST['date'];
  if ($date == '') {
    unset($date);
  }
}
if (isset($_POST['time'])) {
  $time = $_POST['time'];
  if ($time == '') {
    unset($time);
  }
}
if (isset($_POST['img'])) {
  $img = $_POST['img'];
  if ($img == '') {
    unset($img);
  }
}
if (empty($name) or empty($desc) or empty($adress) or empty($date) or empty($time) or empty($img)) {
  exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
} else {
  include ("dbconnect.php");
  $result = $mysqli->query("INSERT INTO event (photo, name, description, adress, date, time) VALUES('$img', '$name', '$desc', '$adress', '$date', '$time')");
  if ($result == 'TRUE') {
    header("Location: adminpanel.php");
  } else {
    echo "Ошибка! Сообщение не сохранено";
  }
}
?>