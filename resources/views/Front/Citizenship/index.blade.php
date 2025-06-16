@extends('layouts.app')

@section('content')
<main class="w-full">
    <section class="w-10/12 mx-auto p-4 m-4 min-h-80 flex flex-col lg:flex-row justify-center lg:justify-start lg:items-center h-96 relative box-content	">
        <img src="/images/Participacion-ciudadana-portada.jpeg" class="object-center size-full rounded-3xl"/>  
        <h1 class=" w-full text-2xl lg:text-4xl font-bold absolute ps-4 lg:ps-0 text-white text-balance text-center box-content	">
            Participación ciudadana
        </h1>
    </section>

    @include('Front.Citizenship.sections.swiper.index')
    
    <section class="w-10/12 mx-auto bg-indigo-600 rounded-3xl p-4 min-h-80 flex flex-col lg:flex-row justify-center lg:justify-start lg:items-center box-border gap-2">
        <div class="w-1/3 box-border">
            <p class="text-slate-100 text-balance text-base">
                Con el objeitvo de concienciar a la ciudadania, realizamos varias jornadas de participación pública
            </p>
            <h2 class="text-white drop-shadow-md text-balance font-medium text-2xl">
                Jornadas Públicas
            </h2>
        </div>
        <div class="w-2/3 flex gap-2 box-border">
            <img class="rounded-2xl aspect-square w-1/2 border-slate-50 border-2 "src="https://fastly.picsum.photos/id/24/4855/1803.jpg?hmac=ICVhP1pUXDLXaTkgwDJinSUS59UWalMxf4SOIWb9Ui4" alt="">
            <img class="rounded-2xl w-1/2 border-slate-50 border-2 "src="https://fastly.picsum.photos/id/20/3670/2462.jpg?hmac=CmQ0ln-k5ZqkdtLvVO23LjVAEabZQx2wOaT4pyeG10I" alt="">
        </div>
    </section>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-5 mt-4 w-10/12 mx-auto">
      <div
        class="border p-7 rounded-xl drop-shadow-md border-neutral-800/50 col-span-2 flex flex-col gap-y-10 justify-between">
        <div class="flex flex-col gap-y-3.5">
          <p class="font-bold text-xl text-black">Efficient customer support</p>
          <p class="font-medium text-black">The customer support team at our service is incredibly responsive and
            helpful. They went above and beyond to assist me with my issue.</p>
        </div>
        <div class="flex flex-col"><img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Emily Smith" class="h-10 w-10">
          <p class="pt-2 text-sm font-semibold text-black">Emily Smith</p>
          <p class="text-sm font-medium text-slate-800/70">Marketing Manager at ABC Company</p>
        </div>
      </div>
      <div
        class="border p-7 rounded-xl bg-green-800/50 drop-shadow-md border-neutral-800/50 col-span-3 flex flex-col gap-y-10 justify-between">
        <div class="flex flex-col gap-y-3.5">
          <p class="font-bold text-xl text-white">Excellent product features</p>
          <p class="font-medium text-white">The features offered by our service are outstanding. They have greatly
            improved our workflow and efficiency.</p>
        </div>
        <div class="flex flex-col"><img src="https://randomuser.me/api/portraits/men/34.jpg" alt="Michael Johnson" class="h-10 w-10">
          <p class="pt-2 text-sm font-semibold text-white">Michael Johnson</p>
          <p class="text-sm font-medium text-slate-100/70">CEO at XYZ Corporation</p>
        </div>
      </div>
      <div class="border p-7 rounded-xl bg-green-800/50 drop-shadow-md border-neutral-800/50 col-span-3 flex flex-col gap-y-10 justify-between">
        <div class="flex flex-col gap-y-3.5">
          <p class="font-bold text-xl text-white">Seamless integration process</p>
          <p class="font-medium text-white">Integrating our systems with our service was smooth and hassle-free. The
            support team guided us through every step of the process.</p>
        </div>
        <div class="flex flex-col"><img src="https://randomuser.me/api/portraits/women/71.jpg" alt="Sarah Brown" class="h-10 w-10">
          <p class="pt-2 text-sm font-semibold text-white">Sarah Brown</p>
          <p class="text-sm font-medium text-slate-100/70">CTO at XYZ Corporation</p>
        </div>
      </div>
      <div
        class="border p-7 rounded-xl drop-shadow-md border-neutral-800/50 col-span-2 flex flex-col gap-y-10 justify-between">
        <div class="flex flex-col gap-y-3.5">
          <p class="font-bold text-xl text-black">Reliable service uptime</p>
          <p class="font-medium text-black">Our service has consistently maintained high uptime, ensuring that our
            operations run smoothly without any disruptions.</p>
        </div>
        <div class="flex flex-col"><img src="https://randomuser.me/api/portraits/men/71.jpg" alt="James White" class="h-10 w-10">
          <p class="pt-2 text-sm font-semibold text-black">James White</p>
          <p class="text-sm font-medium text-slate-800/70">COO at XYZ Corporation</p>
        </div>
      </div>
    </div>
    
</main>
@endsection