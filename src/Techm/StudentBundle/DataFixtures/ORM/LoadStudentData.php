<?php

namespace Techm\StudentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Techm\StudentBundle\Entity\Student;
class LoadStudentData implements FixtureInterface {
	
	public function load(ObjectManager $manager) {
		
		$stud1 = new Student();
		$stud1->setStudname("Subash");
		$stud1->setStudemail("subash@techm.com");
		
		$stud2 = new Student();
		$stud2->setStudname("sujesh");
		$stud2->setStudemail("subash@gmail.com");
		
		$manager->persist($stud1);
		$manager->persist($stud2);
		$manager->flush();
	}
}

?>