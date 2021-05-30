<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Raleway"
    />
    <link rel="stylesheet" href="../../assets/css/gg.css" />
    <link rel="stylesheet" href="../../assets/css/core.css?nocache=true" />
    <link rel="stylesheet" href="../../assets/css/layout.css?nocache=true" />
    <link href="https://css.gg/search.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="../../assets/css/pages/shopping-list.css?nocache=true"
    />
    <script src="../../assets/js/shitty.bundle.js" defer></script>
    <script src="../../assets/js/components.js?nocache=true" defer></script>
    <script src="../../assets/js/layout.js?nocache=true" defer></script>
    <script src="../../assets/js/pages/shopping-list.js?nocache=true" defer></script>
  </head>
  <body>
    <div class="navbar-placeholder">
      <div class="shopnow-btn">SHOP NOW!</div>
    </div>
    <div class="navbar">
      <div class="search-and-logo">
        <div class="search">
          <i class="gg-search"></i>
        </div>
        <div class="logo d-flex align-center">
          <a href=""> LKK Mobile Shop </a>
        </div>
      </div>
      <div class="navbar-items">
        <a href="index.html" class="navbar-item">Homepage</a>
        <a href="#" onclick="OnClickAboutUs()" class="navbar-item">About Us</a>
      </div>
      <div class="shopping-cart">
        <i class="gg-shopping-cart"></i>
      </div>
    </div>
    <div class="background"></div>
    <div class="main-content-wrapper">
      <div class="main-content">
        <div class="d-flex justify-center mt-5">
          <span class="main-content-title"> Products </span>
        </div>
        <div class="product-list"></div>
        <div class="pagination">
          <span class="pagination-item prev disabled">Prev</span>
          <span class="pagination-item active">1</span>
          <span class="pagination-item">2</span>
          <span class="pagination-item disabled">...</span>
          <span class="pagination-item next">Next</span>
        </div>
      </div>
    </div>
    <!-- Site footer -->
    <div class="footer-wrapper">
      <div class="footer-content">
        <div class="about-content">
          <h6>About us</h6>
          <p class="text-justify">LKK Mobile Shop</p>
          <br />
          <p class="text-justify">
            We provide the best flagships and smartphones from top branches in
            the world with the best price.
          </p>
        </div>
        <div class="right-content">
          <div class="categories-content">
            <h6>Categories</h6>
            <li>Iphone</li>
            <li>Samsung</li>
            <li>Xiaomi</li>
            <li>Oppo</li>
            <li>Realme</li>
            <li>Vivo</li>
            <li>Vsmart</li>
          </div>
          <div class="quicklinks-content">
            <h6>Quick links</h6>
            <li>Homepage</li>
            <li>Checkout</li>
          </div>
        </div>
      </div>
    </div>
    <small>Copyright © 2021 LKK Mobile Shop. All Rights Reserved</small>

    <div class="scroll-top-btn">
      <i class="gg-chevron-double-up"></i>
    </div>
    <div class="search-sidebar-wrapper modal-wrapper">
      <div class="modal-backdrop"></div>
      <div class="search-sidebar modal">
        <div class="modal-body">{{body}}</div>
      </div>
    </div>

    <div class="cart-sidebar-wrapper modal-wrapper">
      <div class="modal-backdrop"></div>
      <div class="cart-sidebar modal">
        <div class="modal-body">{{body}}</div>
      </div>
    </div>

    <div class="confirm-modal-wrapper modal-wrapper">
      <div class="modal-backdrop"></div>
      <div class="confirm-modal modal">
        <div class="modal-header">
          <span class="modal-title">{{title | uppercase}}</span>
          <span class="close">
            <i class="gg-close"></i>
          </span>
        </div>
        <div class="modal-body">{{body}}</div>
        <div class="modal-footer">{{footer}}</div>
      </div>
    </div>
  </body>
</html>
