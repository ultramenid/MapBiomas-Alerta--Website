
<div class="max-w-6xl mx-auto px-4  ">
    <div class="sm:flex hidden justify-between px-3">
        <a></a>
        <div class="text-gray-500 px-12 py-1 bg-alerta text-sm rounded-b flex space-x-4">
            <a href="{{ route(Route::currentRouteName(), 'en') }}" class=" @if(App::getLocale() == 'en') text-white @endif  ">English</a>
            <a href="{{ route(Route::currentRouteName(), 'id') }}" class="@if(App::getLocale() == 'id') text-white @endif">Indonesia</a>
        </div>
    </div>
    <div class="sm:flex hidden sm:justify-between justify-center items-center  py-2 mt-4 flex-wrap gap-2">
    <a href="{{ route('index', [app()->getLocale()]) }}"><img src="{{ asset('assets/logo-alerta.png') }}" alt="Mapbiomas Alerta Indonesia" class="sm:h-12 h-full select-none"></a>
    <div class="sm:flex hidden gap-6 items-center select-none">
        <div class="flex-col flex" x-data="{pages:false}">
            <a @click="pages = ! pages" @click.away="pages=false"  class=" text-alerta cursor-pointer inline-flex   items-center " >{{__('about') }}
                <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': pages, 'rotate-0': !pages}" class="w-4 ml-1 -mb-1 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col  w-56 border-landy border-b text-alerta" x-show="pages" x-cloak style="display: none !important">
                <a href="" class="text-sm mr-6 hover:bg-gray-200 p-1">{{__('the initiative') }}</a>
                <a href="" class="text-sm mr-6 hover:bg-gray-200 p-1">{{__('who we are') }}</a>
                <a href="{{ route('tim', [app()->getLocale()]) }}" class="text-sm mr-6 hover:bg-gray-200 p-1">{{__('team') }}</a>
            </div>
        </div>
        {{-- <a href="{{ route('faq', [app()->getLocale()]) }}" class="text-alerta">FAQ</a> --}}
        <a href="#" class="text-alerta">FAQ</a>
        {{-- <a href="{{ route('contacts', [app()->getLocale()]) }}" class="text-alerta">{{__('contact') }}</a> --}}
        <div class="flex-col flex" x-data="{pages:false}">
            <a @click="pages = ! pages" @click.away="pages=false"  class=" text-alerta cursor-pointer inline-flex   items-center text-nowrap" >{{__('map & data') }}
                <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': pages, 'rotate-0': !pages}" class="w-4 ml-1 -mb-1 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col  w-64 border-landy border-b text-alerta" x-show="pages" x-cloak style="display: none !important">
                <a href="" class="text-sm mr-6 hover:bg-gray-200 p-1">{{__('platform/map') }}</a>
                <a href="" class="text-sm mr-6 hover:bg-gray-200 p-1">{{__('term of use') }}</a>
                <a href="" class="text-sm mr-6 hover:bg-gray-200 p-1">{{__('API') }}</a>
                <a href="" class="text-sm mr-6 hover:bg-gray-200 p-1">{{__('glossary') }}</a>
                <a href="" class="text-sm mr-6 hover:bg-gray-200 p-1">{{__('factsheets') }}</a>
                <a href="" class="text-sm mr-6 hover:bg-gray-200 p-1">{{__('infographics') }}</a>
            </div>
        </div>

        <div class="flex-col flex" x-data="{pages:false}">
            <a @click="pages = ! pages" @click.away="pages=false"  class=" text-alerta cursor-pointer inline-flex   items-center text-nowrap " >{{__('methodology') }}
                <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': pages, 'rotate-0': !pages}" class="w-4 ml-1 -mb-1 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col  w-64 border-landy border-b text-alerta" x-show="pages" x-cloak style="display: none !important">
                <a href="" class="text-sm mr-6 hover:bg-gray-200 p-1">{{__('methodology') }}</a>
                <a href="" class="text-sm mr-6 hover:bg-gray-200 p-1">{{__('informative note') }}</a>

            </div>
        </div>

        <a href="#" class="text-alerta text-nowrap">reports & publications</a>
        <a href="#" class="text-alerta text-nowrap">news</a>
        <a href="#" class="text-alerta text-nowrap">downloads</a>

    </div>
    </div>

</div>
