<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if(Auth::user()->usertype == 'admin') {
                {{ __('Admin Dashboard') }}
            }@else {
                {{ __('Dashboard') }}
            }
            @endif
        </h2>
        </x-slot>
        @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('admin.createpost')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" id="Enter post title here!"><br>
                        <textarea name="description" id="">
                        </textarea><br>
                        <input type="file" name="image" id=""><br>
                        <input type="submit" name="submit" value="Add post">
                    </form>
                </div>
            </div>
        </div>
    </div>
      @endsection
</x-app-layout>
