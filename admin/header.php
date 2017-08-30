<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>update header</title>
    <style>
        .pole {
            width: 300px;
        }

        input[type=submit] {
            border-radius: 10px;
            padding: 10px 30px;
        }

        .content {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="content">
    <form action="#" method="post">
        <p>id:</p>
        <input class="pole" id="id" type="text" name="id" placeholder="Наберите Ваш ID"><br>
        <p>Имя:</p>
        <input class="pole" id="name" type="text" name="name" placeholder="Наберите Вашe Имя"><br>
        <p>Код:</p>
        <textarea id="desc" name="desc" cols="80" rows="10" placeholder="Введите Ваш код"></textarea><br>
        <input type="submit" value="Save!!">
    </form>
</div>
</body>
</html>
