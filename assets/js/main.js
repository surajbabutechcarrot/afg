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
        let isTransitioning = false;
        
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
        
        // Function to go to next slide with loop
        function nextSlide() {
            if (isTransitioning) return;
            isTransitioning = true;
            
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
            
            setTimeout(() => {
                isTransitioning = false;
            }, 300);
        }
        
        // Function to go to previous slide with loop
        function prevSlide() {
            if (isTransitioning) return;
            isTransitioning = true;
            
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
            
            setTimeout(() => {
                isTransitioning = false;
            }, 300);
        }
        
        // Add click event listeners to indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                if (isTransitioning) return;
                isTransitioning = true;
                
                currentSlide = index;
                updateCarousel();
                
                setTimeout(() => {
                    isTransitioning = false;
                }, 300);
            });
        });
        
        // Auto-play functionality with loop
        let autoPlayInterval;
        
        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                nextSlide();
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
        
        // Touch/swipe support for mobile
        let startX = 0;
        let endX = 0;
        
        carouselTrack.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });
        
        carouselTrack.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });
        
        function handleSwipe() {
            const threshold = 50;
            const diff = startX - endX;
            
            if (Math.abs(diff) > threshold) {
                if (diff > 0) {
                    nextSlide(); // Swipe left - next slide
                } else {
                    prevSlide(); // Swipe right - previous slide
                }
            }
        }
        
        // Handle window resize
        window.addEventListener('resize', () => {
            updateCarousel();
        });
        
        // Initialize carousel
        updateCarousel();
    }
});

// Employee Offers Carousel Functionality
document.addEventListener('DOMContentLoaded', function() {
    const offersCarousel = document.querySelector('.offers-carousel');
    if (offersCarousel) {
        const offersTrack = offersCarousel.querySelector('.offers-track');
        const indicators = offersCarousel.querySelectorAll('.carousel-indicators .indicator');
        const offerCards = offersTrack.querySelectorAll('.offer-card');
        
        console.log('Employee Offers Carousel initialized:', {
            carousel: offersCarousel,
            track: offersTrack,
            indicators: indicators.length,
            cards: offerCards.length
        });
        
        let currentSlide = 0;
        let totalSlides = offerCards.length;
        let isTransitioning = false;
        
        // Function to refresh carousel data
        function refreshCarouselData() {
            offerCards = offersTrack.querySelectorAll('.offer-card');
            totalSlides = offerCards.length;
            console.log('Carousel data refreshed:', {
                totalSlides,
                cards: offerCards.length
            });
        }
        
        // Function to initialize carousel dimensions
        function initializeCarousel() {
            // Refresh carousel data first
            refreshCarouselData();
            
            const containerWidth = offersCarousel.offsetWidth;
            const trackWidth = containerWidth * totalSlides;
            offersTrack.style.width = `${trackWidth}px`;
            
            // Dynamically create indicators if needed
            createIndicators();
            
            console.log('Carousel initialized:', {
                containerWidth,
                trackWidth,
                totalSlides
            });
        }
        
        // Function to create indicators dynamically
        function createIndicators() {
            const indicatorsContainer = offersCarousel.querySelector('.carousel-indicators');
            if (indicatorsContainer) {
                indicatorsContainer.innerHTML = '';
                for (let i = 0; i < totalSlides; i++) {
                    const indicator = document.createElement('span');
                    indicator.className = `indicator ${i === 0 ? 'active' : ''}`;
                    indicator.addEventListener('click', () => {
                        if (isTransitioning) return;
                        isTransitioning = true;
                        
                        console.log('Indicator clicked:', i);
                        currentSlide = i;
                        updateCarousel();
                        
                        setTimeout(() => {
                            isTransitioning = false;
                        }, 300);
                    });
                    indicatorsContainer.appendChild(indicator);
                }
            }
        }
        
        // Function to update carousel position
        function updateCarousel() {
            const containerWidth = offersCarousel.offsetWidth;
            const translateX = -currentSlide * containerWidth;
            offersTrack.style.transform = `translateX(${translateX}px)`;
            
            console.log('Carousel update:', {
                currentSlide,
                containerWidth,
                translateX,
                totalSlides
            });
            
            // Update indicators dynamically
            const indicators = offersCarousel.querySelectorAll('.carousel-indicators .indicator');
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === currentSlide);
            });
        }
        
        // Function to go to next slide with loop
        function nextSlide() {
            if (isTransitioning) return;
            isTransitioning = true;
            
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
            
            setTimeout(() => {
                isTransitioning = false;
            }, 300);
        }
        
        // Function to go to previous slide with loop
        function prevSlide() {
            if (isTransitioning) return;
            isTransitioning = true;
            
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
            
            setTimeout(() => {
                isTransitioning = false;
            }, 300);
        }
        
        // Add click event listeners to indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                if (isTransitioning) return;
                isTransitioning = true;
                
                currentSlide = index;
                updateCarousel();
                
                setTimeout(() => {
                    isTransitioning = false;
                }, 300);
            });
        });
        
        // Auto-play functionality with loop
        let autoPlayInterval;
        
        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                nextSlide();
            }, 5000); // Change slide every 5 seconds
        }
        
        function stopAutoPlay() {
            clearInterval(autoPlayInterval);
        }
        
        // Start auto-play
        startAutoPlay();
        
        // Pause auto-play on hover
        offersCarousel.addEventListener('mouseenter', stopAutoPlay);
        offersCarousel.addEventListener('mouseleave', startAutoPlay);
        
        // Touch/swipe support for mobile
        let startX = 0;
        let endX = 0;
        
        offersTrack.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });
        
        offersTrack.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });
        
        function handleSwipe() {
            const threshold = 50;
            const diff = startX - endX;
            
            if (Math.abs(diff) > threshold) {
                if (diff > 0) {
                    nextSlide(); // Swipe left - next slide
                } else {
                    prevSlide(); // Swipe right - previous slide
                }
            }
        }
        
        // Handle window resize
        window.addEventListener('resize', () => {
            updateCarousel();
        });
        
        // Initialize carousel
        updateCarousel();
    }
});













