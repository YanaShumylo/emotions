<?php
$hero_title = get_field('hero_title') ?? 'Title here...';
$hero_description = get_field('hero_description') ?? 'Description here...';
$hero_description_button = get_field('description_button') ?? 'Description here...';
?>

<section class="hero">
    <div class="container hero-inner">
        <div class="hero-content">
            <h1 class="title">
                <?php echo esc_html($hero_title); ?>
            </h1>
            <p>
                <?php echo esc_html($hero_description); ?>
            </p>
        </div>
        <div class="hero-actions">
            <?php if ($hero_description_button): ?>
                <p class="text-question">
                    <?php echo esc_html($hero_description_button); ?>
                </p>
            <?php endif; ?>

            <?php if (have_rows('theme_switcher')): ?>
                <div class="theme-switcher">
                    <?php while (have_rows('theme_switcher')): the_row(); ?>
                        <?php
                        $theme_key  = get_sub_field('theme_key');
                        $theme_name = get_sub_field('theme_name');
                        $icon       = get_sub_field('theme_icon');
                        ?>
                        <button
                            class="button"
                            data-theme="<?php echo esc_attr($theme_key); ?>">
                            <?php if ($icon): ?>
                                <img
                                    src="<?php echo esc_url($icon['url']); ?>"
                                    alt="<?php echo esc_attr($theme_name); ?>">
                            <?php endif; ?>
                            <?php echo esc_html($theme_name); ?>
                        </button>
                    <?php endwhile; ?>
                </div>

            <?php endif; ?>
        </div>
    </div>
</section>