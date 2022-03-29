<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
        <h1>SKLEP MUZYCZNY</h1>
    </div>

    <div class="lewy">
        <h2>NASZA OFERTA</h2>
        <ol>
            <li>Instrumenty muzyczne</li>
            <li>Sprzęt audio</li>
            <li>Płyty CD</li>
        </ol>
    </div>
    <div class="prawy">

    <?php
    $pobieranie = mysqli_connect("localhost","root","","sklep_muzyczny");
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];
    $tel = $_POST['tel'];
    $log = $_POST['log'];
    $haslo = $_POST['haslo'];

    $q = mysqli_query($pobieranie, "INSERT INTO Uzytkownicy (id, imie, nazwisko, adres, telefon) values ('', '$imie','$nazwisko', '$adres', '$tel')");
    $q1 = mysqli_query($pobieranie, "INSERT INTO Konta values ('', '$log','$haslo')");
    $q2 = mysqli_query($pobieranie, "SELECT imie, nazwisko FROM Uzytkownicy");
    $q3 = mysqli_query($pobieranie, "SELECT adres FROM Uzytkownicy WHERE id='1'");

    echo $imie.''.$nazwisko.'zostało zarejestrowane w sklepie';

    mysqli_close($pobieranie);
?>

    </div>
</body>
</html>