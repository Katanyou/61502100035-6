<?php
    require_once("databasecon.php");
    $sql = "SELECT * FROM movies";
    $result = $conn->query($sql);
    if($result){
        $row = $result->fetch_assoc();
    }
 ?>

 <table style = "width:100%" border="1">
    <tr>
        <th>รหัสภาพยนต์</th>
        <th>ชื่อภาพยนต์</th>
        <th>วันที่เริ่มฉาย</th>
    <tr>
<?php
                       {
?>
    <tr>
        <td><?php echo $row['movie_id']; ?></td>
        <td><?php echo $row['movie_name']; ?></td>
        <td><?php echo $row['movie_date']; ?></td>

    </tr>
<?php
                        
                    }
                    {
                        echo" 0 results";
                    }
                    $conn->close();
                    ?>
              </table>      


        