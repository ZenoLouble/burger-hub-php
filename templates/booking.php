<main class="container" style="max-width: 600px; margin: 40px auto; padding: 20px;">
    <section class="booking-section">
        <h2 style="text-align: center; color: #d35400;">Бронювання столика 🍽️</h2>
        <p style="text-align: center; color: #666; margin-bottom: 30px;">
            Заповніть форму нижче, і ми підготуємо найкраще місце для вас!
        </p>

        <form action="?page=booking_process" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            <!-- Поле: Ім'я -->
            <div>
                <label for="client_name" style="font-weight: bold; display: block; margin-bottom: 5px;">Ваше ім'я:</label>
                <input type="text" id="client_name" name="client_name" placeholder="Введіть ваше ім'я" required 
                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>

            <!-- Поле: Телефон -->
            <div>
                <label for="client_phone" style="font-weight: bold; display: block; margin-bottom: 5px;">Номер телефону:</label>
                <input type="tel" id="client_phone" name="client_phone" placeholder="+38 (000) 000-00-00" required 
                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>

            <!-- Поле: Дата та час -->
            <div>
                <label for="booking_time" style="font-weight: bold; display: block; margin-bottom: 5px;">Дата і час:</label>
                <input type="datetime-local" id="booking_time" name="booking_time" required 
                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>

            <!-- Поле: Тип столика -->
            <div>
                <label for="table_type" style="font-weight: bold; display: block; margin-bottom: 5px;">Виберіть столик:</label>
                <select id="table_type" name="table_type" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                    <option value="couple">Стіл на двох</option>
                    <option value="family">Сімейний (4-6 осіб)</option>
                    <option value="party">Банкет (10+ осіб)</option>
                </select>
            </div>

            <!-- Кнопка відправки -->
            <button type="submit" style="background-color: #e67e22; color: white; border: none; padding: 12px; font-size: 16px; border-radius: 5px; cursor: pointer; margin-top: 10px; transition: background 0.3s;">
                Забронювати
            </button>
        </form>
    </section>
</main>