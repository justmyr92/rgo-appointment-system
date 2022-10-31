function loginAuthentication(status) {
    if (status == true) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Invalid SR Code or Password!",
        });
    } else {
        Swal.fire({
            icon: "success",
            title: "Success!",
            text: "You have successfully logged in!",
        });
    }
}