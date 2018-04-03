<?php
    $months = array(null,"Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December");
    $currentMonth = null;
    $currentDay = null;

    foreach ($calendar as $birthday) {
    if ($currentMonth !== $birthday["month"]) {
        $currentMonth = $birthday["month"];
?>
    <h1> <?= $months[$birthday["month"]]; ?></h1>


<?php
    $currentDay = null;
    }
    if ($currentDay !== $birthday["day"]) {
        $currentDay = $birthday["day"];

?>
    <h2> <?= $birthday["day"]; ?></h2>

<?php
    }
    echo "<p><a href=\"" . URL . "calendar/edit/" . $birthday['id'] . "\">".$birthday["person"]." (".$birthday["year"].")"."</a><a href=\"" . URL . "calendar/delete/" . $birthday['id'] . "\">x</a></p>";
    } ?>
<p><a href='<?= URL ?>calendar/create'>+ Toevoegen</a></p>
