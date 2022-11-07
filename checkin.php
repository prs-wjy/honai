<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="css/checkin.css" type="text/css" rel="stylesheet" />
  <link href="css/nav.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Honai Check-In</title>
</head>

<body>
  <nav>
    <ul>
      <a href="index.html">
        <img src="img/logo-white.png" class="logo-honai" />
      </a>
      <li><a class='active' href="checkin.php" class="nav-content">Check-in</a></li>
      <li><a href="gallery.html" class="nav-content">Gallery</a></li>
      <li><a href="package.html" class="nav-content">Package</a></li>
    </ul>
  </nav>
  <section class="checkin-card">
    <header class="checkin-header">
      <h1>HONAI RESORT CHECK IN</h1>
    </header>
    <form action="checkin-conn.php" method="post" class="checkin-form">
      <div class="group-col">
        <label for="name">Guest Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="group-col">
        <label for="sharer-name">Sharer Name</label>
        <input type="text" id="sharer-name" name="sharer-name">
      </div>
      <div class="group-row">
        <div class="group-col">
          <label for="nationality">Nationality</label>
          <select id="nationality" name="nationality" required>
            <option value="" selected disabled hidden>-- select one --</option>
            <?php
            $nationality = array(
              "Afghanistan",
              "Albania",
              "Algeria",
              "Andorra",
              "Angola",
              "Antigua and Barbuda",
              "Argentina",
              "Armenia",
              "Australia",
              "Austria",
              "Azerbaijan",
              "Bahamas",
              "Bahrain",
              "Bangladesh",
              "Barbados",
              "Belarus",
              "Belgium",
              "Belize",
              "Benin",
              "Bhutan",
              "Bolivia",
              "Bosnia and Herzegovina",
              "Botswana",
              "Brazil",
              "Brunei",
              "Bulgaria",
              "Burkina Faso",
              "Burundi",
              "Cambodia",
              "Cameroon",
              "Canada",
              "Cape Verde",
              "Central African Republic",
              "Chad",
              "Chile",
              "China",
              "Colombi",
              "Comoros",
              "Congo (Brazzaville)",
              "Congo",
              "Costa Rica",
              "Cote d'Ivoire",
              "Croatia",
              "Cuba",
              "Cyprus",
              "Czech Republic",
              "Denmark",
              "Djibouti",
              "Dominica",
              "Dominican Republic",
              "East Timor (Timor Timur)",
              "Ecuador",
              "Egypt",
              "El Salvador",
              "Equatorial Guinea",
              "Eritrea",
              "Estonia",
              "Ethiopia",
              "Fiji",
              "Finland",
              "France",
              "Gabon",
              "Gambia, The",
              "Georgia",
              "Germany",
              "Ghana",
              "Greece",
              "Grenada",
              "Guatemala",
              "Guinea",
              "Guinea-Bissau",
              "Guyana",
              "Haiti",
              "Honduras",
              "Hungary",
              "Iceland",
              "India",
              "Indonesia",
              "Iran",
              "Iraq",
              "Ireland",
              "Israel",
              "Italy",
              "Jamaica",
              "Japan",
              "Jordan",
              "Kazakhstan",
              "Kenya",
              "Kiribati",
              "Korea, North",
              "Korea, South",
              "Kuwait",
              "Kyrgyzstan",
              "Laos",
              "Latvia",
              "Lebanon",
              "Lesotho",
              "Liberia",
              "Libya",
              "Liechtenstein",
              "Lithuania",
              "Luxembourg",
              "Macedonia",
              "Madagascar",
              "Malawi",
              "Malaysia",
              "Maldives",
              "Mali",
              "Malta",
              "Marshall Islands",
              "Mauritania",
              "Mauritius",
              "Mexico",
              "Micronesia",
              "Moldova",
              "Monaco",
              "Mongolia",
              "Morocco",
              "Mozambique",
              "Myanmar",
              "Namibia",
              "Nauru",
              "Nepal",
              "Netherlands",
              "New Zealand",
              "Nicaragua",
              "Niger",
              "Nigeria",
              "Norway",
              "Oman",
              "Pakistan",
              "Palau",
              "Palestine",
              "Panama",
              "Papua New Guinea",
              "Paraguay",
              "Peru",
              "Philippines",
              "Poland",
              "Portugal",
              "Qatar",
              "Romania",
              "Russia",
              "Rwanda",
              "Saint Kitts and Nevis",
              "Saint Lucia",
              "Saint Vincent",
              "Samoa",
              "San Marino",
              "Sao Tome and Principe",
              "Saudi Arabia",
              "Senegal",
              "Serbia and Montenegro",
              "Seychelles",
              "Sierra Leone",
              "Singapore",
              "Slovakia",
              "Slovenia",
              "Solomon Islands",
              "Somalia",
              "South Africa",
              "Spain",
              "Sri Lanka",
              "Sudan",
              "Suriname",
              "Swaziland",
              "Sweden",
              "Switzerland",
              "Syria",
              "Taiwan",
              "Tajikistan",
              "Tanzania",
              "Thailand",
              "Togo",
              "Tonga",
              "Trinidad and Tobago",
              "Tunisia",
              "Turkey",
              "Turkmenistan",
              "Tuvalu",
              "Uganda",
              "Ukraine",
              "United Arab Emirates",
              "United Kingdom",
              "United States",
              "Uruguay",
              "Uzbekistan",
              "Vanuatu",
              "Vatican City",
              "Venezuela",
              "Vietnam",
              "Yemen",
              "Zambia",
              "Zimbabwe"
            );
            sort($nationality);
            for($i=0; $i<count($nationality); $i++){
                ?>
                <option value="<?=$nationality[$i]?>">
                    <?=$nationality[$i]?>  
                </option>
                <?php
            }
            ?>
          </select>
        </div>
        <div class="group-col">
          <label for="city">City</label>
          <input type="text" id="city" name="city" required>
        </div>
      </div>
      <div class="group-col">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="group-col">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="group-col">
        <label for="id-number">ID Card / Passport Photo</label>
        <input type="file" id="id-img" name="id-img" accept="image/*" required>
      </div>
      <button type="submit" class="checkin-submit col-12">
        SUBMIT
      </button>
    </form>

  </section>

</body>
<!-- Footer -->
<footer>
        <div class="footer-section">
            <div class="footer-layout">
                <!-- Kiri -->
                <div class="footer-content">
                    <a href="index.html"><img class="logo-footer" src="img/logo-honai.png" alt=""></a>
                    <div class="caption-footer">Welcome to Honai, a uniquely traditional Bali Wellness Resort in the countryside of Ubud, Bali.</div>
                    <div class="reward">Our Reward :</div>
                    <a target="_blank" href="https://www.tripadvisor.co.id/Hotel_Review-g297701-d10878650-Reviews-Honai_Resort-Ubud_Gianyar_Regency_Bali.html">
                        <div class="center-reward">
                            <i class="fa fa-tripadvisor"></i>
                            <div class="caption-footer">Certificate of Excellence 2018</div>
                        </div>
                    </a>
                    
                </div>

                <!-- Tengah -->
                <div class="footer-content">
                    <div class="title-footer">SIGN UP NEWSLETTER</div>
                    <div class="caption-footer">Be the first to know about special offers and upcoming retreat dates!</div>
                    <form class="example" action="">
                        <input type="text" placeholder="Input your email address" name="search">
                        <button type="submit"><i>✔</i></button>
                    </form>
                    <div class="sosmed">
                        <a target="_blank" href="https://web.facebook.com/honairesort" class="fa fa-facebook"></a>
                        <a target="_blank" href="#" class="fa fa-twitter"></a>
                        <a target="_blank" href="https://www.instagram.com/honairesort/" class="fa fa-instagram"></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCJB0l48-7kxY2trnu91QtXw" class="fa fa-youtube"></a>
                    </div>
                </div>
                <!-- Kanan -->
                <div class="footer-content">
                    <div class="title-footer">ABOUT US</div>
                    <div class="caption-footer">Want to know about us?</div>
                    <br>
                    <div class="about-title">Address :</div>
                    <a target="_blank" href="https://maps.google.com/?q=Honai%20Resort,%20Ubud,%20Bali"><div class="about-caption">Jl. Sri Wedari, Tegallantang, Ubud, Gianyar, Bali - Indonesia</div></a>
                    <div class="about-title">Have any question?</div>
                    <a href="mailto:info@honairesort.com"><div class="about-caption">info@honairesort.com</div></a>
                    <div class="about-title">Phone :</div>
                    <div class="about-caption">+62 361 9081508</div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="copyright-text">&copy; 2020 honairesort.com</div>
        </div>
    </footer>

    <style>
        .fa {
            padding: 12px;
            font-size: 20px;
            width: 20px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }
        .fa-facebook {
            background: #3B5998;
            color: white;
        }
        .fa-twitter {
            background: #55ACEE;
            color: white;
        }
        .fa-instagram {
            background: #125688;
            color: white;
        }
        .fa-youtube {
            background: #bb0000;
            color: white;
        }
        .fa-tripadvisor{
            margin-top: 5px;
            margin-right: 10px;
            background: rgb(48, 138, 85);
            color: white;
        }
    </style>
    <!-- End Footer -->
</html>