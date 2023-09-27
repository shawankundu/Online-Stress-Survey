<?php
function insert_data( $id, $q_name, $q_answer)
{
    include '_db_con.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $stmt = $conn->prepare("insert into answer(student_id, qusetion_no,answer ) values(?, ?, ?)");
        $stmt->bind_param("iss", $id,$q_name, $q_answer);
        $execval = $stmt->execute();
        $stmt->close();
        $conn->close();
    }
}

function d($data, $return =true)
{
    echo "<pre>";
    print_r($data);
    if($return)
    die;
}

?>