<?php get_header(); ?>
<style>
    .error{
        color: red;
    }
</style>
<!-- content-holder  -->
<div class="content-holder">
    <!-- Page title -->
    <div class="dynamic-title">Contacto</div>
    <!-- Page title  end-->
    <!-- content  -->
    <div class="content">
        <section class="parallax-section">
            <div class="parallax-inner">
                <?php $imagen_banner = get_field('contacto_page_imagen', 'options') ?>
                <div class="bg" data-bg="<?php
                if (isset($imagen_banner['url'])) {
                    echo $imagen_banner['url'];
                };
                ?>" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                <div class="overlay"></div>
            </div>
            <div class="container">
                <div class="page-title">
                    <div class="row">
                        <div class="col-md-6">
                            <h2> Our <strong> Contacts </strong></h2>
                        </div>
                        <div class="col-md-6">
                            <ul class="creat-list">
                                <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/contacto">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content end -->
    <!-- content  -->
    <div class="content">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="section-title">Where to <strong>Find us </strong></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                    </div>
                </div>
                <div class="map-box">
                    <div id="map-canvas"></div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-details">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3 class="bold-title">Contact  details : </h3>
                                </div>
                                <div class="col-md-4">
                                    <h4>Office in New York</h4>
                                    <ul>
                                        <li><a href="#">Av. Cerro Gordo 130 Int. 5001
                                                <br>Col. Cerro Gordo
                                                <br>C.P. 37129
                                                <br>León Guanajuato</a></li>
                                        <li><a href="#">+7(111)123456789</a></li>
                                        <li><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h4>Find Us On : </h4>
                                    <ul>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Twitter </a></li>
                                        <li><a href="#">Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- contact form -->
                        <div class="contact-form-holder">
                            <div id="contact-form">
                                <div id="message"></div>
                                <form method="post" name="contactform" id="contactform">
                                    <p>
                                        <input name="cname" type="text" id="cname" placeholder="Nombre" type="text">
                                    </p>
                                    <p>
                                        <input name="email" type="text" id="email"  placeholder="E-mail">
                                    </p>
                                    <p>
                                        <textarea  name="comments" id="comments" required>Deja tu mensaje...</textarea>
                                    </p>



                                    <button type="submit" id="submit" data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>Send Message </span></button>
                                </form>
                            </div>
                        </div>
                        <!-- contact form  end-->
                    </div>
                </div>
            </div>
        </section>
    </div>



    <?php get_footer(); ?>

    <script>
        $(document).ready(function () {
            $("#contactform").validate({
                rules: {
                    cname: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    comments: {
                        required: true
                    }
                },
                messages: {
                    cname: {
                        required: "El nombre es obligatorio",
                        minlength: "Tu nombre debe contener al menos 2 caracteres"
                    },
                    email: {
                        required: "El email es obligatorio",
                        email: "No es un formato de email válido"
                    },
                    comments: {
                        required: "El mensaje es obligatorio"
                    }
                }
            });
        });
        $('#submit').click(function () {
            if ($('#contactform').valid()) {
                $.ajax({
                    type: "POST",
                    url: '<?php echo get_template_directory_uri(); ?>/ajax_mail.php',
                    data: $('#contactform').serialize(),
                    success: function (respuesta) {
                        console.log(respuesta);
                    },
                    dataType: 'html'
                });
            }
            return false;
        }
        );

    </script>