
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
<input type="checkbox" value="Submit"/><br>
<input type="submit" name="action" value="mailer"/><br>
</form>