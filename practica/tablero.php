
<table border="1" cellspacing="0">
    <tbody>
    <tr>
        <?php
        $i = 1;
        while ($i <= 669) {
            echo "<td>$i</td>";
            if($i%20 == 0){
                echo "</tr><tr>";
            }
            $i++;
        }
        ?>
    </tbody>
</table>"


