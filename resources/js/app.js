import { initializeInteractions } from './interactions';
import { initializeMotion } from './motion';

const initializeSite = () => {
    initializeInteractions();
    initializeMotion();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeSite, { once: true });
} else {
    initializeSite();
}
