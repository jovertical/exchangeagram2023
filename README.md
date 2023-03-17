## 🚀 Local Setup

```bash
# First, install dependencies
composer install
npm install

# Then copy the .env.example file to .env (configure accordingly)
cp .env.example .env

# Then generate the application key
php artisan key:generate

# Link the application in Valet
valet link exchangeagram
valet secure

# Then run the Vite server to bundle the assets
npm run dev

# Finally, view the app here: https://exchangeagram.test
```
