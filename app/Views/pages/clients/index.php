<table class="table table-borderless">
  <thead>
    <tr>
      <th>#</th>
      <th class="w-50">Name</th>
      <th class="w-50">Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($clients) : ?>
      <?php foreach ($clients as $client) : ?>
        <tr class="border-top">
          <th class="text-center"><?= $client['idClient'] ?></th>
          <td><?= $client['name'] ?></td>
          <td><?= $client['email'] ?></td>
          <td class="text-center">
            <a
              class="btn btn-primary"
              href="<?= base_url("client/{$client['idClient']}") ?>"
            >
              Details
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php else : ?>
      <tr>
        <th><i class="ri-more-fill"></i></th>
        <th><i class="ri-more-fill"></i></th>
        <th><i class="ri-more-fill"></i></th>
        <td><i class="ri-more-fill"></i></td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>