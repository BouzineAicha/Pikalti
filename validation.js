// function validateForm() {
//     let fname = document.forms["myForm"]["fname"].value;
//     if (fname == "") {
//       alert("Name must be filled out");
//       return false;
//     }
//     let lname = document.forms["myForm"]["lname"].value;
//     if (lname == "") {
//       alert("lname must be filled out");
//       return false;
//     }
//     let phone = document.forms["myForm"]["phone"].value;
//     if (phone == "") {
//       alert("phone must be filled out");
//       return false;
//     }
//     let adress = document.forms["myForm"]["adress"].value;
//     if (adress == "") {
//       alert("adress must be filled out");
//       return false;
//     }
//     let email = document.forms["myForm"]["email"].value;
//     if (email == "") {
//       alert("email must be filled out");
//       return false;
//     }
//     let cin = document.forms["myForm"]["cin"].value;
//     if (cin == "") {
//       alert("cin must be filled out");
//       return false;
//     }
//   }
var Title = document.getElementById("title");
var listbook = [];
var no_valid = 0;
var errorTitle = document.getElementById("error1");
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    let messages = [];
    if (lang.value === "" || lang.value === null) {
      errorLanguages.innerHTML =
        " The language of book field is not filled out  *";
      no_valid++;
    } else {
      errorLanguages.innerHTML = "✔";
      errorLanguages.style.color = "green";
    }
  });