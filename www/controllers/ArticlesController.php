<?php
require_once __DIR__ . '/../models/Article.php';
require_once __DIR__ . '/../classes/Controller.php';

class ArticlesController extends Controller
{
    public function index()
    {
        $model = new Article();

        return $this->view('articles/index', [
            'articles' => $model->all(),
        ]);
    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
