<?php
include "heder and footer/head.php";
?>
<body>
<div class="wrapper">
    <?php include 'heder and footer/header.php'; ?>
    <main class="main">
        <section class="login">
                <div class="form__container _container">
                    <div class=" form-partners">
                        <h2 class="title-part__form">Авторизация</h2>
                        <form action="" class="login-input" method="post">
                            <div class="login__input">
                                <input name="login" type="text" placeholder="Логин" id="title">
                                <input type="text" name="password" placeholder="Пароль">
                            </div>
                            <div class="button__partners">
                                <button type="submit" class="partners__btn" name="auth_submit">Войти</button>
                            </div>


                            <?php
                            require_once 'includes/connection.php';
                            if (isset($_POST['auth_submit'])) {
                                if (!empty($_POST['login']) && !empty($_POST['password'])) {
                                    $login = $_POST['login'];
                                    $password = $_POST['password'];
                                    $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
                                    $result = mysqli_query($db_server, $query) or die ('Ошибка:' . mysqli_error($db_server));
                                    $numrows = mysqli_num_rows($result);
                                    if ($numrows != 0) {
                                        session_start();
                                        $_SESSION['login'] = $login;
                                        header('Location: admin/main.php');
                                    } else {
                                        echo '<label class="form-label">Неверный логин или пароль!</label>';
                                    }
                                } else {
                                    echo '<label class="form-label">Все поля обязательны к заполнению!</label>';
                                }
                            }

                            ?>

                        </form>

                    </div>

                </div>
        </section>
    </main>
    <?php include 'heder and footer/footer.php';  ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>
