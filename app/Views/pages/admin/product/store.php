<form action="<?= base_url('/admin/product/register') ?>" method="POST" enctype="multipartform-data">
  <div class="form-group">
    <label for="id">Id</label>
    <input class="form-control" type="text" id="id" readonly>
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input data-type="name" required class="form-control" type="text" name="name" id="name">
    <div class="invalid-feedback"></div>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input data-type="price" required class="form-control" type="text" name="price" id="price">
    <div class="invalid-feedback"></div>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input data-type="description" required maxlength="100" class="form-control" type="text" name="description" id="description">
    <div class="invalid-feedback"></div>
  </div>
  <button class="btn btn-primary w-100">Register</button>
  <a href="<?= base_url('/admin/product') ?>" class="btn btn-warning w-100 mt-2">
    Back
  </a>
</form>
<script type="module" src="<?= base_url('/services/app.js') ?>"></script>