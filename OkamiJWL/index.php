<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Venta de Plata</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./imagenes/LOGO.png" type="image/x-icon">

</head>

<body>
    <!-- Navbar -->
    <header class="navbar">



        <div class="logo">
            <img src="imagenes/LOGO.png" alt="Logo">
            <span><strong>OKAMI</strong>-JWL</span>
        </div>
        <nav>
            <button onclick="window.location.href='index.php?categoria=todo'">Inicio</button>
            <button id="btn-quienes-somos" onclick="mostrarTexto()">Quiénes Somos</button>
            <button onclick="window.location.href='https://wa.me/?text=' + encodeURIComponent(window.location.href)">Compartir</button>
        </nav>

        <!-- El recuadro para mostrar el texto en el centro de la pantalla -->
        <div id="texto-quienes-somos" style="display:none;">
            ¡Hola! !Somos Okami-JWL! Bienvenido a nuestro negocio de venta de plata, espero encuentre lo que busque y pregunte por lo que mas le guste ! <br>
            <button onclick="quitarTexto()">Cerrar</button>
        </div>






    </header>

    <div class="fondo">
        <div class="ofertas-contenido">
            <div class="ofertas-texto">
                <h2>OFERTAS DE</h2>
            </div>
            <div class="imagen">
                <img src="./imagenes/TITULO.png" alt="TITULO">
            </div>
        </div>
    </div>

    <div id="contenido">
        <div class="barra-busqueda">
            <input type="text" placeholder="Buscar" />
            <button>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAACC0lEQVR4nO2Wz04bMRDG99JSHqBrf5+dBFBOOTXNnfZAmwvkKSgUKrUNPVS8B1ypikR7gFN5naKKV+CPFKRGrQZmGxNtijdZoh46krXy2OOfZz0zdpL8lxzx3s8CaANYA/BRv23RJ/chaZoukNwneUHyV04T/b7MKw1KcgvA1QjgrSbznHPdiaEAdoOF+yQPSC5Xq1W0Wq0H8iW5ovp+sIGdiTzlYKHvJJ/cMb+p865txvI8TdOF7PfKYtbaxzF2Mi+DA+gZY+YLgXkTSLLzn3d5mmPbzH47gM/Rht772SB6DwrteAD/ovbntVrtUZQRgHYQUMtjgjtBfLyIBa9lRhK1onPOeZJHJDe1/xzAsbX2mYLeyLj33km/UqkwAL+KBW9nRo1G46Eu/EF1ZzrnWBf9puPnOr4l/Xq9PhOAtyfyGMAhyQ3pi6cCtdYuKnhTxvM8ttaux4JfBme8kkzrjH0JUQ3gq9pfFrpAOMhjycdmQejTII/3pla5SJ5klct7X0+KinOuO1SrmxGengQ2bwtDM5FbZuh2korUkaiVVNPo7aj+z+2k4NVkEnHOdQvcxz3xVKCB/ocxZm4suDFmXgr+X14glwA+hWc6ND4+XEQKvuSllEF5c5F8TXIpL2UEVio8VgBUw2DTdlrqu2yUiId5ntvI9CwdDuD9vYNHwJeSaYm+x95NFfpPym8dgAm3JHRpSgAAAABJRU5ErkJggg=="
                    alt="search-more">
            </button>
        </div>
        <div class="categorias">
            <button class="categoria" data-category="promociones" onclick="window.location.href='?categoria=promociones'">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAACWklEQVR4nM1Uy2oUURA95Wsh0UVc6MoHKggGRVARRXThD7jIxiAIPr5AYXRmqkDITo2IxmhQEFzIgJmu6lGDinEhYnyAO9cqKpqFQhDfGbkzzaQdb/f0ZFx44dLd3L51quqcU8D/sASj3UL6WEifC3SfwOa7J5M+E7IHOYws6hCiSkIWCFk1tr/Hv5nsTi9Ks9vM3NYw6ZV6cH3YBFD1bSZ9IaR3hfRaHiMrW4OQXs4SWBIB7VJLECYd7wxEx1MBCgg2MNlkh5VMFhCu9/BQmiekQ0z2y5PZeUGpqwjbxKQT02f6VKDrmHTKc+eHkJ4SjM2ZbhFsb1JmR6GLXQsY2itkg40zhDuFrJJaGexAA6QI3Zb04yFcmFvLDFZgsv6oJSoIdrVqXRG2o9kPr/zZlLqE9KvAckx6sg4Y9kRmTBPAuz/8cwTBAiZ74wcpb2WEfXlUlkVeOMvQ/RlU9tolGPOGnUhRy3smGxDSUSH7lIeuELK3THrDkevOU8DOxLxhHzNJFJYTsuNCdltQXi6wPWl8ujY3Wsak5zKU/1Kgq5j0c63yOkdf6pwlggzFfCKzmHQ4FQRhXzTTXAv7ndqE7KdTX0JSwy5uk9vD1Sm8PBEEG2NmHYx888j5yHfHCeUv1xcRbk/mwnlC78eynHATQHBzoZBe9N0pQNd6RotuyUQ+ZdywpZ7xWCVGcNBJtUboDAJzfbgGRYS7PQDNVYU9MwD4JqgsQTuLScfaA9KrbQFE1WwWsntCVhLY4eg9nvl1gR5j0jKT3fKqqd0V+eG0kH4QGDsOOw76L9dv0DhTCBIDA3UAAAAASUVORK5CYII=" alt="discount--v1">
                Promociones
            </button>
            <button class="categoria" data-category="todo" onclick="window.location.href='?categoria=todo'">Todo</button>
            <button class="categoria" data-category="anillos" onclick="window.location.href='?categoria=anillos'">Anillos</button>
            <button class="categoria" data-category="cadenas" onclick="window.location.href='?categoria=cadenas'">Cadenas</button>
            <button class="categoria" data-category="gargantillas" onclick="window.location.href='?categoria=gargantillas'">Gargantillas</button>
            <button class="categoria" data-category="dijes" onclick="window.location.href='?categoria=dijes'">Dijes</button>
            <button class="categoria" data-category="pulseras" onclick="window.location.href='?categoria=pulseras'">Pulseras</button>

        </div>


        <div class="productos" id="productos">
            <?php
            // Incluir archivo de conexión
            include('conexion.php');

            // Definir la página actual y el límite
            $page = isset($_GET['page']) ? (int) $_GET['page'] : 1; // Página actual (por defecto la 1)
            $limit = 8; // Limitar a 8 productos por página
            $offset = ($page - 1) * $limit; // Calcular el desplazamiento

            // Obtener la categoría desde la URL (por defecto es 'todo' si no está seleccionada)
            $categoria = isset($_GET['categoria']) ? $_GET['categoria'] : 'todo';


            // Crear la consulta dependiendo de la categoría seleccionada
            if ($categoria == 'todo') {
                // Si es 'todo', no filtramos por categoría
                $sql = "SELECT * FROM productos LIMIT $limit OFFSET $offset";
            } else {
                // Si se selecciona una categoría específica
                $sql = "SELECT * FROM productos WHERE categoria = '$categoria' LIMIT $limit OFFSET $offset";
            }


            $result = $conn->query($sql);

            // Mostrar los productos
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='producto categoria-{$row['categoria']}'>";
                    echo "<img src='" . $row['imagen'] . "' alt='" . $row['nombre'] . "'>";
                    echo "<h3>" . $row['nombre'] . "</h3>";
                    echo "<p class='descripcion'>" . $row['descripcion'] . "</p>";
                    echo "<p class='precio'>Precio: $" . $row['precio'] . "</p>";
                    echo "<button class='añadir'><img class='cart-icon1' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAAsTAAALEwEAmpwYAAACmElEQVR4nOWYW4hOURiGt5nJKOdxSGlqGlfKhRxySDGGpDElLhyixgVTUwold46557/QDA2NIolocrhAk6QkjHKB5HRjSmiaifzGzKOVVy1/+7B+1m/v8ta+eb+9vvXstfda69srCCTgELAuyKKAkcAXYBBYFWRRwBpgCPgIVAVZFHCMn8oFWRQwCegD8sDkIIsCchrFliCLAuoE+BDYk9K1NmlGfyd9TYmDfJUy3CegLA7wesqAnUnf4ZGEBD1ANXAiJLYEaArx9wLTga8OgLuTAFsSEnTpvqbCgPyaMHDFXjsAzksCrE8R8DMwPAmwOkXAm7FwSjIM6E8JcF8ioBJ1pwS41BXwXAqAebNRuAIeSAHwqhOcEm2MSdSte3aExMYBM0P81UA58OGvX686n0O8bmlLKtRj4EWI/w64G5Ov1RlOgGP4d2oHKooCFKR56lJpELgNNBQNZgF2eQDpBx4B54HDmlgLzRv6YzALsM0RIg+8BG4AR4FtwDKgNrZs8gC4y4L4ZkG0qfJtFER5ySASAFcI7kpqEHECRgC9quGWB1kUsEWjOKT17YGn6xow2uepg1mAB/CnXmCqF0ALtBIY7+mqDP5LAfOBZmCD6yGTjlQ2aX2cXSqwscCFgu+oD1jvUBWZ783WJee6rwjADiV/CuwHTukEYiBqVIC5iptFvhU4qMXe6KRPuGlK+gYYZfnb5XdEtOtUfLPlTQDe6+Em+gJcqY7aI/7+7kW0e674b+sdcFH+Al+As5Twvvnjs/xG+Zcj2plyymiR5VUAz+TX+AIsA54o6WlgscqmHnmhx2XAVsXfatbXWaN3xwuc1dkMC8hWLuHBfk0uW+bHqdYroDqsUpl1VufZ9Y7tGoDjwBlgZzF78A9Tsw+CIOzCowAAAABJRU5ErkJggg==' alt='Añadir al carrito'>Encargar</button>";
                    echo "<a href='#' class='mas-info'>Más Información</a>";
                    echo "</div>";
                }
            } else {
                echo "<div class='mensaje-vacio'>No hay productos disponibles.</div>";
            }

            // Cerrar la conexión
            $conn->close();
            ?>

        </div>




        <!-- Paginación -->
        <div class="paginacion">
            <a href="?page=<?php echo ($page > 1) ? $page - 1 : 1; ?>" id="prevPage" class="btn atras">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA2ElEQVR4nO3YQQ7BQBSH8be1qpPYiISEu7iCOAV3cBukOBBSyWdRtUA7YyHmTf6/ZXdfZvoyeWYiIiIieQF6wByYmFdAHzhSq4CROY9oLMwToAAOvFtaBhF+QuiO8BFCOCL9EOIi0g4hPiLdEOoReyItF2APzH5xEv9QAUPvEY1NKCK169Rm1xWyxo+yK2RFJiFFFlcr4bH73c/uaHJdgUEwJOGTOQNbYBoVkdUTJatH40tM6T4kMsZHSESMn5BAjK+QbNZBLTE3lwu6DyvT8fOjiIiIiNjDHQF+p9x+Ld3yAAAAAElFTkSuQmCC" alt="left">
            </a>
            <a href="?page=<?php echo $page + 1; ?>" id="nextPage" class="btn siguiente">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA7klEQVR4nO3Yu0kFQRSA4WnAxFBXMRbFYsTQ1Dq0GB/YgYGdLMxWYOLF9JOLkVfYHURwznK+CuZnHjs7paSUUkoppV04xw32S1Q4xocvI45KRLj03RgyBld+mnBSVhASL2YmJFbMQkicmIaQGDGNIb+LwQVesdGXsfloxiHe9Gtqmhnc6d+0GIMnMYzb1TMX8iyOh7WE3M+FPFrJ0roVI2JY2uwHnR+/tfnDiDO84F20mQhwRald37caQ2rXEY0htfuIhpAaImIhpIaJmAmpoSJmnoOGEs32R2nngW4oUeEU19j777GklFJKKZW/9QlgUKhffbj4UgAAAABJRU5ErkJggg==" alt="right">
            </a>
        </div>


    </div>


    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Formas de pago</h3>
                <ul>
                    <li><i class="fas fa-university"></i> Transferencia bancaria</li>
                    <li><i class="fas fa-money-bill-alt"></i> Dinero</li>
                    <li><i class="fas fa-link"></i> Enlace de pago</li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Métodos de envío</h3>
                <ul>
                    <li><i class="fas fa-truck"></i> Entrega a domicilio</li>
                    <li><i class="fas fa-store"></i> Recogida en tienda</li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contacto</h3>
                <ul>
                    <li><i class="fas fa-envelope"></i>okamijwl94@gmail.com</li>
                    <li><i class="fas fa-phone"></i>+52 1 55 8403 9044</li>

                </ul>

            </div>

            <div class="footer-section">
                <h3>Seguridad</h3>
                <ul>
                    <li><i class="fas fa-shield-alt"></i> Site Seguro SSL 256 BITS</li>
                    <li><i class="fas fa-shield-virus"></i> Google Safe Browsing</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy;2025. OKAMI-JWL. Todos los derechos reservados. Tecnología MacDev. | Cree su catálogo digital en minutos. <a href="#">Más información.</a></p>
        </div>
    </footer>


    <a href="https://wa.me/5215584039044" class="whatsapp-float" target="_blank" aria-label="Chat en WhatsApp">
        <img src="https://img.icons8.com/ios-filled/50/FFFFFF/whatsapp.png" alt="WhatsApp">
    </a>
    <script src="./java.js"></script>
</body>


</html>