# Laravel Sample Application

This is a basic Laravel application for demonstration purposes in our CI/CD pipeline.

## Requirements

- PHP >= 8.1
- Composer
- MySQL/MariaDB

## Installation

1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and configure your environment
4. Run `php artisan key:generate`
5. Run `php artisan migrate` (if using database)
6. Run `php artisan serve` to start the development server

## CI/CD Pipeline

This application is configured with a CI/CD pipeline that:
1. Builds the Docker image
2. Pushes to Artifact Registry
3. Builds Kubernetes manifests with Kustomize
4. Pushes built templates to the deployment repository
