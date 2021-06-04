<?php
    session_start();
    session_unset();
    header('location: index.html');
?>

<script>
    alert('您已登出!');
</script>