<?php
// $Id$
/**
 * @file
 * Output for main HTML page content.
 */
?>

<div id="container">
  <header id="container_header" class="container-16 section section-header clearfix" role="banner">
    <?php if ($site_name || $site_slogan || $logo): ?>
      <hgroup class="column grid-16">
        <?php if ($logo): ?>
          <a title="<?php print t('Home'); ?>" id="logo" rel="home" href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
        <?php endif; ?>
        <?php if ($site_name): ?>
          <h1 class="site-name"><a title="iDigInfo <?php print t('Home'); ?>" rel="home" href="<?php print $front_page; ?>"><img src="/sites/idiginfo.org/themes/idiginfo/images/idiginfo_longtext.png" alt="<?php print $site_name; ?>" border="0" /></a></h1>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </hgroup>
    <?php endif; ?>
    <?php print render($page['header']); ?>
    <?php print render($page['navigation']); ?>
  </header>

  <nav id='main_nav' class='container-16'>
    <?php print render($page['navigation_tabs']); ?>
  </nav>

  <?php print render($page['highlighted']); ?>
  <div id="outermain">
    <div id="main" class="container-16 section section-main clearfix" role="main">
    
    <?php print render($page['staff_nav']); ?>
    
    <div id="content">
        <div class="inner">
        <?php print $messages; ?>
        <?php if ($tabs = render($tabs)): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <div id="main-content" class="clearfix">
        
        
<!-- ********** Start Slideshow ******** -->
<div class="slideshow-container">
	<div id="content-slideshow" class="clearfix">
		<div class="slideshow">
			
			<!-- the actual images -->
			<ul class="clearfix">
				<li id="main-post-1" onclick="location.href='news/idigbio’s-phase-3-funded';" style="cursor: pointer; background:url(/sites/idiginfo.org/themes/idiginfo/images/funded.jpg) top center no-repeat;" title="iDigBio’s Phase 3 Funded" width="414" height="277"></li>
				<li id="main-post-2" onclick="location.href='news/rapid-pandemic-response-enhancement-digital-data-about-horseshoe-bat-specimens';" style="cursor: pointer; background:url(/sites/idiginfo.org/themes/idiginfo/images/rapid.jpg) top center no-repeat;" title="Rapid Pandemic Response: Enhancement of Digital Data about Horseshoe Bat Specimens" width="414" height="277"></li>
				<li id="main-post-3" onclick="location.href='news/trailblazing-3d-digitization-field';" style="cursor: pointer; background:url(/sites/idiginfo.org/themes/idiginfo/images/3d-digitization.jpg) top center no-repeat;" title="Trailblazing 3D Digitization in the Field" width="414" height="277"></li>
				<li id="main-post-4" onclick="location.href='news/citizen-science-hour-biodiversity-collections-webinar-series';" style="cursor: pointer; background:url(/sites/idiginfo.org/themes/idiginfo/images/webinar.jpg) top center no-repeat;" title="Citizen Science Hour for Biodiversity Collections Webinar Series" width="414" height="277"></li>
			</ul>

		</div>
		<!-- the text items -->
		<ul class="slideshow-nav">
			<li id="post-1" class="on class="clearfix"><a href="#main-post-1" title="iDigBio’s Phase 3 Funded">iDigBio’s Phase 3 Funded</a></li>
			<li id="post-2" class="clearfix"><a href="#main-post-2" title="Rapid Pandemic Response: Enhancement of Digital Data about Horseshoe Bat Specimens">Rapid Pandemic Response: Enhancement of Digital Data about Horseshoe Bat Specimens</a></li>
			<li id="post-3" clearfix"><a href="#main-post-3" title="Trailblazing 3D Digitization in the Field">Trailblazing 3D Digitization in the Field</a></li>
			<li id="post-4" class="clearfix"><a href="#main-post-4" title="Citizen Science Hour for Biodiversity Collections Webinar Series">Citizen Science Hour for Biodiversity Collections Webinar Series</a></li>
		</ul>
		
		<div class="slideme"></div>

	</div>

</div>
<!-- ########### End Slideshow ############ -->
        
        
        <div style="width: 278px; margin-left: 640px; padding: 0;" >
        <?php print render($page['content']); ?>
    	</div>
	</div>
      <?php print $feed_icons; ?>
    </div>
    </div>
    <?php if ($sidebar_first = render($page['sidebar_first'])): ?>
      <div id="sidebar-first" class="sidebar <?php print $sidebar_first_grid_classes; ?>">
        <?php print $sidebar_first; ?>
      </div>
    <?php endif; ?>
    <?php if ($sidebar_second = render($page['sidebar_second'])): ?>
      <div id="sidebar-second" class="sidebar <?php print $sidebar_second_grid_classes; ?>">
        <?php print $sidebar_second; ?>
      </div>
    <?php endif; ?>
  </div>
  </div> <!-- End outermain -->
  <div id="subsection">
  	<div id="columns">
  	<div id="col1" class="col start">
 		<?php print render($page['home_one']); ?>
  	</div>
  	<div id="col2" class="col">
  		<?php print render($page['home_two']); ?>
  	</div>
  	<div id="col3" class="col end">
  		<?php print render($page['home_three']); ?>
  	</div>
  	<br clear="all" />
  	</div>
  	
  </div>
  <?php print $breadcrumb; ?>
  <footer id="footer" class="section section-footer clearfix" role="footer">
    <div class="container-16">
      <?php print render($page['footer']); ?>
      <?php print render($page['copyright']); ?>
    </div>
  </footer>
</div>
<?php if ($collapsible = render($page['collapsible'])): ?>
  <section id="section-collapsible" class="section section-collapsible clearfix">
    <h2 class="collapsible-toggle"><a href="#"><?php print t('Toggle collapsible region'); ?></a></h2>
    <?php print $collapsible; ?>
  </section>
<?php endif; ?>

