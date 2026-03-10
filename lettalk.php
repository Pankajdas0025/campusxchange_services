<?php
include_once __DIR__ . '/src/config.php';
include_once __DIR__ . '/src/conn.php';

$newsletter_message = '';
$newsletter_message_type = '';
$newsletter_email = '';

if (isset($_POST['subscribe_newsletter'])) {
    $newsletter_email = trim($_POST['newsletter_email'] ?? '');

    if (empty($newsletter_email) || !filter_var($newsletter_email, FILTER_VALIDATE_EMAIL)) {
        $newsletter_message = 'Please enter a valid email address.';
        $newsletter_message_type = 'error';
    } else {
        $check = $conn->prepare('SELECT id FROM email_list WHERE Emails = ? LIMIT 1');
        $check->bind_param('s', $newsletter_email);
        $check->execute();
        $result = $check->get_result();

        if ($result && $result->num_rows > 0) {
            $newsletter_message = 'This email is already subscribed.';
            $newsletter_message_type = 'warning';
        } else {
            $stmt = $conn->prepare('INSERT INTO email_list (Emails) VALUES (?)');
            $stmt->bind_param('s', $newsletter_email);

            if ($stmt->execute()) {
                $newsletter_message = 'Thank you for subscribing to CampusXchange updates.';
                $newsletter_message_type = 'success';
                $newsletter_email = '';
            } else {
                $newsletter_message = 'Something went wrong. Please try again.';
                $newsletter_message_type = 'error';
            }

            if ($stmt) {
                $stmt->close();
            }
        }

        if ($check) {
            $check->close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Let's Talk - CampusXchange | Contact & Collaboration</title>
  <meta name='title' content='Let's Talk - CampusXchange | Contact & Collaboration'>
  <meta name='description' content='Have questions or ideas? Connect with CampusXchange for support, web development, SEO services, mentorship, and internship opportunities.'>
  <meta name='keywords' content='contact CampusXchange, let us talk, reach CampusXchange, collaboration, mentorship support, web development services, SEO services, CampusXchange email, CampusXchange location'>
  <meta name='author' content='CampusXchange'>
  <meta name='robots' content='index, follow'>
  <link rel='canonical' href='https://campusxchange.wuaze.com/lettalk'>

  <meta property='og:type' content='website'>
  <meta property='og:url' content='https://campusxchange.wuaze.com/lettalk'>
  <meta property='og:title' content='Let us Talk - CampusXchange | Contact & Collaboration'>
  <meta property='og:description' content='Reach out to CampusXchange for collaboration, support, or services in web development, SEO, mentorship, and internships.'>
  <meta property='og:image' content='https://campusxchange.wuaze.com/assets/Images/og-images/og.png'>

  <meta property='twitter:card' content='summary_large_image'>
  <meta property='twitter:url' content='https://campusxchange.wuaze.com/lettalk'>
  <meta property='twitter:title' content='Let us Talk - CampusXchange | Contact & Collaboration'>
  <meta property='twitter:description' content='Connect with CampusXchange for questions, support, mentorship, and web or SEO services.'>
  <meta property='twitter:image' content='https://campusxchange.wuaze.com/assets/Images/og-images/og.png'>

  <link rel='stylesheet' href='<?php echo ROOT_URL; ?>assets/css/style.css' type='text/css'>

  <script type='application/ld+json'>
  {
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "url": "https://campusxchange.wuaze.com/lettalk",
    "name": "Let's Talk - CampusXchange",
    "description": "Reach out to CampusXchange for support, collaboration, web development, SEO services, mentorship, and internship programs.",
    "publisher": {
      "@type": "Organization",
      "name": "CampusXchange",
      "url": "https://campusxchange.wuaze.com",
      "logo": {
        "@type": "ImageObject",
        "url": "https://campusxchange.wuaze.com/assets/campusxchange-logo-transparent.png"
      }
    }
  }
  </script>

  <style>
    @import url('<?php echo ROOT_URL; ?>assets/css/root.css');

    .contact-main {
      background:
      linear-gradient(180deg  , var(--secondary-color), var(--primary-color) ),
      url('assets/Images/og-images/og-about.jpg') top/cover no-repeat;
      background-attachment: fixed;
      padding: 3rem;
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      align-items: stretch;
      color: white;
      overflow: hidden;
    }

    .contact-info {
      flex: 1 1 320px;
      min-width: 260px;
    }

    .contact-info h2 {
      color: white;
      margin-bottom: 1rem;
      font-size: 2rem;
    }

    .contact-info p.contact-text {
      color: rgba(255,255,255,0.88);
      margin-bottom: 1.25rem;
      line-height: 1.7;
    }

    .contact-info ul {
      list-style: none;
      padding: 0;
      margin: 0 0 1.5rem 0;
    }

    .contact-info li {
      margin-bottom: 0.9rem;
      font-size: 1.05rem;
      color: #ffffff;
      display: flex;
      align-items: center;
      gap: 0.7rem;
      line-height: 1.5;
    }

    .contact-info li i {
      color: #ffd166;
      font-size: 1.1rem;
      min-width: 18px;
    }

    .contact-info a {
      color: #ffffff;
      text-decoration: none;
    }

    .contact-info a:hover {
      text-decoration: underline;
    }

    .branch {
      margin-top: 1.2rem;
      background: rgba(255,255,255,0.12);
      border: 1px solid rgba(255,255,255,0.18);
      border-radius: 14px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      padding: 1rem 1rem 0.8rem 1rem;
      backdrop-filter: blur(10px);
    }

    .branch h4 {
      color: #ffffff;
      margin-bottom: 0.5rem;
    }

    .branch p {
      margin: 0;
      color: rgba(255,255,255,0.92);
      line-height: 1.7;
    }

    .contact-map {
      flex: 1 1 320px;
      min-width: 260px;
      overflow: hidden;
      box-shadow: 0 12px 30px rgba(0,0,0,0.12);
      background: #fff;
      height: 380px;
      border-radius: 16px;
    }

    .contact-map iframe {
      width: 100%;
      height: 100%;
      border: none;
    }

    .newsletter-modern {
      padding: 30px 0 10px;
      display: flex;
      justify-content: center;
    }

    .newsletter-box {
      background: linear-gradient(135deg, #ffffff, #f8fbff);
      padding: 36px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 30px;
      max-width: 950px;
      width: 100%;
      box-shadow: 0 18px 45px rgba(0,0,0,0.08);
      border: 1px solid rgba(107, 83, 204, 0.08);
    }

    .newsletter-left {
      flex: 1;
    }

    .newsletter-badge {
      width: 64px;
      height: 64px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 18px;
      background: linear-gradient(135deg , var(--primary-color) , var(--secondary-color));
      color: white;
      font-size: 24px;
      box-shadow: 0 12px 25px rgba(107, 83, 204, 0.25);
      margin-bottom: 16px;
    }

    .newsletter-left h3 {
      margin: 0 0 10px;
      font-size: 1.9rem;
      font-weight: 700;
      color: #111827;
    }

    .newsletter-left p {
      margin: 0;
      font-size: 15px;
      color: #6b7280;
      line-height: 1.7;
      max-width: 520px;
    }

    .newsletter-form-wrap {
      flex: 1;
      width: 100%;
    }

    .newsletter-form {
      display: flex;
      gap: 12px;
      width: 100%;
    }

    .newsletter-form input {
      flex: 1;
      min-width: 0;
      height: 54px;
      padding: 0 16px;
      border-radius: 12px;
      border: 1px solid #dbe2ea;
      font-size: 15px;
      outline: none;
      transition: 0.3s ease;
      background: #fff;
    }

    .newsletter-form input:focus {
      border-color: #6B53CC;
      box-shadow: 0 0 0 4px rgba(107, 83, 204, 0.10);
    }

    .newsletter-form button {
      background:var(--secondary-color);
      color: #000;
      border: none;
      height: 54px;
      padding: 0 22px;
      border-radius: 12px;
      cursor: pointer;
      transition: 0.3s ease;
      font-size: 15px;
      font-weight: 600;
      white-space: nowrap;
    }

    .newsletter-form button:hover {
      transform: translateY(-1px);
      box-shadow: 0 10px 20px rgba(107, 83, 204, 0.22);
    }

    .newsletter-message {
      margin-top: 14px;
      padding: 12px 14px;
      border-radius: 12px;
      font-size: 14px;
      line-height: 1.6;
    }

    .newsletter-message.success {
      background: #ecfdf3;
      color: #166534;
      border: 1px solid #bbf7d0;
    }

    .newsletter-message.error {
      background: #fef2f2;
      color: #b91c1c;
      border: 1px solid #fecaca;
    }

    .newsletter-message.warning {
      background: #fff7ed;
      color: #c2410c;
      border: 1px solid #fdba74;
    }

    @media (max-width: 900px) {
      .newsletter-box {
        flex-direction: column;
        align-items: flex-start;
        padding: 24px;
      }

      .newsletter-form {
        flex-direction: column;
      }

      .newsletter-form button,
      .newsletter-form input {
        width: 100%;
      }
    }

    @media (max-width: 700px) {
      .contact-main {
        padding: 18px;
        display: block;
        background-position:center;
      }

      .contact-info {
        width: 100%;
      }

      .contact-info h2 {
        font-size: 1.6rem;
      }

      .contact-info li {
        font-size: 0.95rem;
        gap: 0.55rem;
      }

      .contact-map,
      .contact-info {
        min-width: 0;
        width: 100%;
      }

      .contact-map {
        height: 240px;
        margin-top: 16px;
      }

      .newsletter-modern {
        padding: 24px 0 6px;
      }

      .newsletter-left h3 {
        font-size: 1.5rem;
      }

      .newsletter-left p {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

<?php include_once __DIR__ . '/components/header.php'; ?>

<br>

<main>
  <section class='contact-main'>
    <div class='contact-info' data-aos="fade-up">
      <h2>Contact Us</h2>
      <p class='contact-text'>
        Have questions, ideas, or want to work with CampusXchange? We would love to hear from you.
        Reach out for support, collaboration, mentorship, web development, or SEO services.
      </p>

      <ul>
        <li><i class='fa-solid fa-envelope'></i> <strong>Email:</strong> <a href='mailto:campusxchangeservices@gmail.com'>campusxchangeservices@gmail.com</a></li>
        <li><i class='fa-solid fa-phone'></i> <strong>Mobile:</strong> <a href='tel:+919155726625'>+91 9155726625</a></li>
        <li><i class='fa-solid fa-globe'></i> <strong>Website:</strong> <a href='https://campusxchange.wuaze.com' target='_blank'>www.campusxchange.wuaze.com</a></li>
      </ul>

      <div class='branch'>
        <h4>Business Hours</h4>
        <p>Monday - Saturday: 9:00 AM to 7:00 PM<br>Sunday: Closed</p>
      </div>
    </div>

    <div class='contact-map'data-aos="fade-left">
      <iframe
        src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7162.078172298884!2d87.7707852!3d26.1628565!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e56f6429ec6027%3A0x9846e4b1c8b20348!2sCampusXchange%20Services!5e0!3m2!1sen!2sin!4v1760951798277!5m2!1sen!2sin'
        allowfullscreen=''
        loading='lazy'
        referrerpolicy='no-referrer-when-downgrade'
        title='CampusXchange Location'>
      </iframe>
    </div>
  </section>

  <br>

  <section class='newsletter-modern'>
    <div class='newsletter-box' data-aos="fade-right">
      <div class='newsletter-left'>
        <span class='newsletter-badge'>
          <i class='fa-solid fa-bell'></i>
        </span>
        <h3>Stay Updated with CampusXchange</h3>
        <p>
          Subscribe to receive the latest updates, useful tech resources, student opportunities,
          and important announcements directly in your inbox.
        </p>
      </div>

      <div class='newsletter-form-wrap'>
        <form method='POST' class='newsletter-form' action=''>
          <input
            type='email'
            name='newsletter_email'
            placeholder='Enter your email address'
            value='<?php echo htmlspecialchars($newsletter_email); ?>'
            required
          >
          <button type='submit' name='subscribe_newsletter'>Subscribe</button>
        </form>

        <?php if (!empty($newsletter_message)) : ?>
          <div class='newsletter-message <?php echo $newsletter_message_type; ?>'>
            <?php echo htmlspecialchars($newsletter_message); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php include 'components/feedback.php'; ?>
</main>

<br>

<?php include_once __DIR__ . '/components/footer.php'; ?>

</body>
</html>