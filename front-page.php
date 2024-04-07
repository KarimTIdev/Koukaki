<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video id="header_video" autoplay loop>
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/studio_koukaki.mp4'; ?> " type="video/mp4">"
            </video>
            <div class="banner__container" data-0="transform: translateY(0px);" data-500="transform: translateY(250px);">
                <img id="logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>
        </section>
        <section id="#story" class="story">
            <h2><span class="titleFade">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            
            <?php get_template_part('templates/slider'); ?>
            <article id="place">
                <div>
                    <h3><span class="titleFade">Le Lieu</span></h3>
                        <img data-500= "left:1100px; opacity:0.5" data-top= "left:800px; opacity:1" class="big_cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?> " alt="Image d'un gros nuage">
                        <img data-500= "left:850px; opacity:0.5" data-top= "left:550px; opacity:1" class="little_cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?> " alt="Image d'un petit nuage">
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio">
            <h2><span class="titleFade">Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        
        <?php get_template_part('templates/oscars'); ?>
    </main>

<?php
get_footer();
