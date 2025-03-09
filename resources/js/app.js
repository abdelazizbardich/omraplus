import "./bootstrap";
import "../css/app.scss";
import.meta.glob(["../images/**", "../fonts/**"]);

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
    $(textEditor).summernote({
        tabsize: 4,
        height: 520,
        inheritPlaceholder: true,
        dialogsInBody: false,
        lang: getSummernoteLang(),
        toolbar: [
            ["style", ["style"]],
            ["font", ["bold", "underline", "clear"]],
            ["fontname", ["fontname"]],
            ["color", ["color"]],
            ["para", ["ul", "ol", "paragraph"]],
            ["table", ["table"]],
            ["insert", ["link", "picture"]],
            ["view", ["codeview", "help"]],
        ],
        fontNames: [
            "Arial",
            "Arial Black",
            "Comic Sans MS",
            "Courier New",
            "Bein black",
            "Bein normal",
            "Droid arabic kufi",
            "Droid arabic kufi black",
        ],
        fontNamesIgnoreCheck: [
            "Bein black",
            "Bein normal",
            "Droid arabic kufi",
            "Droid arabic kufi black",
        ],
    });
    function getSummernoteLang() {
        if (lang === "ar") {
            return "ar-AR";
        } else if (lang === "fr") {
            return "fr-FR";
        } else {
            return "en-US";
        }
    }

    // DataTable
    const datatable = document.querySelectorAll('.datatable');
    datatable.forEach(datatable => {
        let table = datatable.querySelector('table');
        // Sort
        let tableCols = table.querySelectorAll('thead th');
        tableCols.forEach((col, index) => {
            if (col.classList.contains('sortable')) {
                col.addEventListener('click', () => {
                    let rows = Array.from(table.rows).slice(1);
                    let ascending = table.dataset.order === "asc";
                    rows.sort((rowA, rowB) => {
                        let cellA = rowA.cells[index].textContent.trim();
                        let cellB = rowB.cells[index].textContent.trim();

                        return isNaN(cellA) || isNaN(cellB) ? cellA.localeCompare(cellB) * (ascending ? 1 : -1) : (cellA - cellB) * (ascending ? 1 : -1);
                    });
                    table.tBodies[0].append(...rows);
                    table.dataset.order = ascending ? "desc" : "asc";
                });
            }
        });
        // Search
        let search = datatable.querySelector('.search');
        search.addEventListener('keyup', () => {
            let query = search.value.toLowerCase();
            let rows = Array.from(table.rows).slice(1);
            rows.forEach(row => {
                let cells = Array.from(row.cells);
                let match = cells.some(cell => cell.textContent.toLowerCase().includes(query));
                row.style.display = match ? "" : "none";
            });
        });
    });
});
