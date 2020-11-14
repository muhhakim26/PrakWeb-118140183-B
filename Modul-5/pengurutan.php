<!DOCTYPE>
<html>
<head>
    <title>pengurutan data/kata</title>
</head>
<body>
    <?php
    $data=array("lanrine","aduh","qifuat","toda","anevi","samid","kifuat");
    sort($data);
    for($i=0; $i<=6; $i++){
        echo $data[$i]." ";
    }
    ?>
</body>
</html>