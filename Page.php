<?php
spl_autoload_register(function ($class) {
    include 'controller/model/' . $class . '.php';
});


class Page{

    function pagenator(){

$io = new TableModel();
$column = $io->createTable1();
$num = 5;
$total = intval($column/$num)+1;

$page = $_GET['page'];
$page = intval($page);

if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;

// Вычисляем начиная к какого номера
// следует выводить сообщения

$start = $page * $num - $num;
// Выбираем $num сообщений начиная с номера $start
$link = mysql_connect('localhost', 'root', 'root')
or die('Не удалось соединиться: ' . mysql_error());
echo 'Соединение успешно установлено';
mysql_select_db('mysql') or die('Не удалось выбрать базу данных');

$query = "SELECT * FROM guser1 order by `time` desc LIMIT $start,$num";
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

//$result = mysql_query("SELECT user_name,time FROM guser1 post LIMIT $start, $num");


// В цикле переносим результаты запроса в массив $postrow
while ( $postrow[] = mysql_fetch_array($result))
    echo "<table>";
for($i = 0; $i < 5; $i++)
{
    echo "<tr>
         <td>".$postrow[$i]['user_name']."</td>
         <td>".$postrow[$i]['e_mail']."</td>
         <td>".$postrow[$i]['text']."</td>
         <td>".$postrow[$i]['time']."</td></tr>
         ";
}
echo "</table>";



// Проверяем нужны ли стрелки назад
if ($page != 1) $pervpage = '<a href= PPage.php?page=1><<</a>
                               <a href= PPage.php?page=' . ($page - 1) .'><</a> ';
// Проверяем нужны ли стрелки вперед
if ($page != $total) $nextpage = ' <a href= ./Page.php?page='. ($page + 1) .'>></a>
                                   <a href= ./Page.php?page=' .$total. '>>></a>';

// Находим две ближайшие станицы с обоих краев, если они есть
if($page - 2 > 0) $page2left = ' <a href= ./Page.php?page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = '<a href= ./Page.php?page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';
if($page + 2 <= $total) $page2right = ' | <a href= ./Page.php?page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href= ./Page.php?page='. ($page + 1) .'>'. ($page + 1) .'</a>';

// Вывод меню
echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage;



    }

}
