<?php

namespace Embitel\Mymodule\Cron;
//use Psr\Log\LoggerInterface;

class Test1
{
//     /**
//      * 
//      * @var LoggerInterface
//      */
//     protected $logger;
//     /**
//      * Test Cron constructor
//      * 
//      * @param LoggerInterface $logger
//      */
//     public function __construct(LoggerInterface $logger,)
//     {

//         $this->logger=$logger;

//     }
//      /**
//      *write to system.log
//      * 
//      * @return void
//      */

	public function execute()
	{

// 		try{

// // write your logic
// $this->logger->info("this is first cron.");

//         }
//         catch(\Exception $ex){

//             $this->logger->info($ex->getMessage());

//         }

$current_date=date("YMd_his");
$name_of_file='customer'.$current_date.'.csv';

$header_data=array(
'Firstname',
'Lastname',
'Email',
'Telephone'
);
$header_data=array_combine($header_data,$header_data);
$data=[];
$data[]=$header_data;
$data[]=[
	'Firstname'=>'Prathvi',
	'Lastname'=>'shetty',
	'Email'=>'psg45@gmail.com',
	'Telephone'=>'525544'
];
$data[]=[
	'Firstname'=>'Priya',
	'Lastname'=>'s',
	'Email'=>'psh5@gmail.com',
	'Telephone'=>'52554422'
];
$data[]=[
	'Firstname'=>'Preethi',
	'Lastname'=>'R',
	'Email'=>'p53h5@gmail.com',
	'Telephone'=>'96353422'
];
$data[]=[
	'Firstname'=>'Pancham',
	'Lastname'=>'ach',
	'Email'=>'pan45@gmail.com',
	'Telephone'=>'96353422'
];
$fp=fopen('/var/www/html/magento/var/export/'.$name_of_file,'w');
foreach($data as $fields)
fputcsv($fp,$fields);

//file_put_contents('/var/www/html/magento/var/export/'.$name_of_file,$header_data);

    }
}



	




