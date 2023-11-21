<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* CSS styles for the About Us page */

    .about-us-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      height: 100vh;
      margin-top: 100px;
      margin-left: 10px;
    }

    h1 {
      font-size: 36px;
      text-align: center;
      margin-bottom: 20px;
    }

    h2 {
      font-size: 24px;
      margin-top: 20px;
      margin: 10px 0;
    }

    p {
      font-size: 25px;
      line-height: 1.6;
    }

    .video-container {
      margin-top: 20px;
    }

    .team-icon {
      width: 50px;
      height: 50px;
      margin-right: 10px;
    }

    .team-members {
      display: flex;
      flex-direction: column;
      align-items: center;
      
      justify-content: center;
      
    }

    .first-row,
    .second-row {
      display: flex;
      margin-bottom: 20px;
      
    }

    .first-row .member {
      margin-right: 20px;
      
    }

    .member {
      display: flex;
      align-items: center;
      margin-right: 20px;
      
    }

    .icon {
      margin-right: 10px;
      
    }

    .team-icon {
      width: 50px;
      height: 50px;
    }

    .details h3 {
      color: blue;
      
    }

    
  </style>
</head>

<body>
  <header>
    <div class="top-row">
      <div class="logo">
        <a class="home-link" href="index.php"><img src="images/home_icon.svg" alt="home icon" class="icon" href="#" /></a>
        <img src="images/logo.png" alt="logo" class="logo-icon" />
        <h1>VaalElectronics</h1>
      </div>
      <div class="right">
        
        <button class="account" id="accountButton">
          <img src="images/person-circle.svg" alt="person-circle" class="icon-acc" />Account
        </button>
      </div>
    </div>

  </header>
  <h1>About Us</h1>
  <div class="about-us-container">
    <h2>Business Background</h2>
    <p>
      Business Background Established in Vanderbijlpark on April 8, 2021,
      Vaalelectronics quickly became a leading electronics business.
      Vaalelectronics quickly built a reputation for offering cutting-edge
      electronic solutions to its clients by committing to innovation and
      quality. Since its inception, the business has concentrated on providing
      superior products and top-notch customer service, helping to establish
      its reputation as a reliable name in the electronics
      sector.Vaalelectronics has grown rapidly and become an industry leader
      thanks to its commitment to technological innovation and client
      satisfaction. Vaalelectronics has a solid basis inVanderbijlpark and is
      able to prosper and grow in the constantly changing electronics
      industry.
    </p>

    <div>
      <video width="450" height="350" controls>
        <source src="images/Company Story.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </div>

    <h2>Our Team</h2>
    <section class="team-members">
      <div class="first-row">
        <div class="member">
          <div class="icon">
            <img src="images/person.svg" alt="" class="team-icon" />
          </div>
          <div class="details">
            <h3>Ayal</h3>
            <h3>Store Manager</h3>
          </div>
        </div>
        <div class="member">
          <div>
            <img src="images/person.svg" alt="" class="team-icon" />
          </div>
          <div class="details">
            <h3>KARABO</h3>
            <h3> Assistant <br>Store Manager</h3>
          </div>
        </div>
        <div class="member">
          <div>
            <img src="images/person.svg" alt="" class="team-icon" />
          </div>
          <div class="details">
            <h3>RICHARD</h3>
            <h3>Customer Service<br>Representative</h3>
          </div>
        </div>
      </div>
      <div class="second-row">
        <div class="member">
          <div>
            <img src="images/person.svg" alt="" class="team-icon" />
          </div>
          <div class="details">
            <h3>BOKANG</h3>
            <h3>Visual <br> Merchandisers</h3>
          </div>
        </div>
        <div class="member">
          <div>
            <img src="images/person.svg" alt="" class="team-icon" />
          </div>
          <div class="details">
            <h3>NALEDI</h3>
            <h3>Sales <br> Associates SAI</h3>
          </div>
        </div>
        <div class="member">
          <div>
            <img src="images/person.svg" alt="" class="team-icon" />
          </div>
          <div class="details">
            <h3>KHESANI</h3>
            <h3>Sales <br> Associates SAII</h3>
          </div>
        </div>
      </div>
    </section>
  </div>


  <script>
    document.getElementById("accountButton").addEventListener("click", function() {
      window.location.href = "signin.html";
    });
  </script>
  <?php include_once("footer.html") ?>
</body>

</html>