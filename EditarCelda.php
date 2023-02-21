PHP
<?php
    require_once("DataBaseConnect.php");
    $input = filter_input_array(INPUT_POST);
    if ($input['action'] == 'edit') {   
        $update_field='';
        if(isset($input['area'])) {
            $update_field.= "area='".$input['area']."'";
        } else if(isset($input['servidor'])) {
            $update_field.= "servidor='".$input['servidor']."'";
        }
        if($update_field && $input['id']) {
            $sql_query = "UPDATE areas_encargados SET $update_field WHERE id='" . $input['id'] . "'";  
            mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));     
        }
    }
?>