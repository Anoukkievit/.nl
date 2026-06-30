<?php
/*
 * Template Name: Audio Landingpage
 * Template Post Type: page
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>De versie van jou die al bestaat – Anouk Kievit</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --coral:  #E07035;
      --coral-d:#C05820;
      --blue:   #7B7AAA;
      --gold:   #C9A030;
      --cream:  #EDE5DA;
      --off:    #F5F0E8;
      --white:  #FFFFFF;
      --text:   #1a1a1a;
      --soft:   #8B7260;
      --line:   #DDD5C8;
    }
    html { scroll-behavior: smooth; }
    body { font-family: 'Jost', sans-serif; background: var(--off); color: var(--text); font-size: 17px; line-height: 1.9; }
    img { display: block; width: 100%; height: 100%; object-fit: cover; }

    .w { max-width: 1100px; margin: 0 auto; padding: 0 40px; }
    @media (max-width:600px) { .w { padding: 0 24px; } }

    .eyebrow { display: block; font-size: 10px; letter-spacing: 4px; text-transform: uppercase; font-weight: 600; margin-bottom: 20px; color: var(--coral); }
    h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(36px, 5.5vw, 66px); font-weight: 300; line-height: 1.08; color: var(--text); margin-bottom: 28px; }
    h2 em { font-style: italic; }
    p { margin-bottom: 16px; }
    p:last-child { margin-bottom: 0; }

    .btn { display: inline-block; padding: 16px 40px; font-family: 'Jost', sans-serif; font-size: 10px; letter-spacing: 3px; text-transform: uppercase; font-weight: 600; text-decoration: none; transition: all .2s ease; cursor: pointer; border: none; border-radius: 2px; }
    .btn--coral { background: var(--coral); color: #fff; }
    .btn--coral:hover { background: var(--coral-d); transform: translateY(-2px); }

    /* URGENCY */
    .urgency { background: var(--coral); color: #fff; text-align: center; padding: 11px 20px; font-size: 10px; letter-spacing: 3px; text-transform: uppercase; font-weight: 600; }

    /* HERO */
    .hero { background: var(--white); }
    .hero__inner { display: grid; grid-template-columns: 1fr 1fr; min-height: 88vh; }
    @media (max-width:760px) { .hero__inner { grid-template-columns: 1fr; min-height: auto; } }
    .hero__photo { position: relative; min-height: 480px; }
    .hero__photo img { position: absolute; inset: 0; }
    .hero__copy { display: flex; align-items: center; padding: 72px 60px; }
    @media (max-width:760px) { .hero__copy { padding: 52px 28px; } }
    .hero__badge { display: inline-block; background: var(--gold); color: #fff; font-size: 9px; letter-spacing: 3px; text-transform: uppercase; font-weight: 700; padding: 5px 16px; border-radius: 2px; margin-bottom: 28px; }
    .hero__h1 { font-family: 'Cormorant Garamond', serif; font-size: clamp(42px, 5.5vw, 76px); font-weight: 300; line-height: 1.05; color: var(--text); margin-bottom: 20px; }
    .hero__h1 em { font-style: italic; color: var(--coral); }
    .hero__sub { font-family: 'Cormorant Garamond', serif; font-size: clamp(18px, 2vw, 22px); font-style: italic; color: var(--soft); line-height: 1.6; margin-bottom: 36px; }
    .hero__note { font-size: 11px; letter-spacing: 1.5px; text-transform: uppercase; color: var(--soft); margin-top: 14px; }

    /* VERSE */
    .verse { background: var(--off); padding: 88px 0; }
    .verse__inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    @media (max-width:760px) { .verse__inner { grid-template-columns: 1fr; gap: 40px; } }
    .verse__photo img { height: 540px; border-radius: 2px; }
    .verse__text { }
    .verse__body { font-family: 'Cormorant Garamond', serif; font-size: clamp(19px, 2.4vw, 26px); font-weight: 300; line-height: 1.85; color: var(--text); }
    .verse__body p { margin-bottom: 20px; }
    .verse__body p:last-child { margin-bottom: 0; }
    .verse__close { border-left: 3px solid var(--coral); padding-left: 22px; margin-top: 36px; font-family: 'Cormorant Garamond', serif; font-size: clamp(18px, 2.2vw, 24px); font-style: italic; color: var(--text); line-height: 1.55; }
    .verse__close strong { font-style: normal; color: var(--coral); }

    /* BAND */
    .band { padding: 80px 40px; text-align: center; background: var(--coral); }
    .band__text { font-family: 'Cormorant Garamond', serif; font-size: clamp(26px, 4.5vw, 52px); font-weight: 300; font-style: italic; line-height: 1.35; max-width: 760px; margin: 0 auto; color: #fff; }

    /* OPT-IN */
    .optin { background: var(--white); padding: 88px 0; }
    .optin__inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    @media (max-width:760px) { .optin__inner { grid-template-columns: 1fr; gap: 40px; } }
    .optin__photo img { height: 580px; border-radius: 2px; }
    .optin__sub { font-family: 'Cormorant Garamond', serif; font-size: clamp(16px, 1.8vw, 20px); font-style: italic; color: var(--soft); line-height: 1.65; margin-bottom: 32px; }
    .checklist { list-style: none; margin-bottom: 36px; }
    .checklist li { font-size: 15px; padding: 11px 0; border-bottom: 1px solid var(--line); display: flex; gap: 12px; align-items: flex-start; color: var(--text); }
    .checklist li:first-child { border-top: 1px solid var(--line); }
    .checklist li::before { content: '✓'; color: var(--coral); flex-shrink: 0; font-weight: 700; }
    .form { display: flex; flex-direction: column; gap: 12px; }
    .form input { width: 100%; padding: 14px 18px; font-family: 'Jost', sans-serif; font-size: 14px; border: 1.5px solid var(--line); background: var(--off); color: var(--text); border-radius: 2px; outline: none; transition: border-color .2s; }
    .form input:focus { border-color: var(--coral); }
    .form input::placeholder { color: #b0a090; }
    .form .btn { width: 100%; text-align: center; }
    .form__note { font-size: 11px; color: var(--soft); text-align: center; margin-top: 6px; }

    /* FOOTER */
    footer { background: var(--coral); color: rgba(255,255,255,.7); text-align: center; padding: 18px 28px; font-size: 11px; letter-spacing: 1.5px; }
    footer a { color: #fff; text-decoration: none; }
  </style>
  <?php wp_head(); ?>
</head>
<body>

<div class="urgency">✦ &nbsp; Gratis audio-ervaring &nbsp; ✦</div>

<!-- HERO -->
<section class="hero">
  <div class="hero__inner">
    <div class="hero__photo">
      <img src="images/anouk-portret.jpg" alt="Anouk Kievit" />
    </div>
    <div class="hero__copy">
      <div>
        <span class="hero__badge">Gratis · 10 minuten</span>
        <h1 class="hero__h1">De versie van jou<br>die <em>al bestaat.</em></h1>
        <p class="hero__sub">Ontdek in 10 minuten wat haar nog tegenhoudt.</p>
        <a href="#ontvangen" class="btn btn--coral">Ja, ik wil dit ontvangen →</a>
        <p class="hero__note">✦ &nbsp; Gratis · Direct in je inbox</p>
      </div>
    </div>
  </div>
</section>


<!-- VERSE -->
<section class="verse">
  <div class="w">
    <div class="verse__inner">
      <div class="verse__photo">
        <img src="images/anouk-bogen.jpg" alt="Anouk Kievit" />
      </div>
      <div class="verse__text">
        <span class="eyebrow">Er is een versie van jou</span>
        <div class="verse__body">
          <p>Die anders wakker wordt.<br>
          Die keuzes maakt vanuit vertrouwen.<br>
          Die haar prijs noemt zonder daarna te twijfelen.<br>
          Die grenzen aangeeft. Die aanwezig is. Die <em style="font-style:italic;color:var(--coral);">leeft.</em></p>
          <p>En het gekke? Die versie bestaat al.<br>Ze zit niet aan de andere kant van nóg een cursus. Niet van nóg meer kennis. Ze zit al in jou.</p>
          <p>Maar daarna gebeurt er iets.<br>Je trekt weer een oude versie van jezelf aan.<br>De versie die twijfelt. Die uitstelt. Die wacht.</p>
        </div>
        <div class="verse__close">
          De vraag is niet: hoe word ik die vrouw?<br>
          <strong>De vraag is: wat houdt haar nog tegen?</strong>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- BAND -->
<div class="band">
  <p class="band__text">"In deze gratis audio ontdek je<br>in 10 minuten het antwoord."</p>
</div>


<!-- OPT-IN -->
<section class="optin" id="ontvangen">
  <div class="w">
    <div class="optin__inner">
      <div class="optin__photo">
        <img src="images/anouk-staand.jpg" alt="Anouk Kievit" />
      </div>
      <div>
        <span class="eyebrow">Ontvang de gratis audio</span>
        <h2>Ja, ik wil<br><em>dit ontvangen.</em></h2>
        <p class="optin__sub">Vul je naam en e-mailadres in. Je ontvangt de audio direct in je inbox.</p>
        <ul class="checklist">
          <li>Welke versie van jezelf je tegenhoudt</li>
          <li>Welke gedachte daaronder zit</li>
          <li>Waarom je blijft wachten op meer zekerheid</li>
          <li>Wat er nodig is om dichter bij jezelf te komen</li>
        </ul>
        <form class="form" action="#" method="post">
          <input type="text" name="voornaam" placeholder="Je voornaam" required />
          <input type="email" name="email" placeholder="Je e-mailadres" required />
          <button type="submit" class="btn btn--coral">Stuur mij de audio →</button>
          <p class="form__note">✦ &nbsp; Gratis. Geen spam. Uitschrijven wanneer je wilt.</p>
        </form>
      </div>
    </div>
  </div>
</section>


<footer>
  <p>© 2025 Anouk Kievit &nbsp;·&nbsp; <a href="/privacy">Privacy</a> &nbsp;·&nbsp; <a href="/algemene-voorwaarden">Algemene voorwaarden</a></p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
