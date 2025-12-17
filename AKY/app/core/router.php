<?php

class Router {

    public function resolve() {
        $base = '/arthienne/AKY/public';
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = str_replace($base, '', $path);

        if ($path === '/exhibitions') {
            require '../AKY/app/controllers/exhibitionController.php';
            (new exhibitionController())->index();
            return;
        }

        if ($path === '/exhibitions/view') {
            require '../AKY/app/controllers/exhibitionController.php';
            (new exhibitionController())->view();
            return;
        }

        if ($path === '/forums') {
            require '../AKY/app/controllers/forumController.php';
            (new forumController())->index();
            return;
        }

        http_response_code(404);
        echo '404';
    }
}
