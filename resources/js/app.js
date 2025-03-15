import "./bootstrap";
import "../css/app.scss";
import.meta.glob(["../images/**", "../fonts/**"]);

import Chart from "chart.js/auto";

document.addEventListener("DOMContentLoaded", () => {
    const chartCanva = document.getElementById("chart");
    const DATA_COUNT = 12;
    const labels = [];
    for (let i = 0; i < DATA_COUNT; ++i) {
        labels.push(i.toString());
    }
    const datapoints = [
        0,
        20,
        20,
        60,
        60,
        120,
        180,
        120,
        125,
        105,
        110,
        170,
    ];
    const data = {
        labels: labels,
        datasets: [
            {
                label: '',
                data: datapoints,
                fill: false,
                tension: 0.4,
            }
        ],
    };
    const myChart = new Chart(chartCanva, {
        type: "line",
        data: data,
        options: {
            responsive: true,
            interaction: {
                intersect: false,
            },
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });

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
    offerCards.forEach(async (offerCard) => {
        const showBtn = offerCard.querySelector(".quick-view");
        const id = showBtn.dataset.id;
        const modal = offerCard.querySelector(".modal");
        if (showBtn === null) return;
//         showBtn.addEventListener("click", async() => {
//             // get url from meta
//             const api_url = window.api_url
//             const data = await(await fetch(`${api_url}/flights/${id}`)).json();
//             modal.querySelector(".title").textContent = data.title;
//             modal.querySelector(".carousel").innerHTML = data.photos.map((photo,index) => `<div id="item-${index+1}" class="carousel-item w-full"><img src="${photo.url}" class="skeleton  w-full aspect-video object-cover"></div>`).join("");
//             modal.querySelector(".slider-nav").innerHTML = data.photos.map((photo,index) => `<span data-id="item-${index + 1 }" class="slider-nev-item rounded-xl cursor-pointer"><img src="${photo.url}" class="skeleton  aspect-square object-cover w-full rounded-xl max-h-36"></span>`).join("");
//             modal.querySelector(".description").innerHTML = data.description;

//             const programHtml = data.programs.map((booking) => `
//             <div class="w-full packages">
//             <div class="flex rounded-t-xl px-6 py-3 pb-5 w-full from-yellow-600  bg-gradient-to-l to-yellow-500">
//         ${booking.is_economic?'<span class="pe-3 text-center font-semibold inline-block">'+await translate("index.Economy Program")+'</span><span class="border-e border-black-700"></span>':''}
//         <span class="px-3 text-center font-normal inline-block"><span class="font-block">${booking.seat_count}</span> ${await translate('index.Seats')}</span>
//         <span class="border-e border-black-700"></span>
//         <span class="px-3 text-center font-normal inline-block">${booking.have_meals?await translate('index.No Meals'):await translate('index.Meals included')}</span>
//         <span class="border-e border-black-700"></span>
//         <span class="ps-3 font-normal inline-block">${booking.hotelMecca.distance }} ${await translate('index.Meters from the Haram')}</span>
//         ${booking.is_recommended?'<span class="flex-1 w-full flex justify-end ps-3 font-normal inline-block"><img src="'+await asset('resources/images/medal.webp')+'" class="aspect-square h-full object-contain" alt="'+await translate('index.recommended')+'"></span>':''}</div><div class="-mt-3 relative">
//         <form action="${await route('checkout', booking.id)}" method="get">
//             <div class="relative z-10 flex items-stretch justify-between w-full text-lg px-6 py-4 bg-white border border-black-200 rounded-xl shadow-md">
//                 <div class="flex-1 h-full">
//                     <div class="flex w-full gap-x-3 mb-2">
//                         <div class="flex flex-1 gap-3 px-3">
//                             <img src="${await asset('resources/images/mekka-hotel.webp')}" class="aspect-square h-20" alt="${await translate('index.Hotel in')} ${await translate('index.Mecca')}">
//                             <div class="flex-1">
//                                 <span class="block text-sm mb-1 text-nowrap">${await translate('index.Hotel in')} <span class="font-bold">${ await translate('index.Mecca') }</span>:</span>
//                                 <span class="block px-3 py-2 text-xl font-black bg-emerald-300 rounded-xl w-fit mb-1">${ booking.hotelMecca.name }}</span>
//                                 <a data-photos="" class="show-photos hover:underline text-nowrap block text-xs w-fit">${await translate('index.View hotel photos')}</a>
//                             </div>
//                         </div>
//                         <div class="flex flex-1 gap-3 px-3">
//                             <img src="${ await asset('resources/images/media-hotel.webp') }" class="aspect-square h-20" alt="${await translate('index.Hotel in')} ${ await translate('index.Medina')}">
//                             <div class="flex-1">
//                                 <span class="block text-sm mb-1 text-nowrap">${await translate('index.Hotel in')} <span class="font-bold">${ await translate('index.Medina') }</span>:</span>
//                                 <span class="block px-3 py-2 text-xl font-black bg-emerald-300 rounded-xl w-fit mb-1">${ booking.hotelMedina.name }</span>
//                                 <a data-photos="" class="show-photos hover:underline text-nowrap block text-xs w-fit">${await translate('index.View hotel photos')}</a>
//                             </div>
//                         </div>
//                     </div>
//                     <hr class="my-3 opacity-30">
//                     <div class="flex justify-start flex-wrap items-center gap-3">
//                         <span class="underline w-fit underline-offset-3 text-nowrap">${await translate('index.Select room type')}:</span>
//                         ${booking.prices.map((price,index) => `
//                             <div class="h-auto w-fit">
//                                 <input onclick="${updateBookingcardPrice(booking.id)}" ${index==0?'checked':''} hidden required class="peer hidden room-type room-${booking.id}" data-price="${price.price}" data-old-price="${price.old_price}" value="${price.room.id}" type="radio" name="room" id="room-${price.room.id}">
//                                 <label for="room-${price.room.id}" class="peer-checked:bg-black-1000 border-black-300 peer-checked:text-white btn btn-outline w-full px-3 py-1 text-wrap text-base text-nowrap font-bold">${ price.room.name }</label>
//                             </div>`).join("")}
//                     </div>
//                 </div>
//                 <div class="flex flex-col justify-center items-start border-s border-black-200 ms-6 ps-6">
//                     <div class="w-full mb-6">
//                         <span class="block opacity-45 text-base font-bold line-through line-clamp-2 lining-nums"><span class="old-price-${ booking.id }">${booking.getLowestPrice().old_price}</span> ${await translate('index.dh')}</span>
//                         <span class="text-xl block font-black lining-nums"><span class="text-3xl price-${ booking.id }">${booking.getLowestPrice().price}</span> ${await translate('index.dh')}}${await translate('index.For a person')}</span>
//                         <span class="text-sm font-base block">(${await translate('index.Price varies depending on the size of the collection')}})</span>
//                     </div>
//                     <button type="submit" class="btn border-0 rounded-xl w-full from-yellow-600  bg-gradient-to-l to-yellow-500 shadow hover:shadow-md duration-300 text-nowrap shadow-yellow-700 hover:shadow-yellow-600 px-4 text-xl font-bein-black group duration-300 transition-colors cursor-pointer">
//                         <em class="text-base fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> ${await translate('index.Booook now')}
//                     </button>
//                 </div>
//             </div>
//         </form>
//         ${count(booking.discounts)? `
//             <input type="checkbox" class="peer hidden" id="group-discount" hidden>
//             <div class="overflow-hidden pt-5 -mt-36 w-fit flex flex-nowrap flex-col rounded-b-xl border border-black-200 text-base peer-checked:-mt-4 peer-checked:pt-3">
//                 <div class="p-3 pt-6 gap-y-3">
//                     ${booking.discounts.map(discount=>`
//                         <div class="flex items-center justify-between w-full text-sm">
//                             <span class="flex items-center flex-1">
//                                 <span class="text-base text-nowrap">${ discount.name }}</span>
//                             </span>    
//                             <span class="dots max-w-12 flex-1 border-b-2 mx-6 border-dotted border-blue-1000 h-full text-nowrap"></span>
//                             <span class="text-lg font-bold text-nowrap dicsount" data-value="{{$discount->value}}" data-type="${discount.type}">${getDiscountPrice(price.price,discount.value,discount.type)} ${await translate('index.dh')}</span>
//                         </div>
//                         `).join('')}
//                 </div>
//                 <div class="divider m-0 p-0 h-auto"></div>
//                 <label for="group-discount" class="from-yellow-400  bg-gradient-to-l to-yellow-300 px-6 w-full flex flex-nowrap text-nowrap flex-row justify-between items-center cursor-pointer">
//                     <span class="font-semibold">
//                         ${await translate('index.Group discounts available')}
//                     </span>
//                     <span class="w-full duration-300 text-nowrap  py-2 px-4 text-xl font-black group cursor-pointer">
//                         <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> ${await translate('index.push here')}
//                     </span>
//                 </label>
//             </div>
//         `:''}
//     </div>
// </div>


//             `).join("");
//             modal.querySelector(".programs").innerHTML = programHtml;

//             modal.showModal();
//             updateBookingcardPrice
//             modal.querySelectorAll(".slider").forEach((slider) => {
//                 slider.querySelectorAll(".slider-nev-item ").forEach((item) => {
//                     item.addEventListener("click", () => {
//                         const id = item.dataset.id;
//                         slider.querySelector("#" + id).scrollIntoView({
//                             behavior: "smooth",
//                             block: "nearest",
//                             inline: "nearest",
//                         });
//                     });
//                 });
//             });
//         });
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
    if(dashboard){
        const menuToggle = dashboard.querySelector(".menu-toggle");
        const dashboardSideMenu = dashboard.querySelector(".dashboard-side-menu");
        menuToggle.addEventListener("change", () => {
            if (menuToggle.checked) {
                dashboardSideMenu.classList.remove("closed");
            } else {
                dashboardSideMenu.classList.add("closed");
            }
        });
    }

    // Text editor
    const textEditor = document.querySelector("#text-editor");
    if(textEditor){
        textEditor.summernote({
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
    }
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
    const datatable = document.querySelectorAll(".datatable");
    datatable.forEach((datatable) => {
        let table = datatable.querySelector("table");
        // Sort
        let tableCols = table.querySelectorAll("thead th");
        tableCols.forEach((col, index) => {
            if (col.classList.contains("sortable")) {
                col.addEventListener("click", () => {
                    let rows = Array.from(table.rows).slice(1);
                    let ascending = table.dataset.order === "asc";
                    rows.sort((rowA, rowB) => {
                        let cellA = rowA.cells[index].textContent.trim();
                        let cellB = rowB.cells[index].textContent.trim();

                        return isNaN(cellA) || isNaN(cellB)
                            ? cellA.localeCompare(cellB) * (ascending ? 1 : -1)
                            : (cellA - cellB) * (ascending ? 1 : -1);
                    });
                    table.tBodies[0].append(...rows);
                    table.dataset.order = ascending ? "desc" : "asc";
                });
            }
        });
        // Search
        let search = datatable.querySelector(".search");
        search.addEventListener("keyup", () => {
            let query = search.value.toLowerCase();
            let rows = Array.from(table.rows).slice(1);
            rows.forEach((row) => {
                let cells = Array.from(row.cells);
                let match = cells.some((cell) =>
                    cell.textContent.toLowerCase().includes(query)
                );
                row.style.display = match ? "" : "none";
            });
        });
    });
});

function updateBookingcardPrice(bookingId){
    let room = document.querySelector(`.room-${bookingId}`);
    let price = event.target.getAttribute('data-price');
    let oldPrice = event.target.getAttribute('data-old-price');
    document.querySelector(`.price-${bookingId}`).innerText = price;
    document.querySelector(`.old-price-${bookingId}`).innerText = oldPrice;
    document.querySelector(`.flight-old-price`).innerText = oldPrice;
    document.querySelector(`.flight-price`).innerText = price;
};

async function translate(value) {
    return await (await fetch(`${api_url}/lang/${value}`)).json();
}

async function asset(value) {
    return await (await fetch(`${api_url}/asset/${value}`)).json();
}

async function route(value,id) {
    return await (await fetch(`${api_url}/route/${value}/${id}`)).json();
}