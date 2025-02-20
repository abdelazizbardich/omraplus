import "./bootstrap";
import "../css/app.scss";
import.meta.glob(["../images/**", "../fonts/**"]);

import Quill from "quill";

document.addEventListener("DOMContentLoaded", () => {
    const carousels = document.querySelectorAll(".carousel-container");
    carousels.forEach((carouselContainer) => {
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
    offerCards.forEach((offerCard) => {
        const showBtn = offerCard.querySelector(".quick-view");
        const modal = offerCard.querySelector(".modal");
        if (showBtn === null) return;
        showBtn.addEventListener("click", () => {
            modal.showModal();
        });
    });

    document.querySelectorAll(".slider").forEach((slider) => {
        slider.querySelectorAll(".slider-nev-item ").forEach((item) => {
            item.addEventListener("click", () => {
                const id = item.dataset.id;
                slider.querySelector("#" + id).scrollIntoView({
                    behavior: "smooth",
                    block: "nearest",
                    inline: "nearest",
                });
            });
        });
    });
    // Dashboard menu toggler
    const dashboard = document.querySelector(".dashboard");
    const menuToggle = dashboard.querySelector(".menu-toggle");
    const dashboardSideMenu = dashboard.querySelector(".dashboard-side-menu");
    menuToggle.addEventListener("change", () => {
        if (menuToggle.checked) {
            dashboardSideMenu.classList.remove("closed");
        } else {
            dashboardSideMenu.classList.add("closed");
        }
    });

    // Text editor
    const textEditor = document.querySelector("#text-editor");
    console.log("textEditor", textEditor);
    const quill = new Quill(textEditor, {
        theme: "snow",
        readOnly: false,
        formats: [
            "bold",
            "italic",
            "underline",
            "strike",
            "color",
            "background",
            "align",
            "list",
            "indent",
            "link",
            "image",
            "header",
            "direction",
        ],
        modules: {
            toolbar: [
                [{ 'direction': 'rtl' }],
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'align': [] }],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                [{ 'indent': '-1' }, { 'indent': '+1' }],
                ['link', 'image'],
                ['clean']
            ],
            clipboard: {
                matchVisual: false,
            },
            history: {
                delay: 2000,
                maxStack: 500,
                userOnly: true
            }

        },
        debug: "info",
        strict: true,
        bounds: document.body,
        scrollingContainer: document.body,
        history: {
            delay: 2000,
            maxStack: 500,
            userOnly: true
        },
    });
});
