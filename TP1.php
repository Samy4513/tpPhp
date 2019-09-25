
<?php
//    echo date('lFd,Y').'<br>';
//    $jour=date('lFd,Y');
//    echo $jour.'<br>'.'<br>';
//    $jour2=date('d/m/Y',strtotime('2020-04-01'));
//    echo $jour2.'<br>'.'<br>';

?>
<form action="calcul.php" method="post">

    <input type="text" name="calcul" value="Entrez le calcul"><br>
    <input checked="checked"   type="radio"    name="op"     value="*"/> * <br/>
    <input type="radio"        name="op1"      value="+"/> + <br/>
    <input type="radio"        name="op2"      value="-"/> - <br/>
    <input type="radio"        name="op3"      value="/"/> / <br/>
    <input type="submit" value="Submit">
</form>
