<?php 

	namespace CorePhp;
    require __DIR__ . '/../Repository/EmployeeRepository.php';

	/**
	 *
	 * Employee Service class, all business logic goes here
	 * @author Rayies Banka <rayiesbanka@gmail.com>
	 */
	class EmployeeService {

		/**
		 *
		 */
		private $employeeRepository;

		public function __construct() 
		{
			$this->employeeRepository = new EmployeeRepository();
		}


		/**
		 * Method to create Employee 
		 * @access public
		 * @param EmployeeModel $employeeModel
		 * @return 
		 * @throws Exception
		 * @author Rayies Banka <rayiesbanka@gmail.com> 	
		 */
		public function create(EmployeeModel $employeeModel) 
		{
			try {
				// Any business logic
				$response = $this->employeeRepository->create($employeeModel);
				return $response;
			} catch (\Exception $ex) {
				throw new \Exception(json_encode(['Message' => $ex->getMessage(), 'File' => $ex->getFile(), 'Line' => $ex->getLine()]));
			}
		}

	}


?>