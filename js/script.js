$(document).ready(function () {
    $("#register").submit(function (e) {
        e.preventDefault();

        full_name = $("#full_name").val();
        reg_no = $("#reg_no").val();
        DOB = $("#DOB").val();
        phone_no = $("#phone_no").val();
        email_id = $("#email_id").val();

        $.ajax({
            type: "POST",
            url: "php/signup_validate.php",
            data:
                "full_name=" +
                full_name +
                "&reg_no=" +
                reg_no +
                "&DOB=" +
                DOB +
                "&phone_no=" +
                phone_no +
                "&email_id=" +
                email_id,
            success: function (response) {
                if (response == "fieldempty") {
                    showAlert("Please fill in all the details!");
                }

                //name contains digits or special characters
                else if (response == "nameinvalid") {
                    showAlert("Name can contain only letters!");
                }

                //email is of wrong format
                else if (response == "emailwrongformat") {
                    showAlert(
                        "Email is of wrong format!<br>Please check your email id!"
                    );
                }

                //Contact no contains letters or special characters
                else if (response == "contactinvalid") {
                    showAlert("Contact number must contain only digits!");
                }

                //Contact is less than 10 digits
                else if (response == "shortcontact") {
                    showAlert("Contact number must be atleast 10 digits long!");
                }

                //redirection form login page if user doesn't own an account
                else if (response == "existingmember") {
                    showAlert(
                        "Seems You had already registered<br>Thank you!",
                        "success"
                    );

                    document
                        .querySelectorAll(".form-control")
                        .forEach(function (input) {
                            input.value = "";
                            input.blur();
                        });
                }

                //redirection form login page if user doesn't own an account
                else if (response == "registrationsuccess") {
                    showAlert(
                        "Registration successful<br>Thank you!",
                        "success"
                    );

                    document
                        .querySelectorAll(".form-control")
                        .forEach(function (input) {
                            input.value = "";
                            input.blur();
                        });
                }

                //server errors
                else {
                    showAlert("Something wrong with the server!");
                }
            },
        });
    });
});

let modalBG = document.querySelector(".modal-bg");
let modal = document.querySelector(".modal");

function showAlert(message, status = "error") {
    modal.querySelector(".modal--text").innerHTML = message;

    if (status == "success")
        modal.querySelector(
            ".btn-ok"
        ).innerHTML = `<i class="fa fa-2x fa-thumbs-up"></i>`;
    else modal.querySelector(".btn-ok").innerHTML = `Try Again`;
    modalBG.classList.remove("hide");
    modal.classList.remove("hide");
}

function hideAlert() {
    modal.querySelector(".modal--text").innerHTML = "";
    modalBG.classList.add("hide");
    modal.classList.add("hide");
}

document.querySelector(".btn-ok").addEventListener("click", hideAlert);
