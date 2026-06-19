# Kaemon Ng — Portfolio

Personal portfolio website built with Laravel 13 and deployed on Render.

**Live site:** https://kaemon-day-83-professional-portfolio.onrender.com

## Tech Stack

- **Backend:** Laravel 13, PHP 8.4
- **Admin panel:** Filament v4
- **Frontend:** Blade, Livewire v3, Tailwind CSS v4
- **Database:** Supabase (PostgreSQL)
- **Storage:** Supabase S3 (images)
- **Email:** Resend API
- **Deployment:** Render (Docker)

## Features

- Apple-inspired design with alternating light/dark sections
- Dynamic content managed via Filament admin panel
- Sections: Hero, About Me, Work Experience, Education, Hobbies
- Contact form with email delivery via Resend

## Local Development

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
```
