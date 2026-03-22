
  <style>
    @import url("<?php echo ROOT_URL ?>assets/css/root.css");

    #feedbackBox {
      width: 80%;
      margin: 1% 10%;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 40px 20px;
      text-align: center;
      color: #000;
      animation: fadeIn 0.9s ease;
    }

    #feedbackBox p {
      font-size: 1.6rem;
      font-weight: 600;
      margin-bottom: 25px;
      color: var(--primary-color);
    }

    #feedbackBox button {
      margin: 0 12px;
      font-size: 2rem;
      border: none;
      height: 70px;
      width: 70px;
      border-radius: 50%;
      background: #ffffff;
      color: #333;
      cursor: pointer;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
      transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s;
    }

    /* Hover color effects for each icon */
    #feedbackBox button:hover i.fa-face-smile-beam {
      color: #22c55e;
      transform: scale(1.2);
    }

    #feedbackBox button:hover i.fa-face-meh {
      color: #f59e0b;
      transform: scale(1.2);
    }

    #feedbackBox button:hover i.fa-face-frown {
      color: #ef4444;
      transform: scale(1.2);
    }

    #responseMsg {
      margin-top: 25px;
      font-size: 1rem;
      font-weight: 500;
      background: rgba(244, 63, 94, 0.05);
      padding: 10px 15px;
      border-radius: var(--radius);
      display: inline-block;
      opacity: 0;
      transform: translateY(10px);
      transition: all 0.4s ease;
      color: #111;
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

  <div id="feedbackBox">
    <p style="text-align: center;">How was your experience with us?</p>

    <button onclick="handleFeedback('😊')">
      <i class="fa-solid fa-face-smile-beam"></i>
    </button>
    <button onclick="handleFeedback('😐')">
      <i class="fa-solid fa-face-meh"></i>
    </button>
    <button onclick="handleFeedback('😞')">
      <i class="fa-solid fa-face-frown"></i>
    </button>

    <br><br>
    <small id="responseMsg"></small>
  </div>

  <script>
    function handleFeedback(emoji) {
      const sms = document.getElementById('responseMsg');
      sms.innerText = "Thanks for your feedback " + emoji + "! Redirecting...";
      sms.classList.add("show");

      setTimeout(() => {
        window.location.href = "https://www.google.com/maps/place/CampusXchange";
      }, 2000);
    }
  </script>

