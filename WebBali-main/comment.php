<?php
session_start();
include('destination_data.php');
include_once 'components/header.php';

// Page selector
$id = $_GET['id'];
if ($id < 0 || $id >= count($destinations)) {
  echo "<p>Invalid destination selected.</p>";
} else {
  $destination = $destinations[$id];
}


// add comments
if (!isset($_SESSION['comments'])) {
  $_SESSION['comments'] = array();
}
if (!isset($_SESSION['comments'][$id])) {
  $_SESSION['comments'][$id] = array(); // Initialize
}
if (!empty($_POST['name']) && !empty($_POST['comment'])) {
  $newComment = array(
    'name' => $_POST['name'],
    'text' => $_POST['comment']
  );
  $_SESSION['comments'][$id][] = $newComment;
  $destination['comment'] = $_SESSION['comments'][$id];
}



?>
<section class="py-16 mt-8 max-w-3/4 mx-auto">
  <h2 class="text-3xl font-bold text-green-600 mb-8"><?= $destination['title'] ?></h2>
  <img src="<?= $destination['img'] ?>" alt="<?= $destination['title'] ?>" class="w-full max-w-xl mx-auto rounded-lg mb-6">
  <p class="text-gray-700 mb-8"><?= $destination['description'] ?></p>
  <!-- Comments section could be added here -->
  <h3 class="text-2xl font-bold mb-2">Comment</h3>
  <form action="" method="post">
    <div class="mb-4">
      <label for="name" class="">Name</label>
      <input type="text" id="name" name="name" placeholder=""
        class="block p-1 w-full border-2 border-gray-400 rounded focus:border-green-500">
    </div>
    <div class="mb-4">
      <label for="comment" class="">Comment</label>
      <textarea type="text" id="comment" name="comment" rows="3" placeholder=""
        class="block p-1 w-full border-2 border-gray-400 rounded focus:border-green-500"></textarea>
    </div>
    <input type="submit" value="Submit" class="py-2 px-4 bg-green-500 font-semibold text-white rounded cursor-pointer hover:bg-green-600">
    <input type="reset" value="Reset" class="py-2 px-4 bg-gray-400 font-semibold text-white rounded cursor-pointer hover:bg-gray-500">
  </form>
  <div class="mt-4">
    <?php foreach ($destination['comment'] as $c): ?>
      <div class="py-2 border-b border-gray-700">
        <p class="font-semibold text-gray-700"><?= $c['name'] ?></p>
        <p class="text-gray-700"><?= $c['text'] ?></p>
      </div>
    <?php endforeach ?>
  </div>
</section>
<?php


include_once 'components/footer.php';
?>