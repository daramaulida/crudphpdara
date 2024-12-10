<?php
session_start();
session_unset();
session_destroy();
echo "<script type='text/javascript'>
alert('Anda Telah Logout');
window.location='login.php';
</script>
";