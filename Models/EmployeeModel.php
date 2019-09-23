<?php 

    namespace CorePhp;
    
	/**
	 * EmployeeModel class 
	 *  
	 * @author Rayies Banka <rayiesbanka@gmail.com>
	 */
	class EmployeeModel {

		/**
		 * 
		 */
		private $employeeNumber;

		/**
		 * 
		 */
		private $lastName;

		/**
		 * 
		 */
		private $firstName;

		/**
		 * 
		 */
		private $extension;

		/**
		 * 
		 */
		private $email;

		/**
		 * 
		 */
		private $officeCode;

		/**
		 * 
		 */
		private $reportsTo;

		/**
		 * 
		 */
		private $jobTitle;

		/**
		 * 
		 */
		public function getEmployeeNumber() {
			return $this->employeeNumber;
		}

		/**
		 * 
		 */
		public function setEmployeeNumber(int $employeeNumber) {
			$this->employeeNumber = $employeeNumber;
		}

		/**
		 * 
		 */
		public function getLastName() {
			return $this->lastName;
		}

		/**
		 * 
		 */
		public function setLastName(string $lastName) {
			$this->lastName = $lastName;
		}

		/**
		 * 
		 */
		public function getFirstName() {
			return $this->firstName;
		}

		/**
		 * 
		 */
		public function setFirstName(string $firstName) {
			$this->firstName = $firstName;
		}

		/**
		 * 
		 */
		public function getExtension() {
			return $this->extension;
		}

		/**
		 * 
		 */
		public function setExtension(string $extension) {
			$this->extension = $extension;
		}

		/**
		 * 
		 */
		public function getEmail() {
			return $this->email;
		}

		/**
		 * 
		 */
		public function setEmail(string $email) {
			$this->email = $email;
		}

		/**
		 * 
		 */
		public function getOfficeCode() {
			return $this->officeCode;
		}

		/**
		 * 
		 */
		public function setOfficeCode(string $officeCode) {
			$this->officeCode = $officeCode;
		}

		/**
		 * 
		 */
		public function getReportsTo() {
			return $this->reportsTo;
		}

		/**
		 * 
		 */
		public function setReportsTo(int $reportsTo) {
			$this->reportsTo = $reportsTo;
		}

		/**
		 * 
		 */
		public function getJobTitle() {
			return $this->jobTitle;
		}

		/**
		 * 
		 */
		public function setJobTitle(string $jobTitle) {
			$this->jobTitle = $jobTitle;
		}

		
	}


?>