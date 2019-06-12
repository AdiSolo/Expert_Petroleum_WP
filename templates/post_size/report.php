<li>
    <div class="report">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        <h5><?php the_title(); ?></h5>
        <small class="file"><?php echo strtoupper(get_field('upload_report')['type']); ?>/<?php echo formatBytes(get_field('upload_report')['filesize'], 0); ?></small>
        <a href="<?php echo get_field('upload_report')['url']; ?>" class="download" download>↓</a>
    </div>
</li>
