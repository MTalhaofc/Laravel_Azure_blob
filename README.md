

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# 🚀 Laravel + Azure Blob Storage Integration

This repository demonstrates how to connect a **Laravel web application** with **Azure Blob Storage**, allowing file upload, creation, and deletion directly in your Azure container.  

---

## ✨ Features

- 📁 Upload files (CSV, PDF, etc.) to Azure Blob Storage via web interface  
- 📝 Programmatically create test files in Azure container  
- ❌ Delete files from Azure Blob Storage  
- ⚙️ Configurable `.env` settings for Azure credentials  
- ✅ Works with **Laravel 11/12** and **Flysystem v3**  

---

## 🛠 Requirements

- PHP 8.x  
- Laravel 11 or 12  
- Composer  
- Microsoft Azure account with Blob Storage  

---

## ⚡ Installation

1. Clone this repository:

```bash
git clone https://github.com/your-username/azure-laravel-chatbot.git
cd azure-laravel-chatbot
````

2. Install dependencies:

```bash
composer install
```

3. Copy `.env.example` to `.env` and configure your Azure credentials:

```env
AZURE_STORAGE_NAME=your_account_name
AZURE_STORAGE_KEY=your_account_key
AZURE_STORAGE_CONTAINER=your_container_name
AZURE_STORAGE_URL=https://your_account_name.blob.core.windows.net
```

4. Clear config cache:

```bash
php artisan config:clear
php artisan cache:clear
```

---

## 🎮 Usage

* Start the Laravel server:

```bash
php artisan serve
```

* Access the web interface at `http://localhost:8000/azure`

* **Upload a file:**
  Use the form to upload files to your Azure Blob Storage.

* **Create test file:**
  Click the "Create Test File" button to directly add `test.txt` in the container.

* **Delete a file:**
  Use the "Delete" button to remove a file from Azure Blob Storage.

---

## 📂 File Structure

* `app/Http/Controllers/AzureBlobController.php` – Handles file upload, creation, and deletion
* `app/Providers/AppServiceProvider.php` – Registers Azure Blob Storage driver
* `resources/views/azure.blade.php` – Simple UI for file management
* `routes/web.php` – Routes for upload, create, and delete operations

---

## 📦 Dependencies

* `league/flysystem-azure-blob-storage` – Flysystem adapter for Azure Blob Storage
* `microsoft/azure-storage-blob` – Official Azure Blob SDK

---

## 📝 Notes

* This setup uses **Flysystem v3**, so methods like `put()` work after registering the **FilesystemAdapter** correctly.
* Make sure your Azure container has **anonymous blob access enabled** for testing.

---

## 🔗 Learn More

* **Read the full blog post:** [Medium Blog](https://mtalhaofc.medium.com/connect-your-web-app-laravel-with-azure-blog-storage-3d1c919d8aa7)
* **Get the source code:** [GitHub Repository](https://github.com/MTalhaofc/Laravel_Azure_blob)

---

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11/12-red?style=flat-square&logo=laravel&logoColor=white" alt="Laravel Badge">
  <img src="https://img.shields.io/badge/Azure-Blob-blue?style=flat-square&logo=microsoft-azure&logoColor=white" alt="Azure Badge">
  <img src="https://img.shields.io/badge/Flysystem-v3-green?style=flat-square" alt="Flysystem Badge">
</p>
```

---


