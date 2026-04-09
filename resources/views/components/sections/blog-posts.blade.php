<section id="blog" class="{{ $class }}">
    <x-container>
        <div class="grid grid-cols-9 gap-4 mb-20 max-sm:mb-10">
            <div class="col-span-6 max-sm:col-span-9">
                <h2 class="max-sm:mb-1 an_text-appear"><span class="gradient-text">Blog & Insights</span></h2>
            </div>
            <div class="col-span-3 flex justify-end items-center max-sm:col-span-9 max-sm:justify-start">
                <h4 class="an_text-appear">We Write So You Don’t Have to <br class="max-sm:hidden"/>Learn the Hard Way.</h4>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-4 max-sm:gap-3 auto-rows-fr posts-grid">
            @foreach ($posts as $index => $post)
                <div class="col-span-4 max-md:col-span-6 {{ in_array($index, [2]) ? 'max-md:col-start-4' : '' }} max-sm:col-span-12 flex an_block-appear"  data-delay="{{ $index * 0.1 }}">
                    <div class="gradient-block-bg rounded-5xl flex post-item max-sm:rounded-3xl" >
                        <div class="bg-white m-px w-full rounded-5xl p-9 max-sm:rounded-3xl max-sm:p-6 ">
                            <div class="mb-10">
                                <img class="w-full" src="{{ asset('images/posts/' . $post['image']) }}" alt="{{ $post['title'] }}">
                            </div>
                            <h5 class="mb-4 max-sm:text-center">"{!! $post['title'] !!}"</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-container>
</section>