<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "Date.php";?>
    <?php include "File.php";?>
    
    <p><?=$date1->getDay()?></p>
    <p><?=$date1->getMonth("ru")?></p>
    <p><?=$date1->getYear()?></p>
    <p><?=$date1->getWeekDay("ru")?></p>
    <p><?=$date1->addDay(2)?></p>
    <p><?=$date1->addMonth(1)?></p>
    <p><?=$date1->subYear(12)?></p>
    <p><?=$date1->format("Y")?></p>
    <p><?=$date1->__toString()?></p>

    <!-- <p><?=$file->getPath()?></p>

    <p><?=$file->getDir()?></p>

    <p><?=$file->getName()?></p>

    <p><?=$file->getExt()?></p>

    <p><?=$file->getSize()?></p>

    <p><?=$file->getText()?></p>

    <p><?=$file->setText("Text text text")?></p>
    <p><?="Измененная строка: " . $file->getText()?></p>

    <p><?=$file->appendText("TEXTTEXTEXT")?></p>
    <p><?="Строка после добавления: ".$file->getText()?></p>

    <p><?="copy status: ".$file->copy("D:\\php_test_file\\copy_file.txt")?></p>

    <p><?//="rename status: ".$file->rename("NEW_FILE.txt")?></p>

    <p><?="replace status: ".$file->replace("D:\\php_test_file\\file.txt")?></p>-->


</body>
</html>