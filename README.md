# 🥊 Greko Boxing E-Shop

A dynamic e-commerce web application for boxing equipment, developed using PHP, MySQL, HTML, CSS, and JavaScript.

The project simulates an online boxing equipment store where users can browse products, create an account, sign in, and manage their shopping cart.

## 📌 Project Overview

Greko Boxing E-Shop is a web application developed as part of the Web Application Programming module of the BSc (Hons) Computing programme.

The application demonstrates the development of a dynamic website using a client-server architecture, with PHP handling server-side logic and MySQL managing application data.

## ✨ Features

- **Product Catalog:** Browse boxing equipment with product images, descriptions, and prices.
- **User Registration:** Create an account using a full name, email address, and password.
- **User Authentication:** Sign in using registered account credentials.
- **Password Hashing:** Store passwords as hashes rather than plain text.
- **Session Management:** Maintain user login state using PHP sessions.
- **Shopping Cart:** Add products to a shopping cart.
- **Cart Management:** Remove products from the shopping cart.
- **Dynamic Pricing:** Calculate and display the total cost of selected products.
- **Responsive Interface:** A user interface designed to adapt to different screen sizes.
- **Interactive Feedback:** Display messages to inform users about certain actions.

## 🛠️ Technologies Used

| Technology | Purpose |
|------------|---------|
| PHP | Server-side logic, authentication, and session management |
| MySQL | Database for storing user and product information |
| HTML5 | Page structure and forms |
| CSS3 | Styling, layouts, and responsive design |
| JavaScript | Interactive user feedback |
| MySQLi | Communication between PHP and MySQL |
| XAMPP | Local development environment |
| phpMyAdmin | Database management |

## 🏗️ Application Architecture

The application follows a client-server architecture.

- **Frontend:** HTML and CSS provide the interface, while JavaScript supports interactive functionality.
- **Backend:** PHP processes user requests, handles authentication, and manages shopping cart operations.
- **Database:** MySQL stores customer and product information.
- **Session Management:** PHP sessions maintain login state and temporarily store shopping cart contents.

## 🗄️ Database

The application uses a MySQL database named `grekomarket`.

The database contains two main tables:

- `customers` — Stores customer account information.
- `products` — Stores product information displayed in the shop.

PHP communicates with the database through MySQLi and SQL queries.

## 🧪 Testing

The application was tested using the following scenarios:

| Test | Expected Result |
|------|-----------------|
| Register with an existing email address | Registration is rejected and an error message is displayed |
| Sign in with an incorrect password | Authentication fails and access is denied |

These tests check basic validation during registration and authentication.

## 🚀 Getting Started

### Prerequisites

Install the following:

- [XAMPP](https://www.apachefriends.org/)
- A web browser

### Installation

1. Clone or download this repository.
2. Place the project folder inside the `htdocs` directory of your XAMPP installation.
3. Start Apache and MySQL from the XAMPP Control Panel.
4. Open phpMyAdmin in your browser.
5. Create a MySQL database named `grekomarket`.
6. Import the project's database SQL file if one is included in the repository.
7. Configure the database connection in `db.php` to match your local MySQL settings.
8. Open the application in your browser using:

   `http://localhost/greko-boxing-e-shop/`

> **Note:** The database import and configuration steps depend on the files included in the repository. If a database export is not provided, the required tables and product data must be created before the application can run.

## 🔮 Future Improvements

Potential enhancements include:

- Online payment integration.
- Order management and order history.
- Product search functionality.
- Product categories and filtering.
- An administrator dashboard for managing products.
- Additional validation and security improvements.

## 🎓 Project Context

Developed as an academic project for the Web Application Programming module of the BSc (Hons) Computing programme.

The project provided practical experience in dynamic web development, database integration, authentication, session management, and e-commerce functionality.
