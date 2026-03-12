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



    nameInput.addEventListener('focus', () => nameInput.style.color = "black");
    emailInput.addEventListener('focus', () => emailInput.style.color = "black");
    mobInput.addEventListener('focus', () => mobInput.style.color = "black");





