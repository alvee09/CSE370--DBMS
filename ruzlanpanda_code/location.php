<?php
include 'dbConfig.php';

?>

    <!DOCTYPE html>
    <HTML>
    <form action="location.php" method="POST">
        <input type="text" name="valueToSearch" placeholder="Location">
        <br>
        <br>
        <input type="submit" name="search" value="Search">
        <br>
        <br>
    </form>
    <?php
        $loc_name=@$_POST['valueToSearch'];


        if(isset($_POST['search']))
        {
            $result = $db->query("select * from locations where location= '$loc_name'");
        }
?>

        <table>
            <tr>

                <th>Restaurant</th>


            </tr>


            <?php if (!empty($result)){ while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td>
                        <?php
                        session_start();
                         $_SESSION['yolo2']= $row['res_name'];
                        echo $row['res_name']; ?>
                    </td>
                </tr>
                <?php endwhile; } ?>
        </table>




    </HTML>
