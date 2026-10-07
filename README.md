# Mini-CRM - Web Developer Assessment (Laravel)

A mini-CRM admin panel built with Laravel to manage Companies and their Employees. Developed as part of the technical assessment for the Software Developer & IT Executive position at FNXperts Sdn. Bhd.

---

## Features

- **Authentication & Access Control**: 
  - Admin login with public registration disabled as per requirements.
  - Protected web routes for management modules.
- **Database Seeding**: 
  - Initial administrator account pre-seeded (`admin@admin.com` / `password`).
- **Companies Management (CRUD)**:
  - Fields: Name (required), Email, Logo, Website, Address.
  - Logo upload validation with a minimum dimension constraint of 100×100 pixels.
  - Logos stored in `storage/app/public/logos` and accessible via public URL.
- **Employees Management (CRUD)**:
  - Fields: First Name (required), Last Name (required), Company (foreign key relation), Email, Phone.
  - Eager-loaded company relationships.
- **Pagination**:
  - Exactly 10 entries per page implemented for both Companies and Employees lists.
- **API Endpoint**:
  - `GET /api/companies/{id}`: Returns details of a single company, its assigned employees, and an `employee_count` attribute.
  - Fully testable via Postman / REST client.

---

## Tech Stack

- **Framework**: Laravel 11 / 12
- **Language**: PHP 8.2+
- **Database**: MySQL
- **Frontend / Styling**: Blade, Tailwind CSS (Laravel Breeze)

---

## Installation & Setup Guide

### 1. Clone the repository
```bash
git clone <YOUR_REPOSITORY_URL>
cd fnxperts-assessment