<?php
include "heder and footer/head.php";
?>


<body>
    <div class="wrapper">
        <?php include 'heder and footer/header.php'; ?>
        <main class="main">
            <section class="partners">
                <div class="partners__container _container">
                    <h2 class="title-partner">Наши партнеры</h2>
                    <div class="partners-icon">
                        <img src="img/par2.jpeg" alt="" class="photo">
                        <img src="img/par1.jpg" alt="" class="photo">
                    </div>
                    <div class="partners-icon">
                        <img src="img/par1.jpg" alt="" class="photo">
                        <img src="img/par2.jpeg" alt="" class="photo">
                    </div>
                </div>
            </section>
            <section class="form">
                  <div class="form__container _container">
                    <div class=" form-partners">
                       <h2 class="title-part__form">Стать партнером</h2>
                         <form action="" class="form-input">
                            <div class="partners__input">
                                <input type="text" placeholder="Организация">
                                <input type="e-mail" placeholder="Ваш e-mail">
                            </div>
                         </form>
                         <div class="button__partners">
                            <button type="submit" class="partners__btn">Отправить</button>
                         </div>
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
 