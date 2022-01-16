<?php
require 'apiUtils.php';

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'addMedico' :
            if(isset($_POST['data']) && !empty($_POST['data'])) {
                $data = $_POST['data'];

                $dataObject = (object) array(
                    'Nome' => $data[0]['value'],
                    'Morada' => $data[1]['value'],
                    'CodPostal' => $data[2]['value'],
                    'Email' => $data[3]['value'],
                    'Nif' => $data[4]['value'],
                    'C.Profissional' => $data[5]['value'],
                    'Telemovel' => $data[6]['value'],
                    'DataNascimento' => $data[7]['value']
                );

                $result = callAPI("POST", "http://localhost:5000/v1/medicos/create", $dataObject);
                echo json_encode($result);
            }
            break;
        default:
            echo json_encode("ERRO: acao invalida");
    }
}

    
?>
