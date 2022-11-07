<?php
function check() {
    return (
        isset($_POST["nr_lowiska"]) &&
        isset($_POST["data"]) &&
        isset($_POST["sedzia"]) &&
        !empty($_POST["nr_lowiska"]) &&
        !empty($_POST["data"]) &&
        !empty($_POST["sedzia"])
    );
}
    if(check()) {
        $conn = mysqli_connect("localhost", "root", "", "wedkarstwo");

        $nr_lowiska = $_POST["nr_lowiska"];
        $data = $_POST["data"];
        $sedzia = $_POST["sedzia"];

        $request = "INSERT INTO zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES ('0', '$nr_lowiska', '$data', '$sedzia')";

        mysqli_query($conn, $request);
        mysqli_close($conn);

        header('Location: '."http://localhost/4cgm/13.09/index.html");
    } else {
        echo "Podaj dane";
    }
?>