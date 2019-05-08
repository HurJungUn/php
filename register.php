<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>회원가입</title>
</head>

<body>
    <div class="box">
        <i class="fas fa-user"></i>
        <h1>Create Your Account!</h1>

        <form action="register_ok.php" method="post">
            <input type="text" name="id" placeholder="ID"><br>
            <input type="text" name="name" placeholder="NAME"><br>
            <input type="password" name="password" placeholder="PASSWORD"><br>
            <input type="submit" value="create account">
        </form>
    </div>

</body>

</html>