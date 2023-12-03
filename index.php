<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMFONI - Sistem Informasi Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    </style>
    <link rel="stylesheet" href="job-portal/JobPortal.css">
    <link rel="stylesheet" href="survey-perusahaan/SurveyPerusahaan.css">
    <link rel="stylesheet" href="tracer/tracer.css">
    <link rel="stylesheet" href="login/login-style.css">
</head>

<body>
    <?php
    require_once 'nav/Navigation.php';
    $navigation = new Navigation();
    $navigation->render();
        require_once 'job-portal/JobPortal.php';
        require_once 'survey-perusahaan/SurveyPerusahaan.php';
        require_once 'tracer/Tracer.php';
        $jobPortal = new JobPortal();
        $surveyPerusahaan = new SurveyPerusahaan();
        $tracer = new Tracer();
        echo '<div id="content">';
        echo '<div class="container" style="border: 1px solid #000;">';
if (in_array($_SESSION['user_id'], [1, 2, 3])) {
    echo  $jobPortal->displayContent();
    // echo '<h2>Tracer</h2>' . $tracer->displayContent();
} else {
    echo '<h2>Survey Perusahaan</h2>' . $surveyPerusahaan->displayContent();
}
echo '</div>';
echo '</div>';
?>
    <!-- Skrip JavaScript -->
    <script src="job-portal/job-portal-script.js"></script>
    <script src="survey-perusahaan/survey-perusahaan-script.js"></script>
    <script src="tracer/tracer-script.js"></script>
    <!-- Content here -->
</body>

</html>