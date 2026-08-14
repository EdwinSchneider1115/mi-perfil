<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>

    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>

    <div class="perfil-container">

        <div class="perfil-card">

            <h1>Mi Perfil</h1>
            <p class="subtitulo">Conoce un poco sobre mí</p>

            <!-- Espacio para la foto -->
            <div class="foto-container">
                <img src="https://github.com/EdwinSchneider1115/202610-8am-ExploraColombiaApp/raw/main/img.png" width="220" height="300">
            </div>

            <div class="informacion">

                <div class="dato">
                    <div>
                        <h3>Nombre</h3>
                        <p>Edwin Alejandro Gomez Schneider</p>
                    </div>
                </div>

                <div class="dato">
                    <div>
                        <h3>Edad</h3>
                        <p>20 años</p>
                    </div>
                </div>

                <div class="dato">
                    <div>
                        <h3>Vivo en</h3>
                        <p>Bucaramanga, Santander, Colombia</p>
                    </div>
                </div>

                <div class="dato">
                    <div>
                        <h3>Estudio</h3>
                        <p>Ingeniería de Sistemas</p>
                    </div>
                </div>

                <div class="dato">
                    <div>
                        <h3>Semestre</h3>
                        <p>5.º semestre</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>
<nav class="navbar">

    <div class="logo">
        Edwin Gomez
    </div>

    <div class="menu">
        <a href="{{ url('/perfil') }}">Perfil</a>
        <a href="{{ url('/perfil/intereses') }}">Intereses</a>
        <a href="{{ url('/perfil/habilidades') }}">Habilidades</a>
        <a href="{{ url('/perfil/metas') }}">Metas</a>
    </div>

</nav>
</html>