<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gbz-inter
 */

get_header();
?>

	<div id="content_wrapper">
		
		
		
			<!-- INTRO
			============================================= -->
			<section id="intro" class="lock-padding">
				
				
				<!-- SLIDES HOLDER -->
				<div id="slides">
					
					<ul class="slides-container">
						
						
						<!-- SLIDE #1 -->
                        <li>
							<!-- Overlay Pattern -->	
							<div class="overlay"></div>
							<!-- Intro Slide Text -->
							<div class="intro-content text-center">

								<h2><?php the_field('main_heading')?></h2>
								<p><?php the_field('subtitle_heading')?></p>
													
								<!-- SLIDE BUTTON -->
								<div class="intro_button">
									<a name="<?php the_field('name_1')?>" class="btn popup-link" href="#"><?php the_field('one_button')?></a>
								</div>
							</div>
							<!-- Background Image  -->
							<img src="<?php the_field('one_image_header')?>" alt="">
						</li>	<!-- END SLIDE #1 -->
							
							
						<!-- SLIDE #2 -->
						<li>
								
							<!-- Overlay Pattern -->
							<div class="overlay"></div>
								
							<!-- Intro Slide Text -->
							<div class="intro-content text-center">

                                <h2><?php the_field('second_main_heading')?></h2>
                                <p><?php the_field('second_subtitle_heading')?></p>
																							
								<!-- SLIDE BUTTON -->
								<div class="intro_button">		
									<a name="<?php the_field('name_2')?>" class="btn popup-link" href="#"><?php the_field('second_button')?></a>
                                    <a class="btn " href="<?php the_field('downland_price')?>"><?php the_field('second_button_2')?></a>
								</div>
								
							</div>
								
							<!-- Background Image  -->
							<img src="<?php the_field('second_image_header')?>" alt="">
								
						</li>	<!-- END SLIDE #2 -->
							
							
						<!-- SLIDE #3 -->
						<li>
							
							<!-- Overlay Pattern -->
							<div class="overlay"></div>
								
							<!-- Intro Slide Text -->
							<div class="intro-content text-center">

                                <h2><?php the_field('third_main_heading')?></h2>
                                <p><?php the_field('third_subtitle_heading')?></p>
												
								<!-- SLIDE BUTTON -->
								<div class="intro_button">		
									<a name="<?php the_field('name_3')?>" class="btn popup-link" href="#"><?php the_field('third_button')?></a>
								</div>	
								
							</div>
								
							<!-- Background Image  -->	
							<img src="<?php the_field('third_image_header')?>" alt="">
								
						</li>	<!-- END SLIDE #3 -->

							
					</ul>
						
						
					<!-- SLIDES NAVIGATION -->
					<nav class="slides-navigation">
						<a href="#" class="next fa fa-angle-right"></a>
						<a href="#" class="prev fa fa-angle-left"></a>
					</nav>
						
				
				</div>	<!-- END SLIDES HOLDER -->

					<!-- number & mail -->
				<div class="numder-down">
					<span class="numder-down_title">Отдел продаж </span>
					<ul class="list">
								
						<!-- List_Item_1 -->
						<li>
							<div class="list-content">
                                <i class="fas fa-phone-square-alt"></i>
                                <a href="tel:<?php the_field('Depart_telephone')?>" class="number"><?php the_field('Depart_telephone')?></a>
							</div>
						</li>
						<!-- List_Item_2 -->
						<li>
							<div class="list-content">
                                <i class="fas fa-envelope-square"></i>
								<a href="mailto: <?php the_field('Depart_email')?>"><?php the_field('Depart_email')?></a>
							</div>
						</li>
								
					</ul>					
				</div>
					
				<!-- SCROLL DOWN MOUSE -->
				<div class="scroll-down">
					<div class="mouse">
						<span class="fa fa-angle-down">							
						</span>
					</div>
					<span>Прокрутите вниз чтобы узнать подробнее</span>
				</div>

				
			</section>	<!-- END INTRO -->
			
			
			<!-- PRICING
			============================================= -->		
			<section id="pricing" class="lock-padding" >
				<div class="container">	
				
							
					<!-- SECTION TITLE -->				
					<div class="row">
						<div class="col-sm-12 titlebar">
						
							<h3><?php the_field('price_title')?></h3>
							
							
						</div>
					</div>	<!-- END SECTION TITLE -->
						
					<!-- PRICE CARDS HOLDER -->
					<div class="row team_members_wrapper">
						
						<!-- PRICE CARDS -->
                        <?php

                        if( have_rows('card_price') ):while ( have_rows('card_price') ) : the_row();?>
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="team-member">

                                    <!-- Team Member Photo  -->
                                    <div class="img-block">
                                        <img class="img-responsive" src="<?php the_sub_field('card_image');?>" alt="team_foto" >
                                    </div>

                                    <!-- Team Member Meta  -->
                                    <div class="team-img-meta">
                                        <h5><?php the_sub_field('product_title');?></h5>

                                        <ul class="list">

                                            <!-- List_Item_1 -->
                                            <li>
                                                <div class="list-icon <?php the_sub_field('icons_title_css');?>">
                                                    <i class="fa fa-check "></i>
                                                </div>

                                                <div class="list-content">
                                                    <p><?php the_sub_field('product_subtitle_1');?></p>
                                                </div>
                                            </li>

                                            <!-- List_Item_2 -->
                                            <li>
                                                <div class="list-icon <?php the_sub_field('icons_title_css');?>">
                                                    <i class="fa fa-check"></i>
                                                </div>

                                                <div class="list-content">
                                                    <p><?php the_sub_field('product_subtitle_2');?></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="card_button intro_button">
                                        <a  class="btn card-btn" href="<?php the_field('downland_price')?>"><?php the_sub_field('product_button_1');?></a>
                                        <a name="<?php the_sub_field('name');?>" class="btn card-btn popup-link"><?php the_sub_field('product_button_2');?></a>
                                    </div>

                                </div>
                            </div>
                        <?php   endwhile; endif; ?>
                        <!-- END PRICE CARDS -->
							
					</div>	<!-- END PRICE CARDS HOLDER -->
					
						
				</div>	   <!-- End container -->
			</section>	<!-- END TEAM -->

			<!-- PROMO LINE 
			============================================= -->	
			<div id="promo">
				<div class="container">

					<!-- SECTION TITLE -->		
					<div class="row">
						<div class="col-sm-12 titlebar">
						
							<h3><?php the_field('about_title')?></h3>
							
							
						</div>
					</div>	<!-- END SECTION TITLE -->

					<div class="row">
					<!-- BIG PROMO IMAGE -->
					<div class="col-md-6 big-promo-image text-center">
						<img class="img-responsive" src="<?php the_field('about_img')?>" alt="big-promo-image" />
					</div>


					<!-- BIG PROMO CONTENT -->
					<div class="col-md-6 big-promo-content">
                        <?php the_field('about_description')?>
					</div>	<!-- END BIG PROMO CONTENT -->



				
				
					</div>	  <!-- End row -->
				</div>	  <!-- End container -->	
			</div>	  <!-- END PROMO LINE  -->
			
			
			
			
			<!-- SERVICES
			============================================= -->	
			<section id="services">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 titlebar">
						
							<h3><?php the_field('advantage_title');?></h3>
							
						</div>
					</div>	<!-- END SECTION TITLE -->

					<div class="row">
                        <!-- SERVICE BOX #1 -->
						<ul>

                            <?php
                            if( have_rows('one_advantage_block') ):while ( have_rows('one_advantage_block') ) : the_row();?>
                                <li class="col-xs-6 col-md-4 service-box">
                                    <!-- Service Box Content -->
                                    <div class="service-box-content">
                                        <div class="service-box-icon">
                                            <i class="<?php the_sub_field('icon_advantage');?>"></i>
                                        </div>
                                        <div class="service-box-title">
                                            <h4 class="small-title"><?php the_sub_field('advantage_card_title');?></h4>
                                        </div>
                                        <p><?php the_sub_field('advantage_card_descr');?></p>
                                    </div>
                                </li>
                            <?php   endwhile; endif; ?>
						</ul>	<!-- END SERVICE BOXES HOLDER -->
					</div>
                    <!-- End row -->



					<div class="row">
						<ul>
                            <!-- SERVICE BOX #2 -->
                            <?php
                            if( have_rows('second_advantage_block') ):while ( have_rows('second_advantage_block') ) : the_row();?>
                            <li class="col-xs-6 col-md-4 service-box">
                                <!-- Service Box Content -->
                                <div class="service-box-content">
                                    <div class="service-box-icon">
                                        <i class="<?php the_sub_field('icon_advantage');?>"></i>
                                    </div>
                                    <div class="service-box-title">
                                        <h4 class="small-title"><?php the_sub_field('advantage_card_title');?></h4>
                                    </div>
                                    <p><?php the_sub_field('advantage_card_descr');?></p>
                                </div>
                                <?php   endwhile; endif; ?>
						</ul><!-- END second SERVICE BOXES HOLDER -->
					</div>		
				</div>	    <!-- End container -->	
			</section>	 <!-- END SERVICES -->
			
			
					
			<!-- STATISTIC BANNER
			============================================= -->
			<div id="statistic_banner">
				<div class="container">

					
					<!-- STATISTIC BLOCKS HOLDER -->
					<div id="statistic-holder" class="row">

                        <?php
                        if( have_rows('our_number') ):while ( have_rows('our_number') ) : the_row();?>
                            <!-- STATISTIC BLOCK -->
                            <div class="col-xs-6 col-sm-6 col-md-3 statistic-block text-center">
                                <div class="statistic-number"><?php the_sub_field('num');?></div>
                                <div class="statistic-text"><?php the_sub_field('num_title');?></div>
                                <div><p><?php the_sub_field('num_subtitle');?></p></div>
                            </div>
                        <?php   endwhile; endif; ?>

					</div>	<!-- END STATISTIC BLOCKS  HOLDER -->
						
					
				</div>	 <!-- End container -->		
			</div>	 <!-- END STATISTIC BANNER -->		
			
			
			<!-- MAILCHIMP NEWSLETTER FORM
			============================================= -->		
			<section id="newsletter">
				<div class="container">		
					<div class="row">				
					
						<!-- NEWSLETTER TITLE -->
						<div class="offer-title">
						
							<h3><?php the_field('act_title');?></h3>
							<h4><?php the_field('act_subtitle');?></h4>
							
						</div>	<!-- END NEWSLETTER TITLE -->	
					
				
						<!-- NEWSLETTER FORM -->						
						<div class="offer">									
							<form>
								<div id="newsletterfields">
									<input id="s_email" type="email" value="" name="email" placeholder="Ваш email" required>
									<input type="text" name="username" placeholder="Ваше имя" required>
                                    <input type="hidden" name="title" value="Форма с блока остались вопросы.">
									<input type="submit" value="Оставить заявку">
								</div>
							</form>				
							

						</div>	<!-- END NEWSLETTER FORM -->

						
					</div>	  <!-- End row -->		
				</div>	   <!-- End container -->
			</section>	<!-- END MAILCHIMP NEWSLETTER FORM -->
			
			
			
			<!-- PORTFOLIO
			============================================= -->	
<section id="portfolio">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-sm-12 titlebar">

                <h3><?php the_field('portfolio_title');?></h3>

            </div>
        </div><!-- END SECTION TITLE -->
        <!-- PORTFOLIO IMAGES HOLDER -->
        <div class="row">
            <ul class="portfolio-items-list">
    <?php
    if( have_rows('portfolio') ):while ( have_rows('portfolio') ) : the_row();?>
        <!-- IMAGE -->
        <li class="col-xs-6 col-sm-6 col-md-4 portfolio-item illustration web" data-cat="2">
            <div class="hover-overlay">

                <!-- Image Link -->
                <img class="img-responsive" src="<?php the_sub_field('portfolio_img');?>" alt="Portfolio Image">

                <!-- Image Zoom -->
                <a class="prettyPhoto image_zoom" href="<?php the_sub_field('portfolio_img');?>" title="Portfolio Image">
                    <div class="item-overlay">
                        <div class="overlay-content">
                            <h4 class="small-title"><?php the_sub_field('portfolio_img_title');?></h4>
                            <h5><?php the_sub_field('portfolio_img_subtitle');?></h5>
                        </div>
                    </div>
                </a>

            </div>
        </li>
        <!-- END IMAGE  -->
    <?php   endwhile; endif; ?>

    </div>	   <!-- End container -->
</section>	<!-- END PORTFOLIO -->
			
			
			
			<!-- FEATURES LIST
			============================================= -->
			<div id="features-list">
				<div class="container">

					<div class="row">
						<div class="col-sm-12 titlebar">
						
							<h3><?php the_field('features-list_title');?></h3>
							
							
						</div>
					</div>	<!-- END SECTION TITLE -->
					
					
					<div class="row">

					
						<!-- PROMO LINE ROTATOR CONTENT  -->
						<div class="promo-image col-md-6">	
							<div class="flexslider">											
								<ul class="slides">

                                    <?php
                                    if( have_rows('certificate') ):while ( have_rows('certificate') ) : the_row();?>
                                        <!-- Promo Line Image  -->
                                        <li class="promo-line-image">
                                            <img class="img-responsive" src="<?php the_sub_field('certificate_img');?>" alt="promo-image"/>
                                        </li>
                                    <?php   endwhile; endif; ?>
								</ul>												
							</div>																
						</div>	 <!-- END ROTATOR CONTENT -->	
						
																	
						<!-- PROMO LINE TEXT -->
						<div id="promo-content" class="col-md-6">

                            <?php the_field('features-list_subtitle');?>
								
						</div>	<!-- END PROMO LINE 1 TEXT -->
					
					</div>	   <!-- End row -->
				</div>	   <!-- End container -->
			</div>	   <!-- END FEATURES LIST -->
			
			
			
			<!-- BOTTOM PROMO LINE 
			============================================= -->	
			<div id="bottom-promo_line">			
				<div class="container">			
					<div class="row">
						
														
						<!-- BOTTOM PROMO LINE CONTENT -->
						<div class="col-md-12 text-center">
						
							<h2> <?php the_field('promo_line_title');?></h2>
							<p><?php the_field('promo_line_title_1');?></p>
							<p><?php the_field('promo_line_title_2');?></p>
							
							<a  name="<?php the_field('name_4')?>" class="btn btn-tra popup-link"><?php the_field('promo_line_button_1');?></a>
							<a href="<?php the_field('downland_price')?>" class="btn"><?php the_field('promo_line_button_2');?></a>
							
						</div>
							
													
					</div>	  <!-- End row -->				
				</div>	   <!-- End container -->						
			</div>	    <!-- END BOTTOM PROMO LINE -->	
			
			
			
			<!-- CLIENTS
			============================================= -->				
			<div id="clients">
				<div class="container">

				
					<!-- CLIENTS CAROUSEL HOLDER -->
					<div id="clients-holder" class="row">
						<div class="col-md-12">
						

							<!-- CLIENTS CAROUSEL -->
							<div id="our-customers" class="owl-carousel">

                                <?php
                                if( have_rows('clients') ):while ( have_rows('clients') ) : the_row();?>
                                    <!-- CLIENT LOGO -->
                                    <div id="<?php the_sub_field('id_our_clients_logo');?>" class="item">
                                        <img class="img-responsive img-customer" src="<?php the_sub_field('our_clients_logo');?>" alt="customer_image">
                                    </div>
                                <?php   endwhile; endif; ?>

							</div>	<!-- END CLIENTS CAROUSEL -->
							
		
						</div>
					</div>	   <!-- END CLIENTS CAROUSEL HOLDER -->

					
				</div>	   <!-- End container -->
			</div>	<!-- END CLIENTS -->	
			
			<!-- CONTACTS
			============================================= -->
			<section id="contact">
				<div class="container">	
					
					
					<!-- SECTION TITLE -->				
					<div class="row">
						<div class="col-sm-12 titlebar">
						
							<h3><?php the_field('contact_title');?></h3>
							
						</div>
					</div>
					
						
					<div class="row contacts-block">
					
	
						<!-- CONTACT FORM -->
						<div class="col-sm-8">
							
							<form id="contact-form"  name="contactform" class="row" method="post">
								
								<div id="input_name" class="col-md-6">
									<input type="text" name="username" id="name" class="form-control" placeholder="Ваше имя" required>
								</div>
									
								<div id="input_email" class="col-md-6">
									<input type="email" name="email" id="email" class="form-control" placeholder="Ваш Email" required>
								</div>
									
								<div id="input_subject" class="col-md-12">
									<input type="tel" name="phone" id="subject" class="telephone form-control" placeholder="Ваш номер телефона" required>
								</div>
									
								<div id="input_message" class="col-md-12">
									<textarea class="form-control" name="message" id="comments" rows="6" placeholder="Введите сообщение ..."></textarea>
								</div>   
								<input type="hidden" value="Форма снизу" name="title">
								<!-- Submit Button -->
								<div id="form_btn" class="col-md-12 text-right">							
									<input type="submit" value="Оставить заявку" id="submit" class="btn">
								</div>
									
							</form>
							
						</div><!-- END CONTACT FORM -->
						

						<!-- CONTACT INFO -->
						<div id="contacts-info" class="col-sm-4">

                            <?php
                            if( have_rows('contact_and_phone') ):while ( have_rows('contact_and_phone') ) : the_row();?>
                                <div class="contact-data">
                                    <h4 class="small-title"><?php the_sub_field('contacts-info_title');?></h4>
                                    <p><?php the_sub_field('contacts-info_subtitle_1');?></p>
                                    <p><?php the_sub_field('contacts-info_subtitle_2');?></p>
                                </div>
                            <?php   endwhile; endif; ?>
						

						</div>	<!-- END CONTACT INFO -->
						
						

						
					</div>	<!-- End row -->	   	
						
						
				</div>	   <!-- End container -->
				
				<div class="map" id="map">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad7af16e8e5e2efe822451b1ad4406b285b920a3f47ab65899857fade471a556c&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=false"></script>
				</div>
				
			</section>	 <!-- END CONTACTS -->
			
			

<?php

get_footer();
