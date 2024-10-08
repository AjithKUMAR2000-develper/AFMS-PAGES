<footer>
  <div class="container">
  <div class="footer-container">
    <div class="footer-column">
      <h3>About us</h3>
      <ul>
        <li><a href="#">Case Studies</a></li>
        <li><a href="#">Blogs</a></li>
      </ul>
    </div>
    
    <div class="footer-column">
      <h3>Our Services</h3>
      <ul>
        <li><a href="#">Technical Services</a></li>
        <li><a href="#">Soft Services</a></li>
        <li><a href="#">MEP Engineering</a></li>
        <li><a href="#">Micro Project Services</a></li>
        <li><a href="#">Audits</a></li>
        <li><a href="#">Tech Platform</a></li>
        <li><a href="#">IoT Solutions</a></li>
        <li><a href="#">RECD</a></li>
        <li><a href="#">EV & Solar</a></li>
        <li><a href="#">HVAC Solutions</a></li>
      </ul>
    </div>
    
    <div class="footer-column">
      <h3>Follow Us On</h3>
      <div class="social-icons">
        <a href="#"><img src="Images/icons8-linkedin-64.png" alt="LinkedIn"></a>
        <a href="#"><img src="Images/Instagram-img.png" alt="Instagram"></a>
        <a href="#"><img src="Images/Email-icon.png" alt="Email"></a>
      </div>
      <button class="subscribe-button">Subscribe</button>
    </div>
  </div>
  </div>
</footer>


<script>
    // counter section start
    function animateCounter(element, target) {
    let count = 0;
    // Adjust speed based on screen size (faster on smaller screens)
    const screenSize = window.innerWidth;
    const speed = screenSize < 768 ? 100 : 200; // Faster on mobile

    const increment = target / speed;  // Adjust this value for smoother or faster counting

    const updateCounter = () => {
        count += increment;
        if (count >= target) {
            element.textContent = target;
        } else {
            element.textContent = Math.ceil(count);
            requestAnimationFrame(updateCounter);
        }
    };
    
    updateCounter();
}

// Wait until the DOM content is fully loaded before running the script
document.addEventListener('DOMContentLoaded', () => {
    const numbers = document.querySelectorAll('.number');
    
    numbers.forEach(number => {
        const target = +number.getAttribute('data-target');
        animateCounter(number, target);
    });
});


</script>
<script>
    $(document).ready(function () {
    if ($(".customer-logos").length) {
        $(".customer-logos").slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    }
});



</script>
<script>
// JavaScript for tab switching
document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabPanels = document.querySelectorAll('.tab-panel');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons and panels
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanels.forEach(panel => panel.classList.remove('active'));

            // Add active class to clicked button and corresponding panel
            button.classList.add('active');
            const targetPanel = document.getElementById(button.getAttribute('data-tab'));
            targetPanel.classList.add('active');
        });
    });
});

</script>
<script>
    document.querySelector('.subscribe-button').addEventListener('click', function() {
  alert('Subscribed successfully!');
});

</script>
<script>
        let currentSlide = 1;
showSlide(currentSlide);

function showSlide(n) {
    let slides = document.getElementsByClassName("slide-1");
    let dots = document.getElementsByClassName("dot");
    
    if (n > slides.length) { 
        currentSlide = 1; 
    } else if (n < 1) { 
        currentSlide = slides.length; 
    } else {
        currentSlide = n;
    }

    // Hide all slides
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Remove the active class from all dots
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    // Show the current slide and set the active dot
    slides[currentSlide - 1].style.display = "block";
    dots[currentSlide - 1].className += " active";
}

    </script>
    <script>
        // JavaScript for button click functionality
document.querySelector('button').addEventListener('click', function() {
    alert('Button Clicked!');
});

    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>