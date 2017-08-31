<?php
/*
  Template Name: Pequeñas comunidades cristianas
  Template Post Type: post, page, product
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 con">
        <div class="titulo">
          <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
        </div>
        <div class="interiores-comunidad">
          <?php get_template_part( 'template/comunidad','contenido') ?>
        </div>
      </div><!-- finaliza el cuadro principal -->
      <?php // get_template_part( 'template/comunidad','sidebar') ?>
      <div class="col-md-12 con">
        <?php get_template_part( 'template/comunidad','comunidades') ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();  ?>
