<?php
    if(isset($_POST['reg'])){
        echo "<script>history.back();</script>";
        exit();
    }

    foreach ($_POST as $key => $value){
        if(empty($value) && $key!="req" && $key!="exp"){
            echo "<script>history.back();</script>";
            exit();
        }
    }

    echo "Dane użytkownika:<br>";
    switch ($_POST['session']) {
        case '1':
            $session="1";
            break;
        case '2':
            $session="2";
            break;
        default:
            $session="Other";
            break;
    }
    
    echo <<< DATA
        Company: $_POST[company]<br>
        First name: $_POST[fname]<br>
        Last name: $_POST[lname]<br>
        E-mail: $_POST[mail]<br>
        Title: $_POST[title]<br>
        Phone: $_POST[phone]<br>
        Session: $session<br>
        Job function: $_POST[function]<br>
        Requirements: $_POST[req]<br>
        Expectations: $_POST[exp]<br>
DATA;
?>