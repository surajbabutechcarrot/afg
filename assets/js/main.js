// document.body.innerHTML += "<a href='#' id='back-to-top' title=''></a>";
// const getBTTElm = document.getElementById('back-to-top');
// document.addEventListener('scroll', ev => {
//     if (window.scrollY > 150) {
//         getBTTElm.classList.add('visible');
//     } else {
//         getBTTElm.classList.remove('visible');
//     }
// });
// getBTTElm.addEventListener('click', e => {
//     e.preventDefault();
//     window.scrollTo({
//         top: 0,
//         behavior: 'smooth'
//     });
// })






// menu function

// const getBtn = document.querySelector('.mob-btn');
// console.log(getBtn);
// getBtn.addEventListener('click', e => {
//     document.querySelector('body').classList.toggle('show-menu');
// })


const getDropDown = document.getElementsByClassName('main-nav');
for ( div of getDropDown){
    var selectLi = div.getElementsByTagName('li');
    for ( li of selectLi){
       if (li.contains(li.querySelector('ul'))) {
        li.classList.add('submenu');
        li.innerHTML += "<i></i>";
        }
    }
}

const getDropDownClick = document.querySelectorAll('.main-nav i');
getDropDownClick.forEach((item) => {
    item.addEventListener('click', e => {
        e.target.parentNode.classList.toggle('open');
    })
})

// Events Carousel Functionality
document.addEventListener('DOMContentLoaded', function() {
    const eventsCarousel = document.querySelector('.events-carousel');
    if (eventsCarousel) {
        const carouselTrack = eventsCarousel.querySelector('.carousel-track');
        const indicators = eventsCarousel.querySelectorAll('.carousel-indicators .indicator');
        const eventCards = carouselTrack.querySelectorAll('.event-card');
        
        let currentSlide = 0;
        const totalSlides = eventCards.length;
        
        // Function to update carousel position
        function updateCarousel() {
            const cardWidth = eventCards[0].offsetWidth + 24; // width + gap
            const translateX = -currentSlide * cardWidth;
            carouselTrack.style.transform = `translateX(${translateX}px)`;
            
            // Update indicators
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === currentSlide);
            });
        }
        
        // Add click event listeners to indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentSlide = index;
                updateCarousel();
            });
        });
        
        // Auto-play functionality (optional)
        let autoPlayInterval;
        
        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            }, 5000); // Change slide every 5 seconds
        }
        
        function stopAutoPlay() {
            clearInterval(autoPlayInterval);
        }
        
        // Start auto-play
        startAutoPlay();
        
        // Pause auto-play on hover
        eventsCarousel.addEventListener('mouseenter', stopAutoPlay);
        eventsCarousel.addEventListener('mouseleave', startAutoPlay);
        
        // Handle window resize
        window.addEventListener('resize', () => {
            updateCarousel();
        });
        
        // Initialize carousel
        updateCarousel();
    }
});













