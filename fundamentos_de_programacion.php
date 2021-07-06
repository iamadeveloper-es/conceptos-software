<?php include_once('./inc/header.php'); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Fundamentos de programación</h2>
                <p>Programar no se trata de código, se trata de lógica. Un 90% del desrrollo de un programa es pensar y sólo un 10% programar en código.</p>
                <a href="https://stackblitz.com/edit/fundamentos-de-programacion?file=index.ts" target="_blank" rel="noopener noreferrer">Ejemplo práctico <span class="fas fa-external-link-alt"></span></a>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container" id="variables">
        <div class="row">
            <div class="col-12 destacado">
                <h3>Variables y constantes</h3>
                <p>Podría definirse como espacios de memoria para almacenar datos.</p>
                <h4>Estructura y sintáxis</h4>
                <p>
                Por ejemplo teniendo la siguiente variable (Java): <br><br>
                <strong class="cl-azul">int numero = 2;</strong>
                </p>
                <p>
                Estructura: <br>
                <strong>int</strong>: tipo de dato (en este caso es entero)<br>
                <strong>numero</strong>: Nombre de la variable, puede ser cualquiera<br>
                <strong>=</strong> : Es el operador para asignarle un valor<br>
                <strong>2</strong> : El valor
                </p>
                <p>salida por pantalla o consola (Java): <br>
                <strong class="cl-azul">System.out.printIn(numero)</strong> // Outupt 2</p>
                <p>La sintáxis puede cambiar segun el lenguaje, pero la estructura siempre será la misma. A continuación se muestra la misma variable en diferentes lenguajes.</p>
                <p>
                    Java: <br>
                    <strong class="cl-azul">int numero = 2;</strong><br><br>
                    C: <br>
                    <strong class="cl-azul">int numero = 2;</strong><br><br>
                    TypeScript: <br>
                    <strong class="cl-azul">let numero: number = 2;</strong><br><br>
                </p>
            </div>
        </div>
    </div>
    <div class="container mt-4" id="constantes">
        <div class="row">
            <div class="col-12 destacado">
                <h3>Constantes</h3>
                <p>Su valor es inmutable a lo largo del programa</p>
                <p><strong class="cl-azul">static final int numero = 2;</strong></p>
                <p>
                Estructura: <br>
                <strong>static final</strong> : palabra reservada para crear constante<br>
                <strong>int</strong>: tipo de dato (en este caso es entero)<br>
                <strong>numero</strong>: Nombre de la variable, puede ser cualquiera<br>
                <strong>=</strong> : Es el operador para asignarle un valor<br>
                <strong>2</strong> : El valor
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section" id="tipos-datos">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Tipos de datos</h3>
                <p>Los tipos de datos en un lenguaje de programación pueden ser muy variados, así que es difícil preguntarte cuantos tipos de datos hay en un lenguaje, ya que incluso puedes crearte los tuyos propios, mediante enumeraciones o estructuras.
                </p>
                <p>
                Cada lenguaje de programación puede trabajar con muchos tipos de datos.
                </p>
                <p>
                Pero de todos ellos, siempre tendremos los <strong>tipos primitivos</strong> de datos.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3 destacado">
                <h4>Tipo de datos número: int</h4>
                <p>
                Los número suelen ser representados en un lenguaje de programación de maneras diferentes, ya que importa decidir una serie de cuestiones:
                </p>
                <ul>
                    <li>Cual va ser el <strong>tamaño</strong> que vamos a usar.</li>
                    <li>Si va a tener <strong>números decimales</strong> o no.</li>
                    <li>Si va ser <strong>negativo</strong>.</li>
                </ul>
                <p>
                Empezaremos con el tipo primitivo <strong class="cl-azul">int</strong>. Este tipo de datos representa cualquier número sin decimales, ya sea positivo o negativo.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3 destacado">
                <h4>Tipos de datos número real: double o float</h4>
                <p>
                Si nos interesa utilizar un número con decimales, sueles encontrar el tipo de datos <strong class="cl-azul">double</strong> o <strong class="cl-azul">float</strong>.
                </p>
                <p>
                Declararlo como un tipo u otro dependerá de la precisión en decimales que quieras tener.
                </p>
                <p>¿Como podemos distinguir una variable si se ha declarado como int o como float? Por ejemplo, si nos encontramos un número con un punto decimal (3.14).</p>
                <p>En lenguajes como JavaScript o TypeScript solo existe el tipo "number".</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3 destacado">
                <h4>Tipos de datos cadena: char o string</h4>
                <p>
                Suele ser un valor alfanumérico. Si es un sólo carácter individual, tenemos el tipo <strong class="cl-azul">char</strong>.
                </p>
                <p>
                Un <strong class="cl-azul">char</strong> es un carácter Unicode, y solemos escribirlo entre comillas simples (‘ ‘).
                </p>
                <p>
                Pero si es una cadena de caracteres, es decir, caracteres seguidos unos detrás de otro formando una secuencia, lo solemos encontrar como <strong class="cl-azul">string</strong>.
                </p>
                <p>
                El tipo <strong class="cl-azul">string</strong> debemos escribirlo entre comillas dobles (» «) para diferenciarlo del <strong class="cl-azul">char</strong>,
                </p>
                <p>En lenguajes como JavaScript o TypeScript solo existe el tipo "string".</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3 destacado">
                <h4>Tipo de datos booleano: boolean</h4>
                <p>
                Suelen tener dos valores identificados, <strong class="cl-azul">true</strong> (verdadero) o <strong class="cl-azul">false</strong> (falso). En algunos lenguajes puede equivaler a los números 0 y 1.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section" id="operadores">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Operadores</h3>
                <p>
                Al igual que los tipos de datos los operadores pueden variar dependiendo del lengauje de programación.
                </p>    
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3 destacado">
                <h4>Operadores Aritméticos:</h4>
                <ul>
                    <li>Suma + .</li>
                    <li>Resta - .</li>
                    <li>Multiplicación * .</li>
                    <li>División / .</li>
                    <li>Resto de la División(MOD) % .</li>
                </ul>  
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3 destacado">
                <h4>Operadores de Asignación:</h4>
                <p>
                El principal es '=' pero hay más operadores de asignación con distintas funciones que explicamos brevemente ahora.
                </p>
                <ul>
                    <li>'+=' : op1 += op2 à op1 = op1 + op2</li>
                    <li>'-=' : op1 -= op2 à op1 = op1 - op2</li>
                    <li>'*=' : op1 *= op2 à op1 = op1 * op2</li>
                    <li>'/=' : op1 /= op2 à op1 = op1 / op2</li>
                    <li>'%=' : op1 %= op2 à op1 = op1 % op2</li>
                </ul>  
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3 destacado">
                <h4>Operadores Incrementales:</h4>
                <p>
                Son los operadores que nos permiten incrementar las variables en una unidad.
                </p>
                <ul>
                    <li>'++'</li>
                    <li>'--'</li>
                </ul>  
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3 destacado">
                <h4>Operadores Relacionales:</h4>
                <p>
                Permiten comparar variables según relación de igualdad/desigualdad o relacción mayor/menor. Devuelven siempre un valor boolean.
                </p>
                <ul>
                    <li>'>': Mayor que</li>
                    <li>'<': Menor que</li>
                    <li>'==': Iguales (en algunos lenguajes '==' compara valor e '===' compara tipo de dato y valor)</li>
                    <li>'¡=': Distintos</li>
                    <li>'>=': Mayor o igual que</li>
                    <li>'<=': Menor o igual que</li>
                </ul>  
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3 destacado">
                <h4>Operadores Lógicos:</h4>
                <p>
                Nos permiten construir expresiones lógicas.
                </p>
                <ul>
                    <li>'&&' : devuelve true si ambos operandos son true.</li>
                    <li>'||' : devuelve true si alguno de los operandos son true.</li>
                    <li>'!' : Niega el operando que se le pasa.</li>
                    <li>'&' : devuelve true si ambos operandos son true, evaluándolos ambos.</li>
                    <li>'|' : devuelve true uno de los operandos es true, evaluándolos ambos.</li>
                </ul>  
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3 destacado">
                <h4>Otros Operadores</h4>
                <p>
                Son mucho menos utilizados por eso los explicamos mas por encima.
                </p>
                <ul>
                    <li>
                        Operadores que actúan a nivel de bits:
                        <ul>
                            <li>'>>': desplazamiento a la derecha de los bits del operando</li>
                            <li>'<<': desplazamiento a la izquierda de los bits de operando</li>
                            <li>'&': operador and a nivel de bit.</li>
                            <li>'&' : devuelve true si ambos operandos son true, evaluándolos ambos.</li>
                            <li>'|' : devuelve true uno de los operandos es true, evaluándolos ambos.</li>
                        </ul>
                    </li>
                    <li>
                        Operador Instanceof: <br>
                        Nos permite saber si un objeto pertenece a una clase o no.
                        <ul>
                            <li>
                                NombreObjeto instanceof NombreClase
                            </li>
                        </ul>
                    </li>
                </ul>  
            </div>
        </div>
    </div>
</section>

<?php include_once('./inc/footer.php'); ?>