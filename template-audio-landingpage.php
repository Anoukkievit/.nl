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
      --blue-d: #5E5D8A;
      --gold:   #C9A030;
      --pink:   #D4A8C8;
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

    /* LAYOUT */
    .w { max-width: 1100px; margin: 0 auto; padding: 0 40px; }
    .w--narrow { max-width: 720px; margin: 0 auto; padding: 0 40px; }
    @media (max-width:600px) { .w, .w--narrow { padding: 0 24px; } }

    /* TYPE */
    .eyebrow { display: block; font-size: 10px; letter-spacing: 4px; text-transform: uppercase; font-weight: 600; margin-bottom: 20px; color: var(--soft); }
    .eyebrow--coral { color: var(--coral); }
    .eyebrow--blue  { color: var(--blue); }
    .eyebrow--gold  { color: #8a6520; }
    h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(38px, 6vw, 72px); font-weight: 300; line-height: 1.08; color: var(--text); margin-bottom: 32px; }
    h2 em { font-style: italic; }
    p { margin-bottom: 18px; }
    p:last-child { margin-bottom: 0; }

    /* BUTTONS */
    .btn { display: inline-block; padding: 16px 40px; font-family: 'Jost', sans-serif; font-size: 10px; letter-spacing: 3px; text-transform: uppercase; font-weight: 600; text-decoration: none; transition: all .2s ease; cursor: pointer; border: none; border-radius: 2px; }
    .btn--coral { background: var(--coral); color: #fff; }
    .btn--coral:hover { background: var(--coral-d); transform: translateY(-2px); }
    .btn--outline-dark { background: transparent; border: 1.5px solid var(--text); color: var(--text); }
    .btn--outline-dark:hover { background: var(--text); color: #fff; }
    .btn--outline-white { background: transparent; border: 1.5px solid rgba(255,255,255,.7); color: #fff; }
    .btn--outline-white:hover { background: rgba(255,255,255,.15); }

    /* ═══ URGENCY ═══ */
    .urgency { background: var(--coral); color: #fff; text-align: center; padding: 11px 20px; font-size: 10px; letter-spacing: 3px; text-transform: uppercase; font-weight: 600; }

    /* ═══ HERO — split layout ═══ */
    .hero { background: var(--white); }
    .hero__inner { display: grid; grid-template-columns: 1fr 1fr; min-height: 90vh; }
    @media (max-width:780px) { .hero__inner { grid-template-columns: 1fr; min-height: auto; } }
    .hero__photo { position: relative; min-height: 500px; }
    .hero__photo img { position: absolute; inset: 0; }
    .hero__copy { display: flex; align-items: center; padding: 80px 64px; }
    @media (max-width:780px) { .hero__copy { padding: 56px 32px; } }
    .hero__copy-inner { max-width: 480px; }
    .hero__badge { display: inline-block; background: var(--gold); color: var(--white); font-size: 9px; letter-spacing: 3px; text-transform: uppercase; font-weight: 700; padding: 5px 16px; border-radius: 2px; margin-bottom: 28px; }
    .hero__h1 { font-family: 'Cormorant Garamond', serif; font-size: clamp(42px, 5.5vw, 76px); font-weight: 300; line-height: 1.05; color: var(--text); margin-bottom: 24px; }
    .hero__h1 em { font-style: italic; color: var(--coral); }
    .hero__sub { font-family: 'Cormorant Garamond', serif; font-size: clamp(18px, 2vw, 23px); font-style: italic; font-weight: 300; color: var(--soft); line-height: 1.6; margin-bottom: 40px; }
    .hero__note { font-size: 11px; letter-spacing: 2px; text-transform: uppercase; color: var(--soft); margin-top: 16px; }

    /* ═══ STRIP ═══ */
    .strip { background: var(--white); border-bottom: 1px solid var(--line); padding: 24px 40px; }
    .strip__grid { display: flex; flex-wrap: wrap; justify-content: center; }
    .strip__item { text-align: center; padding: 8px 44px; border-right: 1px solid var(--line); }
    .strip__item:last-child { border-right: none; }
    .strip__label { font-size: 9px; letter-spacing: 3px; text-transform: uppercase; color: var(--soft); font-weight: 600; margin-bottom: 3px; }
    .strip__val { font-family: 'Cormorant Garamond', serif; font-size: 19px; color: var(--text); }
    @media (max-width:580px) { .strip__item { border-right: none; width: 50%; } }

    /* ═══ PIJN (versie-tekst) ═══ */
    .pijn { background: var(--off); padding: 100px 0; }
    .pijn__inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: start; }
    @media (max-width:780px) { .pijn__inner { grid-template-columns: 1fr; gap: 48px; } }
    .pijn__photo { position: sticky; top: 80px; }
    .pijn__photo img { border-radius: 2px; height: 600px; }
    .pijn__text h2 { margin-bottom: 12px; }
    .pijn__intro { font-family: 'Cormorant Garamond', serif; font-size: clamp(18px, 2.2vw, 23px); font-style: italic; font-weight: 300; color: var(--soft); line-height: 1.6; margin-bottom: 40px; }
    .pijn__verse { list-style: none; }
    .pijn__verse li { padding: 18px 0; border-bottom: 1px solid var(--line); font-family: 'Cormorant Garamond', serif; font-size: clamp(17px, 2vw, 21px); font-weight: 300; color: var(--text); line-height: 1.6; }
    .pijn__verse li:first-child { border-top: 1px solid var(--line); }
    .pijn__close { margin-top: 40px; font-family: 'Cormorant Garamond', serif; font-size: clamp(20px, 2.5vw, 26px); font-style: italic; font-weight: 300; color: var(--text); line-height: 1.5; border-left: 3px solid var(--coral); padding-left: 24px; }
    .pijn__close strong { font-style: normal; color: var(--coral); }

    /* ═══ BAND ═══ */
    .band { padding: 96px 40px; text-align: center; }
    .band--coral { background: var(--coral); }
    .band--coral .band__text { color: #fff; }
    .band--coral .band__attr { color: rgba(255,255,255,.55); }
    .band--gold   { background: var(--gold); }
    .band--gold .band__text { color: var(--text); }
    .band--gold .band__attr { color: rgba(26,26,26,.4); }
    .band--blue   { background: var(--blue); }
    .band--blue .band__text { color: #fff; }
    .band__text { font-family: 'Cormorant Garamond', serif; font-size: clamp(28px, 5vw, 58px); font-weight: 300; font-style: italic; line-height: 1.3; max-width: 820px; margin: 0 auto 16px; }
    .band__attr  { font-size: 10px; letter-spacing: 3px; text-transform: uppercase; display: block; margin-top: 16px; }

    /* ═══ WATALS — foto + tekst rijen ═══ */
    .watals-intro { background: var(--off); padding: 80px 0 0; text-align: center; }
    .watals-intro h2 { margin-bottom: 16px; }
    .watals-intro p { font-size: 17px; color: var(--soft); max-width: 520px; margin: 0 auto; }

    .watals__row { display: grid; grid-template-columns: 1fr 1fr; min-height: 520px; }
    @media (max-width:720px) { .watals__row { grid-template-columns: 1fr; } }
    .watals__row--flip .watals__photo { order: 2; }
    .watals__row--flip .watals__copy  { order: 1; }
    @media (max-width:720px) { .watals__row--flip .watals__photo, .watals__row--flip .watals__copy { order: unset; } }
    .watals__photo { position: relative; min-height: 420px; }
    .watals__photo img { position: absolute; inset: 0; }
    .watals__copy { background: var(--off); display: flex; align-items: center; padding: 64px 56px; }
    @media (max-width:720px) { .watals__copy { padding: 48px 32px; } }
    .watals__copy-tag { font-size: 9px; letter-spacing: 3px; text-transform: uppercase; font-weight: 700; color: var(--coral); margin-bottom: 14px; display: block; }
    .watals__copy h3 { font-family: 'Cormorant Garamond', serif; font-size: clamp(26px, 3vw, 38px); font-weight: 300; line-height: 1.2; color: var(--text); margin-bottom: 16px; }
    .watals__copy h3 em { font-style: italic; color: var(--coral); }
    .watals__copy p { font-size: 15px; color: var(--soft); line-height: 1.8; }

    /* ═══ VERSIE BAND (blue) ═══ */
    .versie { background: var(--blue); padding: 96px 40px; }
    .versie__inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; max-width: 1100px; margin: 0 auto; }
    @media (max-width:760px) { .versie__inner { grid-template-columns: 1fr; gap: 40px; } }
    .versie__photo { border-radius: 2px; overflow: hidden; }
    .versie__photo img { height: 560px; border-radius: 2px; }
    .versie__text .eyebrow { color: rgba(255,255,255,.55); }
    .versie__text h2 { color: #fff; margin-bottom: 24px; }
    .versie__text h2 em { color: var(--pink); }
    .versie__text p { font-size: 16px; color: rgba(255,255,255,.8); line-height: 1.85; margin-bottom: 16px; }
    .versie__quote { border-left: 2px solid rgba(255,255,255,.35); padding-left: 20px; margin: 28px 0; font-family: 'Cormorant Garamond', serif; font-size: 22px; font-style: italic; color: #fff; line-height: 1.45; }

    /* ═══ VOOR WIE (checklist) ═══ */
    .voor-wie { background: var(--cream); padding: 100px 0; }
    .voor-wie__inner { display: grid; grid-template-columns: 1fr 2fr; gap: 80px; align-items: start; }
    @media (max-width:760px) { .voor-wie__inner { grid-template-columns: 1fr; gap: 40px; } }
    .voor-wie__list { list-style: none; }
    .voor-wie__list li { padding: 18px 0; border-bottom: 1px solid var(--line); font-size: 16px; line-height: 1.7; color: var(--text); display: flex; gap: 16px; align-items: flex-start; }
    .voor-wie__list li:first-child { border-top: 1px solid var(--line); }
    .voor-wie__list li::before { content: '✓'; color: var(--coral); flex-shrink: 0; font-weight: 700; margin-top: 2px; }

    /* ═══ INZICHT ═══ */
    .inzicht { background: var(--white); padding: 96px 40px; text-align: center; }
    .inzicht__inner { max-width: 760px; margin: 0 auto; }
    .inzicht__body { font-family: 'Cormorant Garamond', serif; font-size: clamp(22px, 3vw, 34px); font-weight: 300; line-height: 1.65; color: var(--text); margin-bottom: 32px; }
    .inzicht__body em { font-style: italic; color: var(--coral); }
    .inzicht__vraag { font-family: 'Cormorant Garamond', serif; font-size: clamp(26px, 3.5vw, 42px); font-style: italic; font-weight: 300; color: var(--text); line-height: 1.4; border-top: 1px solid var(--line); padding-top: 36px; margin-top: 8px; }

    /* ═══ OPT-IN (pricing stijl) ═══ */
    .optin { background: var(--off); padding: 100px 0; }
    .optin__header { text-align: center; margin-bottom: 72px; }
    .optin__header p { font-size: 16px; color: var(--soft); max-width: 460px; margin: 12px auto 0; }
    .optin__card { background: var(--white); padding: 64px 56px; max-width: 640px; margin: 0 auto; border: 1px solid var(--line); }
    .optin__card .optin__badge { display: inline-block; background: var(--gold); color: #fff; font-size: 9px; letter-spacing: 2px; text-transform: uppercase; font-weight: 700; padding: 4px 14px; border-radius: 2px; margin-bottom: 20px; }
    .optin__card-name { font-family: 'Cormorant Garamond', serif; font-size: 42px; font-weight: 300; color: var(--text); margin-bottom: 8px; }
    .optin__card-tagline { font-size: 14px; font-style: italic; color: var(--soft); margin-bottom: 32px; padding-bottom: 28px; border-bottom: 1px solid var(--line); line-height: 1.6; }
    .optin__includes { list-style: none; margin-bottom: 36px; }
    .optin__includes li { font-size: 14px; padding: 10px 0; border-bottom: 1px solid var(--line); display: flex; gap: 10px; color: var(--text); align-items: flex-start; }
    .optin__includes li::before { content: '✓'; color: var(--coral); flex-shrink: 0; font-weight: 700; }
    .form { display: flex; flex-direction: column; gap: 12px; }
    .form input[type="text"],
    .form input[type="email"] { width: 100%; padding: 14px 18px; font-family: 'Jost', sans-serif; font-size: 14px; border: 1.5px solid var(--line); background: var(--off); color: var(--text); border-radius: 2px; outline: none; transition: border-color .2s; }
    .form input:focus { border-color: var(--coral); }
    .form input::placeholder { color: #b0a090; }
    .form .btn { width: 100%; text-align: center; margin-top: 4px; }
    .form__note { font-size: 11px; color: var(--soft); letter-spacing: .5px; text-align: center; margin-top: 8px; }

    /* ═══ ABOUT ═══ */
    .about { background: var(--white); padding: 100px 0; }
    .about__inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    @media (max-width:740px) { .about__inner { grid-template-columns: 1fr; gap: 48px; } }
    .about__photo img { height: 680px; border-radius: 2px; }
    .about__text p { font-size: 16px; color: var(--soft); line-height: 1.85; }
    .about__pullquote { border-left: 3px solid var(--coral); padding-left: 22px; margin: 28px 0; font-family: 'Cormorant Garamond', serif; font-size: 22px; font-style: italic; color: var(--text); line-height: 1.45; }

    /* ═══ FINAL CTA ═══ */
    .final-cta { position: relative; min-height: 80vh; display: flex; align-items: center; justify-content: center; text-align: center; overflow: hidden; }
    .final-cta__bg { position: absolute; inset: 0; background: url('images/anouk-deur.jpg') center 20% / cover no-repeat; }
    .final-cta__bg::after { content: ''; position: absolute; inset: 0; background: rgba(15,10,5,.6); }
    .final-cta__content { position: relative; z-index: 1; padding: 80px 40px; max-width: 760px; }
    .final-cta__content h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(44px, 8vw, 96px); font-weight: 300; line-height: 1.05; color: #fff; margin-bottom: 24px; }
    .final-cta__content h2 em { font-style: italic; color: var(--coral); }
    .final-cta__content p { font-size: 17px; color: rgba(255,255,255,.8); max-width: 460px; margin: 0 auto 44px; line-height: 1.75; font-weight: 300; }

    /* ═══ FOOTER ═══ */
    footer { background: var(--coral); color: rgba(255,255,255,.7); text-align: center; padding: 18px 28px; font-size: 11px; letter-spacing: 1.5px; }
    footer a { color: #fff; text-decoration: none; }
  </style>
  <?php wp_head(); ?>
</head>
<body>


<div class="urgency">✦ &nbsp; Gratis audio-ervaring &nbsp; ✦</div>


<!-- ═══ HERO ═══ -->
<section class="hero">
  <div class="hero__inner">
    <div class="hero__photo">
      <img src="images/anouk-portret.jpg" alt="Anouk Kievit" />
    </div>
    <div class="hero__copy">
      <div class="hero__copy-inner">
        <span class="hero__badge">Gratis · 10 minuten</span>
        <h1 class="hero__h1">
          De versie van jou<br>die <em>al bestaat.</em>
        </h1>
        <p class="hero__sub">
          Ontdek in 10 minuten wat haar nog tegenhoudt.
        </p>
        <a href="#ontvangen" class="btn btn--coral">Ja, ik wil dit ontvangen →</a>
        <p class="hero__note">✦ &nbsp; Gratis audio-ervaring van Anouk Kievit</p>
      </div>
    </div>
  </div>
</section>

<div class="strip">
  <div class="strip__grid">
    <div class="strip__item"><div class="strip__label">Formaat</div><div class="strip__val">Audio</div></div>
    <div class="strip__item"><div class="strip__label">Duur</div><div class="strip__val">10 minuten</div></div>
    <div class="strip__item"><div class="strip__label">Kosten</div><div class="strip__val">Gratis</div></div>
    <div class="strip__item"><div class="strip__label">Direct</div><div class="strip__val">In je inbox</div></div>
  </div>
</div>


<!-- ═══ DE VERSIE VAN JOU ═══ -->
<section class="pijn">
  <div class="w">
    <div class="pijn__inner">

      <div class="pijn__photo">
        <img src="images/anouk-bogen.jpg" alt="Anouk Kievit" />
      </div>

      <div class="pijn__text">
        <span class="eyebrow eyebrow--coral">Er is een versie van jou</span>
        <h2>Die anders wakker<br><em>wordt.</em></h2>
        <p class="pijn__intro">
          Die keuzes maakt vanuit vertrouwen. Die haar prijs noemt zonder daarna te twijfelen. Die zichtbaar is zonder zich af te vragen wat iedereen ervan vindt.
        </p>

        <ul class="pijn__verse">
          <li>Die grenzen aangeeft.</li>
          <li>Die aanwezig is.</li>
          <li>Die leeft.</li>
        </ul>

        <p class="pijn__close">
          En het gekke?<br>
          <strong>Die versie van jou bestaat al.</strong><br>
          Ze zit niet aan de andere kant van nóg een cursus. Niet aan de andere kant van nóg meer kennis. Ze zit al in jou.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- CORAL BAND -->
<div class="band band--coral">
  <p class="band__text">"Je ziet haar soms heel even.<br>Op een goede dag. Na een overwinning.<br>Of in een moment waarop je vergeet bang te zijn."</p>
</div>


<!-- ═══ WAT ER DAN GEBEURT ═══ -->
<div class="watals-intro">
  <div class="w--narrow">
    <span class="eyebrow eyebrow--coral">Maar daarna</span>
    <h2>Trek je weer een<br><em>oude versie aan.</em></h2>
    <p>De versie die twijfelt. Die uitstelt. Die controle zoekt. Die zich aanpast. Die wacht.</p>
  </div>
</div>

<div class="watals__row">
  <div class="watals__photo">
    <img src="images/anouk-bank.jpg" alt="Anouk Kievit" />
  </div>
  <div class="watals__copy">
    <div>
      <span class="watals__copy-tag">De twijfel</span>
      <h3>Je trekt haar<br><em>telkens weer aan.</em></h3>
      <p>De versie die twijfelt. Die uitstelt. Die controle zoekt. Die zich aanpast. Die wacht. Je herkent haar. En je bent haar zo moe.</p>
    </div>
  </div>
</div>

<div class="watals__row watals__row--flip">
  <div class="watals__photo">
    <img src="images/anouk-bogen2.jpg" alt="Anouk Kievit" />
  </div>
  <div class="watals__copy">
    <div>
      <span class="watals__copy-tag">De echte vraag</span>
      <h3>Niet: hoe word ik<br><em>die vrouw?</em></h3>
      <p>De vraag is: <em style="font-style:italic;color:var(--coral);">wat houdt haar nog tegen?</em> Dat is wat we in deze audio samen onderzoeken. In 10 minuten.</p>
    </div>
  </div>
</div>


<!-- ═══ VERSIE BAND (blue) ═══ -->
<section class="versie">
  <div class="versie__inner">
    <div class="versie__photo">
      <img src="images/anouk-wit.jpg" alt="Anouk Kievit" />
    </div>
    <div class="versie__text">
      <span class="eyebrow">In deze gratis audio ontdek je</span>
      <h2>Wat haar<br>nog <em>tegenhoudt.</em></h2>
      <div class="versie__quote">
        Welke versie van jezelf je eigenlijk tegenhoudt.<br>
        Welke gedachte daaronder zit.
      </div>
      <p>Waarom je blijft wachten op meer zekerheid — en wat er nodig is om dichter bij jezelf te komen.</p>
      <p style="margin-top:32px;"><a href="#ontvangen" class="btn btn--outline-white">Ja, stuur mij de audio →</a></p>
    </div>
  </div>
</section>


<!-- ═══ VOOR WIE ═══ -->
<section class="voor-wie">
  <div class="w">
    <div class="voor-wie__inner">
      <div>
        <span class="eyebrow eyebrow--coral">Is dit voor jou</span>
        <h2>Dit raakt<br><em>jou.</em></h2>
        <p style="font-size:15px;color:var(--soft);line-height:1.8;">Je herkent het als je eerlijk bent:</p>
      </div>
      <ul class="voor-wie__list">
        <li>Je weet dat er een betere versie van jou bestaat — je voelt haar soms even. Maar ze is er niet consistent.</li>
        <li>Je hebt het gevoel dat je al lang genoeg wacht op jezelf.</li>
        <li>Je hebt coaches, cursussen en boeken geprobeerd maar iets blijft hangen wat je niet los krijgt.</li>
        <li>Je hoofd staat nooit echt uit. Ook niet als je "ontspant".</li>
        <li>Je bent klaar met begrijpen. Je wil nu iets voelen verschuiven.</li>
      </ul>
    </div>
  </div>
</section>


<!-- GOLD BAND -->
<div class="band band--gold">
  <p class="band__text">"De vraag is niet hoe je die versie van jezelf wordt.<br>Ze is er al. De vraag is alleen:<br>wat houdt haar nog tegen?"</p>
  <cite class="band__attr">— Anouk Kievit</cite>
</div>


<!-- ═══ INZICHT ═══ -->
<section class="inzicht">
  <div class="inzicht__inner">
    <p class="inzicht__body">
      Misschien is het grootste obstakel niet de situatie waarin je zit, maar <em>de gedachte die je erover gelooft.</em> Want een gedachte is geen feit. Het is een verhaal dat je geest vertelt — en zolang je het gelooft, voelt het als de waarheid.
    </p>
    <p class="inzicht__vraag">Maar stel dat die gedachte niet waar is…<br>Wat zou er dan ineens mogelijk zijn?</p>
  </div>
</section>


<!-- ═══ OPT-IN ═══ -->
<section class="optin" id="ontvangen">
  <div class="w">
    <div class="optin__header">
      <span class="eyebrow eyebrow--coral">Ontvang de gratis audio</span>
      <h2>Ja, ik wil<br><em>dit ontvangen.</em></h2>
      <p>Vul hieronder je naam en e-mailadres in. Je ontvangt de audio direct in je inbox.</p>
    </div>

    <div class="optin__card">
      <span class="optin__badge">Gratis · Direct beschikbaar</span>
      <div class="optin__card-name">De versie van jou die al bestaat</div>
      <div class="optin__card-tagline">Een audio-ervaring van 10 minuten. Je ontdekt wat die versie van jou eigenlijk tegenhoudt — en waarom het niet meer kennis of harder werken is.</div>
      <ul class="optin__includes">
        <li>Welke versie van jezelf je tegenhoudt</li>
        <li>Welke gedachte daaronder zit</li>
        <li>Waarom je blijft wachten op meer zekerheid</li>
        <li>Wat er nodig is om dichter bij jezelf te komen</li>
      </ul>
      <form class="form" action="#" method="post">
        <input type="text" name="voornaam" placeholder="Je voornaam" required />
        <input type="email" name="email" placeholder="Je e-mailadres" required />
        <button type="submit" class="btn btn--coral">Ja, stuur mij de audio →</button>
        <p class="form__note">✦ &nbsp; Gratis. Geen spam. Uitschrijven wanneer je wilt.</p>
      </form>
    </div>
  </div>
</section>


<!-- ═══ ABOUT ═══ -->
<section class="about">
  <div class="w">
    <div class="about__inner">
      <div class="about__photo">
        <img src="images/anouk-staand.jpg" alt="Anouk Kievit" />
      </div>
      <div>
        <span class="eyebrow eyebrow--coral">Even voorstellen</span>
        <h2>Hoi,<br>ik ben <em>Anouk.</em></h2>
        <p>Ik weet hoe het voelt om te weten dat er meer in zit — en het toch niet te doen. Die betere versie van mezelf? Ik zag haar ook. Soms heel even. En daarna verdween ze weer achter twijfel, uitstelgedrag en de overtuiging dat ik er eerst klaar voor moest zijn.</p>
        <p>Ik heb alles geprobeerd wat jij waarschijnlijk ook hebt geprobeerd. En pas toen ik ontdekte wat er echt speelde — niet het gedrag, maar wat er onder zat — veranderde er iets wat ik niet meer terug wil draaien.</p>
        <div class="about__pullquote">
          Sindsdien laat een vraag me niet meer los:<br>
          hoeveel van wat jou tegenhoudt is eigenlijk echt waar?
        </div>
        <p>Deze audio maakte ik omdat ik wil dat jij dat ook ontdekt. Niet over een jaar. Nu.</p>
        <p style="margin-top:28px;"><a href="#ontvangen" class="btn btn--coral">Stuur mij de audio →</a></p>
      </div>
    </div>
  </div>
</section>


<!-- ═══ FINAL CTA ═══ -->
<section class="final-cta">
  <div class="final-cta__bg"></div>
  <div class="final-cta__content">
    <h2>In 10 minuten kijk je<br>anders naar <em>jezelf.</em></h2>
    <p>Je hebt lang genoeg gewacht.<br>Dit is gratis. Dit is nu.</p>
    <a href="#ontvangen" class="btn btn--coral">Ja, ik wil de audio →</a>
  </div>
</section>


<footer>
  <p>© 2025 Anouk Kievit &nbsp;·&nbsp; <a href="/privacy">Privacy</a> &nbsp;·&nbsp; <a href="/algemene-voorwaarden">Algemene voorwaarden</a></p>
</footer>


<?php wp_footer(); ?>
</body>
</html>
