<?php
require 'apiUtils.php';

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        // MEDICO
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
                    'DataNascimento' => $data[7]['value'],
                    'IdEspecialidade' => $data[8]['value']
                );

                $result = callAPI("POST", "http://localhost:5000/v1/medicos/create", $dataObject);
                echo json_encode($result);
            }
            break;
        case 'updateMedico' :
            if(isset($_POST['data']) && !empty($_POST['data'])) {
                $data = $_POST['data'];

                $dataObject = (object) array(
                    'Nome' => $data[1]['value'],
                    'Morada' => $data[2]['value'],
                    'CodPostal' => $data[3]['value'],
                    'Email' => $data[4]['value'],
                    'Nif' => $data[5]['value'],
                    'C.Profissional' => $data[6]['value'],
                    'Telemovel' => $data[7]['value'],
                    'DataNascimento' => $data[8]['value'],
                    'IdEspecialidade' => $data[9]['value']
                );

                $result = callAPI("POST", "http://localhost:5000/v1/medicos/update/" . $data[0]['value'], $dataObject);
                echo json_encode($result);
            }
            break;
        case 'deleteMedico' :
            if(isset($_POST['data']) && !empty($_POST['data'])) {
                $data = $_POST['data'];

                $dataObject = (object) array( /*vazio*/ );

                $result = callAPI("DELETE", "http://localhost:5000/v1/medicos/delete/" . $data[0]['value'], $dataObject);
                echo json_encode($result);
            }
            break;
            // MEDICO END

        // UTENTE
        case 'addUtente' :
            if(isset($_POST['data']) && !empty($_POST['data'])) {
                $data = $_POST['data'];

                $dataObject = (object) array(
                    'Nome' => $data[0]['value'],
                    'Morada' => $data[1]['value'],
                    'CodPostal' => $data[2]['value'],
                    'Email' => $data[3]['value'],
                    'Nif' => $data[4]['value'],
                    'NrUtente' => $data[5]['value'],
                    'Telemovel' => $data[6]['value'],
                    'DataNascimento' => $data[7]['value']
                );

                $result = callAPI("POST", "http://localhost:5000/v1/utentes/create", $dataObject);
                echo json_encode($result);
            }
            break;
        case 'updateUtente' :
            if(isset($_POST['data']) && !empty($_POST['data'])) {
                $data = $_POST['data'];

                $dataObject = (object) array(
                    'Nome' => $data[1]['value'],
                    'Morada' => $data[2]['value'],
                    'CodPostal' => $data[3]['value'],
                    'Email' => $data[4]['value'],
                    'Nif' => $data[5]['value'],
                    'NrUtente' => $data[6]['value'],
                    'Telemovel' => $data[7]['value'],
                    'DataNascimento' => $data[8]['value']
                );

                $result = callAPI("POST", "http://localhost:5000/v1/utentes/update/" . $data[0]['value'], $dataObject);
                echo json_encode($result);
            }
            break;
        case 'deleteUtente' :
            if(isset($_POST['data']) && !empty($_POST['data'])) {
                $data = $_POST['data'];

                $dataObject = (object) array( /*vazio*/ );

                $result = callAPI("DELETE", "http://localhost:5000/v1/utentes/delete/" . $data[0]['value'], $dataObject);
                echo json_encode($result);
            }
            break;
            // UTENTE END

        // CONSULTAS
        case 'addConsulta' :
            if(isset($_POST['data']) && !empty($_POST['data'])) {
                $data = $_POST['data'];

                $dataObject = (object) array(
                    'Descricao' => $data[0]['value'],
                    'IdUtente' => $data[1]['value'],
                    'IdMedico' => $data[2]['value'],
                    'DataConsulta' => $data[3]['value']
                );

                $result = callAPI("POST", "http://localhost:5000/v1/consultas/create", $dataObject);
                echo json_encode($result);
            }
            break;
        case 'updateConsulta' :
            if(isset($_POST['data']) && !empty($_POST['data'])) {
                $data = $_POST['data'];

                $dataObject = (object) array(
                    'Descricao' => $data[1]['value'],
                    'IdUtente' => $data[2]['value'],
                    'IdMedico' => $data[3]['value'],
                    'DataConsulta' => $data[4]['value']
                );

                $result = callAPI("POST", "http://localhost:5000/v1/consultas/update/" . $data[0]['value'], $dataObject);
                echo json_encode($result);
            }
            break;
        case 'deleteConsulta' :
            if(isset($_POST['data']) && !empty($_POST['data'])) {
                $data = $_POST['data'];

                $dataObject = (object) array( /*vazio*/ );

                $result = callAPI("DELETE", "http://localhost:5000/v1/consultas/delete/" . $data[0]['value'], $dataObject);
                echo json_encode($result);
            }
            break;
            // CONSULTAS END

        // ESPECIALIDADES
        case 'addEspecialidade' :
            if(isset($_POST['data']) && !empty($_POST['data'])) {
                $data = $_POST['data'];

                $dataObject = (object) array(
                    'Nome' => $data[0]['value']
                );

                $result = callAPI("POST", "http://localhost:5000/v1/especialidades/create", $dataObject);
                echo json_encode($result);
            }
            break;
        case 'updateEspecialidade' :
            if(isset($_POST['data']) && !empty($_POST['data'])) {
                $data = $_POST['data'];

                $dataObject = (object) array(
                    'Nome' => $data[1]['value']
                );

                $result = callAPI("POST", "http://localhost:5000/v1/especialidades/update/" . $data[0]['value'], $dataObject);
                echo json_encode($result);
            }
            break;
        case 'deleteEspecialidade' :
            if(isset($_POST['data']) && !empty($_POST['data'])) {
                $data = $_POST['data'];

                $dataObject = (object) array( /*vazio*/ );

                $result = callAPI("DELETE", "http://localhost:5000/v1/especialidades/delete/" . $data[0]['value'], $dataObject);
                echo json_encode($result);
            }
            break;
            // ESPECIALIDADES END
        default:
            echo json_encode("ERRO: ação invalida");
    }
}

    
?>
