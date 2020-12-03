<form action="<?= base_url("admin/client/update/{$client->idClient}") ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="id">Id</label>
    <input value="<?= $client->idClient ?>" class="form-control" type="text" id="id" readonly="readonly" disabled>
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input data-type="name" value="<?= $client->name ?>" required class="form-control" type="text" name="name" id="name">
    <div class="invalid-feedback"></div>
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input data-type="email" required value="<?= $client->email ?>" class="form-control" type="email" name="email" id="email">
    <div class="invalid-feedback"></div>
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input data-type="phone" required value="<?= $client->phone ?>" class="form-control" type="tel" name="phone" id="phone">
    <div class="invalid-feedback"></div>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input data-type="all" required maxlength="30" value="<?= $client->address ?>" class="form-control" type="text" name="address" id="address">
    <div class="invalid-feedback"></div>
  </div>
  <button class="btn btn-primary w-100">Update</button>
  <a href="<?= base_url('/admin/client') ?>" class="btn btn-warning w-100 mt-2">
    Back
  </a>
</form>
<script type="module" src="<?= base_url('/services/app.js') ?>"></script>