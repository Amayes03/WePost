<!doctype html>
<html lang="en">
<link rel="stylesheet" href="forms.css">
<head>
    <title> UPLOADING PICTURES </title>
</head>

<body>
    <fieldset>
    <?php include('menu.php'); ?>
 <h1>POSTING AN IMAGE</h1>
 <div class="formulaire">
 <form method="POST" action="try.php" enctype="multipart/form-data">
     <label for="pseudo">pseudo:</label>
     <input type="text" classe="trn" name="pseudo" id="pseudo" required placeholder="Enter your pseudo" style="background-color: transparent" ><br><br>
     <label for="title">Title:</label>
     <input type="text" name="title" id="title" required placeholder="Enter the title" style="background-color: transparent"><br><br>
     <label for="location">Location:</label>
     <input type="text" name="location" id="location" required placeholder="Enter the location"  style="background-color: transparent"><br><br>
     <label for="agree">I agree to the terms and conditions:</label>
     <input type="checkbox" name="agree" id="agree" required><br><br>
     <input type="file"  name="userfile"><br><br>
     <div class="form-group">
                    <button type="submit" class="btn btn-primary mb-3" value="upload">Envoyer</button>
                </div>
    
    </form> 
 </div>
</body>
    </fieldset>
</html>   