<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class FormsController extends Controller {
     protected $request;
        public function index()
	{
	return view('forma');
	}
        public function greeting1()
	{
           $var1="";
            if(isset($_POST["text1"])){
            $var1=$_POST["text1"];
            $var2="<br/><br/>Hello ". $var1."!";
        }
        else {
            $var1="";
            $var2="<br/><br/>Good Morning!";
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       return view('forms',$data);
	}
        public function greeting2()
	{
	$var1=""; 
            if($this->request->getPost('text1')){
            $var1=$this->request->getPost('text1');
            $var2="<br/><br/>Hello ". $var1."!";
        }
        else {
            $var1="";
            $var2="<br/><br/>Good Morning!";
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       return view('forms',$data);
        }
        public function greeting3()
	{
	$var1=""; 
            if($this->request->getPost('text1')){
            $var1=$this->request->getPost('text1');
            $var2="<br/><br/>Hello ". $var1."!";
        }
        else {
            $var1="";
            $var2="<br/><br/>Good Morning!";
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       return view('forms2',$data);
        }
}