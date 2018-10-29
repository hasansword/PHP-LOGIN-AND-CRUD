  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php
session_start();
if($_SESSION["login"]){
    include "connection.php";

}else{
    header("location:login.php");
}

    $sql_select="Select * from users";
    $result=$conn->query($sql_select);
    if($result->num_rows>0){
?><a href="create.php">Yeni Kayıt Ekle</a><a style="padding-left: 88%" href="quit.php">Çıkış Yap</a>
     
    <table class="table table-sm table-dark">
        <thead>
        <tr>
          <th >ID</th>
          <th >ADI</th>
          <th >SOYADI</th>
          <th >YAŞI</th>
          <th >İŞLEM</th>
        </tr>
    </thead>

    <?php
    while ($rs=$result->fetch_object()) {    
      echo '
      <tbody>
        <tr>
          <th>'.$rs->id.'</th>
          <td>'.$rs->name.'</td>
          <td>'.$rs->surname.'</td>
          <td>'.$rs->age.'</td>
          <td> <a href="update.php?id='.$rs->id.'">Güncelle</a> | 
          <a href="delete.php?id='.$rs->id.'">Sil</a></td>
        </tr>
       
      </tbody>';
    }
   echo '</table>';

}
else
  echo "kayıt yok";
$conn->close();

if($_GET[i]=="delete"){
  ?>
<div class="alert alert-success">
    <strong>BİLGİ:</strong>Silme Başarılı
</div>
  <?php
}
?>
      