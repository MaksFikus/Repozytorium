<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'egzamin',3306);
    function dodaj(){
        global $conn;
        $sql = "SELECT miesiac,rok FROM zadania WHERE dataZadania = '2020-07-01'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc())
            {
                echo "miesiac: ".$row['miesiac'].", rok: ".$row['rok'];
            }
        $result->free_result();
    }
    function dodaj2(){
        global $conn;
        $sql2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac='lipiec'";
        $result = $conn->query($sql2);
        while ($row = $result->fetch_assoc())
            {
                echo "<section class='day'><h5>".$row['dataZadania']."</h5><p>".$row['wpis']."</p></section>";
            }
        $result->free_result();
    }
    function dodaj3(){
        global $conn;
        $wpis = $_POST['text'];
        $sql3 = "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-07-01'";
        mysqli_query($conn, $sql3);
    }
?>
<?php
dodaj3();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" type="text/css" href="styl5.css"/>
</head>
<body>
    <section id="lewy">
        <img src="logo1.png" alt="Mój kalendarz"/>
    </section>   
    <section id="prawy">
        <h1>KALENDARZ</h1>
        <?php
        dodaj();
        ?>
    </section>
    <main>
        <?php
        dodaj2();
        ?>
    </main>
    <footer>
        <form method="post">
            <label>Dodaj wpis: </label>
            <input type="text" name="text"/>
            <input type="submit" value="DODAJ"/>

        <p>Stronę wykonał: Maksymilian Fikus 4C</p>
    </footer>
</body>
</html>