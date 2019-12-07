<!DOCTYPE HTML>
<html>
<head>
  <?php
  require('common/connect.php');
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
  <meta http-equiv="Content-Security-Policy" content="default-src * data: gap: https://ssl.gstatic.com; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
  <script src="components/loader.js"></script>
  <script src="lib/onsenui/js/onsenui.min.js"></script>

  <link rel="stylesheet" href="components/loader.css">
  <link rel="stylesheet" href="lib/onsenui/css/onsenui.css">
  <script>
    if('serviceWorker' in navigator) {
      navigator.serviceWorker.register('/sw.js')
        .then(() => console.log("Service Worker Registered"))
        .catch(e => console.log(e));
    }
  </script>
  <link rel="manifest" href="/manifest.json">
  <link rel="stylesheet" href="lib/onsenui/css/onsen-css-components.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Courgette|Muli&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/37e2a8fe9a.js" crossorigin="anonymous"></script>

  <script>
    ons.ready(function() {
      console.log("Onsen UI is ready!");
    });

    if (ons.platform.isIPhoneX()) {
      document.documentElement.setAttribute('onsflag-iphonex-portrait', '');
      document.documentElement.setAttribute('onsflag-iphonex-landscape', '');
    }
  </script>
</head>
<body>
  <nav>
    <div class="settings">
      <i class="fas fa-cog"></i>
    </div>
    <h1>INITIATIVE</h1>
    <div class="hamburger-menu">
      <i class="fas fa-bars"></i>
    </div>
  </nav>
</body>
</html>
