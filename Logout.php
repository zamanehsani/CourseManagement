<?php
session_start();
if(isset($_SESSION['username'])){
  unset($_SESSION['username']);
  echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}else{
  echo "<meta http-equiv='refresh' content='0; url=index.php?message=login requires'>";
}
 ?>
