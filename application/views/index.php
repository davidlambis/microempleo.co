<body id="page-top">

<script>
//defino una serie de varibles Array para cada ciudad
var categoriaSeleccionar=new Array("");
var categoriaClasesParticulares=new Array("Inglés","Español","Biología","Física","Química","Matemáticas","Piano","Guitarra","Natación","Conducción")
var categoriaTransporte=new Array("Recorridos","Mensajeros","Conductores","Mudanzas/Acarreos","Transporte Particular")
var categoriaMantenimientoYConstruccion=new Array("Cerrajeros","Jardineros","Plomeros","Albañiles","Carpinteros","Instalaciones de gas","Pintores","Lavadores de Muebles")
var categoriaReparacionesElectricasYElectronicas=new Array("Computadores","Equipos Electrónicos","Aires Acondicionados","Electricistas","Energías Renovables","Ascensores","Reparación de Celulares")
var categoriaFiestasYEventos=new Array("Payasos","Decoración de Eventos","Fotografía","Meseros","Chefs/Cocineros","Modelos/Impulsadoras","Animadores","DJs","Pastelería")
var categoriaAutomoviles=new Array("Lavado de Autos","Mecánica","Tapicería","Electricidad Automotriz")
var categoriaSaludYBelleza=new Array("Cuidador de Adultos","Enfermería","Entrenador Personal","Estilista","Manicurista","Fisioterapia")
var categoriaDigital=new Array("Diseño Web","Desarrollo de Software","Aplicaciones Móviles","Diseño Gráfico","Marketing Digital")
var categoriaRopa=new Array("Ajustes de Ropa","Confección","Zapatería","Alquiler de Vestidos y Trajes")
var categoriaServiciosDomesticos=new Array("Empleadas Domésticas","Niñeras")


function cambia_categoria(){
    
    var categoria
    categoria = document.formregistro.categoria[document.formregistro.categoria.selectedIndex].value
    
        mis_subcategorias=eval("categoria" + categoria)
    
        num_subcategorias = mis_subcategorias.length
       
        document.formregistro.subcategoria.length = num_subcategorias
        
        for(i=0;i<num_subcategorias;i++){
           document.formregistro.subcategoria.options[i].value=mis_subcategorias[i]
           document.formregistro.subcategoria.options[i].text=mis_subcategorias[i]
       }   
    document.formregistro.subcategoria.options[0].selected = true
    
}
</script>



    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top" style="
    height: 80px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="http://microempleo.co/assets/img/logo.png" style="height: 60px;"</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                
                    <li>
                        <a class="page-scroll" href="#features">Categorías</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Regístrate</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <header>
        <div class="container">
            <div class="row">
            <div class="overlay" style="height: 100%;
    width: 100%;
    background-color: rgba(0,0,0,.5);
    position: absolute;
    top: 0;
    left: 0;">
              </div>         
                <div class="col-sm-12">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1 style="color: #fff;font-size: 80px">Tú eres el indicado!</h1>
                            <h1 style="color: #fff;font-size: 40px">Regístrate y obtendrás ofertas de microempleos que se ajustan a tus competencias</h1>  
                            <a href="#contact" class="btn btn-outline btn-xl page-scroll">Regístrate ahora!</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </header>

    
    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2 style="color:#000">Categorías de MicroEmpleos</h2>
                        <p class="text-muted">Revisa cuáles son las categorías que se adaptan a tus competencias e inscríbete!</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-12">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="clearfix">
                            <div class="col-md-3">
                                <div class="feature-item">
                                    <i class="fa fa-pencil"></i>
                                    <h3 style="color:#000">Clases Particulares</h3>
                                    <p class="text-muted">Inglés<br>Español<br>Biología<br>Física<br>Química<br>Matemáticas<br>Piano<br>Guitarra<br>Natación<br>Conducción</p>
                                </div>     
                            </div>
                             <div class="col-md-3">
                                <div class="feature-item">
                                    <i class="fa fa-truck"></i>
                                    <h3 style="color:#000">Transporte</h3>
                                    <p class="text-muted">Recorridos<br>Mensajeros<br>Conductores<br>Mudanzas/Acarreos<br>Transporte Particular</p>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="feature-item">
                                    <i class="fa fa-wrench"></i>
                                    <h3 style="color:#000">Mantenimiento y Construcción</h3>
                                    <p class="text-muted">Cerrajeros<br>Jardineros<br>Plomeros<br>Albañiles<br>Carpinteros<br>Instalaciones de gas<br>Pintores<br>Lavado de Muebles</p>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="feature-item">
                                    <i class="fa fa-bolt"></i>
                                    <h3 style="color:#000">Reparaciones Eléctricas y Electrónicas</h3>
                                    <p class="text-muted">Computadores<br>Equipos electrónicos<br>Aires acondicionados<br>Electricistas<br>Energías Renovables<br>Ascensores<br>Reparación de Celulares</p>
                                </div>
                            </div>
                            </div>

                        <div class="clearfix">
                            <div class="col-md-3">
                               <div class="feature-item">
                                    <i class="fa fa-glass"></i>
                                    <h3 style="color:#000">Fiestas y Eventos</h3>
                                    <p class="text-muted">Payasos<br>Decoración de Eventos<br>Fotografía<br>Meseros<br>Chefs/Cocineros<br>Modelos/Impulsadoras<br>Animadores<br>DJs<br>Pastelería</p>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="feature-item">
                                    <i class="fa fa-car"></i>
                                    <h3 style="color:#000">Automóviles</h3>
                                    <p class="text-muted">Lavado de autos<br>Mecánica<br>Tapicería<br>Electricidad Automotriz</p>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="feature-item">
                                    <i class="fa fa-heartbeat"></i>
                                    <h3 style="color:#000">Salud y Belleza</h3>
                                    <p class="text-muted">Cuidador de Adultos<br>Enfermería<br>Entrenador Personal<br>Estilista<br>Manicurista<br>Fisioterapia</p>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="feature-item">
                                    <i class="fa fa-laptop"></i>
                                    <h3 style="color:#000">Digital</h3>
                                    <p class="text-muted">Diseño Web<br>Desarrollo de Software<br>Aplicaciones Móviles<br>Diseño Gráfico<br>Marketing Digital</p>
                                </div>
                            </div>
                            </div>
                           
                        <div class="clearfix">
                            <div class="col-md-3">
                                
                            </div>
                             <div class="col-md-3">
                                <div class="feature-item">
                                    <i class="fa fa-scissors"></i>
                                    <h3 style="color:#000">Ropa</h3>
                                    <p class="text-muted">Ajustes de Ropa<br>Confección<br>Zapatería<br>Alquiler de Vestidos y Trajes</p>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="feature-item">
                                    <i class="fa fa-home"></i>
                                    <h3 style="color:#000">Servicios Domésticos</h3>
                                    <p class="text-muted">Empleadas Domésticas<br>Niñeras</p>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="feature-item">
                                    
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>  
                </div>
            </div>
    </section>

    <section id="contact"  class="cta">
        <div class="cta-content">
        <div class="container">
             <h1 style="color: whit50e ">Categoría:</h1>

             <form role="form" id="form-registro" name="formregistro" action="" method="POST">

                <select name="categoria" onchange="cambia_categoria()">
                <option selected="selected" value="Seleccionar">Seleccionar...
                </option>
                <option value="ClasesParticulares">Clases Particulares
                </option>
                <option value="Transporte">Transporte
                </option><option value="MantenimientoYConstruccion">Mantenimiento y Construcción
                </option><option value="ReparacionesElectricasYElectronicas">Reparaciones Eléctricas y Electrónicas
                <option value="FiestasYEventos">Fiestas y Eventos
                </option>
                </option><option value="Automoviles">Automóviles
                </option><option value="SaludYBelleza">Salud y Belleza
                </option><option value="Digital">Digital
                </option><option value="Ropa">Ropa
                </option><option value="ServiciosDomesticos">Servicios Domésticos
                </option></select>
                <select name="subcategoria" required>
                </select>


                <h1 style="color: white ">Nombre Completo:</h1>
                <input type="text" name="nombres" class="form-control" value="" style="color: white;
                background: transparent;
                width: 45%;
                height: 35px;">
                 <h1 style="color: white ">Cédula:</h1>
                <input type="text" name="cedula" class="form-control" value="" style="color: white;
                background: transparent;
                width: 45%;
                height: 35px;">
                 <h1 style="color: white ">Celular:</h1>
                 <input type="text" name="celular" class="form-control" value="" style="color: white;
                background: transparent;
                width: 45%;
                height: 35px;">
                <h1 style="color: white ">Correo:</h1>
                <input type="text" name="correo" class="form-control" value="" style="color: white;
                background: transparent;
                width: 45%;
                height: 35px;"  >
                <h1 style="color: white ">Ciudad:</h1>
                <input type="text" name="ciudad" class="form-control" value="" style="color: white;
                background: transparent;
                width: 45%;
                height: 35px;"  >
                <h1 style="color: white ">Fecha de Nacimiento:</h1> 
                <div class="_5k_5"><span aria-describedby="js_3" class="_5k_4" data-type="selectors" data-name="birthday_wrapper" id="u_0_c"><span><select role="null" aria-haspopup="true" aria-controls="js_2" aria-label="Día" name="dia" id="day" title="Día" class="_5dba" required>
                <br> <option value="0" selected="1">Día</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select><select aria-label="Mes" name="mes" id="month" title="Mes" class="_5dba" required><option value="0" selected="1">Mes</option><option value="1">ene</option><option value="2">feb</option><option value="3">mar</option><option value="4">abr</option><option value="5">may</option><option value="6">jun</option><option value="7">jul</option><option value="8">ago</option><option value="9">sep</option><option value="10">oct</option><option value="11">nov</option><option value="12">dic</option></select><select aria-label="Año" name="año" id="year" title="Año" class="_5dba" required><option value="0" selected="1">Año</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option></select></span></span></div>

                
                <h1 style="color: whit50e ">Disponibilidad:</h1>
                <div class="mtm _5wa2 _5dbb" id="u_0_a"><span class="_5k_3" data-type="radio" data-name="availability_wrapper" id="u_0_b"><span class="_5k_2 _5dba"><input name="disponibilidad" value="Tiempo Completo" id="u_0_tc" type="radio" checked="true"><label class="_58mt" for="u_0_tc" >Tiempo Completo</label></span><span class="_5k_2 _5dba"><input name="disponibilidad" value="Día" id="u_0_dia" type="radio"><label class="_58mt" for="u_0_dia">Día</label></span><span class="_5k_2 _5dba"><input name="disponibilidad" value="Tarde" id="u_0_tarde" type="radio"><label class="_58mt" for="u_0_tarde">Tarde</label></span><span class="_5k_2 _5dba"><input name="disponibilidad" value="Noche" id="u_0_noche" type="radio"><label class="_58mt" for="u_0_noche">Noche</label></span></span><i class="_5dbc _5k_6 img sp_beZQzZ7Rg6Q sx_5ca7f2"></i><i class="_5dbd _5k_7 img sp_beZQzZ7Rg6Q sx_9c246c"></i></div>

                
                <h1 style="color: whit50e ">Género:</h1>
               <div class="mtm _5wa2 _5dbb" id="u_0_f"><span class="_5k_3" data-type="radio" data-name="gender_wrapper" id="u_0_g"><span class="_5k_2 _5dba"><input name="sexo" value="Mujer" id="u_0_d" type="radio" checked="true"><label class="_58mt" for="u_0_d" >Mujer</label></span><span class="_5k_2 _5dba"><input name="sexo" value="Hombre" id="u_0_e" type="radio"><label class="_58mt" for="u_0_e">Hombre</label></span></span><i class="_5dbc _5k_6 img sp_beZQzZ7Rg6Q sx_5ca7f2"></i><i class="_5dbd _5k_7 img sp_beZQzZ7Rg6Q sx_9c246c"></i></div><br>
                

                <p class="_58mv">Al hacer clic en "Registrarse", aceptas los <a href="http://www.pdf.investintech.com/preview/d4b6c172-8f19-11e6-89aa-002590d31986/index.html" id="terms-link" target="_blank" rel="nofollow">Términos y <br> Condiciones</a> de microempleo.co.</p>

               <input type="submit" class="Button" value="Registrarse" id="boton_registrar" 
               style="
                background-color:#44c767;
                -moz-border-radius:8px;
                -webkit-border-radius:8px;
                border-radius:8px;
                display:inline-block;
                cursor:pointer;
                color:#ffffff;
                font-family:Arial;
                font-size:20px;
                font-weight:normal;
                padding:13px 32px;
                text-decoration:none;"><br>
               
                </form>

            </div>
        </div>
        <div class="overlay"></div>
    </section> 

    <section id="contact" class="contact bg-primary">
        <div class="container">
            <div class="col-md-6" style="color: #3B5998; font-size: 100px;">
                 <a href="#" ><i class="fa fa-facebook-square" style="color: #3B5998"></i>   </a>              
             </div>
             <div class="col-md-6" style="color: #34af23; font-size: 100px;">
                 <i class="fa fa-whatsapp"></i>
                <p style="font-size: 40px; color: #000;">3175486194</p>
             </div>
           
        </div>
    </section>

    
