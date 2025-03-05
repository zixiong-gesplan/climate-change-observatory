@extends('layouts.app')

@section('content')
<section class="w-full relative -z-10 flex gap-10 overflow-hidden h-48 px-8">
    <div class="flex flex-col md:flex-row md:items-center md:content-between font-bold w-full md:justify-between">
        <h1 class="text-4xl">
            Mitigación
        </h1>

        <p class="text-lg text-slate-600">
            Las acciones que tomamos, <br/> para un mundo más <span class="text-green-700">neutro</span>
        </p>
    </div>
</section>
<section class="w-full flex justify-center">
    <video class="w-full h-full object-cover mx-auto rounded-xl" autoplay muted id="video">
        <source src="/images/mitigacion.mp4" type="video/mp4">
    </video>
</section>

<section class="w-full mt-4 h-full py-20">
    <h2 class="text-4xl font-bold text-center">Nuestras medidas</h2>

    @include('Front.Mitigation.sections.swiper.index')
</section>

<section class="w-full mt-4 py-32 bg-green-200">
    <div class="w-10/12 mx-auto">
        <h1 class="text-2xl">
            Por que queremos un mundo mejor.
        </h1>
        <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quas officia, voluptatem odio culpa atque facere, voluptas libero adipisci sed doloribus praesentium placeat? Facilis nostrum porro voluptates quod repellendus nesciunt!
        </p>
        <p>
            No somos gente interesada en el dinero ni lo hacemos con animo de lucro
        </p>
    </div>
</section>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const video = document.getElementById('video');
        video.addEventListener('loadedmetadata', function(e){
            let {innerWidth, innerHeight} = window;
            window.addEventListener('scroll', () => {
                let value = window.scrollY;
                if((innerWidth * 10 / 12) < innerWidth - (value)){
                    video.style.width = innerWidth - (value) + 'px';
                    video.style.height = innerHeight - (value) + 'px';
                    return
                }
            })  
        });
    });
</script>