//  Webdevelopmet services formvalidation start...............................................

    const Errorsms = document.getElementById('Error');
    const nameInput = document.getElementById('client_name');
    const emailInput = document.getElementById('client_email');
    const mobInput = document.getElementById('client_mobile');
    const addressInput = document.getElementById('client_address');
    const webInput = document.getElementById('client_websitetype');
    const planInput = document.getElementById('client_plantype');

    function Check_Name() {
      const name = nameInput.value.trim();
      if (!/^[a-zA-Z\s]{4,}$/.test(name)) {
        Errorsms.innerHTML = "Please enter a valid name (letters only, min 4 characters).";
        nameInput.style.color = "red";
        setTimeout(() => {
          Errorsms.innerHTML = "";
          nameInput.value = "";
          nameInput.style.color = "black";
        }, 3000);
      } else {
        Errorsms.innerHTML = "";
      }
    }

    function Check_Email() {
      const email = emailInput.value.trim();
      if (!/^\S+@\S+\.\S+$/.test(email)) {
        Errorsms.innerHTML = "Please enter a valid email address.";
        emailInput.style.color = "red";
        setTimeout(() => {
          Errorsms.innerHTML = "";
          emailInput.value = "";
          emailInput.style.color = "black";
        }, 3000);
      } else {
        Errorsms.innerHTML = "";
      }
    }

    function Check_Mob() {
      const mobile = mobInput.value.trim();
      if (!/^\d{10}$/.test(mobile)) {
        Errorsms.innerHTML = "Mobile number must be exactly 10 digits.";
        mobInput.style.color = "red";
        setTimeout(() => {
          Errorsms.innerHTML = "";
          mobInput.value = "";
          mobInput.style.color = "black";
        }, 3000);
      } else {
        Errorsms.innerHTML = "";
      }
    }

    function ShubmitForm() {
      //Check select dropdowns are not on the first (default) option................................
      if (
        nameInput.value.trim() === "" ||
        mobInput.value.trim() === "" ||
        emailInput.value.trim() === "" ||
        addressInput.value.trim() === "" ||
        webInput.selectedIndex === 0 ||
        planInput.selectedIndex === 0 ||
        webInput.selectedIndex === ""||
        planInput.selectedIndex === ""
      ) {
        Errorsms.innerHTML = "⚠️ Please fill all fields correctly before submitting.";
        return false;
      }

      // // Show success message
      // const Sbtn = document.getElementById("img_form_sbtn");
      // Sbtn.style.display = "block";
      // Errorsms.innerHTML = "✅ Form submitted successfully!";

      // // Optionally reset after 4 seconds
      // setTimeout(() => {
      //   window.location.reload();
      // }, 10000);
      return true;

    }

    nameInput.addEventListener('focus', () => nameInput.style.color = "black");
    emailInput.addEventListener('focus', () => emailInput.style.color = "black");
    mobInput.addEventListener('focus', () => mobInput.style.color = "black");



// Webdevelopmet services formvalidation end here..............................................


// // Hide Inspect Element
// document.onkeydown = function(e) {
//   // Disable F12
//   if (e.keyCode == 123) {
//     return false;
//   }

//   // Disable Ctrl+Shift+I
//   if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
//     return false;
//   }

//   // Disable Ctrl+Shift+C
//   if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
//     return false;
//   }

//   // Disable Ctrl+Shift+J
//   if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
//     return false;
//   }

//   // Disable Ctrl+U
//   if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
//     return false;
//   }

//   // Disable Ctrl+S
//   if (e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)) {
//     e.preventDefault();
//     return false;
//   }
// };

// // Disable Right-Click
// document.addEventListener('contextmenu', function(e) {
//   e.preventDefault();
// });

// // Disable Double-Click
// document.addEventListener('dblclick', function(e) {
//   e.preventDefault();
// });

