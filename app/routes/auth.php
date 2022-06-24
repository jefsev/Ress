<?php
use BoxyBird\Inertia\Inertia;

add_action('init', function () {
    // Lazily using key/callback
    Inertia::share('auth', function () {
        if (is_user_logged_in()) {
            return [
                'user' => wp_get_current_user()
            ];
        }
    });

    // Lazily on partial reloads
    Inertia::share('auth', Inertia::lazy(function () {
        if (is_user_logged_in()) {
            return [
                'user' => wp_get_current_user()
            ];
        }
    }));

    // Multiple values
    Inertia::share([
        // Lazily
        'auth' => function () {
            if (is_user_logged_in()) {
                return [
                    'user' => wp_get_current_user()
                ];
            }
        },
        'auth_forms' => function () {
            if (!is_user_logged_in()) {
                $login_form = wp_login_form([
                    'echo' => false,
                ])
                return [
                    'login_form' => $login_form
                ];
            }
        }
    ]);
});
