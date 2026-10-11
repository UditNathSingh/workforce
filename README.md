# Workforce — Laravel Conversion

The four static apps (Admin / HR / Manager / Employee) converted to a Laravel structure.
All interactive behaviour is preserved — the UI is rendered client-side from the
extracted JS assets, exactly as in the static files.

## Structure

```
app/Http/Controllers/WorkspaceController.php   serves the four workspaces
routes/web.php                                 /admin /hr /manager /employee
resources/views/layouts/workforce.blade.php    shared HTML shell (CDN assets + CSS)
resources/views/workspace.blade.php            shared shell for all workspaces
public/css/workforce.css                       shared custom styles
public/js/{admin,hr,manager,employee}.js       full app logic per workspace
```

## Setup

1. Create a fresh Laravel app (or drop these files into an existing one):
   ```
   composer create-project laravel/laravel workforce
   ```
2. Copy the folders into the project root (merge `routes`, `app`, `resources`, `public`).
3. Run:
   ```
   php artisan serve
   ```
4. Open http://127.0.0.1:8000/employee (redirects root there too).

The "Xspaceweb Pvt Ltd" workspace switcher in the sidebar links to the other
apps by relative URL — with `php artisan serve` the links are `/admin`, `/hr`,
`/manager`, `/employee`, so switching works out of the box.

## Notes

- These files currently use Tailwind Play CDN + Chart.js + Lucide via CDN for
  zero-build usage. For production, compile Tailwind locally and pin CDN versions.
- All data is still mock data rendered in the browser; the next step is wiring
  the views to Eloquent models/API endpoints (see earlier discussion on the
  Next.js/Supabase or Laravel + Livewire path).
