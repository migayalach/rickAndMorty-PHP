<?php
require_once("/home/miguel/Documents/htdocs/rick_and_morty/views/head/head.php");
require_once("/home/miguel/Documents/htdocs/rick_and_morty/controllers/character.controller.php");
$character = new CharacterController();
$data = $character->getAllApi();
?>

<div class="cards-container" style="display:flex; flex-wrap: wrap; gap: 10px;">
  <?php if ($data !== false): ?>
    <?php foreach ($data as $c): ?>
      <div class="card" style="width: 18rem;">
        <img src="<?= htmlspecialchars($c['image']); ?>" class="card-img-top" alt="<?= htmlspecialchars($c['name']); ?>">
        <div class="card-body">
          <h5 class="card-title"><?= htmlspecialchars($c['name']); ?></h5>
          <p class="card-text">
            Status: <?= htmlspecialchars($c['status']); ?><br>
            Species: <?= htmlspecialchars($c['species']); ?>
          </p>
          <a href="../character/character.php?id=<?= $c['id'] ?>" class="btn btn-primary">See more</a>
        </div>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p>Sorry, characters cannot be loaded.</p>
  <?php endif; ?>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<?php
require_once("/home/miguel/Documents/htdocs/rick_and_morty/views/head/footer.php");
?>