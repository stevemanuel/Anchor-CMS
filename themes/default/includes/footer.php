        <div class="wrap">
            <footer id="bottom">
                <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>
                    
                <ul role="navigation">
                    <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
                    <?php if(twitter_account()): ?>
                    <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
                    <?php endif; ?>
                    
                    <?php if(user_authed()): ?>
                    <li><a href="<?php echo admin_url(); ?>" title="Administer your site!">Admin area</a></li>
                    <?php endif; ?>
                   
                    <li><a href="/" title="Return to my website.">Home</a></li>
                </ul>
                
                <a id="attribution" title="Powered by Anchor CMS" href="//anchorcms.com">Powered by Anchor CMS</a>
            </footer>
        </div>
    </body>
</html>
