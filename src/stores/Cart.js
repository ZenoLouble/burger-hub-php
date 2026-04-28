import { defineStore } from 'pinia'

export const useCartStore = defineStore('cart', {
  state: () => ({
    items: JSON.parse(localStorage.getItem('cart')) || []
  }),
  
  getters: {
    totalPrice: (state) => {
      return state.items.reduce((sum, item) => sum + (item.price * item.quantity), 0)
    },
    totalCount: (state) => {
      return state.items.reduce((sum, item) => sum + item.quantity, 0)
    }
  },
  
  actions: {
    addToCart(product) {
      const existingItem = this.items.find(i => i.id === product.id)
      if (existingItem) {
        existingItem.quantity++
      } else {
        this.items.push({ ...product, quantity: 1 })
      }
      this.saveToLocalStorage()
    },
    
    removeFromCart(id) {
      this.items = this.items.filter(i => i.id !== id)
      this.saveToLocalStorage()
    },
    
    updateQuantity(id, amount) {
      const item = this.items.find(i => i.id === id)
      if (item) {
        item.quantity += amount
        if (item.quantity <= 0) this.removeFromCart(id)
      }
      this.saveToLocalStorage()
    },
    
    saveToLocalStorage() {
      localStorage.setItem('cart', JSON.stringify(this.items))
    }
  }
})