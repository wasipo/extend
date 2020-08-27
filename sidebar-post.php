
<section class="contents post type-list">

<?php

if($tempest_post_data->have_posts()) :
        while($tempest_post_data->have_posts()) :
            $tempest_post_data->the_post();
?>
<div class="list_block">

    <div class="thumbnail">

    </div>
    <h2><?php echo get_the_title(); ?></h2>



</div>

<?php endwhile;
else : ?>

<?php endif; ?>

</section>