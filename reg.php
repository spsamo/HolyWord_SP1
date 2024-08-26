<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>


    <div class="feedback">
        <div class="container">
            <h2>Registration</h2>
            <p>Добро пожаловать на наш сайт! Выполняйте разнообразные задания и получайте щедрые награды.</p>
            

            <form method="post" action="/lib/reg.php">
                <div class="inline">
                    <div>
                        <label>login</label>
                        <input type="text" name="login">
                    </div>
                    <div>
                        <label>name</label>
                        <input type="text" name="name">
                    </div>
                </div>
                <label>Nickname</label>
                <input type="text" class="one-line" name="Nickname">

                <label>Password</label>
                <input type="text" class="one-line" name="Password">

                <button type="submit">Registration</button>
            </form>
        </div>
    </div>
  
    
</body>

</html>