<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/request.css" />
    <link rel="shortcut icon" type="x-icon" href="images/tab.png" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JobOnCampus</title>
  </head>
  <body>
    <header>
      <img
        class="logo"
        src="images/jobOnCampusBlack.png"
        alt="JobOnCampus Logo"
      />
      <nav>
        <ul class="nav_links">
          <li><a href="careers.php">Careers</a></li>
          <li><a href="applications.php">Applications</a></li>
          <li><a href="request.php">Job Requests</a></li>
        </ul>
      </nav>
      <a class="cta" href="index.php"><button>Log Out</button></a>
    </header>
    <main>
      <section class="request-job-container">
        <h2>Request a Job</h2>
        <form action="submit_request.php" method="post">
          <div class="form-group">
            <label for="job-title">Job Title</label>
            <input
              list="job-titles"
              id="job-title"
              name="job_title"
              placeholder="Type to search..."
              required
            />
            <datalist id="job-titles">
              <option value="Software Engineer"></option>
              <option value="Data Analyst"></option>
              <option value="Product Manager"></option>
              <option value="Graphic Designer"></option>
            </datalist>
          </div>

          <div class="form-group">
            <label for="education">Level of Education</label>
            <select id="education" name="education" required>
              <option value="spm">SPM</option>
              <option value="diploma">Diploma</option>
              <option value="degree">Degree</option>
            </select>
            <input
              type="text"
              id="specific-degree"
              name="specific_degree"
              placeholder="Specify level of education (e.g., Bachelor's in Computer Science)"
            />
          </div>

          <div class="form-group">
            <label for="about-yourself">About Yourself</label>
            <textarea
              id="about-yourself"
              name="about_yourself"
              rows="5"
              placeholder="Explain why you should get the job"
              required
            ></textarea>
          </div>

          <div class="form-group">
            <label for="certifications">Certifications</label>
            <input
              type="text"
              id="certifications"
              name="certifications"
              placeholder="List any certifications (e.g., AWS Cloud Security, CompTia Security+)"
            />
          </div>

          <div class="form-group">
            <label for="job-type">Job Type</label>
            <select id="job-type" name="job_type" required>
              <option value="fulltime">Full-time</option>
              <option value="parttime">Part-time</option>
              <option value="contract">Contract</option>
            </select>
          </div>

          <button type="submit">Submit Request</button>
        </form>
      </section>
    </main>
  </body>
</html>
