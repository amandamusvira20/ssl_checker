<!DOCTYPE html>

<!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>SSL Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url("assets/favicon/apple-icon-57x57.png"); ?>" >
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url("assets/favicon/apple-icon-60x60.png") ; ?>"  >
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url("assets/favicon/apple-icon-72x72.png"); ?>" >
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url("assets/favicon/apple-icon-76x76.png"); ?>" >
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url("assets/favicon/apple-icon-114x114.png"); ?>" >
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url("assets/favicon/apple-icon-120x120.png"); ?>" >
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url("assets/favicon/apple-icon-144x144.png"); ?>" >
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url("assets/favicon/apple-icon-152x152.png"); ?>" >
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url("assets/favicon/apple-icon-180x180.png"); ?>" >
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url("assets/favicon/android-icon-192x192.png"); ?>" >
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url("assets/favicon/favicon-32x32.png"); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url("assets/favicon/favicon-96x96.png"); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url("assets/favicon/favicon-16x16.png"); ?>">
    <link rel="manifest" href="<?= base_url("assets/favicon/manifest.json"); ?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="<?= base_url("assets/js/jquery-3.6.4.min.js"); ?>"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!-- assets styles-->
    <link rel="stylesheet" href="<?= base_url("assets/vendors/simplebar/css/simplebar.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/vendors/simplebar.css"); ?>">
    <!-- Main styles for this application-->
    <link href="<?= base_url("assets/css/style.css"); ?>" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="<?= base_url("assets/css/examples.css"); ?>"  rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="<?= base_url("assets/vendors/@coreui/chartjs/css/coreui-chartjs.css"); ?>" rel="stylesheet"> 
  </head>
  <body>