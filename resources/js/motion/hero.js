import { gsap } from 'gsap';

const animateIfPresent = (timeline, targets, from, to, position) => {
    if (!targets || targets.length === 0) {
        return;
    }

    timeline.fromTo(targets, from, to, position);
};

export const initializeHeroSequences = () => {
    return gsap.utils.toArray('[data-hero]').map((hero) => {
        const eyebrow = hero.querySelectorAll('[data-hero-eyebrow]');
        const masks = hero.querySelectorAll('[data-heading-mask]');
        const headingLines = hero.querySelectorAll('[data-heading-line]');
        const copy = hero.querySelectorAll('[data-hero-copy]');
        const cta = hero.querySelectorAll('[data-hero-cta]');
        const features = hero.querySelectorAll('[data-hero-feature]');
        const media = hero.querySelectorAll('[data-hero-media]');
        const card = hero.querySelectorAll('[data-hero-card]');
        const pouches = [...hero.querySelectorAll('[data-hero-pouch]')];
        const standardPouches = pouches.filter((pouch) => !pouch.dataset.heroPouch);
        const frontPouches = pouches.filter((pouch) => pouch.dataset.heroPouch === 'front');
        const backPouches = pouches.filter((pouch) => pouch.dataset.heroPouch === 'back');
        const animatedElements = [
            ...eyebrow,
            ...headingLines,
            ...copy,
            ...cta,
            ...features,
            ...media,
            ...card,
            ...pouches,
        ];

        gsap.set(masks, { overflow: 'hidden' });

        const timeline = gsap.timeline({
            defaults: { ease: 'power3.out' },
            onComplete: () => {
                gsap.set(masks, { clearProps: 'overflow' });
                gsap.set(animatedElements, { clearProps: 'opacity,visibility,transform,willChange' });
            },
        });

        animateIfPresent(
            timeline,
            eyebrow,
            { autoAlpha: 0, y: 12 },
            { autoAlpha: 1, y: 0, duration: 0.48 },
            0,
        );
        animateIfPresent(
            timeline,
            headingLines,
            { autoAlpha: 0, yPercent: 110 },
            { autoAlpha: 1, yPercent: 0, duration: 0.78, stagger: 0.08 },
            '-=0.22',
        );
        animateIfPresent(
            timeline,
            copy,
            { autoAlpha: 0, y: 20 },
            { autoAlpha: 1, y: 0, duration: 0.58, stagger: 0.07 },
            '-=0.35',
        );
        const addCta = () => animateIfPresent(
            timeline,
            cta,
            { autoAlpha: 0, y: 16 },
            { autoAlpha: 1, y: 0, duration: 0.52 },
            '-=0.28',
        );
        const addFeatures = () => animateIfPresent(
            timeline,
            features,
            { autoAlpha: 0, y: 18 },
            { autoAlpha: 1, y: 0, duration: 0.52, stagger: 0.08 },
            '-=0.32',
        );

        if (hero.hasAttribute('data-hero-features-first')) {
            addFeatures();
            addCta();
        } else {
            addCta();
            addFeatures();
        }
        animateIfPresent(
            timeline,
            media,
            { autoAlpha: 0, scale: 1.035 },
            { autoAlpha: 1, scale: 1, duration: 0.72 },
            '-=0.35',
        );
        animateIfPresent(
            timeline,
            card,
            { autoAlpha: 0, y: 20 },
            { autoAlpha: 1, y: 0, duration: 0.66 },
            '-=0.46',
        );
        animateIfPresent(
            timeline,
            standardPouches,
            { autoAlpha: 0, y: 26, scale: 0.96 },
            { autoAlpha: 1, y: 0, scale: 1, duration: 0.86, stagger: 0.1 },
            '-=0.48',
        );
        animateIfPresent(
            timeline,
            frontPouches,
            { autoAlpha: 0, x: -24, y: 24, scale: 0.97 },
            { autoAlpha: 1, x: 0, y: 0, scale: 1, duration: 0.86 },
            '-=0.48',
        );
        animateIfPresent(
            timeline,
            backPouches,
            { autoAlpha: 0, x: 24, y: 24, scale: 0.97 },
            { autoAlpha: 1, x: 0, y: 0, scale: 1, duration: 0.86 },
            '-=0.72',
        );

        return timeline;
    });
};
