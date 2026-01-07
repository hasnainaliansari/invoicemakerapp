<?php include 'includes/header.php'; ?>
<link href="css/main-core1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/main.css">
<?php include("includes/g-analytics.php"); ?>

<style>
  #invFrame{
    width: 100%;
    border: 0;
    display: block;
    height: 600px;     /* initial */
    overflow: hidden;
    margin-top: 8rem;
  }
  .small-badge{
    top: -7px;
  }
  .navbar_dropdown-subheading{
    margin: 0 !important;
    line-height: 1.2 !important;
  }
  .navbar_dropdown-content-wrapper{
    background: #f7f6f5;
  }
</style>

<iframe id="invFrame" src="/invoice-generator/"></iframe>

<script>
  const f = document.getElementById('invFrame');
  let ro = null;

  function getDoc(){
    return f.contentDocument || (f.contentWindow && f.contentWindow.document);
  }

  function hideInnerHeader(doc) {
    const candidates = [
      'header', '.header', '.topbar', '.navbar', '.site-header', '.app-header'
    ];

    candidates.forEach(sel => {
      doc.querySelectorAll(sel).forEach(el => el.style.display = 'none');
    });

    // remove unwanted spacing
    doc.documentElement.style.margin = '0';
    doc.documentElement.style.padding = '0';
    doc.body.style.margin = '0';
    doc.body.style.padding = '0';
  }

  function bestHeight(doc){
    // Prefer root/app wrapper in React if available
    const root =
      doc.querySelector('#root') ||
      doc.querySelector('[data-reactroot]') ||
      doc.querySelector('main') ||
      doc.body;

    // Use scrollHeight but after shrinking iframe (prevents accumulation)
    const h = Math.max(
      root.scrollHeight || 0,
      doc.body.scrollHeight || 0,
      doc.documentElement.scrollHeight || 0
    );

    return h;
  }

  function resizeInvFrame(){
    try {
      const doc = getDoc();
      if (!doc) return;

      // IMPORTANT: shrink first to avoid "ever-growing" height
      f.style.height = '1px';

      const h = bestHeight(doc);
      f.style.height = (h + 20) + 'px';
    } catch(e) {}
  }

  function setupObservers(){
    try {
      const doc = getDoc();
      if (!doc) return;

      if (ro) ro.disconnect();

      ro = new ResizeObserver(() => {
        // Header hide + resize (but no interval)
        hideInnerHeader(doc);
        resizeInvFrame();
      });

      // observe changes
      ro.observe(doc.documentElement);
      ro.observe(doc.body);
    } catch(e) {}
  }

  f.addEventListener('load', () => {
    const doc = getDoc();
    if (!doc) return;

    hideInnerHeader(doc);
    resizeInvFrame();
    setupObservers();

    // handle late rendering (fonts/images/react hydration)
    setTimeout(() => { hideInnerHeader(doc); resizeInvFrame(); }, 200);
    setTimeout(() => { hideInnerHeader(doc); resizeInvFrame(); }, 800);
    setTimeout(() => { hideInnerHeader(doc); resizeInvFrame(); }, 1500);
  });

  window.addEventListener('resize', resizeInvFrame);
</script>
<script src="js/jquery-3.5.1.min.dc5e7f18c8.js" type="text/javascript"></script>
			<script src="js/webflow.js" type="text/javascript"></script>

<?php include 'includes/footer.php'; ?>
