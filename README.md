# My Portfolio Website

A personal portfolio website built to showcase my skills, projects, and professional journey as an aspiring Software Engineer and Full Stack Developer. This application is powered by **Laravel 12**.

## 👤 Author

**Brendon Panlaqui** Aspiring Mobile App Developer, Web Developer, Software Engineer, & AI Engineer.

---

## 🚀 About The Project

This project serves as a central hub for my professional identity. It is a dynamic web application designed to be responsive, user-friendly, and performant. It moves beyond static HTML by utilizing the Laravel framework to manage views, routes, and potential backend logic for contact forms and project management.

### Key Features

* **Hero Section:** Dynamic introduction with typing animation effects.
* **About & Skills:** Detailed breakdown of technical competencies (HTML, CSS, JS, etc.).
* **Resume & Journey:** A timeline view of my education and experience.
* **Project Showcase:** A dedicated section to display my portfolio of work.
* **Contact Integration:** Layout ready for user communication.
* **Responsive Design:** Fully optimized for mobile, tablet, and desktop devices.

---

## 🛠️ Tech Stack

This project uses a robust mix of modern web technologies:

**Backend:**
* **PHP 8.2+**
* **Laravel 12.x** (Latest framework version)

**Frontend:**
* **Blade Templating:** Laravel's powerful native templating engine.
* **Bootstrap:** Utilized for grid systems and pre-built components.
* **JavaScript (ES6+):** For interactive elements (typed.js, lightboxes, etc.).

---

## ⚙️ Installation & Setup Guide

Follow these steps to run the project locally on your machine.

### Prerequisites
Ensure you have the following installed:
* [PHP](https://www.php.net/) (v8.2 or higher)
* [Composer](https://getcomposer.org/)

### Step-by-Step Installation

1.  **Clone the Repository**
    ```bash
    git clone [https://github.com/brendonpanlaqui/my-portfolio-website.git](https://github.com/brendonpanlaqui/my-portfolio-website.git)
    cd my-portfolio-website
    ```

2.  **Install PHP Dependencies**
    ```bash
    composer install
    ```

3.  **Environment Setup**
    Copy the example environment file to create your local configuration:
    ```bash
    cp .env.example .env
    ```

5.  **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

6.  **Database Setup**
    ```bash
    php artisan migrate
    ```

7.  **Run the Application**
    Start the local development server:
    ```bash
    php artisan serve
    ```

    You can now access the portfolio at: `http://localhost:8000`
