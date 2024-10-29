# Student Attendance Web Application

## Description

This is a web-based application developed to help educational institutions manage student attendance. Using Laravel and Blade, the application enables teachers to easily record, monitor, and generate attendance reports for their classes. Built during the third year of my bachelor's degree, it aims to provide a simple yet powerful tool to streamline attendance management.

## Features

### As the application is still in production, the following features are in development or planned for future releases:

-   **Authentication System**: Secure login for teachers to access the system.
-   **Attendance Dashboard**: Overview of student attendance records.
-   **Attendance Management**: Mark and update student attendance with ease.
-   **Report Generation**: Generate attendance reports based on class and date range.
-   **Notifications**: Notify students of their attendance status and summary.

## Technology Stack

-   **Back-End**: Laravel framework (PHP)
-   **Front-End**: Blade templates, HTML, CSS, JavaScript
-   **Database**: MySQL (or any other database supported by Laravel)
-   **Server**: Laravel's built-in development server

## Getting Started

### Prerequisites

-   PHP >= 8.0
-   Composer
-   MySQL (or other compatible database)
-   Node.js and npm (for managing front-end assets)

### Installation

1. **Clone the Repository**

    ```bash
    git clone https://github.com/youssefrajoul/student-attendance.git
    cd student-attendance
    ```

2. **Install Dependencies**

    - Use Composer to install PHP dependencies:

    ```bash
    composer install
    ```

    - Use npm to install front-end dependencies:

    ```bash
    npm install && npm run dev
    ```

3. **Set Up Environment Variables**

    - Copy .env.example to .env:

    ```bash
    cp .env.example .env
    ```

    - Configure the .env file with your database settings and other environment-specific variables.

4. **Generate Application Key**

    ```bash
    php artisan key:generate
    ```

5. **Run Migrations**

    ```bash
    php artisan migrate
    ```

6. **Run the Application**

    ```bash
    php artisan serve
    ```

## Usage

    - Still in production

## Contributing

If you'd like to contribute to this project, feel free to fork the repository and submit a pull request. Any improvements or suggestions are welcome.

## Authors and acknowledgment

-   Youssef Rajoul | Yassine Kallouch
    -   Developed at [**HE2B-ESI**](https://he2b.be/) during the third year of my bachelor's degree.
    -   Special thanks to **Jonathan Lechien** for guidance and support throughout the project.
    -   **Email:** youssefrajoul27@gmail.com

## Contact

For any inquiries, feel free to reach out to me at the above email.
