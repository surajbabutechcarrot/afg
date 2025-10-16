<!-- Bootstrap 5 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JavaScript -->
<script src="assets/js/main.js"></script>
<script>
// Custom JavaScript for Al-Futtaim Intranet
document.addEventListener('DOMContentLoaded', function() {
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Initialize popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
    
    // Carousel indicators functionality
    const indicators = document.querySelectorAll('.carousel-indicators .indicator');
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', function() {
            // Remove active class from all indicators
            indicators.forEach(ind => ind.classList.remove('active'));
            // Add active class to clicked indicator
            this.classList.add('active');
        });
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add hover effects to cards
    const cards = document.querySelectorAll('.hero-card, .division-card, .brand-assets-card, .handbook-card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Initialize Bootstrap dropdowns for Quick Access Icons
    const quickAccessDropdowns = document.querySelectorAll('.welcome-banner .navbar-icons .dropdown-toggle');
    quickAccessDropdowns.forEach(trigger => {
        // Initialize Bootstrap dropdown
        const dropdown = new bootstrap.Dropdown(trigger);
        
        // Add custom styling on show/hide
        trigger.addEventListener('show.bs.dropdown', function() {
            const menu = this.nextElementSibling.nextElementSibling;
            if (menu) {
                menu.classList.add('show');
            }
        });
        
        trigger.addEventListener('hide.bs.dropdown', function() {
            const menu = this.nextElementSibling.nextElementSibling;
            if (menu) {
                menu.classList.remove('show');
            }
        });
    });
});
</script>
