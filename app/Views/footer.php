</main>
<footer id="footer" class="bg-dark">
  <?php if($admin): ?>
    <a href="<?= base_url('/') ?>">
      Voltar ao site
    </a>
  <?php else: ?>
    <a href="<?= base_url('/admin') ?>">
      Area de administração
    </a>
  <?php endif ?>
</footer>
</body>

</html>