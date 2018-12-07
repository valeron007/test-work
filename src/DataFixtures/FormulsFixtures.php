<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Formuls;

class FormulsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

         for ($i = 1; $i <= 20; $i++){
			 $formula = new Formuls();
			 $formula->setNumber($i);
			 if(($i - 1) == 0){
				 $formula->setFormula('a' . '+' .  'b');
			 }else{
				 $formula->setFormula('a' . $i . '+' . 'b' . $i);
			 }
			 $formula->setVarOne(random_int(1, 100));
			 $formula->setVarTwo(random_int(1, 100));
			 $manager->persist($formula);
		 }

        $manager->flush();
    }
}
