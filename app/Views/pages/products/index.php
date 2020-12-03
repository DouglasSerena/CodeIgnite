<div class="row">
  <?php foreach ($products as $product) : ?>
    <div class="col-lg-3 p-1">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?= $product->name ?></h5>
          <h6 class="card-subtitle mb-2 text-muted">
            R$ <?= $product->price ?>
          </h6>
          <p class="card-text"><?= $product->description ?></p>
          <a class="text-center card-link" href="#">
            <i class="ri-refund-2-line"></i>
            Buy
          </a>
          <a class="text-center card-link" href="#">
            <i class="ri-shopping-cart-line"></i>
            Add Car
          </a>
          <a class="text-center card-link" href="<?= base_url("product/{$product->idProduct}") ?>">
            <i class="ri-todo-line"></i> Details
          </a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>