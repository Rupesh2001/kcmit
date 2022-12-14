<!DOCTYPE html>
<html>

<head>
  <title>KCMIT</title>
  <style>
    body {
      margin: 0;
      font-family: "Arial";
    }
	
    p {
      font-size: 16px;
      line-height: 24px;
	  font-family: cursive;
      font-size: unset;
    }

    header {
      background-color: #f1f1f1;
      padding: 30px 0px;
	  width: 100%;
	  Top: 0;
	  position: fixed;
	  height: 10px;
    }

    .logo {
      float: left;
      width: 50%;
    }

    .logo img {
      margin-top: -10px;
      height: 45px;
    }

    .menu a {
      padding: 5px 10px;
      text-decoration: none;
      color: #4487b1;
      font-size: 16px;
      line-height: 20px;
    }

    .menu a:hover {
      color: #355061;
    }

    .container {
      width: 1170px;
      margin: 0 auto;
      display: block;
    }

    .small-container {
      width: 750px;
      margin: 0 auto;
    }

    .cover {
      width: 100%;
      height: 700px;
      background: url("images/cc.jpg") center no-repeat;
      background-size: cover;
	  margin: 0px 0px 80px;
    }

    .cover:hover {
      width: 100%;
      height: 700px;
      background: url("images/1209535.jpg") center no-repeat;
      background-size: cover;
    }

    .about {
	   background-image: url("./images/imprint-2508603.jpg");
	   background-repeat: no-repeat;
	   background-size: cover;
	   background-position: fixed;
       padding: 220px 0px;
    }

    .about p {
      text-align: center;
	  font-family: cursive;
	  color: white;
    }

    .programs {
      background-color: #271155;
      color: white;
      margin: 10px;
      padding: 55px;
	  font-size: small;
	  width: 21%;
      height: 165px;
	  float: left;
	  font-family: system-ui;
    }

    .faculty {
      background: #f5f5f5;
      padding: 40px 0px;
    }

    .faculty h3 {
      font-size: 28px;
      margin-bottom: 15px;
    }

    .testimonial {
      padding: 90px 0px;
	  margin: 10px;
    }

    .testimonial h3 {
      font-size: 28px;
	  margin-top: 300px;
      margin-bottom: 15px;
    }

    .testimonial-content {
      border: 2px solid #eaeaea;
      background-color: #eaeaea;
      border-radius: 5px;
      padding: 16px;
      margin: 16px 0;
	  font-family: cursive;
	  color: #2f0650;
    }

    .testimonial-content::after {
      content: "";
      clear: both;
      display: table;
    }

    .testimonial-content img {
      float: left;
      margin-right: 20px;
      border-radius: 50%;
      height: 90px;
      width: 90px;
    }

    .testimonial-content span {
      font-size: 30px;
      margin-right: 15px;
    }
    .img {
      align: center;

    }

   .feedback {
      background: #f1f1f1;
      padding: 40px 0px;
    }

    .feedback h3 {
      font-size: 28px;
      margin-bottom: 15px;
    }

    label {
      display: block;
      padding-bottom: 10px;
      color: #fff;
    }

    form {
      width: 500px;
      margin: 0 auto;
      border: 4px solid grey;
      padding: 20px;
      background: grey;
    }

    input {
      display: block;
      width: 100%;
      padding: 10px 20px;
      margin-bottom: 15px;
      box-sizing: border-box;
    }

    label.gender,
    label.chkprogarms {
      display: inline-block;
      width: 100px;
    }

    input[type="radio"],
    input[type="checkbox"] 
  {
      display: inline-block;
    }

    .gender span,
    .chkprogarms span {
      display: inline-block;
    }

    textarea {
      width: 100%;
      height: 150px;
      margin-bottom: 15px;
    }

    input[type="submit"],
    input[type="reset"] {
      margin-right: 10px;
      padding: 10px 20px;
      background: indigo;
      color: #fff;
      border: 1px solid indigo;
      display: block;
    }

    footer {
      background-image: url("./images/alexis-brown-omeaHbEFlN4-unsplash.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
      text-align: center;
      color: #90e24d;
    }

    .top-footer {
          padding: 20px 0px ;
    }

    .bottom-footer {
      background: #333;
      padding: 20px 0px;
    }

    .bottom-footer p {
      margin: 0;
    }
  </style>
</head>

<body>
  <header>
    <div class="container">
      <div class="logo">
        <img src="images/logo.png" alt="logo" align="left" />
      </div>
      <div class="menu">
        <a href="#"> Home</a>
        <a href="Programs" target="_blank"> Programs </a>
        <a href="Contact.html" target="_blank"> Contact us </a>
        <a href="News" target="_blank"> News & Events</a>
        <a href="About us" target="_blank"> About</a>
        <a href="Gallery.html" target="_blank"> Gallery </a>
      </div>
    </div>

  </header>

  <div class="cover">
  </div>

  <div class="about">
    <div class="small-container">
    </div>

  </div>

  <div class="faculty">
    <div class="container">
      <h3 align="center"> Faculty </h3>

      <div align="center" class="programs">
        <h1>BIM</h2>
          <h4>Bachelor in Information Management</h4>
          <h4>
            The BIM program is designed to equip graduates with the skills
            and attributes required to be effective and efficient information technology professionlas.
          </h4>
      </div>

      <div align="center" class="programs">
        <h1>BBA</h1>
        <h4>Bachelor of Business Administration</h4>
        <h4>BBA is a four years program designed to develop socially responsive, creative, and result oriented
          management
          professionlas.</h4>

      </div>

      <div align="center" class="programs">
        <h1>BCA</h1>
        <h4>Bachelor in Computer Application</h4>
        <h4>BCA is an Information Technology based career that awards the undergraduate degree in Computer Applications.
          This program provides a sound academic base for an advanced career in computer application.</h4>

      </div>
    </div>
  </div>

  <div class="testimonial">
    <div class="container">
      <h3 align="center"> Student's Testimonials</h3>
      <p align="center"><b>Students Quotes regarding education of Kantipur college of management & information
          technology
      </p>

      <div class="testimonial-content">
        <img src="images/66acbbbba4432fd3fd9304b75407a1c9.jpg" alt="lisa">
        <p><span>Kalpana gurung</span> BBA 2016 Batch </p>
        <p>???KCMIT was definitely an enriching experience and went far beyond my expectations. Teaching sessions were
          great,
          very well prepared and explained.The teachers were also very helpful and available to answer any
          questions,curiosity or doubt.???</p>
      </div>

      <div class="testimonial-content">
        <img src="images/53764595_1965555156887152_9211187837406281728_n.jpg" alt="Pritam">
        <p><span>Sita kharel</span> BIM 2018 Batch</p>
        <p>???The teachers here at KCMIT are great and interactive atmosphere is particularly impressive.???</p>
      </div>
      <div class="testimonial-content">
        <img src="images/naruto1.jpg" alt="naruto">
        <p><span>Ram bahadur khadka</span> BCA 2019 Batch</p>
        <p>???KCMIT has been my second family.Also it provided me a platform to enhance my skills and build up my
          confidence.???
        </p>
      </div>
    </div>
  </div>
   <div class="img">
        <img src="images/feedback.png" alt="feedback" style="width: 450px;"/>
      </div>

     <div class="feedback">
    <div class="container">
      <h3 align="center">Feedback</h3>

      <form action="hello.php" method="POST" enctype="multipart/form-data">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" id="fullname" placeholder="Full name" required="required"/>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" placeholder="Address" required="required" />

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Email" required="required" />

        <label for="phone">Phone Number:</label>
        <input type="number" name="phone" id="phone" placeholder="Phone Number" required="required" />

        <label>Gender</label>

        <label for="male" class="gender" name="gen">
          <input type="radio" name="gen" id="male" value="male" /><span>Male</span>
        </label>
        <label for="female" class="gender" name="gen">
          <input type="radio" name="gen" id="female" value="female" /><span>Female</span>
        </label>
        <label for="others" class="gender" name="gen">
          <input type="radio" name="gen" id="others" value="others" /><span>Others</span>
        </label>

        <label>Programs:</label>
        <label for="bba" class="chkprogarms">
          <input type="checkbox" name="chk" id="bba" value="BBA" />BBA
        </label>
        <label for="bim" class="chkprogarms">
          <input type="checkbox" name="chk" id="bim" value="BIM" />BIM
        </label>
        <label for="bca" class="chkprogarms">
          <input type="checkbox" name="chk" id="bca" value="BCA" />BCA
        </label>

        <label for="about_user">About User: </label>
        <textarea name="aboutus" id="about_user" placeholder="Write something"></textarea>

        <label for="fileupload">File Upload:</label>
        <input type="file" name="fileupload" id="fileupload" />

        <input type="submit" name="Submit" value="Submit" />
        <input type="reset" name="Reset" value="Reset" />
      </form>
    </div>
  </div>


  <footer>
    <div class="top-footer" style="width: 1400px">

      <div class="container">
        <p text-align="left">Kantipur college of management and information technology</p>
        <p text-align="left">Address: Mid-Baneshor</p>
        <p text-align="left">Fax number:090-983638</p>
        <p text-align="left">Telephone: 010-1920191</p>
        <p text-align="left">KCMIT<p>
            <p text-align="left">Contact information: <a href="mailto:pritamshrestha445@gmail.com">
                kcmit@gmail.com</a>.</p>
            <p text-align="left">Posted by: Pritam Shrestha</p>
            



      </div>
    </div>
    <div class="bottom-footer">
      <div class="container">
        <p align="center">Copyright 2022.All right Reserved<p></p>
      </div>
    </div>
  </footer>
</body>

</html>
