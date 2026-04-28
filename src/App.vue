<template>
  <header>
    <div class="container header-inner">
      <h1>🍔 Burger Hub</h1>
      <nav>
        <RouterLink to="/">Головна</RouterLink>
        <RouterLink to="/menu">Меню</RouterLink>
        <RouterLink to="/contact">Контакти</RouterLink>
      </nav>
    </div>
  </header>

  <main>
    <RouterView />
  </main>

  <footer>
    <div class="container">
      <p>&copy; 2026 Burger Hub.</p>
    </div>
  </footer>
</template>

<style>

</style>
