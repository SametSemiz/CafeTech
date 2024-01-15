<!DOCTYPE html>
<html>

<head>
  <title>Site Başlığı</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php
  session_start();
  $login = $_SESSION["login"];
  if ($login == 0) {
    require "navbar.php";
  } else if ($login == 1) {
    require "navbar2.php";
  }
  ?>
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/homepage.css" />
  <link rel="stylesheet" href="css/homepage2.css" />
  <link rel="stylesheet" href="css/homepage3.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <script src="js/tab.js"></script>
</head>

<body onload="hocamyormayinbee()">
  <div class="all">

    <!-- 8 div -->
    <div class="">
      <div class="">
        <div class="box1">
          <div class="card1">
            <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold ; font-size: 68px;  color: #301d00; margin: 0; text-align: center; padding: 10px;">
              CafeTech
            </h2>
            <hr style="background:rgb(225, 135, 0); width: 50%;">
            <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;  color: #703200; margin: 0; text-align: center; padding: 10px;">
              Let your taste travel with every cup featuring Turkish Coffee, Ice Blended drink and homemade desserts

          </div>
        </div>

        <div class="box2">

          <!--*************************************************-->
          <div class="tab">
            <button class="tablinks tab-coffee" id="defaultOpen" onclick="openTab(event, 'Kahve')">Coffee</button>
            <button class="tablinks tab-dessert" onclick="openTab(event, 'Tatli')">Desserts</button>
          </div>

          <div id="Kahve" class="tabcontent" active>

            <div class="card">
              <div class="content">
                <div class="back">
                  <div class="back-content">
                    <img src="images/beverages/caramelmacchiato.jpg" style="border-radius: 25px" alt="Tatlı 3">
                    <strong>Caramel Macchiato</strong>
                  </div>
                </div>
                <div class="front">

                  <div class="img">
                    <div class="circle">

                    </div>
                    <div class="circle" id="right">
                    </div>
                    <div class="circle" id="bottom">
                    </div>
                  </div>

                  <div class="front-content">
                    <small class="badge">Drink</small>
                    <div class="description">
                      <div class="title">
                        <p class="title">
                          <strong style="color: white; text-align: center; margin-left: 40%;">Caramel Macchiato</strong>
                        </p>
                        <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                          <g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997">
                            <g transform="scale(8,8)">
                              <path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p style="color: white; text-align: center;" class="card-footer">
                        3,20 €
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="content">
                <div class="back">
                  <div class="back-content">
                    <img src="images/beverages/icedlatte.jpg" style="border-radius: 25px" alt="Tatlı 3">
                    <strong>Iced Latte</strong>
                  </div>
                </div>
                <div class="front">

                  <div class="img">
                    <div class="circle">
                    </div>
                    <div class="circle" id="right">
                    </div>
                    <div class="circle" id="bottom">
                    </div>
                  </div>

                  <div class="front-content">
                    <small class="badge">Drink</small>
                    <div class="description">
                      <div class="title">
                        <p class="title">
                          <strong style="color: white; text-align: center; margin-left: 65%;">Iced Latte</strong>
                        </p>
                        <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                          <g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997">
                            <g transform="scale(8,8)">
                              <path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p style="color: white; text-align: center;" class="card-footer">
                        2,70 €
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="content">
                <div class="back">
                  <div class="back-content">
                    <img src="images/beverages/frappe.jpg" style="border-radius: 25px; width: 150px; height: 150px;" alt="Tatlı 3">
                    <strong>Frappe</strong>
                  </div>
                </div>
                <div class="front">

                  <div class="img">
                    <div class="circle">
                    </div>
                    <div class="circle" id="right">
                    </div>
                    <div class="circle" id="bottom">
                    </div>
                  </div>

                  <div class="front-content">
                    <small class="badge">Drink</small>
                    <div class="description">
                      <div class="title">
                        <p class="title">
                          <strong style="color: white; text-align: center; margin-left: 60%;">Frappe</strong>
                        </p>
                        <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                          <g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997">
                            <g transform="scale(8,8)">
                              <path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p style="color: white; text-align: center;" class="card-footer">
                        4 €
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <a href="coffees&desserts.php"><button class="box2button">Click for more</button></a>



            <!--*************************************************-->
          </div>


          <div id="Tatli" class="tabcontent">

            <div class="card">
              <div class="content">
                <div class="back">
                  <div class="back-content">
                    <img src="images/desserts/cheesecake.jpg" style="border-radius: 25px" alt="Tatlı 3">
                    <strong>Cheesecake</strong>
                  </div>
                </div>
                <div class="front">

                  <div class="img">
                    <div class="circle">

                    </div>
                    <div class="circle" id="right">
                    </div>
                    <div class="circle" id="bottom">
                    </div>
                  </div>

                  <div class="front-content">
                    <small class="badge">Desserts</small>
                    <div class="description">
                      <div class="title">
                        <p class="title">
                          <strong style="color: white; text-align: center; margin-left: 40%;">Cheesecake</strong>
                        </p>
                        <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                          <g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997">
                            <g transform="scale(8,8)">
                              <path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p style="color: white; text-align: center;" class="card-footer">
                        5 €
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="content">
                <div class="back">
                  <div class="back-content">
                    <img src="images/desserts/cupcake.jpg" style="border-radius: 25px" alt="Tatlı 3">
                    <strong>Cupcake</strong>
                  </div>
                </div>
                <div class="front">

                  <div class="img">
                    <div class="circle">
                    </div>
                    <div class="circle" id="right">
                    </div>
                    <div class="circle" id="bottom">
                    </div>
                  </div>

                  <div class="front-content">
                    <small class="badge">Desserts</small>
                    <div class="description">
                      <div class="title">
                        <p class="title">
                          <strong style="color: white; text-align: center; margin-left: 65%;">Cupcake</strong>
                        </p>
                        <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                          <g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997">
                            <g transform="scale(8,8)">
                              <path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p style="color: white; text-align: center;" class="card-footer">
                        2,50 €
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="content">
                <div class="back">
                  <div class="back-content">
                    <img src="images/desserts/muffin.jpg" style="border-radius: 25px; width: 150px; height: 150px;" alt="Tatlı 3">
                    <strong>Muffin</strong>
                  </div>
                </div>
                <div class="front">

                  <div class="img">
                    <div class="circle">
                    </div>
                    <div class="circle" id="right">
                    </div>
                    <div class="circle" id="bottom">
                    </div>
                  </div>

                  <div class="front-content">
                    <small class="badge">Desserts</small>
                    <div class="description">
                      <div class="title">
                        <p class="title">
                          <strong style="color: white; text-align: center; margin-left: 60%;">Muffin</strong>
                        </p>
                        <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                          <g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997">
                            <g transform="scale(8,8)">
                              <path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p style="color: white; text-align: center;" class="card-footer">
                        4 €
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <a href="coffees&desserts.php"><button class="box2button">Click for more</button></a>

          </div>

          <!--*************************************************-->


          <!--***********************************-->
        </div>

        <div class="box3">

          <!-- Slider -->
          <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative; width: 100%; height: 100%;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
              <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/1.jpg" alt="1" title="1" />
                </li>
                <li><img src="images/2.jpg" alt="2" title="2" />
                </li>
                <li><img src="images/4.jpg" alt="4" title="4" />
                </li>
                <li><img src="images/5.jpg" alt="5" title="5" />
                </li>
              </ul>
            </div>
          </div>

          <div class="card-comment1">
            <div class="smallIcon1">
              <div class="Icon1"><img src="images/pp1.jpg" style="width: 100%; height: 100%; border-radius: 100px;"></div>
              <div class="Description1" style="padding: 15px 0 0 5px; font: normal 17px Sacramento; color: rgb(235, 235, 235);"><span style="font-size: 22px;">Eglė Petrauskaitė</span><br><br>"This cafe was truly a great experience! It has amazingly delicious desserts, a wide variety of coffees and a friendly atmosphere. I felt at home and will definitely visit again."</div>
            </div>
          </div>


          <div style="margin: -260px 0 0 30%;" class="card-comment1">
            <div class="smallIcon1">
              <div class="Description1" style="padding: 15px 0 0 5px; font: normal 17px Sacramento; color: rgb(235, 235, 235);"><span style="font-size: 22px;">Samet Semiz</span><br><br>"I visited CafeTech and I really enjoyed it. The atmosphere was cozy, making it an ideal place to work. The staff was friendly and provided quick service. The coffee and desserts were delicious. I will definitely go back again."</div>
              <div class="Icon1"><img src="images/pp3.jpg" style="width: 100%; height: 100%; border-radius: 100px;"></div>
            </div>
          </div>



        </div>

      </div>

      <div class="box4">
        <div class="box4-title">
          <div class="box4-market">MARKET</div>
        </div>
        <div class="ulanhayat">
          <div class="card-market">
            <div class="container-market-image">
              <img src="images/thermos1.png" class="image-market-circle" style="width: 80%; height: 80%; shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 335.76 195.21" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
              <g id="Layer_x0020_1">
                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                <path class="fil-shoes1" d="M332.99 147.72c-0.87,-8.61 -2.43,-5.69 -1.57,-16.93 0.7,-9.13 -0.29,-27.37 -1.46,-37.14 -0.23,-1.89 -0.43,-5.19 -1.06,-8.26l-3.31 -12.45c-0.54,-1.82 -0.16,-2.7 -0.7,-4.36 -1.5,-4.56 -2.81,-6.58 -3.32,-12.45 -0.27,-3.05 0.85,-4.81 -1.89,-7.13 -1.31,-1.11 -2.14,-1.33 -3.74,-1.23 -10.29,0.69 -19.1,-4.44 -28.23,-7.89l-5.37 -2.51c-7.84,-3.92 -16.02,-10.9 -23.59,-15.81 -5.06,-3.28 -2.36,-0.49 -4.87,-5.83 -2.48,-5.29 -11.1,-6.93 -16.27,-8.5 -2.53,-0.76 -1.72,-0.99 -3.98,-1.68 -1.14,-0.35 -3.14,-0.5 -3.63,-0.76 -2.09,-1.09 -7.48,-4.47 -9.41,-4.76 -3.83,-0.58 -7,6.85 -9.59,10.32 -1.8,2.42 -3.23,5.65 -3.64,8.83 -0.22,1.71 -1.74,3.48 -2.63,5.16 -8.27,-3.97 -8.47,-1.81 -9.27,0.86 -1.69,5.63 -4.59,10.52 -6.25,16.27 -3.05,10.56 -6.49,6.16 -11.04,12.04 -1.64,2.12 -0.97,2.39 -3.42,3.9 -5.38,3.33 -9.5,0.93 -16.05,7.03 -10.09,9.4 -3.03,2.62 -9.55,5.65 -1.43,0.66 -3.15,2.01 -4.26,3.06 -2.1,2.01 -1.92,2.22 -3.22,4.67 -11.67,0 -10.17,6.25 -14.88,7.64 -4.6,1.36 -6.75,1.85 -9.78,5.42 -1.14,1.35 -2.27,3.88 -3.22,4.66 -1.61,1.31 -2.53,0.56 -4.95,2.37 -3.18,2.38 -6.99,3.65 -9.48,5.71 -2.55,2.1 -1.2,1.6 -4.73,3.15 -5.39,2.38 -10.82,3.14 -15.13,7.39 -1.64,1.62 -16.4,4.41 -18.66,4.98 -11.91,3.03 -25.8,4.05 -37.36,8.24 -6.1,2.21 -4.85,-2.22 -11.16,4.05 -4.74,4.71 -3.68,10.8 -6.22,16.29 -1.07,2.31 -1.69,1.85 -2.68,5.2l-1.44 5.87c-0.73,4.22 -2.36,6.72 -1.86,12.16l1.02 4.62c1.95,5.05 7.38,8.45 12.31,10.21l13.44 4.02c5.09,1.37 11.26,1.47 16.51,2.63 5.72,1.26 34.16,1.33 39.85,0.87 2.59,-0.21 3.66,0.35 5.75,0.84 3.42,0.8 4.45,-0.44 7.03,-0.28 2.33,0.14 3.31,1.06 6.8,1.09 9.62,0.08 90.6,0.66 98.33,-0.28 4.23,-0.52 10.35,0.74 14.86,0.26 11.36,-1.21 24.28,-2.91 36.17,-1.87 7.05,0.61 29.63,1.01 33.07,-1.51 1.48,0.99 29.81,-0.46 33.72,-0.68 8.78,-0.5 17.29,-6.69 16.8,-15.89 -0.1,-9.37 -1.8,-17.8 -2.75,-27.26z"></path>
              </g></img>
            </div>
            <div class="content-market">
              <div class="detail-market">
                <span>Thermos</span>
                <p>$15</p>
                <a href="market.php"><button>Buy</button></a>
              </div>
              <div class="product-market-image">
                <div class="box-market-image">
                  <img src="images/thermos1.png" class="image-market-circle" style="transform: rotate(15deg);width: 110%; height: 110%; shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 335.76 195.21" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs></defs>
                  <g id="Layer_x0020_1">
                    <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                    <path class="fil-shoes1" d="M332.99 147.72c-0.87,-8.61 -2.43,-5.69 -1.57,-16.93 0.7,-9.13 -0.29,-27.37 -1.46,-37.14 -0.23,-1.89 -0.43,-5.19 -1.06,-8.26l-3.31 -12.45c-0.54,-1.82 -0.16,-2.7 -0.7,-4.36 -1.5,-4.56 -2.81,-6.58 -3.32,-12.45 -0.27,-3.05 0.85,-4.81 -1.89,-7.13 -1.31,-1.11 -2.14,-1.33 -3.74,-1.23 -10.29,0.69 -19.1,-4.44 -28.23,-7.89l-5.37 -2.51c-7.84,-3.92 -16.02,-10.9 -23.59,-15.81 -5.06,-3.28 -2.36,-0.49 -4.87,-5.83 -2.48,-5.29 -11.1,-6.93 -16.27,-8.5 -2.53,-0.76 -1.72,-0.99 -3.98,-1.68 -1.14,-0.35 -3.14,-0.5 -3.63,-0.76 -2.09,-1.09 -7.48,-4.47 -9.41,-4.76 -3.83,-0.58 -7,6.85 -9.59,10.32 -1.8,2.42 -3.23,5.65 -3.64,8.83 -0.22,1.71 -1.74,3.48 -2.63,5.16 -8.27,-3.97 -8.47,-1.81 -9.27,0.86 -1.69,5.63 -4.59,10.52 -6.25,16.27 -3.05,10.56 -6.49,6.16 -11.04,12.04 -1.64,2.12 -0.97,2.39 -3.42,3.9 -5.38,3.33 -9.5,0.93 -16.05,7.03 -10.09,9.4 -3.03,2.62 -9.55,5.65 -1.43,0.66 -3.15,2.01 -4.26,3.06 -2.1,2.01 -1.92,2.22 -3.22,4.67 -11.67,0 -10.17,6.25 -14.88,7.64 -4.6,1.36 -6.75,1.85 -9.78,5.42 -1.14,1.35 -2.27,3.88 -3.22,4.66 -1.61,1.31 -2.53,0.56 -4.95,2.37 -3.18,2.38 -6.99,3.65 -9.48,5.71 -2.55,2.1 -1.2,1.6 -4.73,3.15 -5.39,2.38 -10.82,3.14 -15.13,7.39 -1.64,1.62 -16.4,4.41 -18.66,4.98 -11.91,3.03 -25.8,4.05 -37.36,8.24 -6.1,2.21 -4.85,-2.22 -11.16,4.05 -4.74,4.71 -3.68,10.8 -6.22,16.29 -1.07,2.31 -1.69,1.85 -2.68,5.2l-1.44 5.87c-0.73,4.22 -2.36,6.72 -1.86,12.16l1.02 4.62c1.95,5.05 7.38,8.45 12.31,10.21l13.44 4.02c5.09,1.37 11.26,1.47 16.51,2.63 5.72,1.26 34.16,1.33 39.85,0.87 2.59,-0.21 3.66,0.35 5.75,0.84 3.42,0.8 4.45,-0.44 7.03,-0.28 2.33,0.14 3.31,1.06 6.8,1.09 9.62,0.08 90.6,0.66 98.33,-0.28 4.23,-0.52 10.35,0.74 14.86,0.26 11.36,-1.21 24.28,-2.91 36.17,-1.87 7.05,0.61 29.63,1.01 33.07,-1.51 1.48,0.99 29.81,-0.46 33.72,-0.68 8.78,-0.5 17.29,-6.69 16.8,-15.89 -0.1,-9.37 -1.8,-17.8 -2.75,-27.26z"></path>
                  </g></img>
                </div>
              </div>
            </div>
          </div>
          <div class="card-market">
            <div class="container-market-image">
              <img src="images/coffeecup1.png" class="image-market-circle" style="width: 80%; height: 80%; margin: 5px 0 0 5px; shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 335.76 195.21" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
              <g id="Layer_x0020_1">
                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                <path class="fil-shoes1" d="M332.99 147.72c-0.87,-8.61 -2.43,-5.69 -1.57,-16.93 0.7,-9.13 -0.29,-27.37 -1.46,-37.14 -0.23,-1.89 -0.43,-5.19 -1.06,-8.26l-3.31 -12.45c-0.54,-1.82 -0.16,-2.7 -0.7,-4.36 -1.5,-4.56 -2.81,-6.58 -3.32,-12.45 -0.27,-3.05 0.85,-4.81 -1.89,-7.13 -1.31,-1.11 -2.14,-1.33 -3.74,-1.23 -10.29,0.69 -19.1,-4.44 -28.23,-7.89l-5.37 -2.51c-7.84,-3.92 -16.02,-10.9 -23.59,-15.81 -5.06,-3.28 -2.36,-0.49 -4.87,-5.83 -2.48,-5.29 -11.1,-6.93 -16.27,-8.5 -2.53,-0.76 -1.72,-0.99 -3.98,-1.68 -1.14,-0.35 -3.14,-0.5 -3.63,-0.76 -2.09,-1.09 -7.48,-4.47 -9.41,-4.76 -3.83,-0.58 -7,6.85 -9.59,10.32 -1.8,2.42 -3.23,5.65 -3.64,8.83 -0.22,1.71 -1.74,3.48 -2.63,5.16 -8.27,-3.97 -8.47,-1.81 -9.27,0.86 -1.69,5.63 -4.59,10.52 -6.25,16.27 -3.05,10.56 -6.49,6.16 -11.04,12.04 -1.64,2.12 -0.97,2.39 -3.42,3.9 -5.38,3.33 -9.5,0.93 -16.05,7.03 -10.09,9.4 -3.03,2.62 -9.55,5.65 -1.43,0.66 -3.15,2.01 -4.26,3.06 -2.1,2.01 -1.92,2.22 -3.22,4.67 -11.67,0 -10.17,6.25 -14.88,7.64 -4.6,1.36 -6.75,1.85 -9.78,5.42 -1.14,1.35 -2.27,3.88 -3.22,4.66 -1.61,1.31 -2.53,0.56 -4.95,2.37 -3.18,2.38 -6.99,3.65 -9.48,5.71 -2.55,2.1 -1.2,1.6 -4.73,3.15 -5.39,2.38 -10.82,3.14 -15.13,7.39 -1.64,1.62 -16.4,4.41 -18.66,4.98 -11.91,3.03 -25.8,4.05 -37.36,8.24 -6.1,2.21 -4.85,-2.22 -11.16,4.05 -4.74,4.71 -3.68,10.8 -6.22,16.29 -1.07,2.31 -1.69,1.85 -2.68,5.2l-1.44 5.87c-0.73,4.22 -2.36,6.72 -1.86,12.16l1.02 4.62c1.95,5.05 7.38,8.45 12.31,10.21l13.44 4.02c5.09,1.37 11.26,1.47 16.51,2.63 5.72,1.26 34.16,1.33 39.85,0.87 2.59,-0.21 3.66,0.35 5.75,0.84 3.42,0.8 4.45,-0.44 7.03,-0.28 2.33,0.14 3.31,1.06 6.8,1.09 9.62,0.08 90.6,0.66 98.33,-0.28 4.23,-0.52 10.35,0.74 14.86,0.26 11.36,-1.21 24.28,-2.91 36.17,-1.87 7.05,0.61 29.63,1.01 33.07,-1.51 1.48,0.99 29.81,-0.46 33.72,-0.68 8.78,-0.5 17.29,-6.69 16.8,-15.89 -0.1,-9.37 -1.8,-17.8 -2.75,-27.26z"></path>
              </g></img>
            </div>
            <div class="content-market">
              <div class="detail-market">
                <span>Coffee Cup</span>
                <p>$5</p>
                <a href="market.php"><button>Buy</button></a>
              </div>
              <div class="product-market-image">
                <div class="box-market-image">
                  <img src="images/coffeecup1.png" class="image-market-circle" style="transform: rotate(15deg);width: 130%; height: 100%; margin: 30px 0 0 -30px; shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 335.76 195.21" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs></defs>
                  <g id="Layer_x0020_1">
                    <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                    <path class="fil-shoes1" d="M332.99 147.72c-0.87,-8.61 -2.43,-5.69 -1.57,-16.93 0.7,-9.13 -0.29,-27.37 -1.46,-37.14 -0.23,-1.89 -0.43,-5.19 -1.06,-8.26l-3.31 -12.45c-0.54,-1.82 -0.16,-2.7 -0.7,-4.36 -1.5,-4.56 -2.81,-6.58 -3.32,-12.45 -0.27,-3.05 0.85,-4.81 -1.89,-7.13 -1.31,-1.11 -2.14,-1.33 -3.74,-1.23 -10.29,0.69 -19.1,-4.44 -28.23,-7.89l-5.37 -2.51c-7.84,-3.92 -16.02,-10.9 -23.59,-15.81 -5.06,-3.28 -2.36,-0.49 -4.87,-5.83 -2.48,-5.29 -11.1,-6.93 -16.27,-8.5 -2.53,-0.76 -1.72,-0.99 -3.98,-1.68 -1.14,-0.35 -3.14,-0.5 -3.63,-0.76 -2.09,-1.09 -7.48,-4.47 -9.41,-4.76 -3.83,-0.58 -7,6.85 -9.59,10.32 -1.8,2.42 -3.23,5.65 -3.64,8.83 -0.22,1.71 -1.74,3.48 -2.63,5.16 -8.27,-3.97 -8.47,-1.81 -9.27,0.86 -1.69,5.63 -4.59,10.52 -6.25,16.27 -3.05,10.56 -6.49,6.16 -11.04,12.04 -1.64,2.12 -0.97,2.39 -3.42,3.9 -5.38,3.33 -9.5,0.93 -16.05,7.03 -10.09,9.4 -3.03,2.62 -9.55,5.65 -1.43,0.66 -3.15,2.01 -4.26,3.06 -2.1,2.01 -1.92,2.22 -3.22,4.67 -11.67,0 -10.17,6.25 -14.88,7.64 -4.6,1.36 -6.75,1.85 -9.78,5.42 -1.14,1.35 -2.27,3.88 -3.22,4.66 -1.61,1.31 -2.53,0.56 -4.95,2.37 -3.18,2.38 -6.99,3.65 -9.48,5.71 -2.55,2.1 -1.2,1.6 -4.73,3.15 -5.39,2.38 -10.82,3.14 -15.13,7.39 -1.64,1.62 -16.4,4.41 -18.66,4.98 -11.91,3.03 -25.8,4.05 -37.36,8.24 -6.1,2.21 -4.85,-2.22 -11.16,4.05 -4.74,4.71 -3.68,10.8 -6.22,16.29 -1.07,2.31 -1.69,1.85 -2.68,5.2l-1.44 5.87c-0.73,4.22 -2.36,6.72 -1.86,12.16l1.02 4.62c1.95,5.05 7.38,8.45 12.31,10.21l13.44 4.02c5.09,1.37 11.26,1.47 16.51,2.63 5.72,1.26 34.16,1.33 39.85,0.87 2.59,-0.21 3.66,0.35 5.75,0.84 3.42,0.8 4.45,-0.44 7.03,-0.28 2.33,0.14 3.31,1.06 6.8,1.09 9.62,0.08 90.6,0.66 98.33,-0.28 4.23,-0.52 10.35,0.74 14.86,0.26 11.36,-1.21 24.28,-2.91 36.17,-1.87 7.05,0.61 29.63,1.01 33.07,-1.51 1.48,0.99 29.81,-0.46 33.72,-0.68 8.78,-0.5 17.29,-6.69 16.8,-15.89 -0.1,-9.37 -1.8,-17.8 -2.75,-27.26z"></path>
                  </g></img>
                </div>
              </div>
            </div>
          </div>
          <div class="card-market">
            <div class="container-market-image">
              <img src="images/packetofcoffee1.png" class="image-market-circle" style="width: 130%; height: 80%; shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 335.76 195.21" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
              <g id="Layer_x0020_1">
                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                <path class="fil-shoes1" d="M332.99 147.72c-0.87,-8.61 -2.43,-5.69 -1.57,-16.93 0.7,-9.13 -0.29,-27.37 -1.46,-37.14 -0.23,-1.89 -0.43,-5.19 -1.06,-8.26l-3.31 -12.45c-0.54,-1.82 -0.16,-2.7 -0.7,-4.36 -1.5,-4.56 -2.81,-6.58 -3.32,-12.45 -0.27,-3.05 0.85,-4.81 -1.89,-7.13 -1.31,-1.11 -2.14,-1.33 -3.74,-1.23 -10.29,0.69 -19.1,-4.44 -28.23,-7.89l-5.37 -2.51c-7.84,-3.92 -16.02,-10.9 -23.59,-15.81 -5.06,-3.28 -2.36,-0.49 -4.87,-5.83 -2.48,-5.29 -11.1,-6.93 -16.27,-8.5 -2.53,-0.76 -1.72,-0.99 -3.98,-1.68 -1.14,-0.35 -3.14,-0.5 -3.63,-0.76 -2.09,-1.09 -7.48,-4.47 -9.41,-4.76 -3.83,-0.58 -7,6.85 -9.59,10.32 -1.8,2.42 -3.23,5.65 -3.64,8.83 -0.22,1.71 -1.74,3.48 -2.63,5.16 -8.27,-3.97 -8.47,-1.81 -9.27,0.86 -1.69,5.63 -4.59,10.52 -6.25,16.27 -3.05,10.56 -6.49,6.16 -11.04,12.04 -1.64,2.12 -0.97,2.39 -3.42,3.9 -5.38,3.33 -9.5,0.93 -16.05,7.03 -10.09,9.4 -3.03,2.62 -9.55,5.65 -1.43,0.66 -3.15,2.01 -4.26,3.06 -2.1,2.01 -1.92,2.22 -3.22,4.67 -11.67,0 -10.17,6.25 -14.88,7.64 -4.6,1.36 -6.75,1.85 -9.78,5.42 -1.14,1.35 -2.27,3.88 -3.22,4.66 -1.61,1.31 -2.53,0.56 -4.95,2.37 -3.18,2.38 -6.99,3.65 -9.48,5.71 -2.55,2.1 -1.2,1.6 -4.73,3.15 -5.39,2.38 -10.82,3.14 -15.13,7.39 -1.64,1.62 -16.4,4.41 -18.66,4.98 -11.91,3.03 -25.8,4.05 -37.36,8.24 -6.1,2.21 -4.85,-2.22 -11.16,4.05 -4.74,4.71 -3.68,10.8 -6.22,16.29 -1.07,2.31 -1.69,1.85 -2.68,5.2l-1.44 5.87c-0.73,4.22 -2.36,6.72 -1.86,12.16l1.02 4.62c1.95,5.05 7.38,8.45 12.31,10.21l13.44 4.02c5.09,1.37 11.26,1.47 16.51,2.63 5.72,1.26 34.16,1.33 39.85,0.87 2.59,-0.21 3.66,0.35 5.75,0.84 3.42,0.8 4.45,-0.44 7.03,-0.28 2.33,0.14 3.31,1.06 6.8,1.09 9.62,0.08 90.6,0.66 98.33,-0.28 4.23,-0.52 10.35,0.74 14.86,0.26 11.36,-1.21 24.28,-2.91 36.17,-1.87 7.05,0.61 29.63,1.01 33.07,-1.51 1.48,0.99 29.81,-0.46 33.72,-0.68 8.78,-0.5 17.29,-6.69 16.8,-15.89 -0.1,-9.37 -1.8,-17.8 -2.75,-27.26z"></path>
              </g></img>
            </div>
            <div class="content-market">
              <div class="detail-market">
                <span>Packet of Coffee</span>
                <p>$13</p>

                <a href="market.php"><button>Buy</button></a>

              </div>
              <div class="product-market-image">
                <div class="box-market-image">

                  <img src="images/packetofcoffee1.png" class="image-market-circle" style="transform: rotate(15deg);width: 250%; height: 110%; shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 335.76 195.21" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs></defs>
                  <g id="Layer_x0020_1">
                    <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                    <path class="fil-shoes1" d="M332.99 147.72c-0.87,-8.61 -2.43,-5.69 -1.57,-16.93 0.7,-9.13 -0.29,-27.37 -1.46,-37.14 -0.23,-1.89 -0.43,-5.19 -1.06,-8.26l-3.31 -12.45c-0.54,-1.82 -0.16,-2.7 -0.7,-4.36 -1.5,-4.56 -2.81,-6.58 -3.32,-12.45 -0.27,-3.05 0.85,-4.81 -1.89,-7.13 -1.31,-1.11 -2.14,-1.33 -3.74,-1.23 -10.29,0.69 -19.1,-4.44 -28.23,-7.89l-5.37 -2.51c-7.84,-3.92 -16.02,-10.9 -23.59,-15.81 -5.06,-3.28 -2.36,-0.49 -4.87,-5.83 -2.48,-5.29 -11.1,-6.93 -16.27,-8.5 -2.53,-0.76 -1.72,-0.99 -3.98,-1.68 -1.14,-0.35 -3.14,-0.5 -3.63,-0.76 -2.09,-1.09 -7.48,-4.47 -9.41,-4.76 -3.83,-0.58 -7,6.85 -9.59,10.32 -1.8,2.42 -3.23,5.65 -3.64,8.83 -0.22,1.71 -1.74,3.48 -2.63,5.16 -8.27,-3.97 -8.47,-1.81 -9.27,0.86 -1.69,5.63 -4.59,10.52 -6.25,16.27 -3.05,10.56 -6.49,6.16 -11.04,12.04 -1.64,2.12 -0.97,2.39 -3.42,3.9 -5.38,3.33 -9.5,0.93 -16.05,7.03 -10.09,9.4 -3.03,2.62 -9.55,5.65 -1.43,0.66 -3.15,2.01 -4.26,3.06 -2.1,2.01 -1.92,2.22 -3.22,4.67 -11.67,0 -10.17,6.25 -14.88,7.64 -4.6,1.36 -6.75,1.85 -9.78,5.42 -1.14,1.35 -2.27,3.88 -3.22,4.66 -1.61,1.31 -2.53,0.56 -4.95,2.37 -3.18,2.38 -6.99,3.65 -9.48,5.71 -2.55,2.1 -1.2,1.6 -4.73,3.15 -5.39,2.38 -10.82,3.14 -15.13,7.39 -1.64,1.62 -16.4,4.41 -18.66,4.98 -11.91,3.03 -25.8,4.05 -37.36,8.24 -6.1,2.21 -4.85,-2.22 -11.16,4.05 -4.74,4.71 -3.68,10.8 -6.22,16.29 -1.07,2.31 -1.69,1.85 -2.68,5.2l-1.44 5.87c-0.73,4.22 -2.36,6.72 -1.86,12.16l1.02 4.62c1.95,5.05 7.38,8.45 12.31,10.21l13.44 4.02c5.09,1.37 11.26,1.47 16.51,2.63 5.72,1.26 34.16,1.33 39.85,0.87 2.59,-0.21 3.66,0.35 5.75,0.84 3.42,0.8 4.45,-0.44 7.03,-0.28 2.33,0.14 3.31,1.06 6.8,1.09 9.62,0.08 90.6,0.66 98.33,-0.28 4.23,-0.52 10.35,0.74 14.86,0.26 11.36,-1.21 24.28,-2.91 36.17,-1.87 7.05,0.61 29.63,1.01 33.07,-1.51 1.48,0.99 29.81,-0.46 33.72,-0.68 8.78,-0.5 17.29,-6.69 16.8,-15.89 -0.1,-9.37 -1.8,-17.8 -2.75,-27.26z"></path>
                  </g></img>

                </div>
              </div>
            </div>

          </div>
          <a href="market.php">
            <div class="card-market2">
              <img src="images/cfm.png" style="width: 140px; margin: 0 0 0 15%">
              <p style="text-align: center; margin-top: 10px; font: normal bold; font-size: 20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ">Click for <br> more</p>
            </div>
          </a>
        </div>


      </div>

      <div class="box5">
        <div style="box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2); border-radius: 30px; background-color: #ffd8659f; text-align: center; margin: auto; width: 50%; padding: 20px;">
          <h1 style="font-size: 50px; color:rgb(116, 69, 0) ; font-family: Open Sans;">How to make?</h1>
        </div>
        <div class="box5-content">
          <div class="book1">
            <div style=" padding: 0 15px 0 50px; border-radius: 10px;">
              <p style="font-family: Arial, sans-serif; font-size: 16px; font-weight: bold; text-align: center;">Cappuccino</p>
              <hr>
              <p style="font-family: Arial, sans-serif; font-size: 15px; line-height: 1.4; text-align: justify;">
                Start by brewing a shot of espresso using an espresso machine. Heat up a cup of milk in a saucepan or in the microwave until it is hot but not boiling. Use a frother or whisk to froth the milk until it has a creamy, velvety texture. Pour the espresso shot into a cup and then pour the frothed milk on top of it. Sprinkle some cocoa powder on top of the milk for a decorative touch. Serve and enjoy your delicious cappuccino!
            </div>
            <div class="cover1">
              <div style="display: flex; flex-direction: column; align-items: center;">
                <img src="images/beverages/cappuccino.png" style="width: 200px; height: 200px;">
                <p style="text-align: center; font: normal bold; font-size: 30px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-top: 10px;">Cappuccino</p>
              </div>
            </div>

          </div>
          <div class="book1">
            <div style=" padding: 0 15px 0 50px; border-radius: 10px;">
              <p style="font-family: Arial, sans-serif; font-size: 16px; font-weight: bold; text-align: center;">Turkish Coffee</p>
              <hr>
              <p style="font-family: Arial, sans-serif; font-size: 15px; line-height: 1.4; text-align: justify;">
                Turkish coffee is a traditional coffee preparation method that requires a cezve (Turkish coffee pot), coffee beans, water, and sugar (optional). To make Turkish coffee, first grind the coffee beans finely and add them to the cezve. Then, add water to the cezve and stir. Put the cezve on the stove and boil it over medium heat. When the foam rises, divide the foam between the cups. Pour the coffee into the cups and add sugar (if desired). Enjoy your delicious Turkish coffee!
              </p>
            </div>

            <div class="cover1">
              <div style="display: flex; flex-direction: column; align-items: center;">
                <img src="images/beverages/turkish-coffee.png" style="width: 200px; height: 200px;">
                <p style="text-align: center; font: normal bold; font-size: 30px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-top: 10px;">Turkish Coffee</p>
              </div>
            </div>
          </div>
          <div class="book1">
            <div style=" padding: 0 15px 0 50px; border-radius: 10px;">
              <p style="font-family: Arial, sans-serif; font-size: 16px; font-weight: bold; text-align: center;">Filter Coffee</p>
              <hr>
              <p style="font-family: Arial, sans-serif; font-size: 15px; line-height: 1.4; text-align: justify;">
                Filter coffee requires a filter coffee machine, filter paper, and coffee beans. Grind the coffee beans to a medium grind. Place the filter paper in the machine's filter compartment and add the ground coffee on top of the filter paper. Add water to the machine's water tank and turn it on. The machine will filter the water through the coffee to brew the coffee. Transfer the brewed coffee to a cup and add sugar and milk (if desired). </p>
            </div>
            <div class="cover1">
              <div style="display: flex; flex-direction: column; align-items: center;">
                <img src="images/beverages/filter-coffee.png" style="width: 200px; height: 300px; margin:-100px 0 0 0;">
                <p style="text-align: center; font: normal bold; font-size: 30px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-top: 10px;">Filter Coffee</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="box6">
    <div class="box6-title">
      <h2>Our Team</h2>
    </div>
    <div class="box6-content">
      <div class="flip-card2">
        <div class="flip-card-inner2">
          <div class="flip-card-front2">
            <div class="profile-image2">
              <img class="pfp2" src="images/pp4.jpg" style="width: 100%;height: 100%;">
              <div class="name2">
                Sefa Doğan
              </div>
            </div>
          </div>
          <div class="flip-card-back2">
            <p class="description2">
            <div class="employee">
              <div class="employee-title">
                Founder
              </div>
              <hr style="background-color: #fff; width: 50%">
              <div class="employee-name">
                Sefa Doğan
              </div>
              <div class="employee-comment">
                I am the founder of this cafe. I like when people come to my cafe and spend happy time with their friends, relatives and acquaintances. "Coffee isn't just a beverage, it's a little joy in life."
              </div>
            </div>
            </p>
          </div>
        </div>
      </div>

      <div class="flip-card2">
        <div class="flip-card-inner2">
          <div class="flip-card-front2">
            <div class="profile-image2">
              <img class="pfp2" src="images/pp5.jpg" style="width: 100%;height: 100%;">
              <div class="name2">
                Gabrielė Žukauskas
              </div>
            </div>
          </div>
          <div class="flip-card-back2">
            <p class="description2">
            <div class="employee">
              <div class="employee-title">
                Barista
              </div>
              <hr style="background-color: #fff; width: 50%">
              <div class="employee-name">
                Gabrielė Žukauskas
              </div>
              <div class="employee-comment">
                Every coffee is the beginning of a story. I try to tell this story in the best way possible.
              </div>
            </div>
            </p>
          </div>
        </div>
      </div>

      <div class="flip-card2">
        <div class="flip-card-inner2">
          <div class="flip-card-front2">
            <div class="profile-image2">
              <img class="pfp2" src="images/pp6.jpg" style="width: 100%;height: 100%;">
              <div class="name2">
                Karl Müller
              </div>
            </div>
          </div>
          <div class="flip-card-back2">
            <p class="description2">
            <div class="employee">
              <div class="employee-title">
                Barista
              </div>
              <hr style="background-color: #fff; width: 50%">
              <div class="employee-name">
                Gabrielė Žukauskas
              </div>
              <div class="employee-comment">
                "Every cup of coffee is a testament to our passion and care. We do our best to make our guests happy."
              </div>
            </div>
            </p>
          </div>
        </div>
      </div>

      <div class="flip-card2">
        <div class="flip-card-inner2">
          <div class="flip-card-front2">
            <div class="profile-image2">
              <img class="pfp2" src="images/pp7.jpg" style="width: 100%;height: 100%;">
              <div class="name2">
                Isabella Bianchi
              </div>
            </div>
          </div>
          <div class="flip-card-back2">
            <p class="description2">
            <div class="employee">
              <div class="employee-title">
                Chef Patissier
              </div>
              <hr style="background-color: #fff; width: 50%">
              <div class="employee-name">
                Isabella Bianchi
              </div>
              <div class="employee-comment">
                The secret of taste is hidden in quality ingredients and lovingly prepared recipes.
              </div>
            </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
    require "footer.php";
  ?>
  </div>
  </div>
  </div>



  <!-- Slider -->
  <script src="sliderengine/jquery.js"></script>
  <script src="sliderengine/amazingslider.js"></script>
  <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
  <script src="sliderengine/initslider-1.js"></script>
  <!-- Slider -->
</body>

</html>
```