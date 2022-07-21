<?php 

/*
Template Name: about.php
*/

?>

<?php get_header(); ?>

<main>
    <div class="">
    <div>
            <img src="<?php echo (get_theme_mod('img_add_block1', 'http://localhost/dev/wordpress/wp-content/uploads/2022/07/Mask-1.png'));?>" alt="Erreur photo" class="img" >
        </div>
        <div class="box1">
            <h4><?php echo get_theme_mod( 'text_para2_block1', 'About Us'); ?></h4>
            <p><?php echo get_theme_mod( 'text_para2_block2', 'Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.'); ?></p>
        </div>
        <div>
            <img src="<?php echo (get_theme_mod('img_add_block2', 'http://localhost/dev/wordpress/wp-content/uploads/2022/07/Mask1-2.png'));?>" alt="Erreur photo" class="img1">
        </div>
        <div class="box">
            
            <div>
                <h4>Who are we?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu convallis elit, at convallis magna.</p>
            </div>
            <div>
                <h4>Our vision</h4>
                <p> Nullam faucibus interdum massa. Duis eget leo mattis, pulvinar nisi et, consequat lectus. Suspendisse commodo magna orci, id luctus risus porta pharetra. Fusce vehicula aliquet urna non ultricies.</p>
            </div>
            <div>
                <h4>Our mission</h4>
                <p>Vivamus et viverra neque, ut pharetra ipsum. Aliquam eget consequat libero, quis cursus tortor. Aliquam suscipit eros sit amet velit malesuada dapibus. Fusce in vehicula tellus. Donec quis lorem ut magna tincidunt egestas. </p>
            </div>
        </div>

        <?php get_footer() ?>


        
    </div>
</main>