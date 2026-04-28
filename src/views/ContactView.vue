<template>
  <div class="container">
    <h2>Зв'яжіться з нами!</h2>
    
    <div class="contact-wrapper">
      <div class="contact-info">
        <h3>Наші координати</h3>
        <p><strong>📍 Адреса:</strong> вул. Політехнічна, 12</p>
        <p><strong>📞 Телефон:</strong> +38 (099) 111-22-33</p>
        <p><strong>🕒 Години роботи:</strong> 10:00 - 22:00 (без вихідних)</p>
      </div>

      <div class="contact-form-container">
        <h3>Забронювати столик</h3>
        <form @submit.prevent="submitForm" class="contact-form">
          <label for="name">Ваше ім'я:</label>
          <input v-model="formData.name" type="text" id="name" placeholder="Наприклад, Олександр" required>

          <label for="phone">Номер телефону:</label>
          <input v-model="formData.phone" type="tel" id="phone" placeholder="+38 (000) 000-00-00" required>

          <label for="table">Номер столика:</label>
          <input v-model="formData.table" type="number" id="table" placeholder="1-20" min="1" max="20" required>

          <label for="message">Коментар (необов'язково):</label>
          <textarea v-model="formData.message" id="message" rows="4" placeholder="Наприклад, столик біля вікна"></textarea>

          <button type="submit" class="btn">Відправити заявку</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const formData = ref({
  name: '',
  phone: '',
  table: 1,
  message: ''
})

const submitForm = () => {
  console.log('Дані форми:', formData.value)
  alert(`Дякуємо, ${formData.value.name}! Заявку на столик №${formData.value.table} отримано.`)
  
  formData.value = { name: '', phone: '', table: 1, message: '' }
}
</script>