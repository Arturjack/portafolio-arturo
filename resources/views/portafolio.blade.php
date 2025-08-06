<!-- Página web
    Arturo Rodriguez Rodriguez
    Sistemas Operativos      Grupo: 01 
    Prof. Ing. Cruz Sergio Aguilar Diaz-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portafolio</title>
    @vite(['resources/js/app.js', 'resources/scss/app.scss'])
</head>

<body>
    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="#">Arturo</a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="#sobremi" onclick="seleccionar()">SOBRE MI</a></li>
                    <li><a href="#skills" onclick="seleccionar()">SKILLS</a></li>
                    <li><a href="#curriculum" onclick="seleccionar()">CURRICULUM</a></li>
                    <li><a href="#portafolio" onclick="seleccionar()">PORTAFOLIO</a></li>
                    <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="{{ asset('images/hero1.png') }}" alt="">
            </div>
            <h1>ARTURO RODRIGUEZ</h1>
            <h2>Ingeniero en Computación</h2>
            <div class="redes">
                <a href="https://www.facebook.com/profile.php?viewas=100000686899395&id=100004197990675"
                    target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://twitter.com/?lang=es" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.skype.com/es/" target="_blank"><i class="fa-brands fa-skype"></i></a>
                <a href="https://www.linkedin.com/in/arturo-rodriguez-rodriguez-b60558216" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://instagram.com/rarturorodriguez?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i
                        class="fa-brands fa-instagram"></i></i></a>
            </div>
        </div>
    </section>

    <!-- SECCION SOBRE MI -->
    <section id="sobremi" class="sobremi">
        <div class="contenido-seccion">
            <h2>Sobre Mí</h2>
            <p><span>Hola, soy Arturo Rodriguez.</span> Termine una carrera técnica en administración contable en 2018 ,
                y estoy en busca de un nuevo trabajo. Actualmente estoy cursando la carrera de <strong>Ingeniería en Computación</strong>
                en la Facultad de Ingeniería, <strong>UNAM</strong>. Me encanta estar al tanto de las últimas tendencias y tecnologías, y
                siempre estoy buscando maneras de mejorar mis habilidades.</p>

            <div class="fila">
                <!-- datos personales -->
                <div class="col">
                    <h3>Datos Personales</h3>
                    <ul>
                        <li>
                            <strong>Cumpleaños</strong>
                            11-06-2003
                        </li>
                        <li>
                            <strong>Teléfono</strong>
                            5555800010
                        </li>
                        <li>
                            <strong>Email</strong>
                            arturorodriguez2213@gmail.com
                        </li>
                        <li>
                            <strong>Website</strong>
                            www.example.com
                        </li>
                        <li>
                            <strong>Dirección</strong>
                            Alvaro Obregón,CDMX
                        </li>
                        <li>
                            <strong>Cargo</strong>
                            <span>FREELANCER</span>
                        </li>
                    </ul>
                </div>

                <!-- intereses -->
                <div class="col">
                    <h3>Intereses</h3>
                    <div class="contenedor-intereses">
                        <div class="interes">
                            <i class="fa-solid fa-award"></i>
                            <span>CURSOS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-car"></i>
                            <span>AUTOS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-music"></i>
                            <span>MÚSICA</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-bowl-food"></i>
                            <span>COMIDA</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-gamepad"></i>
                            <span>JUEGOS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-book"></i>
                            <span>LIBROS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-person-swimming"></i>
                            <span>NATACIÓN</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-video"></i>
                            <span>CINE</span>
                        </div>

                    </div>
                </div>
            </div>
            <button>
                <a class="btn" href="{{asset('/files/CV_Arturo_Rodriguez_Rodriguez.pdf')}}" target="_blank">
                    Descargar CV <i class="fa-solid fa-download"></i>
                </a>
                <span class="overlay"></span>
            </button>
        </div>
    </section>

    <!-- SECCION SKILLS -->
    <section class="skills" id="skills">
        <div class="contenido-seccion">
            <h2>Skills</h2>
            <div class="fila">
                <!-- Technical Skill -->
                <div class="col">
                    <h3>Technical Skills</h3>

                    <div class="skill">
                        <span>Python</span>
                        <div class="barra-skill">
                            <div class="progreso" data-porcentaje="90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <span>HTML & CSS</span>
                        <div class="barra-skill">
                            <div class="progreso" data-porcentaje="90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <span>Lenguaje C</span>
                        <div class="barra-skill">
                            <div class="progreso" data-porcentaje="85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <span>PHP</span>
                        <div class="barra-skill">
                            <div class="progreso" data-porcentaje="90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <span>Javascript</span>
                        <div class="barra-skill">
                            <div class="progreso" data-porcentaje="85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Professional Skills -->
                <div class="col">
                    <h3>Professional Skills</h3>

                    <div class="skill">
                        <span>Comunicación</span>
                        <div class="barra-skill">
                            <div class="progreso" data-porcentaje="90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <span>Trabajo en Equipo</span>
                        <div class="barra-skill">
                            <div class="progreso" data-porcentaje="95%">
                                <span>95%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <span>Capacidad de adaptación</span>
                        <div class="barra-skill">
                            <div class="progreso" data-porcentaje="99%">
                                <span>99%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <span>SCRUM</span>
                        <div class="barra-skill">
                            <div class="progreso" data-porcentaje="90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <span>Resolución de problemas</span>
                        <div class="barra-skill">
                            <div class="progreso" data-porcentaje="95%">
                                <span>95%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION CURRICULUM -->
    <section id="curriculum" class="curriculum">
        <div class="contenido-seccion">
            <h2>Curriculum</h2>
            <div class="fila">
                <div class="col izquierda">
                    <h3>Educación</h3>
                    <div class="item izq">
                        <h4>Ingenieria en Computación</h4>
                        <span class="casa">Universidad Nacional Autonoma de México (UNAM) </span>
                        <span class="fecha">2021 - En curso</span>
                        <p style="text-align: justify">Actualmente me encuentro estudiando la carrera de "Ingenieria en computación" en la Universidad Nacional Autonoma de México, Facultad de Ingeniería.</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>ENP #5 "José Vasconcelos", UNAM</h4>
                        <span class="casa">Universidad Nacional Autonoma de México (UNAM)</span>
                        <span class="fecha">2018 - 2021</span>
                        <p style="text-align: justify">Durante mi tiempo en la Escuela Nacional Preparatoria N°5 "José Vasconcelos" de la UNAM, me gradué con un destacado promedio de excelencia. Mi enfoque académico se centró en el área de las Ciencias Físico-Matemáticas y las Ingenierías, donde adquirí habilidades sólidas y conocimientos profundos.</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Carrera técnica en Administración Contable por la SEP</h4>
                        <span class="casa">Secretaria de Educación Pública (SEP)</span>
                        <span class="fecha">2017</span>
                        <p style="text-align: justify">Completé con éxito una Carrera Técnica en Administración Contable, otorgada por la Secretaría de Educación Pública (SEP), con una duración total de 960 horas. Durante este programa, adquirí conocimientos especializados en administración y contabilidad, desarrollando habilidades prácticas que respaldan mi capacidad para abordar tareas financieras y administrativas de manera efectiva.</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                </div>

                <div class="col derecha">
                    <h3>Experiencia de trabajo</h3>
                    <div class="item der">
                        <h4>Líder Coordinador de Proyectos de Software</h4>
                        <span class="casa">Agencia de Innovación Pública (ADIP)</span>
                        <span class="fecha">Antiguedad: 8 meses</span>
                        <p style="text-align: justify">Encargado de la gestión integral de proyectos de desarrollo de software, coordinando equipos multidisciplinarios y asegurando la entrega de soluciones tecnológicas en tiempo y forma. Responsable de la asignación de tareas, evaluación de riesgos, comunicación con stakeholders y garantía de la calidad del producto final. Habilidad para traducir requerimientos técnicos y de negocio en planes de acción efectivos, fomentando la colaboración y el cumplimiento de objetivos estratégicos.</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                            <button class="modal-btn" data-modal="modal1">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Enlace de Servicios TIC</h4>
                        <span class="casa">Agencia de Innovación Pública (ADIP)</span>
                        <span class="fecha">Antiguedad: 1 mes</span>
                        <p style="text-align: justify">Profesional encargado de facilitar la comunicación y coordinación entre las áreas usuarias y el departamento de Tecnologías de la Información y Comunicaciones (TIC), asegurando una atención oportuna, eficaz y de calidad en los servicios tecnológicos. Responsable de identificar necesidades, gestionar requerimientos y participar activamente en la mejora continua de procesos relacionados con los sistemas informáticos y de comunicación.</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                            <button class="modal-btn" data-modal="modal2">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Becario Desarrollador Web • Sistema Integra • DGOAE UNAM</h4>
                        <span class="casa">Dirección General de Orientación y Atención Educativa (DGOAE) UNAM</span>
                        <span class="fecha">Antiguedad: 7 meses</span>
                        <p style="text-align: justify">Fui becario en la Dirección General de Orientación y Atención Educativa (DGOAE) de la UNAM, donde colaboré en el desarrollo y mantenimiento del sistema INTEGRA, la plataforma encargada de gestionar todas las becas ofrecidas por la Universidad, tanto gubernamentales como de entidades privadas. Mi rol incluyó el diseño de nuevos módulos y funcionalidades, mantenimiento de los ya existentes, y la documentación detallada de cada desarrollo. Trabajé con tecnologías como JavaScript, jQuery, CSS, Bootstrap 5, PHP, MySQL y HTML, contribuyendo a mejorar la funcionalidad del sistema.</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                            <button class="modal-btn" data-modal="modal3">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Becario Desarrollador de Software • Proyecto PAPIME</h4>
                        <span class="casa">UNAM Facultad de Ingeniería</span>
                        <span class="fecha">Antiguedad: 1 año</span>
                        <p style="text-align: justify">Colaboré en el proyecto DGAPA-PAPIME PE105724, desarrollando herramientas digitales para el análisis de ecuaciones diferenciales y análisis numérico. Implementé un chatbot en Python para Telegram enfocado en el envío de reactivos de opción múltiple, y programé algoritmos para la generación automatizada de estos reactivos en formato LaTeX.</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                            <button class="modal-btn" data-modal="modal4">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Becario PILARES</h4>
                        <span class="casa">PILARES CDMX</span>
                        <span class="fecha">Antiguedad: 1 año</span>
                        <p style="text-align: justify">Mis funciones eran hacer registros de las personas que acudían al espacio de Pilares, así como diseñar y organizar actividades comunitarias para diferentes grupos de edad.</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                            <button class="modal-btn" data-modal="modal5">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Freelance</h4>
                        <span class="casa">Técnico en instalación de Alexa</span>
                        <span class="fecha">Antiguedad: 1 año</span>
                        <p style="text-align: justify">Trabajé como freelancer en la instalación y mantenimiento de asistentes virtuales Alexa para clientes de distintos sectores y perfiles, brindando servicios de configuración, integración y soporte técnico.</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                            <button class="modal-btn" data-modal="modal6">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODALES -->
    <div class="modal" id="modal1">
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <img src="{{asset('images/experiencia/adip1.jpg')}}" alt="ADIP - Líder Coordinador">
        </div>
    </div>

    <div class="modal" id="modal2">
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <img src="{{asset('images/experiencia/adip2.jpg')}}" alt="ADIP - Enlace TIC">
        </div>
    </div>

    <div class="modal" id="modal3">
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <img src="{{asset('images/reconocimientos/7.jpg')}}" alt="DGOAE - Becario Desarrollador">
        </div>
    </div>

    <div class="modal" id="modal4">
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <img src="{{asset('images/experiencia/papime.jpg')}}" alt="PAPIME - Becario Desarrollador">
        </div>
    </div>

    <div class="modal" id="modal5">
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <img src="{{asset('images/experiencia/pilares.jpg')}}" alt="PILARES - Becario">
        </div>
    </div>

    <div class="modal" id="modal6">
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <img src="{{asset('images/experiencia/freelance.jpg')}}" alt="Freelance - Técnico Alexa">
        </div>
    </div>

    <!-- SECCION PORTAFOLIO -->
    <section id="portafolio" class="portafolio">
        <div class="contenido-seccion">
            <h2>PORTAFOLIO</h2>
            <div class="galeria">
                <div class="proyecto">
                    <a class="recon" href="{{ route('reconocimientos') }}">
                        <img src="{{asset('images/recon.jpg')}}" alt="">
                        <div class="overlay">
                            <h3>Reconocimientos</h3>
                            <p>Colección</p>
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <a class="cert" href="{{ route('certificaciones') }}">
                        <img src="{{asset('images/certi.jpg')}}" alt="">
                        <div class="overlay">
                            <h3>Certificaciones</h3>
                            <p>Colección</p>
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <a class="proy" href="{{ route('diseños') }}">
                        <img src="{{asset('images/foto.jpg')}}" alt="">
                        <div class="overlay">
                            <h3>Diseños digitales</h3>
                            <p>Colección</p>
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <a class="comu" href="archivos/Trabajo comunitario.pdf"
                        download="TrabajoComunitario_Arturo Rodriguez Rodriguez">
                        <img src="{{asset('images/comu.jpg')}}" alt="">
                        <div class="overlay">
                            <h3>Trabajo comunitario</h3>
                            <p>Fotografías</p>
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <img src="{{asset('images/p5.jpg')}}" alt="">
                    <div class="overlay">
                        <h3>Proyectos</h3>
                        <p>Recopilación</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="{{asset('images/bot.jpg')}}" alt="">
                    <div class="overlay">
                        <h3>Diseño Bot</h3>
                        <p>Evidencias</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION CONTACTO -->
    <section id="contacto" class="contacto">
        <div class="contenido-seccion">
            <h2>CONTACTO</h2>
            <div class="fila">
                <!-- Formulario -->
                <div class="col">
                    <input type="text" placeholder="Tú Nombre">
                    <input type="text" placeholder="Número telefónico">
                    <input type="text" placeholder="Dirección de correo">
                    <input type="text" placeholder="Tema">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                    <button>
                        Enviar Mensaje <i class="fa-solid fa-paper-plane"></i>
                        <span class="overlay"></span>
                    </button>
                </div>
                <!-- Mapa -->
                <div class="col">
                    <img src="{{asset('images/mapa.jpg')}}" alt="">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                Alvaro Obregón, Ciudad de México, C.P. 01150
                            </li>
                            <li>
                                <i class="fa-solid fa-mobile-screen"></i>
                                Llama: 59274795
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                Email: arturorodriguez2213@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>
        </a>
        <div class="redes">
            <a href="https://www.facebook.com/profile.php?viewas=100000686899395&id=100004197990675" target="_blank"><i
                    class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com/?lang=es" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.skype.com/es/" target="_blank"><i class="fa-brands fa-skype"></i></a>
            <a href="https://www.linkedin.com/in/arturo-rodriguez-rodriguez-b60558216" target="_blank"><i
                    class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://instagram.com/rarturorodriguez?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i
                    class="fa-brands fa-instagram"></i></i></a>
        </div>
    </footer>
</body>

</html>