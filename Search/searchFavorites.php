<?php
include '../Database/connectToDatabase.php';

if(isset($_POST['submit'])){
    $item = $_POST['search'];
    $SQL = "SELECT * FROM files where fileName like '%$item%' AND isFavourite = 1";
    $result = mysqli_query($conn, $SQL);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
 ?>
        <table>
            <tr>
                <th>File Name</th>
                <th>Link</th>
            </tr>
            <tr>
                <td><?php  echo $row["fileName"]?></td>
                <td><?php  echo $row["filePath"]?></td>
            </tr>
        </table>
        <?php
    }
    else{
        echo "No results found";
    }
}
?>