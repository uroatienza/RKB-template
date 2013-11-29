// get template configuration
include($this['path']->path('layouts:template.config.php'));
	
?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>">
<head>
<?php echo $this['template']->render('head'); ?>
</head>

<body id="page" class="page <?php echo $this['config']->get('body_classes'); ?>" data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>

	<?php if ($this['modules']->count('absolute')) : ?>
	<div id="absolute">
		<?php echo $this['modules']->render('absolute'); ?>
	</div>
	<?php endif; ?>

	<?php if ($this['modules']->count('logo + menu + search')) : ?>	
	<div id="block-header">
		<div class="block-header wrapper <?php if($this['config']->get('block-header')) echo 'max-width'.$this['config']->get('block-header'); ?>">
				
			<header id="header" class="clearfix">
				<?php if ($this['modules']->count('logo')) : ?>	
				<a id="logo" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['modules']->render('logo'); ?></a>
                
                <?php if ($this['modules']->count('countryMenu')) : ?>
                <div id="countryMenu"><?php echo $this['modules']->render('countryMenu'); ?></div><?php endif; ?>
                <?php endif; ?>                
                
                
				<?php if ($this['modules']->count('menu + search')) : ?>
				<div id="menubar">
					
                    <?php if ($this['modules']->count('irrilogo')) : ?>
					<nav id="irrilogo"><?php echo $this['modules']->render('irrilogo'); ?></nav>
					<?php endif; ?>
                    
					<?php if ($this['modules']->count('menu')) : ?>
					<nav id="menu"><?php echo $this['modules']->render('menu'); ?></nav>
					<?php endif; ?>

					<?php if ($this['modules']->count('search')) : ?>
					<div id="search"><?php echo $this['modules']->render('search'); ?></div>
					<?php endif; ?>
					
				</div>
				<?php endif; ?>

				<?php if ($this['modules']->count('banner')) : ?>
				<div id="banner"><?php echo $this['modules']->render('banner'); ?></div>
				<?php endif; ?>

			</header>

		</div>
	</div>
	<?php endif; ?>

	<?php if ($this['modules']->count('top-a')) : ?>	
	<div id="block-top-a" class="<?php echo $this['config']->get('top-a-bg'); ?>">
		<div class="block-top-a wrapper <?php if($this['config']->get('block-top-a')) echo 'max-width'.$this['config']->get('block-top-a'); ?>">
			
			<section id="top-a" class="grid-block"><?php echo $this['modules']->render('top-a', array('layout'=>$this['config']->get('top-a'))); ?></section>
			

		</div>
	</div>
	<?php endif; ?>

	<?php if ($this['modules']->count('top-b')) : ?>
	<div id="block-top-b" class="<?php echo $this['config']->get('top-b-bg'); ?>">
		<div class="block-top-b wrapper <?php if($this['config']->get('block-top-b')) echo 'max-width'.$this['config']->get('block-top-b'); ?>">
		
			<section id="top-b" class="grid-block"><?php echo $this['modules']->render('top-b', array('layout'=>$this['config']->get('top-b'))); ?></section>
			

		</div>
	</div>
	<?php endif; ?>
				
	<?php if ($this['modules']->count('innertop + innerbottom + sidebar-a + sidebar-b') || $this['config']->get('system_output')) : ?>			
	<div id="block-main" class="<?php echo $this['config']->get('main-bg'); ?>">	
		<div class="block-main wrapper <?php if($this['config']->get('block-main')) echo 'max-width'.$this['config']->get('block-main'); ?>">
			
			<div id="main" class="grid-block">

				<div id="maininner" class="grid-box">

					<?php if ($this['modules']->count('innertop')) : ?>
					<section id="innertop" class="grid-block"><?php echo $this['modules']->render('innertop', array('layout'=>$this['config']->get('innertop'))); ?></section>
					<?php endif; ?>

					<?php if ($this['modules']->count('breadcrumbs')) : ?>
					<section id="breadcrumbs"><?php echo $this['modules']->render('breadcrumbs'); ?></section>
					<?php endif; ?>

					<?php if ($this['config']->get('system_output')) : ?>
					<section id="content" class="grid-block"><?php echo $this['template']->render('content'); ?></section>
					<?php endif; ?>

					<?php if ($this['modules']->count('innerbottom')) : ?>
					<section id="innerbottom" class="grid-block"><?php echo $this['modules']->render('innerbottom', array('layout'=>$this['config']->get('innerbottom'))); ?></section>
					<?php endif; ?>

				</div>
				<!-- maininner end -->
				
				<?php if ($this['modules']->count('sidebar-a')) : ?>
				<aside id="sidebar-a" class="grid-box"><?php echo $this['modules']->render('sidebar-a', array('layout'=>'stack')); ?></aside>
				<?php endif; ?>
				
				<?php if ($this['modules']->count('sidebar-b')) : ?>
				<aside id="sidebar-b" class="grid-box"><?php echo $this['modules']->render('sidebar-b', array('layout'=>'stack')); ?></aside>
				<?php endif; ?>

			</div>
			
			<!-- main end -->

		</div>
	</div>
	<?php endif; ?>

	<?php if ($this['modules']->count('bottom-a')) : ?>
	<div id="block-bottom-a" class="<?php echo $this['config']->get('bottom-a-bg'); ?>">
		<div class="block-bottom-a wrapper <?php if($this['config']->get('block-bottom-a')) echo 'max-width'.$this['config']->get('block-bottom-a'); ?>">
			
			
			<section id="bottom-a" class="grid-block"><?php echo $this['modules']->render('bottom-a', array('layout'=>$this['config']->get('bottom-a'))); ?></section>
			

		</div>
	</div>
	<?php endif; ?>

	<?php if ($this['modules']->count('bottom-b')) : ?>
	<div id="block-bottom-b" class="<?php echo $this['config']->get('bottom-b-bg'); ?>">
		<div class="block-bottom-b wrapper <?php if($this['config']->get('block-bottom-b')) echo 'max-width'.$this['config']->get('block-bottom-b'); ?>">
		
			<section id="bottom-b" class="grid-block"><?php echo $this['modules']->render('bottom-b', array('layout'=>$this['config']->get('bottom-b'))); ?></section>
			
		</div>
	</div>
	<?php endif; ?>

	<?php if ($this['modules']->count('bottom-c')) : ?>
	<div id="block-bottom-c" class="<?php echo $this['config']->get('bottom-c-bg'); ?>">
		<div class="block-bottom-c wrapper <?php if($this['config']->get('block-bottom-c')) echo 'max-width'.$this['config']->get('block-bottom-c'); ?>">
			
			<section id="bottom-c" class="grid-block"><?php echo $this['modules']->render('bottom-c', array('layout'=>$this['config']->get('bottom-c'))); ?></section>
			
		</div>
	</div>
	<?php endif; ?>

	<?php if ($this['modules']->count('footer + debug') || $this['config']->get('warp_branding') || $this['config']->get('totop_scroller')) : ?>
	<div id="block-footer" class="<?php echo $this['config']->get('footer-bg'); ?>">
		<div class="block-footer wrapper <?php if($this['config']->get('block-footer')) echo 'max-width'.$this['config']->get('block-footer'); ?>">
		
			<footer id="footer">

				<?php if ($this['config']->get('totop_scroller')) : ?>
				<a id="totop-scroller" href="#page"></a>
				<?php endif; ?>

				<?php
					echo $this['modules']->render('footer');
					$this->output('warp_branding');
					echo $this['modules']->render('debug');
				?>

			</footer>
			

		</div>
	</div>
	<?php endif; ?>
	
	<?php echo $this->render('footer'); ?>
	
</body>
</html>
