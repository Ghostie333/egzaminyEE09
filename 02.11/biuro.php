<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css" />
  </head>
  <body>
    <header class="header">
      <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </header>
    <div class="dane">
      <h3>ARCHIWUM WYCIECZEK</h3>
      <?php
        $conn = mysqli_connect("localhost", "root", "", "egzamin4");
        $req = "SELECT id, cel, cena FROM wycieczki WHERE dostepna = false;";
        $dane = mysqli_query($conn, $req);
        while($row = mysqli_fetch_row($dane)) {
          echo "<div>".$row[0].". ".$row[1].", cena: ".$row[2]."</div>";
        }
      ?>
    </div>
    <div class="left">
      <h3>NAJTANIEJ...</h3>
      <table>
        <tr>
          <td>Włochy</td>
          <td>od 1200 zł</td>
        </tr>
        <tr>
          <td>Francja</td>
          <td>od 1200 zł</td>
        </tr>
        <tr>
          <td>Hiszpania</td>
          <td>od 1400 zł</td>
        </tr>
      </table>
    </div>
    <div class="middle">
      <h3>TU BYLIŚMY</h3>
      <?php
        $req = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;";
        $dane = mysqli_query($conn, $req);
        while($row = mysqli_fetch_row($dane)) {
          echo "<img src='".$row[0]."' alt='".$row[1]."'>";
        }
        mysqli_close($conn);
      ?>
    </div>
    <div class="right">
      <h3>SKONTAKTUJ SIĘ</h3>
      <a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
      <p>telefon: 555666777</p>
    </div>
    <footer class="footer">
      <p>Stronę wykonał: ooooooooooo</p>
    </footer>
  </body>
</html>
