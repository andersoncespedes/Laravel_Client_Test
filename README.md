## Requirements

- PHP >= 8.2
- Composer
- MySQL
- Redis (for queue driver)

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/example/sample-app.git
   ```
2. Update packages
   ```bash
    composer install
   ```
3. Migrate the database
    ```bash
    php artisan migrate
    ```
4. excecute the seeder

    ```bash
    php artisan db:seed
    ```
## Exceute the Project
- Initialize server
    ```bash
    php artisan db:seed
    ```
- Initialize queue work
    ```bash
     php artisan queue:work
    ```
## Author
Anderson Cespedes 
