<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warteg.Genz | Rasa Lokal, Skena Digital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="site-shell">
        <header class="topbar">
            <a class="brand" href="/">Warteg<span>.Genz</span></a>
            <div class="topbar-actions"><span class="open-badge"><i></i> Buka 24/7</span><button class="cart-button" id="cart-toggle" type="button">Keranjang <span id="cart-count">(0)</span></button></div>
        </header>
        <main>
            <section class="hero"><div class="eyebrow">Makan Kenyang, Kantong Aman <span>👍</span></div><h1>Rasa Lokal, Skena <em>Digital.</em></h1><p>Pesan lauk warteg favorit langsung lewat HP. Tanpa antre, vibes<br class="desktop-only"> tetap mantap.</p><div class="category-tabs" role="tablist"><button class="category-tab active" data-category="all" type="button">Semua Lauk</button><button class="category-tab" data-category="best" type="button">Best Seller <span>🔥</span></button><button class="category-tab" data-category="hemat" type="button">Paket Hemat <span>💳</span></button><button class="category-tab" data-category="minuman" type="button">Minuman Segar <span>🧊</span></button></div></section>
            <section class="menu-section"><div class="section-heading"><div><p class="section-kicker">MENU HARI INI</p><h2>Lauk yang bikin balik lagi.</h2></div><span class="menu-note">Fresh from dapur <b>●</b></span></div><div class="menu-grid" id="menu-grid"></div></section>
            <section class="marquee"><div>NASI HANGAT • SAMBAL GRATIS • RASA RUMAHAN • PESAN SEKARANG • </div></section>
        </main>
        <div class="drawer-backdrop" id="drawer-backdrop"></div><aside class="cart-drawer" id="cart-drawer" aria-hidden="true"><div class="drawer-header"><div><p class="section-kicker">PESANANMU</p><h2>Keranjang</h2></div><button class="close-button" id="cart-close" type="button">&times;</button></div><div class="cart-items" id="cart-items"><div class="empty-cart">Keranjang masih kosong.<br><span>Yuk pilih lauk favoritmu!</span></div></div><div class="cart-footer"><div class="total-row"><span>Total</span><strong id="cart-total">Rp0</strong></div><button class="checkout-button" type="button" id="checkout-button">Lanjut Bayar <span>→</span></button></div></aside>
    </div>
</body>
</html>
