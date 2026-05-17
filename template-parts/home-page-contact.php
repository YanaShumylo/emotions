<?php
$contact_title = get_field('contact_title') ?: 'Title here...';
$contact_description = get_field('contact_description') ?: 'Description here...';
?>

<section id="contact" class="contact">
    <div class="container">

        <div class="contact-top">
            <h2 class="contact-title"><?php echo esc_html($contact_title); ?></h2>

            <p class="contact-text">
                <?php echo esc_html($contact_description); ?>
            </p>
        </div>

        <div class="form-wrapper">
            <div class="form-card">
            <?php
            echo do_shortcode('[contact-form-7 id="47594af" title="Contact form 1"]');
            ?>
        </div>
    </div>

    </div>
</section>