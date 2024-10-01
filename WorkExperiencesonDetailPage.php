<?php
$workExperiences = [
    ['jobTitle' => 'Software Engineer', 'company' => 'Tech Corp', 'years' => '2018-2022'],
    ['jobTitle' => 'Project Manager', 'company' => 'Business Inc.', 'years' => '2015-2018']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Details</title>
</head>
<body>
    <h1>Work Experiences</h1>
    <div id="work-experiences">
        <?php foreach ($workExperiences as $experience): ?>
            <div class="work-experience">
                <h3><?php echo $experience['jobTitle']; ?></h3>
                <p>Company: <?php echo $experience['company']; ?></p>
                <p>Years: <?php echo $experience['years']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
