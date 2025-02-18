@extends('frontend.layouts.app', [
    'title'=>'Unram Scholar',
    'bgWhite'=>'bg-[#E9F1FB]',
    ])
@section('content')
<!-- Centered Search Section -->
<section class="container mx-auto bg-white rounded-xl py-8 px-4 mt-10">
    <div class="flex items-center justify-center">
        <div
            class="items-start max-w-5xl w-full flex flex-col gap-1 p-4">
            <h1 class="font-medium text-2xl">Pengelolaan Limbah Kimia Di
                Laboratorium Kimia Pmipa Fkip Unram</h1>
            <div class="flex gap-2 mt-4">
                <div
                    class="py-2 px-4 rounded-full bg-[#1976D2] text-white flex gap-1 cursor-pointer hover:bg-[#3783CE]">
                    <div>HTML</div>
                    <div><svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 4H4V18C4 18.5304 4.21071 19.0391 4.58579 19.4142C4.96086 19.7893 5.46957 20 6 20H18C18.5304 20 19.0391 19.7893 19.4142 19.4142C19.7893 19.0391 20 18.5304 20 18V13M9 15L20 4M20 4H15M20 4V9"
                                stroke="white" stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg></div>
                </div>
                <div
                    class="py-2 px-4 rounded-full bg-[#1976D2] text-white cursor-pointer hover:bg-[#3783CE]">PDF</div>
            </div>
            <div class="w-full bg-gray-300 h-[0.5px] mt-8"></div>

            <div class="relative overflow-x-auto">
                <table
                    class="w-full text-left">
                    <tbody>
                        <tr
                            class="bg-white border-gray-200">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Year
                            </th>
                            <td class="py-2">
                                2019
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-gray-200">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Type
                            </th>
                            <td class="py-2">
                                Article
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap align-top">
                                Abstract
                            </th>
                            <td class="py-2">
                                <div class="w-full" x-data="{ expanded: false }">
                                    <p class="text-gray-900">
                                        <span :class="expanded ? 'line-clamp-none' : 'line-clamp-2 overflow-hidden'">
                                            Abstrak: Limbah bahan kimia baik sisa praktikum maupun bahan kedaluarsa di Laboratorium Kimia PMIPA FKIP Universitas Mataram perlu dikaji secara mendalam, sehingga dapat ditemukan solusi bagaimana cara pengelolaan yang tepat. Untuk menemukan formula pengelolaan yang tepat diperlukan pengkajian tentang: identifikasi penyebab timbulnya limbah bahan kimia, perhitungan jumlah limbah, mekanisme pengolahan dan pembuangan ke lingkungan. Kuantitas limbah bahan kimia dan teknik pengelolaannya menjadi indikator seberapa baik tata kelola limbah. Tujuannya adalah untuk menemukan solusi dalam pengelolaan limbah bahan kimia, sehingga dapat dijadikan dasar/pedoman dalam upaya minimalisasi potensi limbah baik pada penanganan di gudang maupun pengurangan kuantitas limbah yang dihasilkan dari kegiatan praktikum di laboratorium PMIPA FKIP Universitas Mataram. Teknik dokumentasi yang digunakan dalam pengelolaan dapat diperoleh beberapa hal, yaitu: (1) limbah bahan kimia berasal dari sisa pembuatan larutan, sisa praktikum, hasil pencucian alat, dan bahan kedaluarsa. (2). Penurunan jumlah bahan kimia yang disimpanÃÂ diÃÂ gudangÃÂ sebesarÃÂ 18,5 %ÃÂ dariÃÂ totalÃÂ persediaan,ÃÂ sedangkan jumlah bahan penyebab limbah B3 berkurang 29%. (3) Diperlukan teknik pengolahan limbah bahan kimia tersebut sebelum dibuang ke lingkungan. (4) Rekomendasi usulan ÃÂ amandemen S.O.P Perencanaan, Penerimaan Bahan, Audit Gudang sehingga pencegahan pencemaran bahan kimia.ÃÂ Kata kunci : Bahan kimia, ÃÂ Pengelolaan limbah, MSDS, Incompatibility, StandardÃÂ ÃÂ OperatingÃÂ ÃÂ Procedure (S.O.P)Abstract: Hazardous chemicals and materials practicum good rest expiry Chemistry Laboratory, University of Mataram PMIPA FKIP needs to be studied in depth, so as to find solutions on how to appropriate management. To find the right formula management studies are necessary regarding: the identification of the causes of chemical wastes, the calculation of the amount of waste, treatment and disposal mechanisms to the environment. The quantity of chemicals and waste management techniques to be an indicator of how well the governance of waste. The goal is to find a solution in the management of chemical waste, so it can be used as the basis / guidelines in an effort to minimize the potential for waste both in handling in the warehouse as well as a reduction in the quantity of waste generated from laboratory experiments PMIPA FKIP University of Mataram. Techniques used in the management of documentation may be obtained several ways, namely: (1) chemical wastes coming from the rest of the preparation of the solution, the rest of the lab, the results of the washing apparatus, and outdated materials. (2). Decrease the amount of chemicals stored in the warehouses of 18.5% of the total inventory, while the amount of material cause of the B3 waste is reduced by 29%. (3) Required waste processing techniques such chemicals before being discharged into the environment. (4) Recommendations proposed amendments S.O.P Planning, Reception Materials, Audit Vault so that the prevention of chemical contamination.ÃÂ Keywords: Chemicals, Waste management, MSDS, Incompatibility, Standard Operating Procedure (S.O.P)
                                        </span>
                                    </p>
                                
                                    <!-- Button -->
                                    <button @click="expanded = !expanded" class="text-blue-600 font-bold mt-2 hover:underline cursor-pointer focus:outline-none">
                                        <span x-text="expanded ? '(less)' : 'more'"></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Source
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                FMIPA Unram
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Authors
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                Budi Setiawan
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Institution
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                Universitas Mataram
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-full bg-gray-300 h-[0.5px]"></div>
            <div class="relative overflow-x-auto">
                <table
                    class="w-full text-left text-gray-500">
                    <tbody>
                        <tr
                            class="bg-white border-gray-200">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Cites
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                1
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-gray-200">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Cited by
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                6
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Related to
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                10
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                FWCI
                            </th>
                            <td class="py-2">
                                1.2
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Citation percentile <br> (by year/subfield):
                            </th>
                            <td class="py-2 align-bottom">
                                9.10
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-full bg-gray-300 h-[0.5px]"></div>
            <div class="relative overflow-x-auto">
                <table
                    class="w-full text-left text-gray-500">
                    <tbody>
                        <tr
                            class="bg-white border-gray-200">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Topic
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                Chemical Safety and Risk Management
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-gray-200">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Subfield
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                Chemical Health and Safety
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Field
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                Chemical Engineering
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Domain
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                Physical Sciences
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-full bg-gray-300 h-[0.5px]"></div>
            <div class="relative overflow-x-auto">
                <table
                    class="w-full text-left text-gray-500">
                    <tbody>
                        <tr
                            class="bg-white border-gray-200">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Open Access Status
                            </th>
                            <td class="py-2">
                                Gold
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-gray-200">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                APC paid (est)
                            </th>
                            <td class="py-2">
                                $26
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-full bg-gray-300 h-[0.5px]"></div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
    @include('frontend.includes.scripts.script')
@endpush