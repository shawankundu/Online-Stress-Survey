<?php
function insert_data($id, $q_name, $q_answer)
{
    include '_db_con.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data1 = explode(',', $q_answer);;
        $stmt = $conn->prepare("insert into answer(student_id, qusetion_no, answer, question_opt ) values(?, ?, ?, ?)");
        $stmt->bind_param("isss", $id, $q_name, $data1[0], $data1[1]);
        $execval = $stmt->execute();
        $stmt->close();
        $conn->close();
    }
}

function d($data, $return = true)
{
    echo "<pre>";
    print_r($data);
    if ($return)
        die;
}

function categorizeStressLevel($stressLevel)
{
    if ($stressLevel >= -30 && $stressLevel <= -10) {
        return "Low Stress";
    } elseif ($stressLevel > -10 && $stressLevel <= 10) {
        return "Normal Stress";
    } elseif ($stressLevel > 10 && $stressLevel <= 20) {
        return "High Stress";
    } elseif ($stressLevel > 20 && $stressLevel <= 30) {
        return "Risky Level";
    } else {
        return "Invalid Stress Level";
    }
}

function categorizeTextColor($stressLevel)
{
    if ($stressLevel >= -30 && $stressLevel <= -10) {
        return "green"; // Low Stress (Green Text)
    } elseif ($stressLevel > -10 && $stressLevel <= 10) {
        return "#47ed21"; // Normal Stress (Black Text)
    } elseif ($stressLevel > 10 && $stressLevel <= 20) {
        return "#f59542"; // High Stress (Orange Text)
    } elseif ($stressLevel > 20 && $stressLevel <= 30) {
        return "#f54242"; // Risky Level (Red Text)
    } else {
        return "gray"; // Invalid Stress Level (Gray Text)
    }
}

function getCategoryContent($stressLevel)
{
    if ($stressLevel >= -30 && $stressLevel <= -10) {
        return "Keep smiling!"; // Low Stress
    } elseif ($stressLevel > -10 && $stressLevel <= 10) {
        return "You're doing fine, but keep yourself cool."; // Normal Stress
    } elseif ($stressLevel > 10 && $stressLevel <= 20) {
        return "Consider trying some yoga exercises to relax. Here are some <a href='https://www.example.com/yoga-links'>yoga links</a>."; // High Stress
    } elseif ($stressLevel > 20 && $stressLevel <= 30) {
        return "It's recommended to consult a psychologist. You can visit this link 
        <p><a href= 'https://pib.gov.in/PressReleasePage.aspx?PRID=1652240#:~:text=The%20helpline%20operates%20in%20this,from%20any%20part%20of%20India'>
         Mental Health Rehabilitation </a>
         </p>"; // Risky Level
    } else {
        return "Invalid Stress Level";
    }
}

function categorizeImage($stressLevel)
{
    if ($stressLevel >= -30 && $stressLevel <= -10) {
        return "images/smile.jpg"; // Image for Low Stress
    } elseif ($stressLevel > -10 && $stressLevel <= 10) {
        return "images/normal.png"; // Image for Normal Stress
    } elseif ($stressLevel > 10 && $stressLevel <= 20) {
        return "images/highstress.png"; // Image for High Stress
    } elseif ($stressLevel > 20 && $stressLevel <= 30) {
        return "images/riskylevel.png"; // Image for Risky Level
    } else {
        return "invalid_stress.jpg"; // Default Image for Invalid Stress Level
    }
}
