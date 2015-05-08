<?php
//класс добавления и выборки данных из базы guser

class TableModel
{
    //Метод добавления данных в базу
     function insertTable(PDO $pdo,$ip,$user_name,$e_mail,$text,$type_brauser)
    {
        $stmt = $pdo->prepare('INSERT INTO guser (ip,user_name,e_mail,text,type_brauser) VALUES (?,?,?,?,?)');
        $stmt->bindParam(1, $ip);
        $stmt->bindParam(2, $user_name);
        $stmt->bindParam(3, $e_mail);
        $stmt->bindParam(4, $text);
        $stmt->bindParam(5, $type_brauser);
        $stmt->execute();
    }


    //Метод выборки данных из базы
    function selectTable(PDO $pdo)
    {
        $stmt = $pdo->prepare('select user_name,e_mail,text,time from guser order by `time` desc');
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (empty($row)) {
            return null;
        }
        return $row;

    }


//Создание запроса на выборку данных из таблицы
    function createTable(){
    $dsn = 'mysql:host=localhost;dbname=mysql';
    $pdo = new PDO($dsn, 'root', 'root');
    $opt=$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $apt = TableModel::selectTable($pdo);
    return $apt;
    }
}
