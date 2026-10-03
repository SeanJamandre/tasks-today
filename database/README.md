# Database setup

The preferred setup is CodeIgniter's migration and seeder workflow:

```text
php spark migrate
php spark db:seed TasksSeeder
```

The migration creates the `users` table with a hashed-password field and the `tasks` table with the `is_archived` soft-delete flag. The seeder creates the demo account and sample tasks. `tasks_system.sql` is included as a database export reference.
