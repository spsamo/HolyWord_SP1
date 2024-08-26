<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HolyWord_SP</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>

    <div class="container hero-contacts">
        <h1>Мы рады работать с вами и дарить вам позитивные эмоции при игре.</h1>
        <p>Вы можете оставить свои отзывы о сайте или отправить сообщение, если у вас есть предложения по улучшению, а также сообщить о проблемах или багах. Ваше мнение важно для нас!</p>
        <img src="/img/Map.png" alt="">
    </div>

    <div class="feedback">
        <div class="container">
            <h2>Отзывы</h2>
            <p>Оставляйте свои отзывы</p>

            <form>
                <div class="inline">
                    <div>
                        <label>First Name</label>
                        <input type="text">
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type="text">
                    </div>
                </div>
                <label>Nickname</label>
                <input  class="one-line">

                <label>Message</label>
                <textarea class="one-line"></textarea>

                <button type="button">Send</button>
            </form>
        </div>
    </div>
    
</body>

</html>