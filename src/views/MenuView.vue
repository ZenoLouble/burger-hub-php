<template>
  <div class="container">
    <h2>Наше Меню</h2>

    <div v-if="cartStore.totalCount > 0" class="cart-summary">
  <p>🛒 У кошику: <strong>{{ cartStore.totalCount }}</strong> товарів</p>
  <p>Сума: <strong>{{ cartStore.totalPrice }} грн</strong></p>
  <button class="btn" @click="$router.push('/cart')">Оформити замовлення</button>
</div>

<hr v-if="cartStore.totalCount > 0">
    <div class="menu-grid">
      <div v-for="item in products" :key="item.id" class="menu-item">
        <h3>{{ item.icon }} {{ item.name }}</h3>
        <p>{{ item.description }}</p>
        <span class="price">{{ item.price }} грн</span>
        <button class="btn" @click="addToCart(item)">В кошик</button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { useCartStore } from '../stores/cart'

const cartStore = useCartStore()

const products = ref([
  { id: 1, name: 'Класичний Бургер', price: 180, icon: '🍔', description: 'Соковита яловича котлета, сир чеддер, свіжий помідор та фірмовий соус.' },
  { id: 2, name: 'Бекон-Бургер', price: 240, icon: '🥓', description: 'Подвійна котлета, хрусткий бекон, карамелізована цибуля та соус барбекю.' },
  { id: 3, name: 'Сирний Бургер', price: 220, icon: '🧀', description: 'Котлета з трьома видами сиру, карамелізована цибуля та медовий соус.' },
  { id: 4, name: 'Гострий Бургер', price: 210, icon: '🌶️', description: 'Пікантна котлета, гострі перці халапеньо та гострий соус.' },
  { id: 5, name: 'Курячий Бургер', price: 190, icon: '🍗', description: 'Ніжна куряча грудка, лист салату, помідор та креметний соус.' },
  { id: 6, name: 'Веган-Бургер', price: 200, icon: '🌱', description: 'Рослинна котлета, авокадо, свіжі овочі та легкий соус.' },
  { id: 7, name: 'Картопля Фрі', price: 80, icon: '🍟', description: 'Золотиста, хрустка картопелька з морською сіллю.' },
  { id: 8, name: 'Цибулеві кільця', price: 95, icon: '🧅', description: 'Обсмажені в паніровці кільця солодкої цибулі.' },
  { id: 9, name: 'Кола', price: 50, icon: '🥤', description: 'Класичний освіжаючий напій 0.5л.' },
  { id: 10, name: 'Лимонад', price: 65, icon: '🍋', description: 'Домашній лимонад із лимоном та м’ятою.' }
])

const addToCart = (product) => {
  cartStore.addToCart(product)
}
</script>
