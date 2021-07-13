<?php

namespace App\Controllers;

class Mailbox extends BaseController
{
	public function index()
	{
		return view('pages_adminLTE/mailbox/compose');
	}

	public function compose()
	{
		return view('pages_adminLTE/mailbox/compose');
	}

	public function mailbox()
	{
		return view('pages_adminLTE/mailbox/mailbox');
	}
	public function read_mail()
	{
		return view('pages_adminLTE/mailbox/read-mail');
	}


	//--------------------------------------------------------------------

}
