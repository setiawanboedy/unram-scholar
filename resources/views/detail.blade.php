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
            <h1 class="font-medium text-2xl">{{$item['title']}}</h1>
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
                                {{$item['publication_year']}}
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-gray-200">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Type
                            </th>
                            <td class="py-2">
                                {{$item['type']}}
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
                                            {{$abstract}}
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
                                <a href="{{ $item['primary_location']['source']['id'] ?? '#' }}">
                                    {{ $item['primary_location']['source']['display_name'] ?? '-' }}
                                </a>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap align-top">
                                Authors
                            </th>
                            <td class="py-2 text-blue-500">
                                    {{ implode(', ', array_column($authors, 'name')) }}
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap align-top">
                                Institution
                            </th>
                            <td class="py-2 text-blue-500">
                                {{ implode(', ', array_column($institutions, 'name')) }}
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
                                {{$item['referenced_works_count']}}
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-gray-200">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Cited by
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                {{$item['cited_by_count']}}
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Related to
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                {{$related_to}}
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                FWCI
                            </th>
                            <td class="py-2">
                                {{$item['fwci']}}
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Citation percentile <br> (by year/subfield):
                            </th>
                            <td class="py-2 align-bottom">
                                {{$cited_percentile}}
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
                                {{$item['primary_topic']['display_name']}}
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-gray-200">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Subfield
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                {{$item['primary_topic']['subfield']['display_name']}}
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Field
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                {{$item['primary_topic']['field']['display_name']}}
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                Domain
                            </th>
                            <td class="py-2 hover:underline cursor-pointer text-blue-500">
                                {{$item['primary_topic']['domain']['display_name']}}
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
                                {{$item['open_access']['oa_status']}}
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-gray-200">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                APC paid (est)
                            </th>
                            <td class="py-2">
                                {{$thausand_dolar}}
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