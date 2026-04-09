<div class="projects-slider-wrapper" x-data="projectSlider()" :style="`--window-left-offset: ${leftOffset}px`">
    <div class="swiper max-w-full projects-slider">
        <div class="swiper-wrapper">
            @foreach ($projects as $project)
                <div class="swiper-slide max-w-fit select-none">
                    <div class="rounded-5xl relative project-slide">
                        <div class="relative z-10 p-4 max-sm:px-6 max-sm:pt-6 max-sm:pb-11 bg-white rounded-5xl m-px">
                            <div class="relative">
                                <div class="project-slide-base max-sm:hidden"></div>
                                <div class="sm:absolute inset-0 overflow-hidden">
                                    <div class="sm:absolute sm:w-5/12 h-full pl-2 pt-6 pr-4 project-slide-content">
                                        <h5 class="transition-all duration-300 ease-in-out mb-10 sm:-translate-x-full sm:opacity-0">{{ $project['title'] }}</h5>
                                        <img class="object-cover w-full h-full mb-10 sm:hidden" src="storage/{{ $project['preview'] }}" alt="{{ $project['title'] }}">
                                        <p class="transition-all duration-300 ease-in-out sm:-translate-x-full sm:opacity-0">{{ $project['description'] }}</p>
                                    </div>
                                    <div class="absolute top-0 right-0 w-full h-full overflow-hidden rounded-5xl transition-all duration-300 ease-in-out project-slide-image max-sm:hidden">
                                        <img class="object-cover w-full h-full" src="storage/{{ $project['preview'] }}" alt="{{ $project['title'] }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@pushOnce('custom-scripts')
    <script>
        function projectSlider() {
            return {
                swiper: null,
                leftOffset: 0,
                calculateOffset() {
                    this.leftOffset = window.innerWidth > 768 ? document.querySelector('.grid-cols-9').getBoundingClientRect().left : 0;
                },
                getSlideOffset() {
                    const singleSlideWidth = document.querySelector('.projects-slider .project-slide').getBoundingClientRect().width;
                    const innerContentLeft = document.querySelector('.grid-cols-9').getBoundingClientRect().left;
                    const centerPoint = document.querySelector('body').getBoundingClientRect().width / 2 - singleSlideWidth / 2;
                    const offset = window.innerWidth > 768 ? (0 - (centerPoint - innerContentLeft)) : 0;
                    return offset;
                },
                init() {
                    this.swiper = new Swiper(".projects-slider", {
                        slidesPerView: 1,
                        slidesOffsetBefore: 0,
                        centeredSlides: true,
                        spaceBetween: 0,
                        grabCursor: true,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        breakpoints: {
                            768: {
                                slidesPerView: "auto",
                                spaceBetween: 16,
                                slidesOffsetBefore: this.getSlideOffset(),
                            }
                        }
                    });

                    this.calculateOffset();

                    window.addEventListener('resize', () => {
                        this.calculateOffset();
                    })
                }
            }
        }
    </script>
@endPushOnce
