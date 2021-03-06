<form action="<?php base_url('admin/client') ?>" method="GET" class="search">
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
      <th>Email</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($clients)) : ?>
      <?php foreach ($clients as $client) : ?>
        <tr class="border-top">
          <td data-title="#"><?= $client->idClient ?></td>
          <td data-title="Name"><?= $client->name ?></td>
          <td data-title="Email"><?= $client->email ?></td>
          <td data-title="Phone"><?= $client->phone ?></td>
          <td data-title="Address"><?= $client->address ?></td>
          <td data-title="Actions" class="center">
            <a href="
               <?= base_url("admin/client/update/{$client->idClient}") ?>
              " class="btn btn-warning mr-3">
              <i class="ri-pencil-line"></i>
            </a>
            <a href="
                <?= base_url("admin/client/delete/{$client->idClient}") ?>
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