<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require './partials/nav.php';
    ?>  
    <main>
        <h1>Contact</h1>
        <div id="container">
            <form id="contact-from">
                <input type="name"   placeholder="Imię i Nazwisko"   onfocus="this.placeholder=' '"  onblur="this.placeholder='imie i nazwisko'"><br>
                <input type="email"  placeholder="E-Mail"onfocus="this.placeholder=' '"   onblur="this.placeholder='email'"><br>
                <textarea name="messange"    placeholder="Treść wiadomości"   onfocus="this.placeholder=' '"  onblur="this.placeholder='Treść wiadomości'"></textarea><br>
                <input type="submit" value="Wyślij"  >
            </form>
        </div>
    </main>
    <?php
        include './partials/footer.php';
    ?>
    <script src="./skrypt.js"></script>
</body>
</html>