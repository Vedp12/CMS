// -----------------------------sign-in-page--------------------------------------------------------

document.addEventListener("DOMContentLoaded", function () {

  const signInForm = document.getElementById("signin-form");
  const firstnameInput = document.getElementById("firstname-input");
  const lastnameInput = document.getElementById("lastname-input");
  const emailInput = document.getElementById("email-input");
  const passwordInput = document.getElementById("password-input");
  const termsCheckbox = document.querySelector("input[type='checkbox']");



  firstnameInput.addEventListener("input", function () {
    if (firstnameInput.value.trim() === "") {
      firstnameInput.style.border = "2px solid red"
    } else {
      firstnameInput.style.border = "2px solid green"
    }

  })

  lastnameInput.addEventListener("input", function () {
    if (lastnameInput.value.trim() === "") {
      lastnameInput.style.border = "2px solid red"
    } else {
      lastnameInput.style.border = "2px solid green"
    }

  })

  // Real-time Validation
  emailInput.addEventListener("input", function () {
    if (!validateEmail(emailInput.value)) {
      emailInput.style.border = "2px solid red";
    } else {
      emailInput.style.border = "2px solid green";
    }
  });

  passwordInput.addEventListener("input", function () {
    if (passwordInput.value.length < 6) {
      passwordInput.style.border = "2px solid red";
    } else {
      passwordInput.style.border = "2px solid green";
    }
  });

  // Form Submission Handling
  signInForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    const firstname = firstnameInput.value.trim();
    const lastname = lastnameInput.value.trim();
    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();

    let errors = [];

    if (!firstname) {
      errors.push("First name is required")
    }

    if (!lastname) {
      errors.push("last name is required")
    }

    if (!validateEmail(email)) {
      errors.push("Invalid email address.");
    }

    if (password.length < 6) {
      errors.push("Password must be at least 6 characters long.");
    }

    if (!termsCheckbox.checked) {
      errors.push("You must agree to the Terms and Conditions.");
    }

    if (errors.length > 0) {
      displayMessage(errors.join("<br>"), "error");
      return;
    }

    displayMessage("Login successful!", "success");

    // Simulating form submission 

    setTimeout(() => {
      window.location.href = "dashboard-section.html"; // Redirect to the dashboard 
    }, 1500);

  });

  // Email Validation Function
  function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  // Display Message Function
  function displayMessage(message, type) {
    let messageBox = document.getElementById("message-box");

    if (!messageBox) {
      messageBox = document.createElement("div");
      messageBox.id = "message-box";
      signInForm.appendChild(messageBox);
    }

    messageBox.innerHTML = message;
    messageBox.style.padding = "10px";
    messageBox.style.marginTop = "10px";
    messageBox.style.textAlign = "center";
    messageBox.style.borderRadius = "5px";
    messageBox.style.fontWeight = "bold";

    if (type === "error") {
      messageBox.style.color = "red";
      messageBox.style.background = "#ffdada";
    } else {
      messageBox.style.color = "green";
      messageBox.style.background = "#d4f8d4";
    }
  }
});



// -----------------------------login-page------------------------------------------------------------

document.addEventListener("DOMContentLoaded", function () {
  const signInForm = document.getElementById("signin-form");
  const emailInput = document.getElementById("email-input");
  const passwordInput = document.getElementById("password-input");
  const termsCheckbox = document.querySelector("input[type='checkbox']");



  // Real-time Validation
  emailInput.addEventListener("input", function () {
    if (!validateEmail(emailInput.value)) {
      emailInput.style.border = "2px solid red";
    } else {
      emailInput.style.border = "2px solid green";
    }
  });

  passwordInput.addEventListener("input", function () {
    if (passwordInput.value.length < 6) {
      passwordInput.style.border = "2px solid red";
    } else {
      passwordInput.style.border = "2px solid green";
    }
  });

  // Form Submission Handling
  signInForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();

    let errors = [];


    if (!validateEmail(email)) {
      errors.push("Invalid email address.");
    }

    if (password.length < 6) {
      errors.push("Password must be at least 6 characters long.");
    }

    if (!termsCheckbox.checked) {
      errors.push("You must agree to the Terms and Conditions.");
    }

    if (errors.length > 0) {
      displayMessage(errors.join("<br>"), "error");
      return;
    }

    displayMessage("Login successful!", "success");

    // Simulating form submission 
    setTimeout(() => {
      window.location.href = "dashboard-section.html"; // Redirect to the dashboard 
    }, 1500);
  });

  // Email Validation Function
  function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  // Display Message Function
  function displayMessage(message, type) {
    let messageBox = document.getElementById("message-box");

    if (!messageBox) {
      messageBox = document.createElement("div");
      messageBox.id = "message-box";
      signInForm.appendChild(messageBox);
    }

    messageBox.innerHTML = message;
    messageBox.style.padding = "10px";
    messageBox.style.marginTop = "10px";
    messageBox.style.textAlign = "center";
    messageBox.style.borderRadius = "5px";
    messageBox.style.fontWeight = "bold";

    if (type === "error") {
      messageBox.style.color = "red";
      messageBox.style.background = "#ffdada";
    } else {
      messageBox.style.color = "green";
      messageBox.style.background = "#d4f8d4";
    }
  }
});

// -----------------pop-up------------------------------------------------------------------------------------------------------------

document.addEventListener("DOMContentLoaded", function () {
    let keyAcs = document.getElementById("key-access");
    let keyIn = document.getElementById("key-popUp");
    let keyclose = document.getElementById("cancel-button");

    function appearHere() {
        keyIn.classList.toggle("showPopUp");
    }

    function disappear() {
        keyIn.classList.remove("showPopUp");
    }

    keyAcs.addEventListener("click", appearHere);
    keyclose.addEventListener("click", disappear);
});


// ------------------------------------------------------------------------------------------------------------

document.addEventListener("DOMContentLoaded", function () {
  const portals = {
      student: "student-portal.html",
      teacher: "teacher-portal.html",
      admin: "admin-portal.html"
  };

  const keys = {
      "STUDENT123": "student",
      "TEACHER456": "teacher",
      "ADMIN789": "admin"
  };

  function displayPopup(message, type) {
      const popup = document.getElementById("popupMessage");
      popup.innerText = message;
      popup.style.color = type === "success" ? "green" : "red";
      popup.style.display = "block";

      setTimeout(() => { popup.style.display = "none"; }, 3000);
  }

  function accessPortal() {
      const accessKey = document.getElementById("accessKeyInput").value.trim().toUpperCase();
      if (!accessKey) {
          displayPopup("Please enter a valid access key!", "error");
          return;
      }

      const role = keys[accessKey];
      if (role) {
          displayPopup(`Access Granted! Redirecting to ${role} portal...`, "success");
          setTimeout(() => { window.location.href = portals[role]; }, 2000);
      } else {
          displayPopup("Invalid Access Key! Please try again.", "error");
      }
  }

  // Event listeners
  const accessButton = document.getElementById("accessbutton");
  const accessInput = document.getElementById("accessKeyInput");

  if (accessButton && accessInput) {
      accessButton.addEventListener("click", accessPortal);
      accessInput.addEventListener("keypress", function(event) {
          if (event.key === "Enter") {
              accessPortal();
          }
      });
  }
});

// ----------------------------------------------------------------------------------------------------------------------------------------------------


