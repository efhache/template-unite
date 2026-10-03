<?php
/**
* Sidebar template
*
* Displays the main sidebar widget area.
*
* @package scout_unite_template
*/
if ( is_active_sidebar( 'main_sidebar' ) ) :
?>
 
<div class="sidebar">
<?php dynamic_sidebar( 'main_sidebar' ); ?>
</div>
 
<?php endif; ?>
