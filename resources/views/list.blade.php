
<div class="overflow-hidden">
    <table class="min-w-full text-centr ">
        <thead class= "border-b bg-gray-50">
            <tr>
                <th class="text-sm font-medium text-gray-900 px-6 py-6">id</th>
                <th class="text-sm font-medium text-gray-900 px-6 py-6">nom</th>
                <th class="text-sm font-medium text-gray-900 px-6 py-6">Prenom</th>
                <th class="text-sm font-medium text-gray-900 px-6 py-6">email</th>
                <th class="text-sm font-medium text-gray-900 px-6 py-6">role</th>
                <th class="text-sm font-medium text-gray-900 px-6 py-6">crée</th>
            </tr>

        </thead>
        <tbody>
            @forelse ($etudiants as $item)
            <tr class="border-b-2 border-gray-100">
                <th class="test-sm font-medium text-gray-900 px-6 py-6">{{$item->id}}</th>
                <th class="test-sm font-medium text-gray-900 px-6 py-6">{{$item->name}}</th>
                <th class="test-sm font-medium text-gray-900 px-6 py-6">{{$item->prenom}}</th>
                <th class="test-sm font-medium text-gray-900 px-6 py-6">{{$item->email}}</th>
                <th class="test-sm font-medium text-gray-900 px-6 py-6">{{$item->role}}</th>
                <th class="test-sm font-medium text-gray-900 px-6 py-6">{{$item->created_at}}</th>


                </th>
            </tr>
            @empty
                <tr class="w-full">
                    <td class=" flex-1 w-full items-center justify-center" colspan="4">
                        <div>
                            <p class="flex justify-center content-center p-4"> <img
                                    src="{{ asset('storage/empty.svg') }}" alt=""
                                    class="w-20 h-20">
                            <div>Aucun élément trouvé!</div>
                            </p>
                        </div>
                    </td>
                </tr>

            @endforelse




        </tbody>
    </table>




</div>
