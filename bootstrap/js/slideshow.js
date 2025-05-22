let slideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length - 1; // Kurangi 1 karena duplikat

function updateSlides() {
    slides.forEach((slide, index) => {
        slide.classList.remove('active', 'next', 'previous');

        // Tentukan status slide berdasarkan slideIndex
        if (index === slideIndex) {
            slide.classList.add('active'); // Slide aktif (tengah)
        } else if (index === (slideIndex + 1) % totalSlides) {
            slide.classList.add('next'); // Slide berikutnya (kanan)
        } else {
            slide.classList.add('previous'); // Slide lainnya (kembali ke kanan)
        }
    });
}

function showSlides() {
    slideIndex++;
    if (slideIndex >= totalSlides) {
        slideIndex = 0;
    }
    updateSlides();
}

// Set slide awal
updateSlides();

// Ganti slide setiap 3 detik
setInterval(showSlides, 3000);