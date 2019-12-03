<?php 






$conn = new mysqli("localhost","root","","consorcio");





$query = $conn->query("SELECT * FROM departamento WHERE  dni_p=".$_REQUEST["dni_p"]);
    
    if($query->num_rows > 0){
        $userData = $query->fetch_assoc();
        $data['status'] = 'ok';
        $data['result'] = $userData;
    }else{
        $data['status'] = 'err';
        $data['result'] = '';
    }
    
 echo json_encode($data);


?>