<?php /* Template Name: Adverteren */ ?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Leer winstgevend adverteren – Anouk Kievit</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Dancing+Script:wght@600;700&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --coral:   #E07035;
      --coral-d: #C05820;
      --blue:    #5B6BB0;
      --blue-d:  #4454A0;
      --gold:    #D4A832;
      --pink:    #D4A8C8;
      --cream:   #FAF5EE;
      --off:     #FDFAF7;
      --white:   #FFFFFF;
      --text:    #1a1a1a;
      --muted:   #5a5a5a;
      --line:    #DDD5C8;
    }
    html { scroll-behavior: smooth; }
    body { font-family: 'DM Sans', sans-serif; background: var(--off); color: var(--text); font-size: 16px; line-height: 1.85; }
    img { display: block; max-width: 100%; }
    a { color: inherit; text-decoration: none; }

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
    }
    .hero__bg {
      position: absolute;
      inset: 0;
      background: url('https://anoukkievit.nl/wp-content/uploads/2026/06/Anouk-Kievit_Kramer-Fotografeert-0760.jpg') center top / cover no-repeat;
    }
    .hero__bg::after {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(10,8,6,.62);
    }
    .hero__inner {
      position: relative;
      z-index: 1;
      text-align: center;
      padding: 100px 40px 80px;
      max-width: 820px;
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
      font-family: 'DM Serif Display', serif;
      font-size: clamp(46px, 8vw, 96px);
      font-weight: 400;
      color: #fff;
      line-height: 1.05;
      margin-bottom: 24px;
    }
    .hero__tagline {
      font-size: 11px;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: rgba(255,255,255,.55);
      font-weight: 500;
      margin-bottom: 36px;
    }
    .hero__sub {
      font-family: 'DM Serif Display', serif;
      font-size: clamp(19px, 2.5vw, 26px);
      font-style: italic;
      color: rgba(255,255,255,.85);
      line-height: 1.5;
      margin-bottom: 48px;
    }

    /* ═══ BUTTONS ═══ */
    .btn {
      display: inline-block;
      padding: 15px 38px;
      font-size: 10px;
      letter-spacing: 3px;
      text-transform: uppercase;
      font-weight: 600;
      font-family: 'DM Sans', sans-serif;
      transition: all .2s;
      cursor: pointer;
      border-radius: 2px;
      border: none;
      text-decoration: none;
    }
    .btn--coral { background: var(--coral); color: #fff; }
    .btn--coral:hover { background: var(--coral-d); transform: translateY(-2px); }
    .btn--outline-white { background: transparent; border: 1.5px solid rgba(255,255,255,.6); color: #fff; }
    .btn--outline-white:hover { background: rgba(255,255,255,.12); }
    .btn--outline-dark { background: transparent; border: 1.5px solid var(--text); color: var(--text); }
    .btn--outline-dark:hover { background: var(--text); color: #fff; }
    .btn--full { width: 100%; text-align: center; display: block; }

    /* ═══ AANBOD ═══ */
    .aanbod {
      background: var(--text);
      padding: 96px 0;
    }
    .aanbod__header {
      text-align: center;
      margin-bottom: 64px;
    }
    .eyebrow {
      display: block;
      font-size: 10px;
      letter-spacing: 4px;
      text-transform: uppercase;
      font-weight: 600;
      margin-bottom: 16px;
    }
    .eyebrow--coral { color: var(--coral); }
    .eyebrow--light { color: rgba(255,255,255,.4); }
    .section-title {
      font-family: 'DM Serif Display', serif;
      font-size: clamp(32px, 5vw, 54px);
      font-weight: 400;
      line-height: 1.15;
    }
    .section-title--light { color: #fff; }
    .section-title--dark  { color: var(--text); }

    .aanbod__grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 28px;
    }
    @media (max-width: 820px) {
      .aanbod__grid { grid-template-columns: 1fr; max-width: 500px; margin: 0 auto; }
    }

    .card {
      display: flex;
      flex-direction: column;
      background: rgba(255,255,255,.04);
      border: 1px solid rgba(255,255,255,.1);
    }
    .card__img {
      width: 100%;
      aspect-ratio: 4/3;
      object-fit: cover;
      object-position: top;
      display: block;
      transition: transform .4s;
    }
    .card:hover .card__img { transform: scale(1.03); }
    .card__img-wrap { overflow: hidden; }

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
      margin-bottom: 18px;
      align-self: flex-start;
    }
    .card__badge--gratis    { background: rgba(224,112,53,.18); color: var(--coral); border: 1px solid rgba(224,112,53,.3); }
    .card__badge--wacht     { background: rgba(255,255,255,.07); color: rgba(255,255,255,.5); border: 1px solid rgba(255,255,255,.12); }
    .card__badge--exclusief { background: rgba(91,107,176,.2); color: #8a95cc; border: 1px solid rgba(91,107,176,.3); }

    .card__title {
      font-family: 'DM Serif Display', serif;
      font-size: clamp(19px, 2.2vw, 24px);
      font-weight: 400;
      color: #fff;
      line-height: 1.25;
      margin-bottom: 14px;
    }
    .card__subtitle {
      font-size: 13px;
      font-style: italic;
      color: rgba(255,255,255,.5);
      margin-bottom: 16px;
      line-height: 1.5;
    }
    .card__desc {
      font-size: 14.5px;
      color: rgba(255,255,255,.62);
      line-height: 1.8;
      flex: 1;
      margin-bottom: 28px;
    }
    .card__cta { margin-top: auto; }

    /* ═══ OVER MIJ ═══ */
    .about {
      background: var(--off);
      padding: 100px 0;
    }
    .about__inner {
      display: grid;
      grid-template-columns: 400px 1fr;
      gap: 80px;
      align-items: start;
    }
    @media (max-width: 860px) {
      .about__inner { grid-template-columns: 1fr; gap: 48px; }
    }
    .about__photo-wrap { position: sticky; top: 80px; }
    .about__photo {
      width: 100%;
      aspect-ratio: 3/4;
      object-fit: cover;
      object-position: top;
    }
    .about__eyebrow { margin-bottom: 20px; }
    .about__title {
      font-family: 'DM Serif Display', serif;
      font-size: clamp(40px, 6.5vw, 72px);
      font-weight: 400;
      color: var(--text);
      line-height: 1.05;
      margin-bottom: 10px;
    }
    .about__role {
      font-size: 11px;
      letter-spacing: 3px;
      text-transform: uppercase;
      font-weight: 600;
      color: var(--coral);
      display: block;
      margin-bottom: 40px;
    }
    .about__text p {
      font-size: 15.5px;
      color: var(--muted);
      line-height: 1.85;
      margin-bottom: 18px;
    }
    .about__text p:last-child { margin-bottom: 0; }
    .about__sig {
      font-family: 'Dancing Script', cursive;
      font-size: 46px;
      color: var(--text);
      margin-top: 40px;
      display: block;
    }

    /* ═══ FOOTER ═══ */
    .footer {
      background: var(--text);
      color: rgba(255,255,255,.4);
      text-align: center;
      padding: 44px 40px;
      font-size: 13px;
      letter-spacing: .5px;
    }
    .footer a { color: rgba(255,255,255,.55); }
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
  <div class="hero__bg"></div>
  <div class="hero__inner">
    <span class="hero__eyebrow">Meta Ads Specialist &amp; Trainer</span>
    <h1 class="hero__name">Anouk Kievit</h1>
    <p class="hero__tagline">Adverteren · Groeien · Vrijheid</p>
    <p class="hero__sub">Leer zelf winstgevend adverteren —<br>zodat jij de regie houdt over je eigen groei.</p>
    <a href="#aanbod" class="btn btn--outline-white">Bekijk het aanbod</a>
  </div>
</section>

<!-- AANBOD -->
<section class="aanbod" id="aanbod">
  <div class="w">
    <div class="aanbod__header">
      <span class="eyebrow eyebrow--light">Wat ik aanbied</span>
      <h2 class="section-title section-title--light">Kies jouw volgende stap</h2>
    </div>

    <div class="aanbod__grid">

      <!-- MASTERCLASS -->
      <div class="card">
        <div class="card__img-wrap">
          <img class="card__img"
            src="https://anoukkievit.nl/wp-content/uploads/2026/06/Anouk-Kievit_Kramer-Fotografeert-0714.jpg"
            alt="Gratis Masterclass"
            loading="lazy"
          />
        </div>
        <div class="card__body">
          <span class="card__badge card__badge--gratis">Gratis</span>
          <h3 class="card__title">De 3 grootste fouten die drukke ondernemers maken met advertenties</h3>
          <p class="card__subtitle">(waardoor ze onnodig klanten, tijd en omzet mislopen)</p>
          <p class="card__desc">
            Ontdek waarom zoveel ondernemers advertenties veel ingewikkelder maken dan nodig is — en wat er werkelijk nodig is om voorspelbaar nieuwe leads en klanten aan te trekken, zonder dagelijks online te zijn en zonder marketingbureau.
          </p>
          <div class="card__cta">
            <a href="#" class="btn btn--coral btn--full">Ik schrijf me gratis in</a>
          </div>
        </div>
      </div>

      <!-- DE ADMEESTER -->
      <div class="card">
        <div class="card__img-wrap">
          <img class="card__img"
            src="https://anoukkievit.nl/wp-content/uploads/2026/06/Anouk-Kievit_Kramer-Fotografeert-0730.jpg"
            alt="De Admeester"
            loading="lazy"
          />
        </div>
        <div class="card__body">
          <span class="card__badge card__badge--wacht">Wachtlijst · Start september</span>
          <h3 class="card__title">De Admeester</h3>
          <p class="card__desc">
            Schrijf je in voor de wachtlijst van Admeester en hoor als eerste wanneer de deuren openen. Leer hoe je zelf winstgevende Meta Ads inzet, zodat je niet langer afhankelijk bent van dagelijks posten of een marketingbureau. De volgende ronde start in september.
          </p>
          <div class="card__cta">
            <a href="#" class="btn btn--coral btn--full">Zet me op de wachtlijst</a>
          </div>
        </div>
      </div>

      <!-- 1:1 EXCLUSIEF -->
      <div class="card">
        <div class="card__img-wrap">
          <img class="card__img"
            src="https://anoukkievit.nl/wp-content/uploads/2026/06/Anouk-Kievit_Kramer-Fotografeert-0760.jpg"
            alt="1:1 Werken"
            loading="lazy"
          />
        </div>
        <div class="card__body">
          <span class="card__badge card__badge--exclusief">Exclusief · Max 3 plekken</span>
          <h3 class="card__title">1:1 Werken</h3>
          <p class="card__desc">
            Wil je samen aan de slag zodat ik 4 maanden naast je sta? We bouwen samen jouw advertentiestrategie én klantreis uit. Intensief, persoonlijk en op maat — zodat jij zelf leert adverteren, begrijpt wat werkt voor jouw bedrijf en niet langer afhankelijk bent van anderen. Voor ondernemers die écht willen doorgroeien. Slechts 3 plekken.
          </p>
          <div class="card__cta">
            <a href="#" class="btn btn--coral btn--full">Neem contact op</a>
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
        <span class="eyebrow eyebrow--coral about__eyebrow">Over mij</span>
        <h2 class="about__title">Meet<br>Anouk</h2>
        <span class="about__role">Meta Ads Specialist &amp; Trainer</span>
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

</body>
</html>
