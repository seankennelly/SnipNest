# SnipNest
A PHP/Laravel web app that acts as a user-submitted repository for code snippets, within a sharing and social environment. CRUD operations have two scopes:
- Users
  - Register user
  - Log In
  - Log Out
- Snippets
  - Post snippet
  - View all snippets
  - View individual snippet
  - View logged-in user's listings
  - Update logged-in user's listings
  - Delete logged-in user's listings

## Working notes:
- Remember to leave factory as an example to show in portfolio. Possibly even leave some factory-made examples in the final product

## Technologies
- PHP
- Laravel
- Blade
- MySQL
- Tailwind
- Composer
- Bcrypt

## Installation

## Functionality
### Search
The search bar will return results with matching tags, titles and descriptions.

## Security
- `create.blade.php` holds the form to submit new code snippets. `@csrf` tops the form to disallow Cross Site Scripting
- Bcrypt hashes user passwords on registration

## Database Integrity
- To ensure User-submitted data is accurate, consistent, and reliable, the `store()` function in `ListingController` enforces data constraints. All fields are required and some must adhere to correct formatting.
- Each form input field has `@error('input')` tags to inform users which fields are producing errors

## Testing
To test the app, I created a factory and generated fresh fake data with Faker, using the `php artisan migrate:refresh --seed` command. This command also refreshed my database tables.

## Prospective Improvements
- In a future iteration of this project users should be able to rate and comment on snippet postings, further enhancing the community aspect of the site.
- Snippet postings show the name of the user who posted them. In a future iteration this should become a link to a profile page for that user listing all their posts.