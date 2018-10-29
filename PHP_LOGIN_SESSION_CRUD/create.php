  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<a href="index.php">Listeyi Göster</a><a style="padding-left: 88%" href="quit.php">Çıkış Yap</a>

<form class="col-6" name="yeniKayit" method="post" action="save.php?i=new">
<?php

include_once "control.php";


 if(isset($_GET[i])){
?>

<div class="alert alert-success">
    <strong>BİLGİ:</strong>Kayıt Başarılı
</div>

<?php
}
?>  
<table class="table table-stripped">
    <tr>
      <td>Adı</td>
      <td>:<input type="text" name="name"/></td>
    </tr>
    <tr>
      <td>Soyadı</td>
      <td>:<input type="text" name="surname"/></td>
    </tr>
    <tr>
      <td>Yaş</td>
      <td>:<input type="text" name="age"/></td>
    </tr>
    <tr>
      <td></td>
      <td>:<input type="submit" class="btn btn-success" Value="Kaydet"/></td>
    </tr>
  </table>
</form>


