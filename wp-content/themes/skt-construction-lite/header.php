<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package SKT Construction
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>

<body <?php body_class(''); ?> <?php if ( !is_home() || !is_front_page() ) {?>id="innerPage"<?php } ?>>
<div class="header">  
        <div class="header-inner">
                <div class="logo">
                		<?php skt_construction_the_custom_logo(); ?>
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                                <h1><?php bloginfo('name'); ?></h1>
                                <span class="tagline"><?php bloginfo( 'description' ); ?></span>                          
                        </a>
                 </div><!-- logo -->
                 <div class="headerright">                 
                   <?php if ( ! dynamic_sidebar('sidebar-header')): ?>
                       <div class="column-2">
                           <img src="<?php echo get_template_directory_uri(); ?>" alt="" />
                           <div class="clear"></div>
                       </div>
                    <div class="column-1">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/icon-phone.jpg" alt="" />
                    <?php if( '' !== get_theme_mod('head_number')){ ?> 
                    <span class="headerphone"><?php echo esc_attr( get_theme_mod('head_number', '0789 256 321', 'skt-construction' )); ?></span><br>
                    <?php } ?>
                    <?php if( '' !== get_theme_mod('head_email')){ ?>
                    <span class="headreemail"><a href="mailto:<?php echo sanitize_email(get_theme_mod('head_email','info@buildpress.com')); ?>"><?php echo esc_attr(get_theme_mod('head_email','info@buildpress.com')); ?></a></span>
                    <?php } ?>
                    <div class="clear"></div>
                    </div>


                  <?php endif; ?>  
                   <div class="column-3">
				  <?php if ( '' !== get_theme_mod( 'fb_link' ) ) { ?>
                  <a title="facebook" class="fb" target="_blank" href="<?php echo esc_url(get_theme_mod('fb_link','http://www.facebook.com')); ?>"></a>
                  <?php } ?>
                  <?php if ( '' !== get_theme_mod( 'twitt_link' ) ) { ?>
                  <a title="twitter" class="tw" target="_blank" href="<?php echo esc_url(get_theme_mod('twitt_link','http://www.twitter.com')); ?>"></a>
                  <?php } ?>
                  <?php if ( '' !== get_theme_mod('gplus_link') ) { ?>
                  <a title="google-plus" class="gp" target="_blank" href="<?php echo esc_url(get_theme_mod('gplus_link','http://plus.google.com')); ?>"></a>
                  <?php }?>
                  <?php if ( '' !== get_theme_mod('linked_link') ) { ?>
                  <a title="linkedin" class="in" target="_blank" href="<?php echo esc_url(get_theme_mod('linked_link','http://www.linkedin.com')); ?>"></a>
                <?php } ?>
                  </div> 
                 </div><!-- .headerright -->
                 <div class="clear"></div>
                <div class="toggle">
                <a class="toggleMenu" href="<?php echo esc_url('#');?>"><?php _e('Menu','skt-construction'); ?></a>
                </div><!-- toggle -->
                <div class="nav">                  
                    <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
                </div><!-- nav -->
                    </div><!-- header-inner -->
</div><!-- header -->

<?php if ( is_front_page() && ! is_home() ) { ?>
<!-- Slider Section -->
<?php for($sld=7; $sld<10; $sld++) { ?>
<?php if( get_theme_mod('page-setting'.$sld)) { ?>
<?php $slidequery = new WP_query('page_id='.get_theme_mod('page-setting'.$sld,true)); ?>
<?php while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
$img_arr[] = $image;
$id_arr[] = $post->ID;
endwhile;
}
}
?>
<?php if(!empty($id_arr)){ ?>
<section id="home_slider">
<div class="slider-wrapper theme-default">
<div id="slider" class="nivoSlider">
	<?php 
	$i=1;
	foreach($img_arr as $url){ ?>
    <img src="<?php echo $url; ?>" title="#slidecaption<?php echo $i; ?>" />
    <?php $i++; }  ?>
</div>   
<?php 
$i=1;
foreach($id_arr as $id){ 
$title = get_the_title( $id ); 
$post = get_post($id); 
$content = apply_filters('the_content', substr(strip_tags($post->post_content), 0, 150)); 
?>                 
<div id="slidecaption<?php echo $i; ?>" class="nivo-html-caption">
<div class="slide_info">
<h2><?php echo $title; ?></h2>
<?php echo $content; ?>
<div class="clear"></div>
<div class="slide_more"><a href="<?php the_permalink(); ?>"><?php _e('Read More', 'skt-construction');?></a></div>
</div>
</div>      
<?php $i++; } ?>       
 </div>
<div class="clear"></div>        
</section>
<?php } else { ?>
<section id="home_slider">
<div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
        <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider1.jpg" alt="" title="#slidecaption1" />
        <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider2.jpg" alt="" title="#slidecaption2" />
        <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider3.jpg" alt="" title="#slidecaption3" />
    </div>                    
      <div id="slidecaption1" class="nivo-html-caption">
        <div class="slide_info">
                <h2><?php _e('ARCHI-TECH partageons nos éxpériences'); ?></h2>
        </div>
        </div>
        
        <div id="slidecaption2" class="nivo-html-caption">
            <div class="slide_info">
                    <h2><?php _e('ARCHI-TECH partageons nos éxpériences'); ?></h2>
            </div>
        </div>
        
        <div id="slidecaption3" class="nivo-html-caption">
            <div class="slide_info">
                    <h2><?php _e('ARCHI-TECH partageons nos éxpériences'); ?></h2>
            </div>
        </div>
</div>
<div class="clear"></div>
</section>
<!-- Slider Section -->
<?php } } ?>

<?php if ( is_home() || is_front_page() ) {?>
<div style="display:none"></div>
<?php } else { ?> 
<div class="space30"></div> 
<?php } ?>   
                
<?php if ( is_front_page() && ! is_home() ) { ?>  
		
        <section id="wrapfirst" class="pagewrap1">
        <div class="container">
                <?php 
		/*Home Section Content*/
		if( get_theme_mod('page-setting1')) { ?>
		<?php $queryvar = new WP_query('page_id='.get_theme_mod('page-setting1' ,true)); ?>
		<?php while( $queryvar->have_posts() ) : $queryvar->the_post();?> 
		<?php the_post_thumbnail();?>
        <h1><?php the_title(); ?></h1>         
         <?php the_content(); ?>
         <div class="clear"></div>
        <?php endwhile; } else { ?>
        <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/welcomeimage.jpg" />
        <h1><?php _e('Bienvenus sur ARCHI-TECH ','skt-construction'); ?></h1>
        <p><?php _e('Archi-tech est un site de partage d \'experience et d\'avis dans le monde du Btp vous pouvez donnez votre avis partager des infos commenter des article et meme publier des articles en toute transparence ce site s\'adresse a tous les acteur du Btp Architecte Genis Civil Entrepreneur Artisant ex.. ','skt-construction'); ?></p>
        <?php } ?>
        <div class="clear"></div>
         </div><!-- container -->
     </section><!-- #wrapfirst --> 
      <div class="clear"></div>
  <?php } ?>