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
      --gold:   #C9A030;
      --purple: #8080AA;
      --purple-d:#6060888;
      --cream:  #F5F0E8;
      --white:  #FFFFFF;
      --text:   #1a1a1a;
      --soft:   #8B7260;
      --line:   #DDD5C8;
    }
    html { scroll-behavior: smooth; }
    body { font-family: 'Jost', sans-serif; background: var(--cream); color: var(--text); font-size: 17px; line-height: 1.9; }
    img { display: block; width: 100%; height: 100%; object-fit: cover; }

    .w { max-width: 1100px; margin: 0 auto; padding: 0 40px; }
    .w--narrow { max-width: 700px; margin: 0 auto; padding: 0 40px; }
    @media (max-width:600px) { .w, .w--narrow { padding: 0 24px; } }

    .eyebrow { display: block; font-size: 10px; letter-spacing: 4px; text-transform: uppercase; font-weight: 600; margin-bottom: 20px; color: var(--soft); }
    .eyebrow--coral  { color: var(--coral); }
    .eyebrow--purple { color: var(--purple); }
    .eyebrow--gold   { color: #8a6520; }
    h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(38px, 6vw, 72px); font-weight: 300; line-height: 1.08; color: var(--text); margin-bottom: 32px; }
    h2 em { font-style: italic; }
    p { margin-bottom: 18px; }
    p:last-child { margin-bottom: 0; }

    .btn { display: inline-block; padding: 16px 40px; font-family: 'Jost', sans-serif; font-size: 10px; letter-spacing: 3px; text-transform: uppercase; font-weight: 600; text-decoration: none; transition: all .2s ease; cursor: pointer; border: none; border-radius: 2px; }
    .btn--coral { background: var(--coral); color: #fff; }
    .btn--coral:hover { background: var(--coral-d); transform: translateY(-2px); }
    .btn--full { display: block; width: 100%; text-align: center; }

    /* ═══ GOLD TOP BAR ═══ */
    .topbar { background: var(--gold); color: #fff; text-align: center; padding: 11px 20px; font-size: 10px; letter-spacing: 3px; text-transform: uppercase; font-weight: 600; }

    /* ═══ HERO ═══ */
    .hero { background: var(--white); padding: 80px 0 0; }
    .hero__inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    @media (max-width: 780px) { .hero__inner { grid-template-columns: 1fr; gap: 48px; } }
    .hero__photo { position: relative; }
    .hero__photo img { width: 100%; height: 600px; border-radius: 2px; }
    @media (max-width: 780px) { .hero__photo img { height: 420px; } }
    .hero__text { padding-bottom: 40px; }
    .hero__free { display: inline-block; background: var(--gold); color: var(--white); font-size: 9px; letter-spacing: 3px; text-transform: uppercase; font-weight: 700; padding: 5px 16px; border-radius: 2px; margin-bottom: 24px; }
    .hero__h1 { font-family: 'Cormorant Garamond', serif; font-size: clamp(40px, 5.5vw, 72px); font-weight: 300; line-height: 1.08; color: var(--text); margin-bottom: 20px; }
    .hero__h1 em { font-style: italic; color: var(--coral); }
    .hero__sub { font-family: 'Cormorant Garamond', serif; font-size: clamp(17px, 2vw, 22px); font-style: italic; font-weight: 300; color: var(--soft); line-height: 1.65; margin-bottom: 36px; }
    .hero__time { font-size: 12px; letter-spacing: 2px; text-transform: uppercase; color: var(--soft); font-weight: 500; margin-top: 16px; }

    /* ═══ GOLD DIVIDER ═══ */
    .gold-bar { height: 4px; background: var(--gold); }

    /* ═══ VERSE SECTIE (poëtische tekst) ═══ */
    .verse { background: var(--cream); padding: 96px 0; }
    .verse__inner { max-width: 700px; margin: 0 auto; padding: 0 40px; }
    @media (max-width:600px) { .verse__inner { padding: 0 24px; } }
    .verse__body { font-family: 'Cormorant Garamond', serif; font-size: clamp(20px, 2.8vw, 30px); font-weight: 300; line-height: 1.85; color: var(--text); }
    .verse__body p { margin-bottom: 28px; }
    .verse__body p:last-child { margin-bottom: 0; }
    .verse__body em { font-style: italic; color: var(--coral); }
    .verse__body strong { font-weight: 400; color: var(--text); }

    /* ═══ CORAL BAND ═══ */
    .band { padding: 80px 40px; text-align: center; }
    .band--coral { background: var(--coral); }
    .band__text { font-family: 'Cormorant Garamond', serif; font-size: clamp(26px, 4.5vw, 54px); font-weight: 300; font-style: italic; line-height: 1.35; max-width: 780px; margin: 0 auto; color: #fff; }

    /* ═══ SHIFT (Het gekke?) ═══ */
    .shift { background: var(--white); padding: 96px 0; }
    .shift__inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    @media (max-width:760px) { .shift__inner { grid-template-columns: 1fr; gap: 48px; } }
    .shift__photo img { height: 560px; border-radius: 2px; }
    .shift__text h2 { margin-bottom: 20px; }
    .shift__text p { font-size: 16px; color: var(--soft); line-height: 1.85; margin-bottom: 20px; }
    .shift__quote { border-left: 3px solid var(--coral); padding-left: 22px; margin: 32px 0; font-family: 'Cormorant Garamond', serif; font-size: clamp(20px, 2.5vw, 28px); font-style: italic; color: var(--text); line-height: 1.5; }

    /* ═══ PATROON SECTIE ═══ */
    .patroon { background: var(--purple); padding: 96px 40px; text-align: center; }
    .patroon__inner { max-width: 760px; margin: 0 auto; }
    .patroon__eyebrow { color: rgba(255,255,255,.65); }
    .patroon h2 { color: #fff; }
    .patroon h2 em { color: rgba(255,255,255,.75); font-style: italic; }
    .patroon__list { list-style: none; margin: 40px 0 0; text-align: left; display: grid; grid-template-columns: 1fr 1fr; gap: 0 60px; }
    @media (max-width:600px) { .patroon__list { grid-template-columns: 1fr; } }
    .patroon__list li { padding: 18px 0; border-bottom: 1px solid rgba(255,255,255,.2); font-size: 15px; color: rgba(255,255,255,.88); line-height: 1.7; display: flex; gap: 12px; align-items: flex-start; }
    .patroon__list li:first-child,
    .patroon__list li:nth-child(2) { border-top: 1px solid rgba(255,255,255,.2); }
    @media (max-width:600px) {
      .patroon__list li:nth-child(2) { border-top: none; }
    }
    .patroon__list li::before { content: '✓'; color: var(--gold); flex-shrink: 0; font-weight: 700; margin-top: 2px; }

    /* ═══ VRAAG SECTIE ═══ */
    .vraag { background: var(--cream); padding: 96px 0; text-align: center; }
    .vraag__inner { max-width: 640px; margin: 0 auto; padding: 0 40px; }
    @media (max-width:600px) { .vraag__inner { padding: 0 24px; } }
    .vraag__body { font-family: 'Cormorant Garamond', serif; font-size: clamp(22px, 3vw, 36px); font-weight: 300; line-height: 1.65; color: var(--text); margin-bottom: 48px; }
    .vraag__body em { font-style: italic; color: var(--coral); }
    .vraag__big { font-family: 'Cormorant Garamond', serif; font-size: clamp(28px, 4vw, 50px); font-style: italic; font-weight: 300; color: var(--text); line-height: 1.35; border-top: 1px solid var(--line); padding-top: 40px; margin-bottom: 48px; }

    /* ═══ OPT-IN FORM ═══ */
    .optin { background: var(--white); padding: 96px 0; }
    .optin__inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    @media (max-width:780px) { .optin__inner { grid-template-columns: 1fr; gap: 48px; } }
    .optin__photo img { height: 600px; border-radius: 2px; }
    .optin__form-wrap { }
    .optin__form-wrap h2 { margin-bottom: 16px; }
    .optin__form-wrap .sub { font-family: 'Cormorant Garamond', serif; font-size: clamp(17px, 2vw, 22px); font-style: italic; color: var(--soft); line-height: 1.65; margin-bottom: 36px; }
    .form { display: flex; flex-direction: column; gap: 14px; }
    .form input[type="text"],
    .form input[type="email"] {
      width: 100%;
      padding: 14px 18px;
      font-family: 'Jost', sans-serif;
      font-size: 14px;
      border: 1.5px solid var(--line);
      background: var(--cream);
      color: var(--text);
      border-radius: 2px;
      outline: none;
      transition: border-color .2s;
    }
    .form input:focus { border-color: var(--coral); }
    .form input::placeholder { color: #b0a090; }
    .form__note { font-size: 11px; color: var(--soft); letter-spacing: .5px; margin-top: 4px; }

    /* ═══ ABOUT ═══ */
    .about { background: var(--cream); padding: 96px 0; }
    .about__inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    @media (max-width:740px) { .about__inner { grid-template-columns: 1fr; gap: 48px; } }
    .about__photo img { height: 620px; border-radius: 2px; }
    .about__text p { font-size: 16px; color: var(--soft); line-height: 1.85; }
    .about__pullquote { border-left: 3px solid var(--coral); padding-left: 22px; margin: 28px 0; font-family: 'Cormorant Garamond', serif; font-size: clamp(19px, 2.3vw, 26px); font-style: italic; color: var(--text); line-height: 1.45; }

    /* ═══ FOOTER ═══ */
    footer { background: var(--coral); color: rgba(255,255,255,.7); text-align: center; padding: 18px 28px; font-size: 11px; letter-spacing: 1.5px; }
    footer a { color: #fff; text-decoration: none; }
  </style>
  <?php wp_head(); ?>
</head>
<body>

<!-- GOLD TOP BAR -->
<div class="topbar">✦ &nbsp; Gratis audio-ervaring &nbsp; ✦</div>


<!-- ═══ HERO ═══ -->
<section class="hero">
  <div class="w">
    <div class="hero__inner">

      <div class="hero__photo">
        <img src="images/anouk-portret.jpg" alt="Anouk Kievit" />
      </div>

      <div class="hero__text">
        <span class="hero__free">Gratis · 10 minuten</span>
        <h1 class="hero__h1">
          De versie van jou<br>die <em>al bestaat.</em>
        </h1>
        <p class="hero__sub">
          Ontdek in 10 minuten wat haar nog tegenhoudt.
        </p>
        <a href="#ontvangen" class="btn btn--coral">Ja, ik wil dit ontvangen →</a>
        <p class="hero__time">✦ &nbsp; Gratis audio-ervaring van Anouk Kievit</p>
      </div>

    </div>
  </div>
</section>

<div class="gold-bar"></div>


<!-- ═══ VERS (de poëtische sectie) ═══ -->
<section class="verse">
  <div class="verse__inner">
    <span class="eyebrow eyebrow--coral">Er is een versie van jou</span>
    <div class="verse__body">
      <p>Er is een versie van jou die anders wakker wordt.</p>
      <p>Die keuzes maakt vanuit vertrouwen.<br>
      Die haar prijs noemt zonder daarna te twijfelen.<br>
      Die zichtbaar is zonder zich af te vragen wat iedereen ervan vindt.</p>
      <p>Die grenzen aangeeft.<br>
      Die aanwezig is.<br>
      Die <em>leeft.</em></p>
    </div>
  </div>
</section>


<!-- ═══ CORAL BAND ═══ -->
<div class="band band--coral">
  <p class="band__text">"Die versie van jou bestaat al.<br>Ze zit niet aan de andere kant van nóg een cursus."</p>
</div>


<!-- ═══ HET GEKKE ═══ -->
<section class="shift">
  <div class="w">
    <div class="shift__inner">

      <div class="shift__photo">
        <img src="images/anouk-bogen.jpg" alt="Anouk Kievit" />
      </div>

      <div class="shift__text">
        <span class="eyebrow eyebrow--coral">En het gekke?</span>
        <h2>Ze zit al<br><em>in jou.</em></h2>

        <p>Niet aan de andere kant van nóg meer kennis.<br>Niet aan de andere kant van nóg harder werken.</p>

        <div class="shift__quote">
          Je ziet haar soms heel even.<br>
          Op een goede dag.<br>
          Na een overwinning.<br>
          Of in een moment waarop je vergeet bang te zijn.
        </div>

        <p>Maar daarna gebeurt er iets. Je trekt weer een oude versie van jezelf aan. De versie die twijfelt. Die uitstelt. Die controle zoekt. Die zich aanpast. Die wacht.</p>
      </div>

    </div>
  </div>
</section>


<!-- ═══ PATROON (purple sectie) ═══ -->
<section class="patroon">
  <div class="patroon__inner">
    <span class="eyebrow patroon__eyebrow">De vraag die telt</span>
    <h2>Niet: hoe word ik<br><em>die vrouw?</em></h2>
    <p style="color:rgba(255,255,255,.8);font-size:17px;max-width:520px;margin:0 auto 12px;line-height:1.8;">
      De vraag is: wat houdt haar nog tegen?
    </p>
    <p style="color:rgba(255,255,255,.65);font-size:15px;max-width:480px;margin:0 auto;">
      In deze gratis audio-ervaring ontdek je:
    </p>
    <ul class="patroon__list">
      <li>Welke versie van jezelf je eigenlijk tegenhoudt</li>
      <li>Welke gedachte daaronder zit</li>
      <li>Waarom je blijft wachten op meer zekerheid</li>
      <li>Wat er nodig is om dichter bij jezelf te komen</li>
    </ul>
  </div>
</section>


<!-- ═══ VRAAG SECTIE ═══ -->
<section class="vraag">
  <div class="vraag__inner">
    <p class="vraag__body">
      De vraag is niet hoe je die versie van jezelf wordt.<br>
      <em>Ze is er al.</em><br>
      De vraag is alleen:<br>
      wat houdt haar nog tegen?
    </p>
    <p class="vraag__big">
      In 10 minuten weet<br>jij het antwoord.
    </p>
    <a href="#ontvangen" class="btn btn--coral">Stuur mij de audio →</a>
  </div>
</section>


<!-- ═══ OPT-IN FORM ═══ -->
<section class="optin" id="ontvangen">
  <div class="w">
    <div class="optin__inner">

      <div class="optin__photo">
        <img src="images/anouk-staand.jpg" alt="Anouk Kievit" />
      </div>

      <div class="optin__form-wrap">
        <span class="eyebrow eyebrow--coral">Ontvang de gratis audio</span>
        <h2>Ja, ik wil<br><em>dit ontvangen.</em></h2>
        <p class="sub">
          Vul hieronder je naam en e-mailadres in. Je ontvangt de audio direct in je inbox.
        </p>

        <form class="form" action="#" method="post">
          <input type="text" name="voornaam" placeholder="Je voornaam" required />
          <input type="email" name="email" placeholder="Je e-mailadres" required />
          <button type="submit" class="btn btn--coral btn--full">Ja, stuur mij de audio →</button>
          <p class="form__note">✦ &nbsp; Gratis. Geen spam. Uitschrijven wanneer je wilt.</p>
        </form>
      </div>

    </div>
  </div>
</section>


<!-- ═══ ABOUT ═══ -->
<section class="about">
  <div class="w">
    <div class="about__inner">
      <div class="about__photo">
        <img src="images/anouk-wit.jpg" alt="Anouk Kievit" />
      </div>
      <div>
        <span class="eyebrow eyebrow--coral">Even voorstellen</span>
        <h2>Hoi,<br>ik ben <em>Anouk.</em></h2>
        <p>Ik weet hoe het voelt om te weten dat er meer in zit — en het toch niet te doen. Die betere versie van mezelf? Ik zag haar ook. Soms heel even. En daarna verdween ze weer achter twijfel, uitstelgedrag en de overtuiging dat ik er eerst klaar voor moest zijn.</p>
        <div class="about__pullquote">
          Pas toen ik ontdekte wat die versie van mij eigenlijk tegenhield, veranderde er iets wat ik niet meer terug wil draaien.
        </div>
        <p>Deze audio-ervaring maakte ik omdat ik wil dat jij dat ook ontdekt. Niet over een jaar. Nu.</p>
        <p style="margin-top:28px;"><a href="#ontvangen" class="btn btn--coral">Stuur mij de audio →</a></p>
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
