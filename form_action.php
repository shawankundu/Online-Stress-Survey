<?php 
include '_db_con.php';
include 'functions.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];

    if($_POST['question_page'] == 1)
    {
        insert_data( $id, 'q1',$_POST['q1']);
       
        insert_data( $id, 'q2',$_POST['q2']);

        insert_data( $id, 'q3',$_POST['q3']);

        header("location: page2.php");

    }else if($_POST['question_page'] == 2)
    {
        
        insert_data( $id, 'q4',$_POST['q4']);

        insert_data( $id, 'q5',$_POST['q5']);

        insert_data( $id, 'q6',$_POST['q6']);

        header("location: page3.php");

    }else if($_POST['question_page'] == 3)
    {
        insert_data( $id, 'q7',$_POST['q7']);

        insert_data( $id, 'q8',$_POST['q8']);

        insert_data( $id, 'q9',$_POST['q9']);

        header("location: page4.php");

    }else if($_POST['question_page'] == 4)
    {
        
        insert_data( $id, 'q10',$_POST['q10']);

        insert_data( $id, 'q11',$_POST['q11']);

        insert_data( $id, 'q12',$_POST['q12']);

        header("location: page5.php");

    }else if($_POST['question_page'] == 5)
    {
        
        insert_data( $id, 'q13',$_POST['q13']);

        insert_data( $id, 'q14',$_POST['q14']);

        insert_data( $id, 'q15',$_POST['q15']);

        header("location: page6.php");

    }else if($_POST['question_page'] == 6)
    {
        
        insert_data( $id, 'q16',$_POST['q16']);

        insert_data( $id, 'q17',$_POST['q17']);

        insert_data( $id, 'q18',$_POST['q18']);

        header("location: page7.php");

    }else if($_POST['question_page'] == 7)
    {
        
        insert_data( $id, 'q19',$_POST['q19']);

        insert_data( $id, 'q20',$_POST['q20']);

        insert_data( $id, 'q21',$_POST['q21']);

        header("location: page8.php");

    }else if($_POST['question_page'] == 8)
    {
        
        insert_data( $id, 'q22',$_POST['q22']);

        insert_data( $id, 'q23',$_POST['q23']);

        insert_data( $id, 'q24',$_POST['q24']);

        header("location: page9.php");

    }else if($_POST['question_page'] == 9)
    {
        
        insert_data( $id, 'q25',$_POST['q25']);

        insert_data( $id, 'q26',$_POST['q26']);

        insert_data( $id, 'q27',$_POST['q27']);

        header("location: page10.php");

    }else if($_POST['question_page'] == 10)
    {
        
        insert_data( $id, 'q28',$_POST['q28']);

        insert_data( $id, 'q29',$_POST['q29']);

        header("location: result.php");
    }
}
