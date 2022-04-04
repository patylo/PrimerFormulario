<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro productos</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
  </head>
  <body>
  <h1>EL TRIGO DE ORO</h1><br>
    <div class="contenedor">
      
      <h2>Registro productos</h2>
      <?php $resultado = $_POST;?>
      <?php $nombre = $resultado['nombre'];?>
      <?php $fechcom = $resultado['fechcom'];?>
      <?php $fechcom2 = strtotime($fechcom,time());?>
      <?php $fechaActual = strtotime(date('d-m-Y',time()));?>
      <?php $cantidad = $resultado['cantidad'];?>
      <?php $caducidad = $resultado['caducidad'];?>
      <?php $caducidad2 = strtotime($caducidad,time());?>
      <?php $costo = $resultado['costo'];?>
      
      <?php 
          // validar inputs
          if(! (filter_has_var(INPUT_POST, 'nombre') && 
                (strlen(filter_input(INPUT_POST,'nombre')) > 0))) {
            echo "El nombre del producto es obligatorio";
          } else {    ?>
              <p>Nombre: <?php echo $nombre; ?></p>
          <?php } ?><br>
      
         
          <?php 
          // validar inputs
          
          if(! (filter_has_var(INPUT_POST, 'fechcom') && 
                (strlen(filter_input(INPUT_POST,'fechcom')) > 0))) {
            echo "La fecha de compra del producto es obligatoria";

          } elseif($fechcom2 > $fechaActual){
            echo "La fecha de compra del producto es inválida.";//valida que la fecha de compra sea menor a la actual
          }
           else {    ?>
              <p>Fecha de compra: <?php echo $fechcom; ?></p>
          <?php } ?><br>
       
          <?php 
          // validar inputs
          if(is_int('cantidad') or
            ! (filter_has_var(INPUT_POST, 'cantidad') && 
                (strlen(filter_input(INPUT_POST,'cantidad')) > 0))) {
            echo "La cantidad de productos es inválida";
          } else {    ?>
              <p>Cantidad de productos: <?php echo $cantidad; ?></p>
          <?php } ?><br>

          <?php 
          // validar inputs
          if(! (filter_has_var(INPUT_POST, 'caducidad') && 
                (strlen(filter_input(INPUT_POST,'caducidad')) > 0))) {
            echo "La fecha de caducidad del producto es obligatoria";
          } 
          elseif($caducidad2 < $fechaActual){
            echo "La fecha de caducidad del producto es inválida.";//Preguntar si se deja esta
          }
          else {    ?>
              <p>Fecha de caducidad: <?php echo $caducidad; ?></p>
          <?php } ?><br>

          <?php 
          // validar inputs
          if(is_numeric('costo') or
            ! (filter_has_var(INPUT_POST, 'costo') && 
                (strlen(filter_input(INPUT_POST,'costo')) > 0))) {
            echo "El costo es inválido";
          } else {    ?>
              <p>Costo total: <?php echo $costo; ?></p>
          <?php } ?>

          <?php // validando textarea ?>
       <h2>Mensaje</h2>
       <?php if(isset($_POST['mensaje'])) {
         $mensaje = $_POST['mensaje'];
         $nuevo_mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
         if(strlen($nuevo_mensaje) > 0 &&  trim($nuevo_mensaje)) {
           echo  $nuevo_mensaje;
         } else {
           echo "El mensaje esta vacio";
         }
       } ?>

        

          

    </div>




  </body>
</html>
