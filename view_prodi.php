<?php
    foreach($siswa as $row)
    {
        echo "No : ".$row['no'];
        echo "<br/>";
        echo "Prodi : ".$row['prodi'];
        echo "<br/>";
        echo "Keretangan : ".$row['keterangan'];
        echo "<hr/>";
    }
?>