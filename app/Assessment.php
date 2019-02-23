<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PDF;
use App\Mypdf;

class Assessment extends Model
{
    
    public function showPdf($html)
    {
    	PDF::SetTitle('Pagsanjan Academy Assessment Form');
    	PDF::AddPage();

   
    	PDF::SetCellPadding(1);
    	PDF::SetFontSize('20px');
		PDF::MultiCell(189, 5, School::name().' Assessment Form', 0, 'C', 0, 1, '', '', true);
		PDF::SetFontSize('13px');
		PDF::MultiCell(189, 5, School::address(), 0, 'C', 0, 1, '', '', true);
		PDF::MultiCell(189, 5, School::contact(), 0, 'C', 0, 1, '', '', true);
		PDF::MultiCell(189, 5, 'School Year '.School::year(), 0, 'C', 0, 1, '', '', true);

		PDF::ln(10);
		PDF::SetCellPadding(0);
		PDF::SetFontSize('11px');
    	PDF::writeHTML($html,true,false,true,false,'');

    	PDF::Output('Assessment_Form.pdf','D');
    }
}
