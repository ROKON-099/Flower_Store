<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class('pt-5'); ?>>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm fixed-top py-3">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold fs-4" href="<?php echo home_url('/'); ?>">
            FloBloom
        </a>

        <!-- Toggle -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="mainNavbar">

            <!-- Center Menu -->
            <ul class="navbar-nav mx-auto text-center gap-lg-3">

                <li class="nav-item">
                    <a class="nav-link fw-medium" href="<?php echo home_url('/'); ?>">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-medium" href="<?php echo home_url('/all-items'); ?>">All Item</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-medium" href="<?php echo home_url('/about-us'); ?>">About Us</a>
                </li>

            </ul>

            <!-- Right Side -->
            <div class="d-flex align-items-center justify-content-center justify-content-lg-end gap-2 mt-3 mt-lg-0">

                <a href="<?php echo home_url(); ?>?s=" class="btn btn-light rounded-circle">
                    <i class="bi bi-search"></i>
                </a>

                <a href="<?php echo home_url(); ?>" class="btn btn-light rounded-circle position-relative">
                    <i class="bi bi-cart3"></i>

                    <!-- Cart Badge -->
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        0
                    </span>
                </a>

                <a href="#" class="btn btn-light rounded-circle">
                    <i class="bi bi-person"></i>
                </a>

            </div>

        </div>
    </div>
</nav>



</body>
</html>