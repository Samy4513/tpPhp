
<?php
//    echo date('lFd,Y').'<br>';
//    $jour=date('lFd,Y');
//    echo $jour.'<br>'.'<br>';
//    $jour2=date('d/m/Y',strtotime('2020-04-01'));
//    echo $jour2.'<br>'.'<br>';

?>
<form action="calcul.php" method="post">

    <input checked="checked"   type="radio"    name="op"     value="*"/> *;
    <input type="radio"        name="op1"      value="+"/> + ;
    <input type="radio"        name="op2"      value="-"/> - ;
    <input type="radio"        name="op3"      value="/"/> / ;
    <input type="submit" value="Submit">
</form>
