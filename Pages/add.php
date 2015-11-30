<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dodaj recenzję</title>
    <link type="text/css" href="../Content/style.css" rel="stylesheet"/>
</head>
<body>
<section id="header">
    <nav class="nav-bar">
        <a class="nav-title" href="index.php">Bagieta</a>

        <div class="btn-group btn-group-dark">
            <a href="add.php" class="btn left">Dodaj</a>
            <a href="browse.php" class="btn middle">Przeglądaj</a>
            <a href="register.php" class="btn middle">Zarejestruj się</a>
            <a href="account.php" class="btn middle">Moje konto</a>
            <a href="hydepark.php" class="btn right">Hydepark</a>
        </div>
    </nav>
</section>
<section id="body" class="content">
    <form class="size-8 form panel" method="post">
        <div class="form-group">
            <label for="title">Tytuł</label>
            <input id="title" name="title" type="text" placeholder="tytuł artykułu">
        </div>
        <div class="form-group">
            <label for="product">Produkt</label>
            <input id="product" name="product" type="text" placeholder="rodzaj produktu">
        </div>
        <div class="form-group">
            <label for="category">Kategoria</label>
            <select id="category">
                <option value="" selected>Wybierz</option>
                <optgroup label="Porównania">
                    <option value="c_breads">Porównania Chlebów</option>
                    <option value="c_buns">Porównania Bułek</option>
                    <option value="c_croissants">Porównania Rogali</option>
                    <option value="c_others">Porównania Innych</option>
                </optgroup>
                <optgroup label="Recenzje">
                    <option value="r_breads">Recenzje Chlebów</option>
                    <option value="r_buns">Recenzje Bułek</option>
                    <option value="r_croissants">Recenzje Rogali</option>
                    <option value="r_others">Recenzje Innych</option>
                </optgroup>
                <option value="news">Nowina</option>
            </select>
        </div>

        <div class="form-group">
            <label>Język</label>

            <div class="radio-buttons">
                <input type="radio" name="language" value="pl" checked>Polski
                <br>
                <input type="radio" name="language" value="en">Angielski
                <br>
                <input type="radio" name="language" value="other">Inny
            </div>
        </div>
        <div class="form-group">
            <label for="adultsOnly">18+</label>
            <input id="adultsOnly" type="checkbox" name="adultsOnly" value="true">
        </div>
        <div class="form-group">
            <label for="connoisseursOnly">Koneserzy</label>
            <input id="connoisseursOnly" type="checkbox" name="connoisseursOnly" value="true" checked>
        </div>

        <div class="form-group">
            <label for="content">Tekst</label>
            <br/>
            <textarea id="content" maxlength="200"></textarea>
        </div>
        <div class="align-right">
            <button class="btn-reset btn-light" type="reset">Wyczyść formularz</button>
            <button class="btn-submit btn-dark" type="submit">Dodaj</button>
        </div>
    </form>
</section>
<section id="footer">
    <footer>
        Created by BagietaTeam
    </footer>
</section>
</body>
</html>