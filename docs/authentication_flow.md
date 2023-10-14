Here's a refined version of your notes for better clarity and presentation in GitHub documentation:

---

### Authentication Flow

1. **Initial Landing**:
    - User lands on `index.php`.

2. **No Token**:
    - Redirect to the Registration tab containing the Login/Register Form.
    - Capture: email, first name, last name.
    - Post-data validation:
        - If email exists: Display message "An account already exists for this email. You may:"
            - "Login" (Link to login tab) or 
            - "Reset Password" (Link to Reset Password).
        - If email is new: Display message "Registration complete. Please Log in" (link to login tab).

3. **Expired Token**:
    - Redirect to login tab, with email field pre-populated.
    - User proceeds to login.

4. **Unexpired Token**:
    - User doesn't need to authenticate, continues to use the app.

### Database Schema:

**Table:** `users`

| Field          | Type       | Description     |
|----------------|------------|-----------------|
| id             | Primary Key|                 |
| first_name     | String     |                 |
| last_name      | String     |                 |
| full_name      | Calculated | first_name + last_name |
| email          | String     |                 |
| password       | Hashed     |                 |
| role           | String     |                 |
| registered_date| Date       |                 |
| last_login_date| Date       |                 |
| last_updated   | Date       |                 |

---

This format presents the flow and database schema in a structured, easy-to-follow manner suitable for GitHub documentation. The tabular representation of the database schema provides a clear, organized view of the data fields and their types.