<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css" />
  </head>
  <body>
    <header class="header">
      <div class="header1">
        <h2>Odloty z lotniska</h2>
      </div>
      <div class="header2">
        <img src="zad6.png" alt="logotyp" />
      </div>
    </header>

    <main class="main">
      <h4>tabela odlotów</h4>
      <table>
        <tr>
          <th>lp.</th>
          <th>numer rejsu</th>
          <th>czas</th>
          <th>kierunek</th>
          <th>status</th>
        </tr>
        <?php
          $conn = mysqli_connect("localhost", "root", "", "airport-odloty");
          $req = "SELECT `id`, `nr_rejsu`, `kierunek`, `czas`, `status_lotu` FROM `odloty` ORDER BY czas DESC";
          $dane = mysqli_query($conn, $req);
          while($rekord = mysqli_fetch_array($dane)) {
            echo "<tr>";
              echo "<td>".$rekord['id']."</td><td>".$rekord['nr_rejsu']."</td><td>".$rekord['czas']."</td><td>".$rekord['kierunek']."</td><td>".$rekord['status_lotu']."</td>";
            echo "</tr>";
          }
        ?>
      </table>
    </main>

    <footer class="footer">
      <div class="footer1">
        <a href="kw1.jpg" target="_blank">Pobierz obraz</a>
      </div>
      <div class="footer2">
        <?php
          if(isset($_COOKIE['czy_byl'])) {
            echo "<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>";
          } else {
            echo "<p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>";
            setcookie('czy_byl', true, time() + 3600);
          }
        ?>
      </div>
      <div class="footer3">Autor: oooooooo</div>
    </footer>
  </body>
</html>
