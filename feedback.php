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
      --hover-bg: #f43f5e;
      --bg-light: #f9fafb;
      --text-light: #ffffff;
      --shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      --radius: 12px;
      --font-main: 'Poppins', sans-serif;
    }

    #feedbackBox {
       width: 100%;

      margin: 20px 0;
      padding: 30px 20px;
      text-align: center;
      color:black;
      animation: fadeIn 0.9s ease;
    }

    #feedbackBox p {
      font-size: 1.6rem;
      font-weight: 600;
      margin-bottom: 25px;
      text-align: center;
    }

    #feedbackBox button {
      margin: 0 12px;
      font-size: 2rem;
      border: none;
      height: 65px;
      width: 65px;
      border-radius: 50%;
      background: #ffffff;
      color: #333;
      cursor: pointer;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    #feedbackBox button:hover {
      background: var(--hover-bg);
      color: #fff;
      transform: scale(1.15);
      box-shadow: 0 10px 25px rgba(244, 63, 94, 0.4);
      border: 2px solid white;
    }

    #responseMsg {
      margin-top: 20px;
      font-size: 1rem;
      font-weight: 500;
      background: rgba(255, 255, 255, 0.15);
      padding: 10px 15px;
      border-radius: var(--radius);
      display: inline-block;
      opacity: 0;
      transform: translateY(10px);
      transition: all 0.4s ease;
    }

    #responseMsg.show {
      opacity: 1;
      transform: translateY(0);
    }

    /* Animations */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div id="feedbackBox">
    <p>How was your experience with us?</p>
    <button onclick="handleFeedback('😊')">😊</button>
    <button onclick="handleFeedback('😐')">😐</button>
    <button onclick="handleFeedback('😞')">😞</button>

    <br><br>
    <small id="responseMsg"></small>
  </div>

  <script>
    function handleFeedback(emoji) {
      let sms = document.getElementById('responseMsg');
      sms.innerText = "Thanks for your input " + emoji + "! Redirecting...";
      sms.classList.add("show");

      setTimeout(() => {
        window.location.href = "https://www.google.com/maps/place/CampusXchange";
       sms.innerText = " ";



      }, 2000);
    }
  </script>
</body>
</html>
