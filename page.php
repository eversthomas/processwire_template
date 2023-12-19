<?php namespace ProcessWire;

// Optional main output file, called after rendering page’s template file. 
// This is defined by $config->appendTemplateFile in /site/config.php, and
// is typically used to define and output markup common among most pages.
	
/** @var Page $page */
/** @var Pages $pages */
/** @var Config $config */
	
include('template-parts/_head.php'); ?>

        <!-- if page is homepage -> load different header -->
        <?php // if ($page->id == 1 ) : ?>
        	<?php // include('template-parts/header-home.php'); ?>
        <?php // else: ?>
        	<?php // include('template-parts/header.php'); ?>
        <?php //  endif; ?>
        
        <?php include('template-parts/header-home.php'); ?>

	    <main>
	        <article>
	            <h2><?php echo $page->title; ?></h2>
	            <p><?php echo $page->body; ?></p>
	        </article>
	    </main>
	    
	    <?php include('template-parts/sidebar.php'); ?>
	    
<?php include('template-parts/_footer.php'); ?>