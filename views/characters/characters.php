<?php
require_once("/home/miguel/Documents/htdocs/rick_and_morty/views/head/head.php");
require_once("/home/miguel/Documents/htdocs/rick_and_morty/controllers/character.controller.php");
$character = new CharacterController();
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$pageAction = $character->paginationApi($page);
$pages = $character->totalPages();
$data = $pageAction ? $pageAction['results'] : [];
$pagesPerBlock = 10;
$start = floor(($page - 1) / $pagesPerBlock) * $pagesPerBlock + 1;
$end = min($start + $pagesPerBlock - 1, $pages);
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

    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
      <a class="page-link" href="?page=<?= max(1, $page - 1) ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>

    <?php for ($i = $start; $i <= $end; $i++): ?>
      <li class="page-item <?= $i == $page ? 'active' : '' ?>">
        <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
      </li>
    <?php endfor; ?>

    <li class="page-item <?= $page == $pages ? 'disabled' : '' ?>">
      <a class="page-link" href="?page=<?= min($pages, $page + 1) ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>

  </ul>
</nav>

<?php
require_once("/home/miguel/Documents/htdocs/rick_and_morty/views/head/footer.php");
?>