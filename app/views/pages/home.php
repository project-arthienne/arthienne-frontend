<?php require __DIR__ . '/../layouts/header.php'; ?>

<section class="hero-section">
<div class="hero-left">
<h1 class="hero-title">Arthienne</h1>
<p class="hero-subtitle">Your Gateway to<br>Timeless Creations</p>
<button class="btn-compact">Get Started</button>
</div>

<div class="hero-right">
<img src="/arthienne/public/assets/images/landing.png">
</div>
</section>

<section class="about-section">
<div class="about-text">
<span class="tag">Arthienne</span>
<p>
Arthienne is a vibrant platform where art comes alive. We showcase unique paintings
and give artists the space to upload, display, sell, or even put their work up for bidding.
Whether you are an artist, a collector, or simply an art enthusiast, Arthienne connects
you with creativity and discovery.
</p>
<a class="about-link">More →</a>
</div>

<div class="about-mosaic">
<img src="/arthienne/public/assets/images/placeholder-image">
<img src="/arthienne/public/assets/images/placeholder-image">
<img src="/arthienne/public/assets/images/placeholder-image">
<img src="/arthienne/public/assets/images/placeholder-image">
<img src="/arthienne/public/assets/images/placeholder-image">
<img src="/arthienne/public/assets/images/placeholder-image">
<img src="/arthienne/public/assets/images/placeholder-image">
</div>
</section>

<section class="palette-section">
<div class="palette-header-row">
<h2 class="palette-header tag">Trending</h2>
<button class="btn-compact">See All</button>
</div>

<?php include __DIR__ . '/../partials/palette.php'; ?>
</section>

<section class="palette-section">
<div class="palette-header-row">
<h2 class="palette-header tag">Popular</h2>
<button class="btn-compact">See All</button>
</div>

<?php include __DIR__ . '/../partials/palette.php'; ?>
</section>

<section class="newsletter-section">
<div class="newsletter-left">
<h3>Get 20% off!</h3>
<p>Enter your email address to receive a discount code.</p>
</div>

<form class="newsletter-form">
<input type="email" placeholder="Email">
<button class="btn-compact">Receive Code</button>
</form>
</section>

<?php require __DIR__ . '/../layouts/footerExtended.php'; ?>
