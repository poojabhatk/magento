<?php
namespace Embitel\Mymodule\Cron;

// use Psr\Log\LoggerInterface;

class Test
{
//     /**
//      *
//      * @var LoggerInterface
//      */
//     protected $logger;
//      /**
//      *
//      * @param LoggerInterface $logger
//      */

//     public function __construct(LoggerInterface $logger,){
//         $this->logger= $logger;
//     }
//     /**
//      *
//      * return void
//      */

//      public function execute()
//      {
//      try{
//         $this->logger->info("cron demo");
//     }
//     catch(\Exception $ex){
//         $this->logger->info($ex->getMessage());
//     }
//      }


public function execute()
{
    $current_date=date("YMd_his");
    $name_of_file='customer'.$current_date .'.csv';
    $header_data=['Firstname',
    'Lastname',
    'Email',
    'Telephone']
       
    ;

   $header_data=array_combine($header_data,$header_data);
   $data=[];
   $data[] = $header_data;

   $data[]=[
    'Firstname'=>'pooja',
    'Lastname'=>'bhat',
    'Email'=>'a@gmail.com',
    'Telephone'=>'8861126880'
   ];
   $data[]=[
    'Firstname'=>'priya',
    'Lastname'=>'bhat k',
    'Email'=>'akgff@gmail.com',
    'Telephone'=>'8861120008'
   ];
   $fop=fopen('/var/www/html/magento-op/var/export/'. $name_of_file,'w');
   foreach ($data as $fields ) {
    fputcsv($fop,$fields);
   }

    // file_put_contents('/var/www/html/magento-op/var/export/' .$name_of_file, $header_data);
        
  
}
 }
