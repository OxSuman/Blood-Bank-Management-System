
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        *{
    margin: 0;
    padding: o;
}

/* mobile */

@media (max-width: 1200px) {
    
  

.container{
    width: 100%;
    height: max-content;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.blogs-heading{
    margin: 100px;
    width: 100%;
}
.blogs-text{
    font-size: 3em;
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    font-style: normal;
    color: white;
    padding-left: 30px;
    margin: 10px;
    border-radius: 10px;
    background-color: #ff5436;
}
.blog-box{
    display: flex;
    justify-content: center;
    align-items: center;
    border-top: 2px solid black;
    flex-direction: column;
    padding: 10px;
    
}
.img-box{
    height: 400px;
    width: 350px;
    margin: 50px 0px 50px 0px;
    
    background-position: center;
}
.img1{
    background-image: url("131.jpg");
    background-repeat: no-repeat;
    background-size: cover;

}

.img2{
    background-image: url("6.jpg");
    background-repeat: no-repeat;
    background-size: cover;

}
.img3{
    background-image: url("2-4-1024x787.jpg");
    background-repeat: no-repeat;
    background-size: cover;

}
.title{
    margin: 10px;
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    font-style: normal;
}
.text-sec{
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
    padding: 10px;
}
.read-more{
    margin-top: 30px;
    font-size: 1.3rem;
    color: rgb(252, 55, 55);
    text-decoration: underline;
}
}

@media (min-width: 1200px) {


.container{
    width: 100%;
    height: max-content;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.blogs-heading{
    
    width: 100%;
}
.blogs-text{
    font-size: 3em;
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    font-style: normal;
    padding-left: 100px;
    color: white;
    margin: 40px;
    border-radius: 10px;
    background-color: #ff5436;
}
.blog-box{
    display: flex;
    width: 80%;
    margin-top: 30px;
    background-color: rgb(235, 235, 235);
    border-radius: 10px;
}
.img-box{
    height: 500px;
    width: 450px;
    margin: 50px 10px 50px 60px;
    
    background-position: center;
}
.img1{
    background-image: url("131.jpg");
    background-repeat: no-repeat;
    background-size: cover;

}

.img2{
    background-image: url("6.jpg");
    background-repeat: no-repeat;
    background-size: cover;

}
.img3{
    background-image: url("2-4-1024x787.jpg");
    background-repeat: no-repeat;
    background-size: cover;

}
.title{
    margin-bottom: 30px;
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    font-style: normal;
}
.text-sec{
    width: 60%;
    margin: 50px;
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
}
.read-more{
    margin-top: 30px;
    font-size: 1.3rem;
    color: rgb(252, 55, 55);
    text-decoration: underline;
}
}
        </style>
</head>
<body>
<?php
$active ='blog';
 include('head.php') ?>
<div class="container">
<div class="blogs-heading"><center><p class="blogs-text">Our Latest Blogs</p></center></div>
<div class="blog-box">
            <div class="img-box img1"></div>
            <div class="text-sec">
                <h1 class="title">Join Us in Our Village Blood Donation Drive on June 20, 2024</h1>
                <p>Dear Community Members,We are thrilled to announce our upcoming blood donation drive in our beloved village on June 20, 2024. This initiative aims to collect blood donations to support those in need and save lives within our community.Why donate blood? Blood donation is a noble act that directly impacts the lives of individuals facing medical emergencies, surgeries, and chronic illnesses. By donating just a small amount of your time and blood, you can make a significant difference.Event Details:Date: June 20, 2024Time: [Insert Time]Location: [Insert Location]What to Bring: Valid ID proof, mask, and a heart full of goodwill!</p>

                
            </div>
        </div>
        <div class="blog-box">
            <div class="img-box img2"></div>
            <div class="text-sec">
                <h1 class="title">District Head Inspector Inaugurates Blood Donation CampDear Residents</h1>
                <p> We are thrilled to share the exciting news that our blood donation camp has been inaugurated by none other than our esteemed District Head Inspector. This event, held on [insert date], marks a significant milestone in our community's efforts to support healthcare needs through voluntary blood donations.Key Highlights of the Inaugural Ceremony:Date: [Insert Date]Time: [Insert Time]Location: [Insert Location]Guest of Honor: District Head Inspector [Name]A Momentous Occasion: The presence of District Head Inspector [Name] underscores the importance of blood donation in saving lives and supporting medical emergencies within our district. Their support and encouragement inspire us all to contribute meaningfully to our community's well-being.</p>

                
            </div>
        </div>
        <div class="blog-box">
            <div class="img-box img3"></div>
            <div class="text-sec">
                <h1 class="title">Community Unity: Police Officers Donate Blood at Our CampDear Neighbors,We are thrilled to share an inspiring update from our recent blood donation camp.</h1>
                <p>Our dedicated police officers joined hands in support by donating blood alongside community members. This act of solidarity and generosity sets a powerful example of unity within our district.Highlights of the Event:Date: [Insert Date]Location: [Insert Location]Police Involvement: Officers from [Police Department Name] contributed to our blood donation drive, reinforcing their commitment to community welfare</p>

              
            </div>
        </div>
    </div>
    <div>
   
</div>  
</body>
<?php include('footer.php'); ?>
</html>