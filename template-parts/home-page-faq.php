<?php
$faq_content = get_field('faq_content') ?? 'Content here...';
$faq_description = get_field('faq_description') ?? 'Description here...';
?>

<section class="faq">

    <div class="container">

        <h3 class="faq-content">
            <?php echo esc_html($faq_content); ?>
        </h3>

        <?php if (have_rows('faq_repeater')): ?>

            <div class="faq-repeater">

                <?php while (have_rows('faq_repeater')): the_row();

                    $question = get_sub_field('faq_question');
                    $answer = get_sub_field('faq_answer');

                ?>

                    <div class="faq-item">

                        <button class="faq-question">
                            <?php echo esc_html($question); ?>
                        </button>

                        <div class="faq-answer">
                            <p>
                                <?php echo esc_html($answer); ?>
                            </p>
                        </div>

                    </div>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

        <p class="faq-description">
            <?php echo esc_html($faq_description); ?>
        </p>

    </div>

</section>