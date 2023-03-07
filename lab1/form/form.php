
<html>
    <head>
        <title> contact form </title>
<link rel="stylesheet" href="form/form.css">

    </head>
  
    <body>
        <h3> Contact Form </h3>
        <div id="after_submit">
            
        </div>
        <div class=container>
        <form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">
            <h5>  <?php   echo $error ?> </h5> 
            <div class="row">
                <label class="required" for="name">Your name:</label><br />
                <input id="name" class="input" name="name" type="text" value="<?php echo remember_variable("name"); ?>"  /><br />

            </div>
            <div class="row">
                <label class="required" for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" value="<?php echo remember_variable("email"); ?>" /><br />

            </div>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" ><?php echo remember_variable("message"); ?></textarea><br />

            </div>

            <input id="submit" name="submit" type="submit"/>
            <input id="clear" name="clear" type="reset" value="clear form" />
</div>
        </form>
    </body>

</html>