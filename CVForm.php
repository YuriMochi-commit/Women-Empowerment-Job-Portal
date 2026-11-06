<?php include('dbConnect.php')?>
<?php include('validateCVForm.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.26.0/dist/tsparticles.min.js"></script>
    <title>CV Form</title>
    
    <style>
        body {
            background: linear-gradient(170deg,#fcd6cc,#f5dfe8,#ddfad7,#ebd3ed,#e1e9fc);
            font-family: Arial, Helvetica, sans-serif;
    
                    }

        

       
    
        .CV-container {
            margin: 40px auto;
            width: 90%;
            max-width: 800px;
            border-radius: 20px;
            background-color: rgba(247, 235, 235, 0.2); /* Semi-transparent background */
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px); /* This will blur the content behind the container */
        }

        h1 {
            color: #B82132;
            margin-bottom: 20px;
            text-align: center;
        }

        .row {
            margin-bottom: 15px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .col-35, .col-55 {
            flex: 1;
            min-width: 200px; /* Ensures a minimum width for smaller screens */
        }

        .col-35 {
            max-width: 35%;
        }

        .col-55 {
            max-width: 65%;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            border: 2px solid #B82132;
            border-radius: 4px;
            margin-bottom: 20px;
            transition: border-color 0.3s;
            color: #B82132; /* Text color */
            background-color: rgba(255, 255, 255, 0.8); /* Slightly transparent background */
        }

        input:focus, textarea:focus, select:focus {
            border-color: #F2B28C;
            outline: none;
            box-shadow: 0 0 5px rgba(242, 178, 140, 0.5);
        }

        label {
            display: block;
            color: #B82132;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .button {
            --color: #B82132;
            padding: 0.8em 1.7em;
            background-color: transparent;
            border-radius: .3em;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: .5s;
            font-weight: 600;
            font-size: 16px;
            border: 2px solid var(--color);
            color: var(--color);
            text-transform: uppercase;
            margin-top: 20px;
            display: inline-block;
        }

        .button:hover {
            background-color: var(--color);
            color: #fff;
        }

        .button:active {
            filter: brightness(.8);
        }

        .bb {
            display: flex;
            justify-content: flex-end;
        }
        .file-upload {
            display: inline-block;
            width: 150px;
            height: 150px;
            border: 2px dashed #B82132;
            position: relative;
            cursor: pointer;
        }

        .file-upload input[type="file"] {
            display: none; /* Hide the default file input */
        }

        .plus-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 50px; /* Adjust size as needed */
            color: #B82132; /* Change color as needed */
        }
        /* Responsive Styles */
        @media (max-width: 768px) {
            .col-35, .col-55 {
                max-width: 100%;
                flex: 100%;
            }

            .button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    
<div class="CV-container">
    
<center>
    <h1>CV Form</h1>
</center>
<form action="CVForm.php" method="POST">
        <div class="row">   
            <div class="col-55">
               
            </div>
            <div class="col-35">
                <label for="photo" class="file-upload">
                    <input type="file" id="photo" required>
                    <span class="plus-icon">+</span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-35">
                <label for="name">Name</label>
            </div>
            <div class="col-55">
                <input type="text" id="name" name="name" required>
            </div>
        </div>
        <div class="row">
            <div class="col-35">
                <label for="DateOfBirth">Date of Birth</label>
            </div>
            <div class="col-55">
                <input type="date" id="DateOfBirth" name="DateOfBirth" required>
            </div>
        </div>
        <div class="row">
            <div class="col-35">
                <label for="Nationality">Nationality</label>
            </div>
            <div class="col-55">
                <input type="text" id="Nationality" name="nationality" required>
            </div>
        </div>
        <div class="row">
            <div class="col-35">
                <label for="NRC">N.R.C</label>
            </div>
            <div class="col-55">
                <input type="text" id="NRC" name="NRC" required>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-35">
                <label for="Gender">Gender</label>
            </div>
            <div class="col-55">
                <select id="Gender" required>
                    <option selected disabled>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div> -->
        <div class="row">
            <div class="col-35">
                <label for="MaritalStatus">Marital Status</label>
            </div>
            <div class="col-55">
                <select id="MaritalStatus" name="MaritalStatus" required>
                    <option selected disabled>Select Marital Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="widowed">Widowed</option>
                    <option value="divorced">Divorced</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-35">
                <label for="phone">Phone No.</label>
            </div>
            <div class="col-55">
                <input type="tel" id="phone" name="phone" required>
            </div>
        </div>
        <div class="row">
            <div class="col-35">
                <label for="Religion">Religion</label>
            </div>
            <div class="col-55">
                <input type="text" id="Religion" name="religion" required>
            </div>
        </div>
        <div class="row">
            <div class="col-35">
                <label for="LanguageKnowledge">Language Knowledge</label>
            </div>
            <div class="col-55">
                <input type="text" id="LanguageKnowledge" name="LanguageKnowledge" required>
            </div>
        </div>
        <div class="row">
            <div class="col-35">
                <label for="Qualification">Qualification</label>
            </div>
            <div class="col-55">
                <textarea id="Qualification" name="qualification" rows="3" required></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-35">
                <label for="Experience">Experience</label>
            </div>
            <div class="col-55">
                <textarea id="Experience" name="experience" rows="3" required></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-35">
                <label for="Address">Address</label>
            </div>
            <div class="col-55">
                <textarea id="Address" name="address" rows="3" required></textarea>
            </div>
        </div>
        <div class="bb">
            <button type="submit" class="button">Submit</button>
        </div>
    </form>
</div>


</body>
</html>