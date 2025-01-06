<style>
    .navbar {
        transition: background-color 0.3s ease;
        background-color: transparent;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    .navbar.scrolled {
        background-color: #a9785c;
        color: #ffffff;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .navbar.scrolled .nav-link,
    .navbar.scrolled {
        color: #fff;
    }

    .navbar.scrolled .contact-btn {
        border-color: #ffffff;
        color: #ffffff;
    }

    .navbar-nav .nav-link {
        position: relative;
        color: #333;
        margin-left: 25px;
        transition: color 0.3s ease;
    }

    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 100%;
        height: 2px;
        background-color: #000;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s ease;
    }

    .navbar-nav .nav-link.active::after {
        transform: scaleX(1);
    }

    .navbar-nav .nav-link.active {
        color: #000;
    }
</style>
<header>
    <nav class="navbar navbar-expand-xl navbar-light py-2">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/company-logo/logo.svg" alt="Company Logo" class="img-fluid">
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
             
                    <li class="nav-item">
                        <a class="nav-link" id="homeid" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="homeid" href="about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="servicesid" href="services.php">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="testimonialsid" href="testimonials.php">Testimonials</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="galleryid" href="gallery.php">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="planyoursurgeryid" href="plan-your-surgery.php">Plan Your Surgery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="planyoursurgeryid" href="blog.php">Blog</a>
                    </li>

                </ul>

                <button class="contact-btn" id="contactid" role="button">Contact</button>

            </div>


        </div>
    </nav>
</header>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbar = document.querySelector(".navbar");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    });

    // activation link

    document.addEventListener("DOMContentLoaded", function () {
        const navbarLinks = document.querySelectorAll(".nav-link");
        const sections = document.querySelectorAll("section"); 

        function activateLink() {
            let scrollPosition = window.scrollY + 200; 
            navbarLinks.forEach(link => {
                link.classList.remove("active");
            });

            sections.forEach((section) => {
                const id = section.getAttribute("id");
                const link = document.querySelector(`.nav-link[href="#${id}"]`);

                if (
                    section.offsetTop <= scrollPosition &&
                    section.offsetTop + section.offsetHeight > scrollPosition
                ) {
                    link.classList.add("active");
                }
            });
        }

        window.addEventListener("scroll", activateLink);
    });


</script>