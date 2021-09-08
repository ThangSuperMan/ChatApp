<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom file css -->
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    <div class="wrapper">

        <section class="form signup">

            <header>Realtime Chat App</header>

            <form action="POST">
                <div class="error-text">This is an error massage!</div>
                <div class="name-details">

                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="firstName" placeholder="First name" require>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lastName" placeholder="Last name" require>
                    </div>

                </div>

                <div class="field input">
                        <label>Email address</label>
                        <input type="text" name="email" placeholder="Email address">
                </div>
                <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password">
                        <i class="fas fa-eye"></i>

                </div>
                <div class="field image">
                        <label>Select image</label>
                        <input type="file" name="image" id="">
                </div>
                <div class="field button">
                        <input type="submit" value="Continue to Chat" name="" id="">
                </div>
            </form>

            <div class="link">Already signed up?
                <a href="#">Login now</a>
            </div>

        </section>

    </div>

    <script src="./JS/hide-show-password.js"></script>
    <script src="./JS/Signup.js"></script>

</body>
</html>