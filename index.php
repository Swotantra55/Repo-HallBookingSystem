<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Booking System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="HBS.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-1.5 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand fe-5 fw-bold fs-3" href="index.php">Hall Booking System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Halls</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact us</a>
        </li>
      </ul>
      <div class="d-flex">
       <a href="login.html" class="btn btn-outline-dark me-lg-2 me-3 shadow-none link-primary">Login</a>
        <a href="register.php" class="btn btn-outline-dark shadow-none link-primary">Register</a>
      </div>
    </div>
  </div>
</nav>

  <div class="container fluid">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/hall1.jpg"  class="w-100 img-fluid"/>
        </div>
        <!-- <div class="swiper-slide">
          <img src="images/hall3.png"  class="h-50 w-100 d-block img-fluid"/>
        </div> -->
        <div class="swiper-slide">
          <img src="images/conference.png" class="w-100 img-fluid"/>
        </div>
      </div>
    </div>
  </div>


    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Search Halls Availability</h5>
                <form action="">
                    <div class="row align-items-end">
                        <div class="col-lg-4">
                            <label class="form-label" style="font-weight: 500;">City</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3">
                        <label class="form-label" style="font-weight: 500;">Number of guests</label>
                        <select class="form-select shadow-none">
                        <option selected>Open this select menu</option>
                        <option value="50">less than 50</option>
                        <option value="100">less than 100</option>
                        <option value="150">less than 150</option>
                        <option value="200">less than 200</option>
                        </select>
                        </div>
                        <div class="col-lg-3">
                        <label class="form-label" style="font-weight: 500;">Occassion</label>
                        <select class="form-select shadow-none">
                        <option selected>Select occasion</option>
                        <option value="Aniversary">Anniversary</option>
                        <option value="Birthday Celebration">Birthday Celebration</option>
                        <option value="Coonference">conference</option>
                        <option value="Meeting">Meeting</option>
                        </select>
                        </div>
                        <div class="col-lg-1">
                            <button type="submit" class="btn btn-light text-dark shadow-none custom-bg">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section id="questions" class="p-5">
      <div class="container">
        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
        <div class="accordion accordion-flush" id="questions">
          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-one"
              >
                Where exactly are you located?
              </button>
            </h2>
            <div
              id="question-one"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                beatae fuga animi distinctio perspiciatis adipisci velit maiores
                totam tempora accusamus modi explicabo accusantium consequatur,
                praesentium rem quisquam molestias at quos vero. Officiis ad
                velit doloremque at. Dignissimos praesentium necessitatibus
                natus corrupti cum consequatur aliquam! Minima molestias iure
                quam distinctio velit.
              </div>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-two"
              >
                How much does it cost to attend?
              </button>
            </h2>
            <div
              id="question-two"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                beatae fuga animi distinctio perspiciatis adipisci velit maiores
                totam tempora accusamus modi explicabo accusantium consequatur,
                praesentium rem quisquam molestias at quos vero. Officiis ad
                velit doloremque at. Dignissimos praesentium necessitatibus
                natus corrupti cum consequatur aliquam! Minima molestias iure
                quam distinctio velit.
              </div>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-three"
              >
                What do I need to Know?
              </button>
            </h2>
            <div
              id="question-three"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                beatae fuga animi distinctio perspiciatis adipisci velit maiores
                totam tempora accusamus modi explicabo accusantium consequatur,
                praesentium rem quisquam molestias at quos vero. Officiis ad
                velit doloremque at. Dignissimos praesentium necessitatibus
                natus corrupti cum consequatur aliquam! Minima molestias iure
                quam distinctio velit.
              </div>
            </div>
          </div>
          <!-- Item 4 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-four"
              >
                How Do I sign up?
              </button>
            </h2>
            <div
              id="question-four"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                beatae fuga animi distinctio perspiciatis adipisci velit maiores
                totam tempora accusamus modi explicabo accusantium consequatur,
                praesentium rem quisquam molestias at quos vero. Officiis ad
                velit doloremque at. Dignissimos praesentium necessitatibus
                natus corrupti cum consequatur aliquam! Minima molestias iure
                quam distinctio velit.
              </div>
            </div>
          </div>
          <!-- Item 5 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-five"
              >
                Do you help me select a hall?
              </button>
            </h2>
            <div
              id="question-five"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                beatae fuga animi distinctio perspiciatis adipisci velit maiores
                totam tempora accusamus modi explicabo accusantium consequatur,
                praesentium rem quisquam molestias at quos vero. Officiis ad
                velit doloremque at. Dignissimos praesentium necessitatibus
                natus corrupti cum consequatur aliquam! Minima molestias iure
                quam distinctio velit.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- our halls -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold my-3">OUR HALLS</h2>
    
<div class="container mt-4">
    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
           <img class="card-img-top" src="images/hall1.jpg" >
           <div class="card-body">

              <h5 class="card-title">Hall Name</h5>
              <h6 class="mb-4">Rs. 1000 per person</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ln-base">Wi-Fi</span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ln-base">Sound System</span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ln-base">Air Conditioner</span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <i class="bi bi-star-fill text-warning"></i>
                <span>4.6</span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
               <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
               <a href="#" class="btn btn-sm btn-outline-dark">More details</a>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
           <img class="card-img-top" src="images/hall1.jpg" >
           <div class="card-body">
              <h5 class="card-title">Hall Name</h5>
              <h6 class="mb-4">Rs. 1000 per person</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ln-base">Wi-Fi</span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ln-base">Sound System</span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ln-base">Air Conditioner</span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <i class="bi bi-star-fill text-warning"></i>
                <span>4.6</span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
               <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
               <a href="#" class="btn btn-sm btn-outline-dark">More details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
           <img class="card-img-top" src="images/hall1.jpg" >
           <div class="card-body">
              <h5 class="card-title">Hall Name</h5>
              <h6 class="mb-4">Rs. 1000 per person</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ln-base">Wi-Fi</span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ln-base">Sound System</span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ln-base">Air Conditioner</span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <i class="bi bi-star-fill text-warning"></i>
                <span>4.6</span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
               <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
               <a href="#" class="btn btn-sm btn-outline-dark">More details</a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-12 text-center my-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Halls >></a>
        </div>
      </div>
  </div>

  <!--Testimonials-->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold my-3">TESTIMONIALS</h2>

  <div class="container mt-4">
      <div class="swiper Swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-light p-4">
          <div class="profile d-flex flex-column align-items-center justify-content-end mb-3">
            <img src="images/hall1.jpg" style="width:300px;">
            <h6 class="m-0 mt-3">Random User</h6>
          </div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur nesciunt recusandae aspernatur odit
             quo dolore eaque ipsam dolorem. 
             
          </p>
          <div class="rating text-center">
              <h6 class="mb-1">Rating</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <span>4.6</span>
          </div>
        </div>

        <div class="swiper-slide bg-light p-4">
          <div class="profile d-flex flex-column align-items-center justify-content-end mb-3">
            <img src="images/hall1.jpg" style="width:300px;">
            <h6 class="m-0 mt-3">Random User</h6>
          </div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur nesciunt recusandae aspernatur odit
             quo dolore eaque ipsam dolorem. 
          </p>
          <div class="rating text-center">
              <h6 class="mb-1">Rating</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <span>4.6</span>
          </div>
        </div>

        <div class="swiper-slide bg-light p-4">
          <div class="profile d-flex flex-column align-items-center justify-content-end mb-3">
            <img src="images/hall1.jpg" style="width:300px;">
            <h6 class="m-0 mt-3">Random User</h6>
          </div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur nesciunt recusandae aspernatur odit
             quo dolore eaque ipsam dolorem. 
          </p>
          <div class="rating text-center">
              <h6 class="mb-1">Rating</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <span>4.6</span>
          </div>
        </div>

      </div>

      <div class="swiper-pagination mb-3"></div>
    </div>
  </div>

  <!--Reach Us-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold my-3">REACH US</h2>
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8 col-md-8 p-4 pt-0 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14064.441540947919!2d83.96190128183343!3d28.203958671419652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995956b63dafedb%3A0x87bfe649235d6900!2sSimalchaur!5e0!3m2!1sen!2snp!4v1655823066881!5m2!1sen!2snp"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4 ">
        <div class="bg-white mb-3">
          <h5>Call Us</h5>
          <a href="tel: +9779846066632" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>
          +977 9846066632</a>
          <br>
          <a href="tel: +9779846066632" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>
          +977 9846066632</a>
        </div>

        <div class="bg-white">
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block mb-3">
           <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-twitter me-1"></i>Twitter
           </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
           <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-facebook me-1"></i>Facebook
           </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
           <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-instagram me-1"></i>Instagram
           </span>
          </a>
        </div>

      </div>
    </div>
  </div>



 <!-- Footer -->
 <div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="fw-bold fs-3 mb-2">
      Hall Booking System
      </h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea fugiat voluptatum commodi 
        iure eaque similique hic ipsa sed dolore, eius porro dolores id, natus soluta?</p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Halls</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a><br>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none ">
        <i class="bi bi-twitter me-1"></i>Twitter
      </a>
      <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none ">
        <i class="bi bi-facebook me-1"></i>Facebook
      </a>
      <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none ">
        <i class="bi bi-instagram me-1"></i>Instagram
      </a>
    </div>
  </div>
 </div>
 <!-- <div class="container">
 <h6 class="text-center bg-dark text-white p-3 m-0">Designed and developed by Hall Booking System</h6>
 </div> -->
 

        <footer class="p-3 bg-dark text-white text-center position-relative">
      <div class="container">
        <p class="lead">Copyright &copy; 2022 Hall Booking System</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-3">
          <i class="bi bi-arrow-up-circle text-white h1"></i>
        </a>
      </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                display: 3500,
                disableOnInteraction: false,
            }
        });

        var swiper = new Swiper(".Swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        }
      });
        </script>
</body>
</html>