<?php

if (!function_exists('get_imported_asset')) {
    function get_imported_asset($path = null, $baseDir = "assets/") : string
    {
        return asset($baseDir . $path);
    }
}
if (!function_exists('get_logo')) {
    function get_logo($footer = false, $theme = "light") : string
    {
        if($footer){
            return asset(get_imported_asset(env('APP_FOOTER_LOGO', 'images/logo/coindesk-white.jpeg')));
        }
        if($theme == "light"){
        return asset(get_imported_asset(env('APP_LOGO', 'images/logo/coindesk-white.jpeg')));
        }else{

        return asset(get_imported_asset(env('APP_LOGO_DARK', 'images/logo/coindesk-white.jpeg')));
        }
    }
}

if (!function_exists('buildDynamicMenu')) {
    function buildDynamicMenu($routes, $exemptPatterns = []) {
        $menuStructure = [];

        // Loop through all routes to build a structured menu array
        foreach ($routes as $route) {
            // Skip routes that match any exempt pattern
            foreach ($exemptPatterns as $pattern) {
                if (preg_match($pattern, $route->getName())) {
                    continue 2; // Skip the current route and move to the next
                }
            }

            $nameParts = explode('.', $route->getName());

            if (count($nameParts) == 1) {
                $menuStructure[$nameParts[0]] = [
                    'name' => ucfirst($nameParts[0]),
                    'route' => $route->getName(),
                    'children' => []
                ];
            } elseif (count($nameParts) == 2) {
                if (!isset($menuStructure[$nameParts[0]])) {
                    $menuStructure[$nameParts[0]] = [
                        'name' => ucfirst($nameParts[0]),
                        'route' => null, // Parent route may not have its own link
                        'children' => []
                    ];
                }
                $menuStructure[$nameParts[0]]['children'][] = [
                    'name' => ucfirst($nameParts[1]),
                    'route' => $route->getName()
                ];
            }
        }

        return generateMenuHtml($menuStructure);
    }

    function generateMenuHtml($menuStructure) {
        $html = '';

        foreach ($menuStructure as $menu) {
            $hasChildren = !empty($menu['children']);

            // Check if 'route' is set and not null
            $route = $menu['route'] ?? '#';
            $html .= '<li' . (request()->routeIs($route) ? ' class="active"' : '') . '>';
            $html .= '<a href="' . ($hasChildren ? 'javascript:;' : route($route)) . '">';
            $html .= $menu['name'] . '<i class="fa ' . ($hasChildren ? 'fa-chevron-down' : '') . '"></i></a>';

            if ($hasChildren) {
                $html .= '<ul class="sub-menu">';
                foreach ($menu['children'] as $child) {
                    $html .= '<li><a href="' . route($child['route']) . '">' . $child['name'] . '</a></li>';
                }
                $html .= '</ul>';
            }

            $html .= '</li>';
        }

        return $html;
    }
}
