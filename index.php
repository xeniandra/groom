<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>Главная страница</title>
</head>
<body>
    <header>
        <div class="container-header flex">
            <img src="logo\logo_groom.png" alt="logo" class="logo">
            <p class="name">ГрумRoom</p>
        </div>
        <div class="menu flex">
            <a href="#register" class="menu">Регистрация</a>
            <a href="#auth" class="menu">Вход в личный кабинет</a>
        </div>
    </header>
    <main>
        <div class="container-main flex">
            <div class="heading flex">
                <h3 class="title">Последние решенные заявки</h2>
            </div>
                <h2 class="counter">Количестве оказанных услуг: 35</h3>

            <div class="container-request flex">
                <div class="request">
                    <p class="date">21/05/2021</p>
                    <p class="name-dog">Бобик</p>
                    <p class="category">Категория: стрижка</p>
                    <div class="change-image" onmouseenter="fn_image_enter(event)" onmouseleave="fn_image_leave(event)" id="image_1">
                        <div class="before" style="display:block;">
                            <img src="public\dog1b.jpg" alt="before">
                        </div>
                        <div class="after" style="display:none;">
                            <img src="public\dog1a.jpg" alt="after">
                        </div>
                    </div>
                </div>
                <div class="request">
                    <p class="date">21/05/2021</p>
                    <p class="name-dog">Бобик</p>
                    <p class="category">Категория: стрижка</p>
                    <div class="change-image" onmouseenter="fn_image_enter(event)" onmouseleave="fn_image_leave(event)" id="image_2">
                        <div class="before" style="display:block;">
                            <img src="public\dog1b.jpg" alt="before">
                        </div>
                        <div class="after" style="display:none;">
                            <img src="public\dog1a.jpg" alt="after">
                        </div>
                    </div>
                </div>
                <div class="request">
                    <p class="date">21/05/2021</p>
                    <p class="name-dog">Бобик</p>
                    <p class="category">Категория: стрижка</p>
                    <div class="change-image" onmouseenter="fn_image_enter(event)" onmouseleave="fn_image_leave(event)" id="image_3">
                        <div class="before" style="display:block;">
                            <img src="public\dog1b.jpg" alt="before">
                        </div>
                        <div class="after" style="display:none;">
                            <img src="public\dog1a.jpg" alt="after">
                        </div>
                    </div>
                </div>
                <div class="request">
                    <p class="date">21/05/2021</p>
                    <p class="name-dog">Бобик</p>
                    <p class="category">Категория: стрижка</p>
                    <div class="change-image" onmouseenter="fn_image_enter(event)" onmouseleave="fn_image_leave(event)" id="image_4">
                        <div class="before" style="display:block;">
                            <img src="public\dog1b.jpg" alt="before">
                        </div>
                        <div class="after" style="display:none;">
                            <img src="public\dog1a.jpg" alt="after">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-form flex">
            <div class="heading flex">
                    <h3 class="title" id="auth">Авторизация</h2>
            </div>
            <form action="#" method="POST" class="flex"> 
                <input type="text" name="login" placeholder="Введите логин" required>
                <input type="password" name="password" placeholder="Введите пароль" required>
                <input type="submit" value="ВОЙТИ">
            </form>
            <div class="heading flex">
                <h3 class="title" id="register">Регистрация</h2>
            </div>
            <div class="container-form flex">
                <form action="#" method="POST" class="flex"> 
                    <input type="text" name="fio" placeholder="Введите ФИО" required>
                    <input type="text" name="login" placeholder="Введите логин" required>
                    <input type="email" name="email" placeholder="Введите Email" required>
                    <input type="password" name="password" placeholder="Введите пароль" required> 
                    <input type="password" name="passwordCheck" placeholder="Повторите пароль" required>
                    <p class="agree">
                        <input type="checkbox" name="agree" required>
                        Согласие на обработку персональных данных
                    </p>
                    <input type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ">
                </form>
            </div>
    </main>
    <footer>
        <p class="footer">Задание выполнено в рамках подготовки к Демонстрационному экзамену</p>
        <p class="year">2021г.</p>

    </footer>
    <script src="js\index.js"></script>
</body>
</html>