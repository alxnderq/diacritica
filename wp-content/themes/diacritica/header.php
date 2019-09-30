<!doctype html>
<html lang="<?php bloginfo( 'language' ) ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php
        $entry = get_query_var('ENTRY');
        load_assets(['main', $entry]);
        wp_head();
    ?>
</head>
<body>
<header class="header">
    <nav>
        <div class="x-container x-flex">
            <div class="left">
                <?php if (!empty(get_field('logo','options'))){ ?>
                <img src="<?php the_field('logo','options'); ?>" alt="Diacritica">
                <?php } else { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="113.702" height="20.064" viewBox="0 0 113.702 20.064">
                      <g id="DIACTRÍTICA" transform="translate(-617.04 140.664)">
                        <g id="Grupo_165" data-name="Grupo 165">
                          <path id="Trazado_4" data-name="Trazado 4" d="M617.72-134.863l-.68-1.14h3.581c4.881,0,7.9,3.3,7.9,7.482,0,4.081-3.02,7.521-7.9,7.521h-2.9Zm2.9,12.383a5.847,5.847,0,0,0,6.161-6.041,5.759,5.759,0,0,0-6.161-5.982h-1.24v12.023Z" fill="#fff"/>
                          <path id="Trazado_5" data-name="Trazado 5" d="M632.92-121h-1.66v-15h1.66Z" fill="#fff"/>
                          <path id="Trazado_6" data-name="Trazado 6" d="M646.442-123.82h-8.4l-1.3,2.82h-1.8l7.341-15.4,7.342,15.4h-1.88Zm-4.2-9.122-3.52,7.641h7.041Z" fill="#fff"/>
                          <path id="Trazado_7" data-name="Trazado 7" d="M650.04-128.481a7.932,7.932,0,0,1,8-7.922,8.481,8.481,0,0,1,4.2,1.1v1.76a7.614,7.614,0,0,0-4.221-1.26,6.193,6.193,0,0,0-6.221,6.341,6.029,6.029,0,0,0,6.282,6.281,8.079,8.079,0,0,0,4.16-1.16v1.7a8.46,8.46,0,0,1-4.16,1.041A7.637,7.637,0,0,1,650.04-128.481Z" fill="#fff"/>
                          <path id="Trazado_8" data-name="Trazado 8" d="M671.261-136v1.441H668.44V-121h-1.66v-13.562h-2.821V-136Z" fill="#fff"/>
                          <path id="Trazado_9" data-name="Trazado 9" d="M677.58-125.221a7.24,7.24,0,0,1-2.28.38V-121h-1.661v-13.863l-.68-1.14H675.3c3.48,0,6.041,2.141,6.041,5.5a5.405,5.405,0,0,1-2.32,4.541l2.66,4.961h-1.86ZM675.3-134.5v8.142h.32a3.924,3.924,0,0,0,4.021-4.081,3.966,3.966,0,0,0-4.021-4.061Z" fill="#fff"/>
                          <path id="Trazado_10" data-name="Trazado 10" d="M686.04-121h-1.661v-15h1.661Zm-.12-16.464h-1.441l1.741-3.2h1.9Z" fill="#fff"/>
                          <path id="Trazado_11" data-name="Trazado 11" d="M695.721-136v1.441H692.9V-121h-1.66v-13.562h-2.821V-136Z" fill="#fff"/>
                          <path id="Trazado_12" data-name="Trazado 12" d="M699.76-121H698.1v-15h1.661Z" fill="#fff"/>
                          <path id="Trazado_13" data-name="Trazado 13" d="M702.5-128.481a7.931,7.931,0,0,1,8-7.922,8.481,8.481,0,0,1,4.2,1.1v1.76a7.613,7.613,0,0,0-4.221-1.26,6.193,6.193,0,0,0-6.221,6.341,6.029,6.029,0,0,0,6.282,6.281,8.079,8.079,0,0,0,4.16-1.16v1.7a8.46,8.46,0,0,1-4.16,1.041A7.637,7.637,0,0,1,702.5-128.481Z" fill="#fff"/>
                          <path id="Trazado_14" data-name="Trazado 14" d="M727.561-123.82h-8.4l-1.3,2.82h-1.8l7.341-15.4,7.342,15.4h-1.881Zm-4.2-9.122-3.521,7.641h7.042Z" fill="#fff"/>
                        </g>
                      </g>
                    </svg>
                <?php } ?>
            </div>
            <div class="right">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                <div class="translate">
                    <ul>
                        <li><a>EN</a></li>
                        <li><a>ES</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

