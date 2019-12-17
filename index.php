<?php /* Template Name: Home */ ?>
<?php
/**
 * This is index of the page
 *
 * @package portfolio
 *
 */

get_header();
?>
<?php 
	//************** ACF data **********************
	$name = is_null(get_field('name')) ? 'Viral' : get_field('name');
	$surname = is_null( get_field('surname')) ? 'Solanki' : get_field('surname'); 
	$caption = is_null( get_field('caption')) ? 'A WordPress Developer, Wants To pursue a challenging career and be a part of progressive organization that gives a scope to enhance my knowledge and utilizing my skills towards the growth of the organization.' : get_field('caption');
	
	$background_image = is_null( get_field('background_image')) ?  get_template_directory_uri().'/images/bg-image.jpg' : get_field('background_image');
	//$background_image = empty($background_image) ? $background_image :  
	$side_image = is_null( get_field('side_image')) ? get_template_directory_uri().'/images/side_image.jpg' : get_field('side_image');
	$paragraph_1 = is_null( get_field('paragraph_1')) ? 'A creative WordPress developer with a strong history in website management and development. Expert in all aspects of WordPress theme creation, including design, plug-ins and implementation.' : get_field('paragraph_1');
	
	$paragraph_2 = is_null( get_field('paragraph_2')) ? 'Skilled in creating engaging and interactive websites. Detail-oriented and knowledgeable in various programming languages.' : get_field('paragraph_2');
	$email = is_null(get_field('email')) ? 'viralsolanki2@gmail.com' : get_field('email');
	$phone = is_null(get_field('phone')) ? '+123456789' : get_field('phone');
	$fax = is_null(get_field('fax')) ? '+123456789' : get_field('fax');
	$address = is_null(get_field('address')) ? 'g-222, ramaynpark soc. navagam' : get_field('address');
	$resume = is_null(get_field('upload_your_resume')) ? '' : get_field('upload_your_resume');

?>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <a class="navbar-brand" href="<?php echo esc_url( get_home_url() ); ?>"><?php echo $name;?></a>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-portfolio">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-resume">Resume</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-blog">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    

   
    
    <section class="site-hero" style="background-image: url(<?php echo $background_image;?>);" id="section-home" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row intro-text align-items-center justify-content-center">
          <div class="col-md-10 text-center">
            <h1 class="site-heading site-animate">Hii, I'm <strong><?php echo $name.' '.$surname; ?></strong></h1>
            <p class="lead site-subheading mb-4 site-animate"><?php echo $caption;?></p>
            <p><a href="#section-about" class="smoothscroll btn btn-primary px-4 py-3">More On Me</a></p>
          </div>
        </div>
      </div>
    </section> <!-- section -->

  
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row mb-5 align-items-center">
        <?php if( !empty($side_image)) : ?>
          <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
            <img src="<?php echo $side_image; ?>" alt="Image placeholder" class="img-fluid">
          </div>
      <?php endif;?>
          <div class="col-lg-5 pl-lg-5">
            <div class="section-heading">
              <h2><strong>Profile</strong></h2>
            </div>
            <p class="lead"><?php echo $paragraph_1; ?></p>
            <p class="mb-5  "> <?php echo $paragraph_2; ?> </p>

            <p>
              <a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Hire Me</a>
              <?php if( !empty($resume)) : ?>
              	<a href="<?php echo $resume; ?>" class="btn btn-secondary px-4 py-2 btn-sm">Download CV</a>
              <?php endif; ?>	
            </p>
          </div>
        </div>

       <?php if( have_rows('skills') ): ?>
        <div class="row pt-5">
          <div class="col-md-3 mb-3">
            <div class="section-heading">
              <h2>My <strong>Skills</strong></h2>
            </div>
          </div>
          <div class="col-md-9">
          	<?php

				// check if the repeater field has rows of data
				

				 	// loop through the rows of data
				    while ( have_rows('skills') ) : the_row();
				    	if(empty(get_sub_field('skill_name'))){

				    	} 
				    	else {?>

				    	<div class="skill">
			              <h3><?php the_sub_field('skill_name')?></h3>
			              <div class="progress">
			                <div class="progress-bar" role="progressbar" style="width: <?php the_sub_field('rate')?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
			                  <span><?php the_sub_field('rate')?> %</span>
			                </div>
			              </div>
			            </div>
				<?php }
				       // the_sub_field('sub_field_name');

				    endwhile; ?>

				
			<!--	
            <div class="skill">
              <h3>Design</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                  <span>85%</span>
                </div>
              </div>
            </div>

            <div class="skill">
              <h3>HTML5</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                  <span>98%</span>
                </div>
              </div>
            </div>

            <div class="skill">
              <h3>CSS3</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 97%" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100">
                  <span>97%</span>
                </div>
              </div>
            </div>

            <div class="skill">
              <h3>WordPress</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                  <span>88%</span>
                </div>
              </div>
            </div>

            <div class="skill">
              <h3>Bootstrap</h3>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                  <span>92%</span>
                </div>
              </div>
            </div>-->
          </div>
        </div>
        <?php else :
		    // no rows found

		endif; ?>
      </div>
    </section>
	
	<?php /*******************Client Testimonial**********************  
   
    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="section-heading text-center">
              <h2>Client <strong>Testimonial</strong></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">

              <div class="block-47 d-flex mb-5">
                <div class="block-47-image">
                  <img src="<?php echo get_template_directory_uri().'/images'?>/person_1.jpg" alt="Image placeholder" class="img-fluid">
                </div>
                <blockquote class="block-47-quote">
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                  <cite class="block-47-quote-author">&mdash; Ethan McCown, CEO <a href="#">XYZ Inc.</a></cite>
                </blockquote>
              </div>

          </div>
          <div class="col-md-6">
            
            <div class="block-47 d-flex mb-5">
                <div class="block-47-image">
                  <img src="<?php echo get_template_directory_uri().'/images'?>/person_2.jpg" alt="Image placeholder" class="img-fluid">
                </div>
                <blockquote class="block-47-quote">
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                  <cite class="block-47-quote-author">&mdash; Craig Gowen, CEO <a href="#">XYZ Inc.</a></cite>
                </blockquote>
              </div>

          </div>

          <div class="col-md-6">
            
              <div class="block-47 d-flex mb-5">
                <div class="block-47-image">
                  <img src="<?php echo get_template_directory_uri().'/images'?>/person_3.jpg" alt="Image placeholder" class="img-fluid">
                </div>
                <blockquote class="block-47-quote">
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                  <cite class="block-47-quote-author">&mdash; Ethan McCown, CEO <a href="#">XYZ Inc.</a></cite>
                </blockquote>
              </div>

          </div>
          <div class="col-md-6">
            
            <div class="block-47 d-flex mb-5">
                <div class="block-47-image">
                  <img src="<?php echo get_template_directory_uri().'/images'?>/person_4.jpg" alt="Image placeholder" class="img-fluid">
                </div>
                <blockquote class="block-47-quote">
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                  <cite class="block-47-quote-author">&mdash; Craig Gowen, CEO <a href="#">XYZ Inc.</a></cite>
                </blockquote>
              </div>

          </div>

        </div>
      </div>
    </section> */ ?>

    <?php if( have_rows('services') ): ?>

	    <section class="site-section border-top pb-0"  id="section-services">
	      <div class="container">

	        <div class="row mb-4">
	          <div class="col-md-12">
	            <div class="section-heading text-center">
	              <h2>My <strong>Services</strong></h2>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	        <?php while ( have_rows('services') ) : the_row(); ?>
				   
	          <div class="col-md-6 col-lg-4 text-center mb-5">
	            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
	              <span class="icon">
	                <span class=<?php the_sub_field('service-icon') ?>></span>
	              </span>
	              <h3 class="mb-4"><?php the_sub_field('service-name') ?></h3>
	              <p><?php the_sub_field('description') ?></p>
	              <!--<p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p> -->
	            </div>
	          </div>
	          <?php endwhile; ?>
	        </div>
	     
	      </div>
	    </section>
    <?php else :
		    // no rows found

	endif; ?>
	<!-- <section class="site-section border-top pb-0"  id="section-services">
	      <div class="container">

	        <div class="row mb-4">
	          <div class="col-md-12">
	            <div class="section-heading text-center">
	              <h2>My <strong>Services</strong></h2>
	            </div>
	          </div>
	        </div>
	        <div class="row">

	          <div class="col-md-6 col-lg-4 text-center mb-5">
	            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
	              <span class="icon">
	                <span class="icon-phone3"></span>
	              </span>
	              <h3 class="mb-4">Mobile Optimize</h3>
	              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	              <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
	            </div>
	          </div>
	          <div class="col-md-6 col-lg-4 text-center mb-5">
	            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
	              <span class="icon">
	                <span class="icon-wallet2"></span>
	              </span>
	              <h3 class="mb-4">Increase Revenue</h3>
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
	            </div>
	          </div>
	          <div class="col-md-6 col-lg-4 text-center mb-5">
	            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
	              <span class="icon">
	                <span class="icon-lightbulb"></span>
	              </span>
	              <h3 class="mb-4">Intuitive Idea</h3>
	              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
	              <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
	            </div>
	          </div>

	          <div class="col-md-6 col-lg-4 text-center mb-5">
	            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
	              <span class="icon">
	                <span class="icon-phone3"></span>
	              </span>
	              <h3 class="mb-4">Mobile Optimize</h3>
	              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	              <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
	            </div>
	          </div>
	          <div class="col-md-6 col-lg-4 text-center mb-5">
	            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
	              <span class="icon">
	                <span class="icon-wallet2"></span>
	              </span>
	              <h3 class="mb-4">Increase Revenue</h3>
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
	            </div>
	          </div>
	          <div class="col-md-6 col-lg-4 text-center mb-5">
	            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
	              <span class="icon">
	                <span class="icon-lightbulb"></span>
	              </span>
	              <h3 class="mb-4">Intuitive Idea</h3>
	              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
	              <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
	            </div>
	          </div>

	        </div>
	      </div>
	    </section> -->
<?php if (!have_rows('education') && !have_rows('experience') )
		{

		}
	else{?>
		<section class="site-section bg-light " id="section-resume">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="section-heading text-center">
              <h2>My <strong>Resume</strong></h2>
            </div>
          </div>

          <?php if( have_rows('education') ): ?>
          <div class="col-md-6">
            <h2 class="mb-5">Education</h2>

            <?php while(have_rows('education') ):the_row(); ?>
	            <div class="resume-item mb-4">
	              <span class="date"><span class="icon-calendar"></span><?php the_sub_field('date') ?></span>
	              <h3><?php the_sub_field('course') ?></h3>
	              <p><?php the_sub_field('small_caption') ?>
	              <span class="school"><?php the_sub_field('city') ?></span>
	            </div>
        <?php endwhile; ?>

          </div>
      <?php endif; ?>
      	<?php if( have_rows('experience') ): ?>
          <div class="col-md-6">
           
            <h2 class="mb-5">Experience</h2>
            <?php while(have_rows('experience') ):the_row(); ?>
            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> <?php the_sub_field('date') ?></span>
              <h3><?php the_sub_field('position') ?></h3>
              <p><?php the_sub_field('small_caption') ?></p>
              <span class="school"><?php the_sub_field('company_name') ?></span>
            </div>
        <?php endwhile; ?>

          </div>
        <?php endif; ?>
        </div>
      </div>
    </section> 
<?php	}
?>
    <!-- .section -->
    <!--  <section class="site-section bg-light " id="section-resume">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="section-heading text-center">
              <h2>My <strong>Resume</strong></h2>
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="mb-5">Education</h2>
            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
              <h3>Masteral in Information Technology</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">New York University</span>
            </div>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present Deacember.</span>
              <h3>Masteral in Information Technology</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">New York University</span>
            </div>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
              <h3>Masteral in Information Technology</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">New York University</span>
            </div>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present Deacember.</span>
              <h3>Masteral in Information Technology</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">New York University</span>
            </div>

          </div>
          <div class="col-md-6">
            

            <h2 class="mb-5">Experience</h2>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
              <h3>Lead Product Designer</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">Github</span>
            </div>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
              <h3>Lead Product Designer</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">Facebook</span>
            </div>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
              <h3>Lead Product Designer</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">Twitter</span>
            </div>

            <div class="resume-item mb-4">
              <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
              <h3>Lead Product Designer</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <span class="school">Shopify</span>
            </div>


          </div>
        </div>
      </div>
    </section>-->
	<?php
		$array      = array(
			'post_type'      => 'post',
			'order'          => 'asc',
			'posts_per_page' => 6,
		);
		$Projects = new WP_Query( $array );
	
		if ( $Projects->have_posts() ) :	
		?>
		 <section class="site-section" id="section-blog">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-12 mb-5">
	            <div class="section-heading text-center">
	              <h2>My<strong> Projects</strong></h2>
	            </div>
	          </div>
	        </div>
        	<div class="row">

					<?php
					while ( $Projects->have_posts() ) :
						$Projects->the_post();
						//$count_post[] = $post->ID;
					
						$thumb_id = get_post_thumbnail_id();

						$thumb_url = wp_get_attachment_image_src( $thumb_id, 'slider-size', false );
						?>
						<div class="col-sm-6 col-lg-4 mb-4">
				            <div class="blog-entry">
				            <?php if ( has_post_thumbnail() ): ?>
				              		<a href="#"><img src="<?php echo esc_url( $thumb_url[0] ); ?>" alt="Image placeholder" class="img-fluid"></a>
				            <?php endif; ?>  		
				              <div class="blog-entry-text">
				                <h3><a href="#"><?php the_title(); ?></a></h3>
				                <?php if ( has_excerpt() ) { ?>
									<p class="mb-4"><?php the_excerpt(); ?></p>
									<?php } else { ?>
									<p class="mb-4"><?php the_content(); ?></p>
									<?php } ?>
				               
				                <div class="meta">
				                  <a href="#"><span class="icon-calendar"></span><?php echo ' '.get_the_date(); ?></a>
				                </div>
				              </div>
				            </div>
				          </div>

					<?php
					endwhile;
					echo '</div>';
					?>
				 </div>
    	</section>
    <?php endif; ?>		
    
<!--<section class="site-section" id="section-blog">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="section-heading text-center">
              <h2>Blog on <strong>Medium</strong></h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="blog-entry">
              <a href="#"><img src="<?php /* echo get_template_directory_uri().'/images'?>/post_1.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="blog-entry-text">
                <h3><a href="#">Creative Product Designer From Facebook</a></h3>
                <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                <div class="meta">
                  <a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
                  <a href="#"><span class="icon-bubble"></span> 5 Comments</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="blog-entry">
              <a href="#"><img src="<?php echo get_template_directory_uri().'/images'?>/post_2.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="blog-entry-text">
                <h3><a href="#">Creative Product Designer From Facebook</a></h3>
                <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                <div class="meta">
                  <a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
                  <a href="#"><span class="icon-bubble"></span> 5 Comments</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="blog-entry">
              <a href="#"><img src="<?php echo get_template_directory_uri().'/images'*/?>/post_3.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="blog-entry-text">
                <h3><a href="#">Creative Product Designer From Facebook</a></h3>
                <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                <div class="meta">
                  <a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
                  <a href="#"><span class="icon-bubble"></span> 5 Comments</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> -->

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="section-heading text-center">
              <h2>Wanna <strong>Start Work</strong> With Me?</h2>
            </div>
          </div>
          
          <div class="col-md-7 mb-5 mb-md-0">
          	<h3 class="mb-5">Get In Touch</h3>
           <!-- <form action="" class="site-form">
              
              <div class="form-group">
                <input type="text" class="form-control px-3 py-4" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control px-3 py-4" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="email" class="form-control px-3 py-4" placeholder="Your Phone">
              </div>
              <div class="form-group mb-5">
                <textarea class="form-control px-3 py-4"cols="30" rows="10" placeholder="Write a Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary  px-4 py-3" value="Send Message">
              </div>
            </form>-->
            <?php echo do_shortcode( '[contact-form-7 id="129" title="Contact form 1"]' ); ?>
          </div>
          <div class="col-md-5 pl-md-5">
            <h3 class="mb-5">My Contact Details</h3>
            <ul class="site-contact-details">
            <?php if( !empty($email)) : ?>	
              <li>
                <span class="text-uppercase">Email</span>
                <?php echo $email; ?>
              </li>
            <?php endif; ?>  
            <?php if( !empty($phone)) : ?>	
              <li>
                <span class="text-uppercase">Phone</span>
                <?php echo $phone; ?>
              </li>
            <?php endif; ?>    
            <?php if( !empty($fax)) : ?>	 
              <li>
                <span class="text-uppercase">Fax</span>
                <?php echo $fax; ?>
              </li>
            <?php endif; ?>    
            <?php if( !empty($address)) : ?>	  
              <li>
                <span class="text-uppercase">Address</span>
                <?php echo $address; ?>
              </li>
            <?php endif; ?>    
            </ul>
          </div>
        </div>
      </div>
    </section>

<?php get_footer();