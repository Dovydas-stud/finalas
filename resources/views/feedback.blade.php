<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('feedback', []) }}">
                @csrf
                <a href="{{ route('dashboard') }}" class="text-gray-500 text-sm py-2 px-4 rounded ml-2">
                    {{__('< < Grįžti atgal')}}
                </a>
                <div class="mb-4 mt-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="first_name">
                        Vardas *
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="first_name" id="first_name" type="text" placeholder="Vardas">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="last_name">
                        Pavardė
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="last_name" id="last_name" type="text" placeholder="Pavardė">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        El. Pašto adresas *
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" placeholder="Email">
                </div>
                <div class="mb-4 flex flex-row items-center">
                    <div class="m-1 flex flex-row items-center w-1/2">
                        <p class="w-1/2">
                            Kokiomis mūsų paslaugomis naudojotės?
                        </p>
                        <div class="flex flex-col justify-center">
                            <label class="inline-flex items-center mt-3">
                                <input type="radio" value="1" name="service" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Skrydžiai</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input type="radio" value="2" name="service" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Automobilių nuoma</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input type="radio" value="3" name="service" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Dviračių nuoma</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input type="radio" value="4" name="service" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Autobusų nuoma</span>
                            </label>
                        </div>
                    </div>
                    <div class="m-1 flex flex-row items-center w-1/2">
                        <p class="w-1/2">
                            Kaip vertinate mūsų paslaugų kokybę?
                        </p>
                        <div class="flex flex-col justify-center">
                            <label class="inline-flex items-center mt-3">
                                <input type="radio" value="2" name="rating" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Gerai</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input type="radio" value="1" name="rating" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Patenkinamai</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input type="radio" value="0" name="rating" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Blogai</span>
                            </label>
                        </div>
                    </div>
                </div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="opinion">
                    Jūsų nuomonė apie mus:
                </label>
                <textarea col="" row="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="opinion" id="opinion"></textarea>
                <p class="text-sm text-gray-700 m-2">
                    * - pažymėtus laukus privaloma užpildyti
                </p>

                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Siųsti atsiliepimą
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
