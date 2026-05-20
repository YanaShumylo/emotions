<section class="gallery">
    <div class="container">

        <?php if (have_rows('gallery_list')): ?>

            <div class="swiper gallerySlider">

                <div class="swiper-wrapper">

                    <?php while (have_rows('gallery_list')): the_row();
                        $img = get_sub_field('gallery_img');
                        $title = get_sub_field('gallery_title');
                        $desc = get_sub_field('gallery_description');
                    ?>

                        <div class="swiper-slide">
                            <div class="gallery-card">

                                <?php if (!empty($img)): ?>
                                    <div class="gallery-card-img">
                                        <?php echo wp_get_attachment_image(
                                            $img,
                                            'gallery-card',
                                            false,
                                            [
                                                'class' => 'gallery-image',
                                                'loading' => 'lazy',
                                                'decoding' => 'async',
                                                'alt' => $img['alt'] ?? $title
                                            ]
                                        );
                                        ?>
                                    </div>
                                <?php endif; ?>

                                <div class="gallery-card-content">

                                    <?php if ($title): ?>
                                        <h4 class="gallery-card-title">
                                            <?php echo esc_html($title); ?>
                                        </h4>
                                    <?php endif; ?>

                                    <?php if ($desc): ?>
                                        <p class="gallery-card-desc">
                                            <?php echo esc_html($desc); ?>
                                        </p>
                                    <?php endif; ?>

                                </div>

                            </div>
                        </div>

                    <?php endwhile; ?>

                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>

            </div>

        <?php endif; ?>

    </div>
</section>