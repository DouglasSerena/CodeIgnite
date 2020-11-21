<table class="table table-borderless">
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
    <?php if (!!$clients) : ?>
      <?php foreach ($clients as $client) : ?>
        <tr class="border-top">
          <th><?= $client['idClient'] ?></th>
          <td><?= $client['name'] ?></td>
          <td><?= $client['phone'] ?></td>
          <td><?= $client['email'] ?></td>
          <td><?= $client['address'] ?></td>
          <td>
            <a
              href="<?= base_url("admin/client/update/{$client['idClient']}") ?>"
              class="btn btn-warning"
            >
              <i class="ri-pencil-line"></i>
            </a>
            <a
              href="<?= base_url("admin/client/delete/{$client['idClient']}") ?>"
              class="btn btn-danger"
            >
              <i class="ri-delete-bin-2-line"></i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php else : ?>
      <tr>
        <th><i class="ri-more-fill"></i></th>
        <th><i class="ri-more-fill"></i></th>
        <th><i class="ri-more-fill"></i></th>
        <th><i class="ri-more-fill"></i></th>
        <th><i class="ri-more-fill"></i></th>
        <th><i class="ri-more-fill"></i></th>
        <th><i class="ri-more-fill"></i></th>
      </tr>
    <?php endif; ?>
  </tbody>
</table>