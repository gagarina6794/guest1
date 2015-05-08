<?php
require_once 'controller/model/TableModel.php';
require_once 'index.php';


//Класс приема данных получненных из формы
class FormController{

    function formSet(){
        $dsn = 'mysql:host=localhost;dbname=mysql';
        $pdo = new PDO($dsn, 'root', 'root');
        $opt=$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $user_name = $_POST['user_name'];
        $email = $_POST['e_mail'];
        $message = $_POST['text'];
        $ins = new TableModel();
        $ins->insertTable($pdo,'39485',$user_name,$email,$message,'chrome');
    }


}
