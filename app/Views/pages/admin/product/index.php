<form action="<?php base_url('admin/product') ?>" method="GET" class="search">
  <div class="btn btn-light">
    <i class="ri-search-line"></i>
  </div>
  <input name="filter" type="text" placeholder="Buscar por clientes..." class="form-control">
</form>
<table class="table table-hover table-borderless table-mobile">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>price</th>
      <th>description</th>
      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($products)) : ?>
      <?php foreach ($products as $product) : ?>
        <tr class="border-top">
          <td data-title="#"><?= $product->idProduct ?></td>
          <td data-title="Name"><?= $product->name ?></td>
          <td data-title="Price"><?= $product->price ?></td>
          <td data-title="Description"><?= $product->description ?></td>
          <td data-title="Actions" class="text-center">
            <a href="
               <?= base_url("admin/product/update/{$product->idProduct}") ?>
              " class="btn btn-warning mr-3">
              <i class="ri-pencil-line"></i>
            </a>
            <a href="
                <?= base_url("admin/product/delete/{$product->idProduct}") ?>
              " class="btn btn-danger">
              <i class="ri-delete-bin-2-line"></i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php else : ?>
      <tr>
        <th class="text-center text-muted" colspan="7">
          Sem Resultando
        </th>
      </tr>
    <?php endif; ?>
  </tbody>
</table>