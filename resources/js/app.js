import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.choice_first').addEventListener('click', () => {
        console.log('first');
    });
    document.querySelector('.choice_second').addEventListener('click', () => {
        console.log('second');
    });
});
