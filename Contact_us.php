<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
     integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
.contact{
    position: relative;
    min-height: 100vh;
    padding: 30px 100px;
    display: flex;
    justify-content: center;
    align-items:center;
    flex-direction: column;
    background:url("images/mike-swigunski-_5xgPKGepgc-unsplash.jpg");
    opacity: 0.9;
    background-size: cover;
    background-repeat: no-repeat;
}
.contact .content{
    max-width: 800px;
    text-align:center;
}
.contact .content h1{
    font-size: 36px;
    font-weight: 500;
    color:white;
    
}
.contact .content p{
    font-weight: 300;
    color:green;
    margin-top: 10px;

}
.container{
    width: 100%;
    display:flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}
.container .contactInfo{
    width:50%;
    display:flex;
    flex-direction: column;
}
.container .contactInfo .box{
    position: relative;
    padding: 20px 0;
    display: flex;
}
.container .contactInfo .box .icon{
    min-width: 60px;
    height: 60px;
    background:grey;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius:50% ;
    font-size: 22px;
}
.container .contactInfo .box .text{
    display: flex;
    margin-left: 20px;
    font-size: 16px;
    color:black;
    flex-direction: column;
    font-weight: 300;
}
.container .contactInfo .box .text h3{
    font-weight: 500;
    color:darkblue;
    margin-bottom: 5px;
}
.container .contactInfo .box .text h3:hover{
    color: white;
}
.contactForm{
    width: 40%;
    padding: 40px;
    background:hsla(0, 100%, 100%, .6);
}
.contactForm h2{
    font-size:30px;
    color: #333;
    font-weight:500;
}
.contactForm .inputBox{
    position: relative;
    width:100%;
    margin-top: 10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea{
    width: 100%;
    padding: 5px 0;
    font-size: 16px;
    margin:10px 0;
    border:none;
    border-bottom: 2px solid #333;
    outline: none;
    resize: none;
}
.contactForm .inputBox span{
    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 16px;
    margin:10px 0;
    pointer-events: none;
    transition: 0.5s;
    color:#666;
}
.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:focus ~ span{
    color:black;
    font-size: 12px;
    transform: translateY(-20px);
}
.contactForm .inputBox input[type="submit"]

{
    width: 100px;
    background-image: radial-gradient(circle at top left,#fd00da,#19d7f8);
    background-origin: border-box;
    color:#fff;
    border: none;
    cursor: pointer;
    font-size: 18px;
    padding:10px;
    border-radius:20px;
    outline: none;
}
@media(max-width:991px){
    .contact{
        padding: 50px;
    }
    .container{
        flex-direction: column;
    }
    .container .contactInfo{
        margin-bottom: 40px;
    }
    .container .contactInfo ,
    .contactForm{
        width:100%;
    }
}
.footer{
    background: #303036;
    color: #d3d3d3;
    height: 50px;
    
    
}




.footer .footer-bottom{
    background: #343a40;
    color: #686868;
    height: 50px;
    width: 100%;
    text-align: center;
    position: relative;
    bottom: 0px;
    left: 0px;
    padding-top: 20px;
   
}

    

</style>
<body>
    
    <section class="contact">
        <div class="content">
            <h1>Contact Us</h1>
            <h3><p style="color:brown;"></p></h3>

        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i></div> 
                    <div class="text">
                        <h3>Address</h3>
                        <p>G.L.A. University <br>Mathura<br>Uttar Pradesh</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>123456789</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>travel.tourism@gmail.com</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Facebook</h3>
                        <p>Travel_&_Tourism</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Instagram</h3>
                        <p>Travel_&_Tourism</p>
                    </div>
                </div>

            </div>
            <div class="contactForm">
                <form id="contact-form" method="post" action="contact.php">
                    <h2>Send Message</h2>
                    <?php 
                    $message ="";
                    if(isset($GET['error'])){
                        $message="Please fill the details";
                        echo '<div class ="alert alert-danger">'.$message.' </div>';

                    }
                    if(isset($_GET['success'])){
                        $message="Message sent";
                        echo '<div class ="alert alert-success">'.$message.' </div>';

                    }
                    
                    
                    ?>
                    <div class="inputBox">
                        <input type="text" name="UName" required="required" class="form-control mb-2">
                        <span>Full Name</span>
                     </div>
                     <div class="inputBox">
                        <input type="text" name="email" required="required" class="form-control mb-2">
                        <span>Email</span>
                     </div>
                     <div class="inputBox">
                     
                        <textarea  name="msg" class="form-control"required="required"></textarea>
                        <span>Type your Message...</span>
                     </div>
                     <div class="inputBox">
                        <input type="submit" name="save" value="send">
                        
                     </div>
                </form>

            </div>
        </div>
    </section>

</body>
</html>
