const hoverDiv = document.getElementById('menu-btn');
const targetDiv = document.getElementById('menu-show');

hoverDiv.addEventListener('mouseenter', () => {
    targetDiv.style.display = 'flex';
});

targetDiv.addEventListener('mouseleave', () => {
    targetDiv.style.display = 'none';
});