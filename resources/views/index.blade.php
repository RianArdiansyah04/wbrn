<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title>Cyber Creative</title>
    <link rel="icon" href="img/logocyber/Cyber (2).png" class="h-30% w-50%" />
    <link href="{{ asset('dist/output.css') }}" rel="stylesheet" />
    <script>
        if (
				localStorage.theme === "dark" ||
				(!("theme" in localStorage) &&
					window.matchMedia("(prefers-color-scheme: dark)").matches)
			) {
				document.documentElement.classList.add("dark");
			} else {
				document.documentElement.classList.remove("dark");
			}
    </script>
</head>

<body>

    <!-- Header Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">

                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-primary block py-6">
                        <p>Cyber Creative</p>
                    </a>
                </div>

                <div>
                    <div class="flex items-center px-4">

                        <button id="hamburger" name="humberger" type="button" class="block absolute right-4 lg:hidden">
                            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>

                            <span class="hamburger-line transition duration-300 ease-in-out"></span>

                            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                        </button>

                        <nav id="nav-menu"
                            class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-dark dark:shadow-slate-500 lg:dark:bg-transparent">
                            <ul class="block lg:flex">

                                <li class="group">
                                    <a href="#home"
                                        class="text-base text-dark py-2 mx-8 inline-flex group-hover:text-primary dark:text-white">Beranda</a>
                                </li>

                                <li class="group">
                                    <a href="#about"
                                        class="text-base text-dark py-2 mx-8 inline-flex group-hover:text-primary dark:text-white">Tujuan
                                        Kami</a>
                                </li>

                                <li class="group">
                                    <a href="#portfolio"
                                        class="text-base text-dark py-2 mx-8 inline-flex group-hover:text-primary dark:text-white">Kegiatan</a>
                                </li>

                                <li class="group">
                                    <a href="#blog"
                                        class="text-base text-dark py-2 mx-8 inline-flex group-hover:text-primary dark:text-white">Prestasi</a>
                                </li>

                                <li class="group">
                                    <a href="#contact"
                                        class="text-base text-dark py-2 mx-8 inline-flex group-hover:text-primary dark:text-white">Contact</a>
                                </li>

                                <li class="flex items-center pl-8 mt-3 lg:mt-0">
                                    <div class="flex">
                                        <span class="mr-2 text-sm text-slate-500 dark:text-white">Light</span>
                                        <input type="checkbox" class="hidden" id="dark-toggle" />
                                        <label for="dark-toggle">
                                            <div
                                                class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                                                <div
                                                    class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out">
                                                </div>
                                            </div>
                                        </label>
                                        <span class="ml-2 text-sm text-slate-500 dark:text-white">Dark</span>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <section id="home" class="pt-36 dark:bg-dark">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font- text-primary md:text-xl">
                        Website Resmi
                        <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl dark:text-white">Cyber
                            Creative</span>
                    </h1>
                    <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl mt-3">
                        Beriman |
                        <span class="text-dark dark:text-white"></span>Berilmu | Beramal
                    </h2>
                    <p class="font-medium text-secondary mb-10 leading-relaxed">
                        Organisasi cyber adalah kelompok atau entitas yang berfokus pada
                        kegiatan dan aktivitas di dunia maya atau dunia digital.
                        Organisasi ini terdiri dari individu atau kelompok yang memiliki
                        keahlian dan kemampuan di bidang teknologi informasi dan
                        komunikasi.
                    </p>

                    <a href="{{ route('registrasi.create') }}"
                        class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Ayo
                        Bergabung</a>

                </div>
                <di class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-13 lg:mt-9 lg-right-0">
                        <img src="img/logocyber/Cyber.png" alt="Rifki Dzakwan"
                            class="relative max-w-full mx-auto z-10" />
                        <span class="absolute -bottom-4 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#14b8a6"
                                    d="M59.5,-37.4C70.7,-15,68.9,11.9,56.8,32.7C44.7,53.5,22.4,68.2,0.9,67.7C-20.6,67.2,-41.2,51.4,-51.6,31.6C-62,11.7,-62.3,-12.2,-52,-34.1C-41.7,-56,-20.8,-75.9,1.6,-76.9C24.1,-77.8,48.3,-59.8,59.5,-37.4Z"
                                    transform="translate(100 100)scale(0.9)" />
                            </svg>
                        </span>
                    </div>
                </di>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Note uppercase -->
    <!-- About Section Start -->
    <section id="about" class="pt-36 pb-32 dark:bg-dark">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold text-primary text-lg mb-3">About</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl dark:text-white">
                        Sejarah
                    </h2>
                    <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">
                        Tujuan organisasi cyber dalam bidang jaringan adalah untuk
                        melindungi jaringan komputer dan infrastruktur IT dari serangan
                        dan ancaman cyber, memastikan ketersediaan, keandalan, dan
                        keamanan jaringan, serta meningkatkan efisiensi dan kinerja
                        jaringan. Organisasi cyber juga bertujuan untuk mengelola dan
                        memantau jaringan dengan baik, memperbaiki dan mengoptimalkan
                        infrastruktur jaringan, serta mengembangkan strategi dan rencana
                        untuk memperkuat keamanan jaringan dan mencegah serangan yang
                        dapat merusak atau mencuri data sensitif dari jaringan tersebut.
                    </p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10 dark:text-white">
                        Media Sosial
                    </h3>
                    <p class="font-medium text-base text-secondary mb-6 lg:text-lg">
                        Organisasi cyber sering menggunakan media sosial sebagai sarana
                        untuk membangun jaringan dan desain dalam kegiatan mereka. Dalam
                        hal networking, organisasi cyber dapat menggunakan media sosial
                        untuk mencari dan bergabung dengan komunitas yang memiliki minat
                        atau tujuan yang serupa. Mereka juga dapat berinteraksi dengan
                        individu atau kelompok lain yang memiliki keahlian atau sumber
                        daya yang dapat membantu mencapai tujuan mereka.
                    </p>
                    <div class="flex items-center">
                        <!-- ***ICONS*** -->
                        <!-- Youtube -->
                        <a href="https://www.youtube.com/....." target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>YouTube</title>
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://www.Instagram.com/cc_cybercreative" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                        <!-- Github -->
                        <a href="#" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>GitHub</title>
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Kegiatan Section Start -->
    <section id="portfolio" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Kegiatan</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                        Gallery
                    </h2>
                    <p class="font-medium text-md text-secondary MD:text-lg">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Distinctio fugit, eos rerum dolorum porro neque.
                    </p>
                </div>
            </div>

            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/20221011_154436.jpg" alt="port1" width="max-w-full" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">
                            Maintenance Lab Tc
                        </h3>
                        <p class="font-medium text-base text-secondary">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab est
                            consectetur perspiciatis.
                        </p>
                    </div>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/lks1.jpg" alt="port1" width="max-w-full" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">
                            LKS Kabupaten
                        </h3>
                        <p class="font-medium text-base text-secondary">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab est
                            consectetur perspiciatis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prestasi Section Start -->
    <section id="blog" class="pt-36 pb-32 bg-slate-100 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Juara</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                        Prestasi Terkini
                    </h2>
                    <p class="font-medium text-md text-secondary MD:text-lg">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Distinctio fugit, eos rerum dolorum porro neque.
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
                        <img src="img/lks/537ea9ac74da43848fde06a69926902e_292172083_3321734674773537_1451365492237028064_n.webp"
                            alt="" class="w-full" />
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#"
                                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Juara
                                    1 ITNSA Kabupaten</a>
                            </h3>
                            <p class="font-medium text-base text-secondary mb-6">
                                Rahmat Septiawan Santoso
                            </p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
                        <img src="img/lks/web.webp" alt="" class="w-full" />
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#"
                                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Juara
                                    2 Web Technology</a>
                            </h3>
                            <p class="font-medium text-base text-secondary mb-6">
                                Syahril Sobirin
                            </p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
                        <img src="img/lks/cloud.webp" alt="" class="w-full" />
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#"
                                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Juara
                                    3 Cloud Computing</a>
                            </h3>
                            <p class="font-medium text-base text-secondary mb-6">
                                Daffa Maharani
                            </p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                        Hubungi kami
                    </h2>
                    <p class="font-medium text-md text-secondary MD:text-lg">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum,
                        eos!
                    </p>
                </div>
            </div>

            <form action="{{ route('pesan.store') }}" method="post">
                @csrf
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base font-bold text-primary">Nama</label>
                        <input type="text" id="name"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            name="nama" />
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-bold text-primary">Email</label>
                        <input type="email" id="email"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            name="email" />
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="message" class="text-base font-bold text-primary">Pesan</label>
                        <textarea type="email" id="email"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"
                            name="pesan"></textarea>
                    </div>
                    <div class="w-full px-4">
                        <button
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500"
                            type="submit">
                            Kirim
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h2 class="font-bold text-4xl text-white mb-5">Cyber Creative</h2>
                    <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
                    <p>cybercreative9208@gmail.com</p>
                    <p>SMKS Insan Kreatif</p>
                    <p>cibinong, Bogor</p>
                    <p>Jawa Barat</p>
                </div>
                <div class="w-full px4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5 px-4">
                        Kategori Tulisan
                    </h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3 px-4">Programming</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3 px-4">Teknologi</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3 px-4">Software</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5 px-4">Tautan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3 px-4">Beranda</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3 px-4">Tentang Saya</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3 px-4">Portfolio</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3 px-4">Clients</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3 px-4">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3 px-4">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- ***ICONS*** -->
                    <!-- Youtube -->
                    <a href="https://www.youtube.com/@cc_cybercreative" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>YouTube</title>
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.Instagram.com/cc_cybercreative" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path
                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                        </svg>
                    </a>
                    <!-- Github -->
                    <a href="#" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>GitHub</title>
                            <path
                                d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                        </svg>
                    </a>
                </div>
                <p class="font-medium text-xs text-slate-500 text-center">
                    Dibuat dengan <span class="text-pink-500">❤</span> oleh
                    <span>
                        <a href="https://instagram.com/rifki_dzakwan" target="_blank"
                            class="font-bold text-primary">Cyber Angkatan 15</a>
                    </span>
                    , Menggunakan
                    <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS
                        <span class="text-slate-500">danPHP.</span>
                    </a>
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back To Top Start -->
    <a href="#home"
        class="fixed z-[9999] bottom-4 right-4 h-14 w-14 bg-primary rounded-full p-4 justify-center items-center hover:animate-pulse hidden"
        id="to-top">
        <span class="block w-5 h-5 border-t-2 border-l-2 rotate-45 mt-2"></span>
    </a>
    <!-- Back To Top End -->

    <!-- Tes Tailwind -->

    <!-- Tes Tailwind -->
    <script src="dist/js/script.js"></script>
</body>

</html>