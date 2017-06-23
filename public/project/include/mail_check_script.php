
<?php 
if(isset($_GET['mail'])){
  if ($_GET['mail'] === "failed") {
    echo "<script>
    document.addEventListener('DOMContentLoaded', function(event) {
      var mailFailed = document.getElementById('mail-failed');
//show
      mailFailed.style.display = 'block';
    });

  </script>";
} else {
  echo "<script>
  document.addEventListener('DOMContentLoaded', function(event) {
    var mailSuccess = document.getElementById('mail-success');
//show success message
    mailSuccess.style.display = 'block';
  });
</script>";
}
}

?>