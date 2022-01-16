<?php
header('Content-type: application/json');
//require 'apiUtils.php';

///var_dump( $_POST );

//echo print_r($_POST);

//if(isset($_POST['data']) && !empty($_POST['data'])) {
//$data = $_POST['data'];
/*
$ObjectDeclared = (object) array(
    'Nome' => $data[0].value,
    'Morada' => $data[1].value,
    'CodPostal' => $data[2].value,
    'Email' => $data[3].value,
    'Nif' => $data[4].value,
    'C.Profissional' => $data[5].value,
    'Telemovel' => $data[6].value,
    'DataNascimento' => $data[7].value
);*/
//echo "####  isto crlho #####".$data;
 echo json_encode("####  isto crlho #####".$_POST['data']);   

//}



/*
$url ='"http://localhost:5000/v1/medicos/create"';
$result = callAPI("POST", $url, $data);

echo $result;*/
    
?>
