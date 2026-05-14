<?php
namespace App;

class ProductRepository {
    
    public function getBurgers() {
        return [
            ['id' => 1, 'name' => 'Класичний', 'price' => 180, 'description' => 'Опис...', 'icon' => '🍔'],
            ['id' => 2, 'name' => 'BBQ Бекон', 'price' => 245, 'description' => 'Опис...', 'icon' => '🥓'],
            ['id' => 3, 'name' => 'Гострий', 'price' => 210, 'description' => 'Опис...', 'icon' => '🌶️'],
            ['id' => 4, 'name' => 'Веган-Бургер', 'price' => 195, 'description' => 'Опис...', 'icon' => '🥬'],
            ['id' => 5, 'name' => 'Подвійний сир', 'price' => 230, 'description' => 'Опис...', 'icon' => '🧀'],
        ];
    }

    public function getFries() {
        return [
            ['id' => 6, 'name' => 'Картопля звичайна', 'price' => 60, 'description' => 'Опис...', 'icon' => '🍟'],
            ['id' => 7, 'name' => 'Картопля з сиром', 'price' => 95, 'description' => 'Опис...', 'icon' => '🧀'],
            ['id' => 8, 'name' => 'Картопля з беконом', 'price' => 110, 'description' => 'Опис...', 'icon' => '🥓'],
            ['id' => 9, 'name' => 'Гостра картопля', 'price' => 75, 'description' => 'Опис...', 'icon' => '🌶️'],
        ];
    }

    public function getDrinks() {
        return [
            ['id' => 10, 'name' => 'Кола', 'price' => 35, 'description' => 'Опис...', 'icon' => '🥤'],
            ['id' => 11, 'name' => 'Лимонад', 'price' => 40, 'description' => 'Опис...', 'icon' => '🍋'],
            ['id' => 12, 'name' => 'Апельсиновий сік', 'price' => 50, 'description' => 'Опис...', 'icon' => '🍊'],
            ['id' => 13, 'name' => 'Молочний коктейль', 'price' => 75, 'description' => 'Опис...', 'icon' => '🥛'],
        ];
    }

    public function getSalads() {
        return [
            ['id' => 14, 'name' => 'Цезар із курицею', 'price' => 140, 'description' => 'Опис...', 'icon' => '🥗'],
            ['id' => 15, 'name' => 'Грецький салат', 'price' => 125, 'description' => 'Опис...', 'icon' => '🥬'],
            ['id' => 16, 'name' => 'Овочевий салат', 'price' => 95, 'description' => 'Опис...', 'icon' => '🥒'],
        ];
    }

    public function getDesserts() {
        return [
            ['id' => 17, 'name' => 'Шоколадний брауні', 'price' => 85, 'description' => 'Опис...', 'icon' => '🍫'],
            ['id' => 18, 'name' => 'Морозиво', 'price' => 60, 'description' => 'Опис...', 'icon' => '🍦'],
            ['id' => 19, 'name' => 'Яблучний пиріг', 'price' => 70, 'description' => 'Опис...', 'icon' => '🥧'],
        ];
    }

    public function getSauces() {
        return [
            ['id' => 20, 'name' => 'Кетчуп', 'price' => 10, 'description' => 'Опис...', 'icon' => '🍅'],
            ['id' => 21, 'name' => 'Майонез', 'price' => 15, 'description' => 'Опис...', 'icon' => '🥒'],
            ['id' => 22, 'name' => 'Барбекю', 'price' => 20, 'description' => 'Опис...', 'icon' => '🔥'],
        ];
    }
} 