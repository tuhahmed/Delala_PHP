<?php
 session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./site.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <!-- JSs-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript3" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600;1,700;1,800;1,900&display=swap");
        *,
        *::after,
        *::before {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        html {
            font-size: 62.5%;
        }
        
        body {
            font-family: "Poppins", sans-serif;
            line-height: 1.7;
            color: #777;
            font-weight: 400;
            padding: 3rem;            
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .boxs {
            max-width: 40rem;
            width: 100%;
            position: relative;
            background-color: transparent;
            height: 60rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s;
        }
        
        .forms {
            padding: 2.4rem;
            background-color: #fff;
            border-radius: 15px;
            width: 100%;
            perspective: 200rem;
            height: fit-content;
            max-height: 535px;
            height: 100%;
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
            position: absolute;
            backface-visibility: hidden;
            transition: all 1s;
        }
        
       
        
        .forms h2{
            text-align: center;
            margin-bottom: 10px;
        }
        
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 2rem;
            font-size: 2.2rem;
        }
        
        .log__box {
            position: relative;
            height: 5rem;
            width: 100%;
        }
        
        .input-style {
            width: 100%;
            border: none;
            outline: none;
            height: 100%;
            padding: 0 3rem;
            font-size: 1.2rem;
            color: #ccc;
            border-bottom: 2px solid #ccc;
            /* position: absolute; */
            transition: all 0.3s;
        }
        
        form .i {
            font-size: 2.2rem;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            color: #ccc;
        }
        
        form .eye {
            font-size: 2.2rem;
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            color: #ccc;
            padding: 1rem;
            cursor: pointer;
        }
        
        .log__box input:is(:focus,
         :valid) {
            border-bottom-color: var(--blue);
            font-size: 1.6rem;
            color: #777;
        }
        
        .log__box input:is(:focus,
         :valid)~.i {
            color: var(--blue);
        }
        
        .log__remember label {
            font-size: 1.2rem;
        }
        
        .log__remember {
            margin-top: -1rem;
            height: fit-content;
        }
        
        form button {
            width: 100%;
            height: 5rem;
            border-radius: 10px;
            background-color: var(--blue);
            color: #fff;
            border: none;
            font-weight: 100;
            letter-spacing: 1.5px;
            cursor: pointer;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
            transform: translateY(-0.5rem);
            transition: all 0.3s;
        }
        
        .form__text {
            font-size: 1.4rem;
            display: flex;
            gap: 0.5rem;
        }
        
        .form__text a {
            text-decoration: none;
            color: var(--blue);
        }
        
        input {
            border: none;
            outline: none;
        }
        
        .form__signUp {
            transform: rotateY(-180deg);
        }
        
        .form__login form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 5rem;
        }
        
        input:invalid {
            color: red;
        }
        
        input:invalid:focus {
            border-bottom: 2px solid red;
        }
        
        small {
            font-size: 1rem !important;
            position: absolute;
            bottom: -40%;
            width: 100%;
            left: 0;
            opacity: 0;
        }
        
        .error {
            opacity: 1 !important;
            color: red;
        }
        
        button:active {
            background-color: var(--darkBlue);
            transform: translateY(-0.2rem);
            box-shadow: 0 0.2rem 0.5rem rgba(0, 0, 0, 0.2);
        }
        
        input {
            font-family: "Poppins", sans-serif;
        }
        
        input[type="checkbox"] {
            accent-color: var(--blue);
        }
        
        input[type="checkbox"]:checked {
            outline: 3px solid var(--blue);
            outline-offset: 1px;
        }
    </style>

    <div class="boxs">
        <div class="forms form__login">
            <h2>Login</h2>
            <form class="loginform" acttion="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">                
                <div class="log__email log__box">
                    <input type="email" pattern="[a-zA-z0-9-+._]+@[a-zA-z0-9-+._]+\.[a-z]{2,}" class="login__email input-style" placeholder="Email Address" name="username" required />
                    <ion-icon class="i" name="mail-outline"></ion-icon>
                    <small class="form__login-email--error">error message</small>
                </div>
                <div class="log__pass log__box">
                    <input type="password" class="login__pass input-style" placeholder="Password" required name="password" value="" />
                    <ion-icon class="i" name="lock-closed-outline"></ion-icon>
                    <ion-icon class="eye showHide" name="eye-off-outline"></ion-icon>
                    <small class="form__login-pass--error">error message</small>
                </div>
                <div class="log__remember log__box">
                    <input type="checkbox" class="log__remember--input" id="log--remember" />
                    <label for="log--remember">Remember me</label>
                    <small class="form__login-remember--error">error message</small>
                </div>

                <button class="login-btn"  type="submit"  >Login</button>
                <div class="form__text">
                    <p>not a member ?</p>
                    <a class="form__sign--up" href="">sign up</a>
                </div>
            </form>
            <?php
            include 'config.php';
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query= "SELECT * FROM users Where username='$username' or email= '$username' Limit 1";
                $result= $conn->query($query);
          
                if($result->num_rows>0)
                {
                    while($user=$result->fetch_assoc())
                    {
                        $hash   = password_hash($_POST['password'], PASSWORD_DEFAULT);
                        if (password_verify($password, $user['password'])) {
                            $_SESSION["username"]= $user['username'];
                            $_SESSION["role"]=  $user['role'];
                            $_SESSION["email"]= $user['email'];                            
                            $_SESSION["IsValid"]=  true;
                            echo "<script>window.location='./dashboard.php'</script>";
                        } else {
                            echo 'Invalid username or password';
                        }

                    }
                }
                

            }
            ?>
        </div>
        <!------- regestration form ------ -->
        <div class="forms form__signUp">
            <h2>Sign Up</h2>
            <br>


            <form class="form2" action="./signup.php" method="POST">
                <div class="log__name log__box">
                    <input type="text" class="signup__name input-style" placeholder="Name" required name="newusername" />
                    <ion-icon class="i" name="person-outline"></ion-icon>
                    <small class="form__signUp-name--error">error message</small>
                </div>
                <div class="log__email log__box">
                    <input type="email" pattern="[a-zA-z0-9-+._]+@[a-zA-z0-9-+._]+\.[a-z]{2,}" class="signup__email log__email--reg input-style" placeholder="Email Address" required name="newemail" />
                    <ion-icon class="i" name="mail-outline"></ion-icon>
                    <small class="form__signUp-email--error">error message</small>
                </div>
                <div class="log__pass log__box">
                    <input type="password" class="signup__pass input-style" placeholder="Password" required name="newpassword" />
                    <ion-icon class="i" name="lock-closed-outline"></ion-icon>
                    <small class="form__signUp-pass--error">error message</small>
                </div>
                <div class="log__pass log__box">
                    <input type="password" class="signup__confirm log__confirm--reg input-style" placeholder="confirm Password" required id="ConfirmPassword" />
                    <ion-icon class="i" name="lock-closed-outline"></ion-icon>
                    <ion-icon class="eye showHide" name="eye-off-outline"></ion-icon>
                    <small class="form__signUp-confirm--error">error message</small>
                </div>
                <div class="log__remember log__box">
                    <input type="checkbox" class="log__accept--input" id="log--accept" />
                    <label for="log--accept">I Accept the terms & conditions</label>
                    <small class="form__signUp-accept--error">error message</small>
                </div>

                <button class="reg-btn" type="submit">Register</button>

                <div class="form__text">
                    <p>already have an Account ?</p>
                    <a class="form__login--link" href="">Login Now</a>
                </div>
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //my own design
        // general elements
        const passShowHide = document.querySelectorAll(".showHide");
        const boxs = document.querySelector(".boxs");
        // _________________________________________________________________
        //_________________________login elements_______________________________
        // _________________________________________________________________
        const loginForm = document.querySelector(".form__login");
        const loginPass = document.querySelector(".login__pass");
        const loginEmail = document.querySelector(".login__email");
        const loginBtn = document.querySelector(".form__login--link");
        const loginSubmit = document.querySelector(".login-btn");
        // _________________________________________________________________
        //___________________signup elements_______________________________
        // _________________________________________________________________
        const signupName = document.querySelector(".signup__name");
        const signupEmail = document.querySelector(".signup__email");
        const signuppass = document.querySelector(".signup__pass");
        const signupConfirm = document.querySelector(".signup__confirm");
        const regBtn = document.querySelector(".reg-btn");
        const logSignUp = document.querySelector(".log__email--input-signup");
        const signupForm = document.querySelector(".form__signUp");
        const signupBtn = document.querySelector(".form__sign--up");
        const password = [loginPass, signuppass, signupConfirm];
        // ________________________________________________________________
        let check = true;
        const arr = [];

        // _____functions_________________________________

        function showErorSignUp(input, msg) {
            const partElm = input.parentElement;
            const small = partElm.querySelector("small");
            small.textContent = msg;
            small.classList.add("error");
        }

        function accepted(input) {
            const partElm = input.parentElement;
            const small = partElm.querySelector("small");
            small.classList.remove("error");
        }

        function getmsg(input) {
            return input.id.charAt(0).toUpperCase() + input.id.slice(1);
        }

        function blurInputs() {
            signupEmail.value = "";
            signupName.value = "";
            signuppass.value = "";
            signupConfirm.value = "";
        }

        function checkRequired(arr) {
            for (cur of arr) {
                if (cur.value.trim() === "") {
                    showErorSignUp(cur, `${getmsg(cur)} is required`);
                    check = false;
                    continue;
                } else {
                    accepted(cur);
                }
                if (cur.type === "email") {
                    if (!cur.value.includes("@")) {
                        showErorSignUp(cur, `${getmsg(cur)} must include @`);
                        check = false;
                    } else if (!cur.value.includes(".")) {
                        showErorSignUp(cur, `${getmsg(cur)} must include dot (.) `);
                        check = false;
                    } else if (Number(cur.value[0])) {
                        showErorSignUp(cur, `${getmsg(cur)} must not start with number`);
                        check = false;
                    }
                }
            }
        }

        function validDataLogin() {
            if (
                loginEmail.value.trim() !== "" &&
                loginEmail.value.includes(".") &&
                loginEmail.value.includes("@") &&
                loginPass.value.length >= 3 &&
                loginPass.value.length <= 15 &&
                !Number(loginEmail.value[0])
            ) {
                if (loginEmail.value.includes(".") && loginEmail.value.includes("@")) {
                    const str = loginEmail.value.slice(
                        loginEmail.value.indexOf("@") + 1,
                        loginEmail.value.indexOf(".")
                    );
                    if (str.length >= 1) return true;
                }
            }
            return false;
        }

        function validDataSignUp() {
            if (
                signupEmail.value.trim() !== "" &&
                signupEmail.value.includes(".") &&
                signupEmail.value.includes("@") &&
                signuppass.value.length >= 3 &&
                signuppass.value.length <= 15 &&
                !Number(signupEmail.value[0]) &&
                signuppass.value === signupConfirm.value
            ) {
                console.log("okk");
                if (signupEmail.value.includes(".") && signupEmail.value.includes("@")) {
                    const str = signupEmail.value.slice(
                        signupEmail.value.indexOf("@") + 1,
                        signupEmail.value.indexOf(".")
                    );
                    if (str.length >= 1) return true;
                }
            }
            console.log("erroe");
            return false;
        }

        function checkLength(input) {
            if (input.value.length < 3) {
                showErorSignUp(input, `${getmsg(input)} length is less than 3`);
                check = false;
            } else if (input.value.length > 15) {
                showErorSignUp(input, `${getmsg(input)} length must be less than 16`);
                check = false;
            } else {
                accepted(input);
            }
        }

        function checkConfirm(input) {
            if (input.value !== signuppass.value) {
                showErorSignUp(input, `${getmsg(input)} is not accurate`);
                check = false;
            } else {
                accepted(input);
            }
        }

        function validateLogin() {
            checkLength(loginPass);
            checkRequired([loginEmail, loginPass]);
        }

        function validateSignUp() {
            checkLength(signuppass);
            checkLength(signupName);
            checkRequired([signupName, signupEmail, signuppass, signupConfirm]);
            checkConfirm(signupConfirm);
        }

        // _____________event listener___________________________

        // form rotation
        signupBtn.addEventListener("click", (e) => {
            e.preventDefault();
            loginForm.style.transform = "rotateY(180deg)";
            signupForm.style.transform = "rotateY(0deg)";
        });
        // form reverse rotation
        loginBtn.addEventListener("click", (e) => {
            e.preventDefault();
            loginForm.style.transform = "rotateY(0deg)";
            signupForm.style.transform = "rotateY(-180deg)";
        });
        //  show and hide password

        passShowHide.forEach((eye) => {
            eye.addEventListener("click", () => {
                const parentEl = eye.parentElement;
                const passinput = parentEl.querySelector("input");
                if (passinput.type === "password") {
                    passinput.type = "text";
                    eye.name = "eye-outline";
                } else {
                    passinput.type = "password";
                    eye.name = "eye-off-outline";
                }
            });
        });
        // check Login Inputs
        loginSubmit.addEventListener("click", (e) => {
            e.preventDefault();
            $('.loginform').submit();
        });


        // blur inputs after click then go to login inputs
        // change colors // remove repeated code
        //
    </script>
</body>

</html>