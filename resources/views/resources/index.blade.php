<html>


            <h1 class="text-4xl font-bold">Resources overview</h1>

                <div>
                   @foreach($resources as $resource)
                <div>
                    <a href="/artresourcesicles/{{$resource->id}}">{{ $resource->title }}</a>
                </div>
            @endforeach
                </div>





</html>