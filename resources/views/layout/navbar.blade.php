<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="bg-gray-800 border-gray-200 fixed w-full z-20 top-0 left-0 border-b dark:bg-gray-900 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">


                <a href="#" class="flex items-center ">
                    <img src="{{ asset('img/logosyafaat.jpeg') }}" class=" rounded-lg h-24 w-24 " alt="Logo Syafaat" />
                    <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-800 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-gray-800 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/" class="block py-2 pl-3 pr-4 text-white bg-gray-800 md:hover:text-yellow-500 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-yellow-500 dark:bg-yellow-600 md:dark:bg-transparent" aria-current="page">Beranda</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white rounded hover:bg-yellow-800 md:hover:bg-transparent md:border-0 md:hover:text-yellow-500 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Layanan <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-yellow-200 dark:hover:bg-gray-600 dark:hover:text-white">Pendirian PT Perorangan</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-yellow-200 dark:hover:bg-gray-600 dark:hover:text-white">Pendirian CV</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-yellow-200 dark:hover:bg-gray-600 dark:hover:text-white">Layanan Izin Usaha</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-yellow-200 dark:hover:bg-gray-600 dark:hover:text-white">Layanan OSS RBA</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover-bg-yellow-200 dark:hover:bg-gray-600 dark:hover:text-white">Paket Izin UMK</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-yellow-200 dark:hover:bg-gray-600 dark:hover:text-white">Pendirian Yayasan atau Badan Usaha Lain</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-yellow-200 dark:hover:bg-gray-600 dark:hover:text-white">Layanan LKPM</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-yellow-200 dark:hover:bg-gray-600 dark:hover:text-white">Penanaman Modal Asing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-yellow-200 dark:hover:bg-gray-600 dark:hover:text-white">Pendaftaran Merek</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-yellow-200 dark:hover:bg-gray-600 dark:hover:text-white">Layanan Virtual Office</a>
                                    </li>                                    
                                </ul>
                                <!-- <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                            </div> -->
                            </div>
                        </li>
                        
                        
                            <li>
                                <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white rounded hover:bg-yellow-800 md:hover:bg-transparent md:border-0 md:hover:text-yellow-500 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Program <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar2" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-yellow-200 dark:hover:bg-gray-600 dark:hover:text-white">Pendirian PT Perorangan</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-yellow-200 dark:hover:bg-gray-600 dark:hover:text-white">Pendirian CV</a>
                                        </li>                                  
                                    </ul>
                                    <!-- <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                                </div> -->
                                </div>
                            </li>
                            
                        <li>
                            <a href="/artikel" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-800 md:hover:bg-transparent md:border-0 md:hover:text-yellow-500 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Artikel</a>
                        </li>
                        <li>
                            <a href="/tentang" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-800 md:hover:bg-transparent md:border-0 md:hover:text-yellow-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tentang </a>
                        </li>
                        <div class="flex md:order-2 ">
                            <button type="button" class="text-white bg-yellow-500 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-gray-800 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-yellow-500 dark:hover:bg-yellow-800 dark:focus:ring-gray-800 ">Masuk</button>

                        </div>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <div class="container">
        @yield('coontainer')
    </div>

</body>

</html>