<!-- Form validation -->
    <script type="text/javascript">
      var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {hint:"Your Name *", validateOn:["change"]});
      var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {hint:"Your Email *", validateOn:["change"]});
      var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {hint:"Your Name *", validateOn:["change"]});
      var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "email", {hint:"Your Email *", validateOn:["change"]});
      var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {hint:"Any comment *", validateOn:["change"]});
      var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2", {hint:"Any comment *", validateOn:["change"]});
    </script>
  </body>
</html>

<?php wp_footer(); ?>