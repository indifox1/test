<?php
require_once __DIR__ . '/../models/Article.php';
require_once __DIR__ . '/../classes/Controller.php';
require_once __DIR__ . '/../classes/View.php';

class ArticlesController extends Controller
{
    /**
     * bazayic select anel bolor aarticlnere
     * cuyc tal bolor articlnere
     *
     * @return mixed
     */
    public function index()
    {
        $articles = Article::all();
        dd($articles);
        $view = new View();
        $view->assign('articles', $articles);
        $view->display('articles/index');

    }

    /**
     * bazayic select anel nshvac id-ov article
     *cuyc tal nshvac id-ov article\
     *
     */
    public function show($id)
    {
        $article = Article::find($id);
        $data = [
            'article' => $article
        ];

        return $this->view('articles/show', $data);
    }

    /**
     *
     * cuyc tal forma vore ksarqi article
     * @return mixed
     */
    public function create()
    {
        return $this->view('articles/create');

    }

    /**
     *create formayi submite vore qcum  e nor article bazayi mej
     */
    public function store()
    {
        $data = [
            'name' => $_POST['name'],
            'published' => $_POST['published']
        ];
        Article::create($data);

        return redirect('/articles/index');
    }

    /**
     *      * bazayic select anel nshvac id-ov article
     * cuyc tal forma vore kpopoxi nshvac id-ov article e
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $article = Article::find($id);

        $data = [
            'article' => $article
        ];

        return $this->view('articles/edit', $data);

    }

    /**
     * edit formai submiete vore ktarmacni nshvac id-ov article bazayum
     *     * @param $id
     */
    public function update($id)
    {
        $data = [
            'name' => $_POST['name'],
            'published' => $_POST['published']
        ];
        $article = new Article();
        $article->update($id, $data);
        return redirect('/articles/index');

    }

    /**
     * submit vore kjnji nshvac id-ov article bazayic
     * @param $id
     */
    public function destroy($id)
    {
        $article = new Article();
        $article->delete($id);

        return redirect('/articles/index');
    }
}
