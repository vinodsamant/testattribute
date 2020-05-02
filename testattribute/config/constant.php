<?php
return [
   
    'http_code'=>[
        'ok'=>200,
        'unauthorize'=>401,
        'login_fail'=>401,
        'validaion_fail'=>422,
        'mail_fail'=>535,
        'exception'=>500,
        'notFound'=>404,
        'forbidden'=>403,
        'expectation_failed'=>417
    ],
    'msgs'=>[
        'loggedIn'=>'Logged in successfully.',
        'loggedOut'=>'Logged out successfully.',
        'exception'=>'Exception Occurred!!.',
        'invalidEmail'=>'Uh-Oh! No match found. Please enter your registered email account.',
        'invalidUser'=>'Either your credentials are incorrect or your account is not active.',
        'success'=>'Request successfully completed.',
        'signup_success'=>'Sign Up successful! Please check your email for account activation code.',
        'email_exists'=>'The Email ID you entered already belongs to an existing account. Please try another one.',
        'unauthorize'=>'Unauthorized: Access is denied',      
        'PwdUpdateSuccess'=>'Password updated successfully.',        
        'sendCodeSuccess' => '6 digit code has been sent to your email address.',
        'notFound' => 'The user not Found',        
        'oldPassword'=>'Current password is incorrect.', 
        'codeVerified'=>'Code successfully verified.', 
        'codeInvalid'=>'Verification Code Invalid. Please try again.', 
        'invite_sent_success' => 'Invitation has been successfully sent.',
        'age_rule'=>'Age cannot be less than 12 and greater than 100.',   
        'no_invites'=>'No invites Found.', 
        'invite_status_updated'=>'Invite status updated successfully.',
        'profile_update_success'=>'Profile updated successfully.',
        'email_updated_success'=>'Email updated successfully.',
        'signup_verify_text'=>'Thanks for creating an account on 3rdDegree.<br /><br /> Please enter the mentioned verification code to verify your account.',        
        'forgot_password_text'=> 'Please enter the mentioned verification code to reset your password.',
        'email_updation_text'=> 'We have received a request to update your email. You can use below mentioned code to update your email.',     
        'resend_code_text'=> 'Please enter the mentioned verification code.',
        'ok' => 'The request has succeeded.',
        'no_categories'=>'No categories Found.',
        'no_questions'=>'No questions Found.',
        'no_match_password'=>'You current password does not match.',
    ],
    'status_code'=>[
        'INACTIVE'=>0,
        'ACTIVE'=>1,
        'BLOCKED'=>2,
    ],

    'logIn_status_code'=>[
        'NOT_LOGGED_IN'=>0,
        'LOGGED_IN'=>1,        
    ],

    'email_verification_type'=>[
        'SIGNUP'=>'signup',
        'FORGOT_PASSWORD'=>'forgot_password',
        'EMAIL_UPDATE'=>'email_updation', 
        'RESEND_CODE'=>'resend_code',      
    ],

    'age_validation'=>[
        'MIN_AGE'=>12,
        'MAX_AGE'=>100,        
    ],

    'invite_status_code'=>[
        'SENT'=>0,
        'ACCEPTED'=>1,
        'REJECTED'=>2,
    ],  
    
    'email_verification_status'=>[
        'NON_VERIFIED'=>0,
        'VERIFIED'=>1
    ],
    'gender'=>[
        '1'=>"male",
        '2'=>"female",
        '3'=>"other",
    ],    
   
    'role_type' => [
        'Admin'=>1,
        'Customer'=>2,        
    ],
   
    'payment_status_code' => [
        'Pending'=>1,
        'Completed'=>2,
        'Failed'=>3
    ],
    
    'device_type'=>[
        'IOS'=>1,
        'ANDROID'=>2
    ],
    'FALSE_VALUE'=>0,
    'TRUE_VALUE'=>1,  
   
];