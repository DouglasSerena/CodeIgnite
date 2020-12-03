<h1>Details Product</h1>
<table class="table">
  <tr>
    <th>ID Product: </th>
    <td class="w-100"><?= $product->idProduct ?></td>
  </tr>
  <tr>
    <th>Name: </th>
    <td class="w-100"><?= $product->name ?></td>
  </tr>
  <tr>
    <th>Price: </th>
    <td class="w-100"><?= $product->price ?></td>
  </tr>
  <tr>
    <th>description: </th>
    <td class="w-100"><?= $product->description ?></td>
  </tr>
</table>
<a href="<?= base_url('product') ?>" class="btn btn-warning w-100">Back</a>