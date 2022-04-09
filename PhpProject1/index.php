
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src='main.js'></script>
</head>

<?php
$first_num = rand(1,10);
$second_num = rand(1,10);

$result = $first_num*$second_num;
//hame check trung result viet sau
$randAnswer1= rand(1, 10);
$randAnswer2= rand(1, 50);
$randAnswer3= rand(1, 100);

$listAnswer =array($randAnswer1,$randAnswer2,$randAnswer3,$result);
shuffle($listAnswer);
$random_keys=array_rand($listAnswer,4);

$button1=$listAnswer[$random_keys[0]];
$button2=$listAnswer[$random_keys[1]];
$button3=$listAnswer[$random_keys[2]];
$button4=$listAnswer[$random_keys[3]];


?>
<body>
    <div class="container">
        <div class="scoreNum">Score : </div>
        <div class="board" value="">
<?php echo $first_num." x ".$second_num; ?>
        </div>
        <div class="mess">
            <p>Click on the corect answer</p>
        </div>
        <div class="answerBox">
            <input type="button" value="<?php echo $button1 ?>" class="answer">  </input>
            <input type="button" value="<?php echo $button2 ?>" class="answer"> </div>
            <input type="button" value="<?php echo $button3 ?>" class="answer"> </div>
            <input type="button" value="<?php echo $button4 ?>" class="answer"> </div>
        </div>
        <div class="header">
            <button>Submit</button>
            <div class="time">sadasd</div>
        </div>
    </div>
</body>

</html>