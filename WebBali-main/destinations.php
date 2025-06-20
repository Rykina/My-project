<?php
include('destination_data.php');
include_once 'components/header.php'
?>

<header class="h-96 bg-[url(./assets/img/hero.jpg)] bg-cover bg-center bg-fixed" id="hero">
  <div class="flex justify-center items-center h-full bg-black/50">
    <div class="text-center text-white rellax">
      <h1 class="mb-4 text-5xl font-bold">Destinations</h1>
      <p class="mb-8 text-lg">Explore the best places to visit in Bali</p>
    </div>
  </div>
</header>

<section class="py-16">
  <div class="max-w-3/4 mx-auto text-justify">
    <div class="mb-24 leading-7">
      <h2 class="text-3xl font-bold text-green-600 mb-8">
        Popular Destinations
      </h2>
      <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        <!-- cards -->
        <?php

        function truncateString($text, $maxLength = 100, $suffix = "...")
        {
          if (strlen($text) > $maxLength) {
            return substr($text, 0, $maxLength) . $suffix;
          }
          return $text;
        }

        foreach ($destinations as $key => $d):
        ?>
          <a href="comment.php?id=<?= $key ?>" class="max-w-xs bg-white rounded-lg shadow-lg overflow-hidden mx-auto transition cursor-pointer hover:scale-105">
            <img src="<?= $d['img'] ?>" alt="<?= $d['alt'] ?>" class="w-full h-48 object-cover p-1 rounded-lg">
            <div class="p-4">
              <h3 class="text-lg font-semibold mb-2"><?= $d['title'] ?></h3>
              <p class="text-gray-600 mb-4"><?= truncateString($d['description']) ?></p>
            </div>
          </a>
        <?php endforeach ?>
      </div>
      <div class="text-center mt-12">
        <a href="contact.php" class="py-2 px-4 bg-green-500 text-white font-semibold rounded transition hover:bg-green-600">Contact Us for More Info</a>
      </div>
    </div>
  </div>
</section>


<?php include_once 'components/footer.php' ?>