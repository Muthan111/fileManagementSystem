<?php
include '../Database/connectToDatabase.php';

if(isset($_POST['submit'])){
    $item = $_POST['search'];
    $SQL = "SELECT * FROM files where fileName like '%$item%'";
    $result = mysqli_query($conn, $SQL);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
 ?>
        <table class="search-results">
            <tr>
                <th>File Name</th>
                <th>Link</th>
            </tr>
            <tr>
                <td><?php  echo $row["fileName"]?></td>
                
                <td><a href="<?php echo $row["filePath"]; ?>" target="_blank">Download</a></td>
            </tr>
        </table>
        <style>
            .search-results {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
}

.search-results th, .search-results td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}

.search-results th {
    background-color: #f2f2f2;
}

.search-results tr:hover {
    background-color: #f5f5f5;
}
        </style>
        <?php
    }
    else{
        echo "No results found";
    }
}
?>