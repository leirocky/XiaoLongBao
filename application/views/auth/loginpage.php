<?php
  $this->load->helper('language');
  $this->load->helper('form');

  if ($lang == 'ch')
  {
    $this->lang->load('res', 'chinese');
  }
  else
  {
    $this->lang->load('res', 'english');
  }

  $attributes = array('class' => 'form-signin', 'id' => 'loginForm');
  echo form_open('auth/doLogin', $attributes);
?>
  <h2 class="form-signin-heading"><?php echo $this->lang->line('auth_title_sign_in') ?></h2>
  <input type="text" name="username" class="form-control" placeholder=<?php echo '"' . $this->lang->line('auth_email') . '"' ?> required autofocus>
  <input type="password" name="password" class="form-control" placeholder=<?php echo '"' . $this->lang->line('auth_password') . '"' ?> required>
  <label class="checkbox">
    <input type="checkbox" value="remember-me"> <?php echo $this->lang->line('auth_remember_me') ?>
  </label>
  <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $this->lang->line('auth_sign_in') ?></button>
  <p><?php echo $this->lang->line('auth_sign_up_mesg')?></p>
  <a href="<?php echo base_url(); ?>index.php/pages/login/signuppage" class="btn btn-primary btn-lg btn-block" role="button"><?php echo $this->lang->line('auth_sign_up') ?></a>
</form>
