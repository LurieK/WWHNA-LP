<footer class='footer'>
    <h1>Contact</h1>
    <div class="contact-info"> 
     <!-- Social Media Links -->
    <?php foreach (array('instagram', 'facebook', 'twitter', 'linkedin') as $social): ?>
        <?php $url = get_theme_mod("contact_{$social}_url", ''); ?>
        <?php if ($url): ?>
            <a href="<?php echo esc_url($url); ?>">
                <img class='social-icon' src="<?php echo esc_url(get_theme_mod("contact_{$social}_image", '')); ?>" alt="<?php echo esc_attr(ucfirst($social)); ?>">
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
    <p><a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email')); ?>">
    <?php echo esc_html(get_theme_mod('contact_email_text', 'Email me')); ?>
</a></p>
    <p> <a href="<?php echo esc_url(get_theme_mod('contact_website')); ?>">
    <?php echo esc_html(get_theme_mod('contact_website_text', 'Visit my website')); ?>
</a></p>
    
   </div>

   <div class=copyright>
    <p>© 2023 Jasmin Mittag</p>
    <p> Website by Lurie Kimmerle @ LurieKimmerleDev.com</p>
   </div>
   

</footer>


<?php wp_footer(); ?>
</body>
</html>