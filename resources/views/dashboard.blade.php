<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-6 py-4">
                    <h2 class="text-xl">Paslaugos</h2>
                    <p class="text-lg ml-2 my-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam qui velit voluptate consequuntur vel similique est iure recusandae nisi, voluptates quidem soluta officia, minus non.
                    </p>
                    <a href="{{ route('feedback', []) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
                        {{__('Palikite atsiliepimą')}}
                    </a>
                    {{-- @isset ($fb_success)
                        <p class="text-green-500">
                            Ačių už jūsų atsiliepimą!
                        </p>
                    @endisset --}}
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-2">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="px-6 py-4">
                    <div class="flex flex-row">
                        <div class="w-1/2 mr-2">
                            <h1 class="text-lg font-bold">Statistika</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel tenetur fuga maxime nesciunt quaerat tempore in, fugiat vero corrupti voluptate iusto dignissimos eveniet atque praesentium eos, aspernatur eius laudantium autem officiis facere ducimus? Corrupti, velit fugiat? Tempore eum nulla neque!
                            </p>
                            <div class="w-full my-3 mb-5">
                                <div class="shadow w-full bg-grey-light">
                                    <div class="bg-blue-500 text-xs leading-none py-1 pl-1 text-left text-white rounded" style="width: 75%">
                                        Skrydžiai 75%
                                    </div>
                                </div>

                                <div class="shadow w-full bg-grey-light mt-2">
                                    <div class="bg-blue-500 text-xs leading-none py-1 pl-1 text-left text-white rounded" style="width: 25%">
                                        Autobusų nuoma 25%
                                    </div>
                                </div>

                                <div class="shadow w-full bg-grey-light mt-2">
                                    <div class="bg-blue-500 text-xs leading-none py-1 pl-1 text-left text-white rounded" style="width: 55%">
                                        Automobilių nuoma 55%
                                    </div>
                                </div>

                                <div class="shadow w-full bg-grey-light mt-2">
                                    <div class="bg-blue-500 text-xs leading-none py-1 pl-1 text-left text-white rounded" style="width: 30%">
                                        Dviračių nuoma 30%
                                    </div>
                                </div>
                            </div>
                            <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-5">
                                {{__('Plačiau...')}}
                            </a>
                        </div>
                        <div class="w-1/4 mr-2">
                            <div class="flex flex-col max-w-md bg-white shadow-lg overflow-hidden">
                                <div class="w-full bg-cover" style="background-image: url('{{ asset('img/plane.jpeg') }}'); height: 115px"></div>
                                <div class="w-full p-4">
                                    <h1 class="text-gray-900 font-bold text-2xl">Skrydžiai</h1>
                                    <p class="mt-2 text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit In odit exercitationem fuga id nam quia</p>
                                </div>
                                <div class="p-4">
                                    <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-5">
                                        {{__('Plačiau...')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/4">
                            <div class="flex flex-col max-w-md bg-white shadow-lg overflow-hidden">
                                <div class="w-full bg-cover" style="background-image: url('{{ asset('img/car.jpeg') }}'); height: 115px"></div>
                                <div class="w-full p-4">
                                    <h1 class="text-gray-900 font-bold text-2xl">Automobilių nuoma</h1>
                                    <p class="mt-2 text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit In odit exercitationem fuga id nam quia</p>
                                </div>
                                <div class="p-4">
                                    <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-5">
                                        {{__('Plačiau...')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-50 overflow-hidden sm:rounded-lg">
                <div class="flex flex-row justify-center my-5">
                    <div>
                        <i class="fas fa-bicycle"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
