<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?= base_url('/css/remix/remixicon.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/css/main.css') ?>">

  <title>PAGE | <?= $title ?></title>
</head>

<body id="container">
  <header id="header" class="bg-dark">
    <button id="menu" onclick=""><i class="ri-menu-line"></i></button>
    <h1 class="text-white">
      <a href="<?= base_url($admin ? '/admin' : '/') ?>" class="text-white">
        <?= $title ?>
      </a>
    </h1>
  </header>

  <?php if ($admin) : ?>
    <aside id="aside" class="bg-secondary">
      <ul class="nav-bar">
        <li>
          <a href="<?= base_url('admin') ?>">
            <i class="ri-home-line"></i>Home
          </a>
        </li>
        <li>
          <a href="<?= base_url('admin/client') ?>">
            <i class="ri-user-line"></i>Client
          </a>
        </li>
        <ul>
          <li>
            <a href="<?= base_url('admin/client/register') ?>">
              <i class="ri-user-add-line"></i>add
            </a>
          </li>
        </ul>
        <!-- <li>
        <a href="<?= base_url('admin/product') ?>">
          <i class="ri-shopping-cart-2-line"></i>Product
        </a>
      </li>
      <ul>
        <li>
          <a href="<?= base_url('admin/product/register') ?>">
           <i class="ri-add-line"></i>add
          </a>
        </li>
      </ul> -->
        <li>
          <a href="<?= base_url('admin/logout') ?>">
            <i class="ri-logout-circle-line"></i>Logout
          </a>
        </li>
      </ul>
    </aside>
  <?php else : ?>
    <aside id="aside" class="bg-secondary">
      <ul class="nav-bar">
        <li>
          <a href="<?= base_url('home') ?>">
            <i class="ri-home-line"></i>Home
          </a>
        </li>
        <li>
          <a href="<?= base_url('product') ?>">
            <i class="ri-shopping-cart-2-line"></i>Products
          </a>
        </li>
        <li>
          <a href="<?= base_url('client') ?>">
            <i class="ri-user-line"></i>Client
          </a>
        </li>
      </ul>
    </aside>
  <?php endif; ?>

  <main id="main" class="bg-light">