<a class="peer flex flex-col space-y-4 opacity-100 hover:opacity-100 cursor-pointer transition-opacity duration-300 h-full hover:shadow-lg p-4"
    href="{{$href}}"
    target="_blank"
>   
    <div class="w-full aspect-square flex items-center">
        <img src="{{$image}}" alt="" srcset="" class="rounded-lg w-full">    
    </div>
    <h3 class="text-xl font-bold">{{$title}}</h3>
    <p class="text-gray-600">
        {{$description}}
    </p>
</a>