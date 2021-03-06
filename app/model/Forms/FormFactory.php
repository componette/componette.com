<?php declare (strict_types = 1);

namespace App\Model\Forms;

use Nette\SmartObject;
use Wavevision\DIServiceAnnotation\DIService;

/**
 * @DIService(generateInject=true)
 */
class FormFactory
{

	use SmartObject;

	public function create(): BaseForm
	{
		$form = new BaseForm();
		$form->addProtection();
		return $form;
	}

}
