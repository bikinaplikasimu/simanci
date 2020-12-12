<?php
function kol_tabel($conn,$kol,$tab,$opt){
    $sql="SELECT ".$kol." from ".$tab." ".$opt."";
    $query = $conn->query($sql);
    $row = $query->fetch_row();
    //echo $row[0];

    return $row[0];
}
?>