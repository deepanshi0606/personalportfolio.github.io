<?php
$insert = false;
if (isset($_POST['submit'])) {
    if (isset($_POST['name'])){
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "resume"; // Replace with your actual database name

        // Create connection
        $con = new mysqli($server, $username, $password, $database);

        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Use prepared statements to prevent SQL injection
        $stmt = $con->prepare("INSERT INTO resumeform (name, email, message, dt) VALUES (?, ?, ?, current_timestamp())");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            $insert = true;
        } else {
            echo "ERROR: " . $stmt->error;
        }

        $stmt->close();
        $con->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Deepanshi Sharma</title>
  <meta name="description" content="Portfolio">
  <meta name="keywords" content="Portafolio">
  <!-- <link rel="shortcut icon" href="./assets/images/favicon1.png" type="image/x-icon"> -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/aos.css">
  <link rel="stylesheet" href="./assets/css/line-awesome.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container flex-lg-column">
      <a class="navbar-brand mx-lg-auto mb-lg-4" href="#contact">
        <span class="h3 fw-bold d-block d-lg-none">Deepanshi Sharma</span>
        <!-- <img src="./assets/images/pic2.jpg" class="d-none d-lg-block rounded-circle" alt=""> -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#experience">Experience</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#education">Education</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- CONTENT WRAPPER -->
  <div id="content-wrapper">

    <!-- home section -->
    <section id="home" class="full-height px-lg-5">

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-4 fw-bold" data-aos="fade-up">I am a full stack developer <span class="text-brand">with expertise in both front-end and back-end development.</span>
            </h1>
            <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300"> have a strong command of programming languages, frameworks, and databases, allowing me to create efficient and user-friendly web applications. I am passionate about staying updated with the latest technologies and enjoy collaborating with teams to deliver high-quality solutions.</p>
            <div data-aos="fade-up" data-aos-delay="600">
              <a href="./2016737_Deepanshi.pdf" target="_blank" class="btn btn-brand mt-3 me-3">Download CV</a>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- home -->


    <!-- Skills-->
    <section id="skills" class="full-height px-lg-5">

      <div class="container">

        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            <h6 class="text-brand">Skills</h6>
          </div>
        </div>

        <div class="row gy-4">
            
            <div class="col-md-6" data-aos="fade-up">
            <div class="service p-4 bg-base rounded-4 shadow-effect">
              <div class="iconbox rounded-4">
                <i class="las la-laptop-code"></i>
              </div>
              <h5 class="mt-2 mb-2">Web Development</h5>
              <p>HTML - CSS - JavaScript - php - ReactJs - NodeJs - ExpressJs</p>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service p-4 bg-base rounded-4 shadow-effect">
              <div class="iconbox rounded-4">
                <i class="las la-database"></i>
              </div>
              <h5 class="mt-2 mb-2">Database</h5>
              <p>MySQL - Mongodb</p>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service p-4 bg-base rounded-4 shadow-effect">
              <div class="iconbox rounded-4">
                <i class="las la-mobile"></i>
              </div>
              <h5 class="mt-2 mb-2">Platforms</h5>
              <p>VS Code - Canva - Netbeans</p>
            </div>
          </div>
          
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service p-4 bg-base rounded-4 shadow-effect">
              <div class="iconbox rounded-4">
                <i class="las la-code-branch"></i>
              </div>
              <h5 class="mt-2 mb-2">Version Control</h5>
              <p>Git - GitHub</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Skills -->


    <!-- "experiences -->
    <section id="experience" class="full-height px-lg-5">

      <div class="container">

        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            
            <h1>Experience and Projects</h1>
            <h6 class="text-brand">Experiences</h6>
          </div>
        </div>

        <div class="row gy-4">

          <div class="col-md-6" data-aos="fade-up">
            <div class="card-custom rounded-4 bg-base shadow-effect">
              <div class="card-custom-image rounded-4">
                <!-- <img class="rounded-4" src="./assets/images/web_page.jpg" alt=""> -->
              </div>
              <div class="card-custom-content p-4">
                <h4>Marketing  Intern</h4>
                <p>Issuing Authority
                  <br>Leads Flick</p>
              </div>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-custom rounded-4 bg-base shadow-effect">
              <div class="card-custom-image rounded-4">
                <!-- <img class="rounded-4" src="./assets/images/tester.jpg" alt=""> -->
              </div>
              <div class="card-custom-content p-4">
                <h4>Team Leader</h4>
                <p>Issuing Authority <br>
                SUPER7 </p>
              </div>
            </div>
          </div>
          <h6 class="text-brand">Projects</h6>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card-custom rounded-4 bg-base shadow-effect">
              <div class="card-custom-image rounded-4">
                <!-- <img class="rounded-4" src="./assets/images/app-movil.jpg" alt=""> -->
              </div>
              <div class="card-custom-content p-4">
                <h4>Personal Portfolio</h4>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="900">
            <div class="card-custom rounded-4 bg-base shadow-effect">
              <div class="card-custom-image rounded-4">
                <!-- <img class="rounded-4" src="./assets/images/youtuber.jpg" alt=""> -->
              </div>
              <div class="card-custom-content p-4">
                <h4>Ecommerce Website</h4>
                <p><a id= href="" target="_blank"
                    class=""></a></p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!--"experiences and projects" -->


    <!-- "Education" -->
    <section id="education" class="full-height px-lg-5">
      <div class="container">

        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            
            <h1>Education and Certificates</h1>
            <h6 class="text-brand">Education</h6>
          </div>
        </div>

        <div class="row gy-5">
          <div class="col-lg-6">

            <div class="row gy-4">

              <div class="col-12" data-aos="fade-up">
                <div class="bg-base p-4 rounded-4 shadow-effect">
                  <h4>Banasthali Vidyapith, Rajasthan— B.Tech</h4>
                  <p class="lead mb-2">July 2020 - June 2024 </p>
                  <p class="mb-0">Branch: Information Technology          CGPA : 8.5</p>
                </div>
              </div>
              
              <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-base p-4 rounded-4 shadow-effect">
                  <h4>DAV Centenary Public School, Rajasthan— 12th </h4>
                  <p class="lead mb-2">April 2019 - May 2020 </p>
                  <p class="mb-0">Board: CBSE          Percentage: 76.8% </p>
                </div>
              </div>

            <div class="col-12" data-aos="fade-up" data-aos-delay="900">
                <div class="bg-base p-4 rounded-4 shadow-effect">
                  <h4>DAV Centenary Public School, Rajasthan— 10th</h4>
                  <p class="lead mb-2"> April 2017 - May 2018 </p>
                  <p class="mb-0">Board: CBSE          Percentage: 82%</p>
                </div>
              </div>
            </div>
          </div>
          <h6 class="text-brand">Certificates</h6>
          <div class="col-lg-6">

            <div class="row gy-4">

              <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                <div class="bg-base p-4 rounded-4 shadow-effect">
                  <h4>‘A’ Certificate </h4>
                  <p class="lead mb-2">National Cadet Corps (NCC)</p>
                  <p class="mb-0"> </p>
                </div>
              </div>
              
              <div class="col-12" data-aos="fade-up" data-aos-delay="1200">
                <div class="bg-base p-4 rounded-4 shadow-effect">
                  <h4>VC’ Innovation Challenge (Hackathon)</h4>
                  <p class="lead mb-2">Participation Certificate</p>
                  <p class="mb-0"> </p>
                </div>
              </div>
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section>
    <!-- education and certificates -->


    <!-- Contact Me -->
    <section id="contact" class="full-height px-lg-5">
      <div class="container">

        <div class="row justify-content-center text-center">
          <div class="col-lg-8 pb-4" data-aos="fade-up">
            <h6 class="text-brand"></h6>
            <h1>Contactame!</h1>
            <div class="col-auto">
            <div class="icons-footer">
              <a href="https://www.linkedin.com/in/deepanshi-sharma-852514220" target="_blank"><i class="lab la-linkedin"></i></a>
              <a href="https://github.com/deepanshi0606" target="_blank"><i class="lab la-github"></i></a>
            </div>
          </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
            <form method="post" class="row g-lg-3 gy-3">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="name" placeholder="Full Name">
              </div>
              <div class="form-group col-md-6">
                <input type="mail" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group col-12">
                <input type="number" class="form-control" name="phone" placeholder="Contact Number">
              </div>
              <div class="form-group col-12">
                <textarea rows="4" class="form-control" name="message" placeholder="Leave your message"></textarea>
              </div>
              <div class="form-group col-12 d-grid">
                <button type="submit" name="submit" class="btn btn-brand">Send</button>
              </div>
            </form>
          </div>
        </div>

      </div>

    </section>

    <!--  -->


    <!-- footer -->
    <footer class="py-5 px-lg-5">
      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-auto">
            <!-- <p class="mb-0">© 2023 Deepanshi Sharma</p> -->
          </div>
          <div class="col-auto">
              <div>
              <p class="mb-0">© 2023 Deepanshi Sharma</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer -->


  </div>
  <!-- //CONTENT WRAPPER -->
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/main.js"></script>


  <script>
    // JavaScript code to show an alert when the form is submitted successfully
    <?php if ($insert) { ?>
      $(document).ready(function() {
        // Show the alert when the form is submitted successfully
        alert("Your message has been sent successfully!");
        
        // Optionally, you can reload the page to clear the form fields
        // window.location = window.location.href;
      });
    <?php } ?>
  </script>
</body>
</html>