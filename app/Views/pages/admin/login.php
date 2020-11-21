<div class="container-fluid">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 p-5">
      <h1>Login system</h1>
      <form method="POST" action="<?= base_url('admin/login') ?>">
        <div class="form-group">
          <label>User name</label>
          <input type="text" class="form-control" name="user" placeholder="User">
        </div>
        <div class="form-group">
          <label>password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="submit">
        <a class="btn btn-warning" href="/ULBRA_FACUDADE/WEB/?control=main&action=index">back</a>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
  </<div>
</div>