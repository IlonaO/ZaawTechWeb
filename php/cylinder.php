<?php
    $cone_radius = $_POST['cone_radius'];
    $cone_height = $_POST['cone_height'];
        $cone_volume = (M_PI*$cone_radius*$cone_radius*$cone_height)/3
        $slant = sqrt($cone_radius*$cone_radius*$cone_height*$cone_height)
        $cone_surface = M_PI*$cone_radius*$slant+M_PI*($cone_radius*$cone_radius)
    echo "<p>Cone volume: $cone_volume </p>";
    echo "<p>Cone surface area: $cone_volume </p>";
?>