<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/.../wp-content/themes/chh/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">


      <?php wp_head(); ?>
      
    <title>Document</title>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-success">
          <div class="container">
            <a class="navbar-brand text-warning" href="#">Dive Into Skills</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="justify-content-center text-center collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array(
                  'menu' => 'primary',
                  'theme_location' => 'primary',
                  'container' => 'ul',
                  'menu_class' => 'aling-items-center justify-content-evenly w-100 navbar-nav mb-2 mb-lg-0',
                  'add_li_class' => 'nav-item m-1',
                  'link_class' => 'nav-link text-decoration-none nav-item',
                  'menu_class' => 'menu-horizontal'
                )); 
                
                ?>
                
                <a href="/"><i class="bi bi-search"></i></a>

              </div>
              </div>
            </div>
      </nav>
    </header>