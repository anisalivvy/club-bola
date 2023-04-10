<?php 
// $connect = mysqli_connect("localhost", "root", "", "db_bola");
// if(isset($_POST["insert_btn"]))
// {
//   $sql = "CALL insertDataClub('".$_POST["NamaClub"]."')";
//   if(mysqli_query($connect, $sql))
//   {
//     header("location:index.php?inserted=1");
//   }
// }
// if(isset($_GET["inserted"]))
// {
//   echo '<script>alert("data inserted")</script>';
// }


$connect = mysqli_connect("localhost", "root", "", "urii");
// if(isset($_GET['delete_IdClub']))
// {
//     $delete_IdClub = $_GET["delete_IdClub"];
//     $deleteSql ="CALL deleteDataClub('$delete_IdClub')";
//     if(mysqli_query($connect, $deleteSql))
//     {
//         header("location:index.php?updated=1");
//     }
// }



$bolas = mysqli_query($connect,"SELECT * FROM `mahasiswa_transaksi`");


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Club Bola</title>
    <style>
      *{
        margin:0;
        padding:0;
      }
      .box{
        width: 500px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <div class="container box my-5">
      <!-- <form method="post" name="action">
        <h3 class="text-center">Input Data Club Bola</h3>
        <div class="form-group">
          <input type="text" name="NamaClub" class="form-control">
        </div>
        <div class="form-group text-center">
          <input type="submit" class="form-control bg-info text-white font-weight-bold" name="insert_btn" >
        </div>
      </form> -->

      <div class="table-responsive">
        <table class="table table-striped">
          <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>BUKU</th>
          </tr>
          <?php 
          while ($bola = mysqli_fetch_array($bolas)){
            ?>
        
          <tr>
            <td><?php echo $bola['nim'] ?></td>
            <td><?php echo $bola['nama'] ?></td>
            <td><?php echo $bola['alamat'] ?></td>
            <td><?php echo $bola['buku'] ?></td>
            <!-- <td><a href="edit.php?edit=1&IdClub=<?php echo $bola["IdClub"]; ?>">Edit</a></td>
            <td><a href="?delete_IdClub=<?php echo $bola['IdClub'] ?>" class="btn_delete">Delete</a></td> -->
          </tr>
          <br>
        <?php } ?>
        </table>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>

    