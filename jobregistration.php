<?php
if (!isset($_SESSION)) {
    session_start();
}
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Registration</title>
    <?php include 'header.php'; ?>

</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="container-fluid">



        <div class="w3-card-2 w3-margin" style="max-width:100%;">
            <div class="w3-container w3-padding-16">
                <div class="w3-row w3-margin-top">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="row g-3 needs-validation" novalidate method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                                <div class="row mt-3">
                                    <label for="title" class="form-label">Job Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="" required>
                                    <div class="invalid-feedback">
                                        Please fill job title.
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="JobType" class="form-label">Job Type</label>
                                    <select class="form-select" name="jobtype" required>
                                        <option selected disabled value="">Select Job Type</option>
                                        <option value="Accountancy, banking, and finance jobs">Accountancy, banking, and finance jobs</option>
                                        <option value="Business, consulting and management">Business, consulting and management</option>
                                        <option value="Charity and voluntary work"> Charity and voluntary work </option>
                                        <option value="Creative arts and design"> Creative arts and design </option>
                                        <option value="Energy and utilities"> Energy and utilities </option>
                                        <option value="Engineering and Manufacturing"> Engineering and Manufacturing </option>
                                        <option value="Environment and Agriculture"> Environment and Agriculture </option>
                                        <option value="Healthcare"> Healthcare </option>
                                        <option value="Hospitality and Event Management"> Hospitality and Event Management </option>
                                        <option value="Information Technology"> Information Technology </option>
                                        <option value="Law"> Law </option>
                                        <option value="Law enforcement and security"> Law enforcement and security </option>
                                        <option value="Leisure, Sports, and Tourism"> Leisure, Sports, and Tourism </option>
                                        <option value="Marketing, Advertising, and PR"> Marketing, Advertising, and PR </option>
                                        <option value="Media and the Internet"> Media and the Internet </option>
                                        <option value="Property and Consultation"> Property and Consultation </option>
                                        <option value="Public services and Administration"> Public services and Administration </option>
                                        <option value="Recruitment and HR"> Recruitment and HR </option>
                                        <option value="Retail"> Retail </option>
                                        <option value="Sales"> Sales </option>
                                        <option value="Science and Pharmaceuticals"> Science and Pharmaceuticals </option>
                                        <option value="Social care"> Social care </option>
                                        <option value="Teacher Training and Education"> Teacher Training and Education </option>
                                        <option value="Transport and Logistics"> Transport and Logistics </option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a job type.
                                    </div>
                                </div>
                                <div class="row mt-4">

                                    <label for="EmploymentType" class="form-label">Type of Employment</label>
                                    <select class="form-select" name="employmenttype" required>
                                        <option selected disabled value="">Select Employement Type</option>
                                        <option value="eftj">Full Time Jobs</option>
                                        <option value="eptj">Part Time Jobs</option>
                                        <option value="erj">Remote Jobs</option>
                                        <option value="eij">Internship Jobs</option>
                                        <option value="ecj">Contract</option>
                                        <option value="etj">Training Jobs</option>

                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a type of employment.
                                    </div>
                                </div>

                                <div class="row mt-4">

                                    <label for="SeniorityLevel" class="form-label">Seniority Level</label>
                                    <select class="form-select" name="senioritylevel" required>
                                        <option selected disabled value="">Select Seniority Level</option>
                                        <option value="slstl">Student Level</option>
                                        <option value="slel">Entry Level</option>
                                        <option value="slml">Mid Level</option>
                                        <option value="slsl">Senior Level</option>
                                        <option value="sld">Directors</option>
                                        <option value="slvp">VP or Above</option>

                                    </select>
                                    <div class="invalid-feedback">
                                        Please select seniority level.
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <label for="SalaryRange" class="form-label">Salary Range</label>
                                    <select class="form-select" name="salaryrange" required>
                                        <option selected disabled value="">Select Salary Range</option>
                                        <option value="s700">$700 - $1000</option>
                                        <option value="s1000">$1000 - $1200</option>
                                        <option value="s1200">$1200 - $1400</option>
                                        <option value="s1500">$1500 - $1800</option>
                                        <option value="s2000">$2000 - $3000</option>
                                        <option value="s3000">$3000 - $4000</option>
                                        <option value="s4000">$4000 - $5000</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a salary range.
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="experience" class="form-label">Experience</label>
                                    <input type="text" class="form-control" id="exprience" name="exprience" value="" required>
                                    <div class="invalid-feedback">
                                        Please fill experience.
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" value="" required>
                                    <div class="invalid-feedback">
                                        Please fill location.
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="deadline" class="form-label">Deadline</label>
                                    <input class="form-control" name="deadline" type="date" value="" id="deadline" required>
                                    <div class="invalid-feedback">
                                        Please fill the deadline.
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="description" class="form-label">Job Description</label>
                                    <textarea id='description' name='description' class="form-control" placeholder="Job Description"></textarea>
                                    <div class="invalid-feedback">
                                        Please fill job description.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <link rel='stylesheet' href='./jobliststyle.css'>
                            <?php

                            $query = "select * from jobs order by datecreated desc LIMIT 1;";
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "
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
                                    </div>
                                </div>
                                <div class='job-subtitle-wrapper'>
                                    <div class='company-name'>Patreon <span class='comp-location'>Londontowne, MD.</span></div>
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
                                    <div class='overview-text-subheader jobdesc'>We believe that design (and you) will be critical to the company's success. You will work with our founders and our early customers to help define and build our product functionality, while maintaining the quality bar that customers have come to expect from modern SaaS applications. You have a strong background in product design with a quantitavely anf qualitatively analytical mindset. You will also have the opportunity to craft our overall product and visual identity and should be comfortable to flex into working.</div>
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
                            </div>";
                                }
                            }

                            ?>
                        </div>
                    </div>

                    <?php

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        // collect value of input field
                        $title = $_POST['title'];
                        $description =  $_POST['description']; //$_POST['description'];
                        $loc = $_POST['location'];
                        $jobtype = $_POST['jobtype'];
                        $salaryrange = $_POST['salaryrange'];
                        $emptype = $_POST['employmenttype'];
                        $senioritylevel = $_POST['senioritylevel'];
                        $exprience = $_POST['exprience'];

                        $insertQuery = "INSERT INTO jobs VALUES ( null, '$title','$jobtype','$senioritylevel','$salaryrange','$emptype', $exprience, '$description', '$loc', CURRENT_TIMESTAMP)";
                        echo $insertQuery;
                        if ($conn->query($insertQuery) === TRUE) {
                        } else {

                            echo "Something goes wrong";
                        }
                        $conn->close();
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
        $(document).ready(function() {
            $('#description').summernote({
                height: 250,
                minHeight: 250,
                focus: true,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'hr']],
                    ['color', ['style']],
                ]
            });
        });


        $('.submitBtn').addEventListener("click", (e) => {
            e.preventDefault();
            $('#hiddenDescription').val($('#summernote').summernote('code'));
            if (true) {
                $('.submitBtn').submit();
            }
        });
    </script>


</body>

</html>