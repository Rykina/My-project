<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WebBali</title>
  <!-- tailwindcss framework -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

</head>

<body class="bg-gray-200 min-h-screen flex flex-col">
  <nav class="fixed w-screen top-0 z-50 bg-gray-50 shadow">
    <div class="flex justify-between content-center max-w-[85%] mx-auto py-4">
      <a href="index.php" class="text-2xl font-bold text-gray-800">WebBali</a>
      <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
      <ul class="hidden items-center space-x-6 text-sm text-gray-700 md:flex">
        <li><a href="index.php" class="font-semibold hover:text-green-600 transition <?php echo ($currentPage == 'index.php') ? 'text-green-600 font-bold' : ''; ?>">HOME</a></li>
        <li><a href="destinations.php" class="font-semibold hover:text-green-600 transition <?php echo ($currentPage == 'destinations.php') ? 'text-green-600 font-bold' : ''; ?>">DESTINATIONS</a></li>
        <li><a href="foodndrink.php" class="font-semibold hover:text-green-600 transition <?php echo ($currentPage == 'foodndrink.php') ? 'text-green-600 font-bold' : ''; ?>">FOOD & DRINKS</a></li>
        <li><a href="team.php" class="font-semibold hover:text-green-600 transition <?php echo ($currentPage == 'team.php') ? 'text-green-600 font-bold' : ''; ?>">TEAM</a></li>
        <li><a href="contact.php" class="font-semibold hover:text-green-600 transition <?php echo ($currentPage == 'contact.php') ? 'text-green-600 font-bold' : ''; ?>">CONTACT</a></li>
      </ul>
    </div>
  </nav>