   <?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package Gbz-inter
     */

    ?>

    <!-- FOOTER
    ============================================= -->
    <footer id="footer">
        <div id="call-to-action">
            <div class="container">

                <ul class="contact-socials clearfix">

                    <li><a class="foo_link first_link" href="#promo">O компании</a></li>
                    <li><a class="foo_link" href="#pricing">Каталог</a></li>
                    <li><a class="foo_link" href="#services">Преимущества</a></li>
                    <li><a class="foo_link" href="#portfolio">Наши Работы</a></li>
                    <li><a class="foo_link" href="#contact">Контакты</a></li>
                    <li><a class="foo_link" href="<?php the_field('downland_price')?>">Скачать прайс</a></li>
                </ul>


                <div class="row">
                    <div id="footer_socials" class="col-sm-10 col-md-6">
                        <h4>Режим работы:</h4>

                        <?php
                        if( have_rows('operating_mode') ):while ( have_rows('operating_mode') ) : the_row();?>
                            <p><?php the_sub_field('day_of_week');?>: <?php the_sub_field('opening_hours');?></p>
                        <?php   endwhile; endif; ?>

                    </div>

                    <div id="footer_socials	" class="col-sm-12 col-md-6 property">

                        <?php
                        if( have_rows('organization_data') ):while ( have_rows('organization_data') ) : the_row();?>
                            <p><?php the_sub_field('organization_data_title');?></p>
                        <?php   endwhile; endif; ?>

                    </div>

                </div>	 <!-- END FOOTER LINKS -->


                <!-- FOOTER COPYRIGHT -->
                <div class="row">

                    <div id="footer_copyright" class="col-sm-12">
                        <p>© Все права защищены.</p>
                    </div>

                </div>	 <!-- END FOOTER COPYRIGHT -->

            </div>	 <!-- End container -->
        </div>
    </footer>	<!-- END FOOTER -->

    </div> <!-- PAGE CONTENT WRAPPER -->

   <?php
   if( have_rows('form-popups') ):while ( have_rows('form-popups') ) : the_row();?>

       <div class="popup" id="<?php echo the_sub_field('id_popup');?>" >
           <div class="popup__body">
               <div class="popup__content">
                   <a href="" class="popup__close close-popup">X</a>

                   <div class="popup-form form-popup">
                       <h2 class="popup-form__title"><?php the_field('popup__title');?> </h2>
                       <span class="popup-form__subtitle"><?php the_field('popup__subtitle');?></span>
                       <form>
                           <input type="text" name="username" class="popup-form__input form-popup__name "
                                  placeholder="Ваше имя" required>
                           <input type="tel" name="phone" class="telephone popup-form__input form-popup__phone"
                                  placeholder="Ваш телефон" required>
                           <input type="hidden" value=" <?php the_sub_field('hidden_popup');?> " name="title">
                           <button class="button popup-form__button"><?php the_field('popup__button');?></button>
                           <span class="popup-form__descr" class="popup-form____descr"><?php the_field('popup__subtitle');?></span>
                           <a href="tel: <?php the_field('popup__tel');?>" class="popup-form__tel"><?php the_field('popup__tel');?></a>
                       </form>
                   </div>

               </div>
           </div>
       </div>
   <?php   endwhile; endif; ?>

    <div class="popup_thanks">
        <div class="thanks">
            <a class="close-thanks"><img class="close-icons" src="<?php echo get_template_directory_uri();?>/img/icons/close-modal.png" alt=""></a> <!-- При клике происходит закрытие всплывающего окна -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-thanks">
                        <div id="form_response" class="text-center">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/thumbs/mail_sent.png" alt="image" />
                            <h1>Спасибо за заявку!!!</h1>
                            <p>Ваше сообщение отправлено!!!</p>
                            <p>В ближайшее время с Вами свяжется наш специалист.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay-form"></div> <!-- Затемнение фона. При клике закрываем всплывающее окно -->
    </div>

   <div class="popup_load_page <?php the_field('popup_on');?>">
       <div class="load_page">
           <a class="close-load_page"><img class="close-icons" src="" alt="">&times;</a> <!-- При клике происходит закрытие всплывающего окна -->
           <div class="container">
               <div class="row">
                   <div class="col-sm-6 col-sm-offset-3 form-thanks">
                       <div id="form_response" class="text-center">
                           <img class="img-responsive img-offer" src="<?php the_field('img_popup_offer');?>" alt="image" />

                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="overlay-offer"></div> <!-- Затемнение фона. При клике закрываем всплывающее окно -->
   </div>


    <!-- EXTERNAL SCRIPTS
    ============================================= -->
    <script async data-id="70881" src="https://cdn.widgetwhats.com/script.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/form.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.easing.js" type="text/javascript"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/js/jquery.scrollto.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.js" type="text/javascript"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/js/count-to.js"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/js/jquery.appear.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.mixitup.js" type="text/javascript"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/js/jquery.flexslider.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.superslides.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/custom.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/modal.js"></script>
    </body>


</html>