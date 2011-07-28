<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '&laquo;', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div id="header">
	<div class="sleeve">
		<div id="masthead">
				<div id="branding">
					<table width="820px" border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td colspan="4">
								<div id="p7TBM">
									<div id="p7TBMroot">
									<div id="p7TBMrootbox">
										<ul class="p7TBMtext" style="padding-left:10px; background=http://watermarkcommunities.com/includes/TopNavs/p7tbm/img/bkgnd_master.gif; display:inline-block; line-height:10pt">
											<li><a href="http://www.watermarkcommunities.com" id="p7TBMt01">Watermark Home</a></li>
											<li><a href="http://www.watermarkcommunities.com/communities/" id="p7TBMt02">Find Your Watermark Community</a></li>
											<li><a href="http://www.watermarkcommunities.com/wrc/" id="p7TBMt03">About Watermark</a></li>
											<br />
										</ul>
									</div>
								</div>
								<!--[if lte IE 6]>
								<style>#p7TBM div, #p7TBM ul, #p7TBM a {height:1%;}</style>
								<![endif]-->
							</div>
						</td>
					</tr>
	  				<tr></tr>
				</tbody>
				</table>
			</div><!-- #branding -->
		</div>

		<span class="thrive-logo"></span>
		<h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<?php if ( get_bloginfo( 'description' ) ) : ?>
			<small><?php bloginfo( 'description' ); ?></small>
		<?php endif; ?>
		<a class="secondary" href="<?php echo home_url( '/' ); ?>"></a>
	</div>

</div>

<div id="wrapper">
	<?php get_sidebar(); ?>