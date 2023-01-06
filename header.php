<!DOCTYPE html>
<html class="page" lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Портфолио, заказать сайт, UX, UI, дизайн сайта, сайт на wordpress, адаптивный сайт">
  <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/favicon.ico">
  <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/180.png">
  <link rel="apple-touch-icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/192.png">
  <link rel="apple-touch-icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/512.png">
  
  <link rel="preload" href="fonts/Roboto-Medium.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="fonts/Roboto-Regular.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="fonts/Roboto-Light.woff2" as="font" crossorigin="anonymous">

  <?php
    wp_head();
  ?>
</head>

<body class="page__body">
  <header class="page-header page-header--closed page-header--nojs">
    <div class="page-header__wrapper">
      <div class="page-header__toggle">
        <button class="toggle-menu" type="button">
          <span class="toggle-menu__title">меню</span>
          <span class="toggle-menu__icon toggle-menu__icon--top"></span>
          <span class="toggle-menu__icon toggle-menu__icon--bottom"> </span>
        </button>
      </div>
      <nav class="page-header__main-nav main-nav" data-cursor="-opaque">
        <ul class="main-nav__list">
          <li class="main-nav__item">
            <a href="#works" class="main-nav__link" data-magnetic>Работы</a>
          </li>
          <li class="main-nav__item">
            <a href="#skills" class="main-nav__link">Навыки</a>
          </li>
          <li class="main-nav__item">
            <a href="#about" class="main-nav__link">Обо мне</a>
          </li>
          <li class="main-nav__item">
            <a href="#contacts" class="main-nav__link">Контакты</a>
          </li>
        </ul>
        <ul class="main-nav__social">
          <li class="main-nav__social-item main-nav__item">
            <a target="_blank" href="<?php the_field('behance_link' , 2) ?>"><?php the_field('behance', 2) ?></a>
          </li>
          <li class="main-nav__social-item main-nav__item">
            <a target="_blank" href="<?php the_field('github_link' , 2) ?>"><?php the_field('github', 2) ?></a>
          </li>
          <li class="main-nav__social-item main-nav__item">
            <a target="_blank" href="<?php the_field('linkedin_link' , 2) ?>"><?php the_field('linkedin' , 2) ?></a>
          </li>
          <li class="main-nav__social-item main-nav__item">
            <a target="_blank" href="mailto:<?php the_field('mail_link' , 2) ?>"><?php the_field('mail', 2) ?></a>
          </li>
        </ul>
      </nav>
    </div>
  </header>