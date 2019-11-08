<?php


namespace App;

class VisitorChecker
{
    public function __construct()
    {
        //
    }

    public  function checkVisitor()
    {

        $visitor = View::where(['remote_ip'=>$this->get_remote_ip(), 'user_agent'=>$this->get_user_agent()])->get();
        if($visitor->isEmpty()){
            $this->storeVisitor();
        }
    }

    public  function storeVisitor()
    {
        View::create([
            'remote_ip'=>$this->get_remote_ip(),
            'user_agent'=>$this->get_user_agent()
            ]);

    }

    public  function get()
    {
        return View::all()->count();

    }

    protected function get_remote_ip(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $remote_ip = $_SERVER['HTTP_CLIENT_IP'];
        }else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $remote_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $remote_ip = $_SERVER['REMOTE_ADDR'];
        }
        return $remote_ip;
    }

    protected function get_user_agent()
    {
        if(!empty($_SERVER['HTTP_USER_AGENT'])){
            $remote_ip = $_SERVER['HTTP_USER_AGENT'];
        }
        return $remote_ip;   }

    
}