<?php
include 'inc/header.php';
?>

<?php
$feedback = [
  [
    'id' => '1',
    'name' => 'Beth Williams',
    'email' => 'beth@gmail.com',
    'body' => 'Traversy Media is ok',
  ],
  [
    'id' => '2',
    'name' => 'Walt Williams',
    'email' => 'walt@gmail.com',
    'body' => 'Traversy Media sucks',
  ],
  [
    'id' => '3',
    'name' => 'Bill Johnson',
    'email' => 'bill@gmail.com',
    'body' => 'Traversy Media Rocks!',
  ],
]
?>

<h2>Past Feedback</h2>

<?php
if (empty($feedback)) : ?>
  <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php
foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?= $item['body']; ?>
      <div class="text-secondary mt-2">
        By <?= $item['name']; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php
include 'inc/footer.php';
?>