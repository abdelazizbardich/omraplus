import './bootstrap';
import '../css/app.css';
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

document.addEventListener("DOMContentLoaded", () => {
    const carousels = document.querySelectorAll(".carousel-container");
    carousels.forEach(carouselContainer=>{
        const carousel = carouselContainer.querySelector(".carousel");
        const prevBtn = carouselContainer.querySelector(".prev");
        const nextBtn = carouselContainer.querySelector(".next");
    
        let scrollAmount = 0;
        const itemWidth = 300 + 16; // Item width + gap
        const scrollMax = carousel.scrollWidth - carousel.offsetWidth;
    
        prevBtn.addEventListener("click", () => {
            scrollAmount += itemWidth;
            if (scrollAmount < 0) scrollAmount = 0;
            carousel.scrollTo({
                left: scrollAmount,
                behavior: "smooth",
            });
        });
    
        nextBtn.addEventListener("click", () => {
            scrollAmount -= itemWidth;
            if (scrollAmount > scrollMax) scrollAmount = scrollMax;
            carousel.scrollTo({
                left: scrollAmount,
                behavior: "smooth",
            });
        });
    });

    // Manage modals
    const offerCards = document.querySelectorAll(".offer-card");
    offerCards.forEach(offerCard => {
        const showBtn = offerCard.querySelector(".quick-view");
        const modal = offerCard.querySelector(".modal");
        if(showBtn === null) return;
        showBtn.addEventListener("click", () => {
            modal.showModal();
        });
    });

    document.querySelectorAll('.slider').forEach((slider)=>{
        slider.querySelectorAll('.slider-nev-item ').forEach(item=>{
            item.addEventListener('click', ()=>{
                const id =item.dataset.id;
                slider.querySelector('#'+id).scrollIntoView({ behavior: "smooth", block: "nearest", inline: "nearest" });
            });
        })
    });
});

