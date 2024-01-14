<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FH Store</title>
    <!-- tailwind css -->
    <link href="dist/output.css" rel="stylesheet" />
    <!-- aos library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <!-- header section -->
    <header
      class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10"
    >
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a
              href="#"
              class="font-fontPrimary text-lg text-transparent bg-clip-text bg-gradient-to-r from-slate-100 to-slate-600 block py-6 flex"
            >
              <svg
                class="fill-current text-slate-50"
                width="30px"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>NBA</title>
                <path
                  d="M9.19 0a2.486 2.486 0 0 0-2.485 2.484v19.029A2.488 2.488 0 0 0 9.19 24h5.615a2.493 2.493 0 0 0 2.49-2.487V2.484A2.488 2.488 0 0 0 14.81 0zm0 .584h3.21c-.62.237-.707.508-.73 1.366-.105.01-.325-.087-.25.434 0 0 .043.346.18.286-.133.918.023.99-.93 1.031l-.047.067c-.95.093-1.25-.027-2.05 1.603 0 0-.207.505-.268.714-.197.415-.674 1.328-.819 1.919-.046.2-.14.264-.01.553.185.417-.124.527.95.496V9.3s-.286.247-.346.398c-.061.147-.226.89-.22 1.237.019.917.767 1.683.992 2.597l.492.07c.282.634 1.495 2.355 1.743 2.582.057.159.365.355.545.551.149.141 1.025 1.1 2.054 1.692-.007-.001.164.344.249.618-.342.275.32.777.52 1.609.012.107-.19.222.114.495-.022 1.256-.402 1.918.241 2.266H9.191a1.9 1.9 0 0 1-1.9-1.901V2.486a1.9 1.9 0 0 1 1.9-1.902zm3.804.002h1.815a1.9 1.9 0 0 1 1.897 1.898v9.193a1.653 1.653 0 0 0-.22-.397c0-.255-.272-.249-.346-.344-.07-.081.067-.128-.407-.235-.09-.05-.158-.747-.158-.747-.07-.447-.229-.754-.467-1.227-.12-.243-.177-1.001-.305-1.386.071-1.767-.493-2.28-.95-2.569-.174-.11-.262-.191-.433-.29l-.005-.082c-.133-.126-.402-.264-.623-.362-.068-.07-.037-.22.01-.276.15-.02.348-.356.513-.703.129.009.174-.118.214-.19.138-.222.288-.413.096-.542.435-.777.154-1.301-.08-1.321-.095-.195-.26-.316-.551-.42zm.551 6.338c.06.319.34 1.929.456 2.187.123.259.535 1.05.73 1.54a1.69 1.69 0 0 0-1.294 1.646 1.692 1.692 0 0 0 1.693 1.691 1.692 1.692 0 0 0 1.576-1.066v8.59a1.887 1.887 0 0 1-1.598 1.877h-.017c.833-.502.319-1.46.16-2.022-.012-.033.014-.074.026-.1.045-.08-.045-.257-.045-.257-.098-.09-.127-.561-.182-.772-.089-.358.157-.971.157-1.18 0-.206-.156-.491-.445-.858-.069-.078-.276-1.86-.462-2.313-.258-.623-.339-.526-.64-1.266-.24-.525-.055-1.295-.59-3.085.005.006.12-.113.12-.113s-.422-1.55-.561-1.975c-.14-.426-.385-.456-.385-.456s.002-.172.012-.216c.02-.07.516-1.367.558-1.407.001-.03.717-.514.731-.445Z"
                />
              </svg>
              FH STORE
            </a>
          </div>
          <div class="flex items-center px-8">
            <button
              id="hamburger"
              name="hamburger"
              type="button"
              class="block absolute right-0 md:-right-0 lg:hidden"
            >
              <span
                class="hamburger-line duration-300 ease-in-out origin-top-left"
              ></span>
              <span class="hamburger-line duration-300 ease-in-out"></span>
              <span
                class="hamburger-line duration-300 ease-in-out origin-top-left"
              ></span>
            </button>
            <nav
              id="nav-menu"
              class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[275px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:shadow-none"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a
                    href="#home"
                    class="text-base text-secondary py-2 mx-8 flex group-hover:text-tertiary"
                    >Home</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#aboutUs"
                    class="text-base text-secondary py-2 mx-8 flex group-hover:text-tertiary"
                    >About Us</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#product"
                    class="text-base text-secondary py-2 mx-8 flex group-hover:text-tertiary"
                    >product</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#faq"
                    class="text-base text-secondary py-2 mx-8 flex group-hover:text-tertiary"
                    >FAQ</a
                  >
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- HERO SECTION START-->
    <section
      id="home"
      class="pt-36 lg:py-32 bg-no-repeat"
      style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
          ),
          url(dist/asset/bg-image.jpg);
      "
    >
      <div class="container">
        <div class="flex flex-wrap pb-96">
          <div class="w-full self-center px-4">
            <h1 class="block font-extrabold text-slate-100 text-4xl mb-3">
              KAMI ADA KARENA ANDA
            </h1>
            <h2 class="font-medium text-2xl text-secondary font-semibold mb-10">
              The Best Quality Product And Service
            </h2>
            <p class="text-primary lg:w-1/2"></p>
            <a
              class="bg-slate-300 font-semibold rounded-full py-3 px-8 hover:bg-slate-100"
              href="#product"
              >Kunjungi Product</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- product section  -->
    <section id="product" class="pt-20 pb-16 bg-stone-200">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center  border border-red-600 mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2 lg:text-2xl">
              Pengenalan Produk Kami
            </h4>
            <h2 class="font-bold text-3xl text-secondary mb-4 lg:text-4xl">
              Produk Terbaru
            </h2>
          </div>
          <div class="w-full px-4 flex flex-wrap gap-6 md:grid md:grid-cols-2 lg:justify-center lg:items-center lg:grid lg:grid-cols-4 lg:w-10/12 lg:mx-auto">
            <div
              class="mb-12 p-4 text-center border bg-red-300 rounded-xl"
              data-aos="zoom-in"
            >
              <div class="rounded-lg shadow-md overflow-hidden">
              <?php
                $imagePath = "dist/asset/image1.png";
                echo "<img src=\"$imagePath\" alt=\"truck\" class=\"w-96\" style=\"width: 100%; max-width: 400px;\">";
                ?>
              </div>
              <h4 class="text-2xl font-semibold uppercase text-dark mt-3 mb-2">
                DETROIT 02 | BLACK
              </h4>
              <h4 class="text-2xl font-semibold uppercase text-dark mt-3 mb-7">
                RP. 620.000
              </h4>
              <a
                class="bg-slate-200 font-semibold rounded-full py-3 px-16 hover:bg-slate-100"
                href="produk1.php"
                >Buy Now</a
              >
            </div>
            <div
              class="mb-12 p-4 text-center bg-blue-300 rounded-xl"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="rounded-lg shadow-md overflow-hidden">
              <?php
                $imagePath = "dist/asset/image2.png";
                echo "<img src=\"$imagePath\" alt=\"truck\" class=\"w-96\" style=\"width: 100%; max-width: 400px;\">";
                ?>
              </div>
              <h4 class="text-2xl font-semibold uppercase text-dark mt-3 mb-2">
                DETROIT 02 | SAGE
              </h4>
              <h4 class="text-2xl font-semibold uppercase text-dark mt-3 mb-7">
                RP. 570.000
              </h4>
              <a
                class="bg-slate-200 font-semibold rounded-full py-3 px-16 hover:bg-slate-100"
                href="produk2.php"
                >Buy Now</a
              >
            </div>
            <div
              class="mb-12 p-4 text-center bg-blue-300 rounded-xl"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="rounded-lg shadow-md overflow-hidden">
              <?php
                $imagePath = "dist/asset/image3.png";
                echo "<img src=\"$imagePath\" alt=\"truck\" class=\"w-96\" style=\"width: 100%; max-width: 400px;\">";
                ?>
              </div>
              <h4 class="text-2xl font-semibold uppercase text-dark mt-3 mb-2">
                PISTONS 2 | WHITE
              </h4>
              <h4 class="text-2xl font-semibold uppercase text-dark mt-3 mb-7">
                RP. 750.000
              </h4>
              <a
                class="bg-slate-200 font-semibold rounded-full py-3 px-16 hover:bg-slate-100"
                href="produk2.php"
                >Buy Now</a
              >
            </div>
            <div
              class="mb-12 p-4 text-center bg-blue-300 rounded-xl"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="rounded-lg shadow-md overflow-hidden">
              <?php
                $imagePath = "dist/asset/image4.png";
                echo "<img src=\"$imagePath\" alt=\"truck\" class=\"w-96\" style=\"width: 100%; max-width: 400px;\">";
                ?>
              </div>
              <h4 class="text-2xl font-semibold uppercase text-dark mt-3 mb-2">
                DETROIT 02 | BLUE
              </h4>
              <h4 class="text-2xl font-semibold uppercase text-dark mt-3 mb-7">
                RP. 700.000
              </h4>
              <a
                class="bg-slate-200 font-semibold rounded-full py-3 px-16 hover:bg-slate-100"
                href="produk2.php"
                >Buy Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer section -->
    <section class="bg-slate-100">
      <div class="container">
        <div class="text-center">
          <h1 class="pt-6 text-2xl text-stone-300 font-semibold mb-2">
            THANKS FOR BUYING
          </h1>
        </div>
        <div class="w-full px-6 pt-6 pb-20 lg:grid lg:flex">
          <div class="max-w-xl">
            <h4 class="pt-6 text-sm text-stone-300 font-semibold mb-2">
              Hubungi Kami
            </h4>
            <div class="gap-2 flex mb-2">
              <svg
                class="fill-current w-5 h-5"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Instagram</title>
                <path
                  d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                />
              </svg>
              <a href="https://api.whatsapp.com/send/?phone=%2B6283140502080&text&type=phone_number&app_absent=0">
                <svg
                  class="w-5 h-5 fill-current"
                  role="img"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>WhatsApp</title>
                  <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
                  />
                </svg>
              </a>
              <svg
                role="img"
                class="w-5 h-5 fill-current"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Facebook</title>
                <path
                  d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"
                />
              </svg>
              <svg
                role="img"
                class="w-5 h-5 fill-current"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>TikTok</title>
                <path
                  d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"
                />
              </svg>
              <svg
                class="w-5 h-5 fill-current"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>GitHub</title>
                <path
                  d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                />
              </svg><br>
            </div>
            <p class="text-sm mb-1">Kec Tegal barat (52111), Kota Tegal Jawa Tengah</p>
            <p class="text-sm">+6283140502080</p>
          </div>
          <h4 class="pt-6 text-sm text-stone-300 font-semibold mb-2">Menu</h4>

            <a class="cursor-pointer hover:underline" href="#"> Beranda</a
            ><br />
            <a class="cursor-pointer hover:underline" href="#aboutUs"
              >Tentang Kami</a
            ><br />
            <a class="cursor-pointer hover:underline" href="#product">Produk</a
            ><br />
            <a class="cursor-pointer hover:underline" href="#faq"> FAQ</a>
          </div>
        </div>
      </div>
      <footer>
        <div class="text-center text-sm text-slate-700 opacity-50 my-auto">
          <span>&copy; Fathan hanif | 22041052</span>
        </div>
      </footer>
    </section>
  </body>
  <!-- footer -->
  <script src="/dist/js/script.js"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>
