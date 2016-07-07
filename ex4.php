<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function nextN($param = false) {
    $nextW = date('Y-m-d', strtotime("next Wednesday"));
    $nextS = date('Y-m-d', strtotime("next Saturday"));

    $nextW = new DateTime($nextW);
    $nextW->setTime(20, 00);

    $nextS = new DateTime($nextS);
    $nextS->setTime(20, 00);


    $dT = $param ? $param : date('Y-m-d H:i:s');

    var_dump($dT);
    $diff1 = abs(strtotime($nextW->format('Y/m/d H:i:s')) - strtotime($dT));
    $diff2 = abs(strtotime($nextS->format('Y/m/d H:i:s')) - strtotime($dT));


    var_dump($diff1);

    var_dump($diff2);

    if ($diff1 > $diff2) {
        $res = "Next " . $nextS->format('Y/m/d H:i:s') . "<br>";
    } else {
        $res = "Next " . $nextW->format('Y/m/d H:i:s') . "<br>";
    }
    return $res;
}

$data = false;
if (isset($_POST['date'])) { //check if form was submitted
    $data = $_POST['date']; //get input text
}


$r = nextN($data);

echo $data ? "by param " . $r : "by current " . $r;
//not validate date 
?>

<html>
    <body>    
        <form action="" method="post">
<?php echo $data ? $data : ""; ?></br>
            Date : <input type="text" name="date"/>
            <input type="submit" name="SubmitButton"/>
            <span>Format example not valid : 2016-07-09 20:00:00</span>
        </form> 

    </body>
</html>


