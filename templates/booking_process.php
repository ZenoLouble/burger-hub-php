<main class="container" style="text-align: center; padding: 50px 20px;">
    <div style="background: #f9f9f9; border-radius: 15px; padding: 40px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); max-width: 500px; margin: 0 auto;">
        <h2 style="color: #27ae60;">Дякуємо, <?= htmlspecialchars($_POST['client_name'] ?? 'Гість') ?>! 🎉</h2>
        <p style="font-size: 18px; color: #333; margin: 20px 0;">
            Ваш столик ("<?= htmlspecialchars($_POST['table_type'] ?? 'звичайний') ?>") успішно заброньовано на 
            <strong><?= htmlspecialchars($_POST['booking_time'] ?? 'найближчий час') ?></strong>.
        </p>
        <p style="color: #666;">Ми зателефонуємо вам на номер <?= htmlspecialchars($_POST['client_phone'] ?? '...') ?> для підтвердження.</p>
        
        <a href="?page=home" style="display: inline-block; margin-top: 30px; background: #e67e22; color: white; padding: 10px 25px; text-decoration: none; border-radius: 5px;">На головну</a>
    </div>
</main>