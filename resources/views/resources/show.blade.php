<x-site-layout>

    <h1 class="text-4xl font-bold">{{$resource->title}}</h1>


    <div>
        @foreach($article->comments as $comment)
            <div>
                {{$resource->description}}
            </div>
        @endforeach
    </div>

</x-site-layout>