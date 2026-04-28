<template>
  <div class="container">
    <h2>Твій Кошик</h2>

    <div v-if="cartStore.items.length === 0" class="empty-cart">
      <p>Твій кошик порожній. Час додати соковитий бургер!</p>
      <RouterLink to="/menu" class="btn">Повернутися до меню</RouterLink>
    </div>

    <div v-else>
      <table class="cart-table">
        <thead>
          <tr>
            <th>Товар</th>
            <th>Ціна</th>
            <th>Кількість</th>
            <th>Сума</th>
            <th>Дія</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in cartStore.items" :key="item.id">
            <td>{{ item.icon }} {{ item.name }}</td>
            <td>{{ item.price }} грн</td>
            <td>
              <div class="quantity-controls">
                <button class="qty-btn" @click="cartStore.updateQuantity(item.id, -1)">-</button>
                <span class="qty-val">{{ item.quantity }}</span>
                <button class="qty-btn" @click="cartStore.updateQuantity(item.id, 1)">+</button>
              </div>
            </td>
            <td>{{ item.price * item.quantity }} грн</td>
            <td>
              <button class="delete-btn" @click="cartStore.removeFromCart(item.id)">Видалити</button>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="cart-total">
        <h3>Разом до сплати: <span>{{ cartStore.totalPrice }} грн</span></h3>
        <button class="btn btn-order" @click="checkout">Підтвердити замовлення</button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { useCartStore } from '../stores/cart'

const cartStore = useCartStore()

const checkout = () => {
  alert('Дякуємо за замовлення! Ми вже почали готувати твої бургери.')
}
</script>