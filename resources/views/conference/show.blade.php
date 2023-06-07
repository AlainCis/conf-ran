<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('DETAILS CONFERENCE') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('conference.update',['conference'=>$conference])}}" method="POST" class="w-full max-w-lg">
                        @csrf
                        @method("PUT")
                        <div class="flex flex-wrap -mx-3 mb-6">
                          <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                              Thématique
                            </label>
                            <input name="thematique" @disabled(true) value="{{$conference->thematique}}" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Thématique">
                            @error('thematique')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                          <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                              Orateur
                            </label>
                            <input name="orateur" @disabled(true) value="{{$conference->orateur}}" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Orateur">
                            @error('orateur')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Organisateur
                              </label>
                              <input name="organisateur" @disabled(true) value="{{$conference->organisateur}}" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Organisateur">
                              @error('organisateur')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                              @enderror
                            </div>
                          </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                              Lieu
                            </label>
                            <input name="lieu" @disabled(true) value="{{$conference->lieu}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Lieu">
                            @error('lieu')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                              @enderror
                          </div>
                          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                              Date
                            </label>
                            <input name="dateconf" @disabled(true) value="{{$conference->dateconf}}"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="date" placeholder="Date">
                            @error('dateconf')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                          </div>
                          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                              Status
                            </label>
                            <div class="relative">
                                <select name="status" @disabled(true) value="{{$conference->status}}"  class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                  <option value="confirme">Confirmée</option>
                                  <option value="annule">Annulée</option>
                                  <option value="programme">Programmée</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                              </div>
                          </div>
                        </div>
                        {{-- <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                            Valider
                        </button> --}}
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

