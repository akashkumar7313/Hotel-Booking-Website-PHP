<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel Booking - CONTACT</title>
  <?php require('include/links.php') ?>
</head>

<!-- Navbar -->

<body class="bg-light">
  <?php require('include/header.php') ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, consequuntur
      reiciendis! <br> Excepturi commodi voluptatibus qui labore laborum nam neque dolore.</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-4"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227821.98710688038!2d80.77770061871914!3d26.848902828283173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1697439635177!5m2!1sen!2sin"
            height="320px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/WXz1KoH8kySnSPrq7" target="_blank"
            class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill"></i> XYZ, Lucknow, Uttar Pradesh
          </a>
          <div>
          <h5 class="mt-4">Call Us</h5>
          <a href="tel: +917895469879" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +91 7895469879</a>
          <br />
          <a href="tel: +917895469879" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +91 7895469879</a>
          </div>
          <div>
          <h5 class="mt-4">Email</h5>
          <a href="mailto: abc@gmail.com" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-envelope-fill"></i> abc@gmail.com</a>
          </div>
          <h5 class="mt-4">Follow Us</h5>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter-x me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-instagram me-1"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form>
            <h5 class="d-flex justify-content-center fs-10 fw-bold">Send a message</h5>
            <div class="mt-3">
              <label class="form-label" style=" fw-bold">Name</label>
              <input type="text" class="form-control shadow-none" id="exampleInputEmail1"
                aria-describedby="emailHelp" />
            </div>
            <div class="mt-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control shadow-none" id="exampleInputEmail1"
                aria-describedby="emailHelp" />
            </div>
            <div class="mt-3">
              <label class="form-label">Subject</label>
              <input type="text" class="form-control shadow-none" id="exampleInputEmail1"
                aria-describedby="emailHelp" />
            </div>
            <div class="mt-3">
              <label class="form-label">Message</label>
              <textarea class="form-control shadow-none" rows="5" style="resize:none"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg mt-3 shadow-none">
                Submit
              </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php require('include/footer.php') ?>
</body>

</html>