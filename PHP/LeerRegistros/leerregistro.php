	<?php


	// MYSQLI_BOTH ---> Para buscar el numero de la fila
	// MYSQLI_NUM ---> Obtiene una fila como array
	// MYSQLI_ASSOC ---> Crea un arreglo 

  echo "<pre>";
  # Conexión a la base de datos
  $conn = mysqli_connect( 'localhost', 'pruebas', 'pruebas', 'PRUEBAS');

  # Sentencia para leer los registros de la tabla users
  $sql = "Select id, name, email, created From users";

  # Ejecutamos la consulta a la base de datos PRUEBAS
  $result = mysqli_query( $conn, $sql);
  # Recogemos el primer registro de la tabla
  $rows = mysqli_fetch_array( $result, MYSQLI_BOTH); // Este es para buscar el numero de la fila

  # Lo imprimimos por pantalla
  print_r ( $rows);

  # Recorremos el array de registros hasta el final
  do {
    $data[] = $rows;
  }while ( $rows = mysqli_fetch_array( $result, MYSQLI_BOTH));

  # Mostramos por pantalla el array donde hemos guardado los registros
  print_r ( $data);

  # Cerramos la conexión
  mysqli_close( $conn);
  ?>