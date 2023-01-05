<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        
    <center>
    <table>
            <tr>
                <th>NUM</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
         
       <?php
include './DB.php';
$query = mysqli_query($conn,"SELECT * FROM visiteurs"); 
               while ($row = mysqli_fetch_array($query)) {?>
                   <tr>
                   <td><?php echo $row['nom'];?></td>
                   <td><?php echo $row['prenom'];?></td>
                   <td><?php echo $row['email'];?></td>
                   <td>
                   <a class="btn btn-danger my-3" href="http://localhost/DCA/Série de TP N°2/delete.php?id=<?php echo $row['ID_VISITEUR']; ?>">Delete</a>
                </td>
                   </tr>
              <?php  } ?>
            
        </table>
    </center>
        
    <script>
                  function DeleteConfirm() {
                    confirm("Are you sure to delete the record");
                  }
                </script>
    </body>
</html>