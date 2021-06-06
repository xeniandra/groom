<?php
    // старт сессии
    session_start();
    // соединение с базой данных
    include ("connection.php");
    // проверка сессии
    include ("check_session.php");
    $idApp = $_GET['idApp'];
    $delApp = mysqli_query($link, "DELETE FROM `category` WHERE `id_category` = '$idApp'");
	header ("Location: ../user.php?message=Заявка удалена");
	exit;
    ?>