<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
    <title>Document</title>
</head>

<body>
    <div class="login-container">
        <section class="login" id="login">
            <header>
                <h3>Login Admin Nanda Salad</h3>
                <h4>Login</h4>
            </header>
            <form class="login-form" action="#" method="post">
                <input type="text" class="login-input" placeholder="User" required autofocus />
                <input type="password" class="login-input" placeholder="Password" required />
                <div class="submit-container">
                    <button type="submit" class="login-button">SIGN IN</button>
                </div>
            </form>
        </section>
        <p>2016 - <a href="https://www.twitter.com/isacfadoni">Isac Fadoni</a></p>
    </div>
    <button id="e1">Login error!</button>

    <script>
        var form = document.getElementById('login');
        var buttonE1 = document.getElementById('e1');

        buttonE1.addEventListener('click', function() {
            form.classList.add('error_1');
            setTimeout(function() {
                form.classList.remove('error_1');
            }, 3000);
        });
    </script>
</body>

</html>