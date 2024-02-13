<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="stl.css">
</head>

<body>
    <div>
        <?php include('menu.php'); ?>

        <?php
        require 'varpage.php';
        $sql = "SELECT *, SUBSTRING_INDEX(LOC, ' ', 1) as file_name FROM pics";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $PSEUDO = $row['PSEUDO'];
                $TITLE = $row['TITLE'];
                $LOC = $row['LOC'];
                $file_ext = pathinfo($row["file_name"], PATHINFO_EXTENSION);
                $created_at = $row['created at'];
                $image_path = 'pictures/'.$row["PSEUDO"].' '.$row["LOC"].' '.$row["created at"].'.'.$file_ext;
                echo '<div class="image-container">';
                echo '<img src="' . $image_path . '">';
                echo '<div class="image-caption">';
                echo '<p>taken by: ' . $PSEUDO . '</p>';
                echo '<p>' . $TITLE . '</p>';
                echo '<p>At: ' . $LOC . '</p>';
                echo '<p>Uploaded at: ' . $created_at . '</p>';
                echo '</div></div>';
            }
        } else {
            echo '<p>No images found.</p>';
        }

        mysqli_close($conn);
        ?>
        

    </div>
</body>

</html>
