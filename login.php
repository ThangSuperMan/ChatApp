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

        <section class="form login">

            <header>Realtime Chat App</header>

            <form action="#">
                <div class="error-text">This is an error massage!</div>

                <div class="field input">
                        <label>Email address</label>
                        <input type="text" placeholder="Email address">
                </div>
                <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="Password">
                        <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                        <input type="submit" value="Continue to Chat" name="" id="">
                </div>
            </form>

            <div class="link">Not yet signed up?
                <a href="#">Signup now</a>
            </div>
        </section>
    </div>

    <script src="./JS/hide-show-password.js"></script>

</body>
</html>