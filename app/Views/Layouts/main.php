<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="The Borbe's Method (TBM)">
  <meta name="description" content="A website performing as a "Capstone Tracking System" done in requirement for our COAL-101 project." >
  <meta name="keywords" content="Research Archives Organization College">
  <meta property="og:title" content="KLD-Hub" />
  <meta property="og:type" content="website.research.organization" />
  <meta property="og:url" content="?" />
  <meta property="og:image" content="?" />
  <title>KLD-Hub</title>
  <link rel="stylesheet" href="css/output.css">
</head>
<body>
  <?= $this->include('Components/nav') ?>
  <?= $this->renderSection('content') ?>
  <?= $this->include('Components/footer') ?>
</body>
</html>