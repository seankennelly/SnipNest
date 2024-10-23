## Working notes:
- Remember to leave factory as an example to show in portfolio. Possibly even leave some factory-made examples in the final product

## Technologies
- PHP
- Laravel
- Tailwind
- 
- Composer

## Functionality
### Search
The search bar will return results with matching tags, titles and descriptions.

## Security
- `create.blade.php` holds the form to submit new code snippets. `@csrf` tops the form to disallow Cross Site Scripting

## Database Integrity
- To ensure User-submitted data is accurate, consistent, and reliable, the `store()` function in `ListingController` enforces data constraints. All fields are required and some (email, website) must adhere to correct formatting.
- Each form input field has `@error('input')` tags to inform users which fields are producing errors

## Testing
To test the app, I created a factory and generated fresh fake data with Faker, using the `php artisan migrate:refresh --seed` command. This command also refreshed my database tables. 