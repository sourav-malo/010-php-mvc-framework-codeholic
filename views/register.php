<h1>Create an account</h1>
<?php
  $form = \app\core\form\Form::start('', 'post');
    echo $form->field($model, 'firstName');
    echo $form->field($model, 'lastName');
    echo $form->field($model, 'email');
    echo $form->field($model, 'password')->passwordField();
    echo $form->field($model, 'confirmPassword')->passwordField(); ?>
    <button type="submit" class="btn btn-primary">Submit</button>
  <?php \app\core\form\Form::end();
?>
<!-- <form action="register" method="post">
  <div class="mb-3">
    <label class="form-label">First Name</label>
    <input type="text" class="form-control" name="firstName">
  </div>
  <div class="mb-3">
    <label class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lastName">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <label class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="confirmPassword">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->