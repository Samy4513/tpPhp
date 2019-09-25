<?php
include'utils.inc.php';
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$op=$_POST['op'];


if ('*' == $op)
{
 echo $op1 * $op2;
}
elseif ('+' == $op)
{
    echo $op1 + $op2;
}
elseif ('-' == $op)
{
    echo $op1 - $op2;
}
else
{
    echo '<br/><strong>opérateur ' . $op . ' non géré </strong>';
}



for($cpt=0;$cpt<=3;++$cpt)
{
    echo'<input';
    if($cpt==0)
        {
        echo'checked="checked"';
        }
    echo'type="radio"name="op"value="'.$operateurs[$cpt].'"/>'.$operateurs[$cpt].'<br/>'."\n";
 }

?>
