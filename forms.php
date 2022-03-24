<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Form</title>
</head>
<body>
    <h4>Dane użytkownika</h4>
    <form action="./scripts/form_data.php" method="POST">
        <input type="text" name="name" placeholder="Podaj imię"><br>
        <input type="password" name="pass" placeholder="Podaj hasło"><br>
        <select name="city">
            <option value="poz">Poznań</option>
            <option value="gn">Gniezno</option>
        </select><br>
        <input type="radio" name="gender" value="Człowiek">Człowiek<br>
        <input type="radio" name="gender" value="Kobieta">Kobieta<br>
        <input type="checkbox" name="terms">Regulamin<br>
        <input type="submit" value="Zatwierdź">
    </form>
</body>
</html>