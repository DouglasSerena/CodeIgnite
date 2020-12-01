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


<script>
  const menu = document.getElementById('menu');
  const aside = document.getElementById('aside');
  const main = document.getElementById('main');

  menu.onclick = () => {
    aside.classList.toggle('open');
    main.classList.toggle('open');
  }
  main.onclick = () => {
    if (main.classList.contains('open')) {
      aside.classList.remove('open');
      main.classList.remove('open');
    }
  }
</script>
</body>

</html>