<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hero's Information</h1>

    <!-- Corrected: Updated the PHP echo syntax and URL in form action -->
    <form action="<?= url('/user-form') ?>" method="POST">
        <!-- Added CSRF token for security -->
        <?= csrf_field() ?> 

        <!-- Corrected input field for Hero Name -->
        <label for=""><b>Hero Name</b><input type="text" name="name"></label><br><br/>

        <!-- Corrected input field for Hero Age -->
        <label for=""><b>Hero Age</b><input type="text" name="age"></label><br><br/>

        <!-- Corrected input field name for Mobile number -->
        <label for=""><b>Hero Mobile number</b><input type="text" name="mobile_no"></label><br><br/> 

        <button type="submit">Submit</button>
    </form>

    <!-- Optional: Display submitted data -->
    <?php if (isset($data)): ?>
        <h2>Submitted Data:</h2>
        <p><b>Name:</b> <?= htmlspecialchars($data['name']) ?></p>
        <p><b>Age:</b> <?= htmlspecialchars($data['age']) ?></p>
        <p><b>Mobile Number:</b> <?= htmlspecialchars($data['mobile_no']) ?></p>
    <?php endif; ?>
</body>
</html>
