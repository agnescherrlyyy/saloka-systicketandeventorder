<div class="sidebar">
    <div class="w-full relative flex items-center justify-center">
        <div class="w-24 h-auto flex items-center justify-center">
            <img src="{{asset('/img/logo-saloka.png')}}" alt="Logo Saloka" class="w-full h-full object-cover object-center">
        </div>
    </div>
    <ul class="mt-10">
        <li class="w-full mt-2 relative">
            <button type="button" onclick="window.location.href='{{ url('/dashboard') }}'" class="{{ $title === 'Dashboard' ? 'menuActive' : 'hover:bg-slate-100 dark:hover:bg-slate-700' }} menu-sidebar w-full flex items-center justify-between px-6 py-4">
                <div class="flex items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Dashboard' ? 'item-menuActive' : '' }} w-5 h-5 mr-3">
                        <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z" clip-rule="evenodd" />
                    </svg>                                                        
                    <span class="{{ $title === 'Dashboard' ? 'item-menuActive' : '' }} inline-block font-medium text-sm">Dashboard</span>                       
                </div>                          
            </button>
            <ul class="sub-menu">
                <li><a href="{{url('/dashboard')}}" class="title-subMenu">Dashboard</a></li>
            </ul>
        </li>
        <li class="w-full mt-2 relative">
            <button type="button" class="{{ $title === 'Master Data' ? 'menuActive' : 'hover:bg-slate-100 dark:hover:bg-slate-700' }} menu-sidebar w-full flex items-center justify-between px-6 py-4">
                <div class="flex items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Master Data' ? 'item-menuActive' : '' }} h-5 w-5 mr-3">
                        <path d="M21 6.375c0 2.692-4.03 4.875-9 4.875S3 9.067 3 6.375 7.03 1.5 12 1.5s9 2.183 9 4.875z" />
                        <path d="M12 12.75c2.685 0 5.19-.586 7.078-1.609a8.283 8.283 0 001.897-1.384c.016.121.025.244.025.368C21 12.817 16.97 15 12 15s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.285 8.285 0 001.897 1.384C6.809 12.164 9.315 12.75 12 12.75z" />
                        <path d="M12 16.5c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 15.914 9.315 16.5 12 16.5z" />
                        <path d="M12 20.25c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 19.664 9.315 20.25 12 20.25z" />
                    </svg>
                    <span class="{{ $title === 'Master Data' ? 'item-menuActive' : 'item-menuBase' }} inline-block font-medium text-sm ">Master / Config</span>                       
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Master Data' ? 'item-menuActive' : 'item-menuBase' }} w-5 h-5 arrow-down">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                </svg>                           
            </button>
            <ul class="sub-menu">
                <li><a href="#" class="title-subMenu">Master Data</a></li>
                <li><a href="{{ url('/product') }}" class="{{ $submenu === 'Store' ? 'item-sub-menuActive' : 'item-sub-menuBase' }}">Product</a></li>
                <li><a href="{{ url('#') }}" class="item-sub-menuBase">Product Category</a></li>
                <li><a href="{{ url('#') }}" class="item-sub-menuBase">Mastercard</a></li>
                <li><a href="{{ url('#') }}" class="item-sub-menuBase">Customer</a></li>
            </ul>
        </li>
        <li class="w-full mt-2 relative">
            <button type="button" class="{{ $title === 'Stocks' ? 'menuActive' : 'hover:bg-slate-100 dark:hover:bg-slate-700' }} menu-sidebar w-full flex items-center justify-between px-6 py-4">
                <div class="flex items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Stocks' ? 'item-menuActive' : '' }} h-5 w-5 mr-3">
                        <path fill-rule="evenodd" d="M1.5 6.375c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v3.026a.75.75 0 01-.375.65 2.249 2.249 0 000 3.898.75.75 0 01.375.65v3.026c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 17.625v-3.026a.75.75 0 01.374-.65 2.249 2.249 0 000-3.898.75.75 0 01-.374-.65V6.375zm15-1.125a.75.75 0 01.75.75v.75a.75.75 0 01-1.5 0V6a.75.75 0 01.75-.75zm.75 4.5a.75.75 0 00-1.5 0v.75a.75.75 0 001.5 0v-.75zm-.75 3a.75.75 0 01.75.75v.75a.75.75 0 01-1.5 0v-.75a.75.75 0 01.75-.75zm.75 4.5a.75.75 0 00-1.5 0V18a.75.75 0 001.5 0v-.75zM6 12a.75.75 0 01.75-.75H12a.75.75 0 010 1.5H6.75A.75.75 0 016 12zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" clip-rule="evenodd" />
                    </svg>
                    <span class="{{ $title === 'Stocks' ? 'item-menuActive' : 'item-menuBase' }} inline-block font-medium text-sm ">Ticket</span>                       
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Stocks' ? 'item-menuActive' : 'item-menuBase' }} w-5 h-5 arrow-down">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                </svg>                           
            </button>
            <ul class="sub-menu">
                <li><a href="#" class="title-subMenu">Ticket</a></li>
                <li><a href="{{ url('#') }}" class="item-sub-menuBase">Ticket</a></li>
                <li><a href="{{ url('/sales-event-order') }}" class="{{ $submenu === 'Receiving' ? 'item-sub-menuActive' : 'item-sub-menuBase' }}">Sales Event Order</a></li>
                <li><a href="{{ url('#') }}" class="item-sub-menuBase">PoS</a></li>
                <li><a href="{{ url('#') }}" class="item-sub-menuBase">KIOSK</a></li>
            </ul>
        </li>
        <li class="w-full mt-2 relative">
            <button type="button" class="{{ $title === 'Reports' ? 'menuActive' : 'hover:bg-slate-100 dark:hover:bg-slate-700' }} menu-sidebar w-full flex items-center justify-between px-6 py-4">
                <div class="flex items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="{{ $title === 'Reports' ? 'item-menuActive' : '' }} h-5 w-5 mr-3" width="12pt" height="12pt" viewBox="0 0 512 512" id="turnstile"><path d="m477.8125 60-20-60h-111.625l-20 60h-34.1875v30.183594c-33.976562 2.25-61.847656 27.210937-68.492188 59.816406h-223.507812v30h223.507812c2.171876 10.652344 6.621094 20.484375 12.796876 28.980469l-157.203126 157.207031 21.214844 21.210938 158.105469-158.109376c9.933594 5.984376 21.363281 9.71875 33.578125 10.527344v272.183594h220v-452zm-110-30h68.375l10 30h-88.375zm-115.8125 135c0-23.121094 17.53125-42.21875 40-44.714844v89.429688c-22.46875-2.496094-40-21.59375-40-44.714844zm230 317h-160v-392h160zm0 0"></path><path d="m452 119h-100v100h100zm-30 70h-40v-40h40zm0 0"></path></svg>
                    <span class="{{ $title === 'Reports' ? 'item-menuActive' : 'item-menuBase' }} inline-block font-medium text-sm ">Trunstile</span>                       
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Reports' ? 'item-menuActive' : 'item-menuBase' }} w-5 h-5 arrow-down">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                </svg>                           
            </button>
            <ul class="sub-menu">
                <li><a href="#" class="title-subMenu">Trunstile</a></li>
                <li><a href="{{ url('/trunstile') }}" class="{{ $submenu === 'Sales Reports' ? 'item-sub-menuActive' : 'item-sub-menuBase' }}">Trunstile</a></li>
                <li><a href="{{ url('#') }}" class="item-sub-menuBase">Tiket</a></li>
            </ul>
        </li>
    </ul>
    <div class="btnSidebarBack">
        <button class="w-10 h-10 z-[9999] fixed bottom-4 right-4 flex items-center justify-center rounded-full shadow-lg bg-sekunder-60">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
            </svg>                      
        </button>
    </div>
</div>
<!-- Sidebar End -->