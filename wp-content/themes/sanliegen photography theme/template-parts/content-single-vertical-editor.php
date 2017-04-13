<?php
/*

@package sanliegen photo template
-- single vertical editor
*/
$editor = get_sub_field( "layout_single_content_vertical_editor_text" );
?>

<?php if( $editor ) :?>
  <article class="vertical__widget__article">
    <?php echo $editor; ?>
  </article>
<?php endif; ?>
