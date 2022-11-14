<header class="header">
    <div class="header__top">
        <a href="../" class="header__logo logo">
            <div class="logo__title">Интербиос</div>
            <div class="logo__subtitle">магазин-оранжерея</div>
        </a>
        <div class="header__header-contacts header-contacts">
            <div class="header-contacts__item header-contacts__item_phone">
                <a href="tel:+79806369987">+7 980 636 99 87</a>
            </div>
            <div class="header-contacts__item header-contacts__item_phone">
                <a href="tel:+79157296255">+7 915 729 62 55</a>
            </div>
            <div class="header-contacts__item header-contacts__item_work">
                Торжок, Калининское шоссе, д.49А
            </div>
            <div class="header-contacts__item header-contacts__item_email">
                <a href="mailto:interbios69@mail.ru">interbios69@mail.ru</a>
            </div>
        </div>
    </div>
    <nav class="header__menu menu">
        <div class="menu__container">
            <a <?php echo (isset($page) && $page == 'index') ? "class='menu__item menu__item_active'" : "class='menu__item'"; ?> href="../"><img class="menu__icon" src="../img/menu-icons/home-run.png" alt="Иконка дом"><span>Главная</span></a>
            <a <?php echo (isset($page) && $page == 'catalog') ? "class='menu__item menu__item_active'" : "class='menu__item'"; ?> href="../catalog.php"><img class="menu__icon" src="../img/menu-icons/bouquet.png" alt="Иконка букет"><span>Каталог</span></a>
            <a <?php echo (isset($page) && $page == 'delivery') ? "class='menu__item menu__item_active'" : "class='menu__item'"; ?> href="../delivery.php"><img class="menu__icon" src="../img/menu-icons/product.png" alt="Иконка доставки"><span>Доставка</span></a>
            <a <?php echo (isset($page) && $page == 'contacts') ? "class='menu__item menu__item_active'" : "class='menu__item'"; ?> href="../contacts.php"><img class="menu__icon" src="../img/menu-icons/pin.png" alt="Иконка метки на карте"><span>Контакты</span></a>
        </div>
    </nav>
</header>