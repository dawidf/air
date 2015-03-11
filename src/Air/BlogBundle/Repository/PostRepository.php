<?php
    namespace Air\BlogBundle\Repository;
    use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{

    public function getPublishedPost($slug)
    {
        $qb = $this->getQueryBuilder(array(
            'status' => 'published'
        ));

        $qb->andWhere('p.slug = :slug')
            ->setParameter('slug', $slug);

        return $qb->getQuery()->getOneOrNullResult();
    }



    public function getQueryBuilder(array $params = array() )
    {
        //p od post
        $qb = $this->createQueryBuilder('p')
                ->select('p, c, t, a') // select p form post LEFT JOIN category as c LEFT JOIN tags as t
                ->leftJoin('p.category', 'c')
                ->leftJoin('p.tags', 't')
                ->leftJoin('p.author', 'a');
        //jeśli istnieje coś takiego jak status(kolumna w tabeli),
        if(!empty($params['status']))
        {
            //jeśli status == published to
            if('published' == $params['status'])
            {
                //tylko opublikowane wyświetlić, published date mniejsze niż current date
                $qb->where('p.publishedDate <= :currDate AND p.publishedDate IS NOT NULL')
                    // ustawienie :currDate na obecną date
                    ->setParameter('currDate', new \DateTime());
            }else if('published' == $params['status'])
            {
                $qb->where('p.publishedDate > :currDate AND p.publishedDate IS NULL')
                    // ustawienie :currDate na obecną date
                    ->setParameter('currDate', new \DateTime());
            }
        }


        if(!empty($params['orderBy']))
        {
            // jeśli zmienna $orderDir istnieje to orderDir a jak nie to nul czyli
            // sortowanie domyślen czyli DESC
            $orderDir = !empty($params['orderDir']) ? $params['orderDir'] : NULL;
            $qb->orderBy($params['orderBy'], $orderDir);
        }

        if(!empty($params['categorySlug']))
        {
            $qb->andWhere('c.slug = :categorySlug')
                ->setParameter('categorySlug', $params['categorySlug']);
        }

        if(!empty($params['tagSlug']))
        {
            $qb->andWhere('t.slug = :tagSlug')
                ->setParameter('tagSlug', $params['tagSlug']);
        }

        if(!empty($params['search']))
        {
            $searchParams = '%'.$params['search'].'%';
            $qb->andWhere('p.title LIKE :searchParams OR p.content LIKE :searchParams')
                ->setParameter('searchParams', $searchParams);

        }

        return $qb;

    }
}