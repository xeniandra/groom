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
            <a href="#" class="menu">Регистрация</a>
            <a href="#" class="menu">Вход в личный кабинет</a>
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
        <div class="heading flex">
                <h3 class="title">Регистрация</h2>
        </div>
    </main>
    <footer>
        
    </footer>
    <script src="js\index.js"></script>
</body>
</html>