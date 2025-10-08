<?php
require_once("/home/miguel/Documents/htdocs/rick_and_morty/views/head/head.php");
require_once("/home/miguel/Documents/htdocs/rick_and_morty/controllers/character.controller.php");
$character = new CharacterController();
$data = $character->getIdCharacterApi($_GET['id']);
?>

<h2>Detail</h2>

<?php if ($data !== false): ?>
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?= htmlspecialchars($data['image']); ?>" class="img-fluid rounded-start" alt="<?= htmlspecialchars($data['name']); ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= htmlspecialchars($data['name']); ?></h5>
          <p class="card-text">
            Status: <?= htmlspecialchars($data['status']); ?><br>
            Species: <?= htmlspecialchars($data['species']); ?><br>
            Type: <?= htmlspecialchars($data['type']); ?><br>
            Gender: <?= htmlspecialchars($data['gender']); ?><br>
            Origin: <?= htmlspecialchars($data['origin']['name']); ?><br>
            Location: <?= htmlspecialchars($data['location']['name']); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
<?php else: ?>
  <p>Sorry, we couldn't load the character information.</p>
<?php endif; ?>

<?php
require_once("/home/miguel/Documents/htdocs/rick_and_morty/views/head/footer.php");
?>