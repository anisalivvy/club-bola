<?php 
$connect = mysqli_connect("localhost", "root", "", "db_bola");
if(isset($_POST["btn_edit"]))
{
  $updateSql = "CALL updateDataClub('".$_POST["IdClub"]."','".$_POST["NamaClub"]."')";
  if(mysqli_query($connect, $updateSql))
  {
    header("location:index.php?updated=1");
  }
}

$bolas = mysqli_query($connect,"SELECT * FROM `club_bola`");
          { 
              while($bola = mysqli_fetch_array($bolas))
              {

       ?>

      <form action="" name="edit_DataClub" method="post">
        <h3 class="text-center">Edit Nama Club</h3>
        <div class="form-group">
          <input type="text" name="NamaClub" class="form-control" value="<?= $bola["NamaClub"]; ?>">
        </div>
        <div class="form-group text-center">
          <input type="hidden" name="IdClub" value="<?= $bola["IdClub"]?>">
          <input type="submit" class="form-control bg-info text-white font-weight-bold" name="btn_edit" value="Update">
        </div>
      </form>
      <?php }
            mysqli_next_result($connect);
          }
        
       ?>