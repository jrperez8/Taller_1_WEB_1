<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Taller</title>
</head>
<body>
    <header>
        <div class="container">
          <h1>TALLER EVALUATIVO # 1 - JORGE RODRIGUEZ</h1>
        </div>        
    </header>
   <main>
     <div class="container">
         <div class="row">

         </div>
     <h2 class="text-primary">EJERCICIO 1</h2>
        <form action="index.php" method="POST">
            <input type="number" placeholder="Ingrese #1" name="numero1"> Número 1<br><br>
            <input type="number" placeholder="Ingrese #2" name="numero2"> Número 2<br><br>
            <button type="submit" name= "Calcular" class="btn btn-primary">Calcular</button>            
        </form>
        <?php if(isset($_POST["Calcular"])):?>
            <p>
                <?php
                     $vlrNumero1=$_POST["numero1"];
                     $vlrNumero2=$_POST["numero2"];                            
                     $totalSuma= $vlrNumero1+$vlrNumero2;
                     echo("El Resultado de la Suma es: ".$totalSuma);
                ?> <br>
                <?php
                     $totalResta= $vlrNumero1-$vlrNumero2;                                 
                     echo("El Resultado de la Resta es: ".$totalResta);
                     ?> <br>
                <?php
                     $totalMulti= $vlrNumero1*$vlrNumero2;
                     echo("El Resultado de la Multiplicación es: ".$totalMulti);
                ?>
            </p>               
        <?php endif ?>
        <br>

        <h2 class="text-primary">EJERCICIO 2</h2>
            <form action="index.php" method="POST">
                <input type="text" name="usuario"> INGRESE SU NOMBRE <br><br>
                <input type="number" step="0.01" placeholder="Peso" name="peso"> INGRESE SU PESO <br><br>
                <input type="number" step="0.01" placeholder="Estatura" name="estatura"> INGRESE SU ESTATURA <br><br>
                <button type="submit" name= "imc" class="btn btn-primary">Calcular</button> 
            </form>
            <?php if(isset($_POST["imc"])):?>
                <p>
                    <?php
                        $usuario = $_POST["usuario"];
                        $vlr_Peso= $_POST["peso"];
                        $vlr_Estatura= $_POST["estatura"];
                        $total_imc= $vlr_Peso/($vlr_Estatura*$vlr_Estatura);
                        echo("La IMC de ".$usuario." es: ".$total_imc); 
                    ?> <br>
                    <?php
                        if($total_imc<18.5)
                        {
                              echo("Peso Insuficiente"); 
                        }
                        else if($total_imc>=18.5 && $total_imc<24.9)
                        {
                            echo("Peso Normal");
                        }
                        else if ($total_imc>=25 && $total_imc<26.9)
                        {
                            echo("SobrePeso Grado I");
                        }
                        else if ($total_imc>=27 && $total_imc<29.9)
                        {
                            echo("SobrePeso Grado II (PreObesidad)");
                        }
                        else if ($total_imc>=30 && $total_imc<34.9)
                        {
                            echo("Obesidad Tipo I");
                        }
                        else if ($total_imc>=35 && $total_imc<39.9)
                        {
                            echo("Obesidad Tipo II");
                        }
                        else if ($total_imc>=40 && $total_imc<49.9)
                        {
                            echo("Obesidad Tipo III (Mórbida)");
                        }
                        else{echo("Obesidad Tipo IV (Extrema)");}
                        
                    ?>
                </p>
            <?php endif ?>  
            <br> 
        <h2 class="text-primary">EJERCICIO 3</h2>    
         <form action="index.php" method="POST">
             <input type="number" name="cantidadz"> INGRESE LA CANTIDAD DE ZAPATOS <br><br>
             <input type="number" name="valorz"> INGRESE EL VALOR UNITARIO DEL PAR DE ZAPATOS<br><br>
             <button type="submit" name= "zapato" class="btn btn-primary">Calcular</button> 
         </form>
         <?php
            if(isset($_POST["zapato"])):?>
            <p>
            <?php
                $cantidadz = $_POST["cantidadz"];
                $zapato = $_POST["valorz"];
                $totalz = $cantidadz * $zapato;
                echo("El Precio de los Zapatos es: $".$totalz);
                if($cantidadz==3)
                {
                    $descuento = $totalz * 0.10;
                }
                
                else if($cantidadz>3 && $cantidadz <=8)
                {
                    $descuento = $totalz * 0.20;
                }
                else if ($cantidadz > 8 )
                {
                    $descuento = $totalz * 0.50;
                }
                else if($cantidadz == 1 || $cantidadz == 2)
                {
                    $descuento = 0;
                }
              
                            
            ?><br><br>
            <?php
                $totalpago = $totalz - $descuento;
                echo("Se aplica un descuento de: $".$descuento);?><br><br>
            <?php
                echo("El Total a Pagar es: $".$totalpago);
            ?>
            
            </p>
            <?php endif ?>
            <br>
        <h2 class="text-primary">EJERCICIO 4</h2>    
        <form action="index.php" method="POST">
                <input type="text" placeholder="nombre" name="nom_empleado"> NOMBRE DEL EMPLEADO <br><br>
                <input type="number" name="hrs_lab"> NUMERO DE HORAS LABORADAS EN LA SEMANA<br><br>
                <button type="submit" name= "postobon" class="btn btn-success">Salario</button>
        </form>
        <?php
        if(isset($_POST["postobon"])): ?>
        <p>
            <?php
                $nom_empleado = $_POST["nom_empleado"];
                $hrs_lab = $_POST["hrs_lab"];

                if($hrs_lab <= 40)
                {
                    $sal_seman = $hrs_lab * 20000;
                }
                else if ($hrs_lab > 40)
                {
                    $sal_ord = 800000;
                    $hrs_extras= $hrs_lab - 40; 
                    $vlr_extras = $hrs_extras * 25000;
                    $sal_seman = $sal_ord + $vlr_extras;
                }
                ?><br>
            <?php
                echo("El Salario Semanal de ".$nom_empleado." es: $ ".$sal_seman);
            ?>
        </p>
       <?php endif ?>
       <br>
       <h2 class="text-primary">EJERCICIO 5</h2>
          <h3>Clientes Bancolombia Sucursal A</h3>  
            <form action="index.php" method="POST">
            <table class="table table-bordered">
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Salario</th>
                </tr>
                <tr align="center">
                    <td><input type="text" name="name1" placeholder="Nombre Cliente 1" required> </td>
                    <td><input type="number" name="tel1" placeholder="Telefono Cliente 1" required> </td>
                    <td><input type="text" name="dir1" placeholder="Direccion Cliente 1" required></td>
                    <td><input type="number" name="sal1" placeholder="Salario Cliente 1" required></td>
                </tr>
                <tr align="center">
                    <td><input type="text" name="name2" placeholder="Nombre Cliente 2" required> </td>
                    <td><input type="number" name="tel2" placeholder="Telefono Cliente 2" required> </td>
                    <td><input type="text" name="dir2" placeholder="Direccion Cliente 2" required></td>
                    <td><input type="number" name="sal2" placeholder="Salario Cliente 2" required></td>
                </tr>
                <tr align="center">
                    <td><input type="text" name="name3" placeholder="Nombre Cliente 3" required> </td>
                    <td><input type="number" name="tel3" placeholder="Telefono Cliente 3" required> </td>
                    <td><input type="text" name="dir3" placeholder="Direccion Cliente 3" required></td>
                    <td><input type="number" name="sal3" placeholder="Salario Cliente 3" required></td>
                </tr>
                <tr align="center">
                    <td><input type="text" name="name4" placeholder="Nombre Cliente 4" required> </td>
                    <td><input type="number" name="tel4" placeholder="Telefono Cliente 4" required> </td>
                    <td><input type="text" name="dir4" placeholder="Direccion Cliente 4" required></td>
                    <td><input type="number" name="sal4" placeholder="Salario Cliente 4" required></td>
                </tr>
                <tr align="center">
                    <td><input type="text" name="name5" placeholder="Nombre Cliente 5" required> </td>
                    <td><input type="number" name="tel5" placeholder="Telefono Cliente 5" required> </td>
                    <td><input type="text" name="dir5" placeholder="Direccion Cliente 5" required></td>
                    <td><input type="number" name="sal5" placeholder="Salario Cliente 5" required></td>
                </tr>
            </table>
            <ul>
                <li>Sumatoria Sucursal B: $ 40.000.000</li>
                <li>Sumatoria Sucursal C: $ 32.000.000</li>
            </ul>
            <button type="submit" name="bancolombia" class="btn btn-dark">GUARDAR</button>
            </form>
            <?php
             if(isset($_POST["bancolombia"])): ?>
              <p>
                  <?php
                  $name1 = $_POST["name1"];
                  $name2 = $_POST["name2"];
                  $name3 = $_POST["name3"];
                  $name4 = $_POST["name4"];
                  $name5 = $_POST["name5"];
                  $tel1 = $_POST["tel1"];
                  $tel2 = $_POST["tel2"];
                  $tel3 = $_POST["tel3"];
                  $tel4 = $_POST["tel4"];
                  $tel5 = $_POST["tel5"];
                  $dir1 = $_POST["dir1"];
                  $dir2 = $_POST["dir2"];
                  $dir3 = $_POST["dir3"];
                  $dir4 = $_POST["dir4"];
                  $dir5 = $_POST["dir5"];
                  $sal1 = $_POST["sal1"];
                  $sal2 = $_POST["sal2"];
                  $sal3 = $_POST["sal3"];
                  $sal4 = $_POST["sal4"];
                  $sal5 = $_POST["sal5"];     
                  $sumatoriaSalarios = $sal1+$sal2+$sal3+$sal4+$sal5;
                  $salarios_sucuA = $sumatoriaSalarios;
                  echo("La Suma de Salarios de la Sucursal A es: $ ".$sumatoriaSalarios);
                  ?><br><?php  
                  $salarios_sucuB = 40000000;
                  $salarios_sucuC = 32000000;  
                  ?>
                  <?php
                    if($salarios_sucuA > $salarios_sucuB && $salarios_sucuA > $salarios_sucuB)
                    {
                        echo("La Sucursal A tiene la mejor sumatoria de salarios");
                    }
                    else if ($salarios_sucuB > $salarios_sucuC)
                    {
                        echo("La Sucursal B tiene la mejor sumatoria de salarios");
                    }
                    else
                    {
                        echo("La Sucursal C tiene la mejor sumatoria de salarios");
                    }
                  ?><br>
              </p>
              <h4>RESUMEN CLIENTES SUCURSAL A</h4>
                    
                        <ul>
                            <li>
                            <?php
                                echo("El Cliente 1 se llama ".$name1.", su teléfono es ".$tel1.", su dirección ".$dir1." y su salario $ ".$sal1)
                            ?>
                            </li>
                            <li>
                            <?php
                                echo("El Cliente 2 se llama ".$name2.", su teléfono es ".$tel2.", su dirección ".$dir2." y su salario $ ".$sal2)
                            ?>
                            </li>
                            <li>
                            <?php
                                echo("El Cliente 3 se llama ".$name3.", su teléfono es ".$tel3.", su dirección ".$dir3." y su salario $ ".$sal3)
                            ?>
                            </li>
                            <li>
                            <?php
                                echo("El Cliente 4 se llama ".$name4.", su teléfono es ".$tel4.", su dirección ".$dir4." y su salario $ ".$sal4)
                            ?>
                            </li>
                            <li>
                            <?php
                                echo("El Cliente 5 se llama ".$name5.", su teléfono es ".$tel5.", su dirección ".$dir5." y su salario $ ".$sal5)
                            ?>
                            </li>
                        </ul>
                    
        <?php endif ?>
   </main>
     </div>       
   <footer>
   </footer>     
</body>
</html>