<?php
    session_start();
    include ("backend\connection.php");
    include ("backend\check_session.php");
    $queryCategories = mysqli_query($link, "SELECT `id_category`, `category` FROM `category`");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>Личный кабинет</title>
</head>
<body>
    <header>
        <div class="container-header flex">
            <img src="logo\logo_groom.png" alt="logo" class="logo">
            <p class="name">ГрумRoom</p>
        </div>
        <div class="menu flex">
            <a href="index.php" class="menu">Главная</a>
            <a href="backend\logout.php" class="menu">Выход</a>
        </div>
    </header>
    <main>
        <div class="container-main flex">
            <div class="heading flex">
                <h3 class="title">Мои заявки</h2>
            </div>
            <nav class="filtration">
                    <a onclick="fn_app_filtration ()" class="status">Все</a> |
                    <a onclick="fn_app_filtration ('Новая')" class="status">Новые</a> |
                    <a onclick="fn_app_filtration ('Обработка данных')" class="status">Обработка данных</a> |
                    <a onclick="fn_app_filtration ('Услуга оказана')" class="status">Услуга оказана</a>
                </nav>
            <div class="container-request flex">

                <div class="request">
                    <p class="date">Время: 21/05/2021</p>
                    <p class="name-dog">Кличка: Бобик</p>
                    <p class="description">Описание: Постригите Бобика, он зарос(</p>
                    <p class="category">Категория: стрижка</p>
                    <p class="status" id="status">Статус заявки: <b>Новая</b></p>
                </div>
                <div class="request">
                    <p class="date">Время: 21/05/2021</p>
                    <p class="name-dog">Кличка: Бобик</p>
                    <p class="description">Описание: Постригите Бобика, он зарос(</p>
                    <p class="category">Категория: стрижка</p>
                    <p class="status" id="status">Статус заявки:<b>Обработка данных</b> </p>
                </div>
                <div class="request">
                    <p class="date">Время: 21/05/2021</p>
                    <p class="name-dog">Кличка: Бобик</p>
                    <p class="description">Описание: Постригите Бобика, он зарос(</p>
                    <p class="category">Категория: стрижка</p>
                    <p class="status" id="status">Статус заявки: <b>Услуга оказана</b></p>
                </div>
                <div class="request">
                    <p class="date">Время: 21/05/2021</p>
                    <p class="name-dog">Кличка: Бобик</p>
                    <p class="description">Описание: Постригите Бобика, он зарос(</p>
                    <p class="category">Категория: стрижка</p>
                    <p class="status" id="status">Статус заявки: <b>Новая</b></p>
                </div>
            </div>
        </div>
        <div class="container-form flex">
            <div class="heading flex">
                    <h3 class="title" id="auth">Создать заявку</h2>
            </div>
            <div class="container-form flex">
                <form action="#" method="POST" class="flex" id="add"> 
                    <input type="text" name="name" placeholder="Кличка домашнего животного" required>
                    <input type="text" name="description" placeholder="Описание запрашиваемой работы" required>
                    <select name="category" id="">
<?php while($category = mysqli_fetch_assoc($queryCategories)){
    $idCategory = $category['id_category'];
    $nameCategory = $category['category'];
?>
                        <option value="<?=$idCategory?>"><?=$nameCategory?></option>
<? } ?>
                    </select>
                    <p>Загрузите фото питомца:</p>
                    <input type="file" name="img" id="">
                    <input type="submit" value="ОТПРАВИТЬ ЗАЯВКУ">
                </form>
            </div>
    </main>
    <footer>
        <p class="footer">Задание выполнено в рамках подготовки к Демонстрационному экзамену</p>
        <p class="year">2021г.</p>

    </footer>
    <script src="js\user.js"></script>
</body>
</html>