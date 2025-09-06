<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    :root {
      --primary-color: #6366f1;
      --secondary-color: #f43f5e;
      --bg-light: #f9fafb;
      --text-dark: #111827;
      --text-light: #ffffff;
      --card-bg: #ffffff;
      --shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      --radius: 12px;
      --font-main: 'Poppins', sans-serif;
      --hover-bg: #f43f5e;
    }
   #feedbackBox {
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      width: 100%;
      margin:20px 0% ;
      padding: 25px 0;
      box-shadow: var(--shadow);
      text-align: center;
      font-family:  'Poppins', sans-serif;
    }

    #feedbackBox p {
      font-size: 1.5rem;
      font-weight: 600;
      color: white;
      margin-bottom: 20px;
      text-align: center;
    }

       #feedbackBox button {

      margin: 0 10px;
      font-size: 1.5rem;
      border: none;
      height: 50px;
      width: 50px;
      border-radius: 50%;
      background-color: var(--primary-color);
      cursor: pointer;
      transition: transform 0.2s ease, background-color 0.3s ease;
      align-items: center;
      align-content: center;
      text-align: center;
      padding: 10px 11px;
    }

       #feedbackBox button:hover {
      background-color: var(--hover-bg);
      transform: scale(1.1);
      border:2px solid white;
    }

    #responseMsg {
      margin-top: 20px;
      font-size: 1rem;
      color: rgb(41, 206, 41);
      background-color: rgb(219, 219, 193);
      font-weight: 500;
      padding: 10px;
      opacity: 0;
    }
  </style>
</head>
<body>
  <div id="feedbackBox">
    <p>How was your experience with us?</p>
    <button onclick="handleFeedback('😊')">😊</button>
    <button onclick="handleFeedback('😐')">😐</button>
    <button onclick="handleFeedback('😞')">😞</button>
    <br>
    <bR>
    <small id="responseMsg"></small>
  </div>

  <script>
    function handleFeedback(emoji) {
      let sms = document.getElementById('responseMsg');
      sms.style.opacity = "1";
      sms.innerText = "Thanks for your input, we're on it!";

      setTimeout(() => {
        window.location.href =
          "https://www.google.com/maps/place/CampusXchange"; // Replace with your actual review link
      }, 2000);
    }
  </script>
</body>
</html>
