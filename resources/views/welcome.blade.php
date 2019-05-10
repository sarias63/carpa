<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stoppy</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"><!--importacion de css-->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Programa tus proximos <b>viajes</b>   
                </div> 
            </div>
        </div>
        <!--Inicio del footer-->
        <link rel="stylesheet" href="css/footer.css">
        <div class="info-container">
            <div class="info-main">
                <h3>Contactenos</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit assumenda quibusdam enim minima nostrum, hic, vitae dolore commodi modi cum iste porro doloremque ullam eligendi soluta aspernatur voluptates distinctio quasi.</p>
                <a href="#">Mas Informacion</a>
            </div>
        </div>
        
        <footer>
            <div class="footer-container">
                <div class="footer-main">
                    <div class="footer-columna">
                        <h3>Suscríbete</h3>
                        <input type="email" placeholder="Escriba su Correo">
                        <input type="submit" value=" Suscribirse">
                    </div>
    
                    <div class="footer-columna">
                        <h3>Dirección</h3>
                        <span class="fa fa-map-marker"><p>California</p></span>
                        <span class="fa fa-phone"><p>(+1)3222499695</p></span>
                        <span class="fa fa-envelope"><p>info@stoppy.com</p></span>
                    </div>
    
                    <div class="footer-columna">
                        <h3>Sobre Nosotros</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur repellat autem, error iste odio atque eum assumenda rem aliquam, consequatur excepturi reiciendis corrupti velit aperiam?</p>
                    </div>
                </div>
            </div>
    
            <div class="footer-copy-redes">
                <div class="main-copy-redes">
                    <div class="footer-copy">
                        &copy; 2019,Siguenos en nuestras redes.
                    </div>
                    <div class="footer-redes">
                        <a href="#" class="fa ico-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-youtube-play"></a>
                        <a href="#" class="fa fa-instagram"></a>
                    </div>
                </div>
            </div>
        </footer>
        		<!-- WhatsHelp.io widget -->
        <script type="text/javascript">
            (function () {
                var options = {
                    whatsapp: "+573126583651", // WhatsApp number
                    call_to_action: "write us ......", // Call to action
                    position: "right", // Position may be 'right' or 'left'
                };
                var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
        </script>
    </body>
</html>
