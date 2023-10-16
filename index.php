<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel Booking - HOME</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <?php require('include/links.php') ?>
  <style>
    .availability-form {
      margin-top: -70px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }
  </style>
</head>

<!-- Navbar -->

<body class="bg-light">
  <?php require('include/header.php') ?>

  <!--Login Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i> User Login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none" id="exampleInputEmail1"
                aria-describedby="emailHelp" />
            </div>
            <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none" id="exampleInputEmail1"
                aria-describedby="emailHelp" />
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">
                Login
              </button>
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Register Model -->
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill fs-3 me-2"></i> User
              Registration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
              Note: Your details must be match your ID (Aadhar Card, Pan Card,
              Passport, Driving Licence stc.) that will be require during the
              check-in.
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none" />
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control shadow-none" />
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none" />
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control shadow-none" />
                </div>
                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none" />
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of birth</label>
                  <input type="date" class="form-control shadow-none" />
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none" />
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none" />
                </div>
              </div>
            </div>

            <div class="text-center my-1">
              <button type="submit" class="btn btn-dark shadow-none">
                Register
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Swiper -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/IMG_93127.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_99736.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_62045.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_55677.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_40905.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_15372.png" class="w-100 d-block" />
        </div>
      </div>
    </div>
  </div>

  <!-- check availability form -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h4 class="mb-4">Check Booking Availability</h4>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500">Check-in</label>
              <input type="date" class="form-control shadow-none" />
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500">Check-out</label>
              <input type="date" class="form-control shadow-none" />
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500">Adult</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="Submit" class="btn text-white shadow-none custom-bg ">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Our Room -->
  <div class="mt-5 pt-4 mb-5 text-center fw-bold h-font fs-2">OUR ROOMS
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">₹2000 pur night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">facilities</h6>
              <span class="badge bg-light text-dark text-wrap lh-base">
                Wifi
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                Television
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                AC
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge bg-light text-dark text-wrap lh-base">
                5 Adults
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly">
              <a href="#" class="btn btn-sm custom-bg shadow-none text-white">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 400px; margin: auto">
          <img
            src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/385166189.jpg?k=facc8559c8d6064d995a72b8505e79fa63af35dee06709244d57654867950dc7&o=&hp=1"
            class="card-img-top" alt="..." />
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">₹2000 pur night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">facilities</h6>
              <span class="badge bg-light text-dark text-wrap lh-base">
                Wifi
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                Television
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                AC
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge bg-light text-dark text-wrap lh-base">
                5 Adults
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly">
              <a href="#" class="btn btn-sm custom-bg shadow-none text-white">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">₹2000 pur night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">facilities</h6>
              <span class="badge bg-light text-dark text-wrap lh-base">
                Wifi
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                Television
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                AC
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge bg-light text-dark text-wrap lh-base">
                5 Adults
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly">
              <a href="#" class="btn btn-sm custom-bg shadow-none text-white">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-4">
        <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
      </div>
    </div>
  </div>

  <!-- OUR FACILITIES -->

  <div class="mt-5 pt-4 mb-5 text-center fw-bold h-font fs-2">
    OUR FACILITIES
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" width="80px" alt="" />
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" width="80px" alt="" />
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" width="80px" alt="" />
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" width="80px" alt="" />
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" width="80px" alt="" />
        <h5 class="mt-3">Wifi</h5>
      </div>
    </div>
    <div class="col-lg-12 text-center mt-4">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More facilities >>></a>
    </div>
  </div>

  <!-- Testimonial -->
  <div class="mt-5 pt-4 mb-5 text-center fw-bold h-font fs-2">
    TESTIMONIAL
    <div class="h-line bg-dark"></div>
  </div>

  <!-- Swiper -->
  <div class="container">
    <div class="swiper swiper-Testimonial">
      <div class="swiper-wrapper pb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/7_avatar-512.png" width="100px"
              alt="" />
            <h6 class="m-0 ms-2">Ramdom User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non
            nihil perspiciatis iusto nesciunt eos autem qui esse aperiam
            mollitia, accusamus ullam numquam facilis earum corporis delectus
            rem dolorem. Perspiciatis, eligendi?
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/7_avatar-512.png" width="100px"
              alt="" />
            <h6 class="m-0 ms-2">Ramdom User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non
            nihil perspiciatis iusto nesciunt eos autem qui esse aperiam
            mollitia, accusamus ullam numquam facilis earum corporis delectus
            rem dolorem. Perspiciatis, eligendi?
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/7_avatar-512.png" width="100px"
              alt="" />
            <h6 class="m-0 ms-2">Ramdom User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non
            nihil perspiciatis iusto nesciunt eos autem qui esse aperiam
            mollitia, accusamus ullam numquam facilis earum corporis delectus
            rem dolorem. Perspiciatis, eligendi?
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/7_avatar-512.png" width="100px"
              alt="" />
            <h6 class="m-0 ms-2">Ramdom User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non
            nihil perspiciatis iusto nesciunt eos autem qui esse aperiam
            mollitia, accusamus ullam numquam facilis earum corporis delectus
            rem dolorem. Perspiciatis, eligendi?
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/7_avatar-512.png" width="100px"
              alt="" />
            <h6 class="m-0 ms-2">Ramdom User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non
            nihil perspiciatis iusto nesciunt eos autem qui esse aperiam
            mollitia, accusamus ullam numquam facilis earum corporis delectus
            rem dolorem. Perspiciatis, eligendi?
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Reach Us -->
  <div class="mt-5 pt-4 mb-5 text-center fw-bold h-font fs-2">REACH US
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227821.98710688038!2d80.77770061871914!3d26.848902828283173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1697439635177!5m2!1sen!2sin"
          height="320px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel: +917895469879" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +91 7895469879</a>
          <br />
          <a href="tel: +917895469879" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +91 7895469879</a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block mb-3 pt-2 text-dark">
            <span class="badge bg-light text-dark fs-6 mb-3">
              <i class="bi bi-twitter-x me-1"></i> Twitter
            </span>
          </a>
          <br />
          <a href="#" class="d-inline-block mb-3 text-dark">
            <span class="badge bg-light text-dark fs-6 mb-3">
              <i class="bi bi-facebook me-1"></i> Facebook
            </span>
          </a>
          <br />
          <a href="#" class="d-inline-block mb-3 text-dark">
            <span class="badge bg-light text-dark fs-6">
              <i class="bi bi-instagram me-1"></i> Instagram
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php require('include/footer.php') ?>


  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        deley: 2500,
      },
    });

    <!-- Initialize Testimonial Swiper -->
    var swiper = new Swiper(".swiper-Testimonial", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
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