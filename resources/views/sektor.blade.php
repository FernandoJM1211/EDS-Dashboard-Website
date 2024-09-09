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

<body style="background-image: url(image/body3.png)" class="bg-auto bg-no-repeat bg-fixed">
    <!--Nav bar-->
    <nav
        class="sticky top-0 z-30 flex items-center justify-between h-12 border-b-2 border-blue-500 px-10 py-8 bg-white">
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
                        class="absolute z-50 hidden space-y-2 bg-white border border-gray-300 text-gray-700">
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
    <div class="mx-auto bg-blue-400 p-4 m-4 text-white w-98 text-center font-semibold">Berisi informasi terkait sebaran
        perusahaan yang sudah terdaftar dari sistem PSE lingkup Privat. Sumber data yang digunakan berasal dari
        Kementrian Komunikasi dan Informatika. Masyarakat maupun Pemilik Perusahaan dapat melihat sebaran perusahaan
        tersebut melalui dashboard yang telah dibentuk.</div>
    <div class='tableauPlaceholder mx-auto pt-2' id='viz1698568202683' style='position: relative'><noscript><a
                href='#'><img alt='Dashboard 1 '
                    src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ED&#47;EDSMap&#47;Dashboard1&#47;1_rss.png'
                    style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='EDSMap&#47;Dashboard1' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='static_image'
                value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ED&#47;EDSMap&#47;Dashboard1&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
            <param name='filter' value='publish=yes' />
        </object></div>
    <script type='text/javascript'>
        var divElement = document.getElementById('viz1698568202683');
        var vizElement = divElement.getElementsByTagName('object')[0];
        if (divElement.offsetWidth > 800) {
            vizElement.style.width = '1000px';
            vizElement.style.height = '840px';
        } else if (divElement.offsetWidth > 500) {
            vizElement.style.width = '1000px';
            vizElement.style.height = '1000px';
        } else {
            vizElement.style.width = '100%';
            vizElement.style.height = '1000px';
        }
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>
    <!-- footer -->
    <div class="flex bg-white mt-6 w-full justify-between py-3 border-2 border-t-blue-500">
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
