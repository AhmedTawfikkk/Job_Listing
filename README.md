

Job Listing Project

Overview

The Job Listing Project is a robust web application that facilitates job seekers and employers to interact seamlessly. Built using Laravel 11, it showcases modern web development practices and emphasizes simplicity, functionality, and user experience.

Features

User Authentication: Secure registration and login for job seekers and employers.

Job Listings: Employers can create, update, and manage job postings.

Job Search: Job seekers can browse and filter job listings efficiently.

Profile Management: Users can manage their profiles with ease.

Responsive Design: Ensures a seamless experience across devices.

Technologies Used

Backend: Laravel 11

Frontend: Blade templates with Tailwind CSS for styling

Database: MySQL

Authentication: Custom-built without using external packages

APIs: Restful API support for scalability and integrations

Installation

Follow these steps to set up the project locally:

Clone the Repository

git clone https://github.com/AhmedTawfikkk/Job_Listing.git
cd Job_Listing

Install Dependencies

composer install
npm install

Setup Environment

Copy .env.example to .env:

cp .env.example .env

Configure your database and other environment variables in the .env file.

Generate Application Key

php artisan key:generate

Run Migrations

php artisan migrate

Start the Server

php artisan serve

Visit http://127.0.0.1:8000 in your browser.

Usage

Employers can log in to create job postings.

Job seekers can browse jobs without an account or log in for personalized features.

