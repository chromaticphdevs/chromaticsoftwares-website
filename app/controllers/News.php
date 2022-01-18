<?php

class News extends Controller
{
    public function index()
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews();
    }

    public function view($slug = null)
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews($slug);
    }
}
