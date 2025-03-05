<div class="w-full relative">
    <div class="swiper multiple-slide-carousel swiper-container relative w-11/12 md:w-10/12">
        <div class="swiper-wrapper p-4">
            @include('Front.Citizenship.sections.swiper.swiper-card', ['name'=> 'IDAFE'])
            @include('Front.Citizenship.sections.swiper.swiper-card', ['name'=> 'GEOPARQUES'])
            @include('Front.Citizenship.sections.swiper.swiper-card', ['name'=> 'DIVULGACIÓN FEDER'])
            @include('Front.Citizenship.sections.swiper.swiper-card', ['name'=> 'REDPROMAR'])
        </div>
    </div>
</div>
<script>
    var swiper = new Swiper(".multiple-slide-carousel", {
        centeredSlides: false,
        loop: true,
        slidesPerView: 1,
        spaceBetween: 5,
        breakpoints: {
            1920: {
                slidesPerView: 4,
                spaceBetween: 30,
                centeredSlides: true
            },
            1028: {
                slidesPerView: 3,
                spaceBetween: 30,
                centeredSlides: true
            },
            990: {
                slidesPerView: 2,
                spaceBetween: 15,
                centeredSlides: true
            }
        }
    });
</script>