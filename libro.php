<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Meta Tags -->

        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge">	
        <title>Javier Diaz Brassetti</title>
        <meta name="description" content="Premium HTML5 Template">
        <meta name="keywords" content=" HTML5, Premium Template, Minth Theme">
        <meta name="author" content="Amazyne Themes">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Favicon -->

        <link rel="icon" href="favicon.png" type="image/x-icon">

        <!-- Loading Google Fonts --> 

        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>

        <!-- Loading Third Party Styles --> 

        <link rel="stylesheet" href="third-party/bootstrap/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="third-party/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="third-party/et-line/css/style.css">
        <link rel="stylesheet" href="third-party/elegant-icons/css/style.css">
        <link rel="stylesheet" href="third-party/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="third-party/pe-icon-7-stroke/css/helper.css">
        <link rel="stylesheet" href="third-party/nivo-lightbox/css/nivo-lightbox.css" /> 
        <link rel="stylesheet" href="third-party/nivo-lightbox/themes/default/default.css"/>
        <link rel="stylesheet" href="third-party/animate/css/animate.css"> 
        <link rel="stylesheet" href="third-party/owl/css/owl.carousel.css"> 
        <link rel="stylesheet" href="third-party/owl/css/owl.theme.css">
        <link rel="stylesheet" href="third-party/form-validation/css/formValidation.min.css">
        <link rel="stylesheet" href="stylesheets/timeline.css">
        <!--        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        -->
        
         <!--conekta-->
        <script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js">
        Conekta.setPublishableKey('key_CpEYzTWyhytV9nztCro9HMQ');
        </script>
        
          
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/pagos.css">

        <!-- Script for IE < 9 -->

        <!--[if lt IE 9]>
                <script src="third-party/respond/js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="one-page">

        <!-- Page Loader -->

        <div class="loader">
            <div class="spinner"></div>
        </div><!-- End of Page Loader -->

        <!-- Page Content + Uncover Footer Body -->

        <div class="page-content uncover-footer-body">

            <!-- Header -->

            <header class="navigation transparent dark-dropdown">	

                <!-- Header Wrapper -->

                <div class="main-nav nav-highlight header-right full-width sticky" style="background-color: #000">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <a href="#" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <ul class="bar-icon-wrapper">
                                        <li class="bar-icon"></li>
                                        <li class="bar-icon"></li>
                                        <li class="bar-icon"></li>
                                    </ul>
                                </a>

                                <!-- Logo -->

                                <a class="logo" href="index.php">
                                    <img alt="image" src="images/Brassetti_blanco.png" />
                                </a>
                            </div>

                            <div class="navbar-container">
                                <div class="navbar-collapse nav-collapse collapse collapsing-nav">

                                    <!-- Header Links -->

                                    <ul class="nav navbar-nav">
                                        <li class="dropdown active">
                                            <a href="index.php#javier_diaz">Javier DÃ­az Brassetti</a>
                                        </li>
                                        <li>
                                            <a href="index.php#publicaciones">Publicaciones</a>
                                        </li>
                                        <li >
                                            <a href="index.php#talleres">Talleres</a>
                                        </li>
                                        <li >
                                            <a href="index.php#libro">Libro</a>
                                        </li>
                                        <li >
                                            <a href="http://desarrolloblick.esy.es/wordpress/">Blog</a>
                                        </li>
                                        <li >
                                            <a href="index.php#contact">Contacto</a>
                                        </li>
                                    </ul>                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header><!-- End of Header -->
            <div class="uncover-footer-content">
                 <section  class="section-colored clearfix no-margin" style="background: #fff;">


                    <div class="row pad-top-25 pad-bot-25 ">
                        <div class="col-md-8 col-md-offset-2 text-center form-style"  id="contact_form">
                            <div class="col-sm-12  mar-top-100 " >
                                <h3>LLENA LOS SIGUIENTES CAMPOS</h3>
                            </div>
                            <form action="conekta_card/MyConekta.php" method="post" name="libro" class="col-md-12 form-theme form-md" id="card-form">
                              
                                    
                                <div class="col-sm-12  mar-top-50 " id="contact_body">
                                    <hr style="color: #D8D8D8;background-color: #D8D8D8;height: 0.5px;">
                                    <h3 class="mar-top-50">CANTIDAD DE LIBROS</h3>
                                    <div class="mar-top-30 center-block">
                                        <div class="col-sm-2 mar-top-30">
                                            <div class="form-group"  id="name-group" >
                                                <label>Libros</label>
                                                <input type="text" class="form-control" name="cantidad"  onKeyUp="calcular()" style="text-align-last: center" >
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mar-top-30">
                                            <div class="form-group"  id="name-group" >
                                                <label>Precio Del Libro</label>
                                                <input type="text"  class="form-control" name="precio"   placeholder="$250" style="border: transparent;background-color: transparent;text-align-last: center;font-family:sans-serif;color: #000;size: 30px">
                                            </div>
                                        </div>   


                                        <div class="col-sm-2 mar-top-30">
                                            <div class="form-group"  id="name-group" >
                                                <label >Tolal</label>
                                                <input type="text" class="form-control" name="total" style="border: transparent;background-color: transparent;text-align-last: center;font-family:sans-serif;"  >
                                            </div>
                                        </div> 
                                    </div>    


                                    <div class="col-sm-12  mar-top-50" >
                                        <hr style="color: #D8D8D8;background-color: #D8D8D8;height: 0.5px;">
                                        <h3 class="mar-top-50">DATOS PERSONALES</h3>
                                    </div>

                                    <div class="col-sm-6 mar-top-30">
                                        <div class="form-group"  id="name-group" >

                                            <input type="text" class="form-control" name="name" placeholder="Nombre">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mar-top-30">
                                        <div class="form-group">

                                            <input type="email" id="email-group" class="form-control" name="email" placeholder="Correo Electrónico">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mar-top-30"> 
                                        <div class="form-group">

                                            <input type="text" class="form-control" name="phone" placeholder="Teléfono">
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-6 mar-top-30">
                                             <div class="form-group">
                                                     <label>Teléfono de Casa (opcional):</label>
                                                     <input type="text" class="form-control" name="phoneNumber_2" placeholder="Telefono:">
                                             </div>
                                     </div>-->

                                    <div class="col-sm-12  mar-top-50 " >
                                        <hr style="color: #D8D8D8;background-color: #D8D8D8;height: 0.5px;">
                                        <h3 class="mar-top-50">DIRECCIÓN</h3>
                                    </div>
                                    <div class="col-sm-6 mar-top-30">
                                        <div class="form-group">

                                            <input type="text" class="form-control" name="street" placeholder="Calle">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mar-top-30">
                                        <div class="form-group">

                                            <input type="text" class="form-control" name="ext_number" placeholder="N° Exterior">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mar-top-30">
                                        <div class="form-group">

                                            <input type="text" class="form-control" name="int_number" placeholder="N° Interior">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mar-top-30">
                                        <div class="form-group">

                                            <input type="text" class="form-control" name="colony" placeholder="Colonia">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mar-top-30">
                                        <div class="form-group">

                                            <input type="text" class="form-control" name="city" placeholder="Ciudad">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mar-top-30">
                                        <div class="form-group">

                                            <input type="text" class="form-control" name="state" placeholder="Delegación o Municipio">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mar-top-30">
                                        <div class="form-group">

                                            <input type="text" class="form-control" name="postal_code" placeholder="Código Postal">
                                        </div>
                                    </div>
                                    <div class="col-sm-12  mar-top-50"  >
                                        <hr style="color: #D8D8D8;background-color: #D8D8D8;height: 0.5px;">
                                         <div id="contact_results"></div>
                                        <h3 class="mar-top-50">DATOS DE LA TARJETA</h3>
                                    </div>
                                     
                                    <div class="col-sm-6 mar-top-40">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="card_name" data-conekta="card[name]" placeholder="Nombre del Tarjetahabiente">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mar-top-40">
                                        <div class="form-group">

                                            <input type="text" class="form-control" name="card_number" data-conekta="card[number]" placeholder="Número de Tarjeta (XXXX-XXXX-XXXX-XXXX)">
                                        </div>
                                    </div>

                                    <div class="mar-top-30">       
                                        <div class="col-sm-2 form-group ">
                                            <label >Fecha de vencimiento</label> 
                                            <input type="text" class="form-control"  data-conekta="card[exp_month]" name="card_month" placeholder="Mes (MM)">
                                        </div>
                                        <div class="col-sm-2 form-group">
                                            <label style="color: white">Fecha de vencimiento</label>
                                            <input type="text" class="form-control" data-conekta="card[exp_year]" name="card_year" placeholder="Año (AAAA)">
                                        </div>
                                        <div class="col-sm-2 form-group">
                                            <label style="color: white">Fecha de vencimiento</label>
                                            <input type="text" class="form-control"  data-conekta="card[cvc]" name="card_cvc" placeholder="CVC">
                                        </div>
                                    </div>


                                    <div class="col-sm-6 col-sm-offset-3">
                                        <button type="submit"  class="btn btn-theme form-submit letter-spacing-3 mar-top-30" id="submit_btn" data-dismiss="modal">&nbsp;Pagar&nbsp;</button>
                                    </div>


                                </div>		
                            </form>
                        </div>	
                    </div>
                </section>
               



     
                 


 

            <footer class="footer footer-reveal footer-plain no-margin-top">
                <div class="uncover-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <ul class="list-unstyled list-inline footer-inline-links">

                                    <li><a href="#javier_diaz">Javier Diaz Brassetti</a></li>
                                    <li><a href="http://desarrolloblick.esy.es/wordpress/">Blog</a></li>
                                    <li><a href="#contact">Contacto</a></li>

                                </ul>
                                <ul class="social-icons si-light si-solid circle color list-inline list-unstyled pad-top-50">
                                    <li><a class="facebook" href="https://www.facebook.com/Javier-D%C3%ADaz-Brassetti-1070150726370573/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#fakelink"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#fakelink"><i class="fa fa-youtube"></i></a></li>
                                </ul>				
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- End of Footer Reveal -->	

        </div><!-- End of Page Content + Uncover Footer Body -->

        <!-- Loading Third Party Scripts -->

        <script src="third-party/jquery/jquery.min.js"></script>
        <script src="third-party/easing/js/jquery.easings.min.js"></script>
        <script src="third-party/bootstrap/js/bootstrap.min.js"></script>	
        <script src="third-party/nivo-lightbox/js/nivo-lightbox.min.js"></script>
        <script src="third-party/owl/js/owl.carousel.js"></script>
        <script src="third-party/isotope/js/isotope.pkgd.min.js"></script> 
        <script src="third-party/counter-up/js/jquery.counterup.min.js"></script>
        <script src="third-party/form-validation/js/formValidation.js"></script>
        <script src="third-party/form-validation/js/framework/bootstrap.min.js"></script>
        <script src="third-party/waypoint/js/waypoints.min.js"></script>
        <script src="third-party/wow/js/wow.min.js"></script>
        <script src="third-party/smooth-scroll/js/smoothScroll.js"></script>
        <script src="third-party/jquery-parallax/js/jquery.parallax.js"></script>
        <script src="third-party/jquery-parallax/js/jquery.localscroll.min.js"></script>
        <script src="third-party/jquery-parallax/js/jquery.scrollTo.js"></script>



        <!-- Loading Theme's Scripts -->

        <script src="js/scripts.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/pago.js"></script>
        <!-- conekta functions -->
        <script type="text/javascript">
         $(function () {
            $("#card-form").submit(function (event) {
            var $form = $(this);
            // Previene hacer submit más de una vez
            $form.find("button").prop("disabled", true);
            Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
            return false;
            });
        });
            
        var conektaSuccessResponseHandler = function (token) {
            var $form = $("#card-form");
            console.log(token); 
            $form.append($("<input type='hidden' name='conektaTokenId'>").val(token.id));
            //$form.get(0).submit();
            var proceed = true;
            $("#contact_form input[required=true], #contact_form input[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){
                    $(this).css('border-color','red'); 
                    proceed = false; 
                }
                
                    
            });
           
            if(proceed) {
                post_data = $form.serialize();
                console.log(post_data);
                $.post('conekta_card/MyConekta.php', post_data, function(response){  
                    if(response.type == 'error'){ //load json data from server and output message     
                        output = '<div class="error">'+response.text+'</div>';
                    }else{
                        output = '<div class="success">'+response.text+'</div>';
                        //reset values in all input fields
                        //$("#contact_form  input[required=true], #contact_form input[required=true]").val(''); 
                    }
                  //  $("#contact_form #contact_body").slideUp(); //hide form after success
                    $("#contact_results").html(output);
                    document.getElementById("card-form").reset();
                }, 'json');
            }
        };
        var conektaErrorResponseHandler = function (response) {
            console.log(response);
            console.log(response);
            console.log(response);
            var $form = $("#card-form");
            $form.find(".card-errors").text(response.message);
            $form.find("button").prop("disabled", false);
        };
        </script>


        <script type="text/javascript">
            function calcular() {
                var cantidad = document.libro.cantidad.value;
                var precio = 250;
                try {
                    //Calculamos el número escrito:
                    cantidad = (isNaN(parseInt(cantidad))) ? 0 : parseInt(cantidad);
                    //precio = (isNaN(parseInt(precio)))? 0 : parseInt(precio);
                    document.libro.total.value = cantidad * precio;
                }
                //Si se produce un error no hacemos nada
                catch (e) {
                }
            }
        </script>

        <!-- Google Analytics Tracking -->


    </body>
</html>