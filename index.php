<?php
$nombre_estudiante = "Emiliano";
$fecha_actual = date('d/m/Y');
$hora_actual = date('H:i:s');
$version = "1.0";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primer Proyecto Git - <?php echo $nombre_estudiante; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>🚀 Mi Primer Proyecto Git</h1>
            <p>Estudiante de Tecnologo en Ciber Seguridad</p>
        </header>

        <main>
            <div class="info-card">
                <h2>👤 Información del Estudiante</h2>
                <p><strong>Nombre:</strong> <?php echo $nombre_estudiante; ?></p>
                <p>Email: emiliano@gmail.com</p>
                <p>telefono: 555912837213</p>
                <p><strong>Fecha:</strong> <?php echo $fecha_actual; ?></p>
                <p><strong>Hora:</strong> <?php echo $hora_actual; ?></p>
                <p><strong>Versión del Proyecto:</strong> <?php echo $version; ?></p>
            </div>

            <div class="info-card">
                <h2>📚 Lo que he aprendido</h2>
                <ul>
                    <li>Crear un repositorio Git</li>
                    <li>Conectar con GitHub</li>
                    <li>Usar Visual Studio Code con Git</li>
                    <li>Hacer commits desde VS Code</li>
                </ul>
            </div>
            <div class="info-card">
                <h2>📚 Sobre Mi</h2>
                <ul>
                    <li>Estudiante de Tecnologo en ciberseguridad</li>
                    <li>Jugador De Videojuegos</li>
                    <li>Desarllador en C++</li>
                    <li>aprendido Git</li>
                </ul>
            </div>
            <div class="info-card">
                <h2>📚 Habilidades</h2>
                <ul>
                    <li>Control de Versiones</li>
                    <li>Instalacion de servidores dedicados en base a un videojuego (minecraft)</li>
                    <li>Git, GitHub, SVN</li>
                    <li>Creacion de juego en c++ arqueros en el bosque</li>
    
                </ul>
            </div>
            <section id="educacion" class="section">
                <h2>educacion</h2>
                <div class="info-card">
                    <h3>Bachillerato Administracion de empresas</h3>
                    <p>Escuela Tecnica de Belen UTU 2021-2023</p>
                    <p>Funcionamiento y manejo de empresas</p>
                </div>
                <div class="info-card">
                    <h3>Tecnologo En ciberseguridad</h3>
                    <p>Instituto Tecnologico superior de Paysandu 2024-Proxiamente</p>
                    <p>Especializacion en Desarrollo Seguro de Aplicaciones</p>
                </div>
            </section>

            <div class="info-card">
                <h2>🎯 Próximos pasos</h2>
                <p>Continuaré aprendiendo Git y PHP para convertirme en un mejor programador.</p>
            </div>
        </main>

        <footer>
            <p>© 2025 - Proyecto creado por <?php echo $nombre_estudiante; ?></p>
        </footer>
    </div>
</body>
</html>