


<?php
include'utils.inc.php';
$operateurs='*+-/';
?>


<form action="Calcul.php" method="post">




<!--    <input checked="checked"   type="radio"    name="op"     value="*"/> * <br/>-->
<!--    <input type="radio"        name="op"      value="+"/> + <br/>-->
<!--    <input type="radio"        name="op"      value="-"/> - <br/>-->
<!--    <input type="radio"        name="op"      value="/"/> / <br/>-->
    <?php
    for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
    {
        echo '<input ';
        if($cpt == 0)
        {
            echo 'checked="checked" ';
        }
        echo 'type="radio" name="op" value="' . $operateurs[$cpt] . '"/>' . $operateurs[$cpt] . ' <br/>' . "\n";
}
    ?>

    <input type="text" name="op1" ><br>
    <input type="text" name="op2" ><br>
    <input type="submit" value="Submit">
</form>

