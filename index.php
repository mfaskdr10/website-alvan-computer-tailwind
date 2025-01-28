<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Test Page</title>
  <link rel="stylesheet" href="./assets/css/style.css" />

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>

<body class="">
  <header class="absolute w-full top-0 left-0 z-10 flex items-center">
    <div class="container border-2">
      <div class="flex justify-between items-center relative">
        <div class="px-4">
          <a
            href="#home"
            class="block text-2xl text-teal-500 font-semibold py-6">alvancomputer</a>
        </div>

        <div class="flex items-center px-4">
          <button class="block absolute right-4" id="hamburger">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
          </button>

          <nav
            class="absolute top-full right-4 w-full max-w-[250px] bg-teal-300 rounded-lg shadow-lg mt-4">
            <ul class="block lg:flex">
              <li class="group">
                <a href="#" class="mx-16 py-2 block text-base">Home</a>
              </li>
              <li class="group">
                <a href="#" class="mx-16 py-2 block text-base">About</a>
              </li>
              <li class="group">
                <a href="#" class="mx-16 py-2 block text-base">Service</a>
              </li>
              <li class="group">
                <a href="#" class="mx-16 py-2 block text-base">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Script JS -->
  <script>
    const navbarMenu = document.getElementById("navMenu");
    const hamburger = document.getElementById("hamburger");

    hamburger.addEventListener("click", function() {
      navbarMenu.classList.toggle("hidden");
    });
  </script>
</body>

</html>