<?php
if (isset($_POST['submit'])) {
    $dob = $_POST['dob'];
    $date = strtotime($dob);
    $month = date("m", $date);
    $day = date("d", $date);

    if (($month == 12 && $day >= 22 && $day <= 31) || ($month == 1 && $day >= 1 && $day <= 19)) {
        $zodiac = "Capricorne";
    } elseif (($month ==  1 && $day >= 20 && $day <= 31) || ($month == 2 && $day >= 1 && $day <= 17)) {
        $zodiac = "Verseau";
    } elseif (($month == 2 && $day >= 18 && $day <= 29) || ($month == 3 && $day >= 1 && $day <= 19)) {
        $zodiac = "Poissons";
    } elseif (($month == 3 && $day >= 20 && $day <= 31) || ($month == 4 && $day >= 1 && $day <= 19)) {
        $zodiac = "Bélier";
    } elseif (($month == 4 && $day >= 20 && $day <= 30) || ($month == 5 && $day >= 1 && $day <= 20)) {
        $zodiac = "Taureau";
    } elseif (($month == 5 && $day >= 21 && $day <= 31) || ($month == 6 && $day >= 1 && $day <= 20)) {
        $zodiac = "Gémeaux";
    } elseif (($month == 6 && $day >= 21 && $day <= 30) || ($month == 7 && $day >= 1 && $day <= 22)) {
        $zodiac = "Cancer";
    } elseif (($month == 7 && $day >= 23 && $day <= 31) || ($month == 8 && $day >= 1 && $day <= 22)) {
        $zodiac = "Lion";
    } elseif (($month == 8 && $day >= 23 && $day <= 31) || ($month == 9 && $day >= 1 && $day <= 22)) {
        $zodiac = "Vierge";
    } elseif (($month == 9 && $day >= 23 && $day <= 30) || ($month == 10 && $day >= 1 && $day <= 22)) {
        $zodiac = "Balance";
    } elseif (($month == 10 && $day >= 23 && $day <= 31) || ($month == 11 && $day >= 1 && $day <= 21)) {
        $zodiac = "Scorpion";
    } elseif (($month == 11 && $day >= 22 && $day <= 30) || ($month == 12 && $day >= 1 && $day <= 21)) {
        $zodiac = "Sagittaire";
    }

    echo "Votre signe astrologique est : $zodiac";
} else {
?>
    <form method="post" action="">
        <label for="dob">Entrer votre date de naissance :</label>
        <input type="date" id="dob" name="dob">
        <input type="submit" name="submit" value="Envoyer">
    </form>
<?php
}
?>