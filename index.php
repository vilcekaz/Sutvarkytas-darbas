<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activello</title>
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <script src="js/index.js"></script>
    <?php include_once('components/navBar.php');?>

    <input class="search" type="text" value="Search">
    <div class="morecontainer">
        <i class="fa fa-search" aria-hidden="true"></i>
    </div>
    <!--virsutinis tekstas-->
    <section>
        <h1 class="specialtext">Activello</h1>
        <p class="anothertext">Just another colorlib.com site</p>
    </section>

    <!-- Slideshow container-->
    <!--<div class="slideshow-container">
      <!- Full-width images with number and caption text-->
    <div class="mySlides fade">
        <nav class="Numbertext">Template</nav>
        <img class="firstphoto" src="img/photo1.jpg" alt="This is first photo" style="width: 100%;">
        <nav class="texttwo--one">Template: Featured Image (No Sidebar Layout)</nav>
        <nav class="textthree">READ MORE</nav>
    </div>

    <div class="mySlides fade">
        <nav class="Numbertext-two">Template</nav>
        <img class="secondphoto" src="img/photo2.jpg" alt="This is next photo" style="width: 100%;">
        <nav class="texttwo-more">Template: Featured Image (Full Width No Sidebar Layout)</nav>
        <nav class="textthree">READ MORE</nav>
    </div>

    <div class="mySlides fade">
        <nav class="Numbertext-three">Template</nav>
        <img class="threephoto" src="img/photo3.jpg" alt="This is three photo" style="width: 100%;">
        <nav class="texttwo">Template: More Tag</nav>
        <nav class="textthree">READ MORE</nav>
    </div>
    <div class="mySlides fade">
        <nav class="Numbertext-for">Template</nav>
        <img class="anotherphoto" src="img/photo4.jpg" alt="This is photo" style="width: 100%;">
        <nav class="texttwo-twotwo">Template: Excerpt (Defined)</nav>
        <nav class="textthree">READ MORE</nav>
    </div>

    <div class="mySlides fade">

        <nav class="Numbertext-last">Template</nav>
        <img class="lastphoto" src="img/photo5.jpg" alt="This is last photo" style="width: 100%;">
        <nav class="texttwo">Template: Comments</nav>
        <nav class="textthree">READ MORE</nav>
    </div>

    <!-- Next and previous buttons-->
    <a class="prev" onclick="plusSlides(-1)"></a>
    <a class="next" onclick="plusSlides(1)"></a>
    </div>
    <br>

    <!-- Thhe dots/circles-->
    <div style="text-align: center;">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>
    <!--Antra psl dalis-->
    <div>
        <p class="post">POST FORMATS</p>
        <p class="Format">Post Format:Standard</p>
        <p class="posted">Posted on October 5, 2016 by Aigars</p>


        <img class="img-img" src="img/aboutMe.jpg" alt="This is about me">
    </div>
    <div class="container">
        <p class="about">All children, except one, grow up. They soon know that they will grow up, and the way Wendy
            knew was this.</p>
        <nav>
            <a href="readmore.php" class="Readmore">| READ MORE |</a>
        </nav>
    </div>
    <!--desne psl dalis-->
    <div>
        <h2 class="me">ABOUT ME</h2>
        <img class="imimgimg" src="img/aboutMe.jpg" alt="This is photo about me">
    </div>
    <div class="containertwo"></div>
    <p class="moremore">My name is Activello and I am an awesome WordPress blog theme for photography, food, travel
        and other blogs.
        I was created by colorlib.</p>
    <div>
        <p class="follow">FOLLOW ME</p>
    </div>
    <div>
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-youtube" aria-hidden="true"></i>
        <i class="fa fa-google-plus" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-github" aria-hidden="true"></i>
    </div>
    <!--apatine psl dalis,kairej pusej-->
    <div>
        <p class="Pfor">POST FORMATS</p>
        <p class="galley">Post Format:Gallery</p>
        <p class="december">Posted on December 12, 2015 by Aigars</p>
        <img class="valtis" src="img/Boat.jpg" alt="This is valtis">
        <p class="textaboutwater">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt, sapien nec
            aliquam viverra, libero
            elit euismod turpis, vel sollicitudin nisi eros eget tortor.</p>
    </div>
    <div>
        <p class="Template">TEMPLATE</p>
        <p class="Templateimage">Template: Featured Image (No Sidebar Layout)</p>
        <p class="november">Posted on November 11, 2015by Aigars</p>
        <img class="mazimg" src="img/1smallPhoto.jpg" alt="This is photo about bike">
        <p class="firsttext">This post should display a featured image, if the theme supports it. Non-square images can
            provide some
            unique styling issues. This post tests a vertical featured image.</p>
    </div>
    <div>
        <p class="templatetwo">TEMPLATE</p>
        <p class="templatefull">Template: Featured Image (Full Width No Sidebar Layout)</p>
        <p class="novembertwo">Posted on November 1, 2015by Aigars</p>
        <img class="mazimgtwo" src="img/smallPhotoTwo.jpg" alt="about this">
        <p class="twotext">This post should display a featured image, if the theme supports it. Non-square images can
            provide some unique styling issues.</p>
    </div>
    <div>
        <p class="threetemplate">TEMPLATE</p>
        <p class="templatemore">Template: More Tag</p>
        <p class="novemberthree">Posted on November 1, 2015by Aigars</p>
        <img class="maztrecft" src="img/smallPhotoThree.jpg" alt="More phote">
        <p class="texttry">This content is before the more tag. Right after this sentence should be a “continue reading”
            button of some
            sort.</p>
    </div>
    <div>
        <p class="templatefor">TEMPLATE</p>
        <p class="tempalteex">Template: Excerpt (Defined)</p>
        <p class="october">Posted on October 15, 2015by Aigars</p>
        <img class="ketmazft" src="img/smallPhotoFor.jpg" alt="This is photo about grows">
        <p class="lasttextaboytemplate">This is a user-defined post excerpt. It should be displayed in place of the post
            content in archive-index
            pages.</p>
    </div>
    <!--desne psl dalis-->
    <section>
        <p class="recentposts"> RECENT POSTS</p>
        <img class="sufotiku" src="img/withFotoparate.jpg" alt="suft">
        <p class="strandard">Post Format: Standard</p>
        <p class="date">- 05 Oct , 2016</p>
    </section>
    <section>
        <img class="water" src="img/smallBoat.jpg" alt="About water">
        <p class="form">Post Format: Gallery</p>
        <p class="datatwo"> - 12 Nov , 2015</p>
    </section>
    <section>
        <img class="what" src="img/1smallPhoto.jpg" alt="About small photo">
        <p class="templateno">Template: Featured Image (No Sidebar Layout)</p>
        <p class="lastdate">- 11 Nov , 2015</p>
    </section>
    <!--lentele desnej pusej-->
    <section>
        <p class="categories">CATEGORIES</p>
        <table class="tablefirst">
            <tr>
                <td class="firstline">Post Formats</td>

                <td class="firstnumber">11</td>

            </tr>
            <tr>
                <td class="secondline">Template</td>
                <td class="secondnumber">5</td>

            </tr>
            <tr>
                <td class="anotherline">Cat A</td>
                <td class="anothernumber">3</td>

            </tr>
            <tr>
                <td class="case">Edge Case</td>
                <td class="case3">3</td>

            </tr>
            <tr>
                <td class="lastline">Cat B</td>
                <td class="lastnumber">2</td>

            </tr>
        </table>
        <p class="any">Any text goes here</p>
        <p class="This">THIS THEME IS ADSENSE READY</p>
    </section>
    <!--Puslapio apacia-->
    <div class="containertwo"> </div>
    <div class="iconstop">
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-youtube" aria-hidden="true"></i>
        <i class="fa fa-google-plus" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-github" aria-hidden="true"></i>
    </div>
    <div class="Activello">Activello. Theme by Colorlib Powered by WordPress</div>
   
    <script>showSlides(1)</script>




</body>

</html>