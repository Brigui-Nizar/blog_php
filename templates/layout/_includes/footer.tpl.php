<!-- Footer -->
<hr>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <ul class="list-inline text-center">
          <? if ($socialMedia['email']) : ?>
            <li class="list-inline-item">
              <a href="mailto: <?= ($socialMedia['email']) ?>">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="far fa-envelope fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          <? endif ?>
          <? if ($socialMedia['twitter']) : ?>
            <li class="list-inline-item">
              <a href="https://twitter.com/<?= ($socialMedia['twitter']) ?>">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          <? endif ?>
          <? if ($socialMedia['facebook']) : ?>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/<?= ($socialMedia['facebook']) ?>">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          <? endif ?>
          <? if ($socialMedia['linkedin']) : ?>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/<?= ($socialMedia['linkedin']) ?>">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          <? endif ?>
          <? if ($socialMedia['github']) : ?>
            <li class="list-inline-item">
              <a href="https://github.com/<?= ($socialMedia['github']) ?>">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          <? endif ?>
          <? if ($socialMedia['instagram']) : ?>
            <li class="list-inline-item">
              <a href="https://instagram.com/<?= ($socialMedia['instagram']) ?>">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          <? endif ?>
        </ul>
        <p class="copyright text-muted">Copyright &copy; Nizar Brigui - 2023</p>
      </div>
    </div>
  </div>
</footer>