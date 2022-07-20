<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body style="background-color: <?php echo (get_theme_mod('header_background'));?> !important">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <img src="http://localhost/dev/wordpress/wp-content/uploads/2022/07/ESGI.png" alt="Erreur photo">
    </nav>

    <nav role="navigation">
    <div id="menuToggle">
        <input type="checkbox" />
        <img src="http://localhost/dev/wordpress/wp-content/uploads/2022/07/Open_menu.png" alt="Erreur photo" >
        <ul id="menu">
            <?php wp_nav_menu( ); ?>
        </ul>
    </div>
    </nav>