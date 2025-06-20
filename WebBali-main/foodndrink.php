<?php include_once 'components/header.php' ?>


<header class="h-96 bg-[url(./assets/img/Food-Drink-In-Bali.jpg)] bg-cover bg-center bg-fixed" id="hero">
  <div class="flex justify-center items-center h-full bg-black/50">
    <div class="text-center text-white rellax">
      <h1 class="mb-4 text-5xl font-bold">Food and Drinks</h1>
      <p class="mb-8 text-lg">Explore the best Foods and Drinks in Bali</p>
    </div>
  </div>
</header>

<section class="py-16">
  <div class="max-w-3/4 mx-auto text-justify">
    <div class="mb-24 leading-7">
      <h2 class="text-3xl font-bold text-green-600 mb-8">
        Popular Foods
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

        $destinations = [
          [
            'img' => './assets/img/nasi campur.jpg',
            'alt' => 'Nasi campur',
            'title' => 'Nasi Campur',
            'description' => 'Nasi Campur Bali merupakan campuran nasi dengan berbagai macam lauk pauk seperti ayam, telur sayuran dan juga sate lilit yang biasanya terbuat dari ikan atau ayam.',
            'price' => 'Rp 25.000'
          ],
          [
            'img' => './assets/img/Ayam betutu.jpg',
            'alt' => 'Ayam Betutu',
            'title' => 'Ayam Betutu',
            'description' => 'Ayam Betutu adalah makanan tradisional khas Bali yang terbuat dari ayam atau bebek utuh yang berisi bumbu, kemudian dipanggang dalam api sekam',
            'price' => 'Rp 50.000'
          ],
          [
            'img' => './assets/img/Sate_lilit.jpg',
            'alt' => 'Sate Lilit',
            'title' => 'Sate Lilit',
            'description' => 'Sate lilit adalah hidangan sate khas Bali yang berbeda dari sate pada umumnya. Daging yang telah dicincang dan dicampur dengan bumbu serta kelapa parut, kemudian dililitkan pada batang serai atau bambu pipih, lalu dibakar hingga matang.',
            'price' => 'Rp 50.000'
          ],
          [
            'img' => './assets/img/es kuwut.png',
            'alt' => 'es kuwut',
            'title' => 'Es Kuwut',
            'description' => 'Es kuwut merupakan sejenis minuman koktail dingin khas Bali yang terbuat dari air kelapa yang dicampur dengan serutan kelapa, serutan melon atau timun, biji selasih, perasan jeruk nipis, sirup melon, es batu dan terkadang ditambahkan susu, santan, atau nata de coco.',
            'price' => 'Rp 10.000'
          ],
          
          [
            'img' => './assets/img/es daluman.jpg',
            'alt' => 'es daluman',
            'title' => 'Es Daluman',
            'description' => 'Es daluman adalah minuman menyegarkan yang dapat digunakan sebagai takjil. Daluman atau cincau berasal dari olahan daun cincau (Cyclea sp) dengan tekstur kenyal tetapi mudah terurai dan mencair.',
            'price' => 'Rp 10.000'
          ],
          // ... tambahkan item lain sesuai kebutuhan
        ];

        foreach ($destinations as $key => $d):
        ?>
          <div class="max-w-xs bg-white rounded-lg shadow-lg overflow-hidden mx-auto transition cursor-pointer hover:scale-105">
            <img src="<?= $d['img'] ?>" alt="<?= $d['alt'] ?>" class="w-full h-48 object-cover p-1 rounded-lg">
            <div class="p-4">
              <h3 class="text-lg font-semibold mb-2"><?= $d['title'] ?></h3>
              <p class="text-gray-600 mb-4"><?= truncateString($d['description']) ?></p>
              <button
                class="block py-2 px-4 bg-green-500 text-white font-semibold rounded transition hover:bg-green-600 text-center open-modal"
                data-title="<?= htmlspecialchars($d['title']) ?>"
                data-description="<?= htmlspecialchars($d['description']) ?>"
                data-price="<?= htmlspecialchars($d['price']) ?>"
                data-img="<?= htmlspecialchars($d['img']) ?>"
                data-id="<?= $key ?>"
              >
                Lihat Detail
              </button>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <div class="text-center mt-12">
        <a href="contact.php" class="py-2 px-4 bg-green-500 text-white font-semibold rounded transition hover:bg-green-600">Contact Us for More Info</a>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div id="foodModal" class="fixed inset-0 z-50 flex items-center justify-center backdrop-blur-sm bg-white/30 hidden">
  <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6 relative">
    <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
    <img id="modalImg" src="" alt="" class="w-full h-48 object-cover rounded mb-4">
    <h3 id="modalTitle" class="text-xl font-bold mb-2"></h3>
    <p id="modalDescription" class="mb-4"></p>
    <p id="modalPrice" class="text-green-600 font-bold text-lg"></p>
    
  </div>
</div>

<script>
document.querySelectorAll('.open-modal').forEach(btn => {
  btn.addEventListener('click', function() {
    document.getElementById('modalTitle').textContent = this.dataset.title;
    document.getElementById('modalDescription').textContent = this.dataset.description;
    document.getElementById('modalPrice').textContent = this.dataset.price;
    document.getElementById('modalImg').src = this.dataset.img;
    document.getElementById('foodModal').classList.remove('hidden');
    
  });
});

document.getElementById('closeModal').addEventListener('click', function() {
  document.getElementById('foodModal').classList.add('hidden');
});

// Optional: close modal when clicking outside the modal content
document.getElementById('foodModal').addEventListener('click', function(e) {
  if (e.target === this) {
    this.classList.add('hidden');
  }
});
</script>

<?php include_once 'components/footer.php' ?>