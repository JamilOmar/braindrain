<div id="mainWrapper">

    <!-- Header. -->
    <div id="wrapper">

    <!-- Header. -->
    -->
    
  <!-- Content. -->
    <div id="content">
    
    <?php if ($is_front) {
            print $messages;
            if ($tabs): print render($tabs); endif; 
            print render($tabs2);
			print render($page['content']);
			print render($page['help']);
         } else { ?>
            <div id="colLeft">
            
				<?php print $breadcrumb; ?>
                
				<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                <a id="main-content"></a>

                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                <h1 class="title"><?php print $title ?></h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                
                <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
                
                <?php print render($tabs2); ?>
                
                <?php print $messages; ?>
                
                <?php print render($page['help']); ?>
                
                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                
                <div class="clearfix">
                <?php print render($page['content']); ?>
                </div>
                
                <?php print $feed_icons ?>
                
            </div><!-- EOF: #main -->
            
            <div id="colRight">

            <?php print render($page['sidebar_first']); ?>

            </div><!-- EOF: #sidebar -->
         <?php }  ?>

    </div><!-- EOF: #content -->
    
</div><!-- EOF: #wrapper -->
    
<!-- Footer -->    
<div id="footer">
        
    <div id="footerInner">
    
        <div class="blockFooter">
            <?php print render($page['footer_first']); ?>
        </div>
        
        <div class="blockFooter">
            <?php print render($page['footer_second']); ?>
        </div>
        
        <div class="blockFooter">
            <?php print render($page['footer_third']); ?>
        </div>
        
        <div class="blockFooter">
            <?php print render($page['footer_fourth']); ?>
        </div>
        
    <div id="secondary-links">
    <?php if (isset($secondary_menu)) { ?><?php print theme('links', $secondary_menu, array('class' => 'links', 'id' => 'subnavlist')); ?><?php } ?>
    </div>
        
    <div id="footer-message">
        <?php print render($page['footer']); ?>
        Ported to Drupal for the Open Source Community by <a href="http://www.drupalizing.com">Drupalizing</a>, a Project of <a href="http://www.morethanthemes.com">More than (just) Themes</a>
        <div class="footer-logos clearfix">
        <a href="http://www.smashingmagazine.com/2010/12/09/journalcrunch-wordpress-3-0-theme-free-theme-for-portfolios-and-magazines/" class="smashing">SmashingMagazine</a>
        <a href="http://www.site5.com/" class="site5" title="Site5">Site5</a>
        <a href="http://www.drupalizing.com" class="drupalizing" title="Drupalizing">Drupalizing</a>
        <a href="http://www.morethanthemes.com" class="mtt" title="More than (just) Themes">More than (just) Themes</a>
        </div>
    </div>
    
    </div>
    
    </div>

</div><!-- EOF: #footer -->

</div>