<?php
$members = [
    ['name' => 'Connor McKnight', 'dateOfBirth' => '2004-01-18', 'email' => 'mcknightc6@mymail.nku.edu'],
    ['name' => 'Sean Smith', 'dateOfBirth' => '2003-07-15', 'email' => 'example@mymail.nku.edu']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Members</title>
</head>
<body>
    <h1>Team Members</h1>
    <div class="members">
        <?php foreach ($members as $index => $member): ?>
            <div class="card">
                <h2><?php echo $member['name']; ?></h2>
                <p>Age: <?php echo Agecalc($member['dateOfBirth']); ?></p>
                <p>Email: <?php echo $member['email']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
