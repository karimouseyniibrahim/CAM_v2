<?php
function menu($name = 'Main', $main = 'ul', $mClass = '', $sclass = '', $smclass = '', $ssclass = '')
{
    $out = '<' . $main . ' class="' . $mClass . '">';
    foreach (getMenu($name) as $menus) {
        $out .= '<li class="' . $sclass . '" data-id="' . $menus['item']['id'] . '">';
        foreach ($menus as $key => $menu) {
            if ($key == 'item') {
                $out .= extractHtml($menu);
            }
            if ($key == 'sub') {
                $out .= extractSubMenu($menu, $main, $smclass, $ssclass);
            }
        }
        $out .= '</li>';
    }
    $out .= '</' . $main . '>';
    return $out;
}

// function website_menu($name = 'website')
// {
//     $out = '';
//     foreach (getMenu($name) as $menus) {
//         $out .= '<li class="nav-item" data-id="' . $menus['item']['id'] . '">';
//         foreach ($menus as $key => $menu) {
//             if ($key == 'item') {
//                 $out .= '<a class="nav-link" href="'. url($menu['link']) .'">'. getDefaultValueKey($menu['name']) .'</a>';
//             }
//             if ($key == 'sub') {
//                 //$out .= 'extractSubMenu($menu, $main, $smclass, $ssclass)';
//             }
//         }
//         $out .= '</li>';
//     }
//     return $out;
// }

function website_menu($key, $view = null) {

    if (is_null($view)) {
        $view = 'website.menu.'.$key;
    }

    if (!view()->exists($view)) {
        $view = 'website.menu.default';
    }

    $out = '';
    foreach (getMenu($key) as $menus) {
        $out .= view($view, compact('menus'));
    }

    return $out;
}

function website_left_menu($name = 'website left')
{
    $out = '';
    foreach (getMenu($name) as $menus) {
        $out .= '<li class="list-group-item" data-id="' . $menus['item']['id'] . '">';
        foreach ($menus as $key => $menu) {
            if ($key == 'item') {
                $out .= '<a class="nav-link" href="'. url($menu['link']) .'">'. getDefaultValueKey($menu['name']) .'</a>';
            }
            if ($key == 'sub') {
                //$out .= 'extractSubMenu($menu, $main, $smclass, $ssclass)';
            }
        }
        $out .= '</li>';
    }
    return $out;
}

function getMenu($name)
{
    $array = [];
    // dd(get($name));
    foreach (get($name) as $mainKey => $main) {
        foreach ($main as $m) {
            if ($mainKey == 0) {
                // dd($main);
                $array[$m->id] = ['item' => menuArray($m)];
            } else {
                // dd($main);
                if (array_key_exists($m->parent_id, $array)) {
                    if (array_key_exists('sub', $array[$m->parent_id])) {
                        $array[$m->parent_id]['sub'] = array_merge($array[$m->parent_id]['sub'], [menuArray($m)]);
                    } else {
                        $array[$m->parent_id] = array_merge($array[$m->parent_id], ['sub' => [menuArray($m)]]);
                    }
                } else {
                    $array[$m->id] = ['item' => menuArray($m)];
                }
            }
        }
    }
    return $array;
}

function getMenu2($name)
{
    $array = [];
    foreach (get($name) as $mainKey => $main) {
        foreach ($main as $m) {
            if ($mainKey == 0) {
                $array[$m->id] = ['item' => menuArray($m)];
            } else {
                if (array_key_exists($m->parent_id, $array)) {
                    if (array_key_exists('sub', $array[$m->parent_id])) {
                        $array[$m->parent_id]['sub'] = array_merge($array[$m->parent_id]['sub'], [menuArray($m)]);
                    } else {
                        $array[$m->parent_id] = array_merge($array[$m->parent_id], ['sub' => [menuArray($m)]]);
                    }
                } else {
                    $array[$m->id] = ['item' => menuArray($m)];
                }
            }
        }
    }
    return $array;
}


function get($name)
{
    return \App\Application\Model\Menu::where('name', $name)->with(['item' => function ($query) {
        return $query->orderBy('parent_id' , 'asc')->orderBy('order', 'asc');
    }])->first()->item->groupBy('parent_id');
}

function menuArray($main)
{
    return [
        'name' => $main->name,
        'icon' => $main->icon,
        'link' => $main->link,
        'type' => $main->type,
        'id' => $main->id,
        'order' => $main->order,
        'parent_id' => $main->order,
        'controller_path' => json_decode($main->controller_path)
    ];
}

function extractHtml($main)
{
    $out = '<a href="' . url($main['link']) . '" title="' . getDefaultValueKey($main['name']) . '" target="' . $main['type'] . '">';
    if ($main['icon'] != '') {
        $out .= $main['icon'];
    }
    $out .= getDefaultValueKey($main['name']);
    $out .= '</a>';
    return $out;
}

function extractSubMenu($sub, $main = 'ul', $smclass = '', $ssclass = '')
{
    $out = '<' . $main . ' class="' . $smclass . '">';
    foreach ($sub as $s) {
        $out .= '<li class="' . $ssclass . '" data-id="' . $s['id'] . '">';
        $out .= extractHtml($s);
        $out .= '</li>';
    }
    $out .= '</' . $main . '>';
    return $out;
}