<?php require_once 'controller/TableController.php';
        require_once 'controller/FormController.php'?>
<html>
<head>
    <meta content="text/php; charset=utf-8" http-equiv="Content-Type" />
    <title>Гостевая книга</title>
    <link rel='stylesheet' href='tabsort0.css' type='text/css'>
    <script type='text/javascript' src='tabsort0.js'></script>
</head>
<body>
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
    $u = new TableController();
    $u->table();
?>
        </tbody>
        </table>

            <p><h2>Оставить сообщение:</h2></p>

        <form action="controller/FormController.php" method="post">

            <label for="user_name">Ваше имя:   </label><input type="text" id="user_name" name="user_name" placeholder="введите имя"><br>
            <p></p>
            <label for="e_mail">Ваш email:   </label><input type="email" id="e_mail" name="e_mail" placeholder="введите email"><br>
            <p></p>
            <label for="text">Сообщение:   </label><br><textarea name="text" rows="10" cols="120"></textarea><br>

            <button type="submit">Добавить сообщение</button>

        </form>
        <?php
        $test = new FormController();
        $test->formSet();
        ?>
</body>
</html>
