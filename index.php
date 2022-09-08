<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estefania Daumes</title>
    <meta name="description" content="¡Hola! Bienvenido a mi Portfolio Web. Mi nombre es Estefania Daumes y soy Desarrollador Web Fullstack Jr.">
    <meta name="author" content="Estefania Daumes">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,300&family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/3ca93e09ef.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Botón para abrir/cerrar barra de navegación-->
    <div class="toggler-btn">
        <i class="bi bi-x-lg close-btn d-none"></i>
        <i class="bi bi-list fs-5 open-btn"></i>
    </div>
    <!--Barra de navegación-->
    <aside>
        <nav id="navbar" class="sidebar hidebar">
            <div id="userInfo" class="d-flex flex-wrap justify-content-center mt-3">
                <img class="user-profile img-fluid" src="/images/user-profile.jpg" alt="Foto de Perfil">
                <span class="align-self-end edit-icon" data-bs-toggle="modal" data-bs-target="#editUserModal"><i class="bi bi-pencil-square" ></i></span>
                <a href="index.html"><h2 class="fs-4 fw-bold m-3">Estefania Daumes</h2></a>
                <ul class="social">
                    <a href="https://www.linkedin.com/in/estefan%C3%ADa-daumes-417916212/" target="_BLANK"><li><i class="bi bi-linkedin fs-5"></i></li></a>
                    <a href="https://github.com/FanyDmes/PortfolioEstefaniaDaumes" target="_BLANK"><li><i class="bi bi-github fs-5"></i></li></a>
                </ul>
            </div>
            <div id="nav-links">
                <ul class="navigation">
                  <li class="nav-item"><a href="#home"><i class="bi bi-house-door fs-4"></i>Inicio</a></li>
                  <li class="nav-item"><a href="#about"><i class="bi bi-person fs-4"></i>Sobre Mí</a></li>
                  <li class="nav-item"><a href="#skills"><i class="bi bi-diagram-3 fs-4"></i>Habilidades</a></li>
                  <li class="nav-item"><a href="#projects"><i class="bi bi-code fs-4"></i>Proyectos</a></li>
                  <li class="nav-item"><a href="#contact"><i class="bi bi-envelope fs-4"></i>Contacto</a></li>
                  <li class="nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="bi bi-box-arrow-up-right fs-4"></i>Login</a></li>
                </ul>
            </div>
            
        </nav>
    </aside>
    <!--Ventanas MODALES-->
    <!--Ventana Modal para login. TODO: Agregar atributos name para validar.-->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content section-info">
                <div class="modal-header">
                    <h5 class="modal-title">Ingresar</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <form action="" method="GET" class="form">
                <div class="modal-body">
                    <div class="m-3">
                        <label for="user" class="form-label">Usuario:</label>
                        <input id="user" type="text" class="form-control" pattern="[a-z0-9]{6,12}" title="El nombre de usuario solo acepta letras minúsculas, números y debe tener entre 6 y 12 carácteres." required>
                    </div>
                    <div class="m-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input id="password" type="password" class="form-control" pattern=".{6,}" title="La contraseña debe tener como mínimo 6 carácteres." required>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-outline-success">Login</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!--Ventana Modal para editar información del sidebar.-->
    <div class="modal fade" id="editUserModal" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content section-info">
                <div class="modal-header">
                    <h5 class="modal-title">Información personal</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <form action="" method="GET" class="form">
                <div class="modal-body">
                    <div class="m-3">
                        <label for="userName" class="form-label">Editar nombre:</label>
                        <input id="userName" type="text" class="form-control">
                    </div>
                    <div class="m-3">
                        <label for="userProfilePic" class="form-label">Cambiar foto de perfil:</label>
                        <input id="userProfilePic" type="file" class="form-control">
                    </div>
                    <div class="m-3">
                        <label for="userLinkedIn" class="form-label">Enlace de LinkedIn:</label>
                        <input id="userLinkedIn" type="text" class="form-control">
                    </div>
                    <div class="m-3">
                        <label for="userGitHub" class="form-label">Enlace de GitHub:</label>
                        <input id="userGitHub" type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-outline-success">Aceptar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!--Ventana Modal para editar Secciones del contenido.-->
    <div class="modal fade" id="sectionModal" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content section-info">
                <div class="modal-header">
                    <h5 class="modal-title">Editar sección</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <form action="" method="GET" class="form">
                <div class="modal-body">
                    <div class="m-3">
                        <i>Utiliza la caja de texto para modificar la información que se encuentra debajo del título de la sección.</i>
                        <textarea id="sectionText" name="sectionText" cols="30" rows="3" class="form-control mt-3" style="resize:none;" placeholder="Escribe aquí tu texto..."></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-outline-success">Aceptar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!--Ventana Modal para editar elementos educativos/laborales.-->
        <div class="modal fade" id="itemModal" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content section-info">
                <div class="modal-header">
                    <h5 class="modal-title">Editar elemento</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <form action="" method="GET" class="form">
                <div class="modal-body">
                    <div class="m-3">
                        <label for="itemTitle" class="form-label">Título/Puesto:</label>
                        <input id="itemTitle" type="text" class="form-control">
                    </div>
                    <div class="m-3">
                        <label for="itemDate" class="form-label">Período (Años):</label>
                        <input id="itemDate" type="number" class="form-control">
                    </div>
                    <div class="m-3">
                        <label for="itemTitle" class="form-label">Organismo/Institución:</label>
                        <input id="itemTitle" type="text" class="form-control">
                    </div>
                    <div class="m-3">
                        <label for="itemText">Información extra:</label>
                        <textarea id="itemText" name="sectionText" cols="30" rows="3" class="form-control mt-3" style="resize:none;" placeholder="Escribe aquí tu texto..."></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-outline-success">Aceptar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
            </div>
        </div>
    </div>

        <!--Ventana Modal para sumar elementos educativos/laborales.-->
        <div class="modal fade" id="itemPlus" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content section-info">
                    <div class="modal-header">
                        <h5 class="modal-title">Agregar elemento</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <form action="" method="GET" class="form">
                    <div class="modal-body">
                        <div class="m-3">
                            <label for="itemTitle" class="form-label">Título/Puesto:</label>
                            <input id="itemTitle" type="text" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="itemDate" class="form-label">Período (Años):</label>
                            <input id="itemDate" type="number" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="itemTitle" class="form-label">Organismo/Institución:</label>
                            <input id="itemTitle" type="text" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="itemText">Información extra:</label>
                            <textarea id="itemText" name="sectionText" cols="30" rows="3" class="form-control mt-3" style="resize:none;" placeholder="Escribe aquí tu texto..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-outline-success">Aceptar</button>
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <!--Ventana Modal para sumar habilidades.-->
        <div class="modal fade" id="skillPlus" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content section-info">
                    <div class="modal-header">
                        <h5 class="modal-title">Agregar habilidad/h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <form action="" method="GET" class="form">
                    <div class="modal-body">
                        <div class="m-3">
                            <label for="skillTitle" class="form-label">Habilidad/Tecnología:</label>
                            <input id="itemTitle" type="text" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="skillText" class="form-label">Texto interno:</label>
                            <input id="skillText" type="text" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="skillValue" class="form-label">Porcentaje de manejo (1-100):</label>
                            <input id="skillValue" type="number" class="form-control" min="1" max="100">
                        </div>
                        <div class="m-3">
                            <label for="skillIcon" class="form-label">Icono de habilidad (Opcional):</label>
                            <input id="skillIcon" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-outline-success">Aceptar</button>
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <!--Ventana Modal para editar habilidades.-->
        <div class="modal fade" id="skillEdit" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content section-info">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar habiliad</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <form action="" method="GET" class="form">
                    <div class="modal-body">
                        <div class="m-3">
                            <label for="skillTitle" class="form-label">Habilidad/Tecnología:</label>
                            <input id="itemTitle" type="text" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="skillText" class="form-label">Texto interno:</label>
                            <input id="skillText" type="text" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="skillValue" class="form-label">Porcentaje de manejo (1-100):</label>
                            <input id="skillValue" type="number" class="form-control" min="1" max="100">
                        </div>
                        <div class="m-3">
                            <label for="skillIcon" class="form-label">Icono de habilidad (Opcional):</label>
                            <input id="skillIcon" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-outline-success">Aceptar</button>
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!--Ventana Modal para agregar proyectos.-->
        <div class="modal fade" id="projectPlus" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content section-info">
                    <div class="modal-header">
                        <h5 class="modal-title">Agregar proyecto</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <form action="" method="GET" class="form">
                    <div class="modal-body">
                        <div class="m-3">
                            <label for="projectTitle" class="form-label">Título del proyecto:</label>
                            <input id="itemTitle" type="text" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="projectTitle" class="form-label">Subtitulo (En la imagen):</label>
                            <input id="itemTitle" type="text" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="skillIcon" class="form-label">Imagen del proyecto:</label>
                            <input id="skillIcon" type="file" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="projectDescription">Descripción del proyecto:</label>
                            <textarea id="itemText" name="sectionText" cols="30" rows="3" class="form-control mt-3" style="resize:none;" placeholder="Escribe aquí tu texto..."></textarea>
                        </div>
                        <div class="m-3">
                            <label for="projectLive" class="form-label">Link del Live Demo:</label>
                            <input id="projectLive" type="text" class="form-control">
                        </div>
                        <div class="m-3">
                            <label for="projectRepo" class="form-label">Link del Repositorio:</label>
                            <input id="projectRepo" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-outline-success">Aceptar</button>
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

            <!--Ventana Modal para editar proyectos.-->
            <div class="modal fade" id="projectEdit" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content section-info">
                        <div class="modal-header">
                            <h5 class="modal-title">Editar proyecto</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <form action="" method="GET" class="form">
                        <div class="modal-body">
                            <div class="m-3">
                                <label for="projectTitle" class="form-label">Título del proyecto:</label>
                                <input id="itemTitle" type="text" class="form-control">
                            </div>
                            <div class="m-3">
                                <label for="projectTitle" class="form-label">Subtitulo (En la imagen):</label>
                                <input id="itemTitle" type="text" class="form-control">
                            </div>
                            <div class="m-3">
                                <label for="skillIcon" class="form-label">Imagen del proyecto:</label>
                                <input id="skillIcon" type="file" class="form-control">
                            </div>
                            <div class="m-3">
                                <label for="projectDescription">Descripción del proyecto:</label>
                                <textarea id="itemText" name="sectionText" cols="30" rows="3" class="form-control mt-3" style="resize:none;" placeholder="Escribe aquí tu texto..."></textarea>
                            </div>
                            <div class="m-3">
                                <label for="projectLive" class="form-label">Link del Live Demo:</label>
                                <input id="projectLive" type="text" class="form-control">
                            </div>
                            <div class="m-3">
                                <label for="projectRepo" class="form-label">Link del Repositorio:</label>
                                <input id="projectRepo" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-outline-success">Aceptar</button>
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
    
    <!--Ventana Modal para eliminar items.-->
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content section-info">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <form action="" method="GET" class="form">
                <div class="modal-footer justify-content-center">
                    <strong>¿Está seguro de eliminar este elemento?</strong>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-outline-success">Aceptar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!--Contenido desplazable de la página-->
    <main class="move">
        <!--Home/Hero Image-->
        <section id="home" class="hero-container d-flex align-items-center justify-content-center">
            <div class="home-content opacity-0">
                <h1 class="display-3 fw-bold">Estefania Daumes</h1>
                <p class="fs-4">Desarrollador Web Fullstack</p>
            </div>
        </section>
        <!--Seccion Sobre Mí-->
        <section id="about" class="section-info">
            <div class="container">
                <div class="section-title">
                    <div class="section-header d-flex justify-content-between align-items-center">
                        <h2 class="fw-bold">Sobre mí</h2>
                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#sectionModal"><i class="bi bi-pencil-square"></i></span>
                        </div>
                    <p>Hola! Mi nombre es Estefania y soy una recién graduada de Argentina Programa.<br> Mi objetivo es poder trabajar como Full Stack Develloper y continuar adquiriendo conocimientos, soy muy responsable y dedicada en todo aquello que emprendo, me gustaria formar parte de grandes proyectos que me permitan desarrollarme como profesional y mejorar mis habilidades.</p>
                </div>
                    <!--Sección Educación/Experiencia-->
                    <div id="professional-info" class="col-lg-8 mt-4">
                        <div class="row">
                            <div id="education"class="col-lg-6">
                                <div class="professional-header d-flex justify-content-between align-items-center">
                                    <h3 class="mb-3 fw-bold">Educación</h3>
                                    <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#itemPlus"><i class="bi bi-plus-circle"></i></span>
                                </div>
                                <div class="info-item">
                                    <div class="item-title d-flex justify-content-between align-items-center">
                                        <h4>Data Science</h4>
                                        <div class="item-buttons">
                                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#itemModal"><i class="bi bi-pencil-square"></i></span>
                                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                        </div>
                                    </div>
                                    <h5>2022</h5>
                                    <p><em>Codo a Codo 4.0</em></p>
                                    <p>Me encuentro actualmente cursando el Curso de Big Data donde se estudian diversas temáticas, tales como lógica, algoritmos, base de datos, así también como la introducción y utilización del lenguaje python, entre otras actividades.</p>
                                </div>
                                <div class="info-item">
                                    <div class="item-title d-flex justify-content-between align-items-center">
                                        <h4>Desarrollo Web FullStack</h4>
                                        <div class="item-buttons">
                                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#itemModal"><i class="bi bi-pencil-square"></i></span>
                                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                        </div>
                                    </div>
                                    <h5>2021 - 2022</h5>
                                    <p><em>Argentina Programa</em></p>
                                    <p>Curso de Desarrollo Web FullStack donde se estudian diversas tecnologías como ser HTML, CSS, Bootstrap, Angular, Java, Spring Boot, entre otras.</p>
                                </div>
                                <div class="info-item">
                                    <div class="item-title d-flex justify-content-between align-items-center">
                                        <h4>Curso de Reparación y armado de redes</h4>
                                        <div class="item-buttons">
                                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#itemModal"><i class="bi bi-pencil-square"></i></span>
                                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                        </div>
                                    </div>
                                    <h5>2006</h5>
                                    <p><em>UTN Mar del plata</em></p>
                                    <p>Curso completo de Reparación y armado de redes.</p>
                                </div>
                            </div>
                           
                            <div id="education"class="col-lg-6">
                                <div class="professional-header d-flex justify-content-between align-items-center">
                                    <h3 class="mb-3 fw-bold">Experiencia Laboral</h3>
                                    <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#itemPlus"><i class="bi bi-plus-circle"></i></span>
                                </div>
                                <div class="info-item">
                                    <div class="item-title d-flex justify-content-between align-items-center">
                                        <h4>Mantenimiento de PC</h4>
                                        <div class="item-buttons">
                                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#itemModal"><i class="bi bi-pencil-square"></i></span>
                                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                        </div>
                                    </div>
                                    <h5>2006-2012</h5>
                                    <p><em>Reparación de Pcs, Notebook, Tablets, Celulares.</em></p>
                                    <p>Armado de Pcs, personalizaciones. Instalaciones de software Windows, Antivuirus, actualizaciones en gral.</p>
                                </div>
                                <div class="info-item">
                                  <div class="item-title d-flex justify-content-between align-items-center">
                                      <h4>Trasda S.A</h4>
                                      <div class="item-buttons">
                                          <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#itemModal"><i class="bi bi-pencil-square"></i></span>
                                          <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                      </div>
                                  </div>
                                  <h5>2010-2012</h5>
                                  <p><em>Trabajo administrativo.</em></p>
                                  <p>Tareas administrativas.</p>
                              </div>
                              <div class="info-item">
                                    <div class="item-title d-flex justify-content-between align-items-center">
                                        <h4>Gestoria del Automotor</h4>
                                        <div class="item-buttons">
                                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#itemModal"><i class="bi bi-pencil-square"></i></span>
                                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                        </div>
                                    </div>
                                    <h5>2013-2022</h5>
                                    <p><em>Gestoria general.</em></p>
                                    <p>Gestiones varias en el area Automotríz,<br> Transferencias,<br> Prendas,<br> Denuncias de ventas,<br> Informes varios.</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Sección "Habilidades"-->
        <section id="skills" class="section-info">
            <div class="container">
                <div class="section-title">
                    <div class="section-header d-flex justify-content-between align-items-center">
                        <h2 class="fw-bold">Habilidades</h2>
                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#sectionModal"><i class="bi bi-pencil-square"></i></span>
                    </div>
                </div>
                <div class="row">
                    <div id="frontend" class="col-lg-4 mt-5">
                        <div class="skills-header d-flex justify-content-between align-items-center">
                            <h3 class="mb-3 fw-bold">Front-End</h3>
                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillPlus"><i class="bi bi-plus-circle"></i></span>
                        </div>
                        <div class="skill-item">
                            <div class="item-title d-flex justify-content-between align-items-center">
                                <span class="fs-5"><i class="fa-brands fa-html5"></i> HTML</span>
                                <div class="item-buttons">
                                    <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillEdit"><i class="bi bi-pencil-square"></i></span>
                                    <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                </div>
                            </div>
                            <div class="progress mb-3" style="height: 20px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="100"aria-valuemin="0" aria-valuemax="100">80%</div>
                            </div>
                         </div>
                            <div class="skill-item">
                                <div class="item-title d-flex justify-content-between align-items-center">
                                    <span class="fs-5"><i class="fa-brands fa-css3-alt"></i> CSS</span>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                                    <div class="progress mb-3" style="height: 20px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="100"aria-valuemin="0" aria-valuemax="100">80%>Avanzado</div>
                                    </div>
                                 </div>
                                <div class="skill-item">
                                    <div class="item-title d-flex justify-content-between align-items-center">
                                        <span class="fs-5"><i class="fa-brands fa-js-square"></i> JavaScript</span>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                                     <div class="progress mb-3" style="height: 20px;">
                                         <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="100"aria-valuemin="0" aria-valuemax="100">60%</div>
                                     </div>
                                  </div>
                                <div class="skill-item">
                                    <div class="item-title d-flex justify-content-between align-items-center">
                                        <span class="fs-5"><i class="fa-brands fa-bootstrap"></i> Bootstrap</span>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                                    <div class="progress mb-3" style="height: 20px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">70%</div>
                                    </div>
                                 </div>
                                <div class="skill-item">
                                <div class="item-title d-flex justify-content-between align-items-center">
                                    <span class="fs-5"><i class="fa-brands fa-angular"></i> Angular</span>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 20px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="100"aria-valuemin="0" aria-valuemax="100">60%</div>
                                </div>
                             </div>
                        </div>

                    <div id="backend" class="col-lg-4 mt-5">
                        <div class="skills-header d-flex justify-content-between align-items-center">
                            <h3 class="mb-3 fw-bold">Back-End</h3>
                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillPlus"><i class="bi bi-plus-circle"></i></span>
                        </div>
                        <div class="skill-item">
                        <div class="item-title d-flex justify-content-between align-items-center">
                            <span class="fs-5"><i class="fa-brands fa-java"></i> Java/Spring Boot</span>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                            <div class="progress mb-3" style="height: 20px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuenow="40" aria-valuemax="100">40%</div>
                            </div>
                            <div class="skill-item">
                            <div class="item-title d-flex justify-content-between align-items-center">
                                <span class="fs-5"><i class="fa-solid fa-database"></i> MySql</span>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 20px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuenow="30" aria-valuemax="100">40%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="soft" class="col-lg-4 mt-5">
                        <div class="skills-header d-flex justify-content-between align-items-center">
                            <h3 class="mb-3 fw-bold">Soft-Skills</h3>
                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillPlus"><i class="bi bi-plus-circle"></i></span>
                        </div>
                        <div class="skill-item">
                        <div class="item-title d-flex justify-content-between align-items-center">
                            <span class="fs-5"><i class="fa-solid fa-people-carry-box"></i>Workteam</span>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                            <div class="progress mb-3" style="height: 20px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuemin="0" aria-valuenow="100" aria-valuemax="100"></div>
                            </div>
                            <div class="skill-item">
                            <div class="item-title d-flex justify-content-between align-items-center">
                                <span class="fs-5"><i class="fa-solid fa-comment-dots"></i>English</span>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 20px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuemin="0" aria-valuenow="100" aria-valuemax="100"></div>
                                </div>
                        <div class="skill-item">
                        <div class="item-title d-flex justify-content-between align-items-center">
                            <span class="fs-5"><i class="fa-solid fa-hand-holding-heart"></i>Predisposición</span>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                            <div class="progress mb-3" style="height: 20px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuemin="0" aria-valuenow="100" aria-valuemax="100"></div>
                            </div>
                        </div>
                            <div class="skill-item">
                            <div class="item-title d-flex justify-content-between align-items-center">
                                <span class="fs-5"><i class="fa-solid fa-laptop-code"></i> Autodidacta</span>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#skillEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 20px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuemin="0" aria-valuenow="100" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Sección "Proyectos"-->
        <section id="projects" class="section-info">
            <div class="container">
                <div class="section-title">
                    <div class="section-header d-flex justify-content-between align-items-center">
                        <h2 class="fw-bold">Proyectos</h2>
                        <div>
                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#projectPlus"><i class="bi bi-plus-circle"></i></span>
                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#sectionModal"><i class="bi bi-pencil-square"></i></span>
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div id="project-cards" class="col-lg-12 project-cards">
                        <div class="card">
                            <div class="card-img-container">
                                <img src="/images/project-1.png" alt="Portfolio Argentina Programa" class="card-img-top">
                                <span class="h2">Proyecto #1</span>
                            </div>
                            <div class="card-body section-info">
                                <div class="item-title mb-2 d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">Portfolio - Argentina Programa</h5>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#projectEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                                <p class="card-text">Proyecto final realizado durante el Curso de Desarrollo Web Fullstack Argentina Programa. Utiliza herramientas como HTML, CSS, JavaScript y Bootstrap.</p>
                                <a href="https://myportfoliodaumesestefania.herokuapp.com/"target="_BLANK" class="btn btn-outline-info">Live Demo</a>
                                <a href="https://github.com/FanyDmes/MyPortfolioDaumesEstefania" target="_BLANK" class="btn btn-outline-secondary">Repositorio</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-img-container">
                                <img src="/images/project-2.png" alt="Flooble" class="card-img-top">
                                <span class="h2">Proyecto #2</span>
                            </div>
                            <div class="card-body section-info">
                                <div class="item-title mb-2 d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">Calculadora</h5>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#projectEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                                <p class="card-text">En este proyecto de calculadora utilicé herramientas como HTML, CSS, JavaScript. Permite ejecutar las cuatro operaciones básicas que son: sumar, restar, multiplicar y dividir, adicionalmente incluye un botón para resetear los resultados en caso de querer realizar una nueva operación. target="_BLANK" class="link-info text-decoration-underline">#SelfTaughtDev</a>. </p>
                                <a href="https://calculatorpink.herokuapp.com/" target="_BLANK" class="btn btn-outline-info">Live Demo</a>
                                <a href="https://github.com/FanyDmes/Calculadora-Responsive" target="_BLANK" class="btn btn-outline-secondary">Repositorio</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-img-container">
                                <img src="/images/Proyecto3.png" alt="Flooble" class="card-img-top">
                                <span class="h2">Proyecto #3</span>
                            </div>
                            <div class="card-body section-info">
                                <div class="item-title mb-2 d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">Reloj</h5>
                                    <div class="item-buttons">
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#projectEdit"><i class="bi bi-pencil-square"></i></span>
                                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></span>
                                    </div>
                                </div>
                                <p class="card-text">En este proyecto de calculadora utilicé herramientas como HTML, CSS, JavaScript. Permite ver la fecha y la hora en tiempo real. target="_BLANK" class="link-info text-decoration-underline">#SelfTaughtDev</a>. </p>
                                <a href="https://relojanalog.herokuapp.com/" target="_BLANK" class="btn btn-outline-info">Live Demo</a>
                                <a href="https://github.com/FanyDmes/Reloj-Analogico" target="_BLANK" class="btn btn-outline-secondary">Repositorio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Formulario de contacto-->
        <section id="contact" class="section-info">
            <div class="container">
                <div class="section-title">
                    <div class="section-header d-flex justify-content-between align-items-center">
                        <h2 class="fw-bold">Contacto</h2>
                        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#sectionModal"><i class="bi bi-pencil-square"></i></span>
                    </div>
                </div>
                <div class="row d-flex justify-content-center flex-row">
                    <div class="col-lg-6">
                        <h3 class="text-center">Ingresá tus datos así estamos en contacto.</h3>
                        <hr>
                        <form action="https://formsubmit.co/f4be33e69b9360fa1f60a9026ba46950" method="POST" class="form">
                            <div class="mb-3">
                                <label for="contactName" class="form-label fw-bold">* Nombre:</label>
                                <input id="contactName" name="contactName" type="text" class="form-control" placeholder="Ej: tu mombre " pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" title="Utiliza únicamente letras y espacios en blanco." required>
                            </div>
                            <div class="mb-3">
                                <label for="contactEmail" class="form-label fw-bold">* E-Mail:</label>
                                <input id="contactEmail" name="contactEmail" type="email" class="form-control" placeholder="Ej: ejemplo@correo.com" pattern="^(\w+[/./-]?){1,}@[a-z]+[/.]\w{2,}$" title="Introduce un correo electrónico válido." required>
                            </div>
                            <div class="mb-3">
                                <label for="contactComment" class="form-label fw-bold">* Mensaje:</label>
                                <textarea id="contactComment" name="contactComment" cols="30" rows="3" class="form-control" style="resize:none;" placeholder="¡Dejame un mensaje!" required></textarea>
                            </div>
                            <i>* Campos requeridos</i>
                            <div class="mb-3 text-center">
                                <input type="hidden" name="_captcha" value="false">
                                <input type="hidden" name="_next" value="">
                                <button type="submit" class="btn btn-outline-info mt-3">¡Enviar!</button>
                            </div>
                        </form>
                        <hr>
                    </div>
                </div>
    </main>
   
    
    <script src="/js/bootstrap.bundle.min.js">
    </script>
    <script src="/js/index.js"></script>
    
</body>
</html>