<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HolyWord_SP</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php"; ?>

        <div class="hero container">
            <div class="hero--info">
                <h2>HolyWord</h2>
                <h1>Minecraft</h1>
                <p>
                Этот сайт был создан для увлечения игроков на сервере HolyWord. После регистрации вас ждут ежедневные задания, которые нужно будет подтвердить, отправив скриншот выполнения на сайте. За это вы будете получать различные награды, такие как донат кейсы, кейсы с монетками, сами монетки или даже весы. Желаем удачи и приятной игры!
                </p>
                <button class="btn">Get more details</button>
            </div>
            <img src="img/joystick.svg" alt="">
        </div>


     
        <div class="container banner">
            <h3>Ежедневные Задания</h3>
            <p>регистрируйтесь, чтобы получить задания</p>
        </div>
    </div>

    <div class="features">
        <div class="container">
            <h3>Ваши успехи</h3>
            <p class="xxx">Регистрируйтесь, чтобы получить задание</p>
            
        </div>
    </div>


    

    <script>
        function checkEmail() {
            let email = document.querySelector('#emailField').value;
            if (!email.includes('@')) alert('Нет символа @');
            else if (!email.includes('.')) alert('Нет символа .');
            else alert('Все отлично!');
        }
    </script>
</body>

</html>