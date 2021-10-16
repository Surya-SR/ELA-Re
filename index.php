<?php include 'php/connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ELA | GCE, Salem</title>

    <link rel="shortcut icon" href="images/ela_logo.jpg" type="image/x-icon">

    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="css/style-minified.css">

    <script defer src="js/jquery.min.js"></script>
    <script defer src="js/script.min.js"></script>

</head>

<body>
    <div class="main">
        <div class="detailsbox">
            
            <header class="header">
                <h1 class="header--title">
                    <!-- <img src="images/ela_logo.jpg" alt="ela logo"> -->
                    <span>English</span>
                    <span>Literary</span>
                    <span>Association</span>
                </h1>
                <h2 class="header--sec-title">GCE Salem</h2>
            </header>

            <div class="description-box">
                <p class="description">Two roads diverged in a wood, and I - I took the road less traveled by</p>
                <p class="author-name">- Robert Frost</p>
            </div>

            <div class="image-box">
                <img class="image" src="images/undraw_book_lover.svg" alt="">
            </div>

            <div class="contact-box">
                <div class="contacts">
                    <div class="contact contact--1">
                        <h3 class="contact--header">Staff Incharge</h3>
                        <p>Prof. Vivekananthan ( <a class="contact-no" href="tel:9952164453">99521 64453</a> )</p>
                    </div>
                    <div class="contact contact--2">
                        <h3 class="contact--header">Student Secretary</h3>
                        <p>A. Mohammed Safwan ( <a class="contact-no" href="tel:8825727877">88257 27877</a> )</p>
                        <p>S. Samyukthaa ( <a class="contact-no" href="tel:9940858220">99408 58220</a> )</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="form">
            <div class="card">
                <div class="card--body">
                    <form id="register" action="#" method="POST" class="form--layout" autocomplete="off">
                        <div class="form-group">
                            <h2 class="form--header header--title">Enroll Now</h2>
                        </div>
                        <div class="form-group">
                            <input spellcheck="false" type="text" name="full_name" id="full_name" class="form-control" placeholder="Full Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="number" minlength="7" name="reg_no" id="reg_no" class="form-control" placeholder="Register Number" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="DOB" id="DOB" placeholder="Date of Birth" class="form-control" required onfocus="(this.type='date')"
                            onblur="(this.type='text')"/>
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone_no" id="phone_no" class="form-control" placeholder="Whatsapp Number" required/>
                        </div>
                        <div class="form-group">
                            <input spellcheck="false" type="email" name="email_id" id="email_id" class="form-control" placeholder="Email ID" required/>
                        </div>
                        <div class="submit-box">
                            <input type="submit" class="btn-submit" value="Register" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="follow-box">
                <h3 class="follow--header">Follow us</h3>
                <div class="follow-icons">
                    <div class="follow_icon--box">
                        <a target="_blank" href="https://www.instagram.com/english_club_gce"><i class="fa fa-2x fa-instagram follow-icon"></i></a>
                    </div>
                    <div class="follow_icon--box">
                        <a target="_blank" href="mailto:elagcesalem11@gmail.com"><i class="fa fa-2x fa-envelope-o follow-icon"></i></a>
                    </div>
                    <div class="follow_icon--box">
                        <a target="_blank" href="https://chat.whatsapp.com/HBcC0ZHJgcmKl6ASczmauK"><i class="fa fa-2x fa-whatsapp follow-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-bg hide">
        <div class="modal hide">
            <p class="modal--text">Registration successfull</p>
            <button class="btn-ok"><i class="fa fa-2x fa-thumbs-up"></i></button>
        </div>
    </div>
    
</body>

</html>