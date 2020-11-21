<form
  action="<?= base_url('/admin/client/register') ?>"
  method="POST"
  enctype="multipart/form-data"
>
  <div class="form-group">
    <label for="id">Id</label>
    <input class="form-control" type="text" id="id" readonly="readonly" disabled>
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" id="name">
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input class="form-control" type="email" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input class="form-control" type="tel" name="phone" id="phone">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input class="form-control" type="text" name="address" id="address">
  </div>
  <!-- <div class="form-group">
    <label for="photo">Avatar</label>
    <input class="form-control-file" type="file" name="photo" id="photo">
  </div> -->
  <button class="btn btn-primary w-100">Register</button>
</form>