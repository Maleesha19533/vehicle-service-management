# 🚗 Vehicle Service Management System API

A RESTful API built using Laravel for managing customers, vehicles, mechanics, services, bookings, and service requests.

---

## 📌 Technologies Used

- Laravel 12
- PHP 8.x
- MySQL
- Composer
- Postman

---

## 📂 Features

- Customer Management
- Vehicle Management
- Mechanic Management
- Service Management
- Booking Management
- Service Request Management
- REST API CRUD Operations
- JSON Responses
- Request Validation
- Eloquent Relationships

---

## 📦 Installation

Clone the repository

```bash
git clone https://github.com/your-username/vehicle-service-management.git
```

Go to the project

```bash
cd vehicle-service-management
```

Install dependencies

```bash
composer install
```

Copy environment file

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Configure your MySQL database in the `.env` file.

Run migrations

```bash
php artisan migrate
```

Start the server

```bash
php artisan serve
```

---

## 🌐 Base URL

```
http://127.0.0.1:8000/api
```

---

## 📋 API Endpoints

### Customers

| Method | Endpoint |
|---------|----------|
| GET | /api/customers |
| POST | /api/customers |
| GET | /api/customers/{id} |
| PUT | /api/customers/{id} |
| DELETE | /api/customers/{id} |

---

### Vehicles

| Method | Endpoint |
|---------|----------|
| GET | /api/vehicles |
| POST | /api/vehicles |
| GET | /api/vehicles/{id} |
| PUT | /api/vehicles/{id} |
| DELETE | /api/vehicles/{id} |

---

### Services

| Method | Endpoint |
|---------|----------|
| GET | /api/services |
| POST | /api/services |
| GET | /api/services/{id} |
| PUT | /api/services/{id} |
| DELETE | /api/services/{id} |

---

### Mechanics

| Method | Endpoint |
|---------|----------|
| GET | /api/mechanics |
| POST | /api/mechanics |
| GET | /api/mechanics/{id} |
| PUT | /api/mechanics/{id} |
| DELETE | /api/mechanics/{id} |

---

### Bookings

| Method | Endpoint |
|---------|----------|
| GET | /api/bookings |
| POST | /api/bookings |
| GET | /api/bookings/{id} |
| PUT | /api/bookings/{id} |
| DELETE | /api/bookings/{id} |

---

### Service Requests

| Method | Endpoint |
|---------|----------|
| GET | /api/service-requests |
| POST | /api/service-requests |
| GET | /api/service-requests/{id} |
| PUT | /api/service-requests/{id} |
| DELETE | /api/service-requests/{id} |

---

## ✅ HTTP Status Codes

| Code | Description |
|------|-------------|
| 200 | Success |
| 201 | Created |
| 404 | Not Found |
| 422 | Validation Error |
| 500 | Internal Server Error |

---

## 🧪 API Testing

All endpoints were tested using **Postman**.

---

## 👨‍💻 Author

**Pabasara**

SLIIT – Vehicle Service Management System