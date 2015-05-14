<div id="footer">Copyright <?php echo date("Y"); ?>, Armstrong Gym</div>
<script type="text/javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" src="javascripts/main.js"></script>
</body>
</html>
<?php
// 5. Close database connection
  if (isset($connection)) {
      mysqli_close($connection);
  }
?>

