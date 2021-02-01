<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */
get_header();?>
<style>

header {
    margin-top: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid #b5b5b5;
}

.logo-row {
    width: 250px;
    margin: 0 auto;
}

.logo {
    width: 100%;
    height: auto;
    text-align: center;
    padding: 30px 0;
}
.site-branding.stackabl-head {
    width: 100%;
    margin: 0 auto;
    text-align: center;
}
header#masthead {
    display: none;
}
.site-main > * {
    margin-top: 35px;
    margin-bottom: 40px;
}
p.site-description {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
}
body {
    background-color: #fff;
}
@media only screen and (min-width: 822px){
	.site-footer > .site-info .powered-by{
    max-width: 800px!important;
	margin: 0 auto!important;
}
}</style>
<div class="logo-headre-stack">
    <div class="row">
      <div class="logo-row">
	  <img src="<?php echo get_theme_file_uri( 'assets/images/logo.png' ); ?>" alt="logo" class="logo">
      </div>
    </div>
  </div>
<div class="site-branding stackabl-head">
	<h1 class="site-title">Welcome to Stackabl demo website</h1>
	<p class="site-description">
	Stackabl is a next generation, virtual development environment (VDE). With this tool you have the freedom to create unlimited websites with just 1-Click. Simply pick your favourite Content Management System (CMS), including WordPress, Joomla, Drupal, or Magento, and click create project. That's it! </p>
	
</div>


<?php
get_footer();
