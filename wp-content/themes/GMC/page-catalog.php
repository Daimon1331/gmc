<?php
/*
Template Name: Catalog
*/
?>
<?php get_header(); ?>
<section class="breadcrumber">
    <div class="margin">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex">
                <li class="d-flex align-items-center breadcrumb-item"><a class="h5-min" href="<?php echo get_option('home'); ?>/">Главная</a></li>
                <li class="d-flex align-items-center breadcrumb-item active h5-min" aria-current="page">Каталог</li>
            </ol>
        </nav>
    </div>
</section>
<?php get_template_part( 'catalog' );  ?>
<?php get_footer(); ?>
