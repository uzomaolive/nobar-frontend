# NoBar Frontend 

**A lightweight WordPress plugin that hides the admin bar from the frontend for logged-in users.**

## Overview  
NoBar Frontend is a simple yet effective WordPress plugin designed to enhance the user experience by removing the admin bar for logged-in users on the public-facing parts of your site. This allows for a cleaner and more professional look, without distractions from the admin interface.

## Features  
- Hides the admin bar from the frontend for all logged-in users.
- Maintains full access to the WordPress admin dashboard.
- Lightweight and easy to use—just install and activate!
- Ideal for developers and site owners looking for a streamlined frontend.

## Installation  
1. **Download the Plugin**:  
   You can download the plugin from the WordPress plugin repository or clone this repository using:
   ```bash
   git clone https://github.com/<your-username>/nobar-frontend.git

### Upload the Plugin
Upload the plugin to your WordPress site via the Plugins section or place it in the `/wp-content/plugins/` directory.

### Activate the Plugin
Go to the Plugins menu in WordPress, find **NoBar Frontend**, and click **Activate**.

## Usage
Once activated, the admin bar will no longer appear on the frontend for logged-in users, providing a distraction-free browsing experience.

## Code Snippet
The core functionality of the plugin is implemented with the following code:

```php
// Hide admin bar from the frontend for logged-in users
add_filter( 'show_admin_bar', '__return_false' );
```

Author
Olive Uzoma
Website
