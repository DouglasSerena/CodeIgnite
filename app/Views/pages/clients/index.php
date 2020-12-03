<table class="table table-borderless table-mobile">
  <thead>
    <tr>
      <th>#</th>
      <th class="w-50">Name</th>
      <th class="w-50">Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($clients)) : ?>
      <?php foreach ($clients as $client) : ?>
        <tr class="border-top">
          <td data-title="#"><?= $client->idClient ?></td>
          <td data-title="Name"><?= $client->name ?></td>
          <td data-title="Email"><?= $client->email ?></td>
          <td data-title="Action">
            <a class="btn btn-primary" href="<?= base_url("client/{$client->idClient}") ?>">
              Details
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php else : ?>
      <tr>
        <th colspan="4" class="text-center text-muted">Sem Resultado</th>
      </tr>
    <?php endif; ?>
  </tbody>
</table>