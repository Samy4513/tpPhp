<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
    echo '<hr/><br/><strong>' . PHP_EOL . $title . '</strong><br/><hr/>';
};

function end_page()
{
    echo '</body> </html>' ;
}

?>

<form action="data-processing.php" method="post">
<input type="text" placeholder="ID" name="ID"/><br>
<input type="radio" placeholder="Sexe"/>Homme <input type="radio" placeholder="Sexe"/>Femme<br>
<input type="text" placeholder="EMAIL" name="mail"/><br>
    <input type="password" placeholder="Mdp" name="password" /><br>
    <input type="password" placeholder="Retapez Mdp" /><br>

<select name="Pays">
    <option value="France">France</option>
    <option value="Canada">Canada</option>
    <option value="Lou Martegue">Lou Martegue</option>
</select><br>
<input type="checkbox" value="Submit"/>Conditions générales<br>
<input type="submit" name="action" value="mailer"/><br>
</form>