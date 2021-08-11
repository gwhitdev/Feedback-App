<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">
                
                    <h2 class="font-bold">Images</h2>
                    <div>
                        <table class="table-auto mt-4">
                            <thead>
                                <tr>
                                    <th>Image Description</th>
                                    <th>URL</th>
                                    <th>Preview</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($images as $i)
                                <tr>
                                    <td>
                                        {{$i->description}}
                                    </td>
                                    <td>
                                        {{$i->image_url}}
                                    </td>
                                    <td>
                                        <img src="{{ Storage::disk('s3')->temporaryUrl("$i->image_url",'+2 minutes')}}">
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
