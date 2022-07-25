import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.choose_first').addEventListener('click', () => {
        console.log('first');
    });
    document.querySelector('.choose_second').addEventListener('click', () => {
        console.log('second');
    });
});
