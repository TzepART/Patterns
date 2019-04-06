<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 2019-04-07
 * Time: 00:20
 */

namespace Patterns\CommonPatterns\DtoPattern\Service;

use Patterns\CommonPatterns\DtoPattern\DTO\ArticleDTO;
use Patterns\CommonPatterns\DtoPattern\Entity\Article;

final class ArticleAssembler
{
    public function readDTO(ArticleDTO $articleDTO, ?Article $article = null): Article
    {
        if (!$article) {
            $article = new Article();
        }
        $article->setContent($articleDTO->getContent());
        $article->setTitle($articleDTO->getTitle());

        return $article;
    }

    public function updateArticle(Article $article, ArticleDTO $articleDTO): Article
    {
        return $this->readDTO($articleDTO, $article);
    }

    public function createArticle(ArticleDTO $articleDTO): Article
    {
        return $this->readDTO($articleDTO);
    }

    public function writeDTO(Article $article)
    {
        return new ArticleDTO(
            $article->getTitle(),
            $article->getContent()
        );
    }
}