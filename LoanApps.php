<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanApps extends Model
{
    protected $table = 'loanapps';

    protected $fillable = [
        'user',
        'fname',
        'lname',
        'ssn',
        'occupation',
        'marital_status',
        'DOB',
        'dependants',
        'annual_income',
        'loan_type',
        'loan_request_amount',
        'loan_duration'
     ];
}
