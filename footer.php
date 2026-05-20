<footer class="footer">
    <div class="container">

        <?php
        $address = get_field('footer_address', 'option');
        $phone = get_field('footer_phone', 'option');
        $email = get_field('footer_email', 'option');
        $map = get_field('footer_map', 'option');

        $youtube = get_field('footer_youtube', 'option');
        $instagram = get_field('footer_instagram', 'option');
        $telegram = get_field('footer_telegram', 'option');
        ?>

        <div class="footer-content">

            <div class="footer-contact">

                <?php if ($address): ?>
                    <a href="<?php echo esc_url($map); ?>" target="_blank" rel="noopener noreferrer" class="footer-link">

                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 21s-6-5.33-6-11a6 6 0 1 1 12 0c0 5.67-6 11-6 11z"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <circle cx="12" cy="10" r="2.5"
                                stroke="currentColor"
                                stroke-width="2" />
                        </svg>

                        <span><?php echo esc_html($address); ?></span>
                    </a>
                <?php endif; ?>

                <?php if ($phone): ?>
                    <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone); ?>" class="footer-link">

                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2
                            19.79 19.79 0 0 1-8.63-3.07
                            19.5 19.5 0 0 1-6-6
                            19.79 19.79 0 0 1-3.07-8.67
                            A2 2 0 0 1 4.11 2h3
                            a2 2 0 0 1 2 1.72
                            c.12.9.32 1.78.59 2.63
                            a2 2 0 0 1-.45 2.11L8.09 9.91
                            a16 16 0 0 0 6 6l1.45-1.16
                            a2 2 0 0 1 2.11-.45
                            c.85.27 1.73.47 2.63.59
                            A2 2 0 0 1 22 16.92z"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <span><?php echo esc_html($phone); ?></span>
                    </a>
                <?php endif; ?>

                <?php if ($email): ?>
                    <a href="mailto:<?php echo esc_attr($email); ?>" class="footer-link">

                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M4 6H20C21.1 6 22 6.9 22 8V16
            C22 17.1 21.1 18 20 18H4
            C2.9 18 2 17.1 2 16V8
            C2 6.9 2.9 6 4 6Z"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />

                            <path d="M22 8L12 13L2 8"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <span><?php echo esc_html($email); ?></span>
                    </a>
                <?php endif; ?>
            </div>

            <div class="footer-socials">

                <?php if ($youtube): ?>
                    <a aria-label="YouTube" href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener noreferrer" class="social-link">

                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31.4 31.4 0 0 0 0 12a31.4 31.4 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31.4 31.4 0 0 0 24 12a31.4 31.4 0 0 0-.5-5.8zM9.5 15.5v-7l6 3.5-6 3.5z" />
                        </svg>

                    </a>
                <?php endif; ?>

                <?php if ($instagram): ?>
                    <a aria-label="Instagram" href="<?php echo esc_url($instagram); ?>" target="_blank" class="social-link">

                        <svg viewBox="0 0 24 24" fill="none">
                            <rect x="2" y="2" width="20" height="20" rx="5"
                                stroke="currentColor"
                                stroke-width="2" />
                            <circle cx="12" cy="12" r="4"
                                stroke="currentColor"
                                stroke-width="2" />
                            <circle cx="17.5" cy="6.5" r="1"
                                fill="currentColor" />
                        </svg>

                    </a>
                <?php endif; ?>

                <?php if ($telegram): ?>
                    <a aria-label="Telegram" href="<?php echo esc_url($telegram); ?>" target="_blank" rel="noopener noreferrer" class="social-link">

                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22 2L11 13" />
                            <path d="M22 2L15 22L11 13L2 9L22 2Z"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                fill="none" />
                        </svg>

                    </a>
                <?php endif; ?>

            </div>

        </div>
    </div>
</footer>

<div class="global-modal" id="globalModal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="global-modal-overlay" data-modal-close></div>

    <div class="global-modal-content">
        <button class="global-modal-close" data-modal-close>&times;</button>

        <div class="global-modal-body" id="globalModalBody">

        </div>
    </div>
</div>

</body>
<?php wp_footer(); ?>

</html>