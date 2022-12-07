<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <title>Delala - Jobs</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
  <link rel='stylesheet' href='./jobliststyle.css'>
  <?php include "./header.php"; ?>
</head>

<body>
  <?php include "./nav.php"; ?>
  <!-- partial:index.partial.html -->
  <div class='container-fluid'>

    <?php include './config.php'; ?>
    <div class='wrapper'>
      <div class='search-menu'>
        <div class='search-bar'>
          <input type='text' class='search-box' autofocus />
          <div class='search item'>Product Designer
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='3' stroke-linecap='round' stroke-linejoin='round' class='feather feather-x'>
              <path d='M18 6L6 18M6 6l12 12' />
            </svg>
          </div>
          <div class='search item'>UI Designer
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='3' stroke-linecap='round' stroke-linejoin='round' class='feather feather-x'>
              <path d='M18 6L6 18M6 6l12 12' />
            </svg>
          </div>
        </div>
        <div class='search-location'>
          <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-map-pin'>
            <path d='M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z' />
            <circle cx='12' cy='10' r='3' />
          </svg>
          Toronto, ON
        </div>
        <div class='search-job'>
          <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-briefcase'>
            <rect x='2' y='7' width='20' height='14' rx='2' ry='2' />
            <path d='M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16' />
          </svg>
          <input type='text' placeholder='Job Type'>
        </div>
        <div class='search-salary'>
          <svg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' stroke='currentColor' fill='currentColor' stroke-width='.4'>
            <path d='M12.6 18H9.8a.8.8 0 010-1.5h2.8a.9.9 0 000-1.8h-1.2a2.4 2.4 0 010-4.7h2.8a.8.8 0 010 1.5h-2.8a.9.9 0 000 1.8h1.2a2.4 2.4 0 010 4.7z' stroke='currentColor' />
            <path d='M12 20a.8.8 0 01-.8-.8v-2a.8.8 0 011.6 0v2c0 .5-.4.8-.8.8zM12 11.5a.8.8 0 01-.8-.8v-2a.8.8 0 011.6 0v2c0 .5-.4.8-.8.8z' stroke='currentColor' />
            <path d='M21.3 23H2.6A2.8 2.8 0 010 20.2V3.9C0 2.1 1.2 1 2.8 1h18.4C22.9 1 24 2.2 24 3.8v16.4c0 1.6-1.2 2.8-2.8 2.8zM2.6 2.5c-.6 0-1.2.6-1.2 1.3v16.4c0 .7.6 1.3 1.3 1.3h18.4c.7 0 1.3-.6 1.3-1.3V3.9c0-.7-.6-1.3-1.3-1.3z' stroke='currentColor' />
            <path d='M23.3 6H.6a.8.8 0 010-1.5h22.6a.8.8 0 010 1.5z' stroke='currentColor' />
          </svg>
          <input type='text' placeholder='Salary Range'>
        </div>
        <button class='search-button'>Find Job</button>
      </div>
      <div class='main-container'>
        <?php
        if (isset($_SESSION['username'])) {
        ?>
          <div class='search-type'>

            <div class='job-time'>
              <div class='job-time-title'>Type of Employment</div>
              <div class='job-wrapper'>
                <div class='type-container'>
                  <input type='checkbox' id='eftj' class='job-style' checked>
                  <label for='eftj'>Full Time Jobs</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='eptj' class='job-style' checked>
                  <label for='eptj'>Part Time Jobs</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='erj' class='job-style' checked>
                  <label for='erj'>Remote Jobs</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='eij' class='job-style' checked>
                  <label for='eij'>Internship Jobs</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='ecj' class='job-style' checked>
                  <label for='ecj'>Contract</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='etj' class='job-style' checked>
                  <label for='etj'>Training Jobs</label>
                  <span class='job-number'></span>
                </div>
              </div>
            </div>
            <div class='job-time'>
              <div class='job-time-title'>Seniority Level</div>
              <div class='job-wrapper'>
                <div class='type-container'>
                  <input type='checkbox' id='slstl' class='job-style' checked>
                  <label for='slstl'>Student Level</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='slel' class='job-style' checked>
                  <label for='slel'>Entry Level</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='slml' class='job-style' checked>
                  <label for='slml'>Mid Level</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='slsl' class='job-style' checked>
                  <label for='slsl'>Senior Level</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='sld' class='job-style' checked>
                  <label for='sld'>Directors</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='slvp' class='job-style' checked>
                  <label for='slvp'>VP or Above</label>
                  <span class='job-number'></span>
                </div>
              </div>
            </div>
            <div class='job-time'>
              <div class='job-time-title'>Salary Range</div>
              <div class='job-wrapper'>
                <div class='type-container'>
                  <input type='checkbox' id='s700' class='job-style' checked>
                  <label for='s700'>$700 - $1000</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='s1000' class='job-style' checked>
                  <label for='s1000'>$1000 - $1200</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='s1200' class='job-style' checked>
                  <label for='s1200'>$1200 - $1400</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='s1500' class='job-style' checked>
                  <label for='s1500'>$1500 - $1800</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='s2000' class='job-style' checked>
                  <label for='s2000'>$2000 - $3000</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='s3000' class='job-style' checked>
                  <label for='s3000'>$3000 - $4000</label>
                  <span class='job-number'></span>
                </div>
                <div class='type-container'>
                  <input type='checkbox' id='s4000' class='job-style' checked>
                  <label for='s4000'>$4000 - $5000</label>
                  <span class='job-number'></span>
                </div>
              </div>
            </div>
          </div>
          
        <?php
        }
        ?>
        <div class='searched-jobs'>

          <div class='job-cards'>
            <?php
            $query = "";
            if (isset($_SESSION['title']) || isset($_SESSION['location'])) {
              $title = $_SESSION['title'];
              $location = $_SESSION['location'];
              $query = "Select * From jobs Where title='$title' or location='$location' ";
            } else {
              $query = 'Select * From jobs';
            }


            $result = $conn->query($query);
            $_SESSION['jobcount'] = $result->num_rows;
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {


                echo "<div class='job-card " . $row['empoyment_type'] .  "  " . $row['salary_range'] .  "  " . $row['seniority_level'] . "'>
      <div class='job-card-header'>
       <svg viewBox='0 -13 512 512' xmlns='http://www.w3.org/2000/svg' style='background-color:#2e2882'>
        <g fill='#feb0a5'>
         <path d='M256 92.5l127.7 91.6L512 92 383.7 0 256 91.5 128.3 0 0 92l128.3 92zm0 0M256 275.9l-127.7-91.5L0 276.4l128.3 92L256 277l127.7 91.5 128.3-92-128.3-92zm0 0' />
         <path d='M127.7 394.1l128.4 92 128.3-92-128.3-92zm0 0' />
        </g>
        <path d='M512 92L383.7 0 256 91.5v1l127.7 91.6zm0 0M512 276.4l-128.3-92L256 275.9v1l127.7 91.5zm0 0M256 486.1l128.4-92-128.3-92zm0 0' fill='#feb0a5' />
       </svg>
       <div class='menu-dot'></div>
      </div>
      <div class='job-card-title'>" . $row['title'] . "</div>
      <div class='job-card-subtitle'>
       The User Experience Designer position exists to create compelling and digital user experience through excellent design...
      </div>
      <div class='job-detail-buttons'>
       <button class='search-buttons detail-button'>" . $row['job_type'] . "</button>
       <button class='search-buttons detail-button'>" . $row['empoyment_type'] . "</button>
       <button class='search-buttons detail-button'>" . $row['seniority_level'] . "</button>
       
       <div class='job-description' hidden>" . $row['description'] . "</div>
      </div>
      <div class='job-card-buttons'>
       <button class='search-buttons card-buttons'>Apply Now</button>
       <button class='search-buttons card-buttons-msg'>Messages</button>
      </div>
     </div>
";
              }
            }

            ?>
          </div>
          <div class='job-overview'>
            <div class='job-overview-cards'>
              <?php

              $query = 'Select * From jobs';
              $result = $conn->query($query);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                  echo  "
      <div class='job-overview-card'>
       <div class='job-card overview-card " . $row['empoyment_type'] .  "  " . $row['salary_range'] .  "  " . $row['seniority_level'] . "'>
        <div class='overview-wrapper'>
         <svg viewBox='0 -13 512 512' xmlns='http://www.w3.org/2000/svg' style='background-color:#2e2882'>
        <g fill='#feb0a5' >
         <path d='M256 92.5l127.7 91.6L512 92 383.7 0 256 91.5 128.3 0 0 92l128.3 92zm0 0M256 275.9l-127.7-91.5L0 276.4l128.3 92L256 277l127.7 91.5 128.3-92-128.3-92zm0 0' />
         <path d='M127.7 394.1l128.4 92 128.3-92-128.3-92zm0 0' />
        </g>
        <path d='M512 92L383.7 0 256 91.5v1l127.7 91.6zm0 0M512 276.4l-128.3-92L256 275.9v1l127.7 91.5zm0 0M256 486.1l128.4-92-128.3-92zm0 0' fill='#feb0a5' />
       </svg>
         <div class='overview-detail'>
          <div class='job-card-title'>" . $row['title'] . "</div>
          <div class='job-card-subtitle'>
          " . $row['location'] . "
          </div>
         </div>
         <svg class='heart' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-heart'>
          <path d='M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z' /></svg>
        </div>
        <div class='job-overview-buttons'>
         <div class='search-buttons time-button'>" . $row['job_type'] . "</div>
         <div class='search-buttons level-button'>" . $row['seniority_level'] . "</div>
         <div class='job-description' hidden>" . $row['description'] . "</div>
         <div class='job-stat'>New</div>
         <div class='job-day'></div>
        </div>
       </div>
      </div>
 ";
                }
              }
              $conn->close();
              ?>
            </div>
            <div class='job-explain'>
              <img class='job-bg' alt=''>
              <div class='job-logos'>
                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' style='background-color:#f76754'>
                  <path xmlns='http://www.w3.org/2000/svg' d='M0 .5h4.2v23H0z' fill='#042b48' data-original='#212121'></path>
                  <path xmlns='http://www.w3.org/2000/svg' d='M15.4.5a8.6 8.6 0 100 17.2 8.6 8.6 0 000-17.2z' fill='#fefefe' data-original='#f4511e'></path>
                </svg>
              </div>
              
              <div class='job-explain-content'>
                <div class='job-title-wrapper'>
                  <div class='job-card-title'>UI /UX Designer</div>
                  <div class='job-action'>

                    <svg class='heart' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-heart'>
                      <path d='M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z' />
                    </svg>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-share-2'>
                      <circle cx='18' cy='5' r='3' />
                      <circle cx='6' cy='12' r='3' />
                      <circle cx='18' cy='19' r='3' />
                      <path d='M8.6 13.5l6.8 4M15.4 6.5l-6.8 4' />
                    </svg>

                    <button class="btn btn-primary btn-lg ApplyBtn"> APPLY </button>
                  </div>
                </div>
                <div class='job-subtitle-wrapper'>
                  <div class='company-name'>Google <span class='comp-location'>Toronto, ON.</span></div>
                  <div class='posted'>Posted 8 days ago<span class='app-number'>98 Application</span></div>
                </div>
                <div class='explain-bar'>
                  <div class='explain-contents'>
                    <div class='explain-title'>Experience</div>
                    <div class='explain-subtitle'>Minimum Tuha Year</div>
                  </div>
                  <div class='explain-contents'>
                    <div class='explain-title'>Work Level</div>
                    <div class='explain-subtitle'>Senior level</div>
                  </div>
                  <div class='explain-contents'>
                    <div class='explain-title'>Employee Type</div>
                    <div class='explain-subtitle'>Full Time Jobs</div>
                  </div>
                  <div class='explain-contents'>
                    <div class='explain-title'>Offer Salary</div>
                    <div class='explain-subtitle'>$2150.0 / Month</div>
                  </div>
                </div>
                <div class='overview-text'>
                  <div class='overview-text-header'>Overview</div>
                  <div class='overview-text-subheader job-description'>We believe that design (and you) will be critical to the company's success. You will work with our founders and our early customers to help define and build our product functionality, while maintaining the quality bar that customers have come to expect from modern SaaS applications. You have a strong background in product design with a quantitavely anf qualitatively analytical mindset. You will also have the opportunity to craft our overall product and visual identity and should be comfortable to flex into working.</div>
                </div>
                <div class='overview-text'>
                  <div class='overview-text-header'>Job Description</div>
                  <div class='overview-text-item'>3+ years working as a product designer.</div>
                  <div class='overview-text-item'>A portfolio that highlights your approach to problem solving, as well as you skills in UI.</div>
                  <div class='overview-text-item'>Experience conducting research and building out smooth flows.</div>
                  <div class='overview-text-item'>Excellent communication skills with a well-defined design process.</div>
                  <div class='overview-text-item'>Familiarity with design tools like Sketch and Figma</div>
                  <div class='overview-text-item'>Up-level our overall design and bring consistency to end-user facing properties</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script>
    const wrapper = document.querySelector(".wrapper");
    const jobCards = document.querySelectorAll(".job-card");
    const logo = document.querySelector(".logo");
    const jobLogos = document.querySelector(".job-logos");
    const jobDetailTitle = document.querySelector(
      ".job-explain-content .job-card-title"
    );
    const jobDetailDesc = document.querySelector(".job-explain-content .job-description");
    
    const jobBg = document.querySelector(".job-bg");

    jobCards.forEach((jobCard) => {
      jobCard.addEventListener("click", () => {
        const number = Math.floor(Math.random() * 10);
        const url = `https://unsplash.it/640/425?image=${number}`;
        jobBg.src = url;

        const logo = jobCard.querySelector("svg");
        const bg = logo.style.backgroundColor;
        jobBg.style.background = bg;
        const title = jobCard.querySelector(".job-card-title");
        jobDetailTitle.textContent = title.textContent;
        jobDetailDesc.textContent = jobCard.querySelector(".job-description");
        
        jobLogos.innerHTML = logo.outerHTML;
        wrapper.classList.add("detail-page");
        //wrapper.scrollTop = 0;
      });
    });

    $('.ApplyBtn').click(function() {

      var isValid = <?php if (isset($_SESSION['IsValid'])) {
                      echo "1";
                    } else {
                      echo "0";
                    }
                    ?>;
      if (isValid != 0) {
        alert("Successfully Applied");
      } else {
        window.location = "./login.php";
      }




    });

    var eftj = $('.eftj');
    var eptj = $('.eptj');
    var erj = $('.erj');
    var eij = $('.eij');
    var ecj = $('.ecj');
    var etj = $('.etj');

    var slstl = $('.slstl');
    var slel = $('.slel');
    var slml = $('.slml');
    var slsl = $('.slsl');
    var sld = $('.sld');
    var slvp = $('.slvp');

    var s700 = $('.s700');
    var s1000 = $('.s1000');
    var s1200 = $('.s1200');
    var s1500 = $('.s1500');
    var s2000 = $('.s2000');
    var s3000 = $('.s3000');
    var s4000 = $('.s4000');

    $('#eftj').click(function() {
      eftj.toggle(this.checked);
    })
    $('#eptj').click(function() {
      eptj.toggle(this.checked);
    });
    $('#erj').click(function() {
      erj.toggle(this.checked);
    })
    $('#eij').click(function() {
      eij.toggle(this.checked);
    });
    $('#ecj').click(function() {
      ecj.toggle(this.checked);
    })
    $('#etj').click(function() {
      etj.toggle(this.checked);
    });

    $('#slstl').click(function() {
      slstl.toggle(this.checked);
    })
    $('#slel').click(function() {
      slel.toggle(this.checked);
    });
    $('#slml').click(function() {
      slml.toggle(this.checked);
    })
    $('#slsl').click(function() {
      slsl.toggle(this.checked);
    });
    $('#sld').click(function() {
      sld.toggle(this.checked);
    })
    $('#slvp').click(function() {
      slvp.toggle(this.checked);
    });

    $('#s700').click(function() {
      s700.toggle(this.checked);
    })
    $('#s1000').click(function() {
      s1000.toggle(this.checked);
    });
    $('#s1200').click(function() {
      s1200.toggle(this.checked);
    })
    $('#s1500').click(function() {
      s1500.toggle(this.checked);
    });
    $('#s2000').click(function() {
      s2000.toggle(this.checked);
    })
    $('#s3000').click(function() {
      s3000.toggle(this.checked);
    });
    $('#s4000').click(function() {
      s4000.toggle(this.checked);
    })
  </script>

</body>

</html>