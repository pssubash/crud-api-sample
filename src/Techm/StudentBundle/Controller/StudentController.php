<?php

namespace Techm\StudentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;

class StudentController extends Controller{
	/**
	 * @return array
	 * @View()
	 */
	public function getStudentAction ()
	{
		$students = $this->getDoctrine()->getRepository('TechmStudentBundle:Student')->findAll();
		return array('students' => $students);
	}
}

?>