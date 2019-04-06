<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 2019-04-07
 * Time: 00:15
 */

namespace Patterns\CommonPatterns\DtoPattern\Controller;

use Patterns\CommonPatterns\DtoPattern\DTO\ArticleDTO;
use Patterns\CommonPatterns\DtoPattern\Service\ArticleService;
use Patterns\CommonPatterns\DtoPattern\View\MainView;

class ArticleController{

    private const HTTP_CREATED = 201;

    /**
     * @var ArticleService
     */
    private $articleService;
    /**
     * @var MainView
     */
    private $view;

    /**
     * ArticleController constructor.
     */
    public function __construct()
    {
        $this->articleService = new ArticleService();
        $this->view = new MainView();
    }

    public function postArticle(ArticleDTO $articleDTO): string
    {
        $article = $this->articleService->addArticle($articleDTO);
        // In case our POST was a success we need to return a 201 HTTP CREATED response with the created object
        return $this->view->createView($article, self::HTTP_CREATED);
    }
}