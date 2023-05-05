<?php

namespace App\Manager;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class MovieManager
{
    private EntityManagerInterface $entityManager;
    private EntityRepository $repository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->repository = $entityManager->getRepository(Movie::class);
    }

    public function findOrCreateMovie(string $name, string $originalName, int $year): Movie
    {
        $movie = $this->repository->findOneBy(['name' => $name, 'original_name' => $originalName, 'year' => $year]);
        return $movie ?: $this->create($name, $originalName, $year);
    }

    public function create(string $name, string $originalName, int $year): Movie
    {
        $movie = new Movie();
        $movie->setName($name);
        $movie->setOriginalName($originalName);
        $movie->setYear($year);
        $this->entityManager->persist($movie);
        $this->entityManager->flush();
        return $movie;
    }

    public function findById($id): ?Movie
    {
        return $this->repository->find($id);
    }
}