# CM2 - Create Page Theme Template

## Introduction
In this task, we created a page theme template to ensure a consistent look and feel across the web application.

## Requirements
- Bootstrap 5
- Data Tables
- Navbar w/o logo - may add later
- Home, Reports, Admin Navs
- Authenticated User Display

## Implementation Details

### Header and Footer
- Created `header.php` and `footer.php` for reusable headers and footers.
- Included Bootstrap, Data Tables, and custom CSS in the header.
- Included Bootstrap and Data Tables JavaScript in the footer.

### Database Connection
- Created `connection.php` outside the `public_html` directory for secure database connectivity.
- Included `connection.php` in `header.php` to provide database access to all pages.

## File Structure
- `/home/username/connection.php`: Database connection file.
- `/public_html/header.php`: Header file.
- `/public_html/footer.php`: Footer file.
- `/public_html/css/custom.css`: Custom CSS file.

## Usage
- Include `header.php` at the beginning and `footer.php` at the end of each PHP file to maintain a consistent page layout.

## Testing
- Visual inspection of the pages to ensure consistent styling.
- Database connectivity testing.

## Deployment
- Upload the PHP files to the server.
- Ensure the correct file permissions are set.

## Additional Notes
- Ensure to replace `username` with the actual username in the path `/home/username/connection.php`.
