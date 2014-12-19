<?php

class NewsController
    extends Acontroller
{
    const Template_path = '/../templates/';

    protected function actionAll() {

        $ob_news = new News;
        $view = new View(self::Template_path);

        $view->news = $ob_news->news_getAll();
        $html = $view->display('index.php');
        echo $html;
    }

    protected function actionOne() {

        $ob_news = new News;
        $view = new View(self::Template_path);

        $view->article = $ob_news->news_getOne($_GET['id']);
        $html = $view->display('read_article.php');
        echo $html;
    }

    protected function actionEdit() {

        $ob_news = new News;
        $view = new View(self::Template_path);

        if (isset($_POST['title']) && isset($_POST['text'])) {
            $ob_news->news_edit($_GET['id'], $_POST['title'], $_POST['text']);
            header('Location: index.php?route=news/all');
        }

        $view->article = $ob_news->news_getOne($_GET['id']);
        $html = $view->display('edit_article.php');
        echo $html;
    }

    protected function actionInsert() {

        $ob_news = new News;
        $view = new View(self::Template_path);

        if (isset($_POST['title']) && isset($_POST['text'])) {
            $ob_news->news_insert($_POST['title'], $_POST['text']);
            header('Location: index.php?route=news/all');
        }

        $html = $view->display('add_article.php');
        echo $html;

    }



} 