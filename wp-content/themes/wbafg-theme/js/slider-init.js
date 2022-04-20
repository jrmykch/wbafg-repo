const swiper = new Swiper('.swiper', {

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    spaceBetween: 25,
    effect: "fade",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },


    });