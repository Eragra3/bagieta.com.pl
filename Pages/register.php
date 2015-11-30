<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
    <meta name="author" content="Bagieta">
    <meta name="description" content="Register">
    <meta name="keywords"
          content="bagieta,bagiety,baguette,bread,chleb,pieczywo,baking,register,zarejestruj się, rejestracja">
    <link type="text/css" href="../Content/style.css" rel="stylesheet"/>
</head>
<body>

<?php include('header.php'); ?>

<section id="body" class="content">
    <form class="size-8 form panel" method="post" action="account.php">
        <div class="form-heading">Zarejestruj się</div>
        <div class="form-group">
            <label for="firstName">Imię</label>
            <input id="firstName" name="firstName" type="text" placeholder="imię" autofocus>
        </div>
        <div class="form-group">
            <label for="secondName">Nazwisko</label>
            <input id="secondName" name="secondName" type="text" placeholder="nazwisko" required>
        </div>
        <div class="form-group">
            <label for="password">Hasło</label>
            <input id="password" name="password" type="password" placeholder="hasło" required>
        </div>
        <div class="form-group">
            <label for="password2">Powtórz hasło</label>
            <input id="password2" name="password2" type="password" placeholder="powtórz hasło" required>
        </div>
        <div class="form-group">
            <label for="monthOfBirth">Miesiąc urodzenia</label>
            <input list="months" id="monthOfBirth" name="monthOfBirth" placeholder="miesiąc"/>
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
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefon</label>
            <input id="phone" name="phone" type="tel" pattern="\d{9}" placeholder="numer telefonu">
        </div>
        <div class="form-group">
            <label for="favNumber">Moje ulubiene</label>
            <input id="favNumber" name="favNumber" type="text" placeholder="ulubiony numer">
        </div>
        <div class="align-right">
            <button class="btn-reset" type="reset">Wyczyść formularz</button>
            <button class="btn-submit" type="submit">Dodaj</button>
        </div>
    </form>
</section>

<?php include('footer.php'); ?>

</body>
</html>