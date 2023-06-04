(() => {
    const gifImage = `${window.location.origin}/assets/therock.gif`;
    const canvas = document.createElement('canvas');
    const context = canvas.getContext('2d');
    const image = new Image();

    image.addEventListener('load', () => {
        canvas.width = image.width;
        canvas.height = image.height;

        context.font = 'normal 16.6px Consolas';
        context.fillStyle = '#fff';
        context.textBaseline = 'middle';
        context.strokeStyle = '#000';
        context.textAlign = 'left';
        context.lineWidth = 3;

        context.strokeText('Welcome to the imagebin', 110, 180);
        context.fillText('Welcome to the imagebin', 110, 180);

        context.strokeText('God are watching you 🔫', 133, 210);
        context.fillText('God are watching you 🔫', 133, 210);

        context.font = 'normal 11px Consolas';

        console.log('%c+', `font-size: 1px; padding: ${image.height/2}px ${image.width/2}px; background: url(${canvas.toDataURL()}), url(${gif}); background-repeat: no-repeat; background-size: ${image.width}px ${image.height}px; color: transparent;`);
    });
    image.src = gifImage;
})();