<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('dashboard') }}" class="text-gray-500 text-sm py-2 px-4 rounded ml-2 text-left">
                {{__('< < Grįžti į pagrindinį')}}
            </a>
            <div class="justify-center items-center flex flex-col">
                <h1 class="text-xl font-bold">Atsiliepimų sąrašas</h1>
                <table class="table-fixed" id="table">
                    <thead>
                      <tr class="bg-gray-700 text-white w-full">
                        <th class="p-1 px-2 font-bold">#</th>
                        <th class="p-1 px-2">Vardas</th>
                        <th class="p-1 px-2">Pavardė</th>
                        <th class="p-1 px-2">El. Paštas</th>
                        <th class="p-1 px-2">Paslaugų sąrašas</th>
                        <th class="p-1 px-2">Vertinimas</th>
                        <th class="p-1 px-2">Nuomonė</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr @if($key % 2 == 0) class="bg-red-100" @else class="bg-gray-200" @endif>
                            <td class="p-1 px-2 font-bold">{{$item->id}}</td>
                            <td class="p-1 px-2">{{$item->first_name}}</td>
                            <td class="p-1 px-2">
                                @isset($item->last_name)
                                    {{$item->last_name}}
                                @endisset
                            </td>
                            <td class="p-1 px-2">{{$item->email}}</td>
                            <td class="p-1 px-2">
                                @isset($item->service)
                                    @switch($item->service)
                                        @case(4)
                                            Autobusų nuoma
                                            @break
                                        @case(3)
                                            Dviračių nuoma
                                            @break
                                        @case(2)
                                            Automobilių nuoma
                                            @break
                                        @case(1)
                                            Skrydžiai
                                            @break
                                    @endswitch
                                @endisset
                            </td>
                            <td class="p-1 px-2">
                                @isset($item->rating)
                                    @switch($item->rating)
                                        @case(2)
                                            Gerai
                                            @break
                                        @case(1)
                                            Patenkinamai
                                            @break
                                        @case(0)
                                            Blogai
                                            @break
                                    @endswitch
                                @endisset
                            </td>
                            <td class="p-1 px-2">
                                @isset($item->opinion)
                                    {{$item->opinion}}
                                @endisset
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
