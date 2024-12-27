<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    <header class="header_normal">
        <div class="head1">
            <img class="logo" src="assets/images/icons/logo2.png" alt="logobebe">
        </div>
        <div class="head2">
            <a class="enlaces" href="#galeria">Galeria</a>
            <a class="enlaces" href="#productos">Productos</a>
            <a class="enlaces" href="#sobre_mi">Sobre mi</a>
            <a class="enlaces" href="#informacion">Informacion</a>
            <a class="enlaces" href="#contacto">Contacto</a>
        </div>
    </header>

    <header class="header_scrolled">
        <div class="head1 head1_scrolled">
            <img class="logo logo_scrolled" src="assets/images/icons/logo2.png" alt="logobebe">
        </div>
        <div class="head2">
            <a class="enlaces" href="#galeria">Galeria</a>
            <a class="enlaces" href="#productos">Productos</a>
            <a class="enlaces" href="#sobre_mi">Sobre mi</a>
            <a class="enlaces" href="#informacion">Informacion</a>
            <a class="enlaces" href="#contacto">Contacto</a>
        </div>
    </header>

    <main>
        <div id="galeria" class="gallery">
            <div class="gallery-wrapper">
                <?php
                foreach ($galleryPhotos as $photo) {
                    echo "<div class='photo'>";
                    echo "<img src='assets/images/gallery/{$photo}' alt='photo'>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>

        <h2 id="productos">Productos a la venta</h2>
        <div class="line"></div>
        <div class="munecas">
            <?php
            foreach ($munecas as $muneca) {
                $muneca_id = $muneca['id'];
                foreach ($fronts as $front) {
                    if ($front['muneca_id'] == $muneca_id) {
                        $front_name = $front['name'];
                        break;
                    }
                }
                $description = $muneca['description'];
                if (strlen($description) > 100) {
                    $description = substr($description, 0, 100) . '...';
                }
                echo "<div class='muneca'>";
                echo "<div class='marco'>";
                echo "<img src='assets/images/front/{$front_name}' alt='muneca'>";
                echo "</div>";
                echo "<div class='info'>";
                echo "<h3>{$muneca['name']}</h3>";
                echo "<p>{$description}</p>";
                echo "<div class='alturayprecio'>";
                echo "<p class='height' data-height='{$muneca['height']}'></p>"; // Add data-height attribute
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>

        <h2 id="sobre_mi">Mi pasion</h2>
        <div class="line2"></div>
        <div class="sobre_mi">
            <div class="sobre_mi_contenido">
                <h3>¡Hola! Soy Maria</h3>
                <p>Soy una apasionada del arte y los detalles, y desde hace años dedico mi tiempo a crear muñecas realistas. Para mí, cada pieza es mucho más que un objeto; es una forma de expresar emociones, contar historias y capturar la esencia de la humanidad. Me inspiran las expresiones, los gestos y esos pequeños matices que hacen que algo se sienta realmente vivo.</p>
                <p>Siempre me ha fascinado cómo el arte puede conectar a las personas, y trabajar en mis muñecas me permite explorar esa conexión. Paso horas modelando rostros, pintando iris o seleccionando telas únicas para sus vestuarios, y cada etapa del proceso se siente como un viaje creativo lleno de posibilidades.</p>
                <p>Me encanta explorar mercados de antigüedades en busca de materiales únicos, aprender nuevas técnicas y compartir mi trabajo con quienes lo aprecian. He tenido la oportunidad de exponer mis piezas en pequeñas galerías y trabajar con coleccionistas de diferentes partes del mundo, algo que jamás imaginé cuando empecé este hobby.</p>
            </div>
            <div class="sobre_mi_foto">
                <img id="mujer" src="assets/images/icons/mujer.webp" alt="foto">
            </div>
        </div>

        <div id="informacion" class="informacion">
            <div>
                <h2>Informacion</h2>
                <div class="line2"></div>
            </div>
            <div class="cont">

                <div class="iz">
                    <p>¡Hola! Soy Maria, la persona detrás de estos muñecos bebés tan especiales. Cada uno de ellos ha sido creado con mucho amor, dedicación y una atención extrema a los detalles. Mi misión es ofrecerte no solo un muñeco, sino una pequeña obra de arte que te acompañe y te emocione, ya sea como coleccionista, regalo o incluso como una forma de acompañar a tus pequeños en su aprendizaje emocional.</p>
                </div>
                <div class="der">
                    <img src="assets/images/icons/baby.png" alt="">
                    <ul>
                        <li><span>Hechos con todo mi corazón</span> Cada muñeco que hago está diseñado como si fuera un bebé real. Utilizo vinilo suave y silicona para lograr una textura que se siente natural al tacto, imitando la piel de un bebé. Me esfuerzo al máximo por crear cada arruga, cada detalle de sus manos y pies, para que se vean lo más reales posible.</li>
                        <li><span>Ropa personalizada, pensada con cariño</span> Me encanta elegir cada conjunto con mucho cuidado. Todos los muñecos vienen con ropa hecha a mano que no solo es bonita, sino también cómoda para el muñeco, adaptada a su tamaño y estilo. Ya sea para dormir, para jugar o para una ocasión especial, me aseguro de que cada atuendo sea único.</li>
                        <li><span>Un tamaño perfecto para abrazar</span> Mis muñecos varían entre 40 y 60 cm, lo que los hace ideales para ser abrazados y acariciados. Son lo suficientemente pequeños como para ser fácilmente manejados por los más pequeños, pero lo suficientemente grandes como para sentirse como un verdadero bebé.</li>
                        <li><span>Expresiones que tocan el corazón</span> He trabajado mucho en las expresiones de cada muñeco para que reflejen las emociones de un bebé real. Desde una tierna sonrisa hasta los ojitos cerrados cuando duermen, cada muñeco tiene su propia personalidad que te conquistará al instante.</li>
                        <li><span>Para todos los que valoran el detalle</span> Mis muñecos no solo son para coleccionistas, sino también para quienes quieren regalar algo único y lleno de significado. Son perfectos para adultos que buscan un bebé reborn, pero también pueden ser compañeros de juegos para los más pequeños, ayudándoles a desarrollar empatía y afecto.</li>

                    </ul>
                </div>
                <div class="iz">
                    <p><span>Un regalo con alma</span> Si estás buscando algo realmente especial, mis muñecos son una opción que viene directamente de mi corazón. Sé lo importante que es encontrar algo único, y cada muñeco es como un pequeño hijo para mí. Me encantaría que forme parte de tu vida o la de alguien que amas.</p>
                    <p><span>Compromiso con la seguridad y la calidad</span> Me aseguro de que cada muñeco sea seguro y de la más alta calidad. Están hechos con materiales hipoalergénicos y completamente libres de sustancias tóxicas. Quiero que sientas la tranquilidad de saber que lo que tienes en tus manos es algo seguro y duradero.</p>
                </div>

            </div>
        </div>


        <div id="contacto" class="contacto">
            <div class="red">
                <img src="assets/images/icons/facebook.png" alt="">
                <p>Maria LaDel Muneco</p>
            </div>
            <div class="red">
                <img src="assets/images/icons/instagram.png" alt="">
                <p>@mariamunyeco</p>
            </div>
            <div class="red">
                <img src="assets/images/icons/email.png" alt="">
                <p>mariamunyecos@gmail.com</p>
            </div>
        </div>
    </main>

</body>

</html>
<script src="assets/js/index.js"></script>