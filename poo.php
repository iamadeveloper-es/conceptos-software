<?php include_once('./inc/header.php'); ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>P.O.O</h1>
                <h2>Programación Orientada a Objetos</h2>
                <p>La <strong>programación Orientada a objetos</strong> se define como un paradigma de la programación, una manera de programar específica, donde se organiza el código en unidades denominadas clases, de las cuales se crean objetos que se relacionan entre sí para conseguir los objetivos de las aplicaciones.</p>
                <p>
                Modelado de software maximizando la cercanía entre la programación y cómo percibimos el mundo: Objetos que se relacionan entre sí para establecer una comunicación
                </p>
                <p>
                La POO no es difícil, pero es una manera especial de pensar, a veces subjetiva de quien la programa, de manera que la forma de hacer las cosas puede ser diferente según el programador. Aunque podamos hacer los programas de formas distintas, no todas ellas son correctas, lo difícil no es programar orientado a objetos sino programar bien. 
                </p>
                <a href="https://www.youtube.com/watch?v=AAKoccH230Y&t=2542s">Video <span class="fas fa-external-link-alt"></span></a>
            </div>
        </div>
        <div class="row">
            <div class="col mt-5">
                <h3>Ventajas:</h3>
                <ul>
                    <li>Más confiable</li>
                    <li>Cercano al usuario: fácilmente podemos plasmar requisitos</li>
                    <li>Mantenible</li>
                    <li>Fácil de documentar</li>
                    <li>Fácil de reusar y extender </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Pilares de la P.O.O</h2>
            </div>
        </div>
    </div>
    <div class="container" id="abstraccion">
        <div class="row">
            <div class="col-12 destacado">
                <h3>1- Abstracción</h3>
                <p>Proceso mental de extracción de las características esenciales de algo, ignorando los detalles superfluos.</p>
                <p>Es cuando separamos los datos de un objeto para luego generar un molde (una clase).</p>
            </div>
        </div>
    </div>
    <div class="container" id="encapsulacion">
        <div class="row">
            <div class="col-12 destacado">
                <h3>2- Encapsulación</h3>
                <p>Cuando deseamos que ciertos métodos o propiedades sean inviolables o inalterables.</p>
            </div>
        </div>
    </div>
    <div class="container" id="herencia">
        <div class="row">
            <div class="col-12 destacado">
                <h3>3- Herencia</h3>
                <p>Nos permite crear nuevas clases a partir de otras. Si tuviéramos una clase “Autos” y quisiéramos crear unas clases “Auto deportivo” o “Auto clásico”, podríamos tomar varias propiedades y métodos de la clase “Autos”. Esto nos da una jerarquía de padre e hijo.</p>
            </div>
        </div>
    </div>
    <div class="container" id="polimorfismo">
        <div class="row">
            <div class="col-12 destacado">
                <h3>4- Polimorfismo</h3>
                <p>Proviene de Poli = muchas, morfismo = formas. Se utiliza para crear métodos con el mismo nombre pero con diferente comportamiento. Esta es quizá la parte más complicada de comprender.</p>
            </div>
        </div>
    </div>
</section>

<section class="section" id="clases">
    <div class="container">
        <div class="row">
            <div class="col-12 destacado">
                <h3>Clases Y Objetos</h3>
                <h4 class="mt-4">Clases:</h4>
                <ul>
                    <li>
                        Es la unidad de abstracción más importante de la OO
                    </li>
                    <li>
                        Es la plantilla que nos define la forma de un conjunto de objetos:
                        <ul>
                            <li>Define las propiedades y comportamiento que los objetos instanciados tendrán</li>
                            <li>Define el comportamiento a través de funciones, que llamamos métodos</li>
                            <li>
                                Tanto las propiedades como los métodos tienen una visibilidad asociada:
                                <ul>
                                    <li>
                                        <strong>public (acceso abierto), protected (acceso para la clase y subclases) o private (solamente visible para la clase)</strong>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        pueden tener miembros estáticos <strong>(static)</strong>. Son comunes a todas las instancias de la clase en cuestión, no pertenecen a una instancia concreta, son de clase. Se utilizan sin necesidad de instanciar la clase.
                    </li>
                    <li>
                        Abstracción <strong>(abstract)</strong>: 
                        <ul>
                            <li>
                                Clase: Implica que esa clase no puede instanciarse directamente, debe ser extendida
                            </li>
                            <li>
                                Método: Ese método en cuestión deberá ser implementado en una subclase
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="codigo mt-4">
                    <pre>
<code>

//Ejemplo de clase "Auto" y atributos

<span class="cl-azul">public class Auto</span>{
    String <span class="cl-azul">color</span> = "rojo";
    String <span class="cl-azul">modelo</span> = "BMW";
}
</code>
                    </pre>
                </div>
                <div class="mt-3">
                    <img src="assets/imagenes/estructura-clases.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section section" id="objetos">
    <div class="container">
        <div class="row">
            <div class="col-12 destacado">
                <h4>Objetos:</h4>
                <ul>
                    <li>Es una instancia de una clase</li>
                    <li>Mientras que las clases nos definen las propiedades y comportamiento, los objetos concretan estas propiedades y comportamientos mediante la instanciación</li>
                    <li>Podemos instanciar infinitos objetos de una clase</li>
                </ul>
                <div class="mt-3">
                    <img src="assets/imagenes/estructura-objetos.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('./inc/footer.php'); ?>