<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>LWTGUIDELINE</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="lwguideline" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css" />
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/bootstrap4/bootstrap.min.css" />
    <link href="<?php echo get_template_directory_uri(); ?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/main_styles.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
</head>

<body>
<header class="header">
    <nav class="navbar">
        <a href="/">
            <div class="logo center">
                <h2>LWTGUIDELINE</h2>
            </div>
        </a>
        
        <ul class="navbar-nav flex-row ml-md-auto d-md-flex main_nav">
            <?php if(current_user_can('author' && 'administrator')): ?>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url(); ?>/create">
                    新規投稿
                </a>
            </li>

            <?php endif; ?>
            <li>
                <?php get_search_form(); ?>
            </li>
        </ul>
    </nav>
</header>
<?php get_template_part('parts-cursor'); ?>
    