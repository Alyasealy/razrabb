<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Semenova</title>
</head>

<body>
<p>преове</p>
    <?

    $array = ['Семенова', 'Сидоров', 'Крутая', 'Кайфовая', 'Необычный', 'Фамилия', 'красный'];
    foreach ($array as $student) {
        echo "<div class='qe'>- $student\n</div>";
    }
    $expelled = array_pop($array);

    echo "<br>удаленро $expelled";
    ?><br>
    <?
    $count = count($array);
    echo "<p>количеств $count</p>";
    ?>
    <?
    if (in_array('Сидоров', $array)) {
        echo "в есть 'Сидоров'";
    } else {
        echo 'нет его';
    }
        ?>

    <p>втооое</p>

    <?

    $clubs = [
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный" => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    ];

    asort($clubs);

    echo "<ol>";
    foreach ($clubs as $club => $surname) {
        echo "<li>$club - $surname</li>";
    }


    echo "</ol>";
    ?>

    <p>третье</p>

    <?

    $student = [
        'name' => 'Алинка',
        'surname' => 'семенова',
        'class' => '425веб',
        'hobby' => ['кушац'],
        'social' => ['tg' => '@alyasealy']
    ];
    ?>
    <h2>Мои данные</h2>
        <p><span>имя:</span> <?php echo $student['name']?></p>
        <p><span> фамилия:</span> <?php echo $student['surname']?></p>
        <p><span> группа:</span> <?php echo $student['class']?></p>
        <p><span> хобби:</span> <?php echo $student['hobby'][0] ?></p>
        <p><span> соцсети:</span> <?php echo $student['social']['tg'] .'<br>', $student['social']['tg'] ?></p>
    
    </body>

</html>