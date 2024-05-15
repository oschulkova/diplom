<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Заголовок страницы</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <nav class="header__nav">
      <a href="<?= get_home_url() ?>" class="logo-a"><p class="logo">illumination</p></a>
        <ul class="header__nav-list">
          <div class="header__nav-list__wrapper">
            <li><a href="#vector-grapich">Векторная графика</a></li>
            <li><a href="#animation">Анимация</a></li>
            <li><a href="#videomontash">Видеомонтаж</a></li>
            <li><a href="#zvuk">Звуковой монтаж</a></li>
          </div>
        </ul>
      </nav>
    </header>