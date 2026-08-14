<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Habilidades</title>

    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>

    <div class="contenedor">

        <div class="cabecera">
            <h1>Mis habilidades</h1>
            <p>
                Algunas de las habilidades que he desarrollado
                durante mi formación.
            </p>
        </div>

        <div class="habilidades">

            <div class="habilidad">
                <div class="numero">01</div>

                <h2>Programación</h2>

                <p>
                    Tengo conocimientos en programación y me gusta
                    desarrollar diferentes tipos de proyectos. Me interesa
                    seguir aprendiendo y mejorar mis habilidades a medida
                    que adquiero más experiencia.
                </p>

                <div class="barra">
                    <div class="progreso"></div>
                </div>

                <span class="nivel">En aprendizaje constante</span>
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