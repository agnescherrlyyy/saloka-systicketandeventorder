@extends('Layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-xl mb-2">Reports</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-400">Sales Reports</h4>
        </div>
    </div>
    <!-- Heading End -->

    <!-- Content Start -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-10">
        <div class="w-full flex items-center gap-2 mb-6">
            <button class="px-4 py-2 rounded-full text-primer-60  hover:text-primer-60 font-semibold text-xs hover:bg-primer-20 w-fit flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M2.25 5.25a3 3 0 013-3h13.5a3 3 0 013 3V15a3 3 0 01-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 01-.53 1.28h-9a.75.75 0 01-.53-1.28l.621-.622a2.25 2.25 0 00.659-1.59V18h-3a3 3 0 01-3-3V5.25zm1.5 0v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5z" clip-rule="evenodd" />
                </svg>
                LOKAPOS Desktop
            </button>
            <span class="font-semibold text-sm">/</span>
            <button class="px-4 py-2 rounded-full  hover:text-primer-60 font-semibold text-xs hover:bg-primer-20 w-fit flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path d="M10.5 18.75a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" />
                    <path fill-rule="evenodd" d="M8.625.75A3.375 3.375 0 005.25 4.125v15.75a3.375 3.375 0 003.375 3.375h6.75a3.375 3.375 0 003.375-3.375V4.125A3.375 3.375 0 0015.375.75h-6.75zM7.5 4.125C7.5 3.504 8.004 3 8.625 3H9.75v.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V3h1.125c.621 0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125h-6.75A1.125 1.125 0 017.5 19.875V4.125z" clip-rule="evenodd" />
                </svg>
                LOKAPOS Mobile
            </button>
        </div>
        <div class="w-full my-6 p-6 bg-white dark:bg-slate-700 rounded-lg">
            <div class="w-full flex flex-col gap-2">
                <span class="font-semibold text-sm">Store</span>
                <div class="w-full lg:w-1/2">
                    <div class="w-full relative select-box">
                        <div class="show-menu w-full flex items-center justify-between border border-sekunder-40 px-4 py-3 rounded-lg cursor-pointer bg-white dark:bg-slate-700">
                            <input class="text-box focus:outline-none active:outline-none text-sm placeholder:text-slate-950 dark:placeholder:text-slate-50 bg-transparent font-medium" type="text" name="" placeholder="Store" id="so-value" readonly>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 font-semibold transition-transform duration-150 ease-in-out">
                                <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                            </svg>                                  
                        </div>
                        <ul class="menu-list w-full h-96 overflow-y-auto mt-4 py-3 opacity-0 pointer-events-none bg-white dark:bg-slate-600 shadow-md rounded-lg transition-all duration-200 ease-linear absolute top-full right-0 z-50">
                            <li class="px-4" ><input class="w-full item-input" type="text" name="" id="option-search" placeholder="Search"></li>
                            <li><a href="#" id="item-list" class="block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm  cursor-pointer">IT</a></li>
                            <li><a href="#" id="item-list" class="block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm  cursor-pointer">Rimba</a></li>
                            <li><a href="#" id="item-list" class="block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm  cursor-pointer">Shop 86</a></li>
                            <li><a href="#" id="item-list" class="block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm  cursor-pointer">Foodtruck Ararya</a></li>
                            <li><a href="#" id="item-list" class="block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm  cursor-pointer">Kedai Adu Tangkas</a></li>
                            <li><a href="#" id="item-list" class="block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm  cursor-pointer">Jenju Cafe</a></li>
                            <li><a href="#" id="item-list" class="block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm  cursor-pointer">Shop 04</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col xl:flex-row xl:items-center gap-4 mt-6">
                <div class="w-full flex flex-col gap-2">
                    <label for="" class="block font-semibold text-sm">Start</label>
                    <div class="w-full">
                        <input type="date" name="" id="" value="" placeholder="placeholder" class="item-input" required>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="" class="block font-semibold text-sm">End</label>
                    <div class="w-full">
                        <input type="date" name="" id="" value="" placeholder="placeholder" class="item-input" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col gap-4 px-6 py-4 bg-white dark:bg-slate-700 rounded-t-lg">
            <span class="inline-block font-semibold text-sm whitespace-nowrap">Sales Report - Reports</span>
            <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div class="w-fit flex items-center gap-2">
                    <span class="text-xs">Show</span>
                    <select name="" id="" class="active:outline-none active:border-none hover:outline-none text-xs cursor-pointer dark:bg-slate-700">
                        <option value="">10</option>
                        <option value="">20</option>
                        <option value="">50</option>
                    </select>
                    <span class="text-xs">entries</span>
                </div>
                <div class="w-full lg:w-1/3 flex items-center relative lg:mt-0">
                    <input type="text" name="" id="" placeholder="Serach" class=" w-full px-10 py-2 border border-slate-300 bg-white dark:bg-slate-600 rounded-full focus:outline-none focus:border-primer-60 text-slate-700 dark:text-slate-50 text-sm focus:ring-2 focus:ring-primer-40">
                    <button type="submit" class="absolute left-3 group opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                        </svg>          
                    </button>
                </div>
            </div>
        </div>
        <div class="overflow-auto">
            <table class="w-full ">
                <thead class="border-y-2 dark:border-y-gray-600 bg-white dark:bg-gray-800">
                    <tr>
                        <th class="pl-6 pr-3 py-3 text-sm font-semibold tracking-wide text-left">#</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Invoice Number</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Cashier</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Payment Method</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Items</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Bill Amount</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Date</th>
                        <th class="pl-3 pr-6 py-3 text-sm font-semibold tracking-wide text-left">Time</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-600">
                    <tr class="odd:bg-gray-50 even:bg-white dark:odd:bg-gray-700 dark:even:bg-gray-800">
                        <td class="pl-6 pr-3 py-3 text-sm tracking-wide text-left whitespace-nowrap">1</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">18-202310220180001</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">ir.meyla</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">Tunai</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <span class="text-sm">-</span>
                                    <span class="text-sm">Ayam Gr Asam Manis x1</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm">-</span>
                                    <span class="text-sm">Nasi Goreng Ayam x1</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm">-</span>
                                    <span class="text-sm">Melon Juice R x1</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">90000</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">22-10-2023</td>
                        <td class="pl-3 pr-6 py-3 text-sm tracking-wide text-left whitespace-nowrap">10:49:07</td>
                    </tr>
                    <tr class="odd:bg-gray-50 even:bg-white dark:odd:bg-gray-700 dark:even:bg-gray-800">
                        <td class="pl-6 pr-3 py-3 text-sm tracking-wide text-left whitespace-nowrap">2</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">18-202310220180001</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">ir.meyla</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">Tunai</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <span class="text-sm">-</span>
                                    <span class="text-sm">Ayam Gr Asam Manis x1</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm">-</span>
                                    <span class="text-sm">Nasi Goreng Ayam x1</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm">-</span>
                                    <span class="text-sm">Melon Juice R x1</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">90000</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">22-10-2023</td>
                        <td class="pl-3 pr-6 py-3 text-sm tracking-wide text-left whitespace-nowrap">10:49:07</td>
                    </tr>
                    <tr class="odd:bg-gray-50 even:bg-white dark:odd:bg-gray-700 dark:even:bg-gray-800">
                        <td class="pl-6 pr-3 py-3 text-sm tracking-wide text-left whitespace-nowrap">3</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">18-202310220180001</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">ir.meyla</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">Tunai</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <span class="text-sm">-</span>
                                    <span class="text-sm">Ayam Gr Asam Manis x1</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm">-</span>
                                    <span class="text-sm">Nasi Goreng Ayam x1</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm">-</span>
                                    <span class="text-sm">Melon Juice R x1</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">90000</td>
                        <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">22-10-2023</td>
                        <td class="pl-3 pr-6 py-3 text-sm tracking-wide text-left whitespace-nowrap">10:49:07</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="pagination bg-white dark:bg-slate-700 px-6 py-4 rounded-b-lg">
            <ul class="flex items-center justify-center">
                <li><a href="#" class="btn-pagination">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z" clip-rule="evenodd" />
                    </svg>                          
                </a></li>
                <li><a href="#" class="btn-pagination">1</a></li>
                <li><a href="#" class="btn-pagination active">2</a></li>
                <li><a href="#" class="btn-pagination">3</a></li>
                <li><a href="#" class="btn-pagination">4</a></li>
                <li><a href="#" class="btn-pagination">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                    </svg>                              
                </a></li>
            </ul>
        </div>
    </section>
    <!-- Content End -->
@endsection

@section('script')
    <script src="{{ asset('js/selectinput.js') }}"></script>
@endsection