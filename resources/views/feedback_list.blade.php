<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center items-center flex flex-col">
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
                        <td class="p-1 px-2">{{$item->last_name}}</td>
                        <td class="p-1 px-2">{{$item->email}}</td>
                        <td class="p-1 px-2">
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
                        </td>
                        <td class="p-1 px-2">
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
                        </td>
                        <td class="p-1 px-2">{{$item->opinion}}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>

        </div>
    </div>
</x-app-layout>
