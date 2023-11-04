@extends('Layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-xl mb-2">Dashboard</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-400">Analisis Dashboard SYSTICKET</h4>
        </div>
    </div>
    <!-- Heading End -->

    <!-- Card Dashboard Start -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-10">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:grid-rows-2 xl:grid-cols-3 xl:grid-rows-1 mb-6">
            <div class="px-6 py-4 bg-white dark:bg-slate-700 rounded-lg">
                <div class="flex items-start justify-between">
                    <span class="inline-block">Total Masuk</span>
                    <div class="">
                        <img src="{{ asset('img/masuk.svg') }}" alt="">
                    </div>
                </div>
                <div class="flex items-center">
                    <span class="inline-block font-semibold text-xl mr-2">444</span>
                </div>
                <span class="inline-block text-sm mt-2">Analisis turnstile hari ini</span>
            </div>
            <div class="px-6 py-4 bg-white dark:bg-slate-700 rounded-lg">
                <div class="flex items-start justify-between">
                    <span class="inline-block">Total Keluar</span>
                    <div class="">
                        <img src="{{ asset('img/keluar.svg') }}" alt="">
                    </div>
                </div>
                <div class="flex items-center">
                    <span class="inline-block font-semibold text-xl mr-2">158</span>
                </div>
                <span class="inline-block text-sm mt-2">Analisis turnstile hari ini</span>
            </div>
            <div class="px-6 py-4 bg-white dark:bg-slate-700 rounded-lg">
                <div class="flex items-start justify-between">
                    <span class="inline-block">Total Didalam</span>
                    <div class="">
                        <img src="{{ asset('img/didalam.svg') }}" alt="">
                    </div>
                </div>
                <div class="flex items-center">
                    <span class="inline-block font-semibold text-xl mr-2">286</span>
                </div>
                <span class="inline-block text-sm mt-2">Analisis turnstile hari ini</span>
            </div>
        </div>
        <div class="w-full flex flex-col lg:flex-row gap-6">
            <div class="w-full bg-white dark:bg-slate-700 p-4 rounded-lg overflow-hidden">
                <strong class="mb-4">Rekap Penjualan Tiket</strong>
                <div class="w-full py-4">
                    <div class="w-fit flex items-center gap-2">
                        <div class="relative">
                            <button id="dropdown-secondary" class="dropdown-button px-4 py-2 rounded-full bg-sekunder-60 hover:bg-sekunder-80 text-slate-50 font-semibold text-xs w-fit flex items-center gap-2">
                                Measures
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                                </svg>                            
                            </button>
                            <ul id="dropdown-secondary" class="dropdown-menu min-w-max w-full absolute top-full left-0 bg-white dark:bg-slate-600 shadow-md rounded-lg py-3 mt-2 opacity-0 pointer-events-none transition-all duration-150 ease-linear z-10">
                                <li><a id="item-dropdown" href="#" class="block w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 text-sm">To Do All</a></li>
                                <li><a id="item-dropdown" href="#" class="block w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 text-sm">On Going</a></li>
                                <li><a id="item-dropdown" href="#" class="block w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 text-sm">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="w-fit flex items-center">
                            <button class="cursor-pointer p-2 py-2 rounded-md bg-blue-50">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-blue-500">
                                    <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z" />
                                </svg>
                            </button>
                            <button class="cursor-pointer p-2 py-2 rounded-md">
                                <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="4 19 8 13 12 15 16 10 20 14 20 19 4 19" />  <polyline points="4 12 7 8 11 10 16 4 20 8" /></svg>
                            </button>
                            <button class="cursor-pointer p-2 py-2 rounded-md">
                                <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-6.8a2 2 0 0 1 -2 -2v-7a.9 .9 0 0 0 -1 -.8" />  <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a1 1 0 0 1 -1 -1v-4.5" /></svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-col xl:flex-row xl:items-center gap-4 py-4">
                    <div class="w-full lg:w-1/2 flex items-center relative lg:mt-0">
                        <input type="text" name="" id="" placeholder="Serach" class=" w-full px-10 py-2 border border-slate-300 bg-white dark:bg-slate-600 rounded-full focus:outline-none focus:border-primer-60 text-slate-700 dark:text-slate-50 text-sm focus:ring-2 focus:ring-primer-40">
                        <button type="submit" class="absolute left-3 group opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                            </svg>          
                        </button>
                    </div>
                    <div class="w-fit flex items-center gap-2">
                        <div class="relative">
                            <button id="dropdown-filter" class="dropdown-button font-semibold text-xs w-fit flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0112 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 011.541 1.836v1.044a3 3 0 01-.879 2.121l-6.182 6.182a1.5 1.5 0 00-.439 1.061v2.927a3 3 0 01-1.658 2.684l-1.757.878A.75.75 0 019.75 21v-5.818a1.5 1.5 0 00-.44-1.06L3.13 7.938a3 3 0 01-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836z" clip-rule="evenodd" />
                                </svg>
                                Filter
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                                </svg>                            
                            </button>
                            <ul id="dropdown-filter" class="dropdown-menu min-w-max w-full absolute top-full left-0 bg-white dark:bg-slate-600 shadow-md rounded-lg py-3 mt-2 opacity-0 pointer-events-none transition-all duration-150 ease-linear z-10">
                                <li><a id="item-dropdown" href="#" class="block w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 text-sm">To Do All</a></li>
                                <li><a id="item-dropdown" href="#" class="block w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 text-sm">On Going</a></li>
                                <li><a id="item-dropdown" href="#" class="block w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 text-sm">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="relative">
                            <button id="dropdown-groupby" class="dropdown-button font-semibold text-xs w-fit flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21 6.375c0 2.692-4.03 4.875-9 4.875S3 9.067 3 6.375 7.03 1.5 12 1.5s9 2.183 9 4.875z" />
                                    <path d="M12 12.75c2.685 0 5.19-.586 7.078-1.609a8.283 8.283 0 001.897-1.384c.016.121.025.244.025.368C21 12.817 16.97 15 12 15s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.285 8.285 0 001.897 1.384C6.809 12.164 9.315 12.75 12 12.75z" />
                                    <path d="M12 16.5c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 15.914 9.315 16.5 12 16.5z" />
                                    <path d="M12 20.25c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 19.664 9.315 20.25 12 20.25z" />
                                </svg>
                                Group by
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                                </svg>                            
                            </button>
                            <ul id="dropdown-groupby" class="dropdown-menu min-w-max w-full absolute top-full left-0 bg-white dark:bg-slate-600 shadow-md rounded-lg py-3 mt-2 opacity-0 pointer-events-none transition-all duration-150 ease-linear z-10">
                                <li><a id="item-dropdown" href="#" class="block w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 text-sm">To Do All</a></li>
                                <li><a id="item-dropdown" href="#" class="block w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 text-sm">On Going</a></li>
                                <li><a id="item-dropdown" href="#" class="block w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 text-sm">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="relative">
                            <button id="dropdown-timerange" class="dropdown-button font-semibold text-xs w-fit flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                                </svg>
                                Time Range
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                                </svg>                            
                            </button>
                            <ul id="dropdown-timerange" class="dropdown-menu min-w-max w-full absolute top-full left-0 bg-white dark:bg-slate-600 shadow-md rounded-lg py-3 mt-2 opacity-0 pointer-events-none transition-all duration-150 ease-linear z-10">
                                <li><a id="item-dropdown" href="#" class="block w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 text-sm">To Do All</a></li>
                                <li><a id="item-dropdown" href="#" class="block w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 text-sm">On Going</a></li>
                                <li><a id="item-dropdown" href="#" class="block w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 text-sm">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-fit flex items-center gap-2">
                        <button class="cursor-pointer p-2 py-2 rounded-md bg-blue-50">
                            <svg class="w-5 h-5 text-blue-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="19" x2="20" y2="19" />  <polyline points="4 15 8 9 12 11 16 6 20 10 20 15 4 15" /></svg>
                        </button>
                        <button class="cursor-pointer p-2 py-2 rounded-md">
                            <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="4" width="16" height="16" rx="2" />  <line x1="4" y1="10" x2="20" y2="10" />  <line x1="10" y1="4" x2="10" y2="20" /></svg>
                        </button>
                        <button class="cursor-pointer p-2 py-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M2.625 6.75a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0A.75.75 0 018.25 6h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75zM2.625 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zM7.5 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12A.75.75 0 017.5 12zm-4.875 5.25a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div id="barchart" class="dark:text-slate-50"></div>
            </div>
        </div>
    </section>
    <!-- Card Dashboard End -->
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/barchart.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
@endsection