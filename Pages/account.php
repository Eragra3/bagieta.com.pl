<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twoje konto</title>
    <link type="text/css" href="../Content/style.css" rel="stylesheet"/>
</head>
<body>

<?php include('header.php'); ?>

<section id="body" class="content">
    <form class="size-8 form panel" method="post">
        <div class="form-heading">Dane dodatkowe</div>
        <div class="form-group">
            <label for="color">Ulubiony kolor</label>
            <input id="color" name="color" type="color" autofocus>
        </div>
        <div class="form-group">
            <label for="namedayMonth">Miesiąc imienin</label>
            <input id="namedayMonth" name="namedayMonth" type="month" list="months" placeholder="Styczeń">
            <datalist id="months">
                <option value="Styczeń">
                <option value="Luty">
                <option value="Marzec">
                <option value="Kwiecień">
                <option value="Maj">
                <option value="Czerwiec">
                <option value="Lipiec">
                <option value="Sierpień">
                <option value="Wrzesień">
                <option value="Październik">
                <option value="Listopad">
                <option value="Grudzień">
            </datalist>
        </div>
        <div class="form-group">
            <label for="coolnes">Fajność</label>
            <input id="coolnes" name="coolnes" type="range" value="8" min="0" max="10" step="1">
        </div>
        <div class="form-group">
            <label for="siteUrl">Moja strona</label>
            <input id="siteUrl" name="siteUrl" type="url">
        </div>
        <div class="align-right">
            <button class="btn-reset btn-dark" type="reset">Wyczyść formularz</button>
            <button class="btn-submit btn-dark" type="submit">Dodaj</button>
        </div>
    </form>
    <div class="size-8  form panel">
        <?php

        $months = ["Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień",
            "Wrzesień", "Październik", "Listopad", "Grudzień"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstName = test_input($_POST["firstName"]);
            $secondName = test_input($_POST["secondName"]);
            $monthOfBirth = test_input($_POST["monthOfBirth"]);
            $favNumber = test_input($_POST["favNumber"]);
            $favNumber = str_replace(',', '.', $favNumber);

            if (is_numeric($favNumber)) {
                $favNumber = floatval($favNumber);
            } else {
                $favNumber = "Microsoft Abażur";
            }

            $email = test_input($_POST["email"]);
            $phone = test_input($_POST["phone"]);

            $password1 = test_input($_POST["password"]);
            $password2 = test_input($_POST["password2"]);
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($password1 != $password2) {
            ?><span class="form-error">Podane hasła się nie zgadzają</span><?php
        } else {
            ?>
            <div class="form-heading">Podstawowe dane</div>
            <div class="form-group">
                <label for="name">Imię</label>
                <input id="name" name="name" type="text" disabled value="<?php echo $firstName ?>">
            </div>
            <div class="form-group">
                <label for="nazwisko">Nazwisko</label>
                <input id="nazwisko" name="nazwisko" type="text"
                       disabled value="<?php echo $secondName ?>">
            </div>
            <div class="form-group">
                <label for="monthOfBirth">Miesiąc urodzenia</label>
                <input id="monthOfBirth" name="monthOfBirth" type="text" disabled
                       value="<?php echo $monthOfBirth ?>"/>
                <?php
                if (!in_array($monthOfBirth, $months)) {
                    ?><span class="form-error">Miesiąc nie jest na liście :C</span><?php
                }
                ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" disabled
                       value="<?php echo $email ?>">
            </div>
            <div class="form-group">
                <label for="phone">Telefon</label>
                <input id="phone" name="phone" type="tel"
                       disabled value="<?php echo $phone ?>">
                <?php
                if (strlen($phone) != 9) {
                    ?><span class="form-error">Telefon ma nieprawidłowy format</span><?php
                }
                ?>
                <div class="form-group">
                    <label for="favNumber">Ulubiona liczba</label>
                    <input id="favNumber" name="favNumber" type="text" disabled value="<?php echo $favNumber ?>">
                </div>
            </div>
            <?php
        }
        ?>


    </div>
</section>

<?php include('footer.php'); ?>

</body>
</html>