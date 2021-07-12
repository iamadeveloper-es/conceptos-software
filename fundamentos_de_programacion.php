<?php include_once('./inc/header.php'); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Fundamentos de programaciónpjpkjkjk</h2>
                <p>Programar no se trata de código, se trata de lógica. Un 90% del desarrollo de un programa es pensar y sólo un 10% programar en código.</p>
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
                <strong class="cl-azul">System.out.println(numero)</strong> // Outupt 2</p>
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
            <div class="col-12 destacado">
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
            <div class="col-12 destacado">
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
            <div class="col-12 destacado">
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
            <div class="col-12 destacado">
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
            <div class="col-12 destacado">
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
            <div class="col-12 destacado">
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
            <div class="col-12 destacado">
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
            <div class="col-12 destacado">
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
            <div class="col-12 destacado">
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
            <div class="col-12 destacado">
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
<section class="section" id="condicionales">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h3>Condicionales</h3>
            <p>Escribe código capaz de evaluar datos y tomar decisiones.</p>
            <p>A partir de aquí empezamos a programar :)</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado">
                <h4>Condicionales Simples</h4>
                <p>
                Un condicional simple es una estructura de control que ejecuta un conjunto de líneas de código si es cierta una expresión booleana.
                </p>
                <p>Usamos la palabra reservada <strong>if</strong></p>
                 <div class="codigo">
                     <pre>
<code>

<span class="cl-azul">if</span> (expresion) {
    Líneas de código que se ejecutan
    si se cumple la condición.
}
    </code>
                    </pre>
                 </div> 
                 <p>Podemos utilizar la cláusula <strong>else</strong> que también es una palabra reservada</p>
                 <div class="codigo">
                    <pre>
<code>

<span class="cl-azul">if</span> (expresion) {
    Líneas de código que se ejecutan 
    si se cumple la condición.
}
<span class="cl-azul">else{</span>
    este bloque se ejecuta si el <strong>if</strong> de arriba no se cumple
}
</code>
                    </pre>
                 </div> 
            </div>
            <div class="col-12 destacado">
                <h5>Ejemplo:</h5>
                <div class="codigo">
                    <pre>
<code>

    //Queremos comprobar si la persona puede pasar si cumple la condición

    <span class="cl-azul">int</span> personaEdad = 16;

    <span class="cl-azul">if</span>(personaEdad >= 18){

    }
    <span class="cl-azul">else</span>{

        <strong>Se cumple</strong>
    }

    //En este caso NO puede pasar
</code>
                    </pre>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado">
                <h4>Anidamiento</h4>
                <p>
                Las instrucciones (o estructuras) condicionales pueden aparecer en cualquier bloque del programa. Por ejemplo puede aparecer en el bloque de una función pero también puede aparecer en los bloques que componen un condicional.
                </p>
                <h5>Ejemplo:</h5>
                 <div class="codigo">
                     <pre>
<code>

    //Con el ejemplo anterior pero cambiamos el valor de la variable

    <span class="cl-azul">int</span> personaEdad = 18;

    <span class="cl-azul">if</span>(personaEdad >= 18){

        <strong>Se cumple</strong>

        <span class="cl-azul">if</span>(personaEdad > 19){

        }
        <span class="cl-azul">else</span>{
            <strong>Se cumple</strong>
        }
    }
    <span class="cl-azul">else</span>{

    }

    //En este caso pasa el primer <strong>if</strong> y en la siguiente condición anidada
      no se cumple y llega al <strong>else</strong>
</code>
                    </pre>
                 </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado">
                <h4>Else if</h4>
                <p>
                También podemos usar la palabra reservada <strong>else if</strong> seguido de la (expresión)
                </p>
                <h5>Ejemplo:</h5>
                 <div class="codigo">
                     <pre>
<code>
    //Con el ejemplo anterior pero cambiamos el valor de la variable

    <span class="cl-azul">int</span> personaEdad = 16;

    <span class="cl-azul">if</span>(personaEdad >= 18){

    }
    <span class="cl-azul">else if</span>(personaEdad >= 17){

    }
    <span class="cl-azul">else if</span>(personaEdad >= 16){
        <strong>Se cumple</strong>
    }

    //Podemos combinar como queramos todas las anteriores
</code>
                    </pre>
                 </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado">
                <h4>Switch</h4>
                <p>
                El condicional <strong>switch</strong> permite elegir entre varias opciones posibles. En realidad, este condicional puede ser expresado también usando condicionales if, por lo que podríamos decir que no es estrictamente necesario. Sin embargo, en algunos casos resulta más claro y limpio usar el condicional switch.
                </p>
                <h5>Ejemplo:</h5>
                 <div class="codigo">
                     <pre>
<code>
    //Utilizaremos dos variables, la variable <strong>mensaje </strong>(no le asignaremos valor de momento)
     que la utilizaremos para mostra un mensaje dependiendo de la evaluación del 
     <strong>switch</strong> y la variable <strong>personaEdad</strong> como dato para evaluar.
    
    <span class="cl-azul">string</span> mensaje;
    <span class="cl-azul">int</span> personaEdad = 15;

    <span class="cl-azul">switch</span>(personaEdad){
        case 18:
            mensaje = 'Tienes 18 años';
        break;
        case 17:
            mensaje = 'Tienes 17 años';
        break;
        case 16:
            mensaje = 'Tienes 16 años';
        break;
        case 15:
            mensaje = 'Tienes 15 años';
        break;
        default:
            mensaje = 'Tienes otra edad'
        break;
    }

    System.out.println(mensaje); // Output 'Tienes 15 años'

    //Podemos anidar switchs como en los ifs como queramos todas las anteriores
</code>
                    </pre>
                 </div> 
                 <p>
                La estructura del <strong>switch</strong> es sencilla. los <strong>break</strong> son necesarios (no son impresicindibles) 
                para cuando se cumpla una de las condiciones se pare la ejecución. Si no ponemos la palabra <strong>break</strong> la evaluación continuará. El bloque de <strong>default</strong> 
                no es imprescindible, es un bloque de código que se cumple cuando ningunas de las anteriores lo hacen, 
                funciona como un <strong>else</strong>
                </p>
                <h5>Ejemplo sin breaks:</h5>
                 <div class="codigo">
                     <pre>
<code>
    
    // Vamos a evaluar la variable <strong>dia</strong> con un <strong>switch</strong> 
    sin <strong>break</strong> después de todos los <strong>case</strong> para que el programa nos diga si es día es laborable o festivo.

    <span class="cl-azul">string</span> tipoDeDia;
    <span class="cl-azul">int</span> diaSemana = 5;

    <span class="cl-azul">switch</span>(diaSemana){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            tipoDeDia = 'Laborable';
        break;
        case 6:
        case 7:
            tipoDeDia = 'Festivo';
        break;
        default:
            tipoDeDia = 'Dato no valido';
        break;
    }

    System.out.println(tipoDeDia); // Output 'Laborable'

</code>
                    </pre>
                 </div> 
            </div>
        </div>
        
    </div>
</section>
<section class="section" id="arrays">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Arrays</h3>
                <p>Los <strong>Arrays</strong> se usan para almacenar multiples valores en una única variable, en vez de declarar variables separadas para cada valor.</p>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado">
                <h5>Declaración:</h5>
                <div class="codigo ">
                     <pre>
<code>
    
    // Para declarar un <strong>Array</strong> se define el tipo de la variable seguido de brackets []

    <span class="cl-azul">String[]</span> coches;

    // Ya tenemos nuestra variable que se llama coches y es es un array de <strong>Strings</strong>

</code>
                    </pre>
                 </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado">
                <h5>Asignar valor:</h5>
                <div class="codigo ">
                     <pre>
<code>
    
    // Para asignar valores pondremos los valores separados por coma dentro de curly braces {value1, value2}
       En este caso al ser de tipo String los valores irán entre comillas dobles

    <span class="cl-azul">String[]</span> coches = {"Volvo", "BMW", "Ford", "Mazda"};

    // Ya tenemos nuestra variable que se llama coches y es es un array de <strong>Strings</strong> 
       que contiene 4 valores o 4 posiciones.


    // Para crear un <strong>Array</strong> de Enteros (int):

    <span class="cl-azul">int[]</span> misNumeros = {1, 25, 41, 8, 9};

</code>
                    </pre>
                 </div> 
                 <strong>*Nota:</strong> las posiciones de un Array comienzan en 0 y no en uno. Es decir si tenemos nuestro Array de <strong>coches</strong>
                 y queremos saber en que posición del Array está <strong>"BMW"</strong> dirémos que se encuentra en la posición 1.
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado">
                <h5>Acceder a los elementos del Array:</h5>
                <div class="codigo ">
                     <pre>
<code>
    
    // Para acceder a los elementos del Array harémos referencia al índice donde se encuentra el elementos

    // Esta sentencia accede al tercer elemento

    <span class="cl-azul">String[]</span> coches = {"Volvo", "BMW", "Ford", "Mazda"};

    <span class="cl-azul">System</span>.out.println(coches[3]); // Output "Mazda"

</code>
                    </pre>
                 </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado">
                <h5>Cambiar valor de elemento en Array:</h5>
                <div class="codigo ">
                     <pre>
<code>
    
    // Para cambiar el valor de un elemento accedemos a su indice y le reasignamos un nuevo valor

    <span class="cl-azul">String[]</span> coches = {"Volvo", "BMW", "Ford", "Mazda"};

    coches[0] = "Skoda"

    <span class="cl-azul">System</span>.out.println(coches[0]); // Output "Skoda"

</code>
                    </pre>
                 </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado">
                <h5>Longitud del Array:</h5>
                <div class="codigo ">
                     <pre>
<code>
    
    // Para saber cuantos elementos tiene nuestro Array podemos usar la propiedad <strong>length</strong>

    <span class="cl-azul">String[]</span> coches = {"Volvo", "BMW", "Ford", "Mazda"};

    <span class="cl-azul">System</span>.out.println(coches.length); // Output 4

</code>
                    </pre>
                 </div> 
            </div>
        </div>
    </div>
</section>
<section class="section" id="loops">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Loops / bucles</h3>
                <p>Los bucles son uno de los tipos de sentencias y estructuras de control de flujo básicas que permiten repetir la ejecución de un bloque de código mientras se cumpla la condición de repetición, en cada iteración (vuelta) del bucle se evalúa la expresión de condición y en el momento que no se cumple se sale del bucle y continua.</p>
                <p>Existen 3 tipos básicos de Loops</p>
                <ul>
                    <li><a href="#for">for</a></li>
                    <li><a href="#while">while</a></li>
                    <li><a href="#do-while">do while</a></li>
                    <li><a href="#arrays-for">Arrays y bucles</a></li>
                </ul>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado" id="for">
                <h5>Bucle For:</h5>
                <div class="codigo ">
                     <pre>
<code>
    
    // En el siguente bloque de código mostramos la repetición del código que está dentro del bucle
       mientras la variable <strong>i</strong> sea menor que 5.
       En cada vuelta la variable <strong>i</strong> irá incrementando su valor en uno con la 
       sentencia <strong>i++</strong>.

    <span class="cl-azul">for</span> (int i = 0; i < 5; ++i) {
        System.out.println(i);

        // outupt:
                - primera vuelta = 0
                - segunda vuelta = 1
                - tercera vuelta = 2
                - cuarta vuelta = 3
                - quinta vuelta = 4 y sale del bucle
    }


</code>
                    </pre>
                 </div> 
            </div>
        </div>
        <div class="row destacado">
            <div class="col-12 col-lg-4">
                <h5>Estructura de bucle <strong>for</strong></h5>
            </div>
            <div class="col-12 col-lg-8 mt-4 mt-lg-0">
                <img src="assets/imagenes/explicacion_for.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado" id="while">
                <h5>Bucle While:</h5>
                <div class="codigo ">
                     <pre>
<code>
    
    // En el siguente bloque de código mostramos la repetición del código que está dentro del bucle
       <strong>while</strong> mientras la variable <strong>i</strong> sea menor que 5.
       En cada vuelta la variable <strong>i</strong> irá incrementando su valor en uno con la 
       sentencia <strong>i++</strong>.

       int i = 0;

        <span class="cl-azul">while</span> (i < 5) {

            System.out.println(i);

            // outupt:
                - primera vuelta = 0
                - segunda vuelta = 1
                - tercera vuelta = 2
                - cuarta vuelta = 3
                - quinta vuelta = 4 y sale del bucle

            i++;

        }
</code>
                    </pre>
                 </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado" id="while">
                <h5>Bucle  Do While:</h5>
                <p>Es como un while pero al revés. Primeramente se ejecuta la sentencia y luego evalúa la condición. Si la expresión de la condición es verdadera vuelve a dar un ciclo.</p>
                <div class="codigo ">
                     <pre>
<code>
    
    // En el siguente bloque de código mostramos la repetición del código que está dentro del bucle
       <strong>while</strong> mientras la variable <strong>i</strong> sea menor que 5.
       En cada vuelta la variable <strong>i</strong> irá incrementando su valor en uno con la 
       sentencia <strong>i++</strong>.

       int i = 0;

        <span class="cl-azul">do</span> {

            i++;

            System.out.println(i);

            // outupt:
                - primera vuelta = 1
                - segunda vuelta = 2
                - tercera vuelta = 3
                - cuarta vuelta = 4
                - quinta vuelta = 5 y sale del bucle

        };
        <span class="cl-azul">while</span> (i < 5);
</code>
                    </pre>
                 </div> 
            </div>
        </div>
    </div>
</section>
<section class="section" id="arrays-for">
    <div class="container">
        <div class="row">
            <div class="col-12 destacado">
                <h5>Arrays y for:</h5>
                <p>Ahora que sabemos como funcionan los bucles y que son los arrays, La sentencia <strong>for</strong>, nos ofrece una manera de iterar sobre un rango de valores (Array), porque da vueltas al bucle hasta que la condición se cumple.</p>
                <div class="codigo ">
                     <pre>
<code>
    
    // En el siguente bloque de código vamos a recorrer un array y mostrar sus valores
    
    //Array
    <span class="cl-azul">String[]</span> coches = {"Volvo", "BMW", "Ford", "Mazda"};

    // Para recorrer nuestro array usaremos un bucle <strong>for</strong>
    <span class="cl-azul">for(int i = 0; i < coches.length; i++)</span>{

        System.out.println(coches[i]);

        // Output 
            "Volvo"
            "BMW"
            "Ford"
            "Mazda"
    };

    // Lo que hemos hecho a sido:
        - iniciar la variable "i" = 0
        - poner la condición que si "i" es menor que coches.length (que es la longitud de nuestro Array)
        - incrementar i + 1 en cada vuelta

        De esta manera podemos recorrer cualquier array

</code>
                    </pre>
                 </div> 
            </div>
        </div>
    </div>
</section>
<section class="section" id="funciones">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>Funciones:</h5>
                <p>Las <strong>funciones</strong> son un elemento muy utilizado en la programación. Empaquetan y ‘aíslan’ del resto del programa una parte de código que realiza alguna tarea específica.</p>
                <p>Las ventajas son numerosas porque nos permite reutilizar código, tener un ecosistema más limpio, modularizado y sencillo de utilizar.</p>
                <p>En muchos de los lenguajes para crear una función necesitamos utilizar la palabra reservada <strong>function</strong>, en otros no como es el caso de Java o C</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 destacado">
                <h5>Ejemplo de función</h5>
                <div class="codigo ">
                     <pre>
<code>
    
    // funcion simple en C    
    <span class="cl-azul">void saludar()</span>{
        printf("Hola desde una función!");
    }

    // función en JavaScript
    <span class="cl-azul">function</span> saludar(){
        console.log("Hola desde una función!");
    }

    // función en Java
    <span class="cl-azul">public static void saludar</span>(){
        System.out.println("Hola desde una función");
    };

</code>
                    </pre>
                 </div> 
                 <h5>Parámetros</h5>
                 <p>Los parámetros se usan para mandar valores a las funciones. Una función trabajará con los parámetros para realizar las acciones. Por decirlo de otra manera, los parámetros son los valores de entrada que recibe una función.</p>
                 <p>Si una función tiene dos o más perámetros se escriben separados por coma.</p>
                 <div class="codigo ">
                     <pre>
<code>
    
    // Estos serán los valores que le pasaremos a la función como parámetros
    int numero1 = 5;
    int numero2 = 5;

    // función con parámetros en Java
    public static int <span class="cl-azul">sumaNumeros(int parametro1, int parametro2)</span>{

        return parametro1 + parametro2;
    };

    // Ahora <strong>invocamos</strong> a nusetra función y le pasamos los 
       datos reales como parámetros para que realize la operación

    <span class="cl-azul">sumaNumeros(numero1, numero2);</span> // Output 10

</code>
                    </pre>
                 </div> 
            </div>
        </div>
    </div>
</section>

<?php include_once('./inc/footer.php'); ?>