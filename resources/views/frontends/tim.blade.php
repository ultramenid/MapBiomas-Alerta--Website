@extends('layouts.indexLayout')



@section('content')
    @include('partials.navMobile')

    <div class="bg-white sticky top-0 z-50">
        @include('partials.navPC')
    </div>

    <div class="max-w-6xl mx-auto px-4">
        <div class="w-full justify-center items-center">
            <h1 class="font-semibold mt-12 sm:text-3xl text-2xl text-center text-alerta">Validator</h1>
        </div>

        <div class="flex sm:flex-row flex-col gap-9 flex-wrap mt-6 ">
            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Achmad Rafly Gymnastiar copy.jpeg') }}" alt="Mapbiomas Alerta - Achmad Rafly Gymnastiar" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Achmad Rafly Gymnastiar</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>


            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Adit Muhamad Nur Alam.JPG') }}" alt="Mapbiomas Alerta - Adit Muhamad Nur Alam" class=" rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm text-center">Adit Muhamad Nur Alam</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Aditya Prima Yudha copy.jpg') }}" alt="Mapbiomas Alerta - Aditya Prima Yudha" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Aditya Prima Yudha</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>


            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Adzra Aqila Muthia.jpg') }}" alt="Mapbiomas Alerta - Adzra Aqila Muthia" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Adzra Aqila Muthia</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Alwi Satriya Sukma_.jpg') }}" alt="Mapbiomas Alerta - Alwi Satriya Sukma" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Alwi Satriya Sukma</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Annisa Meira Nurfauziah.jpg') }}" alt="Mapbiomas Alerta - Annisa Meira Nurfauziah" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Annisa Meira Nurfauziah</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>


            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Arhan Trirahido.jpg') }}" alt="Mapbiomas Alerta - Arhan Trirahido" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Arhan Trirahido</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Azka Razendra Zahran.jpg') }}" alt="Mapbiomas Alerta - Azka Razendra Zahran" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Azka Razendra Zahran</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Bella Febrianti.jpg') }}" alt="Mapbiomas Alerta - Bella Febrianti" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Bella Febrianti</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Brilian Adhie Pahlevi.jpeg') }}" alt="Mapbiomas Alerta - Brilian Adhie Pahlevi" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Brilian Adhie Pahlevi</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Chairul Soleh.jpg') }}" alt="Mapbiomas Alerta - Chairul Soleh" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Chairul Soleh</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Dedi Septyadi Wibisono.jpg') }}" alt="Mapbiomas Alerta - Dedi Septyadi Wibisono" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Dedi Septyadi Wibisono</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Eryani Cahya Pratiwi.jpg') }}" alt="Mapbiomas Alerta - Eryani Cahya Pratiwi" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Eryani Cahya Pratiwi</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>


            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Fadela Yunika Sari.jpg') }}" alt="Mapbiomas Alerta - Fadela Yunika Sari" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Fadela Yunika Sari</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Febrina Adi Lestari.jpg') }}" alt="Mapbiomas Alerta - Febrina Adi Lestari" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Febrina Adi Lestari</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Feka Rahmad Hidayah.jpeg') }}" alt="Mapbiomas Alerta - Feka Rahmad Hidayah" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Feka Rahmad Hidayah</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Genthamaury Diefda.jpg') }}" alt="Mapbiomas Alerta - Genthamaury Diefda" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Genthamaury Diefda</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Jonatan.jpeg') }}" alt="Mapbiomas Alerta - Jonatan Simalango" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Jonatan Simalango</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Jundy Zaky Makarim.jpeg') }}" alt="Mapbiomas Alerta - Jundy Zaky Makarim" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Jundy Zaky Makarim</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Khansa Mutia Hanauli.jpg') }}" alt="Mapbiomas Alerta - Khansa Mutia Hanauli" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Khansa Mutia Hanauli</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Kharisma Lintang Hapsari.jpg') }}" alt="Mapbiomas Alerta - Kharisma Lintang Hapsari" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Kharisma Lintang Hapsari</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/M. Irfandi Andriansyah.jpg') }}" alt="Mapbiomas Alerta - M. Irfandi Andriansyah" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">M. Irfandi Andriansyah</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>


            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Muhammad Nabil Astaqafi.jpg') }}" alt="Mapbiomas Alerta - M. Nabil Astaqafi" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">M. Nabil Astaqafi</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Muhamad Afin Muntazzudien.jpg') }}" alt="Mapbiomas Alerta - M. Afin Muntazzudien" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">M. Afin Muntazzudien</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>


            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Muhammad Hawdhi Maulana.jpg') }}" alt="Mapbiomas Alerta - M. Hawdhi Maulana" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">M. Hawdhi Maulana</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Muhammad Irfan Nurrahman.jpeg') }}" alt="Mapbiomas Alerta - M. Irfan Nurrahman" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">M. Irfan Nurrahman</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Naufal Ade Kurniawan.jpg') }}" alt="Mapbiomas Alerta - Naufal Ade Kurniawan" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Naufal Ade Kurniawan</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Nebo Yok Jonah Marpaung.jpg') }}" alt="Mapbiomas Alerta - Nebo Yok Jonah Marpaung" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Nebo Yok Jonah Marpaung</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

             <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Oktavian Rizky Risnanda.jpg') }}" alt="Mapbiomas Alerta - Oktavian Rizky Risnanda" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Oktavian Rizky Risnanda</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Reza Fahlevi.JPG') }}" alt="Mapbiomas Alerta - Reza Fahlevi" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Reza Fahlevi</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

             <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Rianti Gina Violeta.jpg') }}" alt="Mapbiomas Alerta - Rianti Gina Violeta" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Rianti Gina Violeta</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Ruwaida Dzakiyyaa.jpeg') }}" alt="Mapbiomas Alerta - Ruwaida Dzakiyyaa" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Ruwaida Dzakiyyaa</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

             <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Sayudi.png') }}" alt="Mapbiomas Alerta - Sayudi" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Sayudi</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Shadrina Apsari Djoened Poesponegoro.jpg') }}" alt="Mapbiomas Alerta - Shadrina Apsari Djoened P." class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Shadrina Apsari Djoened P.</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Siti Labora.jpg') }}" alt="Mapbiomas Alerta - Siti Labora Siburian" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Siti Labora Siburian</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>


            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Tri Wahyuni.jpg') }}" alt="Mapbiomas Alerta - Tri Wahyuni" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Tri Wahyuni</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Wildan Muhammad Hamizan.jpg') }}" alt="Mapbiomas Alerta - Wildan Muhammad Hamizan" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-[13px]">Wildan Muhammad Hamizan</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Valentina Yulia Permatasari.jpg') }}" alt="Mapbiomas Alerta - Valentina Yulia Permatasari" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Valentina Yulia Permatasari</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Yanuar Vira Febiyanti.jpg') }}" alt="Mapbiomas Alerta - Yanuar Vira Febiyanti" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Yanuar Vira Febiyanti</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>

            <div class="py-2 px-2 bg-gray-100 border-b border-alerta rounded text-center">
                <img src="{{ asset('assets/validators/Zerin Darma Kusuma.jpg') }}" alt="Mapbiomas Alerta - Zerin Darma Kusuma" class="rounded sm:h-48 h-60 sm:w-44 w-full object-cover object-center">
                <a class="text-sm">Zerin Darma Kusuma</a>
                <div class="flex gap-2 py-3 justify-center">
                    <a x-data x-tooltip.raw="Alerta - Collection 1" class="h-3 w-3 rounded-full bg-alerta cursor-pointer"></a>
                </div>
            </div>


        </div>



    </div>
@endsection
