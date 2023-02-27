<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Attendance Dashboard | By Code Info</title>
    <link rel="stylesheet" href="report.css" />
    <!-- Font Awesome Cdn Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <body>
    <div class="container">
      <img src="Logoo.png" alt="logo" />
      <!-- <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="./pic/logo.jpg">
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Message</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-database"></i>
          <span class="nav-item">Report</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Attendance</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="#" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav> -->

      <section class="main">
        <!-- <div class="main-top">
        <h1>Attendance</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          <img src="./pic/img1.jpg">
          <h4>Sam David</h4>
          <p>Ui designer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>87%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="./pic/img2.jpg">
          <h4>Balbina kherr</h4>
          <p>Progammer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>82%</span></td>
                <td><span>85%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="./pic/img3.jpg">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="./pic/img4.jpg">
          <h4>Salina micheal</h4>
          <p>Ui designer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>82%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
      </div> -->

        <section class="attendance">
          <div class="attendance-list">
            <h1>Attendance List</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Month</th>
                  <th>Percentage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <!-- <td>01</td>
                  <td>Sam David</td>
                  <td>CTO</td>
                  <td>January</td>
                  <td>90%</td> -->
                  <td><input type="text" name="id" /></td>
                  <td><input type="text" name="name" /></td>
                  <td><input type="text" name="department" /></td>
                  <td><input type="text" name="month" /></td>
                  <td><input type="text" name="percent" /></td>
                </tr>
                <tr class="active">
                  <td>02</td>
                  <td>Balbina Kherr</td>
                  <td>CAS</td>
                  <td>January</td>
                  <td>60%</td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>Badan John</td>
                  <td>NGPIS</td>
                  <td>January</td>
                  <td>80%</td>
                </tr>
                <tr>
                  <td>04</td>
                  <td>Sara David</td>
                  <td>HSE</td>
                  <td>January</td>
                  <td>90%</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Salina</td>
                  <td>CSO</td>
                  <td>February</td>
                  <td>90%</td>
                </tr>
                <tr>
                  <td>06</td>
                  <td>Tara Smith</td>
                  <td>T&M</td>
                  <td>February</td>
                  <td>80%</td>
                </tr>
                <tr>
                  <td>06</td>
                  <td>John Doe</td>
                  <td>L&C</td>
                  <td>February</td>
                  <td>80%</td>
                </tr>
                <tr>
                  <td>06</td>
                  <td>John Doe</td>
                  <td>HCM,OPS & SD</td>
                  <td>February</td>
                  <td>80%</td>
                </tr>
                <tr>
                  <td>06</td>
                  <td>Alan Smith</td>
                  <td>CCO</td>
                  <td>February</td>
                  <td>80%</td>
                </tr>
              </tbody>
            </table>
            <!-- <div class="pagination">
    <button class="btn1" onclick="backBtn()"> <i class="fas fa-arrow-left"></i>Prev</button>
    <ul>
      <li class="link active"  value="1" onclick="activeLink()">1</li>
      <li class="link" value="2" onclick="activeLink()">2</li>
      <li class="link" value="3" onclick="activeLink()">3</li>
      <li class="link" value="4" onclick="activeLink()">4</li>
      <li class="link" value="5" onclick="activeLink()">5</li>
      <li class="link" value="6" onclick="activeLink()">6</li>
    </ul>
    <button class="btn2" onclick="nextBtn()">Next<i class="fas fa-arrow-right"></i></button>
  </div> -->
          </div>
        </section>
      </section>
    </div>
    <script src="report.js"></script>
  </body>
</html>
