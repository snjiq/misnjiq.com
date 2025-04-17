<?php 
include '../includes/header.php';

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name)) {
        $errors['name'] = 'Пожалуйста, введите ваше имя';
    }

    if (empty($email)) {
        $errors['email'] = 'Пожалуйста, введите email';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Пожалуйста, введите корректный email';
    }

    if (empty($message)) {
        $errors['message'] = 'Пожалуйста, введите сообщение';
    }

    if (empty($errors)) {
     
        
        $success = true;
        
        $name = $email = $message = '';
    }
}
?>

<main class="contacts-page">
    <h1>Контакты</h1>
    
    <?php if ($success): ?>
        <div class="alert alert-success">
            Спасибо! Ваше сообщение отправлено. Мы свяжемся с вами в ближайшее время.
        </div>
    <?php endif; ?>
    
    <form method="post" class="contact-form">
        <div class="form-group">
            <input type="text" name="name" placeholder="Имя*" value="<?= htmlspecialchars($name) ?>">
            <?php if (isset($errors['name'])): ?>
                <span class="error"><?= $errors['name'] ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <input type="email" name="email" placeholder="Email*" value="<?= htmlspecialchars($email) ?>">
            <?php if (isset($errors['email'])): ?>
                <span class="error"><?= $errors['email'] ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <textarea name="message" placeholder="Ваше сообщение*"><?= htmlspecialchars($message) ?></textarea>
            <?php if (isset($errors['message'])): ?>
                <span class="error"><?= $errors['message'] ?></span>
            <?php endif; ?>
        </div>
        
        <button type="submit" class="submit-btn">Отправить</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>
