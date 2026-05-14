
<div id="cart-button" onclick="toggleCart()" style="position: fixed; bottom: 20px; right: 20px; background: #e67e22; color: white; padding: 15px 20px; border-radius: 50px; cursor: pointer; z-index: 1000; box-shadow: 0 4px 15px rgba(0,0,0,0.3); font-weight: bold;">
    🛒 Кошик (<span id="cart-count">0</span>)
</div>

<div id="cart-sidebar" style="position: fixed; top: 0; right: -400px; width: 350px; height: 100%; background: white; box-shadow: -5px 0 15px rgba(0,0,0,0.1); z-index: 1001; transition: 0.3s; padding: 20px; display: flex; flex-direction: column;">
    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #eee; padding-bottom: 10px;">
        <h3>Ваше замовлення</h3>
        <span onclick="toggleCart()" style="cursor: pointer; font-size: 24px;">&times;</span>
    </div>
    
    <div id="cart-items" style="flex-grow: 1; overflow-y: auto; margin: 20px 0;">
        <p style="color: #999; text-align: center;">Кошик порожній</p>
    </div>

    <div style="border-top: 2px solid #eee; padding-top: 10px;">
        <div style="display: flex; justify-content: space-between; font-size: 18px; font-weight: bold; margin-bottom: 15px;">
            <span>Разом:</span>
            <span id="cart-total">0 ₴</span>
        </div>
        <button onclick="alert('Замовлення прийнято!')" style="width: 100%; background: #27ae60; color: white; border: none; padding: 15px; border-radius: 5px; cursor: pointer; font-weight: bold;">
            Оформити замовлення
        </button>
    </div>
</div>
<main class="container">
    <h2 style="text-align: center; margin-top: 20px;">Наше соковите меню 🍔</h2>
    
    <div id="menu-container" style="padding: 20px;">
        <p style="text-align: center;">Завантаження смаколиків...</p>
    </div>
</main>

<script>
    let cart = JSON.parse(localStorage.getItem('burgerCart')) || [];

    function toggleCart() {
        const sidebar = document.getElementById('cart-sidebar');
        sidebar.style.right = sidebar.style.right === '0px' ? '-400px' : '0px';
        renderCart();
    }

    function addToCart(name, price) {
        cart.push({ name, price });
        localStorage.setItem('burgerCart', JSON.stringify(cart));
        updateCartCount();
        renderCart();
        
        // Маленька анімація кнопки
        const btn = document.getElementById('cart-button');
        btn.style.transform = 'scale(1.1)';
        setTimeout(() => btn.style.transform = 'scale(1)', 200);
    }

    function removeFromCart(index) {
        cart.splice(index, 1);
        localStorage.setItem('burgerCart', JSON.stringify(cart));
        renderCart();
        updateCartCount();
    }

    function updateCartCount() {
        document.getElementById('cart-count').innerText = cart.length;
    }

    function renderCart() {
        const container = document.getElementById('cart-items');
        const totalElement = document.getElementById('cart-total');
        
        if (cart.length === 0) {
            container.innerHTML = '<p style="color: #999; text-align: center;">Кошик порожній</p>';
            totalElement.innerText = '0 ₴';
            return;
        }

        let total = 0;
        container.innerHTML = cart.map((item, index) => {
            total += item.price;
            return `
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; background: #f9f9f9; padding: 10px; border-radius: 5px;">
                    <div>
                        <div style="font-weight: bold;">${item.name}</div>
                        <div style="color: #e67e22;">${item.price} ₴</div>
                    </div>
                    <button onclick="removeFromCart(${index})" style="background: none; border: none; color: #ff4757; cursor: pointer; font-size: 18px;">🗑️</button>
                </div>
            `;
        }).join('');
        
        totalElement.innerText = `${total} ₴`;
    }

    fetch('api/products.php')
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('menu-container');
            container.innerHTML = '';

            function renderCategory(title, items) {
                let html = `<h3 style="margin-top: 40px; border-bottom: 2px solid #e67e22; padding-bottom: 10px;">${title}</h3>`;
                html += `<div style="display: flex; gap: 20px; flex-wrap: wrap; margin-top: 20px;">`;
                
                items.forEach(item => {
                    html += `
                        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 10px; width: 220px; background: #fff; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                            <div style="font-size: 40px; text-align: center;">${item.icon}</div>
                            <h4 style="color: #d35400; text-align: center; margin: 10px 0;">${item.name}</h4>
                            <p style="font-size: 13px; color: #666; text-align: center; min-height: 40px;">${item.description}</p>
                            <p style="text-align: center; font-weight: bold; font-size: 18px;">${item.price} ₴</p>
                            <button onclick="addToCart('${item.name}', ${item.price})" style="background: #e67e22; color: white; border: none; padding: 10px; border-radius: 5px; cursor: pointer; width: 100%;">
                                Додати
                            </button>
                        </div>
                    `;
                });
                html += `</div>`;
                return html;
            }

            container.innerHTML += renderCategory('🍔 Бургери', data.burgers);
            container.innerHTML += renderCategory('🍟 Картопля', data.fries);
            container.innerHTML += renderCategory('🥤 Напої', data.drinks);
            container.innerHTML += renderCategory('🥗 Салати', data.salads);
            container.innerHTML += renderCategory('🍰 Десерти', data.desserts);
            container.innerHTML += renderCategory('🍅 Соуси', data.sauces);
            
            updateCartCount();
        });
</script>