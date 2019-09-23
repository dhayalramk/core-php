<?php


	namespace CorePhp;
	require __DIR__ . '/../Models/EmployeeModel.php';
	require __DIR__ . '/../Service/EmployeeService.php';

	/**
	 * EmployeeController Class
	 * 
	 * @author Rayies Rafiq <rayiesbanka@gmail.com>
	 * @access public
	*/	
	class EmployeeController 
	{
	    /**
	     *
	     */
		public function __construct() {
			$this->employeeService = new EmployeeService();			
		}


		/**
		 * Method to create Employee 
		 *
		 * @access public
		 * @param EmployeeModel $employeeModel
		 * @return Response 
		 * @throws Exception
		 * @author Rayies Banka <rayiesbanka@gmail.com> 	
		 */
		public function create() 
		{
			try {
				echo "Hello bitrches"; die;
				$employeeModel = $this->getEmployeeModelData();
				$response = $this->employeeService->create($employeeModel);
				print_r($response);
			} catch (\Exception $ex) {
				throw new \Exception(json_encode(['Message' => $ex->getMessage(), 'File' => $ex->getFile(), 
					'Line' => $ex->getLine()]));
			}
		}

		/**
		 * Method set Employee Model and return
		 *
		 * @access private
		 * @return EmployeeModel 
		 * @throws Exception
		 * @author Rayies Banka <rayiesbanka@gmail.com> 	
		 */
		private function getEmployeeModelData() : EmployeeModel
		{
			try {
				$employeeModel = new EmployeeModel();
				$employeeModel->setEmployeeNumber(1800);
				$employeeModel->setLastName('Banka');
				$employeeModel->setFirstName('Rayies');
				$employeeModel->setExtension('0101');
				$employeeModel->setEmail('rayiesbanka@gmail.com');
				$employeeModel->setOfficeCode('01');
				$employeeModel->setReportsTo(1102);
				$employeeModel->setJobTitle('SoftwareEngineer');
				return $employeeModel;
			} catch (\Exception $ex) {
				throw new \Exception($ex->getMessage());
			}
		}


	}


?>