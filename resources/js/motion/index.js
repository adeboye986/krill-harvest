import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import {
    initializeFloatingPouches,
    initializeParallax,
    initializePointerDepth,
} from './depth';
import { initializeHeroSequences } from './hero';
import {
    initializeImageMasks,
    initializeReveals,
    initializeStaggers,
} from './reveals';

gsap.registerPlugin(ScrollTrigger);

export const initializeMotion = () => {
    if (document.documentElement.dataset.motionInitialized === 'true') {
        return;
    }

    document.documentElement.dataset.motionInitialized = 'true';

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    document.documentElement.classList.add('motion-enhanced');
    ScrollTrigger.config({ ignoreMobileResize: true, limitCallbacks: true });

    const media = gsap.matchMedia();

    media.add('(prefers-reduced-motion: no-preference)', () => {
        initializeHeroSequences();
        initializeReveals();
        initializeStaggers();
    });

    media.add('(prefers-reduced-motion: no-preference) and (min-width: 768px)', () => {
        initializeImageMasks();
        const stopFloating = initializeFloatingPouches();
        const stopParallax = initializeParallax();

        return () => {
            stopFloating();
            stopParallax();
        };
    });

    media.add(
        '(prefers-reduced-motion: no-preference) and (min-width: 1024px) and (pointer: fine)',
        () => initializePointerDepth(),
    );

    const refresh = () => ScrollTrigger.refresh();

    window.addEventListener('load', refresh, { once: true });

    if (document.fonts?.ready) {
        document.fonts.ready.then(refresh);
    }
};
