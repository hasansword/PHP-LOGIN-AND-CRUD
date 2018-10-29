  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php 
session_start();
include_once "control.php";

?>

<a href="index.php">Listeyi Göster</a><a style="padding-left: 88%" href="quit.php">Çıkış Yap</a>
<form class="col-6" name="yeniKayit" method="post" action="save.php?i=update&id=<?php echo $_GET["id"] ?>">
  
<?php
 if(isset($_GET[i])){

  
 
?>
 <div class="alert alert-success">
    <strong>BİLGİ:</strong>Kayıt Güncellendi
  </div>

<?php
}
 $sql_update="Select * from users where id='".$_GET["id"]."'";
  $result=$conn->query($sql_update);
  if($result->num_rows>0){
    $rs=$result->fetch_object();
}

?> 


   <table class="table table-stripped">
    
    <tr>
      <td>Adı</td>
      <td>:<input type="text" name="name" value="<?php echo $rs->name ?>"/></td>
    </tr>
    <tr>
      <td>Soyadı</td>
      <td>:<input type="text" name="surname" value="<?php echo $rs->surname ?>"/></td>
    </tr>
    <tr>
      <td>Yaş</td>
      <td>:<input type="text" name="age" value="<?php echo $rs->age ?>"/></td>
    </tr>
    <tr>
      <td></td>
      <td>:<input type="submit" class="btn btn-success" Value="Kaydet"/></td>
    </tr>
  </table>
  
</form>