<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $project = new Project();

        $project->setName('Test');
        $project->setUrl('https://test.com');
        $project->setPath('/var/www/test.com');
        $project->setGitPath('/var/www/test.com/.git');
        $manager->persist($project);

        $manager->flush();
    }
}
