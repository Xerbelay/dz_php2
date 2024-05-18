<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 1 -->
<!-- <form method="get">
    <textarea name="text"></textarea>
    <input type="submit">
</form>
<?php 
if($_GET['text']){
    $arr = $_GET['text'];
    echo 'количество слов: ' . str_word_count($arr) . '<br>';
    echo 'количество символов: ' . strlen($arr) . '<br>';
}
?> -->

<!-- 2 -->
<form method="GET">
    <select name="day">
        <?php 
            for ($i = 1; $i <= 31; $i++){
                echo "<option value='$i'>$i</option>";
        } ?>
    </select>
    <select name="month">
        <?php
            $months = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
            foreach ($months as $key => $month) {
                echo "<option value='" . ($key + 1) . "'>$month</option>";
            }
        ?>
    </select>
    <select name="year">
        <?php 
            for ($i = 1990; $i <= 2025; $i++){
                echo "<option value='$i'>$i</option>";
        } ?>
    </select>
    <input type="submit">
</form>
<?php
    if(!empty($_GET)) {
        $day = $_GET['day'];
        $month = $_GET['month'];
        $year = $_GET['year'];

        $dayOfWeek = date("l", mktime(0, 0, 0, $month, $day, $year));
        echo "<p>День недели: $dayOfWeek</p>";
    }
?>

</body>
</html>