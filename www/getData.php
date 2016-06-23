 <?php 
  ini_set('display_errors', 1);
  $mysqli = new mysqli('127.0.0.1','webaccess','webAxs20_','SistemaDeMapas');
  mysqli_set_charset($mysqli, 'utf8');
    $result = $mysqli->query("select * from Pais");
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    echo json_encode($data);
    $result->close();
    $mysqli->close();  

  ?>