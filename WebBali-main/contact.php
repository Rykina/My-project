<?php include_once 'components/header.php' ?>


<section class="mt-24">
  <div class="max-w-3/4 mx-auto">
    <h2 class="mb-6 font-bold text-2xl text-green-500">CONTACT</h2>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
      <form method="post" class="p-4 bg-gray-100 rounded-lg">
        <div class="mb-4">
          <label for="name" class="">Your Name</label>
          <input type="text" id="name" name="name" placeholder="Your Name"
            class="block p-1 w-full border-2 border-gray-400 rounded focus:border-green-500">
        </div>
        <div class="mb-4">
          <label for="email" class="">Your Email</label>
          <input type="text" id="email" name="email" placeholder="example@mail.com"
            class="block p-1 w-full border-2 border-gray-400 rounded focus:border-green-500">
        </div>
        <div class="mb-4">
          <label for="message" class="">Message</label>
          <textarea type="text" id="message" name="message" rows="3" placeholder=""
            class="block p-1 w-full border-2 border-gray-400 rounded focus:border-green-500"></textarea>
        </div>
        <input type="submit" value="Submit" class="py-2 px-4 bg-green-500 font-semibold text-white rounded cursor-pointer hover:bg-green-600">
        <input type="reset" value="Reset" class="py-2 px-4 bg-gray-400 font-semibold text-white rounded cursor-pointer hover:bg-gray-500">
      </form>
      <div class="p-4 bg-gray-100 rounded-lg">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505145.6949744661!2d115.07157704999999!3d-8.4554714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali!5e0!3m2!1sen!2sid!4v1750144605121!5m2!1sen!2sid"
          class="w-full h-full" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>


<?php include_once 'components/footer.php' ?>