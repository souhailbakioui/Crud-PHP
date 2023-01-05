<?php

if (!isset($_GET['id'])) {
    return;
}

include './DB.php';
$id=$_GET['id'];

if(isset($_POST['submit'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $sql = "UPDATE `visiteurs` SET nom ='$nom', prenom ='$prenom' ,email ='$email' where ID_VISITEUR = $id";
    $query = mysqli_query($conn, $sql);
    if(!$query) die("Err Dans Modification");
    header("Location: $path/affichage.php");
}


$sql = "SELECT * FROM `visiteurs` where ID_VISITEUR = $id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
if (is_null($row)) die("Pas trouver");

?>
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
        <form method="post" action="">
            <table border="1">
                <tr>
                    <th>
                        <label>Numero</label>
                    </th>
                    <th>
                        <label><input type="text" name="id" value=<?php echo $row['ID_VISITEUR'] ?>> </label>
                    </th>
                </tr>
                <tr>
                    <td>
                        <label>Nom</label>
                    </td>
                    <td>
                        <label><input type="text" name="nom" value=<?php echo $row['nom'] ?>> </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Prenom</label>
                    </td>
                    <td>
                        <label><input type="text" name="prenom" value=<?php echo $row['prenom'] ?>> </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <label><input type="email" name="email" value=<?php echo $row['email'] ?>> </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit">
                    </td>
                    <td>
                        <input type="reset" name="reset">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>