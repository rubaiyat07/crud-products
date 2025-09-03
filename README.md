# 🛍️ CRUD-Products (Laravel + Blade)

[![Laravel](https://img.shields.io/badge/Laravel-9.x-red?style=for-the-badge&logo=laravel)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-8.x-blue?style=for-the-badge&logo=php)](https://www.php.net/)
[![License: MIT](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)](LICENSE)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-purple?style=for-the-badge&logo=bootstrap)](https://getbootstrap.com/)

A simple **Product CRUD** application built with **Laravel** and **Blade**.  
It supports full **Create ➝ Read ➝ Update ➝ Delete** functionality for products, including handling of product images and brand details.

---

## ✨ Features

- 📝 **Products** entity with:
  - 📛 Name, 💰 Price, 🔢 Quantity, 🏷️ Brand (optional)
  - 🖼️ Product image upload (JPEG, PNG, GIF)
- 📂 Image storage via `storage/app/public`, accessible through `public/storage`
- 🎨 Styled with **Bootstrap** (tables, forms, flash messages, thumbnails)
- 📄 Pagination for product listings
- ♻️ Reusable form partial (`_form.blade.php`) for clean and DRY views

---

## ⚙️ Requirements

- 🐘 PHP ≥ 8.x  
- 🎼 Composer  
- 🌐 Laravel (9.x or 10.x recommended)  
- 🖥️ XAMPP/WAMP or equivalent local server (with MySQL)  
- 🔧 Node.js & npm (for optional frontend asset compilation)

---

## 🚀 Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/rubaiyat07/crud-products.git
   cd crud-products
    ````

2. **Install dependencies**

   ```bash
   composer install
   ```

3. **Environment configuration**

   ```bash
   copy .env.example .env
   php artisan key:generate
   ```

   Then edit the `.env` file to set your database credentials:

   ```
   DB_DATABASE=your_db_name
   DB_USERNAME=your_user
   DB_PASSWORD=your_password
   ```

4. **Run migrations**

   ```bash
   php artisan migrate
   ```

5. **Link storage**

   ```bash
   php artisan storage:link
   ```

   Ensures uploaded product images are accessible via `storage/`.

6. **Serve the application**

   ```bash
   php artisan serve
   ```

   Visit 👉 **[http://127.0.0.1:8000/products](http://127.0.0.1:8000/products)** to view the app.

---

## 📂 Project Structure

```
app/Http/Controllers/ProductController.php   # CRUD logic + image upload handling
app/Models/Product.php                       # Eloquent model with fillable fields
database/migrations/…_create_products_table.php   # Migration including brand & product_image columns

resources/views/layouts/app.blade.php         # Main layout with Bootstrap styling
resources/views/products
├── _form.blade.php       # Shared form partial
├── index.blade.php       # Listing with pagination and image thumbnails
├── create.blade.php      # Product creation view
├── edit.blade.php        # Product editing view
└── show.blade.php        # Product detail view
```


---

## 🤝 Contributing

Contributions are welcome! 🚀 Some ideas:

* 🔍 Add search and filter features (e.g., search by name or brand)
* ✅ Add client-side validation with JS
* 🔐 Implement user authentication to restrict access
* 🧪 Add tests for controllers and views

---

## 📜 License

This project is open-source and available under the **MIT License**.

---

🙌 Thanks for checking out **CRUD-Products**!

```
