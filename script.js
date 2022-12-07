//my own design
// general elements
//const passShowHide = document.querySelectorAll;
//const $(".boxs") = document.querySelector(".$(".boxs")");
// _________________________________________________________________
//_________________________login elements_______________________________
// _________________________________________________________________
//const $(".form__login") = document.querySelector(".form__login");
//const $(".login__pass") = document.querySelector(".login__pass");
//const $(".login__email") = document.querySelector(".login__email");
//const loginBtn = document.querySelector;
//const loginSubmit = document.querySelector(".login-btn");
// _________________________________________________________________
//___________________signup elements_______________________________
// _________________________________________________________________
//const $(".signup__name") = document.querySelector(".signup__name");
//const $(".signup__email") = document.querySelector(".signup__email");
//const $(".signup__pass") = document.querySelector(".signup__pass");
//const $(".signup__confirm") = document.querySelector(".signup__confirm");
//const regBtn = document.querySelector(".reg-btn");
//const $(".log__email--input-signup") = document.querySelector(".log__email--input-signup");
//const $(".form__signUp") = document.querySelector(".form__signUp");
//const $(".form__sign--up") = document.querySelector(".form__sign--up");
const password = [$(".login__pass"), $(".signup__pass"), $(".signup__confirm")];
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
    $(".signup__email").value = "";
    $(".signup__name").value = "";
    $(".signup__pass").value = "";
    $(".signup__confirm").value = "";
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
        $(".login__email").value.trim() !== "" &&
        $(".login__email").value.includes(".") &&
        $(".login__email").value.includes("@") &&
        $(".login__pass").value.length >= 3 &&
        $(".login__pass").value.length <= 15 &&
        !Number($(".login__email").value[0])
    ) {
        if ($(".login__email").value.includes(".") && $(".login__email").value.includes("@")) {
            const str = $(".login__email").value.slice(
                $(".login__email").value.indexOf("@") + 1,
                $(".login__email").value.indexOf(".")
            );
            if (str.length >= 1) return true;
        }
    }
    return false;
}

function validDataSignUp() {
    if (
        $(".signup__email").value.trim() !== "" &&
        $(".signup__email").value.includes(".") &&
        $(".signup__email").value.includes("@") &&
        $(".signup__pass").value.length >= 3 &&
        $(".signup__pass").value.length <= 15 &&
        !Number($(".signup__email").value[0]) &&
        $(".signup__pass").value === $(".signup__confirm").value
    ) {
        console.log("okk");
        if ($(".signup__email").value.includes(".") && $(".signup__email").value.includes("@")) {
            const str = $(".signup__email").value.slice(
                $(".signup__email").value.indexOf("@") + 1,
                $(".signup__email").value.indexOf(".")
            );
            if (str.length >= 1) return true;
        }
    }
    console.log("error");
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
    if (input.value !== $(".signup__pass").value) {
        showErorSignUp(input, `${getmsg(input)} is not accurate`);
        check = false;
    } else {
        accepted(input);
    }
}

function validateLogin() {
    checkLength($(".login__pass"));
    checkRequired([$(".login__email"), $(".login__pass")]);
}

function validateSignUp() {
    checkLength($(".signup__pass"));
    checkLength($(".signup__name"));
    checkRequired([$(".signup__name"), $(".signup__email"), $(".signup__pass"), $(".signup__confirm")]);
    checkConfirm($(".signup__confirm"));
}

// _____________event listener___________________________

// form rotation
$(".form__sign--up").click(function(e) {
    e.preventDefault();
    $(".form__login").style.transform = "rotateY(180deg)";
    $(".form__signUp").style.transform = "rotateY(0deg)";
});
// form reverse rotation
$(".form__login--link").click(function(e) {
    e.preventDefault();
    $(".form__login").style.transform = "rotateY(0deg)";
    $(".form__signUp").style.transform = "rotateY(-180deg)";
});
//  show and hide password
/*
$(".showHide").forEach((eye) => {
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

*/
// check Login Inputs
$(".login-btn").click(function(e) {
    e.preventDefault();
    validateLogin();
    if (validDataLogin()) {
        console.log("hello");
        $(".boxs").style.opacity = "0";
        $(".boxs").style.visibility = "hidden";
    }
});
// check signUp Inputs
$(".reg-btn").click(function(e) {
    e.preventDefault();
    validateSignUp();
    const newobj = {
        email: $(".signup__email").value,
        pass: $(".signup__pass").value,
        name: $(".signup__name").value,
    };
    if (validDataSignUp()) {
        arr.push(newobj);
        console.log(newobj);
        blurInputs();
        $(".login-btn").click();
        $(".login__email").focus();
    }
});

// blur inputs after click then go to login inputs
// change colors // remove repeated code
//