<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha384-..." crossorigin="anonymous">
        <title>Save the students | sfglobal</title>
    </head>
    <body>
        <div class="container">
            <form action="config2.php">
                <i class="fas fa-paper-plane"></i>
                <h1>Fill in the correct details!</h1>

                <div class="input-group">
                    <label>Full Name</label>
                    <input type="text" name="username" placeholder="Enter your name" id="contact-name" onkeyup="validateName()">
                    <span id="name-error"></span>
                </div>
                <div class="input-group">
                    <label>Phone No.</label>
                    <input type="tel" name="phone" placeholder="123 456 7890">
                    <span id="phone-error"></span>
                </div>
                <div class="input-group">
                    <label>Email Id</label>
                    <input type="email" name="email" placeholder="Enter Email">
                    <span id="email-error"></span>
                </div>
                <div class="input-group">
                    <label>What was promised you?</label>
                    <textarea rows="1" name="message" placeholder="Enter your message"></textarea>
                    <span id="message"></span>
                </div>
                <div class="input-group">
                    <label>Why should we consider you?</label>
                    <textarea rows="5" name="message" placeholder="Enter your message"></textarea>
                    <span id="message"></span>
                </div>
                <p>Click submit and like our facebook page to continue!</p>
                <button><a href="main.php">Submit</a></button>
                <span id="submit-error"></span>
            
            </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>