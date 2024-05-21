<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body class="boton_regreso">

    <div  class="boton_regreso">

        <form action="index.html" >
        <BUtton type="submit">X</BUtton>
        </form>
       </div>

    <header class="titulo" style="text-align: center;"> 
        <h1 style="color: white;">Registro Pre-venta</h1>
    </header>

    <div>   
      <form action="./enviarRegistro.php" method="post">
          <br>
            <div>
                <label for="nombre_usuario">Ingresa tu nombre(s): </label>
                <input type="text" name="nombre_usuario" required maxlength="30" placeholder="ingresa tu nombre">
            </div>
          
           <div>
                <label for="apellido_usuario">ingresa tu primer apellido</label>
                <input type="text" name="apellido_usuario" required maxlength="30" placeholder="ingresa tu apeido">
            </div>

            <div>
                <label for="mail">Ingresa tu correo electronico: </label>
                <input type="email" name="mail" required maxlength="100" placeholder="ingresa tu correo">
            </div>

             <div>
                <label for="mail">telefono: </label>
                <input type="tel" name="telefono" required maxlength="10" placeholder="ingresa tu telefono">
            </div>

          
            <button type="submit" name="submit">Registrarme</button>
          




     </form>
        
    </div>
    
</body>
</html>
