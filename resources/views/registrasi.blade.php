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
    <section id="contact" class="pt-36 pb-32 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                        Form Pendaftaran
                    </h2>
                    <p class="font-medium text-md text-secondary MD:text-lg">
                        Silahkan isi data diri anda di bawah ini dengan benar!
                    </p>
                </div>
            </div>

            <form action="{{ route('registrasi.store') }}" method="post">
                @csrf
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base font-bold text-primary">Nama</label>
                        <input type="text" id="name"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            name="nama" />
                    </div>

                    <div class="w-full px-4 mb-8">
                        <label for="kelas" class="text-base font-bold text-primary">Kelas</label>
                        <input type="text" id="kelas"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            name="kelas" />
                    </div>

                    <div class="w-full px-4 mb-8">
                        <label for="jurusan" class="text-base font-bold text-primary">Jurusan</label>
                        <input type="text" id="jurusan"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            name="jurusan" />
                    </div>

                    <div class="w-full px-4 mb-8">
                        <label for="notelp" class="text-base font-bold text-primary">No. WhatsApp</label>
                        <input type="text" id="notelp"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            name="notelp" />
                    </div>

                    <div class="w-full px-4 mb-8">
                        <label for="message" class="text-base font-bold text-primary">Alasan Masuk Cyber?</label>
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

    <!-- Tes Tailwind -->
    <script src="dist/js/script.js"></script>
</body>

</html>