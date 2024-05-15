<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteka</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
</head>
<body>
    <aside>
        <header>
            <img src="klaps.png" alt="klaps">
            <h1>Filmoteka</h1>
        </header>
        <container>
            <h3>Wybrane filmy:</h3>
            <main class="none" id="msci">
            <?php
                $con = new mysqli("127.0.0.1","root","","filmy");
 
                $q="SELECT tytul FROM filmy WHERE gatunki_id = 1";
                
                if($wynik=$con->query($q)){
                    while($row=$wynik->fetch_array()){
                        echo '<div class="film-el">';
                        echo '<img src="gwiezdneWojny.jpg" alt="gwiezdne wojny">';
                        echo '<h3>'.$row["tytul"].'</h3>';
                        echo '</div>';
                    }
                }else{
                    echo $con->errno . " " . $con->error;
                }
            ?>
            </main>
            <main class="none" id="mcomedy">
            <?php
                $con = new mysqli("127.0.0.1","root","","filmy");
 
                $q="SELECT tytul FROM filmy WHERE gatunki_id = 5";
                
                if($wynik=$con->query($q)){
                    while($row=$wynik->fetch_array()){
                        echo '<div class="film-el">';
                        echo '<img src="gwiezdneWojny.jpg" alt="gwiezdne wojny">';
                        echo '<h3>'.$row["tytul"].'</h3>';
                        echo '</div>';
                    }
                }else{
                    echo $con->errno . " " . $con->error;
                }
            ?>
            </main>
            <main id="mdramatic">
            <?php
                $con = new mysqli("127.0.0.1","root","","filmy");
 
                $q="SELECT tytul FROM filmy WHERE gatunki_id = 3";
                
                if($wynik=$con->query($q)){
                    while($row=$wynik->fetch_array()){
                        echo '<div class="film-el">';
                        echo '<img src="gwiezdneWojny.jpg" alt="gwiezdne wojny">';
                        echo '<h3>'.$row["tytul"].'</h3>';
                        echo '</div>';
                    }
                }else{
                    echo $con->errno . " " . $con->error;
                }
            ?>
            </main>
            <main class="none" id="mhorror">
            <?php
                $con = new mysqli("127.0.0.1","root","","filmy");
 
                $q="SELECT tytul FROM filmy WHERE gatunki_id = 4";
                
                if($wynik=$con->query($q)){
                    while($row=$wynik->fetch_array()){
                        echo '<div class="film-el">';
                        echo '<img src="gwiezdneWojny.jpg" alt="gwiezdne wojny">';
                        echo '<h3>'.$row["tytul"].'</h3>';
                        echo '</div>';
                    }
                }else{
                    echo $con->errno . " " . $con->error;
                }
            ?>
            </main>
        </container>
    </aside>
    <article>
        <nav>
            <div class="menu-el" id="dramatic"><p>Dramat</p></div>
            <div class="menu-el" id="horror"><p>Horror</p></div>
            <div class="menu-el" id="sci"><p>Sci-Fi</p></div>
            <div class="menu-el" id="comedy"><p>Komedia</p></div>
        </nav>
        <content>
            <h3>Dodaj film:</h3>
            <form action="addvideo.php" method="POST">
                <input type="text" name="tytul" placeholder="Tytuł">
                <input type="text" name="rok" placeholder="Rok">
                <input type="number" name="ocena" placeholder="Ocena">
                <select name="rezyser">
                    <option value="1">Denis Villeneuve</option>
                    <option value="2">Ron Clements</option>
                    <option value="3">Clint Eastwood</option>
                    <option value="4">Martin Scorseze</option>
                    <option value="5">Jordan Peele</option>
                    <option value="6">Zach Braff</option>
                    <option value="7">Patrick Hughes</option>
                    <option value="8">Francis Coppola</option>
                </select>
                <select name="gatunek">
                    <option value="1">Sci-Fi</option>
                    <option value="2">Animacja</option>
                    <option value="3">Dramat</option>
                    <option value="4">Horror</option>
                    <option value="5">Komedia</option>
                </select>
                <input type="submit" value="Zatwierdz">
            </form>
        </content>
        <footer>
            <p>Autor: 00000</p>
        </footer>
    </article>
</body>
</html>