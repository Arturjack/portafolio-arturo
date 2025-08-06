document.addEventListener('DOMContentLoaded', function () {
    const totalImages = 7;

    document.addEventListener('keydown', function (e) {
        const currentHash = window.location.hash;
        const match = currentHash.match(/^#image(\d{1,2})$/); // Solo del 1 al 99

        if (!match) return;

        let currentImageNumber = parseInt(match[1], 10);
        let nextImageNumber;

        switch (e.key) {
            case 'ArrowRight':
                e.preventDefault();
                nextImageNumber = currentImageNumber === totalImages ? 1 : currentImageNumber + 1;
                break;

            case 'ArrowLeft':
                e.preventDefault();
                nextImageNumber = currentImageNumber === 1 ? totalImages : currentImageNumber - 1;
                break;

            case 'Escape':
                e.preventDefault();
                window.location.hash = '#';
                return;
        }

        window.location.hash = `#image${nextImageNumber}`;
    });

    function preloadImages() {
        for (let i = 1; i <= totalImages; i++) {
            const img = new Image();
            img.src = `/images/reconocimientos/${i}.jpg`;
        }
    }

    window.addEventListener('load', preloadImages);
});
