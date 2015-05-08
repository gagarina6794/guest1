<?php

spl_autoload_register(function ($class) {
    include  $class . '.php';
});
?>
<html>
<head>
    <meta content="text/php; charset=utf-8" http-equiv="Content-Type" />
    <title>Гостевая книга</title>
    <link rel='stylesheet' href='tabsort0.css' type='text/css'>
    <script type='text/javascript' src='tabsort0.js'></script>
</head>
<body>

<a href="controller/index.php"><input type="button" value="Оставить сообщение"></a>

<p></p>

        <table class='sortable' id='t'>
        <colgroup><col class='wem3'><col class='wem13'>
            <col class='wem5'><col class='wem5'><col class='wem5'>
            <col class='wem7'><col class='wem5'><col class='wem9'>
            <col class='wem6'><col class='wem4_5'><col class='wem4_5'><col class='wem6'></colgroup>
        <thead>
    <tr>
        <th axis='num' width="10" ><h3>Имя пользователя</h3></th>
        <th axis='num' width="10"><h3>Email</h3></th>
        <th axis='num' width="900"><h3>Сообщение</h3></th>
        <th axis='num' width="10"><h3>Дата публикации</h3></th>
    </tr>
    </thead>
            <tbody>
<?php

    $table = new Page;
    $table->pagenator1();
//$page1 = new Pagenator();
//$page1->pagenator();
?>
        </tbody>
        </table>

<p></p>

       <a href="controller/index.php"><input type="button" value="Оставить сообщение"></a>
<?php

$page1 = new Pagenator();
$page1->pagenator();

?>
</body>
</html>
