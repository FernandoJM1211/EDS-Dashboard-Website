<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enterprise Dynamic System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-image: url(image/body3.png)" class="bg-cover bg-no-repeat bg-fixed">
    <!--Navbar-->
    <nav class="sticky top-0 flex items-center justify-between h-12 border-b-2 border-blue-500 px-10 py-8 bg-white">
        <div><img
                src="https://1.bp.blogspot.com/-on3HoOkuKcQ/YGnCI9WZxxI/AAAAAAAAINw/b7hIoPjdBosxD83vqfI9VfHTS0blZlrFACLcBGAsYHQ/s16000/logo-kominfo.png"
                class="h-12 w-12" alt=""></div>
        <div>
            <div class="flex justify-between gap-6">
                <a href="/" class="p-2 text-blue-600 font-semibold hover:bg-gray-300 rounded-lg">Beranda</a>
                <div class="relative group">
                    <button class="text-blue-600 font-semibold py-2 px-4 hover:bg-gray-300 rounded-lg"
                        onclick="toggleDropdown()">
                        Data <span><i class="fa-solid fa-chevron-down ml-3"></i></span>
                    </button>
                    <ul id="dropdown" class="absolute hidden space-y-2 bg-white border border-gray-300 text-gray-700">
                        <li><a href="/data" class="block px-4 py-2 hover:bg-blue-100 text-xs w-40">Data Penyelenggara
                                Sistem Elektronik</a></li>
                        <li><a href="/dash" class="block px-4 py-2 hover:bg-blue-100 text-xs">Dashboard EDS</a></li>
                    </ul>
                </div>
                <a href="" class="p-2 text-blue-600 font-semibold hover:bg-gray-300 rounded-lg">Kebijakan</a>
            </div>
        </div>
    </nav>
    <!--Container-->
    <div class="container w-4/5 mx-auto h-full">
        <div class="flex flex-col items-center bg-blue-400 rounded-lg mt-4 h-40">
            <div class="text-2xl py-5 text-white font-semibold">Enterprise Dynamic System</div>
            <div class="text-white w-1/2 text-center font-semibold">Dapatkan infromasi lengkap terkait Enterprise
                Dynamic System dan Data Informasi Penyelenggara Sistem Elektronik</div>
        </div>
        <div class="flex justify-between items-center pt-14">
            <div class="flex flex-col w-1/2">
                <div>
                    <p class="text-3xl">Apa itu <span class="text-blue-500">Enterprise Dynamic System</span> (EDS)?</p>
                    <p class="py-4 text-md">Enterprise Dynamic System merupakan konsep sistem yang mampu mengenali dan
                        mengidentifikasi data dari berbagai sumber internal dan eksternal terkait PSE lingkup privat
                        yang telah terdaftar di Kominfo dan mengolah data tersebut untuk menghasilkan informasi yang
                        bernilai lebih untuk berbagai tujuan.</p>
                </div>
            </div>
            <div class="w-1/3">
                <img src="{{ URL('image/flat.png') }}" alt="" class="">
            </div>
        </div>
        <p class="font-bold text-xl pt-4">Topik Data</p>
        <div class="grid grid-cols-4 pt-8 gap-10">
            <a href="/tanggal"
                class="text-center text-md text-blue-500 font-semibold bg-white border-2 rounded-md border-blue-500 py-5 shadow-lg shadow-gray-300 hover:border-none hover:bg-blue-500 hover:text-white">
                <div class="flex flex-col items-start ml-4">
                    <p class="ml-2 text-xl"><i class="fa-solid fa-calendar-days"></i></p>
                    <p class="pt-2">Data Tanggal Publish PSE</p>
                </div>
            </a>
            <a href="/status"
                class="text-center text-md text-blue-500 font-semibold bg-white border-2 rounded-md border-blue-500 py-5 shadow-lg shadow-gray-300 hover:border-none hover:bg-blue-500 hover:text-white">
                <div class="flex flex-col items-start ml-4">
                    <p class="ml-2 text-xl"><i class="fa-solid fa-circle-info"></i></p>
                    <p class="pt-2">Data Status Perusahaan</p>
                </div>
            </a>
            <a href="/sektor"
                class="text-center text-md text-blue-500 font-semibold bg-white border-2 rounded-md border-blue-500 py-5 shadow-lg shadow-gray-300 hover:border-none hover:bg-blue-500 hover:text-white">
                <div class="flex flex-col items-start ml-4">
                    <p class="ml-2 text-xl"><i class="fa-solid fa-chart-area"></i></p>
                    <p class="pt-2">Data Sebaran Perusahaan</p>
                </div>
            </a>
            <a href="/pivot"
                class="text-center text-md text-blue-500 font-semibold bg-white border-2 rounded-md border-blue-500 py-5 shadow-lg shadow-gray-300 hover:border-none hover:bg-blue-500 hover:text-white">
                <div class="flex flex-col items-start">
                    <p class="mx-auto text-xl"><i class="fa-solid fa-chart-simple"></i></p>
                    <p class="pt-2 mx-auto">Grafik Pivot</p>
                </div>
            </a>
        </div>
    </div>
    <!-- footer -->
    <div class="flex  2xl:fixed bottom-0 bg-white w-full justify-between footer mt-10 py-3 border-2 border-t-blue-500">
        <div class="ml-3 text-blue-500 font-semibold text-sm">
            <p>Hak cipta © 2023 Kementerian Komunikasi dan Informatika Republik Indonesia</p>
        </div>
        <div class="mr-3 text-blue-500 font-semibold flex justify-between gap-4 items-center">
            <i class="fa-solid fa-globe"></i>
            <select
                class="block w-full rounded-md border-0 text-gray-900 shadow-lg ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                <option disabled selected hidden>Indonesia</option>
                <option>Indonesia</option>
            </select>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
</body>
<script>
    function toggleDropdown() {
        var dropdown = document.getElementById('dropdown');
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
        } else {
            dropdown.classList.add('hidden');
        }
    }
</script>
</html>
