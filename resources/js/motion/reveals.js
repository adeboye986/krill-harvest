import { gsap } from 'gsap';

const revealState = (element) => {
    const requestedDistance = Number(element.dataset.revealDistance || 30);
    const distance = window.matchMedia('(max-width: 767px)').matches
        ? Math.min(requestedDistance, 18)
        : requestedDistance;

    switch (element.dataset.reveal) {
        case 'left':
            return { autoAlpha: 0, x: -distance };
        case 'right':
            return { autoAlpha: 0, x: distance };
        case 'scale':
            return { autoAlpha: 0, scale: 0.97 };
        default:
            return { autoAlpha: 0, y: distance };
    }
};

export const initializeReveals = () => {
    gsap.utils.toArray('[data-reveal]').forEach((element) => {
        gsap.fromTo(element, revealState(element), {
            autoAlpha: 1,
            x: 0,
            y: 0,
            scale: 1,
            duration: 0.72,
            delay: Number(element.dataset.revealDelay || 0),
            ease: 'power3.out',
            clearProps: 'opacity,visibility,transform,willChange',
            scrollTrigger: {
                trigger: element,
                start: 'top 86%',
                once: true,
            },
        });
    });
};

export const initializeStaggers = () => {
    gsap.utils.toArray('[data-stagger]').forEach((group) => {
        const items = [...group.querySelectorAll('[data-stagger-item]')];

        if (items.length === 0) {
            return;
        }

        const requestedDistance = Number(group.dataset.staggerDistance || 22);
        const distance = window.matchMedia('(max-width: 767px)').matches
            ? Math.min(requestedDistance, 16)
            : requestedDistance;
        const interval = Number(group.dataset.staggerInterval || 0.1);
        const delay = Number(group.dataset.staggerDelay || 0);
        const timeline = gsap.timeline({
            delay,
            scrollTrigger: {
                trigger: group,
                start: 'top 86%',
                once: true,
            },
        });

        timeline.fromTo(
            items,
            { autoAlpha: 0, y: distance },
            {
                autoAlpha: 1,
                y: 0,
                duration: 0.62,
                stagger: interval,
                ease: 'power3.out',
                clearProps: 'opacity,visibility,transform,willChange',
            },
        );

        const images = items
            .map((item) => item.querySelector('[data-stagger-image]'))
            .filter(Boolean);

        if (images.length > 0) {
            timeline.fromTo(
                images,
                { scale: 1.04 },
                {
                    scale: 1,
                    duration: 0.9,
                    stagger: interval,
                    ease: 'power2.out',
                    clearProps: 'transform,willChange',
                },
                0,
            );
        }

        const captions = items
            .map((item) => item.querySelector('[data-stagger-caption]'))
            .filter(Boolean);

        if (captions.length > 0) {
            timeline.fromTo(
                captions,
                { autoAlpha: 0, y: 8 },
                {
                    autoAlpha: 1,
                    y: 0,
                    duration: 0.45,
                    stagger: interval,
                    ease: 'power2.out',
                    clearProps: 'opacity,visibility,transform,willChange',
                },
                0.24,
            );
        }
    });
};

export const initializeImageMasks = () => {
    gsap.utils.toArray('[data-image-mask]').forEach((container) => {
        const direction = container.dataset.imageMask || 'left';
        const delay = Number(container.dataset.imageMaskDelay || 0);
        const image = container.matches('img') ? container : container.querySelector('img');
        const clipPath = direction === 'right' ? 'inset(0 0 0 100%)' : 'inset(0 100% 0 0)';
        const timeline = gsap.timeline({
            delay,
            scrollTrigger: {
                trigger: container,
                start: 'top 84%',
                once: true,
            },
        });

        timeline.fromTo(
            container,
            { clipPath },
            {
                clipPath: 'inset(0 0% 0 0)',
                duration: 0.9,
                ease: 'power3.inOut',
                clearProps: 'clipPath,willChange',
            },
        );

        if (image) {
            timeline.fromTo(
                image,
                { scale: 1.04 },
                {
                    scale: 1,
                    duration: 1.05,
                    ease: 'power2.out',
                    clearProps: 'transform,willChange',
                },
                0,
            );
        }
    });
};
