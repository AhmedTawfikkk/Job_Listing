# Job_Listing

**30 Days to Learn Laravel - Final Project**

Job_Listing is a job platform project developed as part of the [30 Days to Learn Laravel 11](https://laracasts.com/series/30-days-to-learn-laravel-11) course on Laracasts.

---
## Table of Contents

- [Features](#features)
- [Installation](#installation)

---

## Features
- **User Authentication:**
    - Secure registration and login for users (job seekers and employers).
- **Job Listings:**
    - Employers can post job listings with details such as title, Schedule, location, and salary.
    - Job seekers can browse job listings.
- **Tag Management:**
    - Ability to add tags to job listings for better categorization and searchability.
    - Job seekers can filter jobs by tags to find relevant opportunities.
- **Search Functionality:**
    - Powerful search functionality allowing users to find jobs based on keywords, tags, and other criteria.
- **Responsive Design:**
    - friendly design to ensure usability across devices (desktops, tablets, and smartphones).
---


## Installation

Follow these steps to set up and run the CareerBloom on your local machine.

### 1. Clone the repository:

```bash
git clone https://github.com/AhmedTawfikkk/Job_Listing
cd Job_Listing
``` 

### 2. Install backend dependencies:

```bash
composer install
```

### 3. Set up the environment file:

```bash
cp .env.example .env
```
### 4. Generate the application key:

```bash
php artisan key:generate
```
### 5. Set up the database:
Create a new MySQL database (or any other supported database) and configure the connection in your **.env** file:

```env
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password```
```
### 6. Run the database migrations:

```bash
php artisan migrate
```
### 7. (Optional) Seed the database with sample data:

```bash
php artisan db:seed
```

### 8. Run the application:

```bash
php artisan serve
```
