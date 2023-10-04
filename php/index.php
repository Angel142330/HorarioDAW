<?php
include 'data.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Prueba Pull Request</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="titulo">
    <h1>GRUPO DAW2V</h1>
    <h2>Integrante</h2>
    <ul>
      
        <li><?= $integrantes[0] ?></li>
     
    </ul>
  </div>
  <div class="contenido">
    <h2>HORARIO</h2>
    <table>
      <thead>
        <th>Hora</th>
        <?php foreach ($dias as $dia) : ?>
          <th><?= $dia ?></th>
        <?php endforeach ?>
      </thead>
      <tbody>
        <?php foreach ($horas as $hora => $clases) : ?>
          <tr>
            <td><?= $hora ?></td>
            <?php foreach ($dias as $dia) : ?>
              <td><?= $clases[$dia] ?></td>
            <?php endforeach ?>
          <?php endforeach ?>
          </tr>
      </tbody>
    </table>
    <div class="asignaturas">
    <h2>MÓDULOS</h2>
      <table>
        <thead>
        <tr>
            <th>Módulo</th>
            <th>Descripción</th>
            <th>Profesor</th>
            <th>+</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($modulos as $modulo => $descripcion) : ?>
            <tr>
                <td><?= $modulo ?></td>
                <td><?= $descripcion["modulo"] ?></td>
                <td><?= $descripcion["profesor"] ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="../js/main.js"></script>
</body>

</html>