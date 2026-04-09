import { gsap } from "gsap";
import { SplitText } from "gsap/SplitText";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(SplitText, ScrollTrigger);


document.fonts.ready.then(() => {

    gsap.set(".an_text-appear", { opacity: 1 });

    const textAppearTriggers = document.querySelectorAll('.an_text-appear');

    textAppearTriggers.forEach((trigger) => {

        if (!trigger.classList.contains('processed')) {
            trigger.innerHTML = wrapWordsWithSpan(trigger.innerHTML);
            trigger.classList.add('processed');
        }

        const delay = trigger.dataset.delay || 0;


        gsap.timeline({
            scrollTrigger: {
                trigger: trigger,
                start: 'top 95%',
                // markers: true,
            },
        }).fromTo(trigger.children,
            {
                opacity: 0,
                translateX: -10,
            },
            {
                delay: delay,
                opacity: 1,
                translateX: 0,
                duration: 0.4,
                stagger: 0.1,
                ease: 'power1.inOut'
            }
        );
    });

    const textSplitTriggers = document.querySelectorAll('.an_text-split');

    textSplitTriggers.forEach((trigger) => {

        const splits = trigger.querySelectorAll('.split');

        splits.forEach((split) => {
            const delay = split.dataset.delay || 0;

            SplitText.create(split, {
                type: "words,lines",
                mask: "lines",
                linesClass: "line",
                autoSplit: true,
                onSplit: (instance) => {
                    return gsap.timeline(
                        {
                            scrollTrigger: {
                                trigger: trigger,
                                start: 'top 95%',
                                // markers: true,
                            },
                        }
                    ).from(instance.lines, {
                        yPercent: 120,
                        opacity: 0,
                        stagger: 0.1,
                        delay: delay,
                    });
                }
            });
        });
    });

    const blockTriggers = document.querySelectorAll('.an_block-appear');

    blockTriggers.forEach((trigger) => {
        const delay = trigger.dataset.delay || 0;
        const direction = trigger.dataset.direction || 'right';

        gsap.timeline(
            {
                scrollTrigger: {
                    trigger: trigger,
                    start: 'top 95%',
                    // markers: true,
                },
            }
        ).from(trigger, {
            delay: delay,
            opacity: 0,
            x: direction === 'left' ? 50 : -50,
            rotation: direction === 'left' ? 5 : -5,
            duration: 0.4,
            ease: 'power1.inOut'
        });
    });

    const zoomTriggers = document.querySelectorAll('.an_zoom-appear');

    zoomTriggers.forEach((trigger) => {
        const delay = trigger.dataset.delay || 0;

        gsap.timeline(
            {
                scrollTrigger: {
                    trigger: trigger,
                    start: 'top 95%',
                    // markers: true,
                },
            }
        ).from(trigger, {
            delay: delay,
            opacity: 0,
            scale: 0.2,
            duration: 0.4,
            ease: 'power1.inOut'
        });
    });

    const slideInTriggers = document.querySelectorAll('.an_slide-in');

    slideInTriggers.forEach((trigger) => {
        const delay = trigger.dataset.delay || 0;
        const direction = trigger.dataset.direction || 'right';

        let xDir = 0;
        let yDir = 0;
        switch (direction) {
            case "left":
                xDir = 50;
                break;
            case "right":
                xDir = -50;
                break;
            case "top":
                yDir = -50;
                break;
            case "bottom":
                yDir = 50;
                break;
        }
        gsap.timeline(
            {
                scrollTrigger: {
                    trigger: trigger,
                    start: 'top 95%',
                    // markers: true,
                },
            }
        ).from(trigger, {
            delay: delay,
            opacity: 0,
            x: xDir,
            y: yDir,
            duration: 0.4,
            ease: 'power1.inOut'
        });
    });

    const rotateInTriggers = document.querySelectorAll('.an_rotate-in');

    rotateInTriggers.forEach((trigger) => {
        const delay = trigger.dataset.delay || 0;

        gsap.timeline(
            {
                scrollTrigger: {
                    trigger: trigger,
                    start: 'top 95%',
                    // markers: true,
                },
            }
        ).from(trigger, {
            delay: delay,
            opacity: 0,
            scale: 0.2,
            rotation: -180,
            x: 20,
            duration: 0.4,
            ease: 'power1.inOut'
        });
    });

    const opacityTriggers = document.querySelectorAll('.an_opacity-in');

    opacityTriggers.forEach((trigger) => {
        const delay = trigger.dataset.delay || 0;

        gsap.timeline(
            {
                scrollTrigger: {
                    trigger: trigger,
                    start: 'top 95%',
                    // markers: true,
                },
            }
        ).from(trigger, {
            delay: delay,
            opacity: 0,
            duration: 0.4,
            ease: 'power1.inOut'
        });
    });

    const listTriggers = document.querySelectorAll('.an_list_appear');

    listTriggers.forEach((trigger) => {
        const delay = parseFloat(trigger.dataset.delay) || 0;
        const direction = trigger.dataset.direction || 'right';
        const items = trigger.querySelectorAll('li');

        let xDir = 0;
        let yDir = 0;
        switch (direction) {
            case "left":
                xDir = 20;
                break;
            case "right":
                xDir = -20;
                break;
            case "top":
                yDir = -20;
                break;
            case "bottom":
                yDir = 20;
                break;
        }


        items.forEach((item, index) => {

            gsap.timeline(
                {
                    scrollTrigger: {
                        trigger: trigger,
                        start: 'top 95%',
                        // markers: true,
                    },
                }
            ).from(item, {
                delay: (index * 0.1) + delay,
                opacity: 0,
                x: xDir,
                y: yDir,
                duration: 0.4,
                ease: 'power1.inOut'
            });
        })

    });


    // containers.forEach((container) => {
    //     let text = container.querySelector(".an_text-appear");

    //     // SplitText.create(text, {
    //     //     type: "words,lines",
    //     //     mask: "lines",
    //     //     linesClass: "line",
    //     //     autoSplit: true,
    //     //     onSplit: (instance) => {
    //     //         console.log("split")
    //     //         return gsap.from(instance.lines, {
    //     //             yPercent: 120,
    //     //             stagger: 0.1,
    //     //             scrollTrigger: {
    //     //                 trigger: container,
    //     //                 markers: true,
    //     //                 scrub: true,
    //     //                 start: "clamp(top center)",
    //     //                 end: "clamp(bottom center)"
    //     //             }
    //     //         });
    //     //     }
    //     // });
    // });

    // const sections = document.querySelectorAll('section');

    // sections.forEach((section) => {
    //     const runAnimation = gsap.timeline({
    //         scrollTrigger: {
    //             trigger: section,
    //             start: 'top top',
    //             // end: 'bottom bottom',
    //             scrub: true,
    //             markers: false,
    //         },
    //     });
    //     runAnimation.add([
    //         gsap.fromTo(`.an_parallax-image`, {
    //             y: -50,
    //         }, {
    //             y: 50
    //         }),
    //     ]);
    // });

    const footer = document.querySelector('.footer-container');
    const footerAnimation = gsap.timeline({
        scrollTrigger: {
            trigger: footer,
            start: 'top bottom',
            end: 'bottom bottom',
            scrub: true,
            // markers: true,
        },
    });
    footerAnimation.add([
        gsap.fromTo(`footer`, {
            y: '50%',
        }, {
            y: '0%'
        }),
    ]);


});

function wrapWordsWithSpan(htmlString) {
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = htmlString;

    function processNode(node) {
        if (node.nodeType === Node.TEXT_NODE && node.textContent.trim() !== '') {
            const words = node.textContent.split(/\s+/).filter(word => word.trim() !== '');
            const fragment = document.createDocumentFragment();

            words.forEach((word, index) => {
                const span = document.createElement('span');
                span.className = 'inline-block';
                span.textContent = word;
                fragment.appendChild(span);

                // Add a space after each word except the last one
                if (index < words.length - 1) {
                    fragment.appendChild(document.createTextNode(' '));
                }
            });

            node.parentNode.replaceChild(fragment, node);
        }
    }

    // Only process direct child text nodes (not nested ones)
    Array.from(tempDiv.childNodes).forEach(node => {
        if (node.nodeType === Node.TEXT_NODE) {
            processNode(node);
        }
    });

    return tempDiv.innerHTML;
}