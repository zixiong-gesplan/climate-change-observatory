@extends('layouts.app')

@section('content')

@include('Front.Climate-Change.sections.understand.index')
@include('Front.Climate-Change.sections.impact')
@include('Front.Climate-Change.sections.solutions.index')
@include('Front.Climate-Change.sections.projects.index')

<script>

    document.addEventListener("DOMContentLoaded", () => {

        window.addEventListener("scroll", function() {
            let scrolled = window.scrollY;
            document.querySelectorAll("[data-parallax]").forEach(el => {
                if (!el) return;
                if(screen.width < 767){ return}
                let speed = parseFloat(el.dataset.parallax) || 0;
                el.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    });
</script>

@endsection

