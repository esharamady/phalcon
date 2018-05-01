  <?php echo $this->tag->form(['user/edit', 'class' => 'form-horizontal']); ?>
  <div class="form-group">
    <label class="control-label col-sm-2" for="username" required>Username:</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="id" name="id" value="<?= $id ?>">
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?= $username ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama" required>Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" placeholder="Enter name" name="nama" value="<?= $nama ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email" required>Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= $email ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Update</button>
    </div>
  </div>
</form>