<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/style.css">
    <title>Practica 2 - IPAP PAW</title>
</head>
<body>
    <header id="header" class="header"> 
        <div class="container">
            <h1 class="title"><b><i>Práctica 2</i></b></h1>    
            <div class="header-container">
                <div class="logo">
                    <h3>LOGO</h3>
                </div> 
                <div class="navbar">
                    <nav>
                        <ul>
                            <li>
                                <a href="../index.html">Home</a>
                            </li>                            
                            <li>                                
                                <a href="./calculatorJS.html">Calculadora en JS</a>
                            </li>
                            <li>                                
                                <a href="./calculatorPHP.html">Calculadora en PHP</a>
                            </li>
                        </ul>
                    </nav>      
                </div>                
            </div>
        </div>       
    </header>
    <main class="main container">
        <div class="container">
            <h2>Respuestas:</h2>
            <ol>                
                <?php 
                    $num = 8;
                    echo '<li>No soy un h1, pero soy un li y con una variable numerica en php: '.$num.'</li>';
                    $numRand = rand(1, 10);
                    echo '<li>Variable numerica random entre 1 y 10: '.$numRand.'</li>';
                    if($numRand % 2 == 0){
                        echo '<li>Variable numerica random '.$numRand.' es par</li>';
                    }else {
                        echo '<li>Variable numerica random '.$numRand.' es impar</li>';
                    }
                    $myArray = [];
                    $myArray[1] = "hola";
                    $myArray[2] = "mundo";
                    $myArray[3] = "soy";
                    $myArray[4] = "un";
                    $myArray[5] = "vector";

                    echo '<li>Vector creado</li>';
                ?>
                <li>
                    <ul>
                        <?php
                        $i = 1;
                        foreach ($myArray as $valor) { 
                            echo '<li>'.$i. '-' .$valor.'</li>';
                            $i++;
                        }
                        ?>          
                    </ul>
                </li>
                    
                    

                
            </ol>
            
           
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-container">
                <div class="navbar">
                    <nav>
                        <ul>
                            <li>
                                <a href="../index.html">Home</a>
                            </li>                            
                            <li>                                
                                <a href="./calculatorJS.html">Calculadora en JS</a>
                            </li>
                            <li>                                
                                <a href="./calculatorPHP.html">Calculadora en PHP</a>
                            </li>
                        </ul>
                    </nav>      
                </div>
                <div class="logo">
                    <h3>LOGO</h3>
                </div>
            </div>
            <div class="copyright">
                <small>Todos los derechos reservados</small>
            </div>
        </div>
    </footer>
    <script type="module" src="../js/script.js"></script>
</body>
</html>