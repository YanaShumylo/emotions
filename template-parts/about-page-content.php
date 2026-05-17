<?php
$about_title = get_field('about_title_content') ?? 'Title here...';
$about_description = get_field('about_description_content') ?? 'Description here...';
$about_text = get_field('about_text_content') ?? 'Text here...';
$button_text = get_field('button_modal_text') ?? 'Contact us';
$modal = get_field('about_modal');
$modal_type = get_field('about_modal_type') ?: 'cf7';
?>

<section class="about-content">
    <div class="container about-container">
        <h1 class="about-title-content"> <?php echo esc_html($about_title); ?> </h1>
        <p class="about-description-content">
            <?php echo esc_html($about_description); ?>
        </p>
        <div class="about-text-content">
            <?php echo wp_kses_post($about_text); ?>
        </div>

        <?php if ($modal) : ?>
            <button
                class="about-modal-btn"
                data-modal-open="<?php echo esc_attr($modal_type); ?>">
                <?php echo esc_html($button_text); ?>
            </button>
        <?php endif; ?>
    </div>
</section>

