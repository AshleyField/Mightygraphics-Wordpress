<div class="image-container">
    <img src="<?php the_field('main_image'); ?>" alt="">
    <div class="video-overlay">
        <div class="title">
            <h4><?php the_title(); ?></h4>
        </div>
        <div class="link">
            <a href="<?php the_field('video_url');?>" target="_blank"><img src="<?php echo get_theme_file_uri('images/play-icon.png') ?>" alt=""></a>
        </div>
    </div>
</div>