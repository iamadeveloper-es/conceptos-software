<?php include_once('./inc/header.php'); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Git</h1>
                <a href="https://github.com/settings/profile" target="_blank"> Mi Github <span class="fas fa-external-link-alt"></span></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Git add</h2>
                <p>Este comando se usa para añadir los cambios efectuados a Git.</p>
                <div class="codigo">
                    <pre>
<code>
<span class="cl-azul">git add .</span>
// Este comando añade todos los cambios efectuados.

<span class="cl-azul">git add (+nombre fichero)</span>
// Este comando añade solo los cambios seleccionados.
</code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Git commit</h2>
                <p>Este comando permite asignar un mensaje al cambio que vamos a realizar.</p>
                <div class="codigo">
                    <pre>
<code>
<span class="cl-azul">git commit -m "comentario"</span>
// Registra los cambios en el repositorio y permite añadir un mensaje/nombre.
</code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Git push</h2>
                <p>Este comando aplica los cambios en el repositorio.</p>
                <div class="codigo">
                    <pre>
<code>
<span class="cl-azul">git push</span>
</code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Git pull</h2>
                <p>Este comando actualiza los ficheros locales a lo que hay en el repositorio remoto.</p>
                <div class="codigo">
                    <pre>
<code>
<span class="cl-azul">git pull</span>
</code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include_once('./inc/footer.php'); ?>