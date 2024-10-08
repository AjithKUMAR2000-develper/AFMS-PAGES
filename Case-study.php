<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Studies</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
        }

        section.case-study-section {
            padding: 80px;
            background: linear-gradient(90deg, rgba(63, 25, 57, 1) 0%, rgba(115, 6, 97, 1) 100%);
        }

        .case-main-div {
            display: flex;
            flex-wrap: wrap;
        }

        .case-study-conten {
            width: 40%;
            display: grid;
        }

        .slider-section-2 {
            width: 60%;
            position: relative;
        }

        .case-study-conten h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #fff;
        }

        .case-study-conten p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #fff;
        }

        .read-case {
            padding: 7px 20px;
            color: white;
            text-decoration: none;
            transition: background 0.3s;
            width: 50%;
            text-align: center;
            height: 50px;
            font-size: 22px;
            border: 2px solid;
        }

        .read-blog:hover {
            background-color: #900090;
        }

        .slider-container {
            position: relative;
            overflow: hidden;
            max-width: 100%;
            height: 350px;
        }

        .slider-case {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide-case {
            min-width: 50%; /* Show two slides at a time on desktop */
            box-sizing: border-box;
            padding: 10px;
            height: 350px;
            position: relative;
        }

        .img-conent {
            background: rgb(0 0 0 / 22%);
            position: absolute;
            bottom: 0px;
            left: 10px;
            width: 85%;
            border-radius: 0px 0px 5px 5px;
            height: 120px;
            padding: 20px;
        }

        .slide-case img {
            width: 330px;
            height: 340px;
           
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        .img-conent p {
        color: #fff;
        font-size: 16px;
        font-weight: 700;
    }
        .img-conent a {
        color: #fff;
        text-decoration: none;
        background: #6A055A;
        padding: 10px 20px;
    }
        .slide-case img:hover {
            transform: scale(1.05);
        }

        /* Styling pagination */
        .slider-pagination {
            display: flex;
            justify-content: flex-end;
            color: #fff;
            position: absolute;
            bottom: -60px;
            right: 0px;
            font-size: 16px;
            font-weight: bold;
        }

        .case-pre, .case-next {
            font-size: 24px;
            color: #fff;
            cursor: pointer;
            padding: 10px;
        }
        span.pagnation-span-blog{

        }

        .overlay {
            position: absolute;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.45);
            top: 0;
            display: none;
            z-index: 10;
        }

        .overlay.active {
            display: block;
        }

        /* Responsive adjustments */
        @media (max-width: 800px) {
            .case-main-div {
                flex-direction: column;
                text-align: center;
            }

            .case-study-conten {
                width: 100%; /* Take full width on mobile */
                margin-bottom: 40px;
            }

            .slider-section-2 {
                width: 100%; /* Full width slider on mobile */
            }

            .slide-case {
                width: 100%; /* Show one slide at a time on mobile */
            }
            .img-conent {
                width: 95%;
                border-radius: 0px 0px 5px 5px;
                height: 120px;
                padding: 20px;
            }

            /* Center pagination for mobile */
            .slider-pagination {
                justify-content: center;
                bottom: -65px;
                right: 0;
            }

       

            .case-pre, .case-next {
                font-size: 18px;
            }

            a.read-case {
                width: 100%;
            }
            section.case-study-section {
            padding: 0;
            height: 730px;
        }
        }
        @media (max-width: 425px) {
            .slide-case {
                min-width: 88%;
            }
        }
        @media (max-width: 375px) {
            .slide-case {
                min-width: 100%;
            }
            .img-conent {
            width: 100%;
            border-radius: 0px 0px 5px 5px;
            height: 150px;
            padding: 20px;
        }
        }
    </style>
</head>
<body>
    <section class="case-study-section">
        <div class="container">
            <div class="case-main-div">
                <div class="case-study-conten">
                    <h2>Case Studies</h2>
                    <p>Explore how Apollo Facility Management has consistently delivered excellence across diverse sectors</p>
                    <a href="#" class="read-more-btn read-case">Read More</a>
                </div>

                <div class="slider-section-2">
                    <div class="slider-container">
                        <div class="slider-case">
                            <div class="slide-case">
                                <img src="Images/dr-reddy-laboratories-17.png" alt="Case Study 1">
                                <div class="img-conent">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="slide-case">
                                <img src="Images/dr-reddy-laboratories-17.png" alt="Case Study 2">
                                <div class="img-conent">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="slide-case">
                                <img src="Images/dr-reddy-laboratories-17.png" alt="Case Study 3">
                                <div class="img-conent">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="slide-case">
                                <img src="Images/dr-reddy-laboratories-17.png" alt="Case Study 4">
                                <div class="img-conent">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="slide-case">
                                <img src="Images/dr-reddy-laboratories-17.png" alt="Case Study 5">
                                <div class="img-conent">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="slide-case">
                                <img src="Images/dr-reddy-laboratories-17.png" alt="Case Study 6">
                                <div class="img-conent">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-pagination">
                        <span class="prev case-pre">&#10094;</span>
                        <span id="pagination-number" class=" pagnation-span-blog">1/3</span> <!-- Updated for 3 pages -->
                        <span class="next case-next">&#10095;</span>
                    </div>

                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const slider = document.querySelector('.slider-case');
        const slides = document.querySelectorAll('.slide-case');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        const paginationNumber = document.getElementById('pagination-number');

        let currentIndex = 0;
        const slideCount = slides.length;
        const slidesToShow = 2; // Number of slides to show at once

        // Function to update pagination display
        function updatePagination() {
            const currentPage = Math.floor(currentIndex / slidesToShow) + 1; // 1-based index
            const totalPages = Math.ceil(slideCount / slidesToShow); // Total pages
            paginationNumber.textContent = `${currentPage}/${totalPages}`;
        }

        // Function to show the slides based on the current index
        function showSlides(index) {
            currentIndex = index;
            slider.style.transform = `translateX(${-Math.floor(currentIndex / slidesToShow) * 100}%)`; // Move slider based on index
            updatePagination(); // Update pagination when slide changes
        }

        // Event listeners for manual controls
        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                showSlides(currentIndex - slidesToShow);
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentIndex < slideCount - slidesToShow) {
                showSlides(currentIndex + slidesToShow);
            }
        });

        // Initial pagination setup
        updatePagination();
    </script>
</body>
</html>
