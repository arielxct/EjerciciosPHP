<?php
function datos_productos() {
    
    return [
        [
        'id'=>'1',
        'nombre'=>'velero1',
        'precio'=>5000000,
        //***************** */
       
       
        //**************** */
        // 'imagen'=>"https://images.app.goo.gl/XYbtGqTxwW9j4oSF7"
        'imagen'=>" http://localhost/EjerciciosPHP/veleros/Foto1.PNG"
        
        ],

        [
        'id'=>'2',
        'nombre'=>'velero2',
        'precio'=>2500000,
        'imagen'=>" http://localhost/EjerciciosPHP/veleros/Foto2.PNG"
        ],
        [
        'id'=>'3',
        'nombre'=>'velero3',
        'precio'=>10000000,
        'imagen'=>" http://localhost/EjerciciosPHP/veleros/Foto3.PNG"
        ],
        [
        'id'=>'4',
        'nombre'=>'velero4',
        'precio'=>12500000,
        'imagen'=>" http://localhost/EjerciciosPHP/veleros/Foto4.PNG"
        ],
             
        
        
        
        
        ];
};


$veleros = datos_productos();

?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LOS MEJORES VELEROS A LA VENTA</title>
  </head>


  <body class="row">
    <h4 class="text-center">LOS MEJORES VELEROS A LA VENTA</h4>

<?php
    foreach ($veleros as $veleros) {
        ?>


  <div class="col-3 m-auto">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
  <img src="<?php echo $veleros['imagen'] ?>" class="card-img-top" alt="card-imagen">
  <div class="card-body">
    <h5 class="card-title">Código: <?php echo $veleros['id'] ?></h5>
    <p class="card-text">Nombre: <?php echo $veleros['nombre'] ?></p>
    <p class="card-text">Precio: $<?php echo $veleros['precio'] ?></p>
    </div>
  </div>
  </div>
<br>



<?php
} 
?>




<footer>
  <p class="text-center">
    www.veleros.com
  </p>
</footer>
</body>
</html>
