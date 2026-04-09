<section id="services" class="{{ $class }}">
    <x-container>
        <div class="grid grid-cols-9 gap-4 mb-20 max-sm:mb-10">
            <div class="col-span-9 mb-10 relative max-sm:mb-0">
                <h2 class="an_text-appear">One Problem <br/><span class="gradient-text">Worth Solving Right</span></h2>
                <div class="absolute -bottom-20 right-0 max-md:w-80 max-md:bottom-0 max-sm:translate-y-1/5 max-xs:translate-y-0 max-md:translate-x-1/2" >
                    <img class="max-w-full an_slide-in" data-direction="left" data-delay="0.4" src="{{ asset('images/shapes/3d-item-3.png') }}" alt="" />
                </div>
                
            </div>
            <div class="col-span-4 max-md:col-span-9 an_text-split">
                <p class="h4 max-sm:mb-4 split" data-delay="0.3">Most digital products are built to launch. Then they start breaking, leaking data, or costing more to maintain than they did to build.</p>
            </div>
            <div class="col-span-3 md:col-start-7 max-md:col-span-9 an_text-split">
                <p class="split" data-delay="0.6">We've seen it with childcare platforms, edtech systems, industrial marketing tools. Different industries, same pattern. We build the kind of thing you hand off and it keeps working.</p>
            </div>
        </div>
        <div class="grid grid-cols-9 gap-4">
            <div class="col-span-2 max-md:hidden">
                <ul class="approach-features-list header an_list_appear">
                    <li></li>
                    <li>Development Style</li>
                    <li>AI Tooling</li>
                    <li>Security</li>
                    <li>UX Approach</li>
                    <li>Delivery</li>
                </ul>
            </div>
            <div class="col-span-7 max-md:col-span-9 flex items-start justify-stretch gap-4 max-sm:flex-col">
                <div class="flex-grow max-sm:w-full an_opacity-in" data-delay="0.1">
                    <ul class="approach-features-list other bg-blue an_list_appear" data-delay="0.3">
                        <li><span>Traditional Agencies</span></li>
                        <li><span>Deliverables on spec, quality depends on who's available that week</span></li>
                        <li><span>AI to go faster</span></li>
                        <li><span>Reviewed after launch, if someone remembers</span></li>
                        <li><span>Stakeholder opinions and gut feel</span></li>
                        <li><span>Rush to done, patch later</span></li>
                    </ul>
                </div>
                <div class="flex-grow max-sm:w-full an_opacity-in" data-delay="0.1">
                    <ul class="approach-features-list us gradient-block-bg an_list_appear" data-delay="0.6">
                        <li><span>Our Approach</span></li>
                        <li><span>Systems designed to outlast the team that built them</span></li>
                        <li><span>Multi-agent workflows where a person reviews every output</span></li>
                        <li><span>AI-generated code gets audited before it ships</span></li>
                        <li><span>User research, behavior patterns, cognitive data</span></li>
                        <li><span>Predictable milestones. No emergency patches.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </x-container>
</section>
