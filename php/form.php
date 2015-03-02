
<form method="post" action="<?php echo $form_action; ?>">
  <div class="form-group">
    <label for="firstname">First name</label>
    <input type="text" class="form-control" id="firstname" name="firstname" <?php val($firstname);?> placeholder="Enter firstname">
  </div>
  <div class="form-group">
    <label for="lastname">Last name</label>
    <input type="text" class="form-control" id="lastname" name="lastname" <?php val($lastname);?> placeholder="Enter lastname">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" <?php val($email);?> placeholder="Enter email address">
  </div>
  
  <button type="submit" class="btn"><?php echo $button_text; ?></button>
</form>