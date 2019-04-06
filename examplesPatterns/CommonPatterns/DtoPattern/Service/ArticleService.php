<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 2019-04-07
 * Time: 00:42
 */

namespace Patterns\CommonPatterns\DtoPattern\Service;

use Patterns\CommonPatterns\DtoPattern\DTO\ArticleDTO;
use Patterns\CommonPatterns\DtoPattern\Entity\Article;

class ArticleService
{
    public function addArticle(ArticleDTO $articleDTO)
    {
        $article = new Article();
        $article->setContent($articleDTO->getContent());
        $article->setTitle($articleDTO->getTitle());

        // TODO save article in DB

        return $article;
    }
}