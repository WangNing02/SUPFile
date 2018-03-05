<?php
  session_start();

  $_SESSION['isLogged'] = false;
  $_SESSION['emailAddress'] = null;

  echo "<script>window.location.href='login.html'</script>";
?>