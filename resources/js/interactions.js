import { gsap } from 'gsap';

const initializeContactMessageCount = () => {
    const message = document.querySelector('[data-contact-message]');
    const count = document.querySelector('[data-message-count]');

    if (!message || !count || message.dataset.counterInitialized === 'true') {
        return;
    }

    const updateCount = () => {
        count.textContent = `${message.value.length}/500`;
    };

    message.dataset.counterInitialized = 'true';
    message.addEventListener('input', updateCount);
    updateCount();
};

const closeAccordion = (details, panel, immediate = false) => {
    gsap.killTweensOf(panel);

    if (immediate) {
        details.open = false;
        gsap.set(panel, { clearProps: 'height,opacity' });

        return;
    }

    gsap.to(panel, {
        height: 0,
        opacity: 0,
        duration: 0.28,
        ease: 'power2.inOut',
        onComplete: () => {
            details.open = false;
            gsap.set(panel, { clearProps: 'height,opacity' });
        },
    });
};

const initializeAccordions = () => {
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const accordions = [...document.querySelectorAll('[data-accordion]')];

    if (reducedMotion) {
        return;
    }

    accordions.forEach((details) => {
        const summary = details.querySelector('summary');
        const panel = details.querySelector('[data-accordion-panel]');

        if (!summary || !panel || details.dataset.accordionInitialized === 'true') {
            return;
        }

        details.dataset.accordionInitialized = 'true';

        summary.addEventListener('click', (event) => {
            event.preventDefault();

            if (details.open) {
                closeAccordion(details, panel);

                return;
            }

            accordions.forEach((accordion) => {
                if (accordion === details || !accordion.open) {
                    return;
                }

                const openPanel = accordion.querySelector('[data-accordion-panel]');

                if (openPanel) {
                    closeAccordion(accordion, openPanel, true);
                }
            });

            details.open = true;
            gsap.fromTo(
                panel,
                { height: 0, opacity: 0 },
                {
                    height: 'auto',
                    opacity: 1,
                    duration: 0.34,
                    ease: 'power2.out',
                    clearProps: 'height,opacity',
                },
            );
        });
    });
};

export const initializeInteractions = () => {
    initializeContactMessageCount();
    initializeAccordions();
};
