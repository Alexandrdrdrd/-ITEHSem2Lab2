<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js.js"></script>
</head>
<body>
    <?php include "connection.php"?>
<form method="get" action="1.php">
        <p>Вывести расписание лабораторных работ группы 
            <select name="group" id="group" onchange="form1()">
                <?php
                    $group = $collection->distinct("group");
                    foreach ($group as $document) {
                        echo "<option>$document</option>";
                    }
                ?>
            </select>
        <button>ОК</button>
    </form>
    <form method="get" action="2.php">
        <p>Вывести расписание занятий преподавателя 
            <select name="teacher" id="teacher" onchange="form2()">
                <?php
                    $group = $collection->distinct("teacher");
                    foreach ($group as $document) {
                        echo "<option>$document</option>";
                    }
                ?>
            </select>
        c дисциплиной
            <select name="disciple" id="disciple" onchange = form2()>
                <?php
                    $group = $collection->distinct("disciple");
                    foreach ($group as $document) {
                        echo "<option>$document</option>";
                    }    
                ?>
            </select>
        <button>ОК</button>
    </form>
    <form method="get" action="3.php">
        <p>Вывести расписание по аудитории 
            <select name="auditorium" id="auditorium" onchange="form3()">
                <?php
                    $auditorium = $collection->distinct("auditorium");
                    foreach ($auditorium as $document) {
                        echo "<option>$document</option>";
                    }
                ?>
            </select>
        <button>ОК</button>
    </form>
<p id="res"></p>
</body>
</html>