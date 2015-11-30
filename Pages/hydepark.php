<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hydepark</title>
    <link type="text/css" href="../Content/style.css" rel="stylesheet"/>
</head>
<body class="spooky">

<?php include ('header.php'); ?>

<section class="content">
    <table class="table bordered striped">
        <thead>
        <tr>
            <th>Nagłówek 1</th>
            <th>Zagnieżdżone tabelki</th>
            <th>Dziwne stylowanie</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Myk</td>
            <td class="has-table">
                <table class="table light">
                    <tr>
                        <td>1</td>
                        <td colspan="2">2</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td rowspan="3">4</td>
                        <td>3</td>
                        <td>6</td>
                        <td>69</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td rowspan="2" colspan="2">1</td>
                    </tr>
                    <tr>
                        <td>1</td>
                    </tr>
                </table>
            </td>
            <td class="red gradient">czerwony</td>
        </tr>
        <tr>
            <td>Cyk</td>
            <td>
                <table class="table bordered dark">
                    <thead>
                    <tr>
                        <th>Nag 1</th>
                        <th>Nag 2</th>
                        <th>Nag 3</th>
                        <th>Nag 3</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>lel</td>
                        <td>lel</td>
                        <td>lel</td>
                        <td>lel</td>
                    </tr>
                    <tr>
                        <td>lel</td>
                        <td>kek</td>
                        <td>kek</td>
                        <td>lel</td>
                    </tr>
                    <tr>
                        <td>lel</td>
                        <td>lel</td>
                        <td>lel</td>
                        <td>lel</td>
                    </tr>
                    </tbody>
                </table>
            </td>
            <td><span class="weird">Kręcę się!</span></td>
        </tr>
        <tr>
            <td>lel</td>
            <td>lel</td>
            <td>lel</td>
        </tr>
        <tr>
            <td>lel</td>
            <td>lel</td>
            <td>lel</td>
        </tr>
        <tr>
            <td>lel</td>
            <td>lel</td>
            <td>lel</td>
        </tr>
        </tbody>
    </table>
    <nav class="dropdown">
        <ul>
            <li>
                <p>Menu1</p>
                <ul>
                    <li><p>Menu11</p>
                        <ul>
                            <li><a href="#">Lel</a></li>
                            <li><a href="#">Lel1</a></li>
                            <li><a href="#">Lel2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><p>Menu2</p>
                <ul>
                    <li><p>Menu22</p>
                        <ul>
                            <li><a href="#">Lel221</a></li>
                            <li><a href="#">Lel222</a></li>
                            <li><a href="#">Lel223</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><p>Menu3</p>
                <ul>
                    <li><p>Menu33</p>
                        <ul>
                            <li><a href="#">Lel331</a></li>
                            <li><a href="#">Lel332</a></li>
                        </ul>
                    </li>
                    <li><p>Menu34</p>
                        <ul>
                            <li><a href="#">Lel341</a></li>
                            <li><a href="#">Lel342</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><p>Menu4</p>
                <ul>
                    <li><p>Menu41</p>
                        <ul>
                            <li><a href="#">Lel411</a></li>
                            <li><a href="#">Lel412</a></li>
                        </ul>
                    </li>
                    <li><p>Menu42</p>
                        <ul>
                            <li><a href="#">Lel421</a></li>
                            <li><a href="#">Lel422</a></li>
                            <li><a href="#">Lel423</a></li>
                        </ul>
                    </li>
                    <li><p>Menu43</p>
                        <ul>
                            <li><a href="#">Lel431</a></li>
                            <li><a href="#">Lel432</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <hr/>
    <a href="../Resources/html_1.pdf" download="Lista 1">Link do zadania 1</a>
    <a href="http://s3-media2.fl.yelpcdn.com/bphoto/cJ2Y7Bq92hrAOdZJ8JPM1g/ls.jpg"
       download="Baguette">Le bagje</a>
    <a href="ftp://ftp.idsoftware.com/idstuff/doom/dm1666sp.zip"
       download="Jakiś plik dooma">Jakiś plik dooma</a>
    <a href="mailto:bider.daniel@gmail.com">Napisz do mnie!</a>
</section>
<?php include ('footer.php'); ?>
</body>
</html>