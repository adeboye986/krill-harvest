import { gsap } from 'gsap';

export const initializeFloatingPouches = () => {
    const tweens = gsap.utils.toArray('[data-float]').map((pouch, index) => {
        return gsap.to(pouch, {
            y: index % 2 === 0 ? -6 : -4,
            duration: 4.8 + (index % 3) * 0.45,
            delay: 2.2 + index * 0.16,
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true,
        });
    });

    return () => tweens.forEach((tween) => tween.kill());
};

export const initializePointerDepth = () => {
    const cleanups = gsap.utils.toArray('[data-pointer-depth]').map((target) => {
        const surface = target.closest('[data-hero]') || target.parentElement;

        if (!surface) {
            return null;
        }

        const moveX = gsap.quickTo(target, 'x', { duration: 0.55, ease: 'power3.out' });

        const handleMove = (event) => {
            const bounds = surface.getBoundingClientRect();
            const progress = (event.clientX - bounds.left) / bounds.width - 0.5;

            moveX(progress * 12);
        };

        const handleLeave = () => moveX(0);

        surface.addEventListener('pointermove', handleMove);
        surface.addEventListener('pointerleave', handleLeave);

        return () => {
            surface.removeEventListener('pointermove', handleMove);
            surface.removeEventListener('pointerleave', handleLeave);
        };
    });

    return () => cleanups.filter(Boolean).forEach((cleanup) => cleanup());
};

export const initializeParallax = () => {
    const tweens = gsap.utils.toArray('[data-parallax]').map((element) => {
        return gsap.fromTo(
            element,
            { scale: 1.035 },
            {
                scale: 1,
                ease: 'none',
                scrollTrigger: {
                    trigger: element.parentElement,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: 0.8,
                },
            },
        );
    });

    return () => tweens.forEach((tween) => tween.kill());
};
