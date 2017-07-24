<html lang="en-US">
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Right Triangle - Online Area Calculator</h1>
        <p>
        Given three dimensions - lengths of 2 legs and length of hypotenuse, respectively,  calculate the area. <br/>
        If the dimensions are not possible to form a right triangle, alert. <br/>
        <h3>Contents</h3>
        <ol>
            <li><a href="#content-1">Try it out</a></li>
            <li><a href="#content-2">How it works</a></li>
            <li><a href="#content-3">External References</a></li>
        </ol>
        <hr/>
        <h2 id="content-1">Try it out</h2>
        <p>
        The website consists of 5 files: index.html, result.php, style.css, resultsheet.css, and script.js <br/>
        Download them <a href="https://github.com/nhduong0133/right-triangle-calculator/releases" target="_blank">here</a>. <br/>
        Under your root directory, create a folder. Name it "Right Triangle". Save those files in that folder. <br/>
        Then, start a virtual server. On your web browser, enter this address: localhost/Right Triangle/index.html <br/>
        (Assuming that you are using Xampp on Windows) <br/>
        You are now on the input page. <br/>
        On the input page, you will see the title "Right Triangle!" at the top, three circles, a submit button, <br/>
        and a blue triange at the bottom of the page. Those 3 circles are actually input fields.<br/>
        Try to do the follwing things: <br/>
        <ul>
            <li>Hover your mouse cursor over one of the circles</li>
            <li>Hover your mouse cursor over the submit button</li>
            <li>Hover your mouse cursor <b>near</b> the triangle</li>
            <li>Leave one or all of the fields empty and then hit the submit button</li>
            <li>Leave no field empty but input an alphabetical character to one of the fields then hit submit</li>
        </ul>
        Once you're done with that, try to enter numbers to those 3 circles and hit the submit button. <br/>
        They are the lengths of leg, leg, and hypotenuse, respectively. <br/>
        It should redirect you to the result page. If you input 3, 4, and 5 respectively, you should get <br/>
        something like "Area: 6". If you input 10, 9, and 4, you should get something like "Given dimensions <br/>
        are not proper for a right triangle".
        </p>
        <hr/>
        <h2 id="content-2">How it works</h2>
        <p>
        When you hover your mouse cursor near the triangle, the triangle rotates and moves up, its color turns to red. <br/>
        This is done by its styling in a CSS selector with a pseudo class. <br/>
<pre>
#triangle:hover {
    border: solid 65px;
    border-color: transparent transparent #F12F2F transparent;
    margin-top: 0px;
    transform: rotate(180deg) scaleX(-1);
}
</pre>
        Notice the last line <code>transform: rotate(180deg) scaleX(-1);</code> which makes the triangle rotates on hover. <br/>
        Next, check the script.js file. There are 2 if statements in it, which tells if the inputs are invalid. <br/>
        It checks if the user has input something by comparing it to <code>null</code>. Recalls that null is a data type <br/>
        which basically means "nothing." <br/>
        We also have the <code>isNan</code> function to check if the inputs are numeric. NaN stands for <b>N</b>ot <b>a</b> <b>N</b>umber. <br/>
        If you enter valid inputs, the code in those if statements won't get executed. JavaScript then creates 3 cookies <br/>
        with the names a, b, c respectively, that store the inputs you submitted earlier. It then redirects you to the <br/>
        result page, which is result.php <br/>
        On the result page, PHP does the math. First, it calls the values of cookies which were created by JavaScript earlier, <br/>
        and store those values in three variables, namely <code>$a</code>, <code>$b</code>, <code>$c</code>. <br/>
        It then uses the Pythagoras's theorem to check if those values (which are the triangle's dimensions) can make up a <br/>
        right triangle. If they can, the result page displays the text "Area: " with the triangle's area alongside. <br/>
        If they cannot, the result page displays the text "Given dimensions are not proper for a right triangle". <br/>
        </p>
        <hr/>
        <h2 id="content-3">External References</h2>
        <p>
            <ol>
                <li><a href="https://github.com/nhduong0133/passwordform-demo#content-1" target="_blank">Virtual Server</a></li>
                <li><a href="https://www.w3schools.com/js/js_cookies.asp" target="_blank">Cookies handling with JavaScript</a></li>
                <li>PHP's <a href="http://php.net/manual/en/reserved.variables.cookies.php" target="_blank">$_COOKIE</a></li>
            </ol>
        </p>
    </body>
</html>