<?php

// $domain = 'http://localhost/travel/zaynertrans.web.id/';
$domain = 'https://zaynertrans.web.id/';
$brand = 'Zayner Trans';
$logo = 'src/img/logo-asli-zayner-trans.jpg';
$logoTransparent = 'src/img/logo-zayner-trans.png';
$title = $brand . " - Travel Bandung Semarang & se-Pulau Jawa";
$desc = $brand . " menawarkan jasa Travel Bandung tujuan Semarang dan se-Pulau Jawa dengan harga murah tahun "  . date('Y');
$telp = '0858-7021-0699';
// $telp2 = '0858-2179-2395';
$alamat = 'Jl. Dr. Djundjunan No.76a, Sukabungah, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162';

$iframe = 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.9472004104477!2d107.59230569!3d-6.89691892!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e700127a9fd3%3A0xf8d74c9073c9491a!2sZayner%20Trans!5e0!3m2!1sid!2sid!4v1752924143074!5m2!1sid!2sid';

function res_telp($telp)
{
  $telp = str_replace('-', '', $telp);
  $telp = preg_replace('/^0/', '62', $telp, 1);
  return $telp;
}
$res_telp = res_telp($telp);
$res_telp2 = isset($telp2) ? res_telp($telp2) : null;
$link_telp = 'tel:' . $res_telp;
$link_telp2 = isset($telp2) ? 'tel:' . $res_telp : null;
$link_whatsapp = 'https://api.whatsapp.com/send/?phone=' . res_telp($telp) . '&text=Halo+admin+' . $domain . '&type=phone_number&app_absent=0';
$link_whatsapp2 = isset($telp2) ? 'https://api.whatsapp.com/send/?phone=' . res_telp($telp2) . '&text=Halo+admin+' . $domain . '&type=phone_number&app_absent=0' : null;



$menu = [
  [
    'Home',
    '#',
  ],
  [
    'Rute Travel',
    '#rute-travel',
  ],
  [
    'Galeri',
    '#galeri',
  ],
  [
    'Kontak',
    '#kontak',
  ],
];



$rute = [
  "Travel Bandung - Banten",
  "Travel Bandung - DKI Jakarta",
  "Travel Bandung - Jawa Barat",
  "Travel Bandung - Jawa Tengah",
  "Travel Bandung - DI Yogyakarta",
  "Travel Bandung - Jawa Timur",
  "Travel Bandung - Bali",

  "Travel Banten - Bandung",
  "Travel DKI Jakarta - Bandung",
  "Travel Jawa Barat - Bandung",
  "Travel Jawa Tengah - Bandung",
  "Travel DI Yogyakarta - Bandung",
  "Travel Jawa Timur - Bandung",
  "Travel Bali - Bandung",
];

$kota = [
  [
    'Bandung',
    'bandung.jpg',
  ],
  [
    'Jakarta',
    'jakarta.jpg',
  ],
  [
    'Semarang',
    'semarang.jpg',
  ],
  [
    'Bali',
    'bali.jpg',
  ],
];

$galeri = [
  '1.jpg',
  '2.jpg',
  '3.jpg',
  '4.jpg',
  '5.jpg',
  '6.jpg',
];

?>

<!DOCTYPE html>
<html
  lang="id"
  class="scroll-smooth">

<head>

  <meta name="author" content="Dion Zebua" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

  <title>
    <?= $title ?>
  </title>
  <meta name="description" content="<?= $desc ?>" />

  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:description" content="<?= $desc ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= $domain ?>" />
  <meta property="og:image" content="<?= $domain . $logo ?>" />

  <link rel="apple-touch-icon" href="<?= $domain . $logo ?>" />
  <link rel="icon" size="16x16" href="<?= $domain . $logo ?>" />
  <link rel="icon" size="32x32" href="<?= $domain . $logo ?>" />
  <link rel="icon" size="180x180" href="<?= $domain . $logo ?>" />
  <link rel="shortcut icon" href="<?= $domain . $logo ?>" />
  <meta property="og:locale" content="id_ID" />
  <meta property="og:site_name" content="<?= $brand ?>" />
  <link rel="canonical" href="<?= $domain ?>" />

  <link
    href="./src/css/output.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="./src/css/swiper-bundle.min.css" />
</head>

<body class="font-poppins text-slate-700 overflow-x-hidden">
  <header class="">
    <div class="container !py-0">
      <div class="flex justify-between py-2">
        <div class="grid place-items-center">
          <a href="<?= $domain ?>">
            <img
              src="<?= $domain . $logoTransparent ?>"
              class="w-16 md:w-20 xl:w-24 m-auto rounded"
              alt="logo" />
          </a>
        </div>
        <div class="flex items-center">
          <nav>
            <button
              title="open nav"
              id="openNav"
              class="bg-primary hover:bg-orange-500 p-1 rounded md:hidden">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6 stroke-slate-100 hover:stroke-slate-200">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>

            <!-- laptop -->
            <ul
              class="hidden md:flex flex-col md:flex-row gap-8 lg:gap-11 [&_li]:flex [&_li]:items-center [&_li_a]:font-medium [&_li_a]:text-slate-700 hover:[&_li_a]:text-orange-500 hover:[&_li]:scale-110 hover:[&_li]:transition-all">
              <?php if (count($menu) > 0) : ?>
                <?php foreach ($menu as $item) : ?>
                  <li><a href="<?= $item[1] ?>"><?= $item[0] ?></a></li>
                <?php endforeach; ?>
              <?php endif; ?>
              <a
                href="<?= $link_whatsapp ?>"
                target="_blank"
                class="flex gap-2 px-5 py-2 bg-primary hover:bg-orange-500 text-slate-200 rounded-lg w-min">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                </svg>
                Pesan
              </a>
            </ul>
            <!-- laptop -->

            <!-- mobile -->
            <ul
              class="fixed h-screen inset-0 py-20 px-5 z-20 bg-slate-950/90 md:hidden !hidden"
              id="popupNav">
              <div
                class="bg-white h-full rounded flex p-5 flex-col md:flex-row gap-5 [&_li]:flex [&_li]:items-center [&_li_a]:font-medium [&_li_a]:text-slate-700 hover:[&_li_a]:text-orange-500 hover:[&_li]:transition-all hover:[&_li_a]:scale-110 relative">
                <button
                  title="close nav"
                  id="closeNav"
                  class="absolute right-5 top-5 bg-primary hover:bg-orange-500 p-1 rounded md:hidden">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6 stroke-slate-100 hover:stroke-slate-200">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M6 18 18 6M6 6l12 12" />
                  </svg>
                </button>

                <?php if (count($menu) > 0) : ?>
                  <?php foreach ($menu as $item) : ?>
                    <li><a href="<?= $item[1] ?>"><?= $item[0] ?></a></li>
                  <?php endforeach; ?>
                <?php endif; ?>
                <a
                  href="<?= $link_whatsapp ?>"
                  target="_blank"
                  class="flex gap-2 px-5 py-2 bg-primary hover:bg-orange-500 text-slate-200 rounded-lg w-min">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                  </svg>
                  Pesan
                </a>
              </div>
            </ul>
            <!-- mobile -->
          </nav>
        </div>
      </div>
    </div>
  </header>

  <main class="overflow-x-hidden">
    <!-- Hero Section -->
    <section class="container">
      <div
        style="background-image: url(./src/img/background-hero-section.jpg)"
        class="py-10 lg:py-7 bg-fixed bg-cover bg-center rounded-lg relative">
        <div
          class="absolute rounded-lg inset-0 bg-[radial-gradient(rgb(15_23_42_/_0.5),rgb(51_65_85_/_0.7))] from-0% via-90% to-100%">
        </div>
        <div
          class="grid grid-cols-12 [&>div]:col-span-full items-center gap-y-6">
          <div class="md:!col-span-7 p-5 md:p-10 md:-top-10 lg:p-20 z-10">
            <h1
              class="text-white text-3xl leading-[40px] md:text-[40px] md:leading-[50px] lg:text-5xl lg:leading-[70px] font-bold text-left sm:max-w-[600px] lg:max-w-full">
              <?= $title ?>
            </h1>
            <div class="flex gap-x-5 mt-7">
              <a
                href="<?= $link_whatsapp ?>"
                target="_blank"
                class="flex gap-2 px-5 py-2 border-2 border-primary hover:border-orange-500 bg-primary hover:bg-orange-500 text-slate-200 rounded-lg w-min top-0 hover:top-2 transition-all duration-700 relative">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                </svg>
                Pesan
              </a>
              <a
                href="#rute-travel"
                class="flex gap-2 px-5 py-2 border-2 border-slate-200 hover:border-orange-500 bg-slate-200 hover:bg-orange-500 text-slate-800 hover:text-slate-200 rounded-lg w-min top-0 hover:top-2 transition-all duration-700 relative">
                Rute
              </a>
            </div>
          </div>
          <div class="md:!col-span-5 p-5 md:p-10 md:-top-10 lg:p-20 z-10">
            <div
              class="bg-white rounded-2xl border-b-8 border-orange-500 shadow-lg p-5 px-7">
              <p class="flex gap-x-2 font-medium">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                </svg>

                <span class="">Info Pemesanan</span>
              </p>
              <div class="w-full bg-slate-200 h-[1px] my-5"></div>
              <form
                class="grid grid-cols-2 gap-5"
                id="bookingForm">
                <div class="col-span-full text-sm">
                  <label
                    for="nama"
                    class="block cursor-pointer font-medium">Nama anda</label>
                  <div class="mt-1">
                    <input
                      type="text"
                      requiblue
                      name="nama"
                      id="nama"
                      autocomplete="off"
                      class="cursor-pointer block w-full rounded-md border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-orange-500 placeholder:text-gray-400 bg-slate-50" />
                  </div>
                </div>

                <div class="col-span-full grid grid-cols-2 gap-x-3">
                  <div class="text-sm">
                    <label
                      for="asal"
                      class="block cursor-pointer font-medium">Asal</label>
                    <div class="mt-1">
                      <input
                        type="text"
                        requiblue
                        name="asal"
                        id="asal"
                        autocomplete="off"
                        class="cursor-pointer block w-full rounded-md border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-orange-500 placeholder:text-gray-400 bg-slate-50" />
                    </div>
                  </div>
                  <div class="text-sm">
                    <label
                      for="tujuan"
                      class="block cursor-pointer font-medium">Tujuan</label>
                    <div class="mt-1">
                      <input
                        type="text"
                        requiblue
                        name="tujuan"
                        id="tujuan"
                        autocomplete="off"
                        class="cursor-pointer block w-full rounded-md border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-orange-500 placeholder:text-gray-400 bg-slate-50" />
                    </div>
                  </div>
                </div>

                <div class="col-span-full text-sm">
                  <label
                    for="jumlah"
                    class="block cursor-pointer font-medium">Jumlah Penumpang</label>
                  <div class="mt-1">
                    <select
                      id="jumlah"
                      name="jumlah"
                      autocomplete="off"
                      class="cursor-pointer block w-full rounded-md border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-orange-500 placeholder:text-gray-400 bg-slate-50">
                      <option>1 Orang</option>
                      <option>2 Orang</option>
                      <option>3 Orang</option>
                      <option>4 Orang</option>
                      <option>5 Orang</option>
                      <option>6 Orang</option>
                      <option>7 Orang</option>
                      <option>8 Orang</option>
                    </select>
                  </div>
                </div>

                <!-- <div class="col-span-full text-sm">
                  <label
                    for="nomor"
                    class="block cursor-pointer font-medium">Nomor Whatsapp</label>
                  <div class="mt-1">
                    <input
                      min="08"
                      type="number"
                      requiblue
                      name="nomor"
                      id="nomor"
                      autocomplete="off"
                      class="cursor-pointer block w-full rounded-md border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-orange-500 placeholder:text-gray-400 bg-slate-50" />
                  </div>
                </div>

                <div class="col-span-full text-sm">
                  <label
                    for="jadwal"
                    class="block cursor-pointer font-medium">Jadwal Keberangkatan</label>
                  <div class="mt-1">
                    <input
                      type="datetime-local"
                      requiblue
                      name="jadwal"
                      id="jadwal"
                      autocomplete="off"
                      class="cursor-pointer block w-full rounded-md border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-orange-500 placeholder:text-gray-400 bg-slate-50" />
                  </div>
                </div> -->

                <button
                  class="col-span-full px-5 py-2 border-2 border-primary hover:border-orange-500 bg-primary hover:bg-orange-500 text-slate-200 rounded-lg transition-all relative"
                  type="submit">
                  Pesan Sekarang
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section -->

    <!-- Rute Travel -->
    <section class="container my-20" id="rute-travel">
      <div class="">
        <div class="text-center inner-container">
          <h2 class="line-h2">Rute <?= $brand ?></h2>
          <p class="desc">
            <!-- Pesan travel anda segera dan dapatkan berbagai promo menarik
            khusus untuk hari ini! -->
            <?= $desc ?>
          </p>
        </div>
        <div
          class="grid grid-cols-12 gap-x-5 gap-y-7 [&>div]:col-span-6 [&>div]:sm:col-span-4 [&>div]:md:col-span-3 [&>div]:lg:col-span-2 [&>div]:rounded-xl [&>div]:border [&>div]:shadow-xl [&>div]:overflow-hidden [&>div]:bg-white [&>div]:relative [&>div>a]:absolute [&>div>a]:inset-0 [&_img]:border-b [&>div_div]:p-4 [&>div_div]:md:px-5 [&>div_div]:lg:px-6 [&_h3]:line-clamp-3 [&_h3]:text-sm [&_h3]:text-slate-700 hover:[&_h3]:text-orange-500 [&_h3]:z-10 [&_h3]:relative [&_h3]:cursor-pointer [&_svg]:size-4 [&_svg]:mx-2 [&_svg]:py-0.5 [&_svg]:inline-block">
          <?php if (count($rute) > 0) : ?>
            <?php foreach ($rute as $item) : ?>
              <div class="">
                <a
                  title="<?= 'rute ' . $item ?>"
                  href="<?= $link_whatsapp ?>!"
                  class=""></a>
                <img
                  src="./src/img/rute.jpg"
                  width="100%"
                  height="100%"
                  alt="<?= 'rute ' . $item ?>"
                  class="" />
                <div class="">
                  <a href="<?= $link_whatsapp ?>">
                    <h3 class="">
                      <?= $item ?>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                      </svg>
                    </h3>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

      </div>
    </section>
    <!-- Rute Travel -->

    <!-- Tentang Kami -->
    <section id="tentang-kami" class="bg-gradient-to-tr from-primary to-orange-500 py-20">
      <div class="container">
        <div class="grid grid-cols-12 gap-8">
          <div class="col-span-full md:col-span-6">
            <div class="w-full max-w-[400px]">
              <img src="<?= $domain . $logo ?>" class="rounded-lg" alt="tentang <?= $brand ?>">
            </div>
          </div>
          <div class="col-span-full md:col-span-6">
            <div class="text inner-container">
              <h2 class="line-h2 left-12 text-slate-50 before:!bg-orange-300 after:!bg-orange-300">Tentang Kami</h2>
              <p class="desc !text-slate-300 !mb-5">
                <strong><?= $brand ?></strong> akan membantu anda melakukan perjalanan <a href="https://jasatravel.web.id" class="underline" target="_blank">travel</a> ke berbagai daerah, tentunya dengan harga murah dan terjangkau. Pelayanan yang diberikan sangat memuaskan. Selain travel reguler, kami juga menawarkan berbagai jasa sebagai berikut:
              </p>
              <ul class="!list-item !list-disc text-slate-300 ml-5">
                <li>Carter Regular</li>
                <li>Carter Drop</li>
                <li>Sewa Mobil + Driver</li>
                <li>Kirim Paket</li>
                <li>Wisata</li>
              </ul>
            </div>
            <div class="grid grid-cols-2">
              <div class="col-span-full">
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Tentang Kami -->

    <!-- Kota Populer -->
    <section class=" mb-20 bg-orange-50">
      <div class="container">
        <div class="py-20">
          <div class="text-center inner-container">
            <h2 class="line-h2">Kota Populer</h2>
            <p class="desc">
              Kunjungi kota-kota terkenal bersama <?= $brand ?>, nikmati pengalaman
              travel yang tak terlupakan dan menyenangkan!
            </p>
          </div>
          <div
            class="grid grid-cols-8 gap-x-6 gap-y-10 [&>*]:col-span-full [&>*]:sm:col-span-4 [&>*]:md:!col-span-2 [&>*]:border [&>*]:relative [&>*]:min-h-96 md:[&>*]:min-h-80 [&>*]:rounded-xl [&>*]:shadow-xl [&>*]:cursor-pointer [&>*]:overflow-hidden [&>*]:before:absolute [&>*]:before:content-[''] [&>*]:before:z-[2] [&>*]:before:inset-0 [&>*]:before:bg-slate-950/55 [&_img]:w-full [&_img]:h-full [&_img]:object-cover [&_img]:absolute [&_img]:inset-0 [&_img]:scale-100 [&_img]:transition-all [&_img]:duration-500 [&>div>div]:z-10 [&>div>div]:relative [&>div>div]:p-5 [&>div>div]:text-center [&>div>div]:flex-col [&>div>div]:flex [&>div>div]:justify-between [&>div>div]:h-full [&_h3]:text-slate-50 [&_a]:col-span-full [&_a]:px-5 [&_a]:py-2 [&_a]:border-2 [&_a]:border-primary hover:[&_a]:border-orange-500 [&_a]:bg-primary hover:[&_a]:bg-orange-500 [&_a]:text-slate-200 [&_a]:rounded-lg [&_a]:transition-all [&_a]:relative">
            <?php if (count($kota) > 0) : ?>
              <?php foreach ($kota as $item) : ?>
                <div class="group">
                  <img
                    src="<?= $domain . 'src/img/place/' . $item[1] ?>"
                    class="group-hover:scale-125"
                    alt="<?= $item[0] ?>" />
                  <div class="">
                    <h3><?= $item[0] ?></h3>
                    <a
                      href="<?= $link_whatsapp ?>"
                      target="_blank">
                      Pesan Sekarang
                    </a>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Kota Populer -->

    <!-- CTA -->
    <section class="container my-20">
      <div class="w-full">
        <div
          class="bg-gradient-to-tr from-primary to-orange-500 rounded-3xl p-8 text-center sm:p-16 md:px-24 md:py-20 lg:px-28">
          <div class="max-w-2xl mx-auto">
            <h2 class="text-white text-4xl">
              Apakah anda ingin perjalanan travel yang aman dan cepat?
            </h2>
            <p
              class="max-w-lg text-base text-indigo-100 mx-auto mt-4 sm:text-lg">
              Hubungi kami dan konsultasikan kebutuhan anda, kami siap
              membantu anda 24 jam.
            </p>
          </div>
          <div
            class="flex justify-center gap-4 mt-8 sm:flex-row sm:items-center sm:gap-5">
            <a
              href="<?= $link_whatsapp ?>"
              class="flex gap-2 px-5 py-2 border-2 border-slate-200 hover:border-orange-500 bg-white hover:bg-orange-500 text-slate-700 hover:text-slate-200 rounded-lg w-min top-0 hover:top-2 transition-all duration-700 relative">
              Pesan
            </a>
            <a
              href="#rute-travel"
              class="flex gap-2 px-5 py-2 border-2 border-slate-200 hover:border-orange-500 bg-transparent hover:bg-orange-500 text-slate-200 hover:text-slate-200 rounded-lg w-min top-0 hover:top-2 transition-all duration-700 relative">
              Rute
            </a>
          </div>
          <ul
            class="flex flex-wrap items-center justify-center gap-x-6 gap-y-3 text-sm font-medium text-white mt-8">
            <li class="inline-flex items-center gap-2">
              <svg
                aria-hidden="true"
                class="h-5 w-5 shrink-0 text-white"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51ZM236,128A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128Z"></path>
              </svg>
              Harga murah
            </li>
            <li class="inline-flex items-center gap-2">
              <svg
                aria-hidden="true"
                class="h-5 w-5 shrink-0 text-white"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51ZM236,128A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128Z"></path>
              </svg>
              Via tol
            </li>
            <li class="inline-flex items-center gap-2">
              <svg
                aria-hidden="true"
                class="h-5 w-5 shrink-0 text-white"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51ZM236,128A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128Z"></path>
              </svg>
              Support 24 jam
            </li>
            <li class="inline-flex items-center gap-2">
              <svg
                aria-hidden="true"
                class="h-5 w-5 shrink-0 text-white"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51ZM236,128A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128Z"></path>
              </svg>
              Mobil ber-ac
            </li>
            <li class="inline-flex items-center gap-2">
              <svg
                aria-hidden="true"
                class="h-5 w-5 shrink-0 text-white"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51ZM236,128A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128Z"></path>
              </svg>
              Door to door
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- CTA -->

    <!-- Galeri -->
    <section class="bg-orange-50 my-20 py-20"
      id="galeri">
      <div class="container">
        <div class="">
          <div class="text-center inner-container">
            <h2 class="line-h2">Galeri Travel</h2>
            <p class="desc">
              Galeri ini menampilkan berbagai unit, foto, dan momen berharga
              yang merefleksikan perjalanan kami.
            </p>
          </div>
          <div
            class="grid grid-cols-12 sm:gap-x-6 gap-y-8 [&>*]:overflow-hidden [&>img]:cursor-pointer [&>img]:w-full [&>img]:object-cover [&>img]:rounded-xl [&>img]:shadow-lg [&>img]:h-72 [&>img]:transition-all [&>img]:duration-700 [&>img]:brightness-50 hover:[&>img]:brightness-90 [&>img]:col-span-full">
            <?php if (count($galeri) > 0) : ?>
              <?php foreach ($galeri as $key => $item) : ?>
                <img
                  width="100"
                  height="100"
                  src="<?= $domain . '/src/img/galeri/' . $item ?>"
                  class="<?php
                          if ($key == 0 || $key == 3) {
                            echo 'sm:!col-span-8';
                          } elseif ($key == 1 || $key == 2) {
                            echo 'sm:!col-span-4';
                          } elseif ($key == 4 || $key == 5) {
                            echo 'sm:!col-span-6';
                          }
                          ?> [backdrop-filter:drop-shadow(2px_4px_6px_black)]"
                  alt="galeri <?= $key + 1 ?>" />
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Galeri -->

    <!-- Testimoni -->
    <section class="container my-20">
      <div class="">
        <div class="text-center inner-container">
          <h2 class="line-h2">Testimoni Pelanggan</h2>
          <p class="desc">
            Setiap testimoni merupakan bukti komitmen kami untuk memberikan
            yang terbaik. Terima kasih atas kepercayaan Anda kepada kami!
          </p>
        </div>
        <div
          class="[&>div]:h-full [&>div]:px-10 [&>div]:pb-10 containerSwipper [&_.itemSlider]:shadow-2xl [&_.itemSlider]:p-5 [&_.itemSlider]:border [&_.itemSlider]:rounded-xl [&_.itemSlider]:col-span-full [&_.itemSlider]:sm:col-span-6 [&_.itemSlider]:lg:col-span-4 first:[&_.itemSlider>div]:flex [&>img]:first:[&_.itemSlider>div]:w-4 [&_.testimoni]:text-slate-500 [&_.testimoni]:text-[15px] [&_.testimoni]:my-5 [&_.testimoni]:testimoni-text [&_.user-testimoni]:flex [&_.user-testimoni]:gap-x-4 [&_.user-testimoni_img]:w-10 [&_.user-testimoni_img]:border [&_.user-testimoni_img]:rounded-3xl [&_.user-testimoni_img]:p-1 [&_.user-testimoni_img]:bg-gradient-to-r [&_.user-testimoni_img]:from-orange-500 [&_.user-testimoni_img]:to-primary [&_.user-testimoni_div]:flex [&_.user-testimoni_div]:flex-col [&_.user-testimoni_div]:justify-center first:[&_.user-testimoni_div_p]:font-semibold first:[&_.user-testimoni_div_p]:text-sm last:[&_.user-testimoni_div_p]:text-slate-500 last:[&_.user-testimoni_div_p]:text-xs">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="itemSlider">
                  <div class="">
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                  </div>
                  <p class="testimoni">
                    Saya menggunakan jasa Travel <?= $brand ?> untuk rute <?= $rute[1] ?>. Pelayanan sangat memuaskan, armada nyaman, tepat waktu, dan staf ramah. Pengalaman perjalanan yang menyenangkan dan saya sangat puas!
                  </p>
                  <div class="user-testimoni">
                    <img
                      src="./src/img/group.png"
                      alt="testimoni" />
                    <div>
                      <p>Dion Zebua</p>
                      <p>Web Developer</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="itemSlider">
                  <div class="">
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                  </div>
                  <p class="testimoni">
                    Pelayanan luar biasa, mobil sangat nyaman, dapat snack, dan supirnya ramah. Terima kasih banyak Mas Sopir, semoga selalu sukses dan terus memberikan pelayanan terbaik!
                  </p>
                  <div class="user-testimoni">
                    <img
                      src="./src/img/group.png"
                      alt="testimoni" />
                    <div>
                      <p>Rina Pratiwi</p>
                      <p>Guru</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="itemSlider">
                  <div class="">
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                  </div>
                  <p class="testimoni">
                    Perjalanan sangat nyaman, cara menyetir driver sangat baik, dan sikapnya sangat ramah. Pengalaman yang menyenangkan dan membuat perjalanan semakin menyenangkan!
                  </p>
                  <div class="user-testimoni">
                    <img
                      src="./src/img/group.png"
                      alt="testimoni" />
                    <div>
                      <p>Dewi Anggraini</p>
                      <p>Ibu Rumah Tangga</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="itemSlider">
                  <div class="">
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                  </div>
                  <p class="testimoni">
                    Sudah dua kali menggunakan travel ini, pelayanan admin sangat bagus dan respons cepat. Penjemputan selalu tepat waktu sesuai jadwal, mobilnya bersih dan nyaman, driver ramah, dan snack tersedia di kursi.
                  </p>
                  <div class="user-testimoni">
                    <img
                      src="./src/img/group.png"
                      alt="testimoni" />
                    <div>
                      <p>Nina Sari</p>
                      <p>Mahasiswi</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="itemSlider">
                  <div class="">
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                    <img
                      src="./src/img/star.png"
                      width="16"
                      height="16"
                      alt="bintang" />
                  </div>
                  <p class="testimoni">
                    Snack tersedia, driver sangat ramah, perjalanan tepat waktu sesuai jadwal, harga sesuai dengan kesepakatan, dan biaya tol sudah termasuk. Layanan yang sangat memuaskan dan profesional!
                  </p>
                  <div class="user-testimoni">
                    <img
                      src="./src/img/group.png"
                      alt="testimoni" />
                    <div>
                      <p>Joko</p>
                      <p>Buruh Pabrik</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimoni -->

    <!-- Kontak -->
    <section class="bg-orange-50 mt-20 py-20"
      id="kontak">
      <div class="container">
        <div class="">
          <div class="text-center inner-container">
            <h2 class="line-h2">Kontak</h2>
            <p class="desc">
              Hubungi kami sekarang juga, kami siap bantu 24 jam.
            </p>
          </div>
          <div class="grid grid-cols-12 text-center">
            <div
              class="p-5 py-8 col-span-full sm:col-span-4 border-b-2 sm:border-b-0 sm:border-r-2 border-primary flex flex-col justify-start items-center gap-y-5">
              <svg
                aria-hidden="true"
                role="img"
                height="1em"
                width="1em"
                viewBox="0 0 384 512"
                xmlns="http://www.w3.org/2000/svg"
                class="size-10">
                <path
                  class="fill-orange-500"
                  d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
              </svg>
              <h3>Alamat</h3>
              <p class="text-slate-600">
                <?= $alamat ?>
              </p>
            </div>

            <div
              class="p-5 py-8 col-span-full sm:col-span-4 border-t-2 border-b-2 sm:border-t-0 sm:border-b-0 sm:border-l-2 sm:border-r-2 border-primary flex flex-col justify-start items-center gap-y-5">
              <svg
                viewBox="0 0 612 612"
                xmlns="http://www.w3.org/2000/svg"
                class="size-10">
                <path
                  class="fill-orange-500"
                  d="M586.923 256.013c-7.959-8.24-16.655-13.074-24.53-15.916 10.798-62.807 8.812-97.901-246.643-178.322C55.771-20.07 26.688 13.85 5.274 81.869L1.622 93.471c-5.794 18.406 4.43 38.025 22.836 43.82l83.405 26.257c18.407 5.794 38.025-4.43 43.82-22.836l3.652-11.602c16.587-52.69 97.773-28.905 143.76-14.428 45.986 14.477 126.155 41.49 109.568 94.18l-3.653 11.601c-5.794 18.406 4.43 38.025 22.836 43.82l83.405 26.257c18.406 5.795 38.025-4.429 43.82-22.835l2.369-8.038c4.933 2.036 10.229 5.149 15.123 10.215 17.553 18.182 23.378 53.308 16.842 101.589-11.335 83.657-44.21 113.537-79.221 123.481v-14.553c0-14.775-3.693-29.4-11.181-42.179-34.94-59.797-84.556-112.856-147.598-159.626v-35.34c0-2.745-2.246-4.992-4.991-4.992h-51.862a4.975 4.975 0 0 0-4.992 4.992v35.139h-59.199v-35.139a5.007 5.007 0 0 0-4.992-4.992H173.46a5.007 5.007 0 0 0-4.992 4.992v35.139C105.326 325.264 55.661 378.322 20.67 438.22c-7.487 12.778-11.18 27.403-11.18 42.177v32.894c0 46.87 37.985 84.855 84.854 84.855h330.984c46.136 0 83.581-36.824 84.745-82.679 56.115-13.143 87.95-58.928 99.111-141.316 7.497-55.335.005-95.082-22.261-118.138zM346.544 481.271l-33.304-11.858c3.533-7.12 5.57-15.115 5.57-23.606 0-29.35-23.809-53.159-53.208-53.159-29.35 0-53.209 23.81-53.209 53.159 0 29.4 23.859 53.21 53.209 53.21a52.961 52.961 0 0 0 29.386-8.859l18.266 30.026c-13.76 8.835-30.087 14.022-47.652 14.022-48.817 0-88.349-39.582-88.349-88.398 0-48.767 39.533-88.349 88.349-88.349s88.399 39.583 88.399 88.349c0 12.621-2.69 24.6-7.457 35.463z"></path>
              </svg>
              <h3>Telpon</h3>
              <p class="text-slate-600"><?= $telp ?></p>
              <?php echo isset($telp2) ? '<p class="text-slate-600">' . $telp2 . '</p>' : '' ?>
            </div>

            <div
              class="p-5 py-8 col-span-full sm:col-span-4 border-t-2 sm:border-t-0 sm:border-l-2 border-primary flex flex-col justify-start items-center gap-y-5">
              <svg
                aria-hidden="true"
                role="img"
                height="1em"
                width="1em"
                viewBox="0 0 448 512"
                xmlns="http://www.w3.org/2000/svg"
                class="size-10">
                <path
                  class="fill-orange-500"
                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
              </svg>
              <h3>Whatsapp</h3>
              <p class="text-slate-600"><?= $telp ?></p>
              <?php echo isset($telp2) ? '<p class="text-slate-600">' . $telp2 . '</p>' : '' ?>

            </div>
          </div>
        </div>
        <?php if ($iframe) :  ?>
          <iframe
            title="alamat"
            src="<?= $iframe ?>"
            allowfullscreen=""
            class="w-full h-60 border-4 brightness-75 hover:brightness-100 transition-all duration-700 shadow-lg rounded-lg border-orange-500"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <?php endif ?>
      </div>
    </section>
    <!-- Kontak -->
  </main>

  <footer class="!py-5 container">
    <a
      href="<?= $link_whatsapp ?>"
      target="_blank"
      class="fixed right-5 bottom-5 bg-green-700 hover:bg-green-600 transition-all duration-700 z-[99] rounded-full p-2">
      <svg
        aria-hidden="true"
        role="img"
        height="1em"
        width="1em"
        viewBox="0 0 448 512"
        xmlns="http://www.w3.org/2000/svg"
        class="size-10">
        <path
          class="fill-slate-200"
          d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
      </svg>
    </a>
    <?php echo isset($telp2) ?
      '<a
      href="' . $link_whatsapp2 . '"
      target="_blank"
      class="fixed right-5 !mb-[73px] bottom-5 bg-green-700 hover:bg-green-600 transition-all duration-700 z-[99] rounded-full p-2">
      <svg
        aria-hidden="true"
        role="img"
        height="1em"
        width="1em"
        viewBox="0 0 448 512"
        xmlns="http://www.w3.org/2000/svg"
        class="size-10">
        <path
          class="fill-slate-200"
          d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
      </svg>
    </a>'
      : null ?>
    <p class="text-center text-sm text-slate-500">
      &#169; copyright - developed by
      <a
        href="https://dionzebua.com"
        class="underline text-orange-500"
        target="_blank">Dion Zebua</a>
    </p>
  </footer>

  <script src="./src/js/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      breakpoints: {
        755: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1100: {
          slidesPerView: 3,
        },
        1400: {
          slidesPerView: 4,
        },
      },
      loop: true,
      grabCursor: true,
      centeblueSlides: true,
      spaceBetween: 20,
      freeMode: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>

  <script src="./src/js/script.js"></script>
  <script>
    const bookingForm = document.querySelector('#bookingForm')

    bookingForm.addEventListener('submit', (e) => {
      e.preventDefault()

      const data = {
        'nama': e.target[0].value,
        'asal': e.target[1].value,
        'tujuan': e.target[2].value,
        'jumlah': e.target[3].value,
        'nomor': e.target[4].value,
        'jadwal': e.target[5].value,
      }
      console.log(data);

      const text = `Saya ingin memesan travel!%0A%0A*Nama* : ${data.nama}%0A*Asal* : ${data.asal}%0A*Tujuan* : ${data.tujuan}%0A*Jumlah* : ${data.jumlah}%0A*Nomor* : ${data.nomor}%0A*Jadwal* : ${data.jadwal.replace('T', ' ')}%0A%0A${window.location.href}`
      window.open(`https://wa.me/<?= $res_telp ?>/?text=${text}`, '_blank')
    })
  </script>
</body>

</html>