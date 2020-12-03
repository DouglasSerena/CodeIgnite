<form action="<?= base_url('/admin/client/register') ?>" method="POST" enctype="multipartform-data">
  <div class="form-group">
    <label for="id">Id</label>
    <input class="form-control" type="text" id="id" readonly disabled>
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input data-type="name" required class="form-control" type="text" name="name" id="name">
    <div class="invalid-feedback"></div>
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input data-type="email" required class="form-control" type="email" name="email" id="email">
    <div class="invalid-feedback"></div>
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input data-type="phone" required class="form-control" type="tel" name="phone" id="phone">
    <div class="invalid-feedback"></div>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input data-type="all" required maxlength="30" class="form-control" type="text" name="address" id="address">
    <div class="invalid-feedback"></div>
  </div>
  <button type="submit" class="btn btn-primary w-100">Register</button>
  <a href="<?= base_url('/admin/client') ?>" class="btn btn-warning w-100 mt-2">
    Back
  </a>
</form>
<script type="module" src="<?= base_url('/services/app.js') ?>"></script>