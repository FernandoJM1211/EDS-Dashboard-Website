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

<body>

    <body style="background-image: url('/image/body3.png')" class="bg-cover bg-no-repeat bg-fixed">
        <!--- navbar --->
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
                        <ul id="dropdown"
                            class="absolute hidden space-y-2 bg-white border border-gray-300 text-gray-700">
                            <li><a href="/data" class="block px-4 py-2 hover:bg-blue-100 text-xs w-40">Data
                                    Penyelenggara
                                    Sistem Elektronik</a></li>
                            <li><a href="/dash" class="block px-4 py-2 hover:bg-blue-100 text-xs">Dashboard EDS</a>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="p-2 text-blue-600 font-semibold hover:bg-gray-300 rounded-lg">Kebijakan</a>
                </div>
            </div>
        </nav>
        <!--- container/cards --->
        <div class="container w-4/5 mx-auto h-full">
            <div class="grid grid-cols-4 gap-8 pt-10">
                <div
                    class="card bg-white border-l-8 rounded-lg border-l-blue-500 py-5 w-auto shadow-lg shadow-gray-300">
                    <div class="flex flex-col">
                        <div class="flex justify-between">
                            <p class="ml-4 self-center text-md font-semibold text-gray-500">Data Pemohon</p>
                            <i class="text-blue-500 mt-1 mr-8 fa-solid fa-user text-2xl"></i>
                        </div>
                        <p class="pt-2 text-md font-bold ml-4 self-start">{{ $dataPemohon }}</p>
                    </div>
                </div>
                <div
                    class="card bg-white border-l-8 rounded-lg border-l-blue-500 py-5 w-auto shadow-lg shadow-gray-300">
                    <div class="flex flex-col">
                        <div class="flex justify-between">
                            <p class="ml-4 self-center text-md font-semibold text-gray-500">Data Perusahaan</p>
                            <i class="text-blue-500  mt-1 mr-8 fa-solid fa-building text-2xl"></i>
                        </div>
                        <p class="pt-2 text-md font-bold ml-4 self-start">{{ $dataPerusahaan }}</p>
                    </div>
                </div>
                <div
                    class="card bg-white border-l-8 rounded-lg border-l-blue-500 py-5 w-auto shadow-lg shadow-gray-300">
                    <div class="flex flex-col">
                        <div class="flex justify-between">
                            <p class="ml-4 self-center text-md font-semibold text-gray-500">Data NIB</p>
                            <i class="text-blue-500  mt-1 mr-8 fa-solid fa-file-pen text-2xl"></i>
                        </div>
                        <p class="pt-2 text-md font-bold ml-4 self-start">{{ $dataNib }}</p>
                    </div>
                </div>
                <div
                    class="card bg-white border-l-8 rounded-lg border-l-blue-500 py-5 w-auto shadow-lg shadow-gray-300">
                    <div class="flex flex-col">
                        <div class="flex justify-between">
                            <p class="ml-4 self-center text-md font-semibold text-gray-500">Data Provinsi</p>
                            <i class="text-blue-500  mt-1 mr-8 fa-solid fa-earth-asia text-2xl"></i>
                        </div>
                        <p class="pt-2 text-md font-bold ml-4 self-start">{{ $dataProvinsi }}</p>
                    </div>
                </div>
                <div
                    class="card col-start-2 bg-white border-l-8 rounded-lg border-l-blue-500 py-5 w-auto shadow-lg shadow-gray-300">
                    <div class="flex flex-col">
                        <div class="flex justify-between">
                            <p class="ml-4 self-center text-md font-semibold text-gray-500">Data Sektor Perusahaan</p>
                            <i class="text-blue-500  mt-1 mr-8 fa-solid fa-city text-2xl"></i>
                        </div>
                        <p class="pt-2 text-md font-bold ml-4 self-start">{{ $dataSektor }}</p>
                    </div>
                </div>
                <div
                    class="card col-start-3 bg-white border-l-8 rounded-lg border-l-blue-500 py-5 w-auto shadow-lg shadow-gray-300">
                    <div class="flex flex-col">
                        <div class="flex justify-between">
                            <p class="ml-4 self-center text-md font-semibold text-gray-500">Data Penanggung Jawab</p>
                            <i class="text-blue-500  mt-1 mr-8 fa-solid fa-address-card text-2xl"></i>
                        </div>
                        <p class="pt-2 text-md font-bold ml-4 self-start">{{ $dataSektor }}</p>
                    </div>
                </div>
            </div>
            <!-- filter -->
            <div class="">
                <form action="/data" method="post" class="grid grid-cols-4 gap-10 pt-10">
                    @csrf
                    <select class="p-2 rounded-md  shadow-lg" name="tanggal_publish" onchange="this.form.submit()">
                        <option value="">Pilih Tanggal Publish</option>
                        @foreach ($allDatas->unique('tanggal_publish') as $data)
                            @if ($data->tanggal_publish)
                                <option value="{{ $data->tanggal_publish }}"
                                    {{ session('selected_tanggal_publish') == $data->tanggal_publish ? 'selected' : '' }}>
                                    {{ $data->tanggal_publish }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                    <select class="p-2 rounded-md  shadow-lg" name="nama_perusahaan" onchange="this.form.submit()">
                        <option value=""> Pilih Nama Perusahaan</option>
                        @foreach ($allDatas->unique('nama_perusahaan') as $data)
                            @if ($data->nama_perusahaan)
                                <option value="{{ $data->nama_perusahaan }}"
                                    {{ session('selected_nama_perusahaan') == $data->nama_perusahaan ? 'selected' : '' }}>
                                    {{ $data->nama_perusahaan }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                    <select class="p-2 rounded-md  shadow-lg" name="nomor_permohonan" onchange="this.form.submit()">
                        <option value="">Pilih Nomor Permohonan</option>
                        @foreach ($allDatas->unique('nomor_permohonan') as $data)
                            @if ($data->nomor_permohonan)
                                <option value="{{ $data->nomor_permohonan }}"
                                    {{ session('selected_nomor_permohonan') == $data->nomor_permohonan ? 'selected' : '' }}>
                                    {{ $data->nomor_permohonan }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                    <select class="p-2 rounded-md  shadow-lg" name="provinsi" onchange="this.form.submit()">
                        <option value="">Pilih Provinsi</option>
                        @foreach ($allDatas->unique('provinsi') as $data)
                            @if ($data->provinsi)
                                <option value="{{ $data->provinsi }}"
                                    {{ session('selected_provinsi') == $data->provinsi ? 'selected' : '' }}>
                                    {{ $data->provinsi }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </form>
            </div>
            <form method="POST" action="{{ route('reset.session') }}" class="pt-4 flex justify-end">
                @csrf
                <button
                    class="bg-blue-500 py-2 px-8 rounded-lg text-white hover:bg-white hover:border-2 hover:border-blue-500 border-white border-2 hover:text-blue-500 font-semibold"
                    type="submit">Reset</button>
            </form>
            <div class="grid grid-cols-1 pt-6">
                <div>
                    <div class="flex justify-center bg-blue-500 rounded-md">
                        <p class="text-white py-2 font-semibold">GAMBARAN UMUM DATA</p>
                    </div>

                    <div class="table-nav w-full mt-4">
                        <div class="grid grid-cols-11 bg-blue-300 p-2 gap-3 rounded-t-md">
                            <div class="grid grid-rows-1 pt-1">
                                <p class="text-center text-sm">TANGGAL PUBLISH</p>
                            </div>
                            <div class="grid grid-rows-1 pt-1">
                                <p class="text-center text-sm">NOMOR PEMOHON</p>
                            </div>
                            <div class="grid grid-rows-1 pt-1">
                                <p class="text-center text-sm">TDPSE</p>
                            </div>
                            <div class="grid grid-rows-1 pt-1">
                                <p class="text-center text-sm">NAMA PERUSAHAAN</p>
                            </div>
                            <div class="grid grid-rows-1 pt-1">
                                <p class="text-center text-sm">JENIS BADAN HUKUM</p>
                            </div>
                            <div class="grid grid-rows-1 pt-1">
                                <p class="text-center text-sm">ALAMAT PERUSAHAAN</p>
                            </div>
                            <div class="grid grid-rows-1 pt-1">
                                <p class="text-center text-sm">NAMA BADAN HUKUM</p>
                            </div>
                            <div class="grid grid-rows-1 pt-1">
                                <p class="text-center text-sm">SEKTOR</p>
                            </div>
                            <div class="grid grid-rows-1 pt-1">
                                <p class="text-center text-sm">WEBSITE</p>
                            </div>
                            <div class="grid grid-rows-1 pt-1">
                                <p class="text-center text-sm">SISTEM ELEKTRONIK</p>
                            </div>
                            <div class="grid grid-rows-1 pt-1">
                                <p class="text-center text-sm">PROVINSI</p>
                            </div>
                        </div>
                        @foreach ($datas as $data)
                            <div class="grid grid-cols-11 gap-3 border-t-4 bg-white pb-2 px-2 border-x-2 border-b-2">
                                <div class="grid grid-rows-1 pt-1">
                                    <p class="text-center text-xs">{{ $data->tanggal_publish }}</p>
                                </div>
                                <div class="grid grid-rows-1 pt-1">
                                    <p class="text-center text-xs break-all">
                                        {{ $data->nomor_permohonan }}</p>
                                </div>
                                <div class="grid grid-rows-1 pt-1 hover:overflow-auto overflow-hidden">
                                    <p class="text-center text-xs break-all">{{ $data->tdpse }}</p>
                                </div>
                                <div class="grid grid-rows-1 pt-1">
                                    <p class="text-center text-xs break-all">{{ $data->nama_perusahaan }}</p>
                                </div>
                                <div class="grid grid-rows-1 pt-1">
                                    <p class="text-center text-xs break-all">{{ $data->jenis_badan_hukum }}</p>
                                </div>
                                <div class="grid grid-rows-1 pt-1">
                                    <p class="text-center text-xs break-all">{{ $data->alamat }}</p>
                                </div>
                                <div class="grid grid-rows-1 pt-1">
                                    <p class="text-center text-xs break-all">{{ $data->nama_badan_hukum }}</p>
                                </div>
                                <div class="grid grid-rows-1 pt-1">
                                    <p class="text-center text-xs break-all">{{ $data->sektor }}</p>
                                </div>
                                <div class="grid grid-rows-1 pt-1">
                                    <p class="text-center text-xs break-all">
                                        {{ $data->website }}</p>
                                </div>
                                <div class="grid grid-rows-1 pt-1">
                                    <p class="text-center text-xs break-all">{{ $data->sistem_elektronik }}</p>
                                </div>
                                <div class="grid grid-rows-1 pt-1">
                                    <p class="text-center text-xs break-all">{{ $data->provinsi }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex justify-between pt-4 2xl:mb-12">
                        <a class="px-4 py-2 bg-white rounded-lg  border-blue-500 border-2"
                            href="{{ route('data.filterPrevious', [
                                'tanggal_publish' => session('selected_tanggal_publish'),
                                'nama_perusahaan' => session('selected_nama_perusahaan'),
                                'nomor_permohonan' => session('selected_nomor_permohonan'),
                                'provinsi' => session('selected_provinsi'),
                                'page' => $datas->currentPage() - 1,
                            ]) }}">Previous</a>
                        <a class="px-8 py-2 bg-white rounded-lg  border-blue-500 border-2"
                            href="{{ route('data.filterNext', [
                                'tanggal_publish' => session('selected_tanggal_publish'),
                                'nama_perusahaan' => session('selected_nama_perusahaan'),
                                'nomor_permohonan' => session('selected_nomor_permohonan'),
                                'provinsi' => session('selected_provinsi'),
                                'page' => $datas->currentPage() + 1,
                            ]) }}">Next</a>
                    </div>
                </div>
            </div>
        </div>
        <!--- footer --->
        <div
            class="flex 2xl:fixed bottom-0 bg-white w-full justify-between footer mt-8 py-3 border-2 border-t-blue-500">
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
        </div>
        <script>
            window.addEventListener('beforeunload', function() {
                localStorage.setItem('scrollPosition', JSON.stringify({
                    x: window.scrollX,
                    y: window.scrollY
                }));
            });
    
            window.addEventListener('load', function() {
                var scrollPosition = localStorage.getItem('scrollPosition');
                if (scrollPosition) {
                    scrollPosition = JSON.parse(scrollPosition);
                    window.scrollTo(scrollPosition.x, scrollPosition.y);
                }
            });

            function toggleDropdown() {
            var dropdown = document.getElementById('dropdown');
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
            } else {
                dropdown.classList.add('hidden');
            }
        }
        </script>
    </body>
</html>
