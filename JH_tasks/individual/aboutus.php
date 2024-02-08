<?php include 'header.php'
?>

<h2>About us</h2>

<script>
    //This is a comment

    document.write ("Hello world")

    //triggering an alert box
    window.alert ("This is an alert")

</script>

<noscript>
    If javascript is not enabled this will be displayed so users know they need to enable js.
</nonscript>


<script>
    //document.write but after loading the page

    function hello {
        document.write("This is after the page has loaded")
    }
</script>

<button onclick="document.write('This is something')">Click Me</button>