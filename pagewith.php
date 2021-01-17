<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page with comments</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/pagewith.css">
</head>

<body>
<?php include_once('components/navBar.php');?>
<?php include_once('components/Table.php');?>
    
    <section>
        <h2 class="page">Page with comments</h2>
        <p class="repository">Repository-hosted Themes are required to support display of comments on static Pages as
            well as on single
            blog Posts. This static Page has comments, and these comments should be displayed.
            If the Theme includes a custom option to prevent static Pages from displaying comments, such option must be
            disabled (i.e. so that static Pages display comments) by default.
            Also, verify that this Page does not display taxonomy information (e.g. categories or tags) or time-stamp
            information (Page publish date/time).</p>
        <p class="repalies">3 REPLIES TO “PAGE WITH COMMENTS”</p>
    </section>
    
    <section>
        <img class="profile" src="img/profft.jpg" alt="This photo about profile">
        <p class="firstcom">TELLYWORTHTEST2</p>
        <p class="firstcomdate">September 4, 2007 at 10:49 am</p>
        <p class="contributor">Contributor comment.</p>
        <button class="firtrep">REPLY</button>
    </section>
    <section>
        <img class="secondprofile" src="img/profft.jpg" alt="This photo about profile">
        <p class="anon">ANON</p>
        <p class="seconddate">September 4, 2007 at 10:49 am</p>
        <p class="anonmont">Anonymous comment.</p>
        <button class="secondbutton">REPLY</button>
    </section>
    <section>
        <img class="lastprofile" src="img/profft.jpg" alt="This photo about profile">
        <p class="John">JOHN DOE </p>
        <p class="last-date">September 4, 2007 at 10:48 am</p>
        <p class="author">Author comment.</p>
        <button class="lastbutton">REPLY</button>
    </section>
    <h3 class="leave">LEAVE A REPLY </h3>
    <form method="post" name="myForm" action="scripts/action.php">
        <textarea class="comment" name="comment" rows="15" cols="80" placeholder="Comment"></textarea>
        <input class="name" type="text" name="name" placeholder="Name" required >
        <input class="email" type="email" name="email" placeholder="E-mail" required >
        <button class="post-reply">POST REPLY</button>
    </form>

</body>

</html>