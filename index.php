<?php
get_header();
$const = require(get_template_directory().'/config/const.php');
?>

<section class="contet-layout-o layout-size-max">

</section>
<section class="content-layout-o layout-size-max <?php if(get_option('header_type')===$const['header_type']['background']) : ?>theme_back_ground height_max <?php endif; ?>top-section">
    <nav class="layout-size-o header-navigation <?php echo get_navigation_class(get_option('nav_type'),$const['nav_type']); ?>">
        <div class="header_logo horizontal-logo nav-item <?php echo get_navigation_class(get_option('nav_type'),$const['nav_type']); ?>">
            <img src="<?php echo esc_url(get_theme_mod('set_logo')); ?>" />
        </div>
        <?php if(get_option('nav_type')!==$const['nav_type']['none']) : ?>
        <div class="navigation-wrapper <?php echo get_navigation_class(get_option('nav_type'),$const['nav_type']); ?>">
            <?php foreach(get_navigation_data('tempest_header_navi') as $key => $item) : ?>
                <div class="nav-item on-sub-menu">
                    <a class="link-main" href="#">
                        <span class="nav-sub-title <?php echo get_header_class(get_option('header_type'),$const['header_type']); ?>"><?php echo $item['parent'] ?></span>
                        <div class="nav-item-info <?php echo get_header_class(get_option('header_type'),$const['header_type']); ?>"><?php echo mb_substr($item['description'],0,15) ?></div>
                    </a>
                    <?php if(array_key_exists('children',$item)) :?>
                    <ul class="theme-sub-menu">
                        <?php foreach($item['children'] as $children) : ?>
                            <li class="sub-menu-item"><a href="#"><?php echo $children['title']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </nav>
</section>
<section class="contents even-section">

</section>
<section class="contents odd-section">
    aaaaaa
</section>
