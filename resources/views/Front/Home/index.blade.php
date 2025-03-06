@extends('layouts.app')

@section('content')
    <section class="relative w-full h-[1000px] md:h-[1200px] flex justify-center items-center overflow-hidden">
        <img src="images/sky.png" 
            alt="sky"
            class="absolute top-0 left-0 w-full h-full object-cover pointer-events-none scale-125"
            id="sky"
        >
        <h1
            class="absolute text-white -translate-y-[50%] top-[55%] w-11/12 md:w-1/2 font-extrabold text-4xl lg:text-5xl mx-auto"
            id="title"
        >Observatorio de cambio climático de la <span>Macaronesia</span></h1>
        
        <img src="images/bg-1.png" 
            alt="mountains-1"
            class="absolute -top-[160px] md:-top-[150px] left-0 w-full h-full object-cover pointer-events-none drop-shadow-[0_-30px_16px_rgba(0,0,0,0.50)]"
            id="mountains-1"
        >
        
        <img src="images/bg-2.png" 
            alt="mountains-2"
            class="absolute left-0 w-full h-full object-cover pointer-events-none drop-shadow-[0_-60px_35px_rgba(0,0,0,0.50)]"
            id="mountains-2"
            style="top:-160px"

        >
        
        <img src="images/water.png" 
            alt="water"
            class="absolute left-0 w-full h-full object-cover pointer-events-none drop-shadow-[0_-30px_35px_rgba(167,243,208,0.25)]"
            id="water"
            style="top:-160px"
        >
    </section>
    <section class="bg-[#3D8D7A] bg-right-top bg-cover w-full h-full m-0 p-0 bg-no-repeat p-4 flex flex-col ">
        <div class=" m-2 md:m-4 w-full md:w-2/5">
            <div class="bg-[linear-gradient(135deg,_rgba(255,_255,_255,_0.1),_rgba(255,_255,_255,_0))] border-t-[1px_solid_rgba(255,_255,_255,_0.5)] rounded-[15px] [box-shadow:20px_20px_40px_rgba(0,_0,_0,_0.3)] backdrop-filter backdrop-blur-sm p-[2rem]">
                <h3 class="text-4xl text-white bold mb-4">
                    ¿Qué es el Cambio Climatico?
                </h3>    
                <p class="text-white text-xl">
                    Es la variación a largo plazo de las temperaturas y los patrones climáticos en la Tierra. Aunque estos cambios pueden ocurrir de manera natural debido a factores como erupciones volcánicas y variaciones en la radiación solar, en la actualidad el término se usa principalmente para referirse al calentamiento global causado por la actividad humana.            
                </p>
            </div>
        </div>
    </section>


@endsection

<script>

document.addEventListener("DOMContentLoaded", () => {
    function getOffset(el) {
        const rect = el.getBoundingClientRect();
        return {
            left: rect.left + window.scrollX,
            top: rect.top + window.scrollY
        };
    }
    const mountains1 = document.querySelector('#mountains-1');
    const mountains2 = document.querySelector('#mountains-2');
    const water = document.querySelector('#water');
    const title = document.querySelector('#title');

    const mountains1_top =getOffset(mountains1).top

    window.addEventListener('scroll', function () {
        let value = window.scrollY;   //Get Scroll Value (Mobile - High)

        // clouds.style.left = value * 2 + 'px';

        // clouds2.style.right = value * 2 + 'px';
        if(value < 600){
            mountains1.style.top = (mountains1_top - 72 + value*0.3)+ 'px';
            mountains1.style.opacity = 100 - (value/4) + '%';
        }
        if(value < 600){
            mountains2.style.top = (-180 + value*0.4)+ 'px';
            water.style.top = (-180 + value*0.4) + 'px';
        }
        requestAnimationFrame();
        // if(value < 150){
        //     mountains2.style.top = (value * 0.15)+ 'px';
        // }
        // if(value < 300){
        //     mountains2.style.top = (value * 0.15)+ 'px';

        // }
        // mountains1.style.opacity = 100 - (value/8) + '%';

        // mountains2.style.bottom = value * 0.25+ 'px';

        // bg.style.bottom = value * 1 + 'px';
        if(value < 800){
            // console.log(title.style)
            // title.style.bottom = 60 + value * 2 + '%';
        }
    })
})

</script>