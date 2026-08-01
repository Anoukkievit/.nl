<?php /* Template Name: Adverteren */ ?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Leer winstgevend adverteren – Anouk Kievit</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Dancing+Script:wght@600;700&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --dark:   #1E2D25;
      --dark2:  #2A3D30;
      --sage:   #4A6355;
      --cream:  #F7F3EE;
      --white:  #FFFFFF;
      --warm:   #E8DDD0;
      --accent: #C4885A;
      --accent2:#A8714A;
      --text:   #1a1a1a;
      --muted:  #5a5a5a;
      --line:   #DDD5C8;
    }
    html { scroll-behavior: smooth; }
    body { font-family: 'DM Sans', sans-serif; background: var(--cream); color: var(--text); font-size: 16px; line-height: 1.85; }
    img { display: block; max-width: 100%; }
    a { color: inherit; text-decoration: none; }

    /* ═══ LAYOUT ═══ */
    .w { max-width: 1080px; margin: 0 auto; padding: 0 40px; }
    @media (max-width: 640px) { .w { padding: 0 24px; } }

    /* ═══ HERO ═══ */
    .hero {
      position: relative;
      min-height: 90vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      background: var(--dark);
    }
    .hero__bg {
      position: absolute;
      inset: 0;
      background: url('https://anoukkievit.nl/wp-content/uploads/2026/06/Anouk-Kievit_Kramer-Fotografeert-0760.jpg') center top / cover no-repeat;
      opacity: 0;
      transition: opacity .6s ease;
    }
    .hero__bg.loaded { opacity: 1; }
    .hero__overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(
        to bottom,
        rgba(30,45,37,.55) 0%,
        rgba(30,45,37,.75) 60%,
        rgba(30,45,37,.92) 100%
      );
    }
    .hero__inner {
      position: relative;
      z-index: 1;
      text-align: center;
      padding: 100px 40px 80px;
      max-width: 780px;
    }
    .hero__eyebrow {
      display: block;
      font-size: 10px;
      letter-spacing: 5px;
      text-transform: uppercase;
      color: rgba(255,255,255,.6);
      font-weight: 600;
      margin-bottom: 28px;
    }
    .hero__name {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(52px, 9vw, 100px);
      font-weight: 300;
      letter-spacing: 6px;
      text-transform: uppercase;
      color: #fff;
      line-height: 1;
      margin-bottom: 20px;
    }
    .hero__tagline {
      font-size: 11px;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: rgba(255,255,255,.6);
      font-weight: 500;
      margin-bottom: 40px;
    }
    .hero__sub {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(20px, 2.8vw, 28px);
      font-style: italic;
      font-weight: 300;
      color: rgba(255,255,255,.88);
      line-height: 1.5;
      margin-bottom: 44px;
    }
    .btn {
      display: inline-block;
      padding: 14px 36px;
      font-size: 10px;
      letter-spacing: 3px;
      text-transform: uppercase;
      font-weight: 600;
      font-family: 'DM Sans', sans-serif;
      border: 1.5px solid rgba(255,255,255,.6);
      color: #fff;
      transition: all .2s;
      cursor: pointer;
    }
    .btn:hover { background: rgba(255,255,255,.12); border-color: #fff; }
    .btn--dark { border-color: var(--dark); color: var(--dark); background: transparent; }
    .btn--dark:hover { background: var(--dark); color: #fff; }
    .btn--accent { background: var(--accent); border-color: var(--accent); color: #fff; }
    .btn--accent:hover { background: var(--accent2); border-color: var(--accent2); }
    .btn--full { width: 100%; text-align: center; display: block; }

    /* ═══ AANBOD ═══ */
    .aanbod {
      background: var(--dark);
      padding: 96px 0;
    }
    .aanbod__header {
      text-align: center;
      margin-bottom: 64px;
    }
    .section-eyebrow {
      display: block;
      font-size: 10px;
      letter-spacing: 4px;
      text-transform: uppercase;
      font-weight: 600;
      margin-bottom: 16px;
    }
    .section-eyebrow--light { color: rgba(255,255,255,.45); }
    .section-eyebrow--dark  { color: var(--accent); }
    .section-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(34px, 5vw, 54px);
      font-weight: 400;
      color: #fff;
      line-height: 1.15;
    }
    .section-title--dark { color: var(--text); }

    .aanbod__grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 32px;
    }
    @media (max-width: 820px) {
      .aanbod__grid { grid-template-columns: 1fr; max-width: 480px; margin: 0 auto; }
    }

    .card {
      display: flex;
      flex-direction: column;
      background: rgba(255,255,255,.05);
      border: 1px solid rgba(255,255,255,.1);
    }
    .card__img-wrap {
      width: 100%;
      aspect-ratio: 3/2;
      overflow: hidden;
      background: var(--dark2);
    }
    .card__img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .4s ease;
    }
    .card:hover .card__img-wrap img { transform: scale(1.03); }
    .card__body {
      padding: 28px 28px 32px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    .card__badge {
      display: inline-block;
      font-size: 9px;
      letter-spacing: 3px;
      text-transform: uppercase;
      font-weight: 600;
      padding: 4px 10px;
      margin-bottom: 16px;
      align-self: flex-start;
    }
    .card__badge--gratis  { background: rgba(196,136,90,.2); color: var(--accent); border: 1px solid rgba(196,136,90,.3); }
    .card__badge--wacht   { background: rgba(255,255,255,.08); color: rgba(255,255,255,.55); border: 1px solid rgba(255,255,255,.12); }
    .card__badge--exclusief { background: rgba(196,136,90,.15); color: var(--accent); border: 1px solid rgba(196,136,90,.25); }
    .card__title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(26px, 3vw, 34px);
      font-weight: 500;
      color: #fff;
      line-height: 1.15;
      margin-bottom: 14px;
    }
    .card__desc {
      font-size: 15px;
      color: rgba(255,255,255,.65);
      line-height: 1.75;
      flex: 1;
      margin-bottom: 28px;
    }
    .card__cta { margin-top: auto; }

    /* ═══ ABOUT ═══ */
    .about {
      background: var(--cream);
      padding: 100px 0;
    }
    .about__inner {
      display: grid;
      grid-template-columns: 420px 1fr;
      gap: 80px;
      align-items: start;
    }
    @media (max-width: 860px) {
      .about__inner { grid-template-columns: 1fr; gap: 48px; }
    }
    .about__photo-wrap {
      position: sticky;
      top: 80px;
    }
    .about__photo {
      width: 100%;
      aspect-ratio: 3/4;
      object-fit: cover;
      object-position: top;
    }
    .about__content {}
    .about__title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(42px, 7vw, 72px);
      font-weight: 400;
      color: var(--text);
      line-height: 1.05;
      margin-bottom: 10px;
    }
    .about__subtitle {
      font-size: 11px;
      letter-spacing: 3px;
      text-transform: uppercase;
      font-weight: 600;
      color: var(--accent);
      margin-bottom: 40px;
      display: block;
    }
    .about__text p {
      font-size: 16px;
      color: var(--muted);
      line-height: 1.85;
      margin-bottom: 20px;
    }
    .about__text p:last-child { margin-bottom: 0; }
    .about__sig {
      font-family: 'Dancing Script', cursive;
      font-size: 44px;
      color: var(--dark);
      margin-top: 40px;
      display: block;
    }

    /* ═══ FOOTER ═══ */
    .footer {
      background: var(--dark);
      color: rgba(255,255,255,.45);
      text-align: center;
      padding: 48px 40px;
      font-size: 13px;
      letter-spacing: 1px;
    }
    .footer a { color: rgba(255,255,255,.6); }
    .footer a:hover { color: #fff; }

    @media (max-width: 640px) {
      .hero__inner { padding: 80px 24px 64px; }
      .aanbod { padding: 64px 0; }
      .about  { padding: 64px 0; }
    }
  </style>
</head>
<body>

<!-- HERO -->
<section class="hero">
  <div class="hero__bg" id="heroBg"></div>
  <div class="hero__overlay"></div>
  <div class="hero__inner">
    <span class="hero__eyebrow">Meta Ads Specialist & Trainer</span>
    <h1 class="hero__name">Anouk Kievit</h1>
    <p class="hero__tagline">Adverteren · Groeien · Vrijheid</p>
    <p class="hero__sub">Leer zelf winstgevend adverteren —<br>zodat jij de regie houdt over je eigen groei.</p>
    <a href="#aanbod" class="btn">Bekijk het aanbod</a>
  </div>
</section>

<!-- AANBOD -->
<section class="aanbod" id="aanbod">
  <div class="w">
    <div class="aanbod__header">
      <span class="section-eyebrow section-eyebrow--light">Wat ik aanbied</span>
      <h2 class="section-title">Kies jouw volgende stap</h2>
    </div>

    <div class="aanbod__grid">

      <!-- MASTERCLASS -->
      <div class="card">
        <div class="card__img-wrap">
          <img
            src="https://anoukkievit.nl/wp-content/uploads/2026/06/Anouk-Kievit_Kramer-Fotografeert-0714.jpg"
            alt="Masterclass – Anouk Kievit"
            loading="lazy"
          />
        </div>
        <div class="card__body">
          <span class="card__badge card__badge--gratis">Gratis</span>
          <h3 class="card__title">Gratis Masterclass</h3>
          <p class="card__desc">
            In deze gratis masterclass leer je hoe je als ondernemer zelf je eerste winstgevende advertenties opzet — zonder groot budget en zonder technische kennis.
          </p>
          <div class="card__cta">
            <a href="#" class="btn btn--accent btn--full">Ik schrijf me in</a>
          </div>
        </div>
      </div>

      <!-- DE ADMEESTER -->
      <div class="card">
        <div class="card__img-wrap">
          <img
            src="https://anoukkievit.nl/wp-content/uploads/2026/06/Anouk-Kievit_Kramer-Fotografeert-0730.jpg"
            alt="De Admeester – Anouk Kievit"
            loading="lazy"
          />
        </div>
        <div class="card__body">
          <span class="card__badge card__badge--wacht">Wachtlijst · Start september</span>
          <h3 class="card__title">De Admeester</h3>
          <p class="card__desc">
            Het programma voor ondernemers die zelf de regie willen over hun advertenties. Stap voor stap leer je hoe je winstgevend adverteert op Meta — en houdt het vol. Start september.
          </p>
          <div class="card__cta">
            <a href="#" class="btn btn--accent btn--full">Zet me op de wachtlijst</a>
          </div>
        </div>
      </div>

      <!-- 1:1 EXCLUSIEF -->
      <div class="card">
        <div class="card__img-wrap">
          <img
            src="https://anoukkievit.nl/wp-content/uploads/2026/06/Anouk-Kievit_Kramer-Fotografeert-0760.jpg"
            alt="1:1 Exclusief – Anouk Kievit"
            loading="lazy"
          />
        </div>
        <div class="card__body">
          <span class="card__badge card__badge--exclusief">Exclusief · Max 3 plekken</span>
          <h3 class="card__title">1:1 Werken</h3>
          <p class="card__desc">
            Persoonlijke begeleiding voor ondernemers die snel en met directe feedback willen doorgroeien. We werken samen aan jouw specifieke situatie, advertenties en strategie. Slechts 3 plekken beschikbaar.
          </p>
          <div class="card__cta">
            <a href="#" class="btn btn--accent btn--full">Neem contact op</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- OVER ANOUK -->
<section class="about" id="over">
  <div class="w">
    <div class="about__inner">
      <div class="about__photo-wrap">
        <img
          class="about__photo"
          src="https://anoukkievit.nl/wp-content/uploads/2026/06/Anouk-Kievit_Kramer-Fotografeert-0714.jpg"
          alt="Anouk Kievit"
        />
      </div>
      <div class="about__content">
        <span class="section-eyebrow section-eyebrow--dark">Over mij</span>
        <h2 class="about__title">Meet<br>Anouk</h2>
        <span class="about__subtitle">Anouk Kievit · Meta Ads Specialist</span>
        <div class="about__text">
          <p>Ik ben Anouk.</p>
          <p>Als ik ergens voor ga, dan ga ik ook echt all-in.</p>
          <p>Dat bracht me eerst naar de zorg, waar ik als hbo-verpleegkundige werkte op de oncologie en tijdens corona op de Intensive Care. Maar diep vanbinnen wist ik al jaren dat ik wilde ondernemen.</p>
          <p>Ruim 2,5 jaar geleden besloot ik de sprong te wagen. Ik begon als virtueel assistent, bouwde binnen korte tijd een volle agenda op en leerde ondernemen vooral door te doen. Door fouten te maken, veel te werken en steeds beter te worden.</p>
          <p>Later specialiseerde ik me in Meta Ads. Uiteindelijk hielp ik ruim 150 ondernemers 1-op-1 met hun techniek en uiteindelijk met een team samen met het uit handen nemen van hun advertenties. Ik stond naast ondernemers die doorgroeiden van €50.000 naar €500.000 omzet — en zag van dichtbij wat groei écht vraagt.</p>
          <p>Maar ik ontdekte ook iets anders.</p>
          <p>Ik geloof niet dat ondernemers afhankelijk zouden moeten zijn van een marketingbureau. Ik geloof dat je zelf moet begrijpen hoe je klanten aantrekt.</p>
          <p>Daarom besloot ik mijn kennis niet langer alleen vóór ondernemers in te zetten, maar juist áán ondernemers te leren. De eerste editie van mijn training werd direct door 221 ondernemers gekocht.</p>
          <p>Mijn doel is simpel: zoveel mogelijk ondernemers laten ervaren hoeveel vrijheid advertenties kunnen geven. Niet alleen meer omzet, maar vooral meer rust, meer tijd en meer regie over je eigen bedrijf.</p>
          <p>Naast mijn bedrijf schrijf ik aan een boek over mijn verleden met anorexia. Want uiteindelijk draait voor mij alles om hetzelfde: vrijheid.</p>
        </div>
        <span class="about__sig">Anouk</span>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <p>© 2026 Anouk Kievit &nbsp;·&nbsp; <a href="mailto:anouk@anoukkievit.nl">anouk@anoukkievit.nl</a> &nbsp;·&nbsp; <a href="#">Algemene Voorwaarden</a></p>
</footer>

<script>
  const bg = document.getElementById('heroBg');
  const tmp = new Image();
  tmp.onload = () => bg.classList.add('loaded');
  tmp.src = bg.style.backgroundImage
    ? bg.style.backgroundImage.slice(5,-2)
    : 'https://anoukkievit.nl/wp-content/uploads/2026/06/Anouk-Kievit_Kramer-Fotografeert-0760.jpg';
  bg.classList.add('loaded');
</script>

</body>
</html>
