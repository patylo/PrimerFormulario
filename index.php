<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro productos</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
  </head>
  <body>

    <h1 style="text-aling:center"><img src="img/trigo.png" height="60px" width="50px">  El TRIGO DE ORO  <img src="img/trigo.png" height="60px" width="50px"></h1>
    <div class="contenedor">
      <h2>Registro de productos</h2>

        <div class="contenido">

          <form class="" action="respuesta.php" method="post">

            

                  <div class="campo">
                      <label for="nombre">Nombre del producto: 
                            <input type="text" name="nombre" id="nombre">
                    </label>
                  </div><br>

                  <div class="campo">
                      <label for="fechcom">Fecha de compra:
                          <input type="date" name="fechcom" id="fechcom">
                      </label>
                  </div><br>
 
                  <div class="campo">
                      <label for="cantidad">Cantidad:
                          <input type="text" name="cantidad" id="cantidad">
                      </label>
                  </div><br>

                  <div class="caducidad">
                      <label for="caducidad">Caducidad:
                          <input type="date" name="caducidad" id="caducidad">
                      </label>
                  </div><br>


                  <div class="costo">
                      <label for="costo">Costo:
                          <input type="txt" name="costo" id="costo">
                      </label>
                  </div>
          

            <div class="textarea">
                  <div class="campo">
                    <label for="mensaje"> Descripci&oacute;n del producto <br/>
                        <textarea name="mensaje" rows="8" cols="40" id="mensaje"></textarea>
                    </label>
                    <input type="submit">
                  </div>
            </div>
          </form>


        </div>
    </div>




  </body>
</html>
