<div
    class="h-4 bg-gradient-to-r from-lime-400 to-indigo-600"
    id="scroll-line"
>

</div>

<style>
    #scroll-line{
        animation: gradient 15s ease infinite;
        transition: width 0.3s ease-out;
        background-size: 400% 400%;
    }
    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
</style>

<script>
    const scrollLine = document.querySelector('#scroll-line');

    function updateScrollProgress() {
        const windowHeight = window.innerHeight;
        const fullHeight = document.body.clientHeight;
        const scrolled = window.scrollY;
        const percentScrolled = (scrolled / (fullHeight + windowHeight))* 100;
        scrollLine.style.width = `${percentScrolled}%`;
    }

    updateScrollProgress();

    let ticking = false;
    window.addEventListener('scroll', () => {
        if (ticking) {return;}
        window.requestAnimationFrame(() => {
            updateScrollProgress();
            ticking = false;
        });
        ticking = true;
    });

    window.addEventListener('resize', updateScrollProgress);
</script>