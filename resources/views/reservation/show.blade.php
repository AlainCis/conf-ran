<x-guest-layout>
  <div class="py-12">
      <div class="flex items-center h-screen w-full justify-center">
          <div class="max-w-xs">
              <div class="bg-white shadow-xl rounded-lg py-3">
                  <div class="photo-wrapper p-2">
                      <x-application-logo class="w-32 h-32 rounded-full mx-auto" />
                      {{-- <img class="w-32 h-32 rounded-full mx-auto" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="John Doe"> --}}
                  </div>
                  <div class="p-2">
                      <h3 class="text-center text-xl text-gray-900 font-medium leading-8">
                        {{$reservation->user->name}} 
                      </h3>
                      <div class="text-center text-gray-400 text-xs font-semibold">
                          <p>
                              {{ $reservation->conference->thematique}}
                          </p>
                      </div>
                      <table class="text-xs my-3">
                          <tbody><tr>
                              <td class="px-2 py-2 text-gray-500 font-semibold">Lieu</td>
                              <td class="px-2 py-2">{{ $reservation->datereservation }}</td>
                          </tr>
                          <tr>
                              <td class="px-2 py-2 text-gray-500 font-semibold">Date</td>
                              <td class="px-2 py-2">{{ $reservation->conference->dateconf }}</td>
                          </tr>
                          
                      </tbody></table>
          
                      <div class="text-center my-3">
                          <a class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" 
                          href="{{ route('reservation.index') }}">OK</a>
                      </div>
          
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-guest-layout>