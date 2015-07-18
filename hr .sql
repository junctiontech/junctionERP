-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2015 at 01:50 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`customer_id` int(11) NOT NULL COMMENT 'primary key',
  `organization_id` int(11) NOT NULL COMMENT 'foreign key for organization table',
  `user_id` varchar(30) DEFAULT NULL COMMENT 'foreign key for users table',
  `name` varchar(15) NOT NULL COMMENT 'customers name',
  `company_name` varchar(30) NOT NULL COMMENT 'customer company name',
  `email` varchar(20) NOT NULL COMMENT 'customer email',
  `mobile` varchar(15) NOT NULL COMMENT 'customer mobile',
  `present_address` varchar(250) NOT NULL COMMENT 'customer address',
  `product` varchar(30) NOT NULL,
  `customer_type` varchar(15) NOT NULL,
  `reference` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'customer reffrence',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person ',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of timeupdate of time'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='table for customers';

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `organization_id`, `user_id`, `name`, `company_name`, `email`, `mobile`, `present_address`, `product`, `customer_type`, `reference`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(5, 1, NULL, 'demo', 'test', 'demo@gmail.com', '(565) 656-6346', '', 'test', 'wholesaler', 'demo', '', '2015-07-18 11:43:06', '', '0000-00-00 00:00:00'),
(6, 1, NULL, 'test', 'test', 'a@gmail.com', '(452) 345-2353', 'test', 'test', 'wholesaler', 'test', '', '2015-07-18 11:32:11', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers_follow_up`
--

CREATE TABLE IF NOT EXISTS `customers_follow_up` (
  `customer_id` int(11) NOT NULL COMMENT 'primary key for customer follow up',
  `organization_id` int(11) NOT NULL COMMENT 'foreign key for organization',
  `note` varchar(250) CHARACTER SET utf8 NOT NULL COMMENT 'note for customer',
  `follow_up_date` varchar(20) NOT NULL COMMENT 'follow up date for customer',
  `next_follow_up` varchar(20) NOT NULL COMMENT 'date for next folleow up customers',
  `follow_up_time` varchar(15) NOT NULL COMMENT 'customer follow time',
  `follow_up_type` varchar(50) NOT NULL COMMENT 'customer follwo type',
  `follow_up_by` varchar(30) NOT NULL COMMENT 'follow done by person name',
  `created_by` varchar(20) NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_follow_up`
--

INSERT INTO `customers_follow_up` (`customer_id`, `organization_id`, `note`, `follow_up_date`, `next_follow_up`, `follow_up_time`, `follow_up_type`, `follow_up_by`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(6, 1, '', 'Sat, 18 July 2015', '', '', '', '', '', '2015-07-18 11:27:17', '', '0000-00-00 00:00:00'),
(6, 1, 'sdf', '11/11/1111', '22/11/1221', '3', 'sdgsd', 'fff', '', '2015-07-18 11:28:17', '', '0000-00-00 00:00:00'),
(5, 1, 'test', '11/00/0000', '12/00/1201', '6:00 ', 'test', 'test', '', '2015-07-18 11:44:39', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
`department_id` int(11) NOT NULL COMMENT 'department id is a auto increment and primary key for department table',
  `organization_id` int(11) NOT NULL COMMENT 'organization id is a auto increment and primary key for department table',
  `department_name` varchar(250) DEFAULT NULL COMMENT 'department name for  organizations',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person ',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table department for organization`s employee';

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
`designation_id` int(11) NOT NULL COMMENT 'Designation id is a auto increment and primary key for designations table',
  `organization_id` int(11) NOT NULL COMMENT 'organization id is a auto increment and primary key for designations table',
  `designation_name` varchar(250) NOT NULL COMMENT 'designation name for  organizations',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table  designations for organization`s employee';

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`employee_id` int(11) NOT NULL COMMENT 'Employee id is a auto increment and primary key for employee table',
  `organization_id` int(11) NOT NULL COMMENT ' Organization id is a auto increment and primary key for employee table',
  `department_id` int(11) DEFAULT NULL COMMENT 'Department name for a employee for his organization',
  `designation_id` int(11) DEFAULT NULL COMMENT 'Designations name for employee',
  `user_id` varchar(30) DEFAULT NULL COMMENT 'user_id is for login',
  `salary_frquency` varchar(10) DEFAULT NULL COMMENT 'frequency for employee payroll',
  `joining_date` varchar(300) DEFAULT NULL COMMENT 'joining date for employee',
  `first_name` varchar(15) DEFAULT NULL COMMENT 'first name for employee',
  `last_name` varchar(15) DEFAULT NULL COMMENT 'last name for employee',
  `birthdate` varchar(255) DEFAULT NULL COMMENT 'birth date for employee',
  `gender` varchar(10) DEFAULT NULL COMMENT 'gender for employee',
  `image` varchar(250) DEFAULT NULL COMMENT 'employee pic',
  `martial_status` varchar(15) DEFAULT NULL COMMENT 'employee martial status',
  `nationality` varchar(15) DEFAULT NULL COMMENT 'employee nationalty',
  `father_name` varchar(15) DEFAULT NULL COMMENT 'employee father name',
  `passport` varchar(30) DEFAULT NULL COMMENT 'employee passport',
  `present_address` varchar(250) DEFAULT NULL COMMENT 'employee address',
  `mobile` varchar(12) DEFAULT NULL COMMENT 'employee mobile',
  `email` varchar(20) DEFAULT NULL COMMENT 'employee email',
  `country` varchar(15) DEFAULT NULL COMMENT 'employee country',
  `state` varchar(15) DEFAULT NULL COMMENT 'employee state',
  `city` varchar(15) DEFAULT NULL COMMENT 'employee city',
  `zip` varchar(9) DEFAULT NULL COMMENT 'employee zip',
  `resume` varchar(250) DEFAULT NULL COMMENT 'employee resume',
  `offerletter` varchar(250) DEFAULT NULL COMMENT 'employee offer lettaer',
  `joiningletter` varchar(255) DEFAULT NULL COMMENT 'employee join letter',
  `idproof` varchar(250) DEFAULT NULL COMMENT 'employee id proof',
  `bank_name` varchar(50) DEFAULT NULL COMMENT 'employee bank name',
  `branch_name` varchar(250) DEFAULT NULL COMMENT 'employee branch name',
  `acc_name` varchar(50) DEFAULT NULL COMMENT 'employee account name',
  `acc_no` varchar(20) DEFAULT NULL COMMENT 'employee account number',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table employee for a organizations';

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE IF NOT EXISTS `function` (
  `function_id` varchar(20) NOT NULL COMMENT 'function id is a auto increment and primary key for a function table',
  `function_name` varchar(50) NOT NULL COMMENT 'function name is function identity',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Function table for defined function list where give you perm';

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`function_id`, `function_name`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
('acc_setting', 'acc_setting', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('add_customer', 'add customer', '', '2015-07-16 11:44:54', '', '0000-00-00 00:00:00'),
('add_departments', 'add departments', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('add_designation', 'add designation', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('add_emp', 'add emp', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('add_opportunities', 'add opportunities', '', '2015-07-16 11:45:42', '', '0000-00-00 00:00:00'),
('add_organization', 'add organization', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('add_role', 'add role', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('attendance_report', 'attendance_report', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('blocked_user', 'blocked user', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('change_pass', 'change pass', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('customequick', 'customequick', '', '2015-07-16 11:46:15', '', '0000-00-00 00:00:00'),
('customers', 'customers', '', '2015-07-16 11:44:54', '', '0000-00-00 00:00:00'),
('delete_departments', 'delete departments', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('delete_designation', 'delete designation', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('delete_organization', 'delete organization', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('delete_user', 'delete user', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('emp_award', 'emp award', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('index', 'index', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('insert_customer', 'insert_customer', '', '2015-07-16 11:46:15', '', '0000-00-00 00:00:00'),
('insert_department', 'insert department', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('insert_designation', 'insert designation', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('insert_employee', 'insert employee', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('insert_followup', 'insert_followup', '', '2015-07-16 11:47:25', '', '0000-00-00 00:00:00'),
('insert_organization', 'insert organization', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('insert_role', 'insert role', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('login_user', 'login user', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('login_view', 'login_view', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('manage_attendance', 'manage_attendance', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('manage_departments', 'manage departments', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('manage_designation', 'manage designation', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('manage_emp', 'manage emp', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('manage_opportunities', 'manage opportunities', '', '2015-07-16 11:45:42', '', '0000-00-00 00:00:00'),
('manage_organization', 'manage organization', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('manage_users', 'manage users', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('modal', 'modal', '', '2015-07-16 11:47:43', '', '0000-00-00 00:00:00'),
('role_assign', 'role assign', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('role_management', 'role management', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('role_permission', 'role permission', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('sign_up', 'sign_up', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('update_customer', 'update customer', '', '2015-07-16 11:47:25', '', '0000-00-00 00:00:00'),
('update_department', 'update department', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('update_designation', 'update designation', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('update_employee', 'update employee', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('update_organization', 'update organization', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('update_role_permissi', 'manage  unit', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('user_add', 'user add', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('user_role', 'user role', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
`organization_id` int(11) NOT NULL COMMENT 'organization id is a auto increment and primary key for organization table',
  `organization_name` varchar(50) DEFAULT NULL COMMENT 'organization name for organizations',
  `organization_desc` varchar(250) DEFAULT NULL COMMENT 'organization description for organization table',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` varchar(50) NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Table organizations for organization`s employee';

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`organization_id`, `organization_name`, `organization_desc`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'demo', 'demo', 'superuser', '2015-07-18 11:09:22', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` varchar(20) NOT NULL COMMENT 'role id primary key and auto increment for assign role',
  `role_description` varchar(50) DEFAULT NULL COMMENT 'role descriptons',
  `created_by` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'name of create person',
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'name of update person',
  `updated_on` timestamp NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Role table for check authority';

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_description`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
('Administrator', 'Administrator', NULL, '2015-07-17 11:19:54', NULL, '0000-00-00 00:00:00'),
('blocked', 'blocked', NULL, '2015-07-17 11:17:29', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_permission`
--

CREATE TABLE IF NOT EXISTS `role_permission` (
  `role_id` varchar(20) NOT NULL COMMENT 'Role is primary key for role permissions',
  `function_id` varchar(20) NOT NULL COMMENT 'finction primary key dor role permissons',
  `auth_read` int(5) NOT NULL COMMENT 'Auth read is field for role permissions',
  `auth_execute` int(5) NOT NULL COMMENT 'Auth executeis field for role permissions',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table for role permissions';

--
-- Dumping data for table `role_permission`
--

INSERT INTO `role_permission` (`role_id`, `function_id`, `auth_read`, `auth_execute`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
('Administrator', 'acc_setting', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'add_customer', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'add_departments', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'add_designation', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'add_emp', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'add_opportunities', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'add_organization', 0, 0, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'add_role', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'attendance_report', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'blocked_user', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'change_pass', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'customequick', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'customers', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'delete_departments', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'delete_designation', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'delete_organization', 0, 0, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'delete_user', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'emp_award', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'index', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'insert_customer', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'insert_department', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'insert_designation', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'insert_employee', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'insert_followup', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'insert_organization', 0, 0, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'insert_role', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'login_user', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'login_view', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'manage_attendance', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'manage_departments', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'manage_designation', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'manage_emp', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'manage_opportunities', 1, 0, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'manage_organization', 0, 0, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'manage_users', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'modal', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'role_assign', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'role_management', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'role_permission', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'sign_up', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'update_customer', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'update_department', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'update_designation', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'update_employee', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'update_organization', 0, 0, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'update_role_permissi', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'user_add', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('Administrator', 'user_role', 1, 1, '', '2015-07-17 11:19:54', '', '0000-00-00 00:00:00'),
('blocked', 'acc_setting', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'add_customer', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'add_departments', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'add_designation', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'add_emp', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'add_opportunities', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'add_organization', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'add_role', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'attendance_report', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'blocked_user', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'change_pass', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'customequick', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'customers', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'delete_departments', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'delete_designation', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'delete_organization', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'delete_user', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'emp_award', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'index', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'insert_customer', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'insert_department', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'insert_designation', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'insert_employee', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'insert_followup', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'insert_organization', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'insert_role', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'login_user', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'login_view', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'manage_attendance', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'manage_departments', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'manage_designation', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'manage_emp', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'manage_opportunities', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'manage_organization', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'manage_users', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'modal', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'role_assign', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'role_management', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'role_permission', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'sign_up', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'update_customer', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'update_department', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'update_designation', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'update_employee', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'update_organization', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'update_role_permissi', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'user_add', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00'),
('blocked', 'user_role', 0, 0, '', '2015-07-17 11:17:29', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
`user_id` int(11) NOT NULL COMMENT 'user id is priamary key and auto increment for signup',
  `usermailid` varchar(15) DEFAULT NULL COMMENT 'user mail id for sign up',
  `password` varchar(10) DEFAULT NULL COMMENT 'password for sign up',
  `user_name` varchar(15) NOT NULL COMMENT 'user name for sign up',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='sign up table for new user';

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE IF NOT EXISTS `tracking` (
  `employee_id` varchar(15) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `imei` int(25) NOT NULL,
  `datetime` datetime NOT NULL,
  `location` varchar(250) NOT NULL,
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person ',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(30) NOT NULL COMMENT 'user id is auto increment  and primary key for users',
  `organization_id` int(11) NOT NULL COMMENT 'org id is foreign key',
  `role_id` varchar(20) DEFAULT NULL COMMENT 'role id  is foriegn key for users',
  `usermailid` varchar(30) DEFAULT NULL COMMENT 'mail id for users',
  `password` varchar(50) DEFAULT NULL COMMENT 'password for users',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT COMMENT='users table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `organization_id`, `role_id`, `usermailid`, `password`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
('demo', 1, 'Administrator', 'demo', 'demo', '', '2015-07-18 11:09:50', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`customer_id`,`organization_id`), ADD KEY `fk_user_id` (`user_id`) COMMENT 'fk_user_id', ADD KEY `organization_id` (`organization_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`department_id`,`organization_id`), ADD KEY `department_ibfk_1` (`organization_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
 ADD PRIMARY KEY (`designation_id`,`organization_id`), ADD KEY `organization_id` (`organization_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`employee_id`,`organization_id`), ADD KEY `organization_id` (`organization_id`), ADD KEY `FK_dept` (`department_id`), ADD KEY `designation` (`designation_id`) COMMENT 'designation', ADD KEY `fk_user_id` (`user_id`) COMMENT 'Fk_user_id';

--
-- Indexes for table `function`
--
ALTER TABLE `function`
 ADD PRIMARY KEY (`function_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
 ADD PRIMARY KEY (`organization_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `role_permission`
--
ALTER TABLE `role_permission`
 ADD PRIMARY KEY (`role_id`,`function_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
 ADD PRIMARY KEY (`employee_id`,`organization_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`,`organization_id`), ADD KEY `organization_id` (`organization_id`), ADD KEY `role` (`role_id`) COMMENT 'role';

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'department id is a auto increment and primary key for department table';
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Designation id is a auto increment and primary key for designations table';
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Employee id is a auto increment and primary key for employee table';
--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
MODIFY `organization_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'organization id is a auto increment and primary key for organization table',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user id is priamary key and auto increment for signup';
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
ADD CONSTRAINT `FK_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`);

--
-- Constraints for table `designation`
--
ALTER TABLE `designation`
ADD CONSTRAINT `designation_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
ADD CONSTRAINT `FK_dept` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE,
ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`),
ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`designation_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_permission`
--
ALTER TABLE `role_permission`
ADD CONSTRAINT `role_permission_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`),
ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
