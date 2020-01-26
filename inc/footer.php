<?php
if($session->getFlashBag()->has('error')) {
    echo '<div class="alert alert-danger alert-dismissable">';
    foreach ($session->getFlashBag()->get('error') as $message) {
        echo "{$message}<br>";
    }
    echo '</div>';
}
if($session->getFlashBag()->has('success')) {
    echo '<div class="alert alert-success alert-dismissable">';
    foreach ($session->getFlashBag()->get('success') as $message) {
        echo "{$message}<br>";
    }
    echo '</div>';
}
?>
</div><!-- end content -->
    <footer class="footer">
    <div class="col-container">
      <svg viewbox="0 0 64 64" class="logo-icon"><use xlink:href="#logo_icon"></use></svg>
  		<p class="footer-copy">&copy; <?php echo date("Y"); ?> Personal Todo App by Treehouse</p>
    </div>
	</footer>

</body>
</html>
