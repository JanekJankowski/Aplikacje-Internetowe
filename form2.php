<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Form</title>
</head>
<body>
    <table>
        <form action="./scripts/form2_data.php" method="POST">
            <tr><td style="color: red;">*</td><td>Company</td><td><input type="text" name="company"></td></tr>
            <tr><td style="color: red;">*</td><td>First name</td><td><input type="text" name="fname"></td></tr>
            <tr><td style="color: red;">*</td><td>Last name</td><td><input type="text" name="lname"></td></tr>
            <tr><td style="color: red;">*</td><td>E-mail</td><td><input type="text" name="mail"></td></tr>
            <tr><td style="color: red;">*</td><td>Title</td><td><input type="text" name="title"></td></tr>
            <tr><td style="color: red;">*</td><td>Phone</td><td><input type="number" name="phone"></td></tr>
            <tr><td style="color: red;">*</td><td>Cancel registration</td><td><input type="checkbox" name="reg"></td></tr>
            <tr><td style="color: red;">*</td><td>Training session</td>
            <td><select name="session">
                <option value="1">1</option>
                <option value="2">2</option>
            </select></td></tr>
            <tr><td style="color: red;">*</td><td>Job Function</td><td>
            <input type="radio" name="function" value="Menagement">Menagement<br>
            <input type="radio" name="function" value="Administration">Administration<br>
            <input type="radio" name="function" value="Partner">Partner<br>
            <input type="radio" name="function" value="Employee">Employee<br>
            </td></tr>
            <tr><td></td><td>Diatery Requirements</td><td><input type="text" name="req"></td></tr>
            <tr><td></td><td>Expectations</td><td><textarea name="exp"></textarea></td></tr>
            <tr><td></td><td></td><td><input type="submit" value="Submit"></td></tr>
        </form>
    </table>
</body>
</html>