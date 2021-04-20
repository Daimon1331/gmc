<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */
?>
<?php get_header(); ?>
<section class="error-main">
    <div class="margin">
        <div class="d-flex flex-column align-items-center">
            <p class="ultra">404</p>
            <h3>«Ищете что-то интересное на нашем сайте?
К сожалению, страница, которую Вы запрашиваете, не
существует…»</h3>
            <div><a class="h4-semibold" href="<?php echo get_option('home'); ?>">вернуться на главную</a></div>
        </div>
    </div>
</section>

<?php //get_footer(); ?>
