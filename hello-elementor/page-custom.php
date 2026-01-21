<?php

get_header();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<section style="font-family:Inter,sans-serif;background:#f9fafc;padding:60px 0;">
  <div class="container">

    <h2 style="text-align:center;font-size:2.3rem;font-weight:500;color:#7b68c7;letter-spacing:2px;margin-bottom:50px;">
      <b>OUR FEATURED LISTING</b>
    </h2>

    <div class="row g-4">

      <!-- PROPERTY CARD -->
      <?php
      $items = [
        ["img"=>"http://localhost/wordpress/wp-content/uploads/2026/01/image1.jpg","price"=>"£1,600 PCM","badge"=>"Let Agreed","badgeBg"=>"#e74c3c","title"=>"17 Carter Villas, Brockenhurst","spec"=>"2 Bedrooms | Other","date"=>"Available Now"],
        ["img"=>"http://localhost/wordpress/wp-content/uploads/2026/01/image2.jpg","price"=>"£1,400 PCM","badge"=>"To Let","badgeBg"=>"#f1c40f","title"=>"56 Dumpton Cross, Exeter","spec"=>"4 Bedrooms | House","date"=>"Available Nov 6"],
        ["img"=>"http://localhost/wordpress/wp-content/uploads/2026/01/image3.jpg","price"=>"£290,000","badge"=>"For Sale","badgeBg"=>"#f39c12","title"=>"116 Kingsdale Ford, Sherborne","spec"=>"5 Bedrooms | House","date"=>"For Sale"],
      ];

      foreach($items as $p): ?>
      <div class="col-lg-4 col-md-6">

        <div class="property-card"
          style="background:#fff;border-radius:8px;box-shadow:0 4px 12px rgba(0,0,0,.08);overflow:hidden;transition:.3s;"
          onmouseover="this.style.transform='translateY(-6px)'; this.querySelector('.price-wrap').style.background='rgba(0,0,0,0.45)';"
          onmouseout="this.style.transform='none'; this.querySelector('.price-wrap').style.background='transparent';">

          <!-- IMAGE --><!-- IMAGE -->
<div style="position:relative;height:260px;overflow:hidden;">
  <img 
    src="<?php echo $p['img']; ?>" 
    alt="<?php echo $p['title']; ?>"
    style="width:100%;height:100%;object-fit:cover;display:block;"
  >

  <!-- PRICE + BADGE STRIP -->
  <div class="price-wrap"
    style="position:absolute;bottom:12px;left:12px;right:12px;
           display:flex;justify-content:space-between;align-items:center;
           padding:8px 10px;border-radius:6px;
           background:rgba(0,0,0,0.45);transition:.3s;">

    <div style="color:#fff;font-weight:600;font-size:.9rem;">
      <?php echo $p['price']; ?>
    </div>

    <div style="background:<?php echo $p['badgeBg']; ?>;
                color:#fff;padding:4px 12px;
                border-radius:14px;font-size:.75rem;font-weight:600;">
      <?php echo $p['badge']; ?>
    </div>
  </div>
</div>


          <!-- BODY -->
          <div style="padding:20px;">
            <h5><?php echo $p['title']; ?></h5>
            <p style="color:#7f8c8d;"><?php echo $p['spec']; ?></p>

            <!-- FOOTER -->
            <div style="display:flex;justify-content:space-between;align-items:center;
                        border-top:1px solid #f1d28b;padding-top:12px;margin-top:12px;">

              <div class="heart"
                   style="width:40px;height:40px;background:#3b4a9e;
                          border-radius:50%;display:flex;
                          align-items:center;justify-content:center;
                          color:#fff;cursor:pointer;transition:.3s;"
                   onclick="this.classList.toggle('active');
                            this.style.background=this.classList.contains('active')?'#e74c3c':'#3b4a9e';">
                <i class="fas fa-heart"></i>
              </div>

              <div style="display:flex;align-items:center;gap:6px;
                          font-size:.85rem;color:#7f8c8d;">
                <i class="far fa-calendar-alt"></i>
                <span><?php echo $p['date']; ?></span>
              </div>

            </div>
          </div>

        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<section style="background:#ffffff;padding:70px 0;font-family:Inter,sans-serif;overflow:hidden;">
  <div style="max-width:1200px;margin:auto;text-align:center;">

    <!-- TITLE -->
<section style="background:#f6f6f6;padding:70px 0;font-family:Inter,sans-serif;overflow:hidden;">
  <div style="max-width:1200px;margin:auto;text-align:center;">

    <div style="margin-bottom:40px;">
      <div style="display:inline-flex;align-items:center;gap:10px;
                  background:#f1c40f;color:#000;
                  padding:10px 22px;border-radius:30px;
                  font-weight:600;">
        <span style="font-weight:700;"></span> Google Reviews <br>★★★★★</br>
      </div>
    </div>

<div id="vp" style="overflow:hidden;margin:auto;">


      <!-- TRACK -->
      <div id="trk" style="display:flex;gap:24px;">

        <!-- CARD -->
        <div style="background:#1c1c1c;color:#eee;padding:26px;border-radius:12px;
                    width:300px;flex-shrink:0;">
          <div style="color:#f1c40f;">★★★★★</div>
          <p style="font-size:14px;line-height:1.8;">
            Excellent service and professional support.
          </p>
          <div style="margin-top:16px;color:#f1c40f;font-weight:600;">
            Phil Mitchell
          </div>
        </div>

        <div style="background:#1c1c1c;color:#eee;padding:26px;border-radius:12px;
                    width:300px;flex-shrink:0;">
          <div style="color:#f1c40f;">★★★★★</div>
          <p style="font-size:14px;line-height:1.8;">
            Quick response and smooth process.
          </p>
          <div style="margin-top:16px;color:#f1c40f;font-weight:600;">
            Karl Pilkington
          </div>
        </div>

        <div style="background:#1c1c1c;color:#eee;padding:26px;border-radius:12px;
                    width:300px;flex-shrink:0;">
          <div style="color:#f1c40f;">★★★★★</div>
          <p style="font-size:14px;line-height:1.8;">
            Friendly team and excellent experience.
          </p>
          <div style="margin-top:16px;color:#f1c40f;font-weight:600;">
            Simon Pegg
          </div>
        </div>

        <div style="background:#1c1c1c;color:#eee;padding:26px;border-radius:12px;
                    width:300px;flex-shrink:0;">
          <div style="color:#f1c40f;">★★★★★</div>
          <p style="font-size:14px;line-height:1.8;">
            Excellent service and professional support.
          </p>
          <div style="margin-top:16px;color:#f1c40f;font-weight:600;">
            Phil Mitchell
          </div>
        </div>

        <div style="background:#1c1c1c;color:#eee;padding:26px;border-radius:12px;
                    width:300px;flex-shrink:0;">
          <div style="color:#f1c40f;">★★★★★</div>
          <p style="font-size:14px;line-height:1.8;">
            Quick response and smooth process.
          </p>
          <div style="margin-top:16px;color:#f1c40f;font-weight:600;">
            Karl Pilkington
          </div>
        </div>

        <div style="background:#1c1c1c;color:#eee;padding:26px;border-radius:12px;
                    width:300px;flex-shrink:0;">
          <div style="color:#f1c40f;">★★★★★</div>
          <p style="font-size:14px;line-height:1.8;">
            Friendly team and excellent experience.
          </p>
          <div style="margin-top:16px;color:#f1c40f;font-weight:600;">
            Simon Pegg
          </div>
        </div>

      </div>
    </div>

    <!-- DOTS -->
    <div style="margin-top:30px;">
      <span onclick="goTo(0)" style="cursor:pointer;width:10px;height:10px;
      background:#f1c40f;border-radius:50%;display:inline-block;margin:0 6px;"></span>
      <span onclick="goTo(1)" style="cursor:pointer;width:10px;height:10px;
      background:#f1c40f;border-radius:50%;display:inline-block;margin:0 6px;opacity:.4;"></span>
      <span onclick="goTo(2)" style="cursor:pointer;width:10px;height:10px;
      background:#f1c40f;border-radius:50%;display:inline-block;margin:0 6px;opacity:.4;"></span>
    </div>

  </div>
  
  <style>
/* MOBILE - 1 CARD */
#vp {
  width: 300px;
}

/* TABLET - 2 CARDS */
@media (min-width: 768px) {
  #vp {
    width: 624px; 
  }
}

/* DESKTOP - 3 CARDS */
@media (min-width: 1024px) {
  #vp {
    width: 948px; 
  }
}
</style>

  
  <script>
var vp = document.getElementById('vp');
var trk = document.getElementById('trk');
var cardWidth = 324; // card width + gap
var index = 0;
var totalCards = trk.children.length / 2; // original cards only
var isPaused = false;

/* STEP AUTO SLIDE */
setInterval(function () {
  if (isPaused) return;

  index++;

  if (index >= totalCards) {
    index = 0;
  }

  vp.scrollTo({
    left: index * cardWidth,
    behavior: 'smooth'
  });

}, 3000);

/* HOVER PAUSE */
vp.addEventListener('mouseenter', () => isPaused = true);
vp.addEventListener('mouseleave', () => isPaused = false);

/* MOBILE TOUCH PAUSE */
vp.addEventListener('touchstart', () => isPaused = true, { passive: true });
vp.addEventListener('touchend', () => isPaused = false, { passive: true });

/* DOT CLICK */
function goTo(i){
  index = i;
  vp.scrollTo({
    left: index * cardWidth,
    behavior: 'smooth'
  });
}
</script>



<?php get_footer(); ?>
